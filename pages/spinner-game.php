<div id="appCapsule">

    <div class="header-large-title">
        <h1 class="title">Jouez et gagnez</h1>
        <h4 class="subtitle d-none">Apropos de votre restaurant</h4>
    </div>
    <div class="section full mt-3 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="hide-all">
                    <div id="fbalert" style="padding-bottom: 5px; visibility: hidden;">
                        <p style="display: none;">Only this <span id="today"> </span> we give our members 1 free spin
                            for a chance to win exclusive prizes!
                        </p>

                        <div style="padding-top: 5px; color: #9c9c9c; font-size: 11px; visibility: hidden;"> </div>
                    </div>



                    <div id="status" class="pop">
                        <center> </center>
                    </div>

                    <div id="spinner">
                        <img id="spinBG" src="https://i.imgur.com/QoJmccu.png">
                        <img id="spin" src="https://i.imgur.com/Mr5RRSI.png">
                        <img onclick="startSpin()" id="win" src="https://i.imgur.com/a9plWsH.png">
                        <img onclick="spin2()" id="win2" src="https://i.imgur.com/aBj26Wh.png">
                        <img id="winP" src="https://i.imgur.com/Yp7sPmv.png">
                        <img id="winP2" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win1" onclick="spin1()" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win3" onclick="spin3()" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win4" onclick="spin4()" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win5" onclick="spin5()" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win6" onclick="spin6()" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win7" onclick="spin7()" src="https://i.imgur.com/nHwgfIP.png">
                        <img id="win8" onclick="spin8()" src="https://i.imgur.com/nHwgfIP.png">
                    </div>

                    <center>
                        <h6 style="margin-top: 45px;">
                            <br><br>
                            <font color="#FFF" style="visibility:;">Vous avez 5 tentatatives de jouer <br> 3 de gagner
                                par jour.</font>
                        </h6>
                    </center>
                </div>
            </div>
        </div>
        <!-- Default Action Sheet Inset -->
        <div class="offcanvas offcanvas-bottom action-sheet inset" tabindex="-1" id="actionSheetDefaultInset">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Action Sheet Title</h5>
            </div>
            <div class="offcanvas-body">
                <ul class="action-button-list">
                    <li>
                        <a href="#" class="btn btn-list text-primary" data-bs-dismiss="offcanvas">
                            <span>Open</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-bs-dismiss="offcanvas">
                            <span>Delete</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-bs-dismiss="offcanvas">
                            <span>Copy</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-list" data-bs-dismiss="offcanvas">
                            <span>Share</span>
                        </a>
                    </li>
                    <li class="action-divider"></li>
                    <li>
                        <a href="#" class="btn btn-list text-danger" data-bs-dismiss="offcanvas">
                            <span>Close</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- * Default Action Sheet Inset -->
    </div>