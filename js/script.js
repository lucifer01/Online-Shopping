
$("#query").change(function(){
		$("#search").trigger("click");
	});


function createCard (fileName, brand, price, image, img_name, item_id)
{
	return "<div align='center' class='col-sm-3 item'>"+
  			


 			'<a href="item_desc.php?item_id='+item_id+'">'+
      		'<img  class="img-responsive img-itm" src="'+image+img_name+'" alt=" ">'+
      		'<p class="h5f">'+fileName+'</p>'+
      		'<p class="c1">'+price+'</p>'+
      		'<p class="c2">'+brand+'</p>'+

      		"</a>"+
			'</div>';
			//'</div>';	

			
}

$("#search").click(function(){
	$("#category").hide();
	$("#headerwrap").hide();
	var query = $("#query").val();
	var formData = new FormData();
	formData.append('query',query);

	$.ajax({
		url : 'searchDoc.php',
		dataType: 'text',
		cache: false, 
		contentType: false,
		processData : false,
		data: formData,
		type: 'post',
		success:function (response)
		{
			$('#searchResult').empty();
			var array = JSON.parse(response);
			if ( array == null )
			{
				$("#searchResult").append("<div> <p>Sorry! No Items found !!!</p> </div>");
				$('#searchResult').fadeIn();
				return ;
			}
			var content;
			for( i = 0 ; i < array.length ; i++)
			{
				content = createCard(array[i]['fileName'], array[i]['brand'], array[i]['price'], array[i]['image'], array[i]['img_name'], array[i]['item_id']);
				$("#searchResult").append(content);
			}
			$('#searchResult').fadeIn();

		}
	});
});

