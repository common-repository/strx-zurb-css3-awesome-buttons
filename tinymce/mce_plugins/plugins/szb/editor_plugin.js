(function() {
	var each = tinymce.each;

	tinymce.create('tinymce.plugins.mceSzb', {
		init : function(ed, url) {
			var t = this;

			t.editor = ed;

			// Register commands
			ed.addCommand('mceSzb', function(ui) {
				ed.windowManager.open({
					file : url + '/szb.html',
					width : ed.getParam('szb_popup_width', 420),
					height : ed.getParam('szb_popup_height', 300),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			ed.addCommand('mceInsertSzbText', t._insertSzbText, t);

			// Register buttons
			ed.addButton('szb', {
                title : 'szb_dlg.desc',
                cmd : 'mceSzb',
                image : url + '/img/icon.png'
            });
		},

		_insertSzbText : function(atts) {
			debugger
			//var pre = document.createElement('pre');
			var el=document.createElement('span');
			var c='[szb size='+atts.size+' color='+atts.color+']'+atts.content+'[/szb]';
			el[typeof el.textContent != 'undefined'?'textContent':'innerText']=c;
            //var block = document.createElement('div');
            //block.appendChild(el);
            var ed = this.editor;
			ed.execCommand('mceInsertContent', false, el.innerHTML);
			ed.addVisual();
		}
	});

	// Register plugin
	tinymce.PluginManager.add('szb', tinymce.plugins.mceSzb);
})();
