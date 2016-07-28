<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 01:26:33 2006" -->
<!-- isoreceived="20060413052633" -->
<!-- sent="Wed, 12 Apr 2006 23:26:23 -0600" -->
<!-- isosent="20060413052623" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SilverStorm IB" -->
<!-- id="5F27401E-0EB8-4716-BBA2-8BCDA06C1027_at_linuxnetworx.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF671B9B_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-13 01:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1052.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1050.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2006, at 8:59 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, the &quot;has a different size...&quot; errors means that you may not  
</span><br>
<span class="quotelev1">&gt; have been linking against the shared libraries that you thought you  
</span><br>
<span class="quotelev1">&gt; were.  This typically means that the executable expected to find an  
</span><br>
<span class="quotelev1">&gt; object in a library of a given size, but the actual size of the  
</span><br>
<span class="quotelev1">&gt; object was different.  So some kind of mismatch was occurring, and  
</span><br>
<span class="quotelev1">&gt; the segv at the end was therefore not surprising.
</span><br>
<p>Yeah; I wasn't surprised either.  That's why I just re-compiled the  
<br>
app &amp; ran it.  Then it worked.
<br>
<p>I'm suspicious (but can't prove it) that the opensm subnet manager  
<br>
(running on another node, and on the Mellanox 'ib gold' stack) wasn't  
<br>
working properly.  The problem is that I have nothing to back up the  
<br>
suspicion.  But the behavior was consistent to what I'd see if there  
<br>
was no subnet manager on the IB fabric (which may well have been the  
<br>
case, actually).  It's working now, though...
<br>
<pre>
--
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1052.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1050.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="1048.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SilverStorm IB"</a>
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
