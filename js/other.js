var list=$('#list'),left=$('#left'),button=$('#button'),reg=$('#register'),back=$('#back');
	var sub_button=$('#submit');
	var input=$(':input');
	var regForm=$('#regForm');
	function del(){
		if(confirm("Yooooo!\nAre You Sure?\nPlease Make Sure You're Not Doing Stupit?"))
			return true;
		else
			return false;	
	};
	reg.hide();
	//the form js						
	button.click(function(){
	//	list.animate({width:"0"},500);
		left.slideUp(1000);
		reg.show();
	});
	back.click(function(){
	//	reg.animate({width:"0"},500);
		reg.slideDown(1000);
		left.slideDown(1000);
	});
	input.blur(function(){
		var value = $(this).val();
		var length = value.length;
		if(value == ""){
			$(this).css({border:"1px solid #ff7c10"}).stop().animate({left:'20px' },200).animate({left:'-20px'},200).animate({left:'20px'},200).animate({left:'0px'},200);
		}else{
				$(this).css({border:"1px solid #999"});
			}
	});
	input.focus(function(){
		$(":input + span").remove();
	});
	sub_button.click(function(){check_sub()});
	function check_sub(){
		if($('#stu_name').val()==""){
			$('#stu_name + span').remove();
			$('#stu_name').stop(true,true).css({border:"1px solid #ff7c10"}).animate({left:'20px' },200).animate({left:'-20px'},200).animate({left:'20px'},200).animate({left:'0px'},200).after("<span>矮油，我不知道你的大名呢</span>");
			return false;
		}
		else if($('#stu_sex').val()==""){

			$('#stu_sex').stop(true,true).css({border:"1px solid #ff7c10"}).animate({left:'20px' },200).animate({left:'-20px'},200).animate({left:'20px'},200).animate({left:'0px'},200).after("<span>矮油，我不知道你的性别呢</span>");
			return false;
		}
		else if($('#stu_id').val()==""){

			$('#stu_id').stop(true,true).css({border:"1px solid #ff7c10"}).animate({left:'20px' },200).animate({left:'-20px'},200).animate({left:'20px'},200).animate({left:'0px'},200).after("<span>矮油，你的学号忘记输入了哟</span>");
			return false;
		}
		else if($('#stu_id').val().length!=10)
		{
			$('#stu_id').stop(true,true).css({border:"1px solid #ff7c10"}).animate({left:'20px' },200).animate({left:'-20px'},200).animate({left:'20px'},200).animate({left:'0px'},200).after("<span>矮油，你的学号不是10位么？</span>");
			return false;
		}
		else if($('#stu_class').val()==""){
			$('#stu_class').stop(true,true).css({border:"1px solid #ff7c10"}).animate({left:'20px' },200).animate({left:'-20px'},200).animate({left:'20px'},200).animate({left:'0px'},200).after("<span>矮油，你的班级呢？</span>");
			return false;
		}
		else{
			regForm.submit();
		}
	};