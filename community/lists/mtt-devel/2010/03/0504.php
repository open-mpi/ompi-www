<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 14:43:54 2010" -->
<!-- isoreceived="20100303194354" -->
<!-- sent="Wed, 3 Mar 2010 14:43:42 -0500" -->
<!-- isosent="20100303194342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="C5F8AA5A-BB45-4C04-BD7E-069735189187_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A2792E6D-EB86-4BC8-A5B3-246001607107_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 14:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0505.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
...or should we be using OAuth?
<br>
<p><a href="http://code.google.com/intl/en-EN/apis/accounts/docs/OAuthForInstalledApps.html">http://code.google.com/intl/en-EN/apis/accounts/docs/OAuthForInstalledApps.html</a>
<br>
<p><p>On Mar 3, 2010, at 2:36 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Yoinks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, doesn't a Google login return a cookie of some flavor that is valid for a long period of time (somewhere between 1 day and 2 weeks)?  Can't we keep/cache that cookie down in the MTT client and use it for subsequent data submissions until the cookie expires and we have to login again?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2010, at 8:30 AM, Igor Ivanov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Description:
</span><br>
<span class="quotelev2">&gt; &gt; Issue arises during submitting data frequently. We can get failure during data submitting with authentication error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Reason:
</span><br>
<span class="quotelev2">&gt; &gt; Google allows a failure response on The ClientLogin authorization process with a CAPTCHA challenge means that Google has decided, for whatever reason, that additional security measures should be taken. This response is accompanied by a CAPTCHA image URL and a token representing the specific CAPTCHA challenge.
</span><br>
<span class="quotelev2">&gt; &gt; I do not see way to organize customer input in this case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Detail information can be found at:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://code.google.com/intl/en-EN/apis/accounts/docs/AuthForInstalledApps.html">http://code.google.com/intl/en-EN/apis/accounts/docs/AuthForInstalledApps.html</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Possible solutions:
</span><br>
<span class="quotelev2">&gt; &gt; 1. catch error condition on server side and return status 503: 'Service Unavailable';
</span><br>
<span class="quotelev2">&gt; &gt; In this case client can organize processing of this failure (it is possible that sleeping for some time could help)
</span><br>
<span class="quotelev2">&gt; &gt; 2. catch error condition on server side and accept authentication by correct username only w/o real verification;
</span><br>
<span class="quotelev2">&gt; &gt; 3. rollback to previous scheme;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Igor
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Igor Ivanov wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am sending patch that enable google account approach to submit data to MTT GDS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It also has the fix to a bug in displaying table as respond to bquery.pl --view (It has not been committed yet to MTT trunk).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As for question relating &quot;how does one develop ...&quot; that source information can be found at following location as: <a href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc</a>.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In case you make a resolve to accept patch I am sending next steps should be done:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. update application on server side using instruction in VBench_GDS_Setup.doc (topic 4 &quot;Installation&quot;)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; example: appcfg.py update &lt;local folder with open-mpi-mtt&gt;/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. change version on <a href="https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607">https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607</a> from 1 to 2 (make default)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; note: after this operation all users that attempt to submit data using previous scheme of authentication will get failure respond.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. go to open-mpi-mtt and add new users with google account
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Igor
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Great -- many thanks!
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Feb 12, 2010, at 12:32 PM, Igor Ivanov wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have done changes related google account support but not tested them well.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I will try to send them on Monday.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Igor
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Feb 10, 2010, at 9:09 AM, Igor Ivanov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I took a swipe at doing this (totally not tested; how does one develop/test this stuff?).  I know just a tiny bit of python, but the code was fairly readable.  Please see the attached patch -- is it anywhere close to correct?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; [II] It seems close but you forget about bquery.pl that allows to add a new user and related handler (processes bquery.pl --admin) on gds/main.py at least.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Oh, yikes -- good catch.  I'll look into that...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; How does one develop / test / debug / deploy changes to this stuff?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; __________ Information from ESET NOD32 Antivirus, version of virus signature database 4861 (20100212) __________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; __________ Information from ESET NOD32 Antivirus, version of virus signature database 4871 (20100216) __________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; __________ Information from ESET NOD32 Antivirus, version of virus signature database 4871 (20100216) __________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; __________ Information from ESET NOD32 Antivirus, version of virus signature database 4871 (20100216) __________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; __________ Information from ESET NOD32 Antivirus, version of virus signature database 4899 (20100226) __________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The message was checked by ESET NOD32 Antivirus.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0505.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
