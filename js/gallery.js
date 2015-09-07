$(document).ready(function(){
	$.ajax({ 
	    type: 'GET', 
	    url: 'script/gallery.php', 
	    data: { xml_url: 'http://api.flickr.com/services/feeds/photos_public.gne?tags=chamonix,ski,snow' }, 
	    dataType: 'json',
	    success: function (data) {
	        $.each(data.entry, function(index, element) {
	            var title = data.entry[index].title;
	            var author = data.entry[index].author.name;
	        	var img_src = data.entry[index].link[1]["@attributes"]["href"];
	            $('.gallery-row').append('<div class="gallery-item"><a target="_blank" href="'+img_src+'"><figure><i class="fa fa-flickr fa-3x"></i><img src="'+img_src+'" alt="'+title+'" width="304" height="200"><p>'+title+' by '+author+'</p></figure></a></div>');
	        });
	    }
	});
});