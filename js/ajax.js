/*$(function() {

	var name = $("input[name=name]").val();
	var login = $("input[name=login]").val();
	var pwd = $("input[name=pwd]").val();
	var mail = $("input[name=mail]").val();

	$('#reg').on('click',function(){
		$.ajax({
		url: '../scripts/script_registration.php',
		type: 'POST',
		data: {name: name, login: login, pwd: pwd, mail: mail},
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	});
	
	
});*/



$(document).ready(function() {
	// регистрация пользователя
	$('#reg').on('click',function(e){
		e.preventDefault();
		$.ajax({
		url: '../scripts/script_registration.php',
		type: 'POST',
		data: $(this).closest('form').serialize(),
		success:function(data){
			console.log(data);
			$('form').hide();
			var $div = $('<div>');
			$('#content').append($div.text('Регистрация прошла успешно !'));
		}
		});
	});
	// добавить инфлрмацию
	$('#add').on('click',function(e){
		e.preventDefault();
		$.ajax({
		url: '../scripts/script_add_info.php',
		type: 'POST',
		data: $(this).closest('form').serialize(),
		success:function(data){
			console.log(data);
			alert('Информация добавлена');
			$("input[type='text']").val('');
		}
		});
	});

	// добавления пользователя
	$('#reg_a').on('click',function(e){
		e.preventDefault();
		$.ajax({
		url: '../scripts/script_registration.php',
		type: 'POST',
		data: $(this).closest('form').serialize(),
		success:function(data){
			console.log(data);
			alert('Пользователь создан!');
			$("input[type='text']").val('');
		}
		});
	});
		// удаления поста 
		$('.delete-s').on('click',function(e){
			e.preventDefault();
			$p = $(this).parent('form').parent().parent();
			console.log($p);
			$.ajax({
			url: '../scripts/script_delete_post.php',
			type: 'POST',
			cache:false,
			data: {id:$(this).prev().val()},
			success:function(id){
				$p.hide();
			}
	});
	});
		//удаления пользователя
		$('.delete-u').on('click',function(e){
			e.preventDefault();
			$p = $(this).parent('form').parent().parent();
			console.log($p);
			$.ajax({
			url: '../scripts/script_delete_user.php',
			type: 'POST',
			cache:false,
			data: {id:$(this).prev().val()},
			success:function(id){
				$p.hide();
			}
	});
	});

       /* $('#update').on("click",function(e){
            e.preventDefault();
            $.ajax({
                url: '../scripts/script_update_post.php',
                type: 'POST',
                cache:false,
                data: $(this).closest('form').serialize(),
                success:function(id){
                    alert(id);
                }

            })
        });*/


	});
