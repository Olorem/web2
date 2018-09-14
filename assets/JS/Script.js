'use strict';

var user = {
	name: "Vasiliy",
	sayHi: function(){
		alert(this.name);
	}
};

var admin = user;
user = null;
admin.sayHi();