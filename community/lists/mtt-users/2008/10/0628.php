<?
$subject_val = "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 18:17:17 2008" -->
<!-- isoreceived="20081028221717" -->
<!-- sent="Tue, 28 Oct 2008 18:17:12 -0400" -->
<!-- isosent="20081028221712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Fwd: [Alert] Found server-side submit error messages" -->
<!-- id="6B3BC589-E124-4572-9DFB-33E1371D1D5C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C82BAF89-771B-4C24-9939-C75AB2CAAACA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Fwd: [Alert] Found server-side submit error messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 18:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Tim Mattox: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0630.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Reply:</strong> <a href="0630.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should we set a default value of report_after_n_results to, say, 50 or  
<br>
100?
<br>
<p>On Oct 28, 2008, at 6:15 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That host is in one of IU's clusters (odin).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim/Josh -- this is you guys...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 3:45 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got an alert from the http-log-checker.pl script. Somebody  
</span><br>
<span class="quotelev2">&gt;&gt; appears to have
</span><br>
<span class="quotelev2">&gt;&gt; lost some MTT results. (Possibly due to an oversized database  
</span><br>
<span class="quotelev2">&gt;&gt; submission to
</span><br>
<span class="quotelev2">&gt;&gt; submit/index.php?) There's an open ticket for this (see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/375">https://svn.open-mpi.org/trac/mtt/ticket/375</a>).  Currently there  
</span><br>
<span class="quotelev2">&gt;&gt; exists a simple
</span><br>
<span class="quotelev2">&gt;&gt; workaround for this problem. Put the below line in the problematic  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Test run&quot;
</span><br>
<span class="quotelev2">&gt;&gt; section(s). This will prevent oversided submissions by directing  
</span><br>
<span class="quotelev2">&gt;&gt; MTT to submit
</span><br>
<span class="quotelev2">&gt;&gt; the results in batches of 50 results instead of an entire section  
</span><br>
<span class="quotelev2">&gt;&gt; at a time,
</span><br>
<span class="quotelev2">&gt;&gt; which can reach 400+ for an Intel test run section.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   report_after_n_results = 50
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's hard to know whose errors are in the HTTP error log with only  
</span><br>
<span class="quotelev2">&gt;&gt; the IP
</span><br>
<span class="quotelev2">&gt;&gt; address. If you want to verify they are or are not yours, visit a  
</span><br>
<span class="quotelev2">&gt;&gt; bogus URL off
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi.org, e.g., www.open-mpi.org/what-is-foobars-ip-address,  
</span><br>
<span class="quotelev2">&gt;&gt; and ping me
</span><br>
<span class="quotelev2">&gt;&gt; about it. This will write your IP address to the log file, and then  
</span><br>
<span class="quotelev2">&gt;&gt; this can be
</span><br>
<span class="quotelev2">&gt;&gt; matched with the IP addr against the submit.php errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Forwarded message from Ethan Mallove &lt;emallove_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Ethan Mallove &lt;emallove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 28 Oct 2008 08:00:41 -0400
</span><br>
<span class="quotelev2">&gt;&gt; To: Ethan.Mallove_at_[hidden], http-log-checker.pl-no-reply_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [Alert] Found server-side submit error messages
</span><br>
<span class="quotelev2">&gt;&gt; Original-recipient: rfc822;ethan.mallove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This email was automatically sent by http-log-checker.pl. You have  
</span><br>
<span class="quotelev2">&gt;&gt; received
</span><br>
<span class="quotelev2">&gt;&gt; it because some error messages were found in the HTTP(S) logs that
</span><br>
<span class="quotelev2">&gt;&gt; might indicate some MTT results were not successfully submitted by  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; server-side PHP submit script (even if the MTT client has not
</span><br>
<span class="quotelev2">&gt;&gt; indicated a submission error).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ###############################################################
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # The below log messages matched &quot;gz.*submit/index.php&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; # /var/log/httpd/www.open-mpi.org/ssl_error_log
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; ###############################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [client 129.79.240.114] PHP Warning:  gzeof(): supplied argument is  
</span><br>
<span class="quotelev2">&gt;&gt; not a valid stream resource in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php 
</span><br>
<span class="quotelev2">&gt;&gt;  on line 1923
</span><br>
<span class="quotelev2">&gt;&gt; [client 129.79.240.114] PHP Warning:  gzgets(): supplied argument  
</span><br>
<span class="quotelev2">&gt;&gt; is not a valid stream resource in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php 
</span><br>
<span class="quotelev2">&gt;&gt;  on line 1924
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; &lt;repeats ~10000 times&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- End forwarded message -----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Tim Mattox: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0630.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Reply:</strong> <a href="0630.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
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
