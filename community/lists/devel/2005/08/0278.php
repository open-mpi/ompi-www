<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 15:03:42 2005" -->
<!-- isoreceived="20050831200342" -->
<!-- sent="Wed, 31 Aug 2005 14:03:32 -0600" -->
<!-- isosent="20050831200332" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  pml vs bml vs btl" -->
<!-- id="F573EB36-97B7-483E-9CED-412CAFE7E646_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F47BB78-D9A5-4905-8379-2D30F9DB1A76_at_open-mpi.org" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-31 15:03:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">George Bosilca: "ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0313.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0313.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 31, 2005, at 1:06 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 29, 2005, at 9:17 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML: Pretty much the same as it was described in the paper.  Its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface is basically MPI semantics (i.e., it sits right under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SEND and the rest).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL: Byte Transfer Layer; it's the next generation of PTL.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much more simple than the PTL, and removes all vestigaes of any MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; semantics that still lived in the PTL.  It's a very simple byte  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mover
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layer, intended to make it quite easy to implement new network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was curious about what you meant by the removal of MPI
</span><br>
<span class="quotelev2">&gt;&gt; semantics.  Do
</span><br>
<span class="quotelev2">&gt;&gt; you mean it simply has no notion of tags, ranks, etc?  In other  
</span><br>
<span class="quotelev2">&gt;&gt; words,
</span><br>
<span class="quotelev2">&gt;&gt; does it simply put the data into some sort of format so that the
</span><br>
<span class="quotelev2">&gt;&gt; PML can
</span><br>
<span class="quotelev2">&gt;&gt; operate on with its own state machine?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't recall the details (it's been quite a while since I looked at
</span><br>
<span class="quotelev1">&gt; the PTL), but there was some semblance of MPI semantics that creeped
</span><br>
<span class="quotelev1">&gt; down into the PTL interface itself.  The BTL has none of that -- it's
</span><br>
<span class="quotelev1">&gt; purely a byte mover.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The old ptl's controlled the short vs long rendezvous protocol, the  
<br>
eager transmission of data, as well as pipelining of rdma operations  
<br>
(where appropriate). In the pml OB1 and the btls this has all been  
<br>
moved the OB1 level. Note that this is simply a logical separation of  
<br>
control and comes at virtually no cost (well there is the very small  
<br>
cost of using a function pointer).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, say you had some underlying protocol that allowed unordered
</span><br>
<span class="quotelev2">&gt;&gt; delivery
</span><br>
<span class="quotelev2">&gt;&gt; of data (so not fully ordered like TCP); which &quot;layer&quot; would the
</span><br>
<span class="quotelev2">&gt;&gt; notion of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;order&quot; be handled in?  I'm guessing PML would need some sort of
</span><br>
<span class="quotelev2">&gt;&gt; sequence
</span><br>
<span class="quotelev2">&gt;&gt; number attached to it; is that right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.  That was in the PML in the 2nd gen stuff and is still at
</span><br>
<span class="quotelev1">&gt; the PML in the 3rd gen stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BML: BTL Management Layer; this used to be part of the PML but we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recently split it off into its own framework.  It's mainly the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; utility
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gorp of managing multiple BTL modules in a single process.  This was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done because when working with the next generation of collectives,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI-2 IO, and MPI-2 one sided operations, we want to have the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ability
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use the PML (which the collectives do today, for example) or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to dive right down and directly use the BTLs (i.e., cut out a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; little latency).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the cases where the BML is required, does it cost extra memcpy's?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to my knowledge.  Galen -- can you fill in the details of this
</span><br>
<span class="quotelev1">&gt; question and the rest of Brad's questions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
The BML layer is simply a management layer for discovering peer  
<br>
resources. It does mask the btl send, put, prepare_src, prepare_dst  
<br>
operations but this code is all inlined and very short so gcc should  
<br>
inline this appropriately. In fact this inlined code used to be in  
<br>
the PML OB1 before we added the BML so it is a no cost &quot;logical&quot;  
<br>
abstraction.  We don't add any extra memory copies in this abstraction.
<br>
<p><span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0279.php">George Bosilca: "ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<li><strong>In reply to:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0313.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0313.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
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
