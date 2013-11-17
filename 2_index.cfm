<htmL>
<head>
	<title>Twilio: Click-to-call Demo</title>
</head>
<body>
<h1>Click-to-call</h1>
<cfif isdefined("msg")>
	<Cfoutput><i>#msg#</i></CFOUTPUT>
</cfif>
<!-- @start snippet -->

<h3>Please enter your phone number, and you will be connected to MMMMMMMMMM</h3>
<form action="makecall.cfm" method="post">
    <span>Your Number: <input type="text" name="called" /></span>
    <input type="submit" value="Connect me!" />
</form>

<!-- @end snippet -->
</body>
</html>
