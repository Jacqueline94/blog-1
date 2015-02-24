function showPic(whichPic)
{
var source = whichPic.getAttribute('href');
var placeholder = document.getElementById('lalala');
placeholder.setAttribute("src",source);
}
