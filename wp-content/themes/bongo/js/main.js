jQuery(document).ready(function(){
	
	
	jQuery('img[usemap]').rwdImageMaps();
	
	jQuery('img[usemap]').maphilight({ "stroke": true,"strokeColor":"c45b6a","strokeWidth":5,"strokeOpacity":1,"fill":false}); 
	
/*	
	jQuery("form").submit(function(){
		
	var emailArray = document.getElementsByName("your-email");	
	var email ='';
	jQuery.each(emailArray, function( index, element ){
		if(element.value){
			email = element.value;
			element.value = '';
		}
	});

	if(email == '') {
		alert('Please enter email.');
		return false;
	}
	
		if (validateEmail2(email))
	{
		alert('Please enter Valid Email Address');
		return false;
	} 
	 
	function validateEmail2(email){
		eval("re = /\.+\\@\.+\\.\.+/;");
		if (email.search(re) != -1) {
			return false;
		} else {
			return true;
		}
	} 
	
	var receiveemails = document.getElementsByName("receiveemails[]");
    
    if(receiveemails[0].checked==false) {
        alert('You must agree to receive mails.');
        return false;
    }
	
	var privacyagree = document.getElementsByName("privacyagree[]");
    
    if(privacyagree[0].checked==false) {
        alert('You must agree to the privacy policy.');
        return false;
    }	
	
   });  */
	 
});
