<CFContent type="text/xml">
<cfsetting showdebugoutput="no">
<cfinclude template="TwilioSettings.cfm" />

<!--- Create a new instance of the Twilio Lib, this can be stored in the App scope or elsewhere as a singleton... --->
<cfset t = createObject("component", "TwilioLib").init(AccountSid, AuthToken) />

<!--- Simple say hello... --->

<cfset r = t.newResponse() />
<cfset r.Say("A customer at the number #number# is calling") />
<cfset r.Dial("#number#") />
<cfoutput>#r.getResponseXml()#</cfoutput>