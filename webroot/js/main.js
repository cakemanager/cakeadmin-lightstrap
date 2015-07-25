$(function () {
	//Bootstrap tooltip enable
	$('[data-toggle="tooltip"]').tooltip();
	
	//Verify localStorage support first
	if (!window.localStorage) {
		return;
	}
	
	//!--Auto collapse index filters
	$('#collapseFilter').on('show.bs.collapse', function () {
		var filters = window.localStorage.getItem('caFilters') ? JSON.parse(window.localStorage.getItem('caFilters')) : [];
		var posttype = $(this).data('posttype');
		var lastIndex = filters.indexOf(posttype);
		if(lastIndex < 0){
			filters.push(posttype);
		}
		console.log(filters);
		window.localStorage.setItem('caFilters', JSON.stringify(filters));
	});
	$('#collapseFilter').on('hide.bs.collapse', function () {
		var filters = window.localStorage.getItem('caFilters') ? JSON.parse(window.localStorage.getItem('caFilters')) : [];
		var posttype = $(this).data('posttype');
		var lastIndex = filters.indexOf(posttype);
		if(lastIndex > -1){
			filters.splice(lastIndex, 1);
		}
		window.localStorage.setItem('caFilters', JSON.stringify(filters));
	});
	var filters = window.localStorage.getItem('caFilters') ? JSON.parse(window.localStorage.getItem('caFilters')) : [];
	var posttype = $('#collapseFilter').data('posttype');
	if(posttype !== null){
		var lastIndex = filters.indexOf(posttype);
		if(lastIndex > -1){
			$('#collapseFilter').collapse('show');
		}
	}
});