function Exec3(elephant,kitten,turtle,username,password,ship1,ship2,ship3)
{

	if ( elephant == '' || kitten=='' || turtle == '' || username == "" || password == "" || (!ship1 && !ship2 && !ship3))
	{
		alert("Please fill out the text Boxes or radio button");
		return false;
	}
	else if( elephant<0 || kitten<0 || turtle<0 )
	{
		alert("Please dont have negative numbers text Boxes");
		return false;
		
	}
	return true;

}


