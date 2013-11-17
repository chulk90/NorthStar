<cfinclude template="TwilioSettings.cfm" />
<!--- Outgoing Caller ID you have previously validated with Twilio --->
<cfset number="3106272485">
<!--- Outgoing Number you wish to call --->
<cfset outgoing = "4434747584">

<!--- Directory location for callback.php file (for use in REST URL) --->
<cfset callback_url = "http://chulk90.azurewebsites.net/">

<!--- Instantiate a new Twilio Rest Client --->
<cfset twilio = createObject("component", "TwilioLib").init(AccountSid, AuthToken, ApiVersion, ApiEndpoint) />

<Cfif not isdefined("called")>
	<Cfset err=URLEncodedFormat("Must specify your phone number")>
	<cflocation url="index.php?msg=#err#">
</CFIF>

<cfset params=StructNew()>
<cfset params["From"]=number>
<cfset params["To"]=outgoing>
<cfset params["Url"]="#callback_url#callback.cfm?number=#called#">

<!--- this works in CF9 
<cfset params = {From = number, To = outgoing, Url = "#callback_url#callback.cfm?number=#called#"}>
--->

<!--- make Twilio REST request to initiate outgoing call --->
<cfset requestObj = twilio.newRequest("Accounts/{AccountSid}/Calls", "POST", params) />

<cfif not requestObj.getResponse().wasSuccessful()>
	<cfset xmlDoc=requestObj.getResponse().output()>
	<cfset err = xmlDoc.TwilioResponse.RestException.Message.XmlText>
	<Cfset err=URLEncodedFormat(err)>
	<cflocation url="index.php?msg=#err#">
</cfif>

<cfset msg = UrlEncodedFormat("Connecting... #called#")>
<cflocation url="index.cfm?msg=#msg#">
