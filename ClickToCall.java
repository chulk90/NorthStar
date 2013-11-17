package com.twilio;

import java.util.HashMap;
import java.util.Map;

import com.twilio.sdk.TwilioRestClient;
import com.twilio.sdk.TwilioRestException;
import com.twilio.sdk.resource.factory.CallFactory;
import com.twilio.sdk.resource.instance.Account;



public class ClickToCall {
    /* Twilio REST API version */
    public static final String ACCOUNTSID = "AC554454875ef2761dfd97bf9f4d438baa";
    public static final String AUTHTOKEN = "c2af4f4d0f28090ead35c5b0b4fc8a16";
    
    public static void makeCall(String to, String url){
        /* Outgoing Caller ID previously validated with Twilio */
        String CallerID = "3106272485";

        /* Instantiate a new Twilio Rest Client */
        TwilioRestClient client = new TwilioRestClient(ACCOUNTSID, AUTHTOKEN);

        // Get the account and call factory class
        Account acct = client.getAccount();
        CallFactory callFactory = acct.getCallFactory();
        
        //build map of post parameters 
        Map<String,String> params = new HashMap<String,String>();
        params.put("From", CallerID);
        params.put("To", to);
        params.put("Url", url);

        try {
            // Make a phone call  ( This makes a POST request to the Calls resource)
            callFactory.create(params);
        } catch (TwilioRestException e) {
            e.printStackTrace();
        }
    }
}
