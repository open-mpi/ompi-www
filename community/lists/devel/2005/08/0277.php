<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 14:06:18 2005" -->
<!-- isoreceived="20050831190618" -->
<!-- sent="Wed, 31 Aug 2005 14:06:16 -0500" -->
<!-- isosent="20050831190616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  pml vs bml vs btl" -->
<!-- id="3F47BB78-D9A5-4905-8379-2D30F9DB1A76_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.0508291853060.9260_at_baily.cs.ubc.ca" -->
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
<strong>Date:</strong> 2005-08-31 14:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<li><strong>Previous message:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>In reply to:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2005, at 9:17 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev2">&gt;&gt; PML: Pretty much the same as it was described in the paper.  Its
</span><br>
<span class="quotelev2">&gt;&gt; interface is basically MPI semantics (i.e., it sits right under
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SEND and the rest).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTL: Byte Transfer Layer; it's the next generation of PTL.  The  
</span><br>
<span class="quotelev2">&gt;&gt; BTL is
</span><br>
<span class="quotelev2">&gt;&gt; much more simple than the PTL, and removes all vestigaes of any MPI
</span><br>
<span class="quotelev2">&gt;&gt; semantics that still lived in the PTL.  It's a very simple byte mover
</span><br>
<span class="quotelev2">&gt;&gt; layer, intended to make it quite easy to implement new network
</span><br>
<span class="quotelev2">&gt;&gt; interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was curious about what you meant by the removal of MPI  
</span><br>
<span class="quotelev1">&gt; semantics.  Do
</span><br>
<span class="quotelev1">&gt; you mean it simply has no notion of tags, ranks, etc?  In other words,
</span><br>
<span class="quotelev1">&gt; does it simply put the data into some sort of format so that the  
</span><br>
<span class="quotelev1">&gt; PML can
</span><br>
<span class="quotelev1">&gt; operate on with its own state machine?
</span><br>
<p>I don't recall the details (it's been quite a while since I looked at  
<br>
the PTL), but there was some semblance of MPI semantics that creeped  
<br>
down into the PTL interface itself.  The BTL has none of that -- it's  
<br>
purely a byte mover.
<br>
<p><span class="quotelev1">&gt; Also, say you had some underlying protocol that allowed unordered  
</span><br>
<span class="quotelev1">&gt; delivery
</span><br>
<span class="quotelev1">&gt; of data (so not fully ordered like TCP); which &quot;layer&quot; would the  
</span><br>
<span class="quotelev1">&gt; notion of
</span><br>
<span class="quotelev1">&gt; &quot;order&quot; be handled in?  I'm guessing PML would need some sort of  
</span><br>
<span class="quotelev1">&gt; sequence
</span><br>
<span class="quotelev1">&gt; number attached to it; is that right?
</span><br>
<p>Correct.  That was in the PML in the 2nd gen stuff and is still at  
<br>
the PML in the 3rd gen stuff.
<br>
<p><span class="quotelev2">&gt;&gt; BML: BTL Management Layer; this used to be part of the PML but we
</span><br>
<span class="quotelev2">&gt;&gt; recently split it off into its own framework.  It's mainly the  
</span><br>
<span class="quotelev2">&gt;&gt; utility
</span><br>
<span class="quotelev2">&gt;&gt; gorp of managing multiple BTL modules in a single process.  This was
</span><br>
<span class="quotelev2">&gt;&gt; done because when working with the next generation of collectives,
</span><br>
<span class="quotelev2">&gt;&gt; MPI-2 IO, and MPI-2 one sided operations, we want to have the ability
</span><br>
<span class="quotelev2">&gt;&gt; to use the PML (which the collectives do today, for example) or to be
</span><br>
<span class="quotelev2">&gt;&gt; able to dive right down and directly use the BTLs (i.e., cut out a
</span><br>
<span class="quotelev2">&gt;&gt; little latency).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the cases where the BML is required, does it cost extra memcpy's?
</span><br>
<p>Not to my knowledge.  Galen -- can you fill in the details of this  
<br>
question and the rest of Brad's questions?
<br>
<p>Thanks!
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<li><strong>Previous message:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>In reply to:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
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
