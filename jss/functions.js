// JavaScript Document

function shHide(dvID){

var myTabImg = new Array(3);
myTabImg[0] = 'product_btn';
myTabImg[1] = 'technology_btn';
myTabImg[2] = 'news_btn';

var myDv;
for (i=1; i<=3; i++){
	myDv = document.getElementById("homeRightBox" + i)
		if(dvID == i){
			myDv.style.display = 'block';
			MM_swapImage('imgtab' + i,'','images/' + myTabImg[i-1] + '_active.jpg',1);
		} else {
			myDv.style.display = 'none';
			MM_swapImage('imgtab' + i,'','images/' + myTabImg[i-1] + '.jpg',1);	
		}
	
	}
	
}