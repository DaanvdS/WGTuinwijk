var px = "px";
var leftPaneWidth = 200;
var marginLeft = 10;
var marginRight = 10;
var marginLR = marginLeft + marginRight;
var marginTop = 10;
var marginBottom = 10;
var marginTB = marginTop + marginBottom;
var debug = false;
var headerHeight;

function resizeDivs(){
	var browserHeight = window.innerHeight;
	var browserWidth = window.innerWidth;
	if(debug == true){
		console.log("Resized divs");
		document.getElementById('headerbar').innerHTML = "<h2>".concat(browserWidth).concat("</h2>");
	}
	headerHeight = (1/3)*browserHeight;
	
	document.getElementById('header').style.maxHeight = headerHeight + px;
	document.getElementById('header').style.width = "100%";
	document.getElementById('header').style.width = (browserWidth - marginLR) + px;
	document.getElementById('lowerabdomen').style.width = "100%";
	document.getElementById('lowerabdomen').style.width = (browserWidth - marginLR) + px;
	document.getElementById('lowerabdomen').style.top = (headerHeight + marginTB) + px;
	document.getElementById('lowerabdomen').style.height = (browserHeight - (headerHeight + 1.5*marginTB)) + px;
	document.getElementById('container').style.height = (browserHeight - 2*marginTB) + px;
	document.getElementById('headerbar').style.top = 0.5*(headerHeight - document.getElementById('headerbar').clientHeight) + px;
	
	setHeaderImagesRoundedCorner();	
	checkMobile();
}

function checkMobile(){
	document.getElementById('infotd').style.display = "";
	if((document.getElementById('lowerabdomen').clientWidth - (leftPaneWidth + marginLR)) < 2.5*leftPaneWidth){
		if(debug == true){
			console.log("Resized for mobile");
		}
		document.getElementById('leftpane').style.visibility = "hidden";
		document.getElementById('leftpane').style.height = 0;
		document.getElementById('rightpane').style.left = 0;
		document.getElementById('rightpane').style.marginLeft = 0;
		document.getElementById('rightpane').style.width = (document.getElementById('lowerabdomen').clientWidth) + px;
		document.getElementById('content').style.height = (document.getElementById('rightpane').clientHeight - 3.5*marginTB) + px;
		document.getElementById('content').style.width = (document.getElementById('rightpane').clientWidth) + px;
		document.getElementById('map-canvas').style.height = (document.getElementById('content').clientHeight - 35) + px;
		document.getElementById('infotd').style.display = "";
		document.getElementById('infotd').style.display = "block";
		document.getElementById('maptd').style.display = "block";
		document.getElementById('maptd').style.width = (document.getElementById('content').clientWidth - 9) + px;
		document.getElementById('scrolldown').style.display = "";
	} else {
		if(debug == true){
			console.log("Resized for normal mode");
		}
		document.getElementById('leftpane').style.visibility = "visible";
		document.getElementById('leftpane').style.height = "100%";
		document.getElementById('rightpane').style.left = leftPaneWidth;
		document.getElementById('rightpane').style.marginLeft = 15 + px;
		document.getElementById('rightpane').style.width = (document.getElementById('lowerabdomen').clientWidth - (leftPaneWidth + marginLR)) + px;
		document.getElementById('content').style.height = (document.getElementById('rightpane').clientHeight - 3.5*marginTB) + px;
		document.getElementById('content').style.width = (document.getElementById('rightpane').clientWidth) + px;
		document.getElementById('map-canvas').style.height = (document.getElementById('content').clientHeight - 9) + px;
		document.getElementById('infotd').style.display = "none";
		document.getElementById('maptd').style.display = "";
		document.getElementById('scrolldown').style.display = "none";
		document.getElementById('maptd').style.width = (document.getElementById('content').clientWidth - 6) + px;
	}
}

function setHeaderImagesRoundedCorner(){
	if(document.getElementById('headerimages').clientWidth >= 1175){
		if(debug == true){
			console.log("Set flat corners in header");
		}
		document.getElementById('header1').style.borderRadius = "0";
		document.getElementById('header3').style.borderRadius = "0";
	} else {
		if(debug == true){
			console.log("Set rounded corners in header");
		}
		document.getElementById('header1').style.borderRadius = "15px 0px 0px 15px";
		document.getElementById('header3').style.borderRadius = "0px 15px 15px 0px";
	}
}

function browseToPage(id){
	if(debug == true){
		console.log("Browsed to page");
	}
	document.cookie="pageID=".concat(id);
	document.getElementById('content').style.backgroundColor = document.getElementById(id).style.backgroundColor;
	var bg = $('#content').css('background-color');
	if(bg.indexOf('a') == -1){
		document.getElementById('content').style.backgroundColor = $('#content').css('background-color').replace(')', ', 0.55)').replace('rgb', 'rgba');
	}
	document.getElementById('content').innerHTML = document.getElementById('page'.concat(id).concat('text')).innerHTML;				
	checkMobile();
	if(id==3){
		initialize();
	}
}

function initialize() {
	if(debug == true){
		console.log("Initialized Google Maps");
	}
	var mapCanvas = document.getElementById('map-canvas');
	var mapOptions = {
		center: new google.maps.LatLng(52.1024576, 5.1341844),
		zoom: 17,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions)
	
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(52.1024576, 5.1341844),
		map: map,
		title: 'Woongroep Tuinwijk'
	});
}