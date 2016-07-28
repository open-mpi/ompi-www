<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 16:12:11 2007" -->
<!-- isoreceived="20070709201211" -->
<!-- sent="Mon, 9 Jul 2007 16:11:57 -0400" -->
<!-- isosent="20070709201157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;New&amp;quot; IB vendor and MTU question" -->
<!-- id="F3845BBB-E2F5-4CEC-83F3-52363FCC08B2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200707092117.27894.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2007-07-09 16:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1818.php">Brian Barrett: "[OMPI devel] fake rdma flag again?"</a>
<li><strong>Previous message:</strong> <a href="1816.php">Peter Kjellstrom: "[OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<li><strong>In reply to:</strong> <a href="1816.php">Peter Kjellstrom: "[OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2007, at 3:17 PM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; Our new HP cluster has 25208 HCAs (Mellanox Arbel) but a new vendor- 
</span><br>
<span class="quotelev1">&gt; id... We
</span><br>
<span class="quotelev1">&gt; have 0x1708 (presumably HP, hardware wise Cisco (Mellanox)) to add  
</span><br>
<span class="quotelev1">&gt; to the
</span><br>
<p>Added in r15316; thanks for pointing it out.
<br>
<p><span class="quotelev1">&gt; existing list in share/openmpi/mca-btl-openib-hca-params.ini that  
</span><br>
<span class="quotelev1">&gt; currently
</span><br>
<span class="quotelev1">&gt; contains:
</span><br>
<span class="quotelev1">&gt;  # Mellanox      0x2c9
</span><br>
<span class="quotelev1">&gt;  # Cisco         0x5ad
</span><br>
<span class="quotelev1">&gt;  # Silverstorm   0x66a
</span><br>
<span class="quotelev1">&gt;  # Voltaire      0x8f1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhat related question 1: Is there a blessed way to map these  
</span><br>
<span class="quotelev1">&gt; ids back to
</span><br>
<span class="quotelev1">&gt; strings?
</span><br>
<p>Not via C API, no.  But the IEEE OUI web page can be used to look up  
<br>
these values:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://standards.ieee.org/regauth/oui/">http://standards.ieee.org/regauth/oui/</a>
<br>
<p><span class="quotelev1">&gt; question 2: Is 1024 really the best MTU for DDR Arbel? I seem to  
</span><br>
<span class="quotelev1">&gt; remember this
</span><br>
<span class="quotelev1">&gt; being 2048...
</span><br>
<p>I *believe* that that value came from Mellanox, but I don't remember  
<br>
offhand.  But it could also be a &quot;doesn't really matter either way&quot;  
<br>
issue.  You might want to try both with your apps and see if there's  
<br>
a performance difference.  Let us know what happens.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1818.php">Brian Barrett: "[OMPI devel] fake rdma flag again?"</a>
<li><strong>Previous message:</strong> <a href="1816.php">Peter Kjellstrom: "[OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
<li><strong>In reply to:</strong> <a href="1816.php">Peter Kjellstrom: "[OMPI devel] &quot;New&quot; IB vendor and MTU question"</a>
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
