<?
$subject_val = "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 18:15:19 2008" -->
<!-- isoreceived="20081028221519" -->
<!-- sent="Tue, 28 Oct 2008 18:15:13 -0400" -->
<!-- isosent="20081028221513" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Fwd: [Alert] Found server-side submit error messages" -->
<!-- id="C82BAF89-771B-4C24-9939-C75AB2CAAACA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081028194540.GA12140_at_sun.com" -->
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
<strong>Date:</strong> 2008-10-28 18:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Ethan Mallove: "[MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Ethan Mallove: "[MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Reply:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Reply:</strong> <a href="0629.php">Tim Mattox: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That host is in one of IU's clusters (odin).
<br>
<p>Tim/Josh -- this is you guys...
<br>
<p><p>On Oct 28, 2008, at 3:45 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got an alert from the http-log-checker.pl script. Somebody appears  
</span><br>
<span class="quotelev1">&gt; to have
</span><br>
<span class="quotelev1">&gt; lost some MTT results. (Possibly due to an oversized database  
</span><br>
<span class="quotelev1">&gt; submission to
</span><br>
<span class="quotelev1">&gt; submit/index.php?) There's an open ticket for this (see
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/375">https://svn.open-mpi.org/trac/mtt/ticket/375</a>).  Currently there  
</span><br>
<span class="quotelev1">&gt; exists a simple
</span><br>
<span class="quotelev1">&gt; workaround for this problem. Put the below line in the problematic  
</span><br>
<span class="quotelev1">&gt; &quot;Test run&quot;
</span><br>
<span class="quotelev1">&gt; section(s). This will prevent oversided submissions by directing MTT  
</span><br>
<span class="quotelev1">&gt; to submit
</span><br>
<span class="quotelev1">&gt; the results in batches of 50 results instead of an entire section at  
</span><br>
<span class="quotelev1">&gt; a time,
</span><br>
<span class="quotelev1">&gt; which can reach 400+ for an Intel test run section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    report_after_n_results = 50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's hard to know whose errors are in the HTTP error log with only  
</span><br>
<span class="quotelev1">&gt; the IP
</span><br>
<span class="quotelev1">&gt; address. If you want to verify they are or are not yours, visit a  
</span><br>
<span class="quotelev1">&gt; bogus URL off
</span><br>
<span class="quotelev1">&gt; open-mpi.org, e.g., www.open-mpi.org/what-is-foobars-ip-address, and  
</span><br>
<span class="quotelev1">&gt; ping me
</span><br>
<span class="quotelev1">&gt; about it. This will write your IP address to the log file, and then  
</span><br>
<span class="quotelev1">&gt; this can be
</span><br>
<span class="quotelev1">&gt; matched with the IP addr against the submit.php errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Forwarded message from Ethan Mallove &lt;emallove_at_[hidden]&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ethan Mallove &lt;emallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 28 Oct 2008 08:00:41 -0400
</span><br>
<span class="quotelev1">&gt; To: Ethan.Mallove_at_[hidden], http-log-checker.pl-no-reply_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [Alert] Found server-side submit error messages
</span><br>
<span class="quotelev1">&gt; Original-recipient: rfc822;ethan.mallove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email was automatically sent by http-log-checker.pl. You have  
</span><br>
<span class="quotelev1">&gt; received
</span><br>
<span class="quotelev1">&gt; it because some error messages were found in the HTTP(S) logs that
</span><br>
<span class="quotelev1">&gt; might indicate some MTT results were not successfully submitted by the
</span><br>
<span class="quotelev1">&gt; server-side PHP submit script (even if the MTT client has not
</span><br>
<span class="quotelev1">&gt; indicated a submission error).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###############################################################
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # The below log messages matched &quot;gz.*submit/index.php&quot; in
</span><br>
<span class="quotelev1">&gt; # /var/log/httpd/www.open-mpi.org/ssl_error_log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ###############################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [client 129.79.240.114] PHP Warning:  gzeof(): supplied argument is  
</span><br>
<span class="quotelev1">&gt; not a valid stream resource in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php 
</span><br>
<span class="quotelev1">&gt;  on line 1923
</span><br>
<span class="quotelev1">&gt; [client 129.79.240.114] PHP Warning:  gzgets(): supplied argument is  
</span><br>
<span class="quotelev1">&gt; not a valid stream resource in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php 
</span><br>
<span class="quotelev1">&gt;  on line 1924
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; &lt;repeats ~10000 times&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- End forwarded message -----
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
<li><strong>Next message:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="0626.php">Ethan Mallove: "[MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>In reply to:</strong> <a href="0626.php">Ethan Mallove: "[MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Reply:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Reply:</strong> <a href="0629.php">Tim Mattox: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
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
