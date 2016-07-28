<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 11:21:19 2007" -->
<!-- isoreceived="20070119162119" -->
<!-- sent="Fri, 19 Jan 2007 11:21:11 -0500" -->
<!-- isosent="20070119162111" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="20070119162111.GA39149_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220701190555s70a6633fx2c348cfb54c4a0ff_at_mail.gmail.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 11:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0262.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan/19/2007 08:55:26AM, Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/18/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 18, 2007, at 10:37 PM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt; [snip description of a newline bug]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Fixed -- none have newlines now, so they'll all be in the one-line
</span><br>
<span class="quotelev2">&gt; &gt; output format.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't know if it is related or not, but for tests that fail without
</span><br>
<span class="quotelev3">&gt; &gt; &gt; timing out,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the debug output from MTT for that test does NOT have a line like
</span><br>
<span class="quotelev3">&gt; &gt; &gt; these:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test_result: 1      (passed)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test_result: 2      (skipped)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; test_result: 3      (timed out)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure?  Lines 80-84 of Correctness.pm are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;          if ($results-&gt;{timed_out}) {
</span><br>
<span class="quotelev2">&gt; &gt;              Warning(&quot;$str TIMED OUT (failed)\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          } else {
</span><br>
<span class="quotelev2">&gt; &gt;              Warning(&quot;$str FAILED\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you talking about some other output?  Or are you asking for
</span><br>
<span class="quotelev2">&gt; &gt; something in (parentheses)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I wasn't clear.  The current output for each test in the debug file
</span><br>
<span class="quotelev1">&gt; usually includes a line &quot;test_result: X&quot; with X replaced by a number.
</span><br>
<span class="quotelev1">&gt; However, for tests that fail outright, this line is missing.  This missing
</span><br>
<span class="quotelev1">&gt; line happened to correspond to the tests that had a newline in the result
</span><br>
<span class="quotelev1">&gt; message that I discussed (snipped) above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please don't put in the parentheses things.  That was just me commenting
</span><br>
<span class="quotelev1">&gt; on which number meant what.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you're in the middle of revamping your parser to match the MTT 2.0
</span><br>
<span class="quotelev2">&gt; &gt; output, I might suggest that it might be far easier to just
</span><br>
<span class="quotelev2">&gt; &gt; incorporate your desired output into MTT itself, for two reasons:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. the debug output can change at any time; it was meant to be for
</span><br>
<span class="quotelev2">&gt; &gt; debugging, not necessarily for screen scraping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Point taken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. there would be no need for screen scraping/parsing; you would have
</span><br>
<span class="quotelev2">&gt; &gt; the data immediately available and all you have to do is output it
</span><br>
<span class="quotelev2">&gt; &gt; into the format that you want.  We should be able to accommodate
</span><br>
<span class="quotelev2">&gt; &gt; whatever you need via an MTT Reporter plugin.  I'm guessing this
</span><br>
<span class="quotelev2">&gt; &gt; should be pretty straightforward...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where can I find some documentation for or examples of a plugin?
</span><br>
<p>They're all in this directory:
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/">https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/</a>
<br>
<p>You probably want to look at these:
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/TextFile.pm">https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/TextFile.pm</a>
<br>
<a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/Email.pm">https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/Email.pm</a>
<br>
<a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/INIFile.pm">https://svn.open-mpi.org/trac/mtt/browser/trunk/lib/MTT/Reporter/INIFile.pm</a>
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0262.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
