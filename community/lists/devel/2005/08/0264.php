<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 29 21:17:45 2005" -->
<!-- isoreceived="20050830021745" -->
<!-- sent="Mon, 29 Aug 2005 19:17:23 -0700 (PDT)" -->
<!-- isosent="20050830021723" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re:  pml vs bml vs btl" -->
<!-- id="Pine.LNX.4.60.0508291853060.9260_at_baily.cs.ubc.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b99a56f2a87872b678338ce72d474876_at_open-mpi.org" -->
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
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-29 21:17:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Jeff Squyres: "Re:  small shell quoting issue"</a>
<li><strong>Previous message:</strong> <a href="0263.php">Ralf Wildenhues: "small shell quoting issue"</a>
<li><strong>In reply to:</strong> <a href="0259.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>Thanks for the clarity.  I just had a few quick follow-up questions, 
<br>
inline below.
<br>
<p>brad
<br>
<p>On Sat, 27 Aug 2005, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Particularly, I'm just curious about the difference between pml-bml-btl
</span><br>
<span class="quotelev2">&gt;&gt; and the old pml-ptl (as described in your TEG paper) and why changes
</span><br>
<span class="quotelev2">&gt;&gt; were made.  I'm also trying to understand the differences between this
</span><br>
<span class="quotelev2">&gt;&gt; approach and LAM's RPI as well as the device-channel distinction made
</span><br>
<span class="quotelev2">&gt;&gt; in MPICH2; could anyone recommend something I could read or give me a
</span><br>
<span class="quotelev2">&gt;&gt; brief description here to satisfy my curiosities?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't speak for the MPICH2 device channel, but here's a summary of
</span><br>
<span class="quotelev1">&gt; the rest...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PML: Pretty much the same as it was described in the paper.  Its
</span><br>
<span class="quotelev1">&gt; interface is basically MPI semantics (i.e., it sits right under
</span><br>
<span class="quotelev1">&gt; MPI_SEND and the rest).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTL: Byte Transfer Layer; it's the next generation of PTL.  The BTL is
</span><br>
<span class="quotelev1">&gt; much more simple than the PTL, and removes all vestigaes of any MPI
</span><br>
<span class="quotelev1">&gt; semantics that still lived in the PTL.  It's a very simple byte mover
</span><br>
<span class="quotelev1">&gt; layer, intended to make it quite easy to implement new network
</span><br>
<span class="quotelev1">&gt; interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I was curious about what you meant by the removal of MPI semantics.  Do 
<br>
you mean it simply has no notion of tags, ranks, etc?  In other words, 
<br>
does it simply put the data into some sort of format so that the PML can 
<br>
operate on with its own state machine?
<br>
<p>Also, say you had some underlying protocol that allowed unordered delivery 
<br>
of data (so not fully ordered like TCP); which &quot;layer&quot; would the notion of 
<br>
&quot;order&quot; be handled in?  I'm guessing PML would need some sort of sequence 
<br>
number attached to it; is that right?
<br>
<p><p><span class="quotelev1">&gt; BML: BTL Management Layer; this used to be part of the PML but we
</span><br>
<span class="quotelev1">&gt; recently split it off into its own framework.  It's mainly the utility
</span><br>
<span class="quotelev1">&gt; gorp of managing multiple BTL modules in a single process.  This was
</span><br>
<span class="quotelev1">&gt; done because when working with the next generation of collectives,
</span><br>
<span class="quotelev1">&gt; MPI-2 IO, and MPI-2 one sided operations, we want to have the ability
</span><br>
<span class="quotelev1">&gt; to use the PML (which the collectives do today, for example) or to be
</span><br>
<span class="quotelev1">&gt; able to dive right down and directly use the BTLs (i.e., cut out a
</span><br>
<span class="quotelev1">&gt; little latency).
</span><br>
<p>In the cases where the BML is required, does it cost extra memcpy's?
<br>
<p>Also, has anyone ever compared the costs of OpenMPI striping using BMLs 
<br>
versus a version where this is bypassed and something like channel bonding 
<br>
is used?  I'm just wondering how comparable they might be although I 
<br>
understand that channel bonding might not be so portable...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LAM's RPI is actually sorta similar to the PML -- it implements the
</span><br>
<span class="quotelev1">&gt; MPI-level semantics.  But nothing was broken out below the RPI -- it
</span><br>
<span class="quotelev1">&gt; had to implement the MPI-level semantics *and* do multi-device *and* be
</span><br>
<span class="quotelev1">&gt; the byte transfer layer.
</span><br>
<p>I'm too used to this and trying to become familiar with the new way ;-)
<br>
<p><span class="quotelev1">&gt; One point worth clarifying -- the word &quot;layer&quot; here is somewhat
</span><br>
<span class="quotelev1">&gt; misleading.  These are not so much &quot;layers&quot; (meaning that you *have* to
</span><br>
<span class="quotelev1">&gt; go through the PML and then through the BML and then through the BTL to
</span><br>
<span class="quotelev1">&gt; send bytes) as they are logical separation of functionality.  There are
</span><br>
<span class="quotelev1">&gt; certainly cases where the BML is bypassed, and, as I mentioned above,
</span><br>
<span class="quotelev1">&gt; we want to investigate bypassing the PML as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So, guessing, is BML bypassed when only one device is available?
<br>
<p><p><span class="quotelev1">&gt; Does that help?
</span><br>
<p>Indeed! Thanks again.
<br>
<p><p>b
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Jeff Squyres: "Re:  small shell quoting issue"</a>
<li><strong>Previous message:</strong> <a href="0263.php">Ralf Wildenhues: "small shell quoting issue"</a>
<li><strong>In reply to:</strong> <a href="0259.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
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
