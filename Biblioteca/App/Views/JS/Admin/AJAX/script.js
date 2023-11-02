
$(document).ready(function() {
    $("#1").click(function() {
        $.ajax({
            url: "./Views/modules/Admin/Pages/1.php",
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
            url: "./Views/modules/Admin/Pages/2.php",
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
    $("#3").click(function() {
        $.ajax({
            url: "./Views/modules/Admin/Pages/3.php",
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
    $("#4").click(function() {
        $.ajax({
            url: "./Views/modules/Admin/Pages/4.php",
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
    $("#5").click(function() {
        $.ajax({
            url: "./Views/modules/Admin/Pages/5.php",
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
