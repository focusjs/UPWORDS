(function($, window) {

  function effectContent() {
    var effect = {
      types : {leftToRight : 'ltr', rightToLeft : 'rtl'},
      allItems : [],
      container : null,
      currentBlock : null,
      time : 400,
      init : function(prElm, time) {
        effect.container = $('#'+prElm);
        if(effect.container.length == 0) {
          effect.container = $('.'+prElm);
        }
        effect.allItems = effect.container.find('> .item-slider');
        effect.currentBlock = effect.container.find('> .active-item');
        effect.resetHeight();
        if(typeof time != 'undefined') {
          effect.time = time;
        }
      },
      resetHeight: function() {
        effect.currentBlock.css('width', effect.container.outerWidth());
        effect.container.css('height', (effect.currentBlock.outerHeight() - 1));
      },
      effectApply : function(type, contentId, callback) {
        var page = $('#'+contentId);
        if(page.length > 0) {
          if(page[0] != effect.currentBlock[0]) {
            if(type === effect.types.leftToRight){
              page.insertBefore(effect.currentBlock);
              page.css({left: -(page.width()) + 'px'}).addClass('active-item');
              page.animate({left: 0}, effect.time, function() {});
              effect.currentBlock.animate({left: (effect.currentBlock.width() + page.width())}, effect.time, function() {
                effect.currentBlock.removeClass('active-item');
                effect.currentBlock = page;
                effect.resetHeight();
                //
                
                if(callback && typeof callback === "function") {
                  callback.call();
                }

              });
            } else {
              page.insertAfter(effect.currentBlock);
              page.css({left: (effect.currentBlock.width()) + 'px'}).addClass('active-item');
              page.animate({left: 0}, effect.time, function() {});
              effect.currentBlock.animate({left: -(page.width())}, effect.time, function() {
                effect.currentBlock.removeClass('active-item');
                effect.currentBlock = page;
                effect.resetHeight();
                //
                if(callback && typeof callback === "function") {
                  callback.call();
                }
              });
            }
          }
        } else {
            alert('Sorry ! Page not existing.');
        }
      }
    };
    return effect;
  }
  
  var PostSlider = {
    items : [],
    size : 0,
    isAuto: true,
    end: true,
    autoRun : null,
    init : function(container, isAuto) {
      var contn = $('#'+container);
      if(contn.length == 0) {
        contn = $('.'+container + ':first');
      }
      PostSlider.contn = contn;
      PostSlider.items = contn.find('.item-slider');
      PostSlider.size = this.items.length;
      PostSlider.items.each(function(index) {
				$(this).attr('id', 'sliderItem' + (index+1));
			});
      
      contn.parent().find('.browse').on('click', function(e){
          e.stopPropagation();
          e.preventDefault();
          var elm = $(this);
          var i = 1;
          var type = 'ltr';
          if(elm.hasClass('previous')) {
            i = -1;
            type = 'rtl';
          }
          
          if(elm.data('run') !== 'auto' && PostSlider.autoRun) {
						window.clearInterval(PostSlider.autoRun);
						PostSlider.autoRun = null;
					}
          
          var crIndex = EffectContent.currentBlock.attr('id').replace('sliderItem', '')*1;
          var next = crIndex + i;
          if(crIndex === PostSlider.size && i === 1) {
            next = 1;
          } else if(crIndex === 1 && i === -1) {
            next = PostSlider.size;
          }
          PostSlider.clickAction($('#sliderItem'+ next), type);
          elm.data('run', '');
      });
      if(typeof isAuto === 'boolean'){
        PostSlider.isAuto = isAuto;
        if(isAuto) {
					PostSlider.runAuto();
				}
      }
    },
    runAuto : function () {
      if(PostSlider.autoRun !== null) {
        window.clearInterval(PostSlider.autoRun);
      }
      PostSlider.autoRun = setInterval(function() {
        PostSlider.contn.parent().find('.next:first').trigger('click').data('run', 'auto');
      }, 4000);
    },
    clickAction : function(elm, type) {
      if(elm.attr('id') === EffectContent.currentBlock.attr('id')) {
        PostSlider.callback();
        return;
      }
      if(PostSlider.end === true) {
        PostSlider.end = false;
        var crIndex = EffectContent.currentBlock.attr('id').replace('sliderItem', '')*1;
        var newIndex = elm.attr('id').replace('sliderItem', '')*1;
        
        EffectContent.effectApply(type, elm.attr('id'), PostSlider.callback);
      }
    },
    callback : function() {
      PostSlider.end = true;
      if(PostSlider.isAuto === true && PostSlider.autoRun == null) {
        PostSlider.runAuto();
      }
      
      var info = EffectContent.currentBlock.find('.info-hidden:first');
			$('#post-img').attr('src', info.attr('data-img'));
			$('#shop-now-button').attr('href', info.attr('data-link'));
			$('#post-excerpt').text(EffectContent.currentBlock.find('.content-hidden').text());
    }
  };


	function lifeOver() {
		var parent = $('#life-page');
		if(parent.length > 0) {
			var postContainer = parent.find('.post-container:first');
			var posts = postContainer.find('.post');
			posts.on('mouseover', function(evt) {
				var post = $(this);
				var htext = post.find('.hidden-text:first');
				if(htext.length > 0) {
					var index = post.attr('data-index') * 1;
					if(index === 2 || index === 5 || index === 8) {
						htext.css('right', '0px').css('left', '');
					} else {
						htext.css('right', '').css('left', '0px');
					}
					htext.show();
				}
			}).on('mouseout', function(evt) { $(this).find('.hidden-text:first').hide();});
		}
	}
	
	function controllBg(clazz, d) {
		//
		var pr = $('.' + clazz);	
		if(pr.length > 0) {
			var bg = pr.find(' > .control-backgound');
			var h = bg.find('.control-footer:first').height();
			var top = bg.height() - h - d;
			bg.attr("style", "background: url('" + window.template_uri + "/images/bg_fff.png') repeat-x;").css({'background-position' : ('0px ' + top + 'px')});
		}
		
	}


  function init() {
    if(window.isInit !== 'start') {
			window.isInit = 'start';
			window.EffectContent = new effectContent();
			
			EffectContent.init('slider-container');
			PostSlider.init('slider-container', true);
			//
			lifeOver();
			//
			var t = setTimeout(function(){
				controllBg('body-contact', 1);
				controllBg('body-causes', 1);
				controllBg('body-product', 0);
				window.clearTimeout(t);
			}, 200);
    }
    
    $('.wpcf7-submit').on('mouseup', function() { setTimeout(function(){controllBg('body-contact', 1);}, 500);})
  }

window.sliderInit = init;
//
var t = window.setTimeout(function() {
	init();
	window.clearTimeout(t);
}, 1000);







})(jQuery, window);
