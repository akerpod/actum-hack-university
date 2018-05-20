var clock;
var timestap_ms_hack = (new Date(hack_time).getTime() - $.now()) + "";
var timestap_ss_hack =  timestap_ms_hack.substring(0, timestap_ms_hack.length - 4);

clock = $('.your-clock').FlipClock({
  clockFace: 'DailyCounter',
  autoStart: false,
  callbacks: {
    stop: function() {

    }
  }
});

clock.setTime(timestap_ss_hack);
clock.setCountdown(true);
clock.start();
