//ha rákattintok akkor eltüntettem a kártyáknak a div-ét, és megjelenítem a másikat


$(document).ready(function () {
    $("#segitseg").click(function (e) {
        $(".cardBox").hide();
        $("#uzenettart").show();
    });
});
$(document).ready(function () {
    $("#uzemfal").click(function (e) {
        $(".cardBox").show();
        $("#uzenettart").hide();
    });
});
$(document).ready(function(){
    $("#gomb").click(function (e){
        $("#beszelgetes").show();
        $(".asd").hide();
    })
})

