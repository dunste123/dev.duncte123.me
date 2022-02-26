function clock(canvasId){

  var ctx = document.getElementById(canvasId).getContext('2d'),
      canvas = ctx.canvas,
      cW = canvas.width,
      cH = canvas.height,
      interval,
	  running = false;

  ctx.strokeStyle = "#28d1fa";
  ctx.lineWidth = 17;
  ctx.lineCap = "round";
  ctx.shadowBlur = 15;
  ctx.shadowColor = "#28d1fa";

  function degToRad(degree){
      var factor = Math.PI/180;
      return degree*factor;
  }

  function renderTime(){

      var now = new Date(),
          today = now.toDateString(),
          time = now.toLocaleTimeString(),
          hours = now.getHours(),
          minutes = now.getMinutes(),
          seconds = now.getSeconds(),
          milliseconds = now.getMilliseconds(),
          newSeconds = seconds + (milliseconds/1000);


      //background
      gradient = ctx.createRadialGradient(cW/2, cH/2, 5, cW/2, cH/2, 300);
      gradient.addColorStop(0, "#09303a");
      gradient.addColorStop(1, 'black');
      // ctx.fillStyle = "333333";
      ctx.fillStyle = gradient;
      ctx.fillRect(0, 0, cW, cH);


      //hours
      ctx.beginPath();
    //   ctx.arc(cW/2, cH/2, (cH/2)-50, degToRad(270), degToRad((hours*15)-90));
      ctx.arc(cW/2, cH/2, (cH/2)-50, -degToRad(90), -degToRad((hours*15)-270), true);
      ctx.stroke();

      //minutes
      ctx.beginPath();
    //   ctx.arc(cW/2, cH/2, (cH/2)-80, degToRad(270), degToRad((minutes*6)-90));
      ctx.arc(cW/2, cH/2, (cH/2)-80, -degToRad(90), -degToRad((minutes*6)-270), true);
      ctx.stroke();

      //seconds
      ctx.beginPath();
    //   ctx.arc(cW/2, cH/2, (cH/2)-110, degToRad(270), degToRad((newSeconds*6)-90));
      ctx.arc(cW/2, cH/2, (cH/2)-110, -degToRad(90), -degToRad((newSeconds*6)-270), true);
      ctx.stroke();

      //date
      ctx.textAlign = "center"; 
      ctx.font = "25px Arial";
      ctx.fillStyle = "#28d1fa";
      ctx.fillText(today, cW/2, (cH/2) -5 );

      //time
      ctx.font = "15px Arial";
      ctx.fillText(time, cW/2, (cH/2)+35);
  }

  this.start = function(){
     interval = setInterval(renderTime, 40);
	 running = true;
  }

  this.stop = function(){
      clearInterval(interval);
	  running = false;
  }
  this.isRunning = function(){
	  return running;
  }
}
