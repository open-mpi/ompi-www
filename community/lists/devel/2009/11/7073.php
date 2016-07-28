<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 03:40:20 2009" -->
<!-- isoreceived="20091103084020" -->
<!-- sent="Tue, 3 Nov 2009 09:40:10 +0100" -->
<!-- isosent="20091103084010" -->
<!-- name="Luigi Scorzato" -->
<!-- email="luigi.scorzato_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="CF9FE27E-ACB0-46D9-B6C3-3A80F1986067_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B9F01A8C-7917-44A8-8C1F-CCFAE641F6F3_at_cisco.com" -->
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
<strong>From:</strong> Luigi Scorzato (<em>luigi.scorzato_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 03:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7074.php">Christian Bendele: "[OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>Previous message:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30 Oct 2009, at 20:28, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; What George is describing is the Right answer, but it may take you  
</span><br>
<span class="quotelev1">&gt; a little time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: the complexity of a topo component is actually pretty low.   
</span><br>
<span class="quotelev1">&gt; It's essentially a bunch of glue code (that I can probably mostly  
</span><br>
<span class="quotelev1">&gt; provide) and your mapping algorithms about how to reorder the  
</span><br>
<span class="quotelev1">&gt; communicator ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear: topo components are *ONLY* about re-ordering ranks in  
</span><br>
<span class="quotelev1">&gt; a communicator -- the back-end of MPI_CART_CREATE and friends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BTL components that George is talking about are Byte Transfer  
</span><br>
<span class="quotelev1">&gt; Layer components; essentially the brains behind MPI_SEND and  
</span><br>
<span class="quotelev1">&gt; friends.  Open MPI has a per-device list of BTLs that can service  
</span><br>
<span class="quotelev1">&gt; each peer MPI process.  Hence, if you're sending to another MPI  
</span><br>
<span class="quotelev1">&gt; process on the same host, the first BTL in the list will be the  
</span><br>
<span class="quotelev1">&gt; shared memory BTL.  If you're sending to an MPI process on a  
</span><br>
<span class="quotelev1">&gt; different server that you're connected to via ethernet, the TCP BTL  
</span><br>
<span class="quotelev1">&gt; may be at the top of the list.  And so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is sounds like you actually want to make *two* components:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - topo: for reordering ranks during MPI_CART_CREATE and friends
</span><br>
<span class="quotelev1">&gt; - btl: use the underlying network primitives for sending when possible
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As George indicated, the BTL module in each MPI process can  
</span><br>
<span class="quotelev1">&gt; determine during startup which MPI process peers it can talk to.   
</span><br>
<span class="quotelev1">&gt; It can then tell the upper-layer routing algorithm &quot;I can talk to  
</span><br>
<span class="quotelev1">&gt; peer processes X, Y, and Z -- I cannot talk to peer processes A, B,  
</span><br>
<span class="quotelev1">&gt; and C&quot;.  The upper-layer router (the PML module) will then put your  
</span><br>
<span class="quotelev1">&gt; BTL at the top of the list for peer processes X, Y, and Z, and will  
</span><br>
<span class="quotelev1">&gt; not put your BTL on the list ofr peer processes A, B, and C.  For  
</span><br>
<span class="quotelev1">&gt; A, B, and C, other BTLs will be used (e.g., TCP).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To answer your question from a prior mail: the unity topo component  
</span><br>
<span class="quotelev1">&gt; is used for the remapping of ranks in MPI_CART_CREATE.  Look in  
</span><br>
<span class="quotelev1">&gt; ompi/mca/topo/unity/.
</span><br>
<p><p>Thanks to everybody for the clarifications. The function I was  
<br>
looking for is mca_topo_base_cart_create() in  ompi/mca/topo/base/ 
<br>
topo_base_cart_create.c And more precisely I needed the loop:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;p = topo_data-&gt;mtc_dims_or_index;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;coords =  topo_data-&gt;mtc_coords;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dummy_rank = *new_rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i &lt; topo_data-&gt;mtc_ndims_or_nnodes &amp;&amp; i &lt; ndims);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;++i, ++p) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dim = *p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nprocs /= dim;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*coords++ = dummy_rank / nprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dummy_rank %= nprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>This defines the precise relation between ranks and coordinates. Once  
<br>
I know this, I do not even need to write a topo component, because I  
<br>
can define the ranks of my computing nodes in a rankfile in order  
<br>
that they get the coordinates that they need physically.
<br>
<p>A different issue is the BTL component. This is actually where my  
<br>
approach 1 and 2 differ (my previous distinction was confusing, due  
<br>
to my lack of understanding of the distinction between topo and btl  
<br>
components).
<br>
<p>In the 1st approach I would redefine some crucial (for my code) MPI  
<br>
functions in a way that they call the low level torus primitives,  
<br>
when the communication occurs between nearest neighbors, and fall  
<br>
back to open-mpi functions otherwise.
<br>
The 2nd approach would be to develop our torus-btl. The fact that one  
<br>
can choose a &quot;priority list of networks&quot; is definitely great and  
<br>
dissipates my worries about the feasibility of the 2nd approach in my  
<br>
case. The only remaining question is whether I can get familiar with  
<br>
btl stuff fast enough. What do you suggest me to read in order to  
<br>
learn quickly how to create a BTL component?
<br>
<p>Many thanks and best regards, Luigi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7074.php">Christian Bendele: "[OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>Previous message:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7075.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
