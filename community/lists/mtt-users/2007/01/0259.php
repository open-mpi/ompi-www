<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 23:23:57 2007" -->
<!-- isoreceived="20070119042357" -->
<!-- sent="Thu, 18 Jan 2007 23:23:42 -0500" -->
<!-- isosent="20070119042342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="B81CF728-6F4E-4FB3-9462-66F0BFB672B6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220701181937x1c6f7f2nf4b6de5c10b3bf4f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 23:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0258.php">Tim Mattox: "[MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0258.php">Tim Mattox: "[MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2007, at 10:37 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; I found some minor bugs/inconveniences in lib/MTT/Test/Analyze/ 
</span><br>
<span class="quotelev1">&gt; Correctness.pm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not consistent about making &quot;$report-&gt;{result_message}&quot; get  
</span><br>
<span class="quotelev1">&gt; assigned
</span><br>
<span class="quotelev1">&gt; a value without an embedded newline.  For example, at lines 93 &amp; 96
</span><br>
<span class="quotelev1">&gt; a newline is embedded, yet at lines 72, 76, 87-88 the string is ended
</span><br>
<span class="quotelev1">&gt; without a newline.  For our purposes at IU, with a local e-mail
</span><br>
<span class="quotelev1">&gt; generation script,
</span><br>
<span class="quotelev1">&gt; it would be great if those \n newlines could be removed from lines  
</span><br>
<span class="quotelev1">&gt; 93 &amp; 96,
</span><br>
<span class="quotelev1">&gt; so we could parse the MTT debug output more easily.
</span><br>
<p>Fixed -- none have newlines now, so they'll all be in the one-line  
<br>
output format.
<br>
<p><span class="quotelev1">&gt; I don't know if it is related or not, but for tests that fail without
</span><br>
<span class="quotelev1">&gt; timing out,
</span><br>
<span class="quotelev1">&gt; the debug output from MTT for that test does NOT have a line like
</span><br>
<span class="quotelev1">&gt; these:
</span><br>
<span class="quotelev1">&gt; test_result: 1      (passed)
</span><br>
<span class="quotelev1">&gt; test_result: 2      (skipped)
</span><br>
<span class="quotelev1">&gt; test_result: 3      (timed out)
</span><br>
<p>Are you sure?  Lines 80-84 of Correctness.pm are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($results-&gt;{timed_out}) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warning(&quot;$str TIMED OUT (failed)\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warning(&quot;$str FAILED\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Are you talking about some other output?  Or are you asking for  
<br>
something in (parentheses)?  Perhaps:
<br>
<p>test_result: 4 FAILED (failed)
<br>
<p><span class="quotelev1">&gt; Again, for our e-mail generation script, it would be much easier if  
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; was a corresponding &quot;test_result: X&quot; for each test regardless of if  
</span><br>
<span class="quotelev1">&gt; it failed, timed-out, was skipped, or passed.
</span><br>
<p>If you're in the middle of revamping your parser to match the MTT 2.0  
<br>
output, I might suggest that it might be far easier to just  
<br>
incorporate your desired output into MTT itself, for two reasons:
<br>
<p>1. the debug output can change at any time; it was meant to be for  
<br>
debugging, not necessarily for screen scraping.
<br>
<p>2. there would be no need for screen scraping/parsing; you would have  
<br>
the data immediately available and all you have to do is output it  
<br>
into the format that you want.  We should be able to accommodate  
<br>
whatever you need via an MTT Reporter plugin.  I'm guessing this  
<br>
should be pretty straightforward...?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0258.php">Tim Mattox: "[MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0258.php">Tim Mattox: "[MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
