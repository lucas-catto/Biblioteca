
$(document).ready(function() {
    $("#1").click(function() {
        $.ajax({
            url: "./Views/modules/User/Pages/1.php",
            method: "POST",
            success: function(data) {
                $("#main").html(data);
            },
            error: function() {
                alert("Erro ao carregar o novo conteúdo.");
            }
        });
    });
});

$(document).ready(function() {
    $("#2").click(function() {
        $.ajax({
            url: "./Views/modules/User/Pages/2.php",
            method: "POST",
            success: function(data) {
                $("#main").html(data);
            },
            error: function() {
                alert("Erro ao carregar o novo conteúdo.");
            }
        });
    });
});
