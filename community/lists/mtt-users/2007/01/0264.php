<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 12:34:36 2007" -->
<!-- isoreceived="20070119173436" -->
<!-- sent="Fri, 19 Jan 2007 12:33:49 -0500" -->
<!-- isosent="20070119173349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Minor bug found in MTT 2 client side." -->
<!-- id="5734E5EE-7EE2-4D67-ACEA-27CBDEACEF89_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AE2B7A50-346B-44C2-BCDF-D28CA2A0832F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-19 12:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up for those following this on the mailing list...
<br>
<p>I chatted with Tim about this on the phone a bit.  It turns out that  
<br>
the IU parser is not parsing the debugging MTT output, but rather the  
<br>
text reporter output.  They do this because they do a whole bunch of  
<br>
MTT runs and then parse *all* the text reporter output to make a  
<br>
single e-mail report.
<br>
<p>What happened was that we changed some of the field names in MTT, so  
<br>
the IU parser wasn't finding the fields that they wanted.
<br>
<p>Additionally, I just filed ticket #191 -- we're apparently somehow  
<br>
skipping fields in the TextReporter (and possibly elsewhere) that  
<br>
have a &quot;0&quot; value.  That needs to be fixed.
<br>
<p><p><p>On Jan 19, 2007, at 11:50 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 19, 2007, at 8:55 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, I wasn't clear.  The current output for each test in the
</span><br>
<span class="quotelev2">&gt;&gt; debug file
</span><br>
<span class="quotelev2">&gt;&gt; usually includes a line &quot;test_result: X&quot; with X replaced by a number.
</span><br>
<span class="quotelev2">&gt;&gt; However, for tests that fail outright, this line is missing.  This
</span><br>
<span class="quotelev2">&gt;&gt; missing
</span><br>
<span class="quotelev2">&gt;&gt; line happened to correspond to the tests that had a newline in the
</span><br>
<span class="quotelev2">&gt;&gt; result
</span><br>
<span class="quotelev2">&gt;&gt; message that I discussed (snipped) above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please don't put in the parentheses things.  That was just me
</span><br>
<span class="quotelev2">&gt;&gt; commenting
</span><br>
<span class="quotelev2">&gt;&gt; on which number meant what.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I forgot to mention -- let me know where you land on the whole
</span><br>
<span class="quotelev1">&gt; &quot;continue to parse debug output&quot; vs. &quot;write an MTT reporter&quot; issue.
</span><br>
<span class="quotelev1">&gt; If you write a new reporter, this particular issue ^^ is moot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>Previous message:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<li><strong>In reply to:</strong> <a href="0263.php">Jeff Squyres: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
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
