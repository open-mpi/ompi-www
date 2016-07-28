<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 07:37:53 2005" -->
<!-- isoreceived="20050815123753" -->
<!-- sent="Mon, 15 Aug 2005 15:37:20 +0300" -->
<!-- isosent="20050815123720" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="20050815123720.GA21091_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4a016c242b44a1c8ff33e1a1995225b4_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-15 07:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 15, 2005 at 08:09:16AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 14, 2005, at 8:53 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Lets say application wants to send buffer B to 100 other ranks. It does
</span><br>
<span class="quotelev2">&gt; &gt; 100 MPI_Isend (B).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is actually an erroneous MPI program.  MPI specifically states 
</span><br>
<span class="quotelev1">&gt; that a buffer can be used for exactly one communication at a time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
This is actually the way MPI_Bcast works right now IMHO :)
<br>
<p><span class="quotelev1">&gt; I don't know if this matters or not, because users will likely still do 
</span><br>
<span class="quotelev1">&gt; it, but I thought I'd bring up the point...  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Right.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
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
