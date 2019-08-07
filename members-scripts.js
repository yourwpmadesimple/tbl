var j = jQuery.noConflict();
j(document).ready(function () {
j("#account").click(function(){
var X=j(this).attr('id');
	if(X==1){
	j(".dropdown-menu").hide();
		j(this).attr('id', '0'); 
	}
	else{
	j(".dropdown-menu").show();
	j(this).attr('id', '1');
	}
});
j(".dropdown-menu").mouseup(function(){
	return false
});

//Mouse click on my account link
j("#account").mouseup(function(){
	return false
});
j(document).mouseup(function(){
	j(".dropdown-menu").hide();
	j("#account").attr('id', '');
});
});