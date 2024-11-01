tinyMCEPopup.requireLangPack();

var SzbDialog = {
	init : function() {
		this.resize();
	},

	resize : function() {
		var h, e;

		if (!self.innerWidth) {
			h = document.body.clientHeight;
		} else {
			h = self.innerHeight;
		}

		e = document.getElementById('source');

		if (e) {
			e.style.height = Math.abs(h - 50) + 'px';
		}
	},

 	insert : function() {
		debugger
		tinyMCEPopup.execCommand(
            'mceInsertSzbText', {
				content:document.getElementById('szb-content').value,
				size:document.getElementById('szb-size').value,
				color:document.getElementById('szb-color').value
			}
        );

		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(SzbDialog.init, SzbDialog);
