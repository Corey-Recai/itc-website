function startAudio() {
  if ($('#play-pause').html() == "play_arrow") {
    $('#itc-radio').trigger("play");
    $('#play-pause').html('pause');
    $('#play-pause-button').removeClass('pulse');
  } else {
    if ($('#play-pause').html() == "pause") {
      $('#itc-radio').trigger("pause");
      $('#play-pause').html('play_arrow');
      $('#play-pause-button').addClass('pulse');
    }
  }

  var aud = document.getElementById("itc-radio");
  aud.ontimeupdate = function () {
    myFunction()
  };

  function myFunction() {
    document.getElementById("position").innerHTML = "00:" + ('0' + Math.floor(aud.currentTime)).slice(-2);
    document.getElementById("seekbar").max = Math.floor(aud.duration);
    document.getElementById("seekbar").value = Math.floor(aud.currentTime);
    if (aud.ended) {
      document.getElementById("seekbar").max = 0;
      document.getElementById('play-pause').innerHTML = "play_arrow";
      document.getElementById("position").innerHTML = "00:00";
    }
  }
}

function muteAudio() {
  var bool = $("#itc-radio").prop("muted");
  if ($('#muted').html() == "volume_up") {
    $('#itc-radio').prop("muted", !bool);
    $('#muted').html('volume_off');
  } else {
    if ($('#muted').html() == "volume_off") {
      $('#itc-radio').prop("muted", !bool);
      $('#muted').html('volume_up');
    }
  }
}