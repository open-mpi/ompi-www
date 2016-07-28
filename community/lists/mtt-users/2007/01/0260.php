<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 08:55:30 2007" -->
<!-- isoreceived="20070119135530" -->
<!-- sent="Fri, 19 Jan 2007 08:55:26 -0500" -->
<!-- isosent="20070119135526" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="ea86ce220701190555s70a6633fx2c348cfb54c4a0ff_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B81CF728-6F4E-4FB3-9462-66F0BFB672B6_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-19 08:55:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0262.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>On 1/18/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 18, 2007, at 10:37 PM, Tim Mattox wrote:
</span><br>
[snip description of a newline bug]
<br>
<p><span class="quotelev1">&gt; Fixed -- none have newlines now, so they'll all be in the one-line
</span><br>
<span class="quotelev1">&gt; output format.
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev2">&gt; &gt; I don't know if it is related or not, but for tests that fail without
</span><br>
<span class="quotelev2">&gt; &gt; timing out,
</span><br>
<span class="quotelev2">&gt; &gt; the debug output from MTT for that test does NOT have a line like
</span><br>
<span class="quotelev2">&gt; &gt; these:
</span><br>
<span class="quotelev2">&gt; &gt; test_result: 1      (passed)
</span><br>
<span class="quotelev2">&gt; &gt; test_result: 2      (skipped)
</span><br>
<span class="quotelev2">&gt; &gt; test_result: 3      (timed out)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure?  Lines 80-84 of Correctness.pm are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          if ($results-&gt;{timed_out}) {
</span><br>
<span class="quotelev1">&gt;              Warning(&quot;$str TIMED OUT (failed)\n&quot;);
</span><br>
<span class="quotelev1">&gt;          } else {
</span><br>
<span class="quotelev1">&gt;              Warning(&quot;$str FAILED\n&quot;);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you talking about some other output?  Or are you asking for
</span><br>
<span class="quotelev1">&gt; something in (parentheses)?
</span><br>
<p>Sorry, I wasn't clear.  The current output for each test in the debug file
<br>
usually includes a line &quot;test_result: X&quot; with X replaced by a number.
<br>
However, for tests that fail outright, this line is missing.  This missing
<br>
line happened to correspond to the tests that had a newline in the result
<br>
message that I discussed (snipped) above.
<br>
<p>Please don't put in the parentheses things.  That was just me commenting
<br>
on which number meant what.
<br>
<p><p><span class="quotelev1">&gt; If you're in the middle of revamping your parser to match the MTT 2.0
</span><br>
<span class="quotelev1">&gt; output, I might suggest that it might be far easier to just
</span><br>
<span class="quotelev1">&gt; incorporate your desired output into MTT itself, for two reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the debug output can change at any time; it was meant to be for
</span><br>
<span class="quotelev1">&gt; debugging, not necessarily for screen scraping.
</span><br>
<p>Point taken.
<br>
<p><span class="quotelev1">&gt; 2. there would be no need for screen scraping/parsing; you would have
</span><br>
<span class="quotelev1">&gt; the data immediately available and all you have to do is output it
</span><br>
<span class="quotelev1">&gt; into the format that you want.  We should be able to accommodate
</span><br>
<span class="quotelev1">&gt; whatever you need via an MTT Reporter plugin.  I'm guessing this
</span><br>
<span class="quotelev1">&gt; should be pretty straightforward...?
</span><br>
<p>Where can I find some documentation for or examples of a plugin?
<br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><p><pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0259.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0262.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Reply:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
