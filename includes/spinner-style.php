<style type="text/css">
@keyframes pop {
    from {
        transform: scale(0.95)
    }

    50% {
        transform: scale(1)
    }

    to {
        transform: scale(0.95)
    }
}

@-webkit-keyframes pop {
    from {
        -webkit-transform: scale(0.95)
    }

    50% {
        -webkit-transform: scale(1)
    }

    to {
        -webkit-transform: scale(0.95)
    }
}

#spinner {
    /*position: relative;*/
    margin: 1em auto 0;
    width: 300px;
    /*overflow: hidden*/
}

@media(min-width:360px) {
    #spinner {
        width: 340px
    }
}

#spinBG {
    z-index: 1;
    width: 315px
}

@media(min-width:360px) {
    #spinBG {
        width: 262px;
        position: relative;
        left: 2em;
    }
}

.bi-justify::before {
    content: "\f42a";
    font-size: 175%;
}

#spin {
    z-index: 2;
    position: absolute;
    top: 0px;
    left: 22px;
    width: 87%
}

@media(min-width:360px) {
    #spin {
        /*width: 262px*/
    }
}

#win,
#win2,
#win3,
#winP,
#winP1,
#winP2,
#win1,
#win4,
#win5,
#win6,
#win7,
#win8 {
    position: absolute;
    z-index: 3;
    width: 65px;
    /*left: 161px;
        top: 140px;*/
    left: 41.5%;
    top: 37.5%;
}

@media(width: 320px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px left: 42.5%;
        top: 28.5%;
    }

    #spinBG {
        z-index: 1;
        width: 200px;
        position: relative;
        left: 2em;
        top: 2px;
        }
}

@media(min-width: 360px) and (max-width: 600px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px;
        left: 42%;
        top: 29%;
    }
}

@media(width: 393px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px;
        left: 42.5%;
        top: 32%;
    }
}

@media(width: 412px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px;
        left: 42.5%;
        top: 33.5%;
    }
}

@media(width: 414px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px !important;
        left: 42% !important;
        top: 36% !important;
    }
}

@media(width: 428px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px;
        left: 42.5% !important;
        top: 34.5%;
    }
}

@media(width: 375px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px !important;
        left: 41.5% !important;
        top: 31% !important;
    }
}

@media(width: 390px) {

    #win,
    #win2,
    #win3,
    #winP,
    #winP1,
    #winP2,
    #win1,
    #win4,
    #win5,
    #win6,
    #win7,
    #win8 {
        width: 65px;
        left: 41.5% !important;
        top: 32% !important;
    }
}

#win2,
#win3,
#winP,
#winP1,
#winP2,
#win1,
#win4,
#win5,
#win6,
#win7,
#win8 {
    display: none
}

.spinAround {
    -webkit-animation: spin 6.6s;
    -moz-animation: spin 6.6s;
    -o-animation: spin 6.6s;
    animation: spin 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

@-webkit-keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(3110deg);
        transform: rotate(3110deg)
    }

    95% {
        -webkit-transform: rotate(3108deg);
        transform: rotate(3108deg)
    }

    100% {
        -webkit-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }
}

@-moz-keyframes spin {
    0% {
        -moz-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -moz-transform: rotate(3110deg);
        transform: rotate(3110deg)
    }

    95% {
        -moz-transform: rotate(3108deg);
        transform: rotate(3108deg)
    }

    100% {
        -moz-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }
}

@-o-keyframes spin {
    0% {
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -o-transform: rotate(3110deg);
        transform: rotate(3110deg)
    }

    95% {
        -o-transform: rotate(3108deg);
        transform: rotate(3108deg)
    }

    100% {
        -o-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }
}

@keyframes spin1 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(1110deg);
        -moz-transform: rotate(1110deg);
        -o-transform: rotate(1110deg);
        transform: rotate(1110deg)
    }

    95% {
        -webkit-transform: rotate(1108deg);
        -moz-transform: rotate(1108deg);
        -o-transform: rotate(1108deg);
        transform: rotate(1108deg)
    }

    100% {
        -webkit-transform: rotate(1109deg);
        -moz-transform: rotate(1109deg);
        -o-transform: rotate(1109deg);
        transform: rotate(1109deg)
    }
}

@keyframes spin2 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(2110deg);
        -moz-transform: rotate(2110deg);
        -o-transform: rotate(2110deg);
        transform: rotate(2110deg)
    }

    95% {
        -webkit-transform: rotate(2108deg);
        -moz-transform: rotate(2108deg);
        -o-transform: rotate(2108deg);
        transform: rotate(2108deg)
    }

    100% {
        -webkit-transform: rotate(2109deg);
        -moz-transform: rotate(2109deg);
        -o-transform: rotate(2109deg);
        transform: rotate(2109deg)
    }
}

@keyframes spin {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(3110deg);
        -moz-transform: rotate(3110deg);
        -o-transform: rotate(3110deg);
        transform: rotate(3110deg)
    }

    95% {
        -webkit-transform: rotate(3108deg);
        -moz-transform: rotate(3108deg);
        -o-transform: rotate(3108deg);
        transform: rotate(3108deg)
    }

    100% {
        -webkit-transform: rotate(3109deg);
        -moz-transform: rotate(3109deg);
        -o-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }
}

@keyframes spin4 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(4110deg);
        -moz-transform: rotate(4110deg);
        -o-transform: rotate(4110deg);
        transform: rotate(4110deg)
    }

    95% {
        -webkit-transform: rotate(4108deg);
        -moz-transform: rotate(4108deg);
        -o-transform: rotate(4108deg);
        transform: rotate(4108deg)
    }

    100% {
        -webkit-transform: rotate(4109deg);
        -moz-transform: rotate(4109deg);
        -o-transform: rotate(4109deg);
        transform: rotate(4109deg)
    }
}

@keyframes spin5 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(5110deg);
        -moz-transform: rotate(5110deg);
        -o-transform: rotate(5110deg);
        transform: rotate(5110deg)
    }

    95% {
        -webkit-transform: rotate(5108deg);
        -moz-transform: rotate(5108deg);
        -o-transform: rotate(5108deg);
        transform: rotate(5108deg)
    }

    100% {
        -webkit-transform: rotate(5109deg);
        -moz-transform: rotate(5109deg);
        -o-transform: rotate(5109deg);
        transform: rotate(5109deg)
    }
}

@keyframes spin6 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(6110deg);
        -moz-transform: rotate(6110deg);
        -o-transform: rotate(6110deg);
        transform: rotate(6110deg)
    }

    95% {
        -webkit-transform: rotate(6108deg);
        -moz-transform: rotate(6108deg);
        -o-transform: rotate(6108deg);
        transform: rotate(6108deg)
    }

    100% {
        -webkit-transform: rotate(6109deg);
        -moz-transform: rotate(6109deg);
        -o-transform: rotate(6109deg);
        transform: rotate(6109deg)
    }
}

@keyframes spin7 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(7110deg);
        -moz-transform: rotate(7110deg);
        -o-transform: rotate(7110deg);
        transform: rotate(7110deg)
    }

    95% {
        -webkit-transform: rotate(7108deg);
        -moz-transform: rotate(7108deg);
        -o-transform: rotate(7108deg);
        transform: rotate(7108deg)
    }

    100% {
        -webkit-transform: rotate(7109deg);
        -moz-transform: rotate(7109deg);
        -o-transform: rotate(7109deg);
        transform: rotate(7109deg)
    }
}

@keyframes spin8 {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    90% {
        -webkit-transform: rotate(8110deg);
        -moz-transform: rotate(8110deg);
        -o-transform: rotate(8110deg);
        transform: rotate(8110deg)
    }

    95% {
        -webkit-transform: rotate(8108deg);
        -moz-transform: rotate(8108deg);
        -o-transform: rotate(8108deg);
        transform: rotate(8108deg)
    }

    100% {
        -webkit-transform: rotate(8109deg);
        -moz-transform: rotate(8109deg);
        -o-transform: rotate(8109deg);
        transform: rotate(8109deg)
    }
}

.spinAround2 {
    -webkit-animation: spinTwo 6.6s;
    -moz-animation: spinTwo 6.6s;
    -o-animation: spinTwo 6.6s;
    animation: spinTwo 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

.spinAround3 {
    -webkit-animation: spin3 6.6s;
    -moz-animation: spin3 6.6s;
    -o-animation: spin3 6.6s;
    animation: spin3 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

.spinAround1 {
    -webkit-animation: spin1 6.6s;
    -moz-animation: spin1 6.6s;
    -o-animation: spin1 6.6s;
    animation: spin1 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}


.spinAround4 {
    -webkit-animation: spin4 6.6s;
    -moz-animation: spin4 6.6s;
    -o-animation: spin4 6.6s;
    animation: spin4 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

.spinAround5 {
    -webkit-animation: spin5 6.6s;
    -moz-animation: spin5 6.6s;
    -o-animation: spin5 6.6s;
    animation: spin5 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

.spinAround6 {
    -webkit-animation: spin6 6.6s;
    -moz-animation: spin6 6.6s;
    -o-animation: spin6 6.6s;
    animation: spin6 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

.spinAround7 {
    -webkit-animation: spin7 6.6s;
    -moz-animation: spin7 6.6s;
    -o-animation: spin7 6.6s;
    animation: spin7 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}

.spinAround8 {
    -webkit-animation: spin8 6.6s;
    -moz-animation: spin8 6.6s;
    -o-animation: spin8 6.6s;
    animation: spin8 6.6s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    -o-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-iteration-count: 1;
    -moz-animation-iteration-count: 1;
    -o-animation-iteration-count: 1;
    animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -moz-animation-direction: normal;
    -o-animation-direction: normal;
    animation-direction: normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards
}



@-webkit-keyframes spinTwo {
    0% {
        -webkit-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }

    90% {
        -webkit-transform: rotate(6314deg);
        transform: rotate(6314deg)
    }

    95% {
        -webkit-transform: rotate(6312deg);
        transform: rotate(6312deg)
    }

    100% {
        -webkit-transform: rotate(6313deg);
        transform: rotate(6313deg)
    }
}

@-moz-keyframes spinTwo {
    0% {
        -moz-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }

    90% {
        -moz-transform: rotate(6314deg);
        transform: rotate(6314deg)
    }

    95% {
        -moz-transform: rotate(6312deg);
        transform: rotate(6312deg)
    }

    100% {
        -moz-transform: rotate(6313deg);
        transform: rotate(6313deg)
    }
}

@-o-keyframes spinTwo {
    0% {
        -o-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }

    90% {
        -o-transform: rotate(6314deg);
        transform: rotate(6314deg)
    }

    95% {
        -o-transform: rotate(6312deg);
        transform: rotate(6312deg)
    }

    100% {
        -o-transform: rotate(6313deg);
        transform: rotate(6313deg)
    }
}

@keyframes spinTwo {
    0% {
        -webkit-transform: rotate(3109deg);
        -moz-transform: rotate(3109deg);
        -o-transform: rotate(3109deg);
        transform: rotate(3109deg)
    }

    90% {
        -webkit-transform: rotate(6314deg);
        -moz-transform: rotate(6314deg);
        -o-transform: rotate(6314deg);
        transform: rotate(6314deg)
    }

    95% {
        -webkit-transform: rotate(6312deg);
        -moz-transform: rotate(6312deg);
        -o-transform: rotate(6312deg);
        transform: rotate(6312deg)
    }

    100% {
        -webkit-transform: rotate(6313deg);
        -moz-transform: rotate(6313deg);
        -o-transform: rotate(6313deg);
        transform: rotate(6313deg)
    }
}

ol,
ul {
    list-style: none
}

.clearfix:after {
    content: " ";
    display: block;
    height: 0;
    clear: both;
    overflow: hidden;
    visibility: hidden
}

.clearfix {
    display: block
}

.wrapper {
    background-color: #fff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 7px;
    width: 96%;
    margin: 0 auto 14px;
    border: 1px solid #c4cde1;
    border-top: 0;
    max-width: 414px
}

.logo {
    display: block;
    margin: 4px auto;
}

.txt {
    padding: 5px 6px;
    line-height: 18px;
    text-align: center
}

.bottom {
    width: 92%;
    margin: 20px auto 0;
    border: 1px solid #ccc;
    background-color: #f2f2f2;
    padding: 5px;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px
}

.now {
    text-align: center;
    padding-top: 5px
}

#countdown {
    font-weight: bold;
}

.rules {
    color: #1b316c;
    padding: 4px 5px;
    line-height: 22px
}


/* .title {
        text-align: center;
        font-weight: 700;
        font-size: 26px
    } */

.show-all {
    display: none;
}

.now2 {
    padding-top: 10px;
    font-weight: bold;
}

.card {
    margin-bottom: 0rem;
    border: none;
    margin-top: 4em;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"
    integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />