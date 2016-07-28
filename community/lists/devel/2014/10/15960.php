<?
$subject_val = "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 10:22:10 2014" -->
<!-- isoreceived="20141001142210" -->
<!-- sent="Wed, 1 Oct 2014 16:27:02 +0200" -->
<!-- isosent="20141001142702" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one" -->
<!-- id="4F9D94DB-4B93-4A4E-9FFB-D3FD5B35361D_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="031D7146-F1E0-40E2-887E-A6D282A0549A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-01 10:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15961.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian	topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15961.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian	topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15961.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian	topologies of size one"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see no change in the topo interface in any of the patches attached to this thread. Is there any other patch related to this discussion?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 1, 2014, at 14:52, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 1, 2014, at 6:48 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; oops, i missed graph and dist graph :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the attached patch fixes this
</span><br>
<span class="quotelev2">&gt;&gt; /* it was straightforward for graph and a bit more challenging for dist
</span><br>
<span class="quotelev2">&gt;&gt; graph */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i am fine for Nathan's patch for v1.8
</span><br>
<span class="quotelev2">&gt;&gt; /* v1.8 and trunk have already a different way to handle a memory leak */
</span><br>
<span class="quotelev2">&gt;&gt; /* the attached patch is vs v1.8 but it is for review only, i will port
</span><br>
<span class="quotelev2">&gt;&gt; it to the trunk */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; imho, there is no ABI break with this patch.
</span><br>
<span class="quotelev2">&gt;&gt; out of curiosity, what is the ABI break that is/will be introduced with
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;real&quot; fix ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't looked at the code at all, but Nathan said it changed the topo framework interface.  That's the ABI I was referring to -- not the MPI ABI.  Sorry for the confusions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FYI, i also enhanced the collective/neighbor_allgather_self from the ibm
</span><br>
<span class="quotelev2">&gt;&gt; test suite in order to test
</span><br>
<span class="quotelev2">&gt;&gt; graph and dist_graph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/10/01 0:58, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the call today, we decided that Nathan's v1.8 patch is sufficient for the v1.8 series, and the &quot;real&quot; fix will be applied to the trunk and carried forward to the v1.9 series (since it introduces an ABI break for the topo framework, which we try not to do in the middle of a release series).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 30, 2014, at 10:40 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not quite right. There still is no topology information at collective
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; selection time for either graph or dist graph.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Sep 30, 2014 at 02:03:27PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nathan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; here is a revision of the previously attached patch, and that supports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; graph and dist graph.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2014/09/30 0:05, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An equivalent change would need to be made for graph and dist graph as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; well. That will take a little more work. Also, I was avoiding changing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anything in topo for 1.8.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mon, Sep 29, 2014 at 08:02:41PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Nathan,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  why not just make the topology information available at that point as you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  described it ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  the attached patch does this, could you please review it ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  On 2014/09/26 2:50, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Aug 26, 2014 at 07:03:24PM +0300, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I finally managed to track down some issues in mpi4py's test suite
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using Open MPI 1.8+. The code below should be enough to reproduce the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem. Run it under valgrind to make sense of my following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; diagnostics.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this code I'm creating a 2D, periodic Cartesian topology out of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; COMM_SELF. In this case, the process in COMM_SELF has 4 logical in/out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; links to itself. So we have size=1 but indegree=outdegree=4. However,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in ompi/mca/coll/basic/coll_basic_module.c, &quot;size * 2&quot; request are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; being allocated to manage communication:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    if (OMPI_COMM_IS_INTER(comm)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        size = ompi_comm_remote_size(comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    basic_module-&gt;mccb_reqs = (ompi_request_t**)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I guess you have to also special-case for topologies and allocate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; indegree+outdegree requests (not sure about this number, just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; guessing).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wish this was possible but the topology information is not available
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at that point. We may be able to change that but I don't see the work
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; completing anytime soon. I committed an alternative fix as r32796 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CMR'd it to 1.8.3. I can confirm that the attached reproducer no longer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; produces a SEGV. Let me know if you run into any more issues.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15915.php">http://www.open-mpi.org/community/lists/devel/2014/09/15915.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Index: ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- ompi/mca/topo/base/topo_base_cart_create.c  (revision 32807)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ ompi/mca/topo/base/topo_base_cart_create.c  (working copy)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -163,10 +163,18 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        return MPI_ERR_INTERN;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    assert(NULL == new_comm-&gt;c_topo);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    assert(!(new_comm-&gt;c_flags &amp; OMPI_COMM_CART));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                           new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        free(topo_procs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        if(NULL != cart-&gt;periods) free(cart-&gt;periods);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -176,10 +184,6 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        return ret;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    *comm_topo = new_comm;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    if( MPI_UNDEFINED == new_rank ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Index: ompi/mca/coll/basic/coll_basic_module.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- ompi/mca/coll/basic/coll_basic_module.c     (revision 32807)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ ompi/mca/coll/basic/coll_basic_module.c     (working copy)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -13,6 +13,8 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Copyright (c) 2012      Sandia National Laboratories. All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Copyright (c) 2013      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *                         reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -28,6 +30,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;coll_basic.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -70,6 +73,15 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    if (comm-&gt;c_flags &amp; OMPI_COMM_CART) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        int cart_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        comm-&gt;c_topo-&gt;topo.cart.cartdim_get(comm, &amp;cart_size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        cart_size *= 2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        if (cart_size &gt; size) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            size = cart_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    basic_module-&gt;mccb_reqs = (ompi_request_t**)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15929.php">http://www.open-mpi.org/community/lists/devel/2014/09/15929.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15930.php">http://www.open-mpi.org/community/lists/devel/2014/09/15930.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Index: ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- ompi/mca/topo/base/topo_base_cart_create.c    (revision 32815)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ ompi/mca/topo/base/topo_base_cart_create.c    (working copy)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -163,10 +163,18 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       return MPI_ERR_INTERN;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    assert(NULL == new_comm-&gt;c_topo);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    assert(!(new_comm-&gt;c_flags &amp; OMPI_COMM_CART));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       free(topo_procs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       if(NULL != cart-&gt;periods) free(cart-&gt;periods);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -176,10 +184,6 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       return ret;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   *comm_topo = new_comm;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if( MPI_UNDEFINED == new_rank ) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Index: ompi/mca/coll/basic/coll_basic_module.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- ompi/mca/coll/basic/coll_basic_module.c    (revision 32815)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ ompi/mca/coll/basic/coll_basic_module.c    (working copy)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -13,6 +13,8 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Copyright (c) 2012      Sandia National Laboratories. All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Copyright (c) 2013      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *                         reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -28,6 +30,8 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +#include &quot;ompi/mca/topo/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;coll_basic.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -70,7 +74,36 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    size *= 2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    if (OMPI_COMM_IS_CART(comm)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        int cart_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        mca_topo_base_comm_cart_2_1_0_t *cart;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        cart = comm-&gt;c_topo-&gt;mtc.cart;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        cart_size = cart-&gt;ndims * 4;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        if (cart_size &gt; size) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            size = cart_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    } else if (OMPI_COMM_IS_GRAPH(comm)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        int rank, degree;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        rank = ompi_comm_rank (comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        mca_topo_base_graph_neighbors_count (comm, rank, &amp;degree);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        degree *= 2;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        if (degree &gt; size) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            size = degree;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    } else if (OMPI_COMM_IS_DIST_GRAPH(comm)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        int dist_graph_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        mca_topo_base_comm_dist_graph_2_1_0_t *dist_graph;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        dist_graph = comm-&gt;c_topo-&gt;mtc.dist_graph;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        dist_graph_size = dist_graph-&gt;indegree + dist_graph-&gt;outdegree;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        if (dist_graph_size &gt; size) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +            size = dist_graph_size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +    basic_module-&gt;mccb_num_reqs = size;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   basic_module-&gt;mccb_reqs = (ompi_request_t**) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15941.php">http://www.open-mpi.org/community/lists/devel/2014/09/15941.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15945.php">http://www.open-mpi.org/community/lists/devel/2014/09/15945.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mmcb.v3.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15957.php">http://www.open-mpi.org/community/lists/devel/2014/10/15957.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15959.php">http://www.open-mpi.org/community/lists/devel/2014/10/15959.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15961.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian	topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15959.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15961.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian	topologies of size one"</a>
<li><strong>Reply:</strong> <a href="15961.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Neighbor collectives with periodic Cartesian	topologies of size one"</a>
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
