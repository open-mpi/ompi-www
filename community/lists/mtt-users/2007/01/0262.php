<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 11:40:57 2007" -->
<!-- isoreceived="20070119164057" -->
<!-- sent="Fri, 19 Jan 2007 11:40:39 -0500" -->
<!-- isosent="20070119164039" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="AF9C1A0A-B09A-4AE2-BF47-A6C0ED77795E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 11:40:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2007, at 8:55 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Are you talking about some other output?  Or are you asking for
</span><br>
<span class="quotelev2">&gt;&gt; something in (parentheses)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I wasn't clear.  The current output for each test in the  
</span><br>
<span class="quotelev1">&gt; debug file
</span><br>
<span class="quotelev1">&gt; usually includes a line &quot;test_result: X&quot; with X replaced by a number.
</span><br>
<span class="quotelev1">&gt; However, for tests that fail outright, this line is missing.  This  
</span><br>
<span class="quotelev1">&gt; missing
</span><br>
<span class="quotelev1">&gt; line happened to correspond to the tests that had a newline in the  
</span><br>
<span class="quotelev1">&gt; result
</span><br>
<span class="quotelev1">&gt; message that I discussed (snipped) above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please don't put in the parentheses things.  That was just me  
</span><br>
<span class="quotelev1">&gt; commenting
</span><br>
<span class="quotelev1">&gt; on which number meant what.
</span><br>
<p>Aaahhh...  Ok.
<br>
<p><span class="quotelev2">&gt;&gt; 2. there would be no need for screen scraping/parsing; you would have
</span><br>
<span class="quotelev2">&gt;&gt; the data immediately available and all you have to do is output it
</span><br>
<span class="quotelev2">&gt;&gt; into the format that you want.  We should be able to accommodate
</span><br>
<span class="quotelev2">&gt;&gt; whatever you need via an MTT Reporter plugin.  I'm guessing this
</span><br>
<span class="quotelev2">&gt;&gt; should be pretty straightforward...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where can I find some documentation for or examples of a plugin?
</span><br>
<p>Probably my phone number.  :-\
<br>
<p>All the current Reporter plugins are in lib/MTT/Reporter/*.pm.   
<br>
MTTDatabase.pm is the most comprehensive, but the others are quite  
<br>
functional (Email.pm, TextFile.pm, INIFile.pm).  The interface should  
<br>
be rather straightforward:
<br>
<p>Init: Called when the MTT client initializes.
<br>
<p>Finalize: Called when the MTT client finalizes.
<br>
<p>Submit: Called when the MTT client wants to submit something.  If you  
<br>
look at the output from a Verbose run of the MTT client, you can see  
<br>
that this function is invoked at the end of each test run phase  
<br>
iteration.
<br>
<p>I'm sure you'll have my questions -- feel free to ping me/Ethan with  
<br>
whatever you need.
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
<li><strong>Next message:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0261.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0260.php">Tim Mattox: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
