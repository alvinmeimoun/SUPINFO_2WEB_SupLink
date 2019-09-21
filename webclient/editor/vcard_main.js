function generateCard(){
	/*var lastname = document.getElementById('i_lastname').value;
	document.getElementById('card_name').textContent = lastname.toUpperCase()+" "+document.getElementById('i_firstname').value;
	document.getElementById('card_job').textContent = document.getElementById('i_job').value;
	document.getElementById('card_skills').textContent = document.getElementById('i_skills').value;*/
	var xhr = new XMLHttpRequest();
	
	xhr.onreadystatechange = function() {
	  if(xhr.readyState == 4) {
		if(xhr.status == 200) {
		  document.getElementById('text_src').value = xhr.responseText;
		  document.getElementById('div_card_preview').innerHTML = xhr.responseText;
		} else alert("Error!");
	  }
	};

	
	xhr.open("POST", "vcard_content.php", true);
	xhr.setRequestHeader("Content-Type", 
		"application/x-www-form-urlencoded");
	xhr.send("lastname="+document.getElementById('i_lastname').value+
		"&firstname="+document.getElementById('i_firstname').value+
		"&job="+document.getElementById('i_job').value+
		"&skills="+document.getElementById('i_skills').value);
	
	return false;
}