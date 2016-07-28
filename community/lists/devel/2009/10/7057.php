<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 15:28:20 2009" -->
<!-- isoreceived="20091030192820" -->
<!-- sent="Fri, 30 Oct 2009 15:28:15 -0400" -->
<!-- isosent="20091030192815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="B9F01A8C-7917-44A8-8C1F-CCFAE641F6F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3A61E753-007E-4D50-9FD7-B25291564D79_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: revamp topo framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 15:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7058.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Previous message:</strong> <a href="7056.php">Eugene Loh: "[OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>In reply to:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What George is describing is the Right answer, but it may take you a  
<br>
little time.
<br>
<p>FWIW: the complexity of a topo component is actually pretty low.  It's  
<br>
essentially a bunch of glue code (that I can probably mostly provide)  
<br>
and your mapping algorithms about how to reorder the communicator ranks.
<br>
<p>To be clear: topo components are *ONLY* about re-ordering ranks in a  
<br>
communicator -- the back-end of MPI_CART_CREATE and friends.
<br>
<p>The BTL components that George is talking about are Byte Transfer  
<br>
Layer components; essentially the brains behind MPI_SEND and friends.   
<br>
Open MPI has a per-device list of BTLs that can service each peer MPI  
<br>
process.  Hence, if you're sending to another MPI process on the same  
<br>
host, the first BTL in the list will be the shared memory BTL.  If  
<br>
you're sending to an MPI process on a different server that you're  
<br>
connected to via ethernet, the TCP BTL may be at the top of the list.   
<br>
And so on.
<br>
<p>Is sounds like you actually want to make *two* components:
<br>
<p>- topo: for reordering ranks during MPI_CART_CREATE and friends
<br>
- btl: use the underlying network primitives for sending when possible
<br>
<p>As George indicated, the BTL module in each MPI process can determine  
<br>
during startup which MPI process peers it can talk to.  It can then  
<br>
tell the upper-layer routing algorithm &quot;I can talk to peer processes  
<br>
X, Y, and Z -- I cannot talk to peer processes A, B, and C&quot;.  The  
<br>
upper-layer router (the PML module) will then put your BTL at the top  
<br>
of the list for peer processes X, Y, and Z, and will not put your BTL  
<br>
on the list ofr peer processes A, B, and C.  For A, B, and C, other  
<br>
BTLs will be used (e.g., TCP).
<br>
<p>Does that make sense?
<br>
<p>To answer your question from a prior mail: the unity topo component is  
<br>
used for the remapping of ranks in MPI_CART_CREATE.  Look in ompi/mca/ 
<br>
topo/unity/.
<br>
<p><p><p>On Oct 30, 2009, at 11:53 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Luigi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current way Open MPI is selecting the network to be used between
</span><br>
<span class="quotelev1">&gt; processes, match very well the first approach you proposed. As we
</span><br>
<span class="quotelev1">&gt; support multiple networks simultaneously, a BTL (the low level network
</span><br>
<span class="quotelev1">&gt; driver) can service only a subset of peers. All other communications
</span><br>
<span class="quotelev1">&gt; will automatically be redirected through another BTL (which has to be
</span><br>
<span class="quotelev1">&gt; available). In the past there were some attempts to route messages but
</span><br>
<span class="quotelev1">&gt; this code is not in the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2009, at 04:47 , Luigi Scorzato wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am very interested in this, but let me explain in more details my
</span><br>
<span class="quotelev2">&gt; &gt; present situation and goals.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working in a group who is testing a system under development
</span><br>
<span class="quotelev2">&gt; &gt; which is connected with both:
</span><br>
<span class="quotelev2">&gt; &gt; - an ordinary all to all standard interface (where open-mpi is
</span><br>
<span class="quotelev2">&gt; &gt; already available) but with limited performances and scalability.
</span><br>
<span class="quotelev2">&gt; &gt; - a custom 3D torus network, with no mpi available, custom low-level
</span><br>
<span class="quotelev2">&gt; &gt; communication primitives (under development), from which we expect
</span><br>
<span class="quotelev2">&gt; &gt; higher performance and scalability.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have two approaches in mind:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1st approach.
</span><br>
<span class="quotelev2">&gt; &gt; Use the standard network interface to setup MPI. However, through a
</span><br>
<span class="quotelev2">&gt; &gt; precompilation step, redefine a few MPI_ functions (MPI_Send()
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv() and others) such that they call the torus primitives, if
</span><br>
<span class="quotelev2">&gt; &gt; the communication is between nearest neighbors, and fall back into
</span><br>
<span class="quotelev2">&gt; &gt; standard MPI through the standard interface if not. This can only
</span><br>
<span class="quotelev2">&gt; &gt; work if I can choose the mpi-ranks of my system in a way that
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Cart_create() will generate coordinates consistent with the
</span><br>
<span class="quotelev2">&gt; &gt; physical topology.
</span><br>
<span class="quotelev2">&gt; &gt; ***There must be a place - somewhere in the open-mpi code - where
</span><br>
<span class="quotelev2">&gt; &gt; the cartesian coordinates are chosen, presumably as a deterministic
</span><br>
<span class="quotelev2">&gt; &gt; function of the mpi-ranks and the dimensions (as given by
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Dims_create). I expected it to be in MPI_Cart_create(). But I
</span><br>
<span class="quotelev2">&gt; &gt; could not find it. Can anyone help?***
</span><br>
<span class="quotelev2">&gt; &gt; This approach has obvious limitations of portability, besides
</span><br>
<span class="quotelev2">&gt; &gt; requiring the availability of a fallback network, but it gives me
</span><br>
<span class="quotelev2">&gt; &gt; full control of what I need to do, which is essential since my
</span><br>
<span class="quotelev2">&gt; &gt; primary goal is to get a few important codes working in the new
</span><br>
<span class="quotelev2">&gt; &gt; system asap.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2nd approach.
</span><br>
<span class="quotelev2">&gt; &gt; Develop a new &quot;torus&quot; topo component, as explained by Jeff. This is
</span><br>
<span class="quotelev2">&gt; &gt; certainly the *right* solution, but there are two problems:
</span><br>
<span class="quotelev2">&gt; &gt; - because of my poor familiarity with the open-mpi source code, I am
</span><br>
<span class="quotelev2">&gt; &gt; not able to estimate how long it will take me.
</span><br>
<span class="quotelev2">&gt; &gt; - in a first phase, the torus primitives will not support all to all
</span><br>
<span class="quotelev2">&gt; &gt; communications but only nearest neighbors ones. Hence, full
</span><br>
<span class="quotelev2">&gt; &gt; portability is excluded anyway and/or a fallback network still
</span><br>
<span class="quotelev2">&gt; &gt; needed. In other words, the topo component should be able to deal
</span><br>
<span class="quotelev2">&gt; &gt; with two networks, and I have no idea of how much this will
</span><br>
<span class="quotelev2">&gt; &gt; complicate things.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I necessarily have to push the 1st approach, for the moment, but I
</span><br>
<span class="quotelev2">&gt; &gt; am very much interested in studying the 2nd and if I see that it is
</span><br>
<span class="quotelev2">&gt; &gt; realistic (given the limitations above) and safe, I may turn to it
</span><br>
<span class="quotelev2">&gt; &gt; completely.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks for your feedback and best regards, Luigi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7058.php">George Bosilca: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Previous message:</strong> <a href="7056.php">Eugene Loh: "[OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>In reply to:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
