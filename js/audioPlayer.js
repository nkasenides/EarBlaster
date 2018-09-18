/***** CUSTOMIZED AUDIO PLAYER *****/
window.onload = function() {
	var audio = document.getElementById('audioElement');
	var audioControl = document.getElementById('audioControl');
	
	audioControl.onclick = function () {
   		var pause = audioControl.innerHTML === 'PAUSE';
   		audioControl.innerHTML = pause ? 'PLAY' : 'PAUSE';
    	var method = pause ? 'pause' : 'play';
    	audio[method]();
    	return false;
	};
	
	audio.addEventListener("ended", function() {
    	audio.currentTime = 0;
    	var pause = audioControl.innerHTML === 'PAUSE';
   		audioControl.innerHTML = pause ? 'PLAY' : 'PAUSE';
    	var method = pause ? 'pause' : 'play';
    	audio[method]();
	 });

};