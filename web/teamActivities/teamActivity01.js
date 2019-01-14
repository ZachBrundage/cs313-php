function clicked() {
    alert("Clicked!");
}
function changeColor() {
    var input = document.getElementById("colorInputJS").value;
    document.getElementById("div01").style.backgroundColor = input;
}

$(document).ready(function() {
    $("#colorChangeJQ").click(function() {
        var input = $("#colorInputJQ").val();
        $("#div02").css('background-color', input);
    });
    var visible = true;
    $("#fade").click(function() {
        if (visible) {
            $("#div03").fadeOut("slow");
            visible = false
        } 
        else {
            $("#div03").fadeIn("slow");
            visible = true;
        }
    });
});
