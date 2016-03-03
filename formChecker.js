function Exec3(elephant,kitten,turtle,username,password,ship1,ship2,ship3)
{

	if (elephant==''||kitten==''||turtle==''||username==""||password==""|| (!ship1 && !ship2 && !ship3))
	{
		alert("Please fill out the text Boxes or radio button");
	}
	else if (ship!= '5' || ship!='50' || ship!='0' )
	{
		alert("Please fill out the Radio Buttons");
	}
	else if(elephant<0||kitten<0||turtle<0)
	{
		alert("Please dont have negative numbers text Boxes");
	}
	
}
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}