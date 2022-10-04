<script>
  var form = document.getElementById('sheetdb-form');
  form.addEventListener("submit", e => {
    e.preventDefault();
    fetch(form.action, {
        method : "POST",
        body: new FormData(document.getElementById("sheetdb-form")),
    }).then(
        response => response.json()
    ).then((html) => {
      // you can put any JS code here
let my_url = "https://softorg.framer.website/thank";
window.onload = function (){ window.location.replace(my_url);
  // body...
}
    } ) ;
  } );
</script>
