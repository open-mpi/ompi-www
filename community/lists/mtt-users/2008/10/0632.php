<?
$subject_val = "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 13:46:59 2008" -->
<!-- isoreceived="20081030174659" -->
<!-- sent="Thu, 30 Oct 2008 13:46:58 -0400" -->
<!-- isosent="20081030174658" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Fwd: [Alert] Found server-side submit error messages" -->
<!-- id="1C8E043D-417E-49F3-BA45-44E48993D5EA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081030153613.GD12131_at_sun.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 13:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Previous message:</strong> <a href="0631.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>In reply to:</strong> <a href="0631.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Reply:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is probably me. I haven't had a chance to do anything about it  
<br>
yet. Hopefully tomorrow.
<br>
<p>I'm running the release branch (I believe), does this option exist for  
<br>
the release branch yet?
<br>
<p>-- Josh
<br>
<p>On Oct 30, 2008, at 11:36 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct/29/2008 09:15:37AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct/28/2008 06:17:12PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should we set a default value of report_after_n_results to, say,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 50 or 100?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 28, 2008, at 6:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That host is in one of IU's clusters (odin).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim/Josh -- this is you guys...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got another submit.php failure alert last night from IU. If
</span><br>
<span class="quotelev1">&gt; the IU tests are running on the MTT trunk, an &quot;svn up&quot; on it
</span><br>
<span class="quotelev1">&gt; should eliminate the issue. (report_after_n_results now
</span><br>
<span class="quotelev1">&gt; defaults to 100 - see r1239.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 28, 2008, at 3:45 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I got an alert from the http-log-checker.pl script. Somebody  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; appears to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lost some MTT results. (Possibly due to an oversized database  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; submission
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; submit/index.php?) There's an open ticket for this (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/375">https://svn.open-mpi.org/trac/mtt/ticket/375</a>).  Currently there  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exists a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; simple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; workaround for this problem. Put the below line in the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problematic &quot;Test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; section(s). This will prevent oversided submissions by directing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MTT to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; submit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the results in batches of 50 results instead of an entire  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; section at a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which can reach 400+ for an Intel test run section.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  report_after_n_results = 50
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's hard to know whose errors are in the HTTP error log with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only the IP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address. If you want to verify they are or are not yours, visit  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a bogus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL off
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; open-mpi.org, e.g., www.open-mpi.org/what-is-foobars-ip-address,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and ping
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; me
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; about it. This will write your IP address to the log file, and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; then this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; matched with the IP addr against the submit.php errors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----- Forwarded message from Ethan Mallove &lt;emallove_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Ethan Mallove &lt;emallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Tue, 28 Oct 2008 08:00:41 -0400
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Ethan.Mallove_at_[hidden], http-log-checker.pl-no-reply_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: [Alert] Found server-side submit error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Original-recipient: rfc822;ethan.mallove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This email was automatically sent by http-log-checker.pl. You have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; received
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it because some error messages were found in the HTTP(S) logs that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; might indicate some MTT results were not successfully submitted  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; by the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; server-side PHP submit script (even if the MTT client has not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indicated a submission error).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ###############################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # The below log messages matched &quot;gz.*submit/index.php&quot; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # /var/log/httpd/www.open-mpi.org/ssl_error_log
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ###############################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [client 129.79.240.114] PHP Warning:  gzeof(): supplied argument  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is not a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; valid stream resource in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 1923
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [client 129.79.240.114] PHP Warning:  gzgets(): supplied  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; argument is not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a valid stream resource in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line 1924
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;repeats ~10000 times&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----- End forwarded message -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Previous message:</strong> <a href="0631.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>In reply to:</strong> <a href="0631.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Reply:</strong> <a href="0633.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
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
