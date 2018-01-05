function emailMask(email)
{
	var regExp = /[a-zA-Z0-9]/g;
	var emailArray = email.split('@');
  
	if (emailArray.length < 2)
		return email;
  
	if (emailArray[0].length < 3)
	{
		emailArray[0] = emailArray[0].replace(regExp, '*');
	} 
	else
	{
		var aux = emailArray[0].substr(2, emailArray[0].length);
		emailArray[0] = emailArray[0].substr(0, 2) + aux.replace(regExp, '*');
	}
  
	return emailArray[0] + '@' + emailArray[1];
}