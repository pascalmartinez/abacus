function changeSelect(event){
    var idC = $("#inputNiveau option:selected").val();

    $("#inputNiveau").load("php/action.php", "idc="+idC);
}

$(document).ready(function(){
    $("#inputNiveau").change(changeSelect);
});
