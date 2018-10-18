var modal = document.getElementById('myModal');
var modalImg = document.getElementById("modalImg");
var captionText = document.getElementById("caption");

var arrImg = document.getElementsByClassName('albumPictures');
for(var i = 0; i<arrImg.length;i++)
{
	arrImg[i].onclick = function()
	{
		modal.style.display = "block";
		var currentImgSrc = this.querySelector('img').src;
		modalImg.src = currentImgSrc;
	}
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
    modal.style.display = "none";
}