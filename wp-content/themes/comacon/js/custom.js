jQuery(document).ready(function(){
	//animate hover
	jQuery('.reference-sidebar ul li').hover(
	  function() {
	    jQuery(this).find('.esg-overlay').animate({
	    	'visibility':'inherit',
	    	'opacity':1,
	    },300);
	    
	    jQuery(this).find('.eg-buildpress-item-skin-element-0-a').css({'visibility':'inherit','opacity':1}).animate({
	    	'top':'0px'
	    },300);
	    jQuery(this).find('.eg-buildpress-item-skin-element-1').css({'visibility':'inherit','opacity':1}).animate({
	    	'top':'0px'
	    },300);
	    
	  }, function() {
	    jQuery(this).find('.esg-overlay').animate({
	    	'visibility':'hidden',
	    	'opacity':0,
	    },300);
	    
	    jQuery(this).find('.eg-buildpress-item-skin-element-0-a').animate({
	    	'top':'15px',
	    	'opacity':0
	    },300, function(){
	    	jQuery(this).css({'visibility':'hidden'});
	    	jQuery('.eg-buildpress-item-skin-element-0-a').removeAttr('style');
	    });
	    
	    jQuery(this).find('.eg-buildpress-item-skin-element-1').animate({
	    	'top':'-15px',
	    	'opacity':0
	    },300, function(){
	    	jQuery(this).css({'visibility':'hidden'});
	    	jQuery('.eg-buildpress-item-skin-element-1').removeAttr('style');
	    });
	  }
);
});
