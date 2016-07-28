<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 19:17:52 2005" -->
<!-- isoreceived="20050903001752" -->
<!-- sent="Fri, 2 Sep 2005 17:17:17 -0700 (PDT)" -->
<!-- isosent="20050903001717" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re:  pml vs bml vs btl" -->
<!-- id="Pine.LNX.4.60.0509021712580.32521_at_baily.cs.ubc.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F573EB36-97B7-483E-9CED-412CAFE7E646_at_cs.unm.edu" -->
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
<strong>Date:</strong> 2005-09-02 19:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0314.php">Jeff Squyres: "Now require Libtool &gt;= v1.5.16"</a>
<li><strong>Previous message:</strong> <a href="0312.php">Jeff Squyres: "Re:  Totalview Support"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0315.php">Rich L. Graham: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0315.php">Rich L. Graham: "Re:  pml vs bml vs btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey Jeff/Galen,
<br>
<p>Thanks to both of you for helping answer our questions, both on and off 
<br>
the list.  Currently, we're doing a lot of writing trying to focus on MPI 
<br>
implementation design strategies, so this has helped us certainly; 
<br>
hopefully others too.
<br>
<p>On our end, generally, we've been trying to push as much functionality
<br>
down to the transport (we have some info on our webpage :
<br>
<a href="http://www.cs.ubc.ca/labs/dsg/mpi-sctp/">http://www.cs.ubc.ca/labs/dsg/mpi-sctp/</a> or you can hear me talk at SC|05 )
<br>
where as your approach is to bring functionality up and manage it within
<br>
the middleware (obviously you do a lot of other neat things like thread
<br>
safety and countless other things that are really impressive).  With
<br>
respect to managing interfaces in the middleware, I understand it buys you
<br>
some generality though since channel bonding (for TCP) and concurrent
<br>
multipath transfer (for SCTP) aren't available for mVAPI, Open IB, GM, MX,
<br>
etc.
<br>
<p>Already, I think it's cool to read about OpenMPI's design; in the future,
<br>
it will be cooler to hear if pulling so much functionality up to the
<br>
middleware has any performance drawbacks from having to do so much
<br>
management (so comparing for example, a setup with two NICs using OpenMPI
<br>
striping to that of a thinner middleware that has the same setup but uses
<br>
channel bonding).  From the looks of it, your Euro PVM/MPI paper is going
<br>
to tell about the low cost of software components; I'm just curious of the
<br>
costs of even having this management functionality in the middleware in
<br>
the first place; time will tell!
<br>
<p>Thanks again for all your answers,
<br>
<p>brad
<br>
<p><p>On Wed, 31 Aug 2005, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2005, at 1:06 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2005, at 9:17 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PML: Pretty much the same as it was described in the paper.  Its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface is basically MPI semantics (i.e., it sits right under
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_SEND and the rest).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTL: Byte Transfer Layer; it's the next generation of PTL.  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTL is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; much more simple than the PTL, and removes all vestigaes of any MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; semantics that still lived in the PTL.  It's a very simple byte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mover
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer, intended to make it quite easy to implement new network
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interfaces.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was curious about what you meant by the removal of MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; semantics.  Do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you mean it simply has no notion of tags, ranks, etc?  In other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; words,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does it simply put the data into some sort of format so that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PML can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operate on with its own state machine?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't recall the details (it's been quite a while since I looked at
</span><br>
<span class="quotelev2">&gt;&gt; the PTL), but there was some semblance of MPI semantics that creeped
</span><br>
<span class="quotelev2">&gt;&gt; down into the PTL interface itself.  The BTL has none of that -- it's
</span><br>
<span class="quotelev2">&gt;&gt; purely a byte mover.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The old ptl's controlled the short vs long rendezvous protocol, the
</span><br>
<span class="quotelev1">&gt; eager transmission of data, as well as pipelining of rdma operations
</span><br>
<span class="quotelev1">&gt; (where appropriate). In the pml OB1 and the btls this has all been
</span><br>
<span class="quotelev1">&gt; moved the OB1 level. Note that this is simply a logical separation of
</span><br>
<span class="quotelev1">&gt; control and comes at virtually no cost (well there is the very small
</span><br>
<span class="quotelev1">&gt; cost of using a function pointer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, say you had some underlying protocol that allowed unordered
</span><br>
<span class="quotelev3">&gt;&gt;&gt; delivery
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of data (so not fully ordered like TCP); which &quot;layer&quot; would the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notion of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;order&quot; be handled in?  I'm guessing PML would need some sort of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sequence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number attached to it; is that right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correct.  That was in the PML in the 2nd gen stuff and is still at
</span><br>
<span class="quotelev2">&gt;&gt; the PML in the 3rd gen stuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BML: BTL Management Layer; this used to be part of the PML but we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recently split it off into its own framework.  It's mainly the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; utility
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gorp of managing multiple BTL modules in a single process.  This was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; done because when working with the next generation of collectives,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI-2 IO, and MPI-2 one sided operations, we want to have the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ability
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to use the PML (which the collectives do today, for example) or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; able to dive right down and directly use the BTLs (i.e., cut out a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; little latency).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the cases where the BML is required, does it cost extra memcpy's?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not to my knowledge.  Galen -- can you fill in the details of this
</span><br>
<span class="quotelev2">&gt;&gt; question and the rest of Brad's questions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The BML layer is simply a management layer for discovering peer
</span><br>
<span class="quotelev1">&gt; resources. It does mask the btl send, put, prepare_src, prepare_dst
</span><br>
<span class="quotelev1">&gt; operations but this code is all inlined and very short so gcc should
</span><br>
<span class="quotelev1">&gt; inline this appropriately. In fact this inlined code used to be in
</span><br>
<span class="quotelev1">&gt; the PML OB1 before we added the BML so it is a no cost &quot;logical&quot;
</span><br>
<span class="quotelev1">&gt; abstraction.  We don't add any extra memory copies in this abstraction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0314.php">Jeff Squyres: "Now require Libtool &gt;= v1.5.16"</a>
<li><strong>Previous message:</strong> <a href="0312.php">Jeff Squyres: "Re:  Totalview Support"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0278.php">Galen M. Shipman: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0315.php">Rich L. Graham: "Re:  pml vs bml vs btl"</a>
<li><strong>Reply:</strong> <a href="0315.php">Rich L. Graham: "Re:  pml vs bml vs btl"</a>
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
