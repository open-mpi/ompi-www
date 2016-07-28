<?
$subject_val = "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 22:06:37 2008" -->
<!-- isoreceived="20081029020637" -->
<!-- sent="Tue, 28 Oct 2008 22:06:33 -0400" -->
<!-- isosent="20081029020633" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Fwd: [Alert] Found server-side submit error messages" -->
<!-- id="ea86ce220810281906y25e4197cv8579f98cb8b9b718_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 22:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0630.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Previous message:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into this a week ago on sif, so I added report_after_n_results = 100
<br>
for our regular nightly tests on sif, odin and bigred.  Josh, could this be a
<br>
problem with any of the tests you run?
<br>
<p>On Tue, Oct 28, 2008 at 6:15 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; That host is in one of IU's clusters (odin).
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
<span class="quotelev2">&gt;&gt; I got an alert from the http-log-checker.pl script. Somebody appears to
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; lost some MTT results. (Possibly due to an oversized database submission
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; submit/index.php?) There's an open ticket for this (see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/ticket/375">https://svn.open-mpi.org/trac/mtt/ticket/375</a>).  Currently there exists a
</span><br>
<span class="quotelev2">&gt;&gt; simple
</span><br>
<span class="quotelev2">&gt;&gt; workaround for this problem. Put the below line in the problematic &quot;Test
</span><br>
<span class="quotelev2">&gt;&gt; run&quot;
</span><br>
<span class="quotelev2">&gt;&gt; section(s). This will prevent oversided submissions by directing MTT to
</span><br>
<span class="quotelev2">&gt;&gt; submit
</span><br>
<span class="quotelev2">&gt;&gt; the results in batches of 50 results instead of an entire section at a
</span><br>
<span class="quotelev2">&gt;&gt; time,
</span><br>
<span class="quotelev2">&gt;&gt; which can reach 400+ for an Intel test run section.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   report_after_n_results = 50
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's hard to know whose errors are in the HTTP error log with only the IP
</span><br>
<span class="quotelev2">&gt;&gt; address. If you want to verify they are or are not yours, visit a bogus
</span><br>
<span class="quotelev2">&gt;&gt; URL off
</span><br>
<span class="quotelev2">&gt;&gt; open-mpi.org, e.g., www.open-mpi.org/what-is-foobars-ip-address, and ping
</span><br>
<span class="quotelev2">&gt;&gt; me
</span><br>
<span class="quotelev2">&gt;&gt; about it. This will write your IP address to the log file, and then this
</span><br>
<span class="quotelev2">&gt;&gt; can be
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
<span class="quotelev2">&gt;&gt; ----- Forwarded message from Ethan Mallove &lt;emallove_at_[hidden]&gt; -----
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
<span class="quotelev2">&gt;&gt; might indicate some MTT results were not successfully submitted by the
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
<span class="quotelev2">&gt;&gt; [client 129.79.240.114] PHP Warning:  gzeof(): supplied argument is not a
</span><br>
<span class="quotelev2">&gt;&gt; valid stream resource in
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php on line
</span><br>
<span class="quotelev2">&gt;&gt; 1923
</span><br>
<span class="quotelev2">&gt;&gt; [client 129.79.240.114] PHP Warning:  gzgets(): supplied argument is not a
</span><br>
<span class="quotelev2">&gt;&gt; valid stream resource in
</span><br>
<span class="quotelev2">&gt;&gt; /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php on line
</span><br>
<span class="quotelev2">&gt;&gt; 1924
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0630.php">Ethan Mallove: "Re: [MTT users] Fwd: [Alert] Found server-side submit error	messages"</a>
<li><strong>Previous message:</strong> <a href="0628.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>In reply to:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- nextthread="start" -->
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
