<style>

#editControls {
	margin: 5px;
	padding: 5px;
	text-align: center;
}

#editor {
	border: 1px solid silver;
	border-radius: 5px;
	box-shadow: inset 0 0 10px silver;
	min-height: 100px;
	overflow: auto;
	padding: 1em;
	resize: vertical;
}

a[data-role]:link,
a[data-role]:visited,
a[data-role]:hover,
a[data-role]:active {
	text-decoration: none;
}
a[data-role] {
	border: 1px solid silver;
	border-radius: 5px;
	color: black;
	padding: 5px;
	width: 1em;
}
</style>

<div id='editControls'>
		<p>
			<a href="#" data-role='undo'><i class='fa fa-undo'></i></a>
			<a href="#" data-role='redo'><i class='fa fa-repeat'></i></a>
        <a href="#" data-role='cut'><i class='fa fa-cut'></i></a>
			<a href="#" data-role='copy'><i class='fa fa-copy'></i></a>
			<a href="#" data-role='paste'><i class='fa fa-paste'></i></a> 
			<a href="#" data-role='bold'><i class='fa fa-bold'></i></a>
			<a href="#" data-role='italic'><i class='fa fa-italic'></i></a>
			<a href="#" data-role='underline'><i class='fa fa-underline'></i></a>
			<a href="#" data-role='strikeThrough'><i class='fa fa-strikethrough'></i></a>
			<a href="#" data-role='justifyLeft'><i class='fa fa-align-left'></i></a>
			<a href="#" data-role='justifyCenter'><i class='fa fa-align-center'></i></a>
			<a href="#" data-role='justifyRight'><i class='fa fa-align-right'></i></a>
			<a href="#" data-role='justifyFull'><i class='fa fa-align-justify'></i></a>
			<a href="#" data-role='indent'><i class='fa fa-indent'></i></a>
			<a href="#" data-role='outdent'><i class='fa fa-outdent'></i></a>
			<a href="#" data-role='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
			<a href="#" data-role='insertOrderedList'><i class='fa fa-list-ol'></i></a>
			<a href="#" data-role='h1'>h<sup>1</sup></a>
			<a href="#" data-role='h2'>h<sup>2</sup></a>
			<a href="#" data-role='p'>p</a>
			<a href="#" data-role='subscript'><i class='fa fa-subscript'></i></a>
			<a href="#" data-role='superscript'><i class='fa fa-superscript'></i></a>
		</p>
	</div>
    <script>
$('#editControls a').click(function(e) {
	switch ($(this).data('role')) {
		case 'h1':
		case 'h2':
		case 'p':
			document.execCommand('formatBlock', false, $(this).data('role'));
			break;
		default:
			document.execCommand($(this).data('role'), false, null);
			break;
	}
  return false;
});
</script> 