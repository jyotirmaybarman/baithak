<>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videosdk.live RTC</title>
  </head>
  <body>
        <div class="creds" style="display:none;">
            <input id="apikey" type="text" value="{{ $apikey }}">
            <input id="username" type="text" value="{{ Auth::user()->name }}">
        </div>
        
        <script>
            let script = document.createElement("script");
            script.type = "text/javascript";
            const apikey = document.querySelector('#apikey').value;
            const username = document.querySelector('#username').value;
            script.addEventListener("load", function (event) {
                //Get URL query parameters
                const url = new URLSearchParams(window.location.search);
              const config = {
                name: username,
                meetingId: url.get("id"),
                apiKey: apikey,
          
                containerId: null,
          
                micEnabled: true,
                webcamEnabled: true,
                participantCanToggleSelfWebcam: true,
                participantCanToggleSelfMic: true,
                participantCanLeave: true,
                redirectOnLeave: "http://localhost:8000",
          
                chatEnabled: true,
                screenShareEnabled: true,

                joinScreen: {
                    visible: true,
                    title: "Meeting Link",
                    meetingUrl: "http://"+window.location.host+"/meeting?"+url
                },
          
                /*
          
               Other Feature Properties
                
                */
              };
          
              const meeting = new VideoSDKMeeting();
              meeting.init(config);
            });
          
            script.src =
              "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.3/rtc-js-prebuilt.js";
            document.getElementsByTagName("head")[0].appendChild(script);
          </script>
    </body>
</html>