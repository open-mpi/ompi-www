<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 22:37:12 2007" -->
<!-- isoreceived="20070119033712" -->
<!-- sent="Thu, 18 Jan 2007 22:37:08 -0500" -->
<!-- isosent="20070119033708" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="ea86ce220701181937x1c6f7f2nf4b6de5c10b3bf4f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 22:37:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0257.php">Ethan Mallove: "[MTT users] MTT 2.0 switchover status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi MTT developers,
<br>
(Sorry to those who are just MTT users, you can skip this message).
<br>
<p>I found some minor bugs/inconveniences in lib/MTT/Test/Analyze/Correctness.pm.
<br>
<p>It is not consistent about making &quot;$report-&gt;{result_message}&quot; get assigned
<br>
a value without an embedded newline.  For example, at lines 93 &amp; 96
<br>
a newline is embedded, yet at lines 72, 76, 87-88 the string is ended
<br>
without a newline.  For our purposes at IU, with a local e-mail
<br>
generation script,
<br>
it would be great if those \n newlines could be removed from lines 93 &amp; 96,
<br>
so we could parse the MTT debug output more easily.
<br>
<p>As it is right now, the result message for a test is reported in two very
<br>
distinct ways, depending on how a test passes or fails:
<br>
1) ugly format from failed tests:
<br>
RESULT_MESSAGE_BEGIN
<br>
Failed; exit status: 139
<br>
RESULT_MESSAGE_END
<br>
<p>2) preferred format:
<br>
result_message: Failed; timeout expired (120 seconds) )
<br>
or
<br>
result_message: Passed
<br>
or
<br>
result_message: Skipped
<br>
<p>I don't know if it is related or not, but for tests that fail without
<br>
timing out,
<br>
the debug output from MTT for that test does NOT have a line like
<br>
these:
<br>
test_result: 1      (passed)
<br>
test_result: 2      (skipped)
<br>
test_result: 3      (timed out)
<br>
<p>Again, for our e-mail generation script, it would be much easier if there
<br>
was a corresponding &quot;test_result: X&quot; for each test regardless of if it failed,
<br>
timed-out, was skipped, or passed.
<br>
<p>Thanks!
<br>
<pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0257.php">Ethan Mallove: "[MTT users] MTT 2.0 switchover status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
