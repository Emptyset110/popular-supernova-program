//Timer Setup
	setInterval(function() {
	  clock();
	}, 1000);

	function clock()
	{
	  var time = new Date();
	  var hours = time.getHours();
	  var minutes = time.getMinutes();
	  var seconds = time.getSeconds();
	  
	  if ($('.h').text() != ((hours < 10 ? "0" : "") + hours)){
		 $('.h').text((hours < 10 ? "0" : "") + hours);
		 shake($('.h'));
	  }
	  
	  if ($('.m').text() != ((minutes < 10 ? "0" : "") + minutes)) {
		$('.m').text((minutes < 10 ? "0" : "") + minutes);
		shake($('.m'));
	  }
	  
	  if ($('.s').text() != ((seconds < 10 ? "0" : "") + seconds)) {
		$('.s').text((seconds < 10 ? "0" : "") + seconds);
		shake($('.s'));
	  }
	}

	$(document).load(function(){
	  clock();
	});

	function shake(t) {
	/*
	  t.addClass('shake-constant');
	  setTimeout(function() {
		t.removeClass('shake-constant');
	  }, 400)
	*/
	}
// End of timer

	$(function(){
		
		$(':checkbox').radiocheck();
		
		//Fullpage设置
		$('#psp_main').fullpage({
        //Navigation
        menu: '#menu',
        anchors:['main', 'guide' ,'qa', 'about'],
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['首页', '新手指引', '关于我们'],
        showActiveTooltips: true,
        slidesNavigation: true,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 300,
        autoScrolling: true,
        fitToSection: true,
        scrollBar: false,
        easing: 'easeInOutQuart',
        easingcss3: 'ease',
        loopBottom: true,
        loopTop: false,
        loopHorizontal: false,
        continuousVertical: false,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: true,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        resize : false,
        sectionsColor : ['#181818', '#181818', '#181818', '#181818'],
        paddingTop: '0em',
        paddingBottom: '0px',
        fixedElements: '#header, .footer',
        responsive: 1,

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        //events
        onLeave: function(index, nextIndex, direction){},
        afterLoad: function(anchorLink, index){},
        afterRender: function(){},
        afterResize: function(){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction){}
		});
		
		//检测是否已经登陆
		controllerURL = $('#frm_loginSession').attr('action');
		console.log(controllerURL);
		var login_session = new Object;
		
		$.ajax({
			type: 'POST',
			url: controllerURL,
			dataType: 'json',
			data: login_session,
			success: function(result) {
				//调试返回值
				if (result['uid']>0) {
					$('#panel_login').hide(500);
				} else{
					setTimeout(function(){
						$('#panel_login').slideDown(500);
					}, 500);	
				}
				$.each(result, function(index,value){
					console.log(index,':', value);
				});
			}
		});
	
		$('#btn_login').on('click', function(){
			var loginInfo = new Object;
			loginInfo.email = $('#login_email').val();
			loginInfo.pwd = $('#login_pwd').val();
//			console.log(loginInfo);
			controllerURL = $('#frm_login').attr('action');
			console.log(controllerURL);
			
			$.ajax({
				type: 'POST',
				url: controllerURL,
				dataType: 'json',
				data: loginInfo,
				success: function(result) {
					//返回值调试
					if (result['errCode']==0) {
						$.each(result, function(index,value){
							console.log(index,':', value);
						});
						$('#panel_login').toggle(500);
					} else {
						$.each(result, function(index,value){
							console.log(index,':', value);
						});
					}
				}
			});
		}); // end of on click event
		
		$('#btn_psp').on('click', function(){
			console.log('click');
			$(".hideshow").show(1300);
		});
	});