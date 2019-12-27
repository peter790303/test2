'use strict';

var a="";
var b="";
var c="";
(function(){
	// http://stackoverflow.com/questions/4083351/what-does-jquery-fn-mean
	var $ = function( elem ){
		if (!(this instanceof $)){
      return new $(elem);
		}
		console.log('1');
		console.log(this);
		
		this.el = document.getElementById( elem );
		};
	window.$ = $;
	$.prototype = {
		onChange : function( callback ){
			this.el.addEventListener('change', callback );
			a =this.el.parentElement.parentNode;
			b =a.querySelectorAll("div > img")[0];
			c =this.el.parentElement;
			return this;
		}
	};
})();
function runUpload( file ) {
	// http://stackoverflow.com/questions/12570834/how-to-preview-image-get-file-size-image-height-and-width-before-upload
	if( 
		file.type === 'image/png'  || 
		file.type === 'image/jpg'  || 
		file.type === 'image/jpeg' ||
		file.type === 'image/gif'  ||
		file.type === 'image/bmp'  ){
		var reader = new FileReader(),
			image = new Image();
	
		
		reader.readAsDataURL( file );
		reader.onload = function( _file ){
			// console.log(this);
			// console.log(window.b);
			console.log(window.file_img.parentElement.parentNode.querySelectorAll("div > img")[0]);
			console.log(window.file_img.parentElement);
		var img_div = window.file_img.parentElement;
		var img_tag = window.file_img.parentElement.parentNode.querySelectorAll("div > img")[0];
			// console.log(window.b.parentNode.querySelectorAll(".userActions")[0]);
			
		img_tag.src=this.result;
		img_tag.style.width="100%"; 
		img_tag.style.height="100%";

		img_div.style.display="none";		
		// window.img_a123.parentElement.style.display="flex";
		// window.img_a123.parentElement.style.alignItems="center";
		
		} // END reader.onload()
	} // END test if file.type === image
}

function a78(){
	if( window.FileReader ){

		$('fileUpload').onChange(function(){ runUpload( this.files[0] ); });
	
		
	}
	
};
