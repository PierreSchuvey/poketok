$(document).ready(function(){
$("video").css("display","none");
$("video2").css("display","none");
$("#snowBox").css("display","none");
$("#rolling").on("click",function() {
  if($("#nbDices").val() == "Pokémon"){
        $('#imgLeft').attr('src','https://pngimg.com/uploads/pokeball/pokeball_PNG8.png')
        $('#imgRight').attr('src','https://pngimg.com/uploads/pokeball/pokeball_PNG8.png')
  }
  if($("#nbDices").val() == "Négatif"){
        $('body').addClass('reverse');
        $('.reverse').css('filter','invert(1)');
  }
var nbSix = 0;
var nbOne = 0;
$( ".dice" ).remove();
$( ".nbMain" ).remove();
$( ".diceTotal" ).remove();
  var x = 0;
  var sum = 0;
  var nbDices = $("#nbDices").val();
  var maxRange = 6*nbDices;
  for(x=0;x<nbDices;x++) {
    var valueDice = Math.floor(Math.random() * 6) + 1;
    if(valueDice == 1){
      $("#resultat").append('<div class="dice"><p class="textDice"><span style="color:red">'+valueDice+'</span></p></div>');
    }else if (valueDice == 6) {
      $("#resultat").append('<div class="dice"><p class="textDice"><span style="color:green">'+valueDice+'</span></p></div>');
    }else{
      $("#resultat").append('<div class="dice"><p class="textDice"><span>'+valueDice+'</span></p></div>');
    }
    sum = sum + valueDice;
    if(valueDice == 6){
      nbSix = nbSix +1;
    }
    if(valueDice == 1){
      nbOne = nbOne +1;
    }
  }
  var pourcentage = (sum / maxRange) * 100;
if(pourcentage.toFixed(2) <= 30.00){
  $("#total").append('<div class="diceTotal"><p class="textDiceTotal">'+sum+'/'+maxRange+'<br><span style="color:red">'+pourcentage.toFixed(2)+'%</span></p></div>');
}else if (pourcentage.toFixed(2) >= 85.00) {
  $("#total").append('<div class="diceTotal"><p class="textDiceTotal">'+sum+'/'+maxRange+'<br><span style="color:green">'+pourcentage.toFixed(2)+'%</span></p></div>');
}else{
  $("#total").append('<div class="diceTotal"><p class="textDiceTotal">'+sum+'/'+maxRange+'<br>'+pourcentage.toFixed(2)+'%</p></div>');
}

  $("#nbSix").append('<p class="nbMain">Nombre de Six : <span style="font-weight:bold">'+nbSix+'</span>');
  $("#nbOne").append('<p class="nbMain">Nombre de Un : <span style="font-weight:bold">'+nbOne+'</span>');
});
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
n = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            $(".diceText").css('background-color','blue');
            $('#imgLeft').attr('src','../assets/images/flocon.png')
            $('#imgRight').attr('src','../assets/images/flocon.png')
            $("body").css("background","radial-gradient(ellipse at bottom, #1b2735 0%");
            $("#snowBox").css("display","block");
            $("#video").css("display","block");
            $("#video")[0].autoplay = true;
            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
})
});
