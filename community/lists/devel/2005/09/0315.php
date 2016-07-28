<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Sep  3 10:46:03 2005" -->
<!-- isoreceived="20050903154603" -->
<!-- sent="Sat, 3 Sep 2005 09:41:32 -0600" -->
<!-- isosent="20050903154132" -->
<!-- name="Rich L. Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re:  pml vs bml vs btl" -->
<!-- id="dd91bdcdeecfed163750e0b9845b3a34_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.0509021712580.32521_at_baily.cs.ubc.ca" -->
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
<strong>From:</strong> Rich L. Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-03 10:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Jeff Squyres: "Now require Libtool &gt;= v1.5.16"</a>
<li><strong>In reply to:</strong> <a href="0313.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad,
<br>
<p>On Sep 2, 2005, at 6:17 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; hey Jeff/Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to both of you for helping answer our questions, both on and off
</span><br>
<span class="quotelev1">&gt; the list.  Currently, we're doing a lot of writing trying to focus on 
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; implementation design strategies, so this has helped us certainly;
</span><br>
<span class="quotelev1">&gt; hopefully others too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On our end, generally, we've been trying to push as much functionality
</span><br>
<span class="quotelev1">&gt; down to the transport (we have some info on our webpage :
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.ubc.ca/labs/dsg/mpi-sctp/">http://www.cs.ubc.ca/labs/dsg/mpi-sctp/</a> or you can hear me talk at 
</span><br>
<span class="quotelev1">&gt; SC|05 )
</span><br>
<span class="quotelev1">&gt; where as your approach is to bring functionality up and manage it 
</span><br>
<span class="quotelev1">&gt; within
</span><br>
<span class="quotelev1">&gt; the middleware (obviously you do a lot of other neat things like thread
</span><br>
<span class="quotelev1">&gt; safety and countless other things that are really impressive).  With
</span><br>
<span class="quotelev1">&gt; respect to managing interfaces in the middleware, I understand it buys 
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; some generality though since channel bonding (for TCP) and concurrent
</span><br>
<span class="quotelev1">&gt; multipath transfer (for SCTP) aren't available for mVAPI, Open IB, GM, 
</span><br>
<span class="quotelev1">&gt; MX,
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Already, I think it's cool to read about OpenMPI's design; in the 
</span><br>
<span class="quotelev1">&gt; future,
</span><br>
<span class="quotelev1">&gt; it will be cooler to hear if pulling so much functionality up to the
</span><br>
<span class="quotelev1">&gt; middleware has any performance drawbacks from having to do so much
</span><br>
<span class="quotelev1">&gt; management (so comparing for example, a setup with two NICs using 
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; striping to that of a thinner middleware that has the same setup but 
</span><br>
<span class="quotelev1">&gt; uses
</span><br>
<span class="quotelev1">&gt; channel bonding).  From the looks of it, your Euro PVM/MPI paper is 
</span><br>
<span class="quotelev1">&gt; going
</span><br>
<span class="quotelev1">&gt; to tell about the low cost of software components; I'm just curious of 
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; costs of even having this management functionality in the middleware in
</span><br>
<span class="quotelev1">&gt; the first place; time will tell!
</span><br>
<p>This is our 3rd generation+ of developing pt-2-pt messaging interfaces, 
<br>
so
<br>
we have built on close to seven years of experience developing these 
<br>
sorts
<br>
of interfaces dealing with supporting our ASC production systems with 
<br>
this
<br>
source code base.  This line of work (starting in what eventually became
<br>
LA-MPI, which is being superseded with a far cleaner and more flexible
<br>
design) started in the context of our production systems that supported 
<br>
13
<br>
interfaces between hosts ...   I guess what I am trying to say is the 
<br>
complexity
<br>
resides somewhere, and we have opted to put together a system that can,
<br>
if the user so chooses, use all available communications resources for a
<br>
single large message.  While this may seem to be a complex problem, when
<br>
you are on your third or fourth (depends on how you count) design, a lot
<br>
has been learned (and a lot of simplification has occurred).
<br>
<p>One thing I should add.  One of the nice things about the Open MPI 
<br>
design is
<br>
that it does not al all preclude supporting both, even in the same .so. 
<br>
&nbsp;&nbsp;As a
<br>
matter of fact what Brian did for the Euro PVM/MPI paper was take our 
<br>
previous
<br>
version of the pt-2-pt implementation, and simplify it to eliminate 
<br>
much of
<br>
this scheduling logic.
<br>
<p>Finally, this design is aimed at running apps on (yet to be realized) 
<br>
peta-scale
<br>
platforms, where we don't want an app to fail, just because one of many
<br>
interfaces fails.  In this case we do want to keep the various 
<br>
interfaces available
<br>
independent, so that we can deal with the failures w/o killing the app 
<br>
...
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for all your answers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 31 Aug 2005, Galen M. Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 31, 2005, at 1:06 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 29, 2005, at 9:17 PM, Brad Penoff wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PML: Pretty much the same as it was described in the paper.  Its
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interface is basically MPI semantics (i.e., it sits right under
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_SEND and the rest).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTL: Byte Transfer Layer; it's the next generation of PTL.  The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BTL is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; much more simple than the PTL, and removes all vestigaes of any MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; semantics that still lived in the PTL.  It's a very simple byte
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mover
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; layer, intended to make it quite easy to implement new network
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; interfaces.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was curious about what you meant by the removal of MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; semantics.  Do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you mean it simply has no notion of tags, ranks, etc?  In other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; words,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does it simply put the data into some sort of format so that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PML can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operate on with its own state machine?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't recall the details (it's been quite a while since I looked at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PTL), but there was some semblance of MPI semantics that creeped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; down into the PTL interface itself.  The BTL has none of that -- it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; purely a byte mover.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The old ptl's controlled the short vs long rendezvous protocol, the
</span><br>
<span class="quotelev2">&gt;&gt; eager transmission of data, as well as pipelining of rdma operations
</span><br>
<span class="quotelev2">&gt;&gt; (where appropriate). In the pml OB1 and the btls this has all been
</span><br>
<span class="quotelev2">&gt;&gt; moved the OB1 level. Note that this is simply a logical separation of
</span><br>
<span class="quotelev2">&gt;&gt; control and comes at virtually no cost (well there is the very small
</span><br>
<span class="quotelev2">&gt;&gt; cost of using a function pointer).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, say you had some underlying protocol that allowed unordered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; delivery
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of data (so not fully ordered like TCP); which &quot;layer&quot; would the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; notion of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;order&quot; be handled in?  I'm guessing PML would need some sort of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sequence
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number attached to it; is that right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correct.  That was in the PML in the 2nd gen stuff and is still at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PML in the 3rd gen stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; BML: BTL Management Layer; this used to be part of the PML but we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; recently split it off into its own framework.  It's mainly the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; utility
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gorp of managing multiple BTL modules in a single process.  This 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; done because when working with the next generation of collectives,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI-2 IO, and MPI-2 one sided operations, we want to have the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ability
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to use the PML (which the collectives do today, for example) or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to dive right down and directly use the BTLs (i.e., cut out a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; little latency).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the cases where the BML is required, does it cost extra memcpy's?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not to my knowledge.  Galen -- can you fill in the details of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question and the rest of Brad's questions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The BML layer is simply a management layer for discovering peer
</span><br>
<span class="quotelev2">&gt;&gt; resources. It does mask the btl send, put, prepare_src, prepare_dst
</span><br>
<span class="quotelev2">&gt;&gt; operations but this code is all inlined and very short so gcc should
</span><br>
<span class="quotelev2">&gt;&gt; inline this appropriately. In fact this inlined code used to be in
</span><br>
<span class="quotelev2">&gt;&gt; the PML OB1 before we added the BML so it is a no cost &quot;logical&quot;
</span><br>
<span class="quotelev2">&gt;&gt; abstraction.  We don't add any extra memory copies in this 
</span><br>
<span class="quotelev2">&gt;&gt; abstraction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Jeff Squyres: "Now require Libtool &gt;= v1.5.16"</a>
<li><strong>In reply to:</strong> <a href="0313.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
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
