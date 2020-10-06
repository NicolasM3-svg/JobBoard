document.addEventListener('DOMContentLoaded', (e) => {
  console.log('hello')

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

$("#butTest").click(function() {
 console.log("test");
 $.get("node/users", function(data) {
 console.log(data);
 alert(data)
}, "json")
})
})
