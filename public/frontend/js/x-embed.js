var link = document.createElement('link');
link.href = 'https://staging.xenome.app/frontend/css/x-embed.css';
link.rel = 'stylesheet';
document.getElementsByTagName('head')[0].appendChild(link);

var div = document.createElement('div');
div.className = 'fs-box';
div.innerHTML = '<div class="fs-box"><a onclick="closeFS()" href="#" class="bck"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a><iframe class="fs-iframe" name="myiframe" width="640" height="640" frameborder="0" marginwidth="0" marginheight="0">Loading</iframe></div>'
document.getElementsByTagName('body')[0].appendChild(div);

var elem = document.getElementsByClassName("x-campaign");


for(var i = 0; i < elem.length; i++)
{
  var dataAttribute = elem[i].getAttribute('data-id');

  // Get HTML content
  var html = elem[i].innerHTML;

  // Set HTML content
  elem[i].innerHTML = '<a onclick="openFS(event,this)" href="https://staging.xenome.app/s/' + dataAttribute + '/start?embed=1" target="myiframe">Open</a><iframe src="https://staging.xenome.app/s/' + dataAttribute + '/start?embed=1" width="640" height="640" frameborder="0" marginwidth="0" marginheight="0">Loading</iframe>';

function openFS(e,el) {
  e = e || window.event;
  targList = document.getElementsByClassName("fs-box");
  document.getElementsByClassName("fs-box")
  if (targList) {
    for (var x = 0; x < targList.length; x++) {
      targList[x].style.visibility = "visible";
    }
  }

  frameList = document.getElementsByClassName("fs-iframe");
  document.getElementsByClassName("fs-iframe")
  if (frameList) {
    for (var x = 0; x < frameList.length; x++) {
      frameList[x].src = el;
    }
  }
}
function closeFS() {
  targList = document.getElementsByClassName("fs-box");
  document.getElementsByClassName("fs-box")
  if (targList) {
    for (var x = 0; x < targList.length; x++) {
      targList[x].style.visibility = "hidden";
    }
  }

  frameList = document.getElementsByClassName("fs-iframe");
  document.getElementsByClassName("fs-iframe")
  if (frameList) {
    for (var x = 0; x < frameList.length; x++) {
      frameList[x].src = "";
    }
  }
}





}
