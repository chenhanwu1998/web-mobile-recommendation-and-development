'use strict';

window.onload = function () {
	var liebiao = document.getElementById('liebiao');
	var boxs = liebiao.children;
	var timer;


//删除节点 
function removeNode(node) {
	node.parentNode.removeChild(node);
}


function praiseBox(box, el) {
	var txt = el.innerHTML;
	var praisesTotal = box.getElementsByClassName('praises-total')[0];
	var oldTotal = parseInt(praisesTotal.getAttribute('total'));
	var newTotal;
	if (txt === '赞') {
		newTotal = oldTotal + 1;
		praisesTotal.setAttribute('total', newTotal);
		praisesTotal.innerHTML = (newTotal === 1) ? '我觉得很赞' : '我和' + oldTotal + '个人觉得很赞'; el.innerHTML = '取消赞';
	} 
	else {
		newTotal = oldTotal - 1;
		praisesTotal.setAttribute('total', newTotal);
		praisesTotal.innerHTML = (newTotal === 0) ? '' : newTotal + '个人觉得很赞';
		el.innerHTML = '赞';
	} 
	praisesTotal.style.display = (newTotal === 0) ? 'none' : 'block';
}

/*** 发评论 
* @param box 每个分享的div容器 
* @param el 点击的元素 
*/ 
function reply(box) {
	var commentList = box.getElementsByClassName('comment-list')[0];
	var textarea = box.getElementsByClassName('comment')[0];
	var commentBox = document.createElement('div');
	commentBox.className = 'comment-box clearfix';
	commentBox.setAttribute('user', 'self');
	commentBox.innerHTML =
			'<div class="comment-content">' +
			'<p class="comment-text"><span class="user">我：</span>' + textarea.value + '</p>' + 
			'<p class="comment-time">' +
			'<a href="javascript:;" class="comment-operate">删除</a>' +
			'</p>' +
			'</div>';
	commentList.appendChild(commentBox);
	textarea.value = '';
	textarea.onblur();
}
	
	
/**
* 操作留言 
* @param el 点击的元素 
*/ 
function operate(el) {
	var commentBox = el.parentNode.parentNode.parentNode;
	var box = commentBox.parentNode.parentNode.parentNode;
	var txt = el.innerHTML;
	var user = commentBox.getElementsByClassName('user')[0].innerHTML;
	var textarea = box.getElementsByClassName('comment')[0];
	if (txt === '回复') {
		textarea.focus();
		textarea.value = '回复' + user;
		textarea.onkeyup();
	}
	else {
	removeNode(commentBox);
	}
}

//把事件代理到每条分享div容器 
for (var i = 0; i < boxs.length; i++) {
	
	//点击
	//e-事件？
	boxs[i].onclick = function (e) {
	e = e || window.event;				//兼容
	var el = e.srcElement || e.target;				//获取发生事件的元素
	switch (el.className) {
		
		//关闭分享
		case 'close':
			removeNode(el.parentNode);
			break;

		//赞分享
		case 'praise':
			praiseBox(el.parentNode.parentNode.parentNode, el);
			break;
			
		//回复按钮蓝 
		case 'btn':
			reply(el.parentNode.parentNode.parentNode);
			break;
			
		//回复按钮灰 
		case 'btn btn-off':
			clearTimeout(timer);
			break;
			
		//赞留言 
		case 'comment-praise':
			praiseReply(el);
			break;
			
		//操作留言 
		case 'comment-operate':
			operate(el);
			break;
		}
	};
	
	//评论
	var textArea = boxs[i].getElementsByClassName('comment')[0];

	//评论获取焦点 
	textArea.onfocus = function () {
		this.parentNode.className = 'text-box text-box-on';
		this.value = this.value === '评论…' ? '' : this.value;
		this.onkeyup();
	};

	//评论失去焦点
	textArea.onblur = function () {
		var me = this;
		var val = me.value;
		if (val === '') {
			timer = setTimeout(function () {
				me.value = '评论…';
				me.parentNode.className = 'text-box';
			}, 200);
		}
	};

	//评论按键事件 
	textArea.onkeyup = function () {
		var val = this.value;
		var len = val.length;
		var els = this.parentNode.children;
		var btn = els[1];
		var word = els[2];
		if (len <=0 || len > 140) {
			btn.className = 'btn btn-off';
		}
		else {
			btn.className = 'btn';
		}
		word.innerHTML = len + '/140';
	};
}
};