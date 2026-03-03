<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmergenceApp</title>
</head>
<body style="margin: 0px; background-color: #e6e6e6;">
    <div style="background-color: #6b3cb8; height: fit-content; padding: 5px; display: flex; justify-content: start;">
        <div>
            <img src="../../model/logo/Logo.jpeg" draggable="false" height="50px" width="50px">
        </div>
        <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;; font-size: 30px; color: white; font-weight: bold; margin-left: 5px; margin-top: 5px;">
            EmergenceApp
        </div>
    </div>

    <div style="height: 88vh; padding: 5px; display: flex; justify-content: start;">
        <div style="width: 52px;">
            <div class="sw_btn" data="home" style="border-radius: 10px; background-color: #6b3cb8; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/home.png" width="30px" draggable="false" style="margin: auto; filter: invert();">
            </div>

            <div class="sw_btn" data="chat" style="border-radius: 10px; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/chat.png" width="30px" draggable="false" style="margin: auto;">
            </div>

            <div class="sw_btn" data="notif" style="border-radius: 10px; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/notif.png" width="30px" draggable="false" style="margin: auto;">
            </div>

            <div class="sw_btn" data="setting" style="border-radius: 10px; margin-right: 4px; height: 45px; width: 45px; display: flex; margin-bottom: 5px; cursor: pointer;">
                <img src="../../model/ico/setting.png" width="30px" draggable="false" style="margin: auto;">
            </div>
        </div>

        <div style="padding: 5px; border-radius: 10px; width: 92%; background-color: white; border: #cecece solid 1px;" class="master">
            <!--master divisions...-->
            <div class="divs home_div"></div>
            <div class="divs chat_div"></div>
            <div class="divs notif_div"></div>
            <div class="divs setting_div"></div>

            <div class="profile_div"></div>
        </div>

        <div style="width: 52px;"></div>
    </div>

    <!--profile pic...-->
    <div style="position: fixed; transform: translate(4px, -50px); cursor: pointer;">
        <img src="../../model/ico/ac.png" height="50px" width="50px" style="border-radius: 50%;">
    </div>
</body>
</html>