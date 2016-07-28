<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 16:12:13 2007" -->
<!-- isoreceived="20071005201213" -->
<!-- sent="Fri, 5 Oct 2007 22:11:18 +0200" -->
<!-- isosent="20071005201118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --mca btl_base_debug" -->
<!-- id="2FD73B80-5B77-4001-A722-79D82E79E073_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="470699C3.4060004_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-05 16:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2389.php">Jeff Squyres: "[OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>In reply to:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2007, at 10:08 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't really have an opinion either way, but I think you can turn
</span><br>
<span class="quotelev2">&gt;&gt; on *some* debug messages by setting btl_base_verbose to (for example)
</span><br>
<span class="quotelev2">&gt;&gt; 100.  It looks like these messages are mainly in the BTL base
</span><br>
<span class="quotelev2">&gt;&gt; selection logic and the openib BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, can you verify that you can get something out with
</span><br>
<span class="quotelev1">&gt; btl_base_verbose?  My experience is that
</span><br>
<span class="quotelev1">&gt; it has no effect at all.  After writing the earlier message I realized
</span><br>
<span class="quotelev1">&gt; that btl_base_debug is the one
</span><br>
<span class="quotelev1">&gt; that affects what comes out.  But as I said, this is different then  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt; the other frameworks and was
</span><br>
<span class="quotelev1">&gt; a source of confusion for me.
</span><br>
<p>My bad -- typo -- I meant to say btl_base_debug, not btl_base_verbose.
<br>
<p>I was replying to the fact that you said: &quot;In fact, the
<br>
debug/verbose code in the btl_base_open.c is such that we can never
<br>
turn on verbose messages.&quot;  I don't think that's a correct statement  
<br>
because you can &quot;--mca btl_base_debug 100&quot; and get some output.
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
<li><strong>Next message:</strong> <a href="2389.php">Jeff Squyres: "[OMPI devel] Consolidating some IB code"</a>
<li><strong>Previous message:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
<li><strong>In reply to:</strong> <a href="2387.php">Rolf vandeVaart: "Re: [OMPI devel] --mca btl_base_debug"</a>
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
