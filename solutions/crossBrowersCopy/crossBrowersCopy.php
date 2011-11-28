<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>���������������- ���ݽ������</title>
	<link rel="stylesheet" href="../../../media/style.css" charset="utf-8" />
	<link rel="stylesheet" charset="utf-8" href="../../base.min.css" />
	<link rel="stylesheet" charset="utf-8" href="../../../static/style.css" /> <!-- for pages -->
	<link rel="stylesheet" charset="utf-8" href="../../../static/hl-default.css" /> <!-- syntax highlight -->
	<!-- CSS �ļ� -->
</head>

<body>
<?php
$page = "doc";
include('../../head.php');
?>
<div id="wrapper" class="single">
	<div id="sub-nav">
		<h2>���ݽ������ &raquo; ���������������</h2>
		
		
		<a class="action-back" href="#">Back</a>
	</div><!-- #nav -->
	
	<div id="container">
	
		<div class="howto">
		<h4>���������������:</h4>
		<ol>
			<li>IE�������ṩ��ԭ����֧��: <code>clipboardData</code> �� <code>setData</code>��Firefox �ȶ�û�У�������� flash �����������֧�֡�
			</li>
			<li>ʹ�ã�ZeroClipboard ��Ŀǰ��õĽ����ʽ��
<pre>
// ���� flash ��ַ, ����ʵ��
ZeroClipboard.setMoviePath('SWF�ļ��ĵ�ַ');
var clip = new ZeroClipboard.Client();

// ����: http://www.deluxeblogtips.com/2010/06/javascript-copy-to-clipboard.html
clip.setText(''); 

// js���ṩ���¼�������, ��arale���ú����滻
clip.addEventListener('mouseDown', function(){
	var pre = document.getElementById('pre');
	clip.setText(pre.innerHTML);
});

// copy�Ǹ��ư�ť��ID
clip.glue('copy');
</pre>
			</li>
		</ol>
	</div><!-- .howto -->			
		
	<div class="helper">
		<div class="source">
		<!-- START Դ���� -->
		�������ʾվ��ĸ��ƹ��ܣ���ʵ�ֶ�����ƣ���Ҫ�������ʵ�����Լ�д�˸��򵥵ģ���Ҳ�����Լ�д�����������صģ��ò鿴Դ�뿴��
			
		<script type="text/javascript">
			var copyTriggle = function (buttonID, identity, cnt) {
				
				
		        ZeroClipboard.setMoviePath('flash�ļ�λ��');
		        identity = new ZeroClipboard.Client();
		        identity.setHandCursor(true);
		        identity.setText('');
		        
		        identity.addEventListener('mouseDown', function () {
		            identity.setText(cnt);
		            var t = document.getElementById(buttonID);
		            t.innerHTML = '���Ƴɹ�';
		            t.style.color = '#888';
	        	});
	
	        identity.glue(buttonID);
	
	    	};
	    	
	    	// ʹ��: copyTriggle(buttonID, identity, cnt)
	    	// copyTriggle(���ư�ťid, �Զ���ʵ����(һ��Ҫ��ͬ��), ��Ҫ���Ƶ�����)
	    </script>
		
		
		<!-- END Դ���� -->
		</div><!-- .source -->
	</div><!-- .helper -->
		
	</div><!-- #container -->
	
</div><!-- #wrap -->
<?php include('../../foot.php') ?>

<script type="text/javascript" src="../../../static/jquery.js" charset="utf-8"></script>
<script type="text/javascript" src="../../../static/hl-core.js" charset="utf-8"></script><!-- syntax highlight -->
<script type="text/javascript" src="../../../static/hl-xml.js" charset="utf-8"></script><!-- syntax highlight -->
<script type="text/javascript" src="../../../static/clipboard.js" charset="utf-8"></script><!-- for source copy -->
<script type="text/javascript" src="../../../static/alice.js" charset="utf-8"></script>
</body>
</html>
