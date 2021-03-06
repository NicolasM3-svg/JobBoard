document.addEventListener('DOMContentLoaded', (e) => {
  var curTable = renderTable("users");
  var form = {};

  $(document).on("click", "#logout", function() {
    let api_url = "http://localhost/JobBoard/node/destroy"
    console.log(api_url);
    fetch(api_url, {
        method: 'GET',
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(function() {
        window.location.href = "/JobBoard";
      })
  })

  $("#monitorSel button").click(function() {
    renderTable(this.value);
  });

  $(document).off("mouseover mouseleave", "tbody tr[value!='id']").on("mouseenter mouseleave", "tbody tr[value!='id']", function() {
    $(this).toggleClass( "row-active" );

  })

  $(document).off("click", "tbody td").on("click", "tbody td", function() {
    let cell = $(this);
    if (! cell.find('input').length) {
      if (! cell.find('button').length > 0) {
        let addInput = document.createElement("input");
        let inputVal = cell[0].innerText;
        let inputName = cell[0].attributes.name.nodeValue;
        console.log(cell);
        addInput.setAttribute("class", "inputadmin input-group-text");
        addInput.setAttribute("value", inputVal);
        addInput.setAttribute("name", inputName);
        cell[0].innerHTML = "";
        cell.append(addInput);
      }
    }

  })

  $(document).off("click", "button[name='del']").on("click", "button[name='del']", function() {
    let api_url = "http://localhost/JobBoard/node/" + curTable + "/" + this.value;
    console.log(api_url);
    fetch(api_url, {
        method: 'DELETE',
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(function() {
        let i = 0;
        while (i < 2) {
          renderTable(curTable)
          i++
        }
        i = 0;
      })
  })

  $(document).off("click", "button[name='upd']").on("click", "button[name='upd']", function() {
    let rowId = $(this).val();
    let api_url = "http://localhost/JobBoard/node/"+ curTable +"/"+ rowId;
    console.log(api_url);
    console.log(rowId);
    var objForm = {};
    let addForm = $("tr[value="+rowId+"] input");
    [].map.call(addForm, function(input) {
      if (input.name == 'mdp') {

      }
      objForm[input.name] = input.value;
    })
    console.log(objForm);
    var datatosend = JSON.stringify(objForm);
    fetch(api_url, {
        method: 'PUT',
        body: datatosend,
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(function() {
        let i = 0;
        while (i < 2) {
          renderTable(curTable)
          i++
        }
        i = 0;
      })
  })

  $(document).off("click", "button[name='add']").on("click", "button[name='add']", function() {
    let api_url = "http://localhost/JobBoard/node/" + curTable;
    console.log(api_url);
    var objForm = {};
    let addForm = $("input[form=dbAdd]");
    [].map.call(addForm, function(input) {
      objForm[input.name] = input.value;
    })
    console.log(objForm);
    var datatosend = JSON.stringify(objForm);
    fetch(api_url, {
        method: 'POST',
        body: datatosend,
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(function() {
        let i = 0;
        while (i < 2) {
          renderTable(curTable)
          i++
        }
        i = 0;
      })
  })


  function renderTable(table) {
    let api_url = "http://localhost/JobBoard/node/" + table;
    curTable = table;
    console.log("dans le render avant createTable");
    fetch(api_url, {
        method: 'GET',
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(response => response.json())
      .then(json => {
        if (json) {
          console.log(json)
        } else {
          console.log("test");
        };
        createTable(json);
      })
    return curTable;
  }

  function createTable(json) {
    let table = document.querySelector("#monitoring");
    table.innerHTML = "";
    let data = Object.keys(json[0]);
    let verif = Object.keys(data).length - 1;
    console.log("dans le createTable");
    if (data[verif] == "Actions") {
      console.log("test");
    } else {
      data.push("Actions");
    }
    generateTableHead(table, data);
    let th = document.createElement("th");
    generateTable(table, json);
  }

  function generateTableHead(table, data) {
    let thead = table.createTHead();
    let row = thead.insertRow();
    thead.setAttribute("class", 'thead-admin text-white')
    form = {};
    form['isForm'] = true;
    for (let key of data) {
      let th = document.createElement("th");
      let text = document.createTextNode(key);
      form[key] = key;
      th.appendChild(text);
      row.appendChild(th);
    }
  }

  function generateTable(table, data) {
    let thead = table.createTBody();
    data[Object.keys(data).length] = form;
    for (let element of data) {
      let id = element["id"]
      let row = thead.insertRow();
      row.setAttribute("value", id)
      let verifEl = document.createTextNode(element);
      console.log(verifEl);
      element["Actions"] = ' ';
      if (!element.hasOwnProperty('isForm')) {
        for (key in element) {
          let cell = row.insertCell();
          let text = document.createTextNode(element[key]);
          if (key == "Actions" && Number.isInteger(id)) {
            console.log(element.id);
            var supr = document.createElement("button");
            var mod = document.createElement("button");
            var suprtxt = document.createTextNode('Supprimer');
            var modtxt = document.createTextNode('Modifier');
            supr.setAttribute("value", id)
            supr.setAttribute("name", "del")
            supr.setAttribute("class", "mx-auto d-block btn btn-danger")
            supr.appendChild(suprtxt);
            mod.setAttribute("value", id)
            mod.setAttribute("name", "upd")
            mod.setAttribute("class", "mx-auto d-block btn btn-success")
            mod.appendChild(modtxt);
            cell.appendChild(supr);
            cell.appendChild(mod);
          } else if (element[key] == ""){
            let text = document.createTextNode("null");
            cell.setAttribute("name", key);
            cell.appendChild(text);

          }else {
            cell.setAttribute("name", key);
            cell.appendChild(text);

          }
        }
      } else {
        delete element.isForm;
        for (key in element) {
          let cell = row.insertCell();
          let text = document.createTextNode(element[key]);
          if (key == "Actions") {
            console.log(element.id);
            let addEntry = document.createElement("button");
            let addEntrytxt = document.createTextNode('Ajouter');
            addEntry.appendChild(addEntrytxt);
            addEntry.setAttribute("name", "add");
            addEntry.setAttribute("class", "btn btn-primary");
            cell.appendChild(addEntry);
          } else if (key == 'mdp') {
            let input = document.createElement("input");
            input.setAttribute("name", key);
            input.setAttribute("placeholder", key);
            input.setAttribute("type", "password");
            input.setAttribute("form", "dbAdd");
            input.setAttribute("class", "inputadmin input-group-text");
            cell.appendChild(input);
          } else if (key == 'email') {
            let input = document.createElement("input");
            input.setAttribute("name", key);
            input.setAttribute("placeholder", key);
            input.setAttribute("type", "email");
            input.setAttribute("form", "dbAdd");
            input.setAttribute("class", "inputadmin input-group-text");
            cell.appendChild(input);
          } else if (key == 'id') {
            cell.appendChild(text);
          } else {
            let input = document.createElement("input");
            input.setAttribute("name", key);
            input.setAttribute("placeholder", key);
            input.setAttribute("form", "dbAdd");
            input.setAttribute("class", "inputadmin input-group-text");
            cell.appendChild(input);
          }
        }
      }
    }
  }
})
