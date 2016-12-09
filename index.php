<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxcefa60ed039de9b8", "4a75779303f6f49fe6abd5af7ec7c59e");
$signPackage = $jssdk->GetSignPackage();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>艺匠原著 墅造中国</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="jquery.min.js"></script>
	<script src="jquery.rotate.min.js"></script>
    <script src="spriteClip.js"></script>
    <script>
    	$(function(){
			setTimeout(function(){
				$('#log_01 img').css({'top':'3%','width':'40%','margin-left':'-20%'});
				setTimeout(function(){
					$('#log_02').css('opacity','1');
					$('#log_03').show();
					
				},1000);
			},2300);
			$('#fore_1').on('tap',function(){
				$('#fore_img').html('<img src="images/dian1.jpg" />');	
				$('#hand').css('display','none');
			});
			$('#fore_1').on('click',function(){
				$('#fore_img').html('<img src="images/dian1.jpg" />');	
				$('#hand').css('display','none');
			});
			
			$('#fore_2').on('tap',function(){
				$('#fore_img').html('<img src="images/dian2.jpg" />');	
				$('#hand').css('display','none');
			});
			$('#fore_2').on('click',function(){
				$('#fore_img').html('<img src="images/dian2.jpg" />');	
				$('#hand').css('display','none');
			});
			
			$('#fore_3').on('tap',function(){
				$('#fore_img').html('<img src="images/dian3.jpg" />');	
				$('#hand').css('display','none');
			});
			$('#fore_3').on('click',function(){
				$('#fore_img').html('<img src="images/dian3.jpg" />');
				$('#hand').css('display','none');
			});
			
			
			$('#fore_img').on('click',function(){
				$('#fore_img').html('');
				$('#hand').css('display','block');
			});
			$('#fore_img').on('tap',function(){
				$('#fore_img').html('');
				$('#hand').css('display','block');
			});
			
		});
    </script>
</head>
<body>
	<div class="stage" id="st1">
    	<div class="logo_w">
            <div class="logo" id="log_01"><img src="images/loading.gif" /></div>
            <div class="one_pic" id="log_02" style="opacity:0;"><img src="images/one_pic.jpg" /></div>
            <a href="javascript:" id="log_03" style="display:none;"></a>
        </div>
		<div class="sprite1"></div>
	</div>
    <div class="a-stage" id="st2" style="display:none;">
		<div class="a-sprite1"></div>
	</div>
    <div class="b-stage" id="st3" style="display:none;">
		<div class="b-sprite1"></div>
	</div>

    <div class="c-stage" id="st4" style="display:none;">
		<div class="c-sprite1"></div>
        <div id="log_05" class="log_05">点此进入下一页</div>
        <div class="fore_w" id="log_04" style="opacity:0">
            <img src="images/fore_top.jpg" class="t1" id="log_07" />
            <div class="fore_b">
            	<img src="images/hand.png" class="hand pt_fade" id="hand" />
            	<div id="fore_img">
                	
                </div>
                <a href="javascript:" id="fore_1" class="b1">
                	<img src="images/fore_bottom1.jpg" />
                </a>
                <a href="javascript:" id="fore_2" class="b2">
                	<img src="images/fore_bottom2.jpg" />
                </a>
                <a href="javascript:" id="fore_3" class="b3">
                	<img src="images/fore_bottom3.jpg" />
                </a>
                <!--<img src="images/fore_bottom.jpg" class="for_b" />-->
            </div>
        </div>
	</div>
    
    
    <div class="d-stage" id="st5" style="display:none;">
		<div class="d-sprite1"></div>
        <img src="images/six_wz.png" id="six_wz" class="six_wz" />
	</div>

    <div class="e-stage" id="st6" style="display:none;">
		<div class="e-sprite1"></div>
         <img src="images/seven_wz.png" id="seven_wz" class="seven_wz" />
	</div>
    
    <div class="f-stage" id="st7" style="display:none;">
		<div class="f-sprite1"></div>
        <img src="images/eight_wz.png" id="eight_wz" class="eight_wz" />
	</div>
    
    <div class="g-stage" id="st8" style="display:none;">
		<div class="g-sprite1"></div>
        <img src="images/nine_wz.png" id="nine_wz" class="nine_wz" />
	</div>
    
    
    
	<script>	
	var sprite1 = document.querySelector('.sprite1');
	var sp1 = new spriteClip(sprite1,4,5,80);
	sp1.hide();
	document.getElementById('log_03').addEventListener('touchend',function(){
		sp1.run();
	});
	document.getElementById('log_03').addEventListener('click',function(){
		sp1.run();
	});
	sp1.finish(function(){
		$('#st2').css('display','block');
		$('#st1').remove();
		var a_sprite1 = document.querySelector('.a-sprite1');
		var a_sp1 = new spriteClip(a_sprite1,4,5,80);
		a_sp1.hide();
		document.addEventListener('touchend',function(){
			a_sp1.run();
		});
		document.addEventListener('click',function(){
			a_sp1.run();
		});
		a_sp1.finish(function(){
			$('#st2').remove();
			$('#st3').css('display','block');
			var b_sprite1 = document.querySelector('.b-sprite1');
			var b_sp1 = new spriteClip(b_sprite1,4,5,80);
			b_sp1.hide();
			document.addEventListener('touchend',function(){
				b_sp1.run();
			});
			document.addEventListener('click',function(){
				b_sp1.run();
			});
			b_sp1.finish(function(){
				$('#st3').css('display','none');
				$('#log_04').css('opacity','1');
				$('#st4').css('display','block');
				var c_sprite1 = document.querySelector('.c-sprite1');
				var c_sp1 = new spriteClip(c_sprite1,4,5,80);
				c_sp1.hide();
				document.getElementById('log_05').addEventListener('touchend',function(){
					c_sp1.run();
					setTimeout(function(){
						$('#six_wz').addClass('fade1');
					},1300);
				});
				document.getElementById('log_05').addEventListener('click',function(){
					c_sp1.run();
					setTimeout(function(){
						$('#six_wz').addClass('fade1');
					},1300);
				});
				
				document.getElementById('log_07').addEventListener('touchend',function(){
					c_sp1.run();
					setTimeout(function(){
						$('#six_wz').addClass('fade1');
					},1300);
				});
				document.getElementById('log_07').addEventListener('click',function(){
					c_sp1.run();
					setTimeout(function(){
						$('#six_wz').addClass('fade1');
					},1300);
				});
				
				
				
				
				
				c_sp1.finish(function(){
					
					$('#st4').css('display','none');
					$('#st5').css('display','block');
					var d_sprite1 = document.querySelector('.d-sprite1');
					var d_sp1 = new spriteClip(d_sprite1,4,5,80);
					d_sp1.hide();
					document.addEventListener('touchend',function(){
						d_sp1.run();
						$('#six_wz').addClass('fade2');
						setTimeout(function(){
							$('#six_wz').remove();
						},1000)
						setTimeout(function(){
							$('#seven_wz').addClass('fade1');
						},1300);
					});
					document.addEventListener('click',function(){
						d_sp1.run();
						$('#six_wz').addClass('fade2');
						setTimeout(function(){
							$('#six_wz').remove();
						},1000)
						setTimeout(function(){
							$('#seven_wz').addClass('fade1');
						},1300);
					});
					d_sp1.finish(function(){
						$('#st5').css('display','none');
						$('#st6').css('display','block');
						var e_sprite1 = document.querySelector('.e-sprite1');
						var e_sp1 = new spriteClip(e_sprite1,4,5,80);
						e_sp1.hide();
						document.addEventListener('touchend',function(){
							e_sp1.run();
							$('#seven_wz').addClass('fade2');
							setTimeout(function(){
								$('#seven_wz').remove();
							},1000)
							setTimeout(function(){
								$('#eight_wz').addClass('fade1');
							},1300);
						});
						document.addEventListener('click',function(){
							e_sp1.run();
							$('#seven_wz').addClass('fade2');
							setTimeout(function(){
								$('#seven_wz').remove();
							},1000)
							setTimeout(function(){
								$('#eight_wz').addClass('fade1');
							},1300);
						});
						e_sp1.finish(function(){
							$('#st6').css('display','none');
							$('#st7').css('display','block');
							var f_sprite1 = document.querySelector('.f-sprite1');
							var f_sp1 = new spriteClip(f_sprite1,4,5,80);
							f_sp1.hide();
							document.addEventListener('touchend',function(){
								f_sp1.run();
								$('#eight_wz').addClass('fade2');
								setTimeout(function(){
										$('#eight_wz').remove();
									},1000)
								setTimeout(function(){
									$('#nine_wz').addClass('fade1');
								},1300);
							});
							document.addEventListener('click',function(){
								f_sp1.run();
								$('#eight_wz').addClass('fade2');
								setTimeout(function(){
										$('#eight_wz').remove();
									},1000)
								setTimeout(function(){
									$('#nine_wz').addClass('fade1');
								},1300);
							});
							f_sp1.finish(function(){
								$('#st7').css('display','none');
								$('#st8').css('display','block');
								var g_sprite1 = document.querySelector('.g-sprite1');
								var g_sp1 = new spriteClip(g_sprite1,4,5,80);
								g_sp1.hide();
								document.addEventListener('touchend',function(){
									g_sp1.run();
									$('#nine_wz').addClass('fade2');
									setTimeout(function(){
										$('#nine_wz').remove();
									},1000)
								});
								document.addEventListener('click',function(){
									g_sp1.run();
									$('#nine_wz').addClass('fade2');
									setTimeout(function(){
										$('#nine_wz').remove();
									},1000)
								});
								g_sp1.finish(function(){
									
									
								});
								
							});
							
						});
						
					});
					
				});

			});

		});

	});

</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">

wx.config({
	appId: '<?php echo $signPackage["appId"];?>',
	timestamp: <?php echo $signPackage["timestamp"];?>,
	nonceStr: '<?php echo $signPackage["nonceStr"];?>',
	signature: '<?php echo $signPackage["signature"];?>',
	jsApiList: [
		'checkJsApi',
		'onMenuShareTimeline',
		'onMenuShareAppMessage',
		'onMenuShareQQ',
		'onMenuShareWeibo'
	]
});
   wx.ready(function (){
	   	wx.onMenuShareAppMessage({
			title: '西宸原著盛邀 共抒艺匠情怀', // 分享标题
			desc: '2015年4月9日原著新作全球首发', // 分享描述
			link: 'http://projects.chinaflamingo.com/bur_one/index.php', // 分享链接
			imgUrl: 'http://projects.chinaflamingo.com/bur_one/images/share_img.jpg', // 分享图标
			type: '', // 分享类型,music、video或link，不填默认为link
			dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
			success: function () { 
				// 用户确认分享后执行的回调函数
			},
			cancel: function () { 
				// 用户取消分享后执行的回调函数
			}
		});
	   	wx.onMenuShareTimeline({
			title: '西宸原著盛邀 共抒艺匠情怀', // 分享标题
			link: '2015年4月9日原著新作全球首发', // 分享链接
			imgUrl: 'http://projects.chinaflamingo.com/bur_one/images/share_img.jpg', // 分享图标
			success: function () { 
				// 用户确认分享后执行的回调函数
			},
			cancel: function () { 
				// 用户取消分享后执行的回调函数
			}
		});
   });
   
   
//--------------------prevent
$('body').bind('touchmove',function(e){e.preventDefault()});
$('body').bind('dbclick',function(e){$(document).scrollTop(0);e.preventDefault();});

</script>
<div id="audiocontainer"></div>
<div id="cardsound" style="position: fixed; right: 20px; top: 30px; z-index: 5000; visibility: visible;"><img id="sound_image" width="30px" src="img3/music_note_big.png" class="rot_img"></div>
<script type="text/javascript">
        var angle = 0;
        var inter;
        var is_start = true;
            gSound = 'back.mp3'; 
				document.onreadystatechange = function(){
				var audiocontainer = $('#audiocontainer');
            if (audiocontainer != undefined) {
                audiocontainer.html('<audio id="bgsound" loop="loop"> <source src="' + gSound + '" /> </audio>');
            }
            $$('sound_image').onclick = switchsound;
            jQuery("#st1").click(function() {
            if(jQuery("#bgsound")[0].paused&&is_start){
            jQuery("#bgsound")[0].play();
            is_start = false;
            inter = setInterval(function(){
            angle+=3;
            $("#sound_image").eq(0).rotate(angle);
            },50);
            }
            });
            }

function $$(name) {
    return document.getElementById(name);
}

function switchsound() {
     au = $$('bgsound');
     ai = $$('sound_image');
     if (au.paused) {
         au.play();
         inter = setInterval(function(){
         angle+=3;
         $("#sound_image").eq(0).rotate(angle);
         },50);
            }
            else {
                au.pause();
                clearInterval(inter);
                
            }
        }
		</script>
</body>
</html>