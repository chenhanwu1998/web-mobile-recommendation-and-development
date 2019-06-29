 //输入错误时用来将输入信息重新填充别被消除
function fill_inf(user,stu_id,e_mail) 
{
	document.getElementById('user').value=user;
	document.getElementById('stu_id').value=stu_id;
	document.getElementById('e_mail').value=e_mail;
}


//s秒的迟延跳转到指定的url
function delay_url(url,s)  
{
	setTimeout("top.location.href='"+url +"'",s*1000);
}

/*将模块显示出来*/
function show_div(id)
{
	document.getElementById(id).style.display='block';
}
/*将模块隐藏*/
function hide_div(id)
{
	document.getElementById(id).style.display='none';
}

//点击后show_id的模块显示，其他隐藏，将各个功能板块显示出来或者隐藏
function dis_div(show_id,type)   
{
	var id_arr=new Array();
	if (type=='mobile_market')
	{
		id_arr=['m_div1','m_div2','m_div3','m_div4','m_div5','m_div6','m_div7','m_div8','m_div9'];
	}
	if (type=='mobile_market1')
	{
		id_arr=['m_div11','m_div12','m_div13','m_div14','m_div15','m_div16','m_div17','m_div18','m_div19'];
	}
	if (type=='mobile_market2')
	{
		id_arr=['m_div21','m_div22','m_div23','m_div24','m_div25','m_div26','m_div27','m_div28','m_div29'];
	}
	if (type=='mobile_market3')
	{
		id_arr=['m_div31','m_div32','m_div33','m_div34','m_div35','m_div36','m_div37','m_div38','m_div39'];
	}
	if (type=='mobile_market4')
	{
		id_arr=['m_div41','m_div42','m_div43','m_div44','m_div45','m_div46','m_div47','m_div48','m_div49'];
	}

	if (type=='choice_fun')
	{
		id_arr=['div1','div2','div3','div4','div5','div6','div7'];
	}
	for(var i=0;i<id_arr.length;i++)
	{
		if(id_arr[i]!=show_id)
		{
			hide_div(id_arr[i]);
		}
	}
	show_div(show_id);
}




//返回到注册页面
function turn_to_register()
{
	window.location.href='inf_register.php';
}

/*给对应ID的文本框输入内容*/
function fill_input(content,id)
{
	document.getElementById(id).value=content;
}


/*实现图片的自动切换*/
/*
var index=0;
var imgs=["./automation_img/timg1.jpg","./automation_img/timg2.jpg","./automation_img/timg3.jpg","./automation_img/timg4.jpg","./automation_img/timg5.jpg"];
function automation_turn_img()
{
	document.getElementById('img_right').src=imgs[index];
	index++;
	if(index>4)
	{
		index=0;
	}
}*/
/*setInterval("automation_turn_img()",1500);   //实现图片切换，开发好了就打开



		/*
		var index=0;
		var imgs=["./automation_img/timg1.jpg","./automation_img/timg2.jpg","./automation_img/timg3.jpg","./automation_img/timg4.jpg","./automation_img/timg5.jpg"];
		function automation_turn_img()
		{
			$('#img_right').fadeOut(2000);
			document.getElementById('img_right').src=imgs[index];
			document.getElementById('img_right').display='none';
			$('#img_right').fadeIn(2000);
			index++;
			if(index>4)
			{
				index=0;
			} 
		}
		setInterval("automation_turn_img()",2000);   //实现图片切换，开发好了就打开*/


/*填充搜索内容*/

function display_iframe(){
	 		document.getElementById('iframe_div').style.display='block';
	 	}
function change_iframe(){
	document.getElementById('iframe1').srcdoc='论坛文章内容';
}
function hide_iframe(){
	document.getElementById('iframe_div').style.display='none';
}
 

function set_photo(id,src){
	document.getElementById(id).src=src;
}

function display_i(){
		$("#iframe_div").fadeIn(500);		
} 