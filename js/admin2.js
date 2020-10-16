document.addEventListener('DOMContentLoaded', (e) => {

  $("#monitorSel button").click(function() {
    let api_url = "http://localhost/JobBoard/node/" + (this.value);
    var curTable = this.value;
    fetch(api_url, {
        method: 'GET',
        headers: {
          'content-type': 'application/json'
        }
      })
      .then(response => response.json())
      .then(json => {
        renderTable(json);
        $(document).off("click","button[name='del']").on("click", "button[name='del']", function() {
          let api_url = "http://localhost/JobBoard/node/" + curTable + "/" + this.value;
          console.log(api_url);
          fetch(api_url, {
            method: 'DELETE',
            headers: {
              'content-type': 'application/json'
            }
          })
          renderTable(json);
          return false;
        })
      });

      function renderTable(json){
        let table = document.querySelector("#monitoring");
        table.innerHTML = "";
        let data = Object.keys(json[0]);
        let verif = Object.keys(data).length - 1;
        console.log(verif);
        if (data[verif]== "Actions"){

        }else {
          data.push("Actions");
        }
        generateTableHead(table, data);
        let th = document.createElement("th");
        generateTable(table, json);
      }
  })

  function generateTableHead(table, data) {
    let thead = table.createTHead();
    let row = thead.insertRow();
    for (let key of data) {
      let th = document.createElement("th");
      let text = document.createTextNode(key);
      th.appendChild(text);
      row.appendChild(th);
    }
  }

  function generateTable(table, data) {
    let thead = table.createTBody();
    for (let element of data) {
      let id = element["id"]

      let row = thead.insertRow();
      element["Actions"] = ' ';
      for (key in element) {
        let cell = row.insertCell();
        let text = document.createTextNode(element[key]);
        if (key == "Actions") {
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
        } else {
          cell.appendChild(text);
        }

      }
    }
  }
})