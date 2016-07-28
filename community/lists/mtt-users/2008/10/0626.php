<?
$subject_val = "[MTT users] Fwd: [Alert] Found server-side submit error messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 15:45:47 2008" -->
<!-- isoreceived="20081028194547" -->
<!-- sent="Tue, 28 Oct 2008 14:45:41 -0500" -->
<!-- isosent="20081028194541" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Fwd: [Alert] Found server-side submit error messages" -->
<!-- id="20081028194540.GA12140_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT users] Fwd: [Alert] Found server-side submit error messages<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 15:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="0625.php">Ethan Mallove: "[MTT users] [BOLO] MTT can abort on &quot;min_disk_free&quot; check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Reply:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I got an alert from the http-log-checker.pl script. Somebody appears to have
<br>
lost some MTT results. (Possibly due to an oversized database submission to
<br>
submit/index.php?) There's an open ticket for this (see
<br>
<a href="https://svn.open-mpi.org/trac/mtt/ticket/375">https://svn.open-mpi.org/trac/mtt/ticket/375</a>).  Currently there exists a simple
<br>
workaround for this problem. Put the below line in the problematic &quot;Test run&quot;
<br>
section(s). This will prevent oversided submissions by directing MTT to submit
<br>
the results in batches of 50 results instead of an entire section at a time,
<br>
which can reach 400+ for an Intel test run section.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;report_after_n_results = 50
<br>
<p>It's hard to know whose errors are in the HTTP error log with only the IP
<br>
address. If you want to verify they are or are not yours, visit a bogus URL off
<br>
open-mpi.org, e.g., www.open-mpi.org/what-is-foobars-ip-address, and ping me
<br>
about it. This will write your IP address to the log file, and then this can be
<br>
matched with the IP addr against the submit.php errors.
<br>
<p>-Ethan
<br>
<p><p>----- Forwarded message from Ethan Mallove &lt;emallove_at_[hidden]&gt; -----
<br>
<p>From: Ethan Mallove &lt;emallove_at_[hidden]&gt;
<br>
Date: Tue, 28 Oct 2008 08:00:41 -0400
<br>
To: Ethan.Mallove_at_[hidden], http-log-checker.pl-no-reply_at_[hidden]
<br>
Subject: [Alert] Found server-side submit error messages
<br>
Original-recipient: rfc822;ethan.mallove_at_[hidden]
<br>
<p>This email was automatically sent by http-log-checker.pl. You have received
<br>
it because some error messages were found in the HTTP(S) logs that
<br>
might indicate some MTT results were not successfully submitted by the
<br>
server-side PHP submit script (even if the MTT client has not
<br>
indicated a submission error).
<br>
<p>###############################################################
<br>
#
<br>
# The below log messages matched &quot;gz.*submit/index.php&quot; in 
<br>
# /var/log/httpd/www.open-mpi.org/ssl_error_log
<br>
#
<br>
###############################################################
<br>
<p>[client 129.79.240.114] PHP Warning:  gzeof(): supplied argument is not a valid stream resource in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php on line 1923
<br>
[client 129.79.240.114] PHP Warning:  gzgets(): supplied argument is not a valid stream resource in /nfs/rontok/xraid/data/osl/www/www.open-mpi.org/mtt/submit/index.php on line 1924
<br>
...
<br>
&lt;repeats ~10000 times&gt;
<br>
<p><p><p><p>----- End forwarded message -----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Previous message:</strong> <a href="0625.php">Ethan Mallove: "[MTT users] [BOLO] MTT can abort on &quot;min_disk_free&quot; check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
<li><strong>Reply:</strong> <a href="0627.php">Jeff Squyres: "Re: [MTT users] Fwd: [Alert] Found server-side submit error messages"</a>
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
