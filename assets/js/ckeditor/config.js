/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
		config.filebrowserBrowseUrl = '../../resources/backend/plugins/kcfinder/browse.php?type=files';
        config.filebrowserImageBrowseUrl = '../../resources/backend/plugins/kcfinder/browse.php?type=images';
        config.filebrowserFlashBrowseUrl = '../../resources/backend/plugins/kcfinder/browse.php?type=flash';
        config.filebrowserUploadUrl = '../../resources/backend/plugins/kcfinder/upload.php?type=files';
        config.filebrowserImageUploadUrl = '../../resources/backend/plugins/kcfinder/upload.php?type=images';
        config.filebrowserFlashUploadUrl = '../../resources/backend/plugins/kcfinder/upload.php?type=flash';

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Se the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Make dialogs simpler.
	config.removeDialogTabs = 'image:advanced;link:advanced';

    config.extraAllowedContent = 'pre[data-language](code)';

	//insert pre element.
	config.extraPlugins = 'wpmore,insertpre,youtube';

	config.insertpre_class = 'code';
	//skin
	config.skin = 'flat';
};
