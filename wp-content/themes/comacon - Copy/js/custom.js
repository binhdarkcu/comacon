jQuery(document).ready(function(){
	//animate hover
	jQuery('.reference-sidebar ul li').hover(
	  function() {
	    jQuery(this).find('.esg-overlay').animate({
	    	'visibility':'inherit',
	    	'opacity':1,
	    },300);
	    
	    jQuery(this).find('.eg-buildpress-item-skin-element-0-a').css({'visibility':'inherit','opacity':1}).stop().animate({
	    	'top':'0px'
	    },300);
	    jQuery(this).find('.eg-buildpress-item-skin-element-1').css({'visibility':'inherit','opacity':1}).stop().animate({
	    	'top':'0px'
	    },300);
	    
	  }, function() {
	    jQuery('.esg-overlay').css({'opacity':0});
	    jQuery('.eg-buildpress-item-skin-element-0-a').css({'opacity':0}).filter(':not(:animated)').animate({
	    	'top':'15px'
	    },300);
	    jQuery('.eg-buildpress-item-skin-element-1').css({'opacity':0}).filter(':not(:animated)').animate({
	    	'top':'-15px'
	    },300);
	  }
);
});
