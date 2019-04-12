$(document).ready(function(){
	
	if(!Modernizr.input.placeholder){	
	$("input , textarea").each(
		function(){
			if($(this).val()=="" && $(this).attr("placeholder")!=""){
				$(this).val($(this).attr("placeholder"));
				$(this).focus(function(){
					if($(this).val()==$(this).attr("placeholder")) $(this).val("");
			});
			
			$(this).blur(function(){
				if($(this).val()=="") $(this).val($(this).attr("placeholder"));
			});
		}
		});
	}
	
	
	
	$('.listaParceirosInterna a').click(function(){
		var slug = $(this).attr('id');
		
		$('.boxParceiros').hide()
		$('.loader').show();
		// Ajax para Recuperação dos Parceiros
		$.ajax({
		  type: 'POST',
		  url: '/parceiros-ajax',
		  data: { slug : slug },
		  success: function( results ) {
			if(results) {
								
				$('.boxParceiros').html(results);
				$('.boxParceiros').fadeIn();
				$('.loader').hide();
				
			}else {
				
				
			}
		  }
		});
		return false;
	});
	$('#menu-principal li a').hover(function(){
		$(this).first().css('color','#000');	
	},function(){
		$(this).first().css('color','#878787');
	});
	$('#menu-principal li .sub-menu a').hover(function(){
		$(this).first().css('color','#000');	
	},function(){
		$(this).first().css('color','#FFF');
	});
	$('#menu-principal li .sub-menu').hover(function(){
		$(this).parent('li').first().children('a').css('color','#FFF');		
	},function(){
		$(this).parent('li').first().children('a').css('color','#878787');
	});
	
	//Expandir Rodapé
	$('.expandirMenu').click(function(){
		$('#menurodape').slideToggle(1300);
	});
});