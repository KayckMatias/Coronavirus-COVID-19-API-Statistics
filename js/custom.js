loading = $("#loading");
function getAPI(){
  $("#message").html("")
  $("#lastUpdate").html("")
  $("#province").html("")
  $("#countrytext").html("")
  $("#confirmed").html("")
  $("#deaths").html("")
  $("#recovered").html("")
  loading.removeClass("hide");
  var country = $("#country").val();
  $.ajax({
  type:'POST',
  url:'ajax/api.php',
  data:'c=' + country,
  success:function(data){
    loading.addClass("hide");
    dataok = JSON.parse(data);
    $("#message").html("Status: " + dataok.message)
    $("#lastUpdate").html("Última Atualização: " + dataok.lastUpdate)
    $("#province").html("Estado: " + dataok.province)
    $("#countrytext").html("País: " + dataok.country)
    $("#confirmed").html("Casos Confirmados: " + dataok.confirmed)
    $("#deaths").html("Mortes: " + dataok.deaths)
    $("#recovered").html("Recuperados: " + dataok.recovered)
  }
}); 
}