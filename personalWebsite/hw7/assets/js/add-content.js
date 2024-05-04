var today = new Date();
var hourNow = today.getHours();
var greeting;
var output=document.getElementById('greeting');
if (hourNow>18)
	{
		greeting='Good Evening';
	}
else if (hourNow>12)
	{
		greeting='Good Afternoon';
	}
else if(hourNow>0)
	{
		greeting='Good Morning';
	}
else
	{
		greeting='Welcome';
	}

output.innerHTML=greeting;