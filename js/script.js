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
  console.log('Hi')
  var inscription = $("form").serialize()
  console.log(inscription);
  $.post("/users", inscription, function(data) {
    // alert(data)
  }, "html")
})
})
