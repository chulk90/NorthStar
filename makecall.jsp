<%@ page import="com.twilio.*" %>
<%	String results = ClickToCall.makeCall(request.getParameter("called"), "file:///C:/Users/Chul/Documents/GitHub/NorthStar/clicktocall/callback.jsp?number=" + request.getParameter("called")); %>

<html>
<head>
	<title>Twilio: Click-to-call Demo</title>
</head>
<body>
<h3>We are connecting your call now.</h3>
<textarea>
	<%= results %>
</textarea>
</body>
</html>

