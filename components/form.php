<form action='contact.php' method='POST' id='form'>
	Inquiry: <input type="radio" name="inquiry" value="sponsorship" checked="checked"/>
	<label>Sponsorship</label>
	<input type="radio" name="inquiry" value="recruitment"/> 
	<label>Recruitment</label><br/><br/>
	First name: <span class="red"> *</span>
	<input type="text" name="firstname" size="35"/><br/><br/>
	Last name: <span class="red"> *</span>
	<input type="text" name="lastname" size="35"/><br/><br/>
	Email: <span class="red"> *</span>
	<input type="email" name="email" size="41"/><br/><br/>
	Message: <span class="red"> *</span><br/>
	<textarea name='message' form='form' placeholder='Enter text here'></textarea><br/>
	<input type="submit" name="submit" value="Submit">
	<input type="button" onclick="resetForm()" value="Reset">
</form>
<script>
function resetForm() {
	document.getElementById("form").reset();
}
</script>