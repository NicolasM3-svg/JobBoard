document.addEventListener('DOMContentLoaded', (e) => {
  var curTable = renderTable("users");
  var form = {};

  $("#monitorSel button").click(function() {
    renderTable(this.value);
  });

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
      .then(json => {if (json) {
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
    form = {};
    for (let key of data) {
      let th = document.createElement("th");
      let text = document.createTextNode(key);
      form[key]= key;
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
      element["Actions"] = ' ';
      for (key in element) {
        let cell = row.insertCell();
        let text = document.createTextNode(element[key]);
        if (key == "Actions") {
          console.log(element.id);
          if (element.id == "id"){
            var addEntry = document.createElement("button");
            var addEntrytxt = document.createTextNode('Ajouter');
            addEntry.appendChild(addEntrytxt);
            addEntry.setAttribute("name", "add");
            cell.appendChild(addEntry);
          }else{
            var supr = document.createElement("button");
            var mod = document.createElement("button");
            var suprtxt = document.createTextNode('Supprimer');
            var modtxt = document.createTextNode('Modifier');
            supr.setAttribute("value", id)
            supr.setAttribute("name", "del")
            supr.appendChild(suprtxt);
            mod.appendChild(modtxt);
            cell.appendChild(supr);
            cell.appendChild(mod);
          }

        } else {
          cell.appendChild(text);
        }

      }
    }
  }


})