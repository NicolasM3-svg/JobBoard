document.addEventListener('DOMContentLoaded', (e) => {

  fetch("node", {
      method: 'GET',
      headers:{'content-type': 'application/json'}
  })
  .then(response => response.json())
  .then(json => {
    console.log(json);
    if (json.userType == 0 || json.userType == 1 || json.userType == 2) {
      let userType = json.userType;
      console.log(userType);
      if (userType == 0) {
        $(".navbar-nav button,.navbar-nav a ").hide();
        let navbar = $(".navbar-nav");
        var panel = document.createElement("button");
        var paneltxt = document.createTextNode('Panel admin');
        panel.setAttribute("id", "panel");
        panel.setAttribute("class", "btn grey-color Subt2");
        panel.appendChild(paneltxt);
        $(".navbar-nav").append(panel);
        var logout = document.createElement("button");
        var logouttxt = document.createTextNode('Se déconnecter');
        logout.setAttribute("id", "logout");
        logout.setAttribute("class", "btn grey-color Subt2");
        logout.appendChild(logouttxt);
        $(".navbar-nav").append(logout);
      }
    }
  })


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
        window.location.href="/JobBoard";
      })
  })





  $(".modal").on("show.bs.modal", function(){
    if ( !$(this).parent().is("body")) {
      $(this).appendTo("body");
    }

    $("body").children().not(this).addClass("blur");
  })
  .on("hide.bs.modal", function() {
    $("body").children().not(this).removeClass("blur");
  })


  $("#submit").click(function() {
    var inscription_form = document.forms.inscription;
    if (inscription_form.prenom.value != "" && inscription_form.nom.value != "" && inscription_form.email.value != "" && inscription_form.mdp.value != "" && inscription_form.mdpverif.value != "" && (inscription_form.type.value == 1 || inscription_form.type.value == 2)){
    if (inscription_form.mdp.value == inscription_form.mdpverif.value ) {
      var inscription = $("#inscription input[name!=mdpverif],#inscription select").serialize()
        console.log(inscription);
        $.post("node/users", inscription, function(data) {
        console.log(data);
      }, "json")
    }else { alert("Les deux mots de passes ne correspondent pas") }
  }else {alert("Le formulaire doit être entièrement rempli pour terminer votre inscription")}
  })

  $("#connectid").click(function() {
    var email = $("#email3").val();
    var mdp = $("#password3").val();

    let dataObject = {
      email: email,
      mdp: mdp
    };

    let dataObjectJson = JSON.stringify(dataObject);

    let api_url = "http://localhost/JobBoard/node/sessions/connect";
    fetch(api_url, {
        method: 'POST',
        body: dataObjectJson,
        headers:{'content-type': 'application/json'}
    })

    .then(response => response.json())
    .then(json => {
      if (json.type == 0) {
        console.log("Cet utilisateur est un admin");
          window.location.href="/JobBoard";
      } else if (json.type == 1) {
        console.log("Cet utilisateur est un recruteur");
        window.location.href="/JobBoard";
      }else if (json.type == 2) {
        console.log("Cet utilisateur est un candidat");
          window.location.href="/JobBoard";
      }else {
        console.log("il y a un bug dans la matrice");
      };
    });
  })
})
