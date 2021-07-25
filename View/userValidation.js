
		$(document).ready(function(){
				var valid = true;
				$("form").submit(function(e){
					$("input").each(function(){
						if(!$(this).val()){ //is null
							$(this).addClass('invalid');
							$(this).prev().text($(this).prev().prev().text()+" is required!");
							valid = false;
						}
					});
					
					if(!$("select").val()){
						$("select").addClass('invalid');
						$("select").prev().text('*Domain Area is required!');
						valid = false;
					}
					
					if(!valid){
			        	e.preventDefault();
			        }
			    });
			    /*
				$("input").blur(function(){
					if(!$(this).val()){ //is null
						$(this).addClass('invalid');
						$(this).prev().text($(this).prev().prev().text()+" is required!");
						valid = false;
					}
				});
				*/

				$("input").focus(function(){
					$(this).removeClass('invalid');
					$(this).prev().empty();
					valid = true;					
				});
				$("#name").blur(function(){
					var reg=/[0-9]/;
					//check full name includes number, if yes, return error.
				  	if(reg.test($(this).val())){
				  		$(this).addClass('invalid');
				  		$(this).prev().text('Number is not allowed');
				  		valid = false;
				  	}
				});
				$("#age").blur(function(){
					if($(this).val()<=0){
						$(this).addClass('invalid');
				  		$(this).prev().text("Age range is incorrect!");
				  		valid = false;
					}
				});
				$("#pwd").blur(function(){
					var result = checkPassword($(this).val());
					if(result){
			    		$(this).addClass('invalid');
				  		$(this).prev().text(result);
				  		valid = false;
		    		}
				});
				$("#repwd").blur(function(){
					if(!is_RePassword_correct($(this).val())){
						$(this).addClass('invalid');
				  		$(this).prev().text("Password is not match!");
				  		valid = false;
					}
				});
				$("#email").blur(function(){
					if(!is_Email_Format_correct($(this).val())){
						$(this).addClass('invalid');
				  		$(this).prev().text("Email format is not correct!");
				  		valid = false;
					}
				});

		});

				function is_RePassword_correct(repwd){		
					var pwd = $("#pwd").val();	
					for(var i =0; i<pwd.length;i++){
						if(repwd[i]!=pwd[i]){
							return false;
						}
					}
					return true;
				}
				// .* means all characters
				function checkPassword(pwd){
					var checkLength =/[a-zA-Z0-9~!#$]{6,12}/;
					var checkNum = /(?=.*[0-9])[a-zA-Z0-9~!#$]{6,12}/;
					var checkLowCase = /(?=.*[a-z])[a-zA-Z0-9~!#$]{6,12}/;
					var checkUpperCase =/(?=.*[A-Z])[a-zA-Z0-9~!#$]{6,12}/;
					var checkSpeChar = /(?=.*[~!#$@])[a-zA-Z0-9~!#$]{6,12}/;
					if(!checkLength.test(pwd)){
						return "Length limits 6 ~ 12 characters";
					}else if(!checkNum.test(pwd)){
						return "At least 1 Number";
					}else if(!checkLowCase.test(pwd)){
						return "At least 1 Lowercase";
					}else if(!checkUpperCase.test(pwd)){
						return "At least 1 Uppercase";
					}else if(!checkSpeChar.test(pwd)){
						return "At least 1 character from '~!#$@'";
					}else{
						return null;
					}
				}
				//this function is used for checking email format
				function is_Email_Format_correct(email) {
					//regExp pattern
				    //var emailFormat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				    var emailFormat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/;
				    return emailFormat.test(String(email).toLowerCase());
				}
	