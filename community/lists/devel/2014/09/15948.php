<?
$subject_val = "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 11:58:53 2014" -->
<!-- isoreceived="20140930155853" -->
<!-- sent="Tue, 30 Sep 2014 15:58:51 +0000" -->
<!-- isosent="20140930155851" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one" -->
<!-- id="8CAE7592-2EA3-4818-BD92-B60DB50B00CD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140930144014.GC1319_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 11:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Previous message:</strong> <a href="15947.php">Jeff Squyres (jsquyres): "[OMPI devel] Github migration: tomorrow"</a>
<li><strong>In reply to:</strong> <a href="15945.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15957.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15957.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the call today, we decided that Nathan's v1.8 patch is sufficient for the v1.8 series, and the &quot;real&quot; fix will be applied to the trunk and carried forward to the v1.9 series (since it introduces an ABI break for the topo framework, which we try not to do in the middle of a release series).
<br>
<p>On Sep 30, 2014, at 10:40 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not quite right. There still is no topology information at collective
</span><br>
<span class="quotelev1">&gt; selection time for either graph or dist graph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 30, 2014 at 02:03:27PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Nathan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   here is a revision of the previously attached patch, and that supports
</span><br>
<span class="quotelev2">&gt;&gt;   graph and dist graph.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   On 2014/09/30 0:05, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An equivalent change would need to be made for graph and dist graph as
</span><br>
<span class="quotelev2">&gt;&gt; well. That will take a little more work. Also, I was avoiding changing
</span><br>
<span class="quotelev2">&gt;&gt; anything in topo for 1.8.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Sep 29, 2014 at 08:02:41PM +0900, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Nathan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    why not just make the topology information available at that point as you
</span><br>
<span class="quotelev2">&gt;&gt;    described it ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    the attached patch does this, could you please review it ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    On 2014/09/26 2:50, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  On Tue, Aug 26, 2014 at 07:03:24PM +0300, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I finally managed to track down some issues in mpi4py's test suite
</span><br>
<span class="quotelev2">&gt;&gt;  using Open MPI 1.8+. The code below should be enough to reproduce the
</span><br>
<span class="quotelev2">&gt;&gt;  problem. Run it under valgrind to make sense of my following
</span><br>
<span class="quotelev2">&gt;&gt;  diagnostics.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  In this code I'm creating a 2D, periodic Cartesian topology out of
</span><br>
<span class="quotelev2">&gt;&gt;  COMM_SELF. In this case, the process in COMM_SELF has 4 logical in/out
</span><br>
<span class="quotelev2">&gt;&gt;  links to itself. So we have size=1 but indegree=outdegree=4. However,
</span><br>
<span class="quotelev2">&gt;&gt;  in ompi/mca/coll/basic/coll_basic_module.c, &quot;size * 2&quot; request are
</span><br>
<span class="quotelev2">&gt;&gt;  being allocated to manage communication:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      if (OMPI_COMM_IS_INTER(comm)) {
</span><br>
<span class="quotelev2">&gt;&gt;          size = ompi_comm_remote_size(comm);
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;          size = ompi_comm_size(comm);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;      basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev2">&gt;&gt;      basic_module-&gt;mccb_reqs = (ompi_request_t**)
</span><br>
<span class="quotelev2">&gt;&gt;          malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I guess you have to also special-case for topologies and allocate
</span><br>
<span class="quotelev2">&gt;&gt;  indegree+outdegree requests (not sure about this number, just
</span><br>
<span class="quotelev2">&gt;&gt;  guessing).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I wish this was possible but the topology information is not available
</span><br>
<span class="quotelev2">&gt;&gt;  at that point. We may be able to change that but I don't see the work
</span><br>
<span class="quotelev2">&gt;&gt;  completing anytime soon. I committed an alternative fix as r32796 and
</span><br>
<span class="quotelev2">&gt;&gt;  CMR'd it to 1.8.3. I can confirm that the attached reproducer no longer
</span><br>
<span class="quotelev2">&gt;&gt;  produces a SEGV. Let me know if you run into any more issues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15915.php">http://www.open-mpi.org/community/lists/devel/2014/09/15915.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/topo/base/topo_base_cart_create.c  (revision 32807)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/topo/base/topo_base_cart_create.c  (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,10 +163,18 @@
</span><br>
<span class="quotelev2">&gt;&gt;          return MPI_ERR_INTERN;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(NULL == new_comm-&gt;c_topo);
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(!(new_comm-&gt;c_flags &amp; OMPI_COMM_CART));
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt;&gt;      ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev2">&gt;&gt;                             new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev2">&gt;&gt;      if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt;&gt;          /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev2">&gt;&gt; +        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt;&gt;          ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt;&gt;          free(topo_procs);
</span><br>
<span class="quotelev2">&gt;&gt;          if(NULL != cart-&gt;periods) free(cart-&gt;periods);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -176,10 +184,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;          return ret;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt;&gt;      *comm_topo = new_comm;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      if( MPI_UNDEFINED == new_rank ) {
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/coll/basic/coll_basic_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/coll/basic/coll_basic_module.c     (revision 32807)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/coll/basic/coll_basic_module.c     (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -13,6 +13,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2012      Sandia National Laboratories. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2013      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev2">&gt;&gt;   *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;   *
</span><br>
<span class="quotelev2">&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,6 +30,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;coll_basic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -70,6 +73,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;          size = ompi_comm_size(comm);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; +    if (comm-&gt;c_flags &amp; OMPI_COMM_CART) {
</span><br>
<span class="quotelev2">&gt;&gt; +        int cart_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev2">&gt;&gt; +        comm-&gt;c_topo-&gt;topo.cart.cartdim_get(comm, &amp;cart_size);
</span><br>
<span class="quotelev2">&gt;&gt; +        cart_size *= 2;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (cart_size &gt; size) {
</span><br>
<span class="quotelev2">&gt;&gt; +            size = cart_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt;      basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev2">&gt;&gt;      basic_module-&gt;mccb_reqs = (ompi_request_t**)
</span><br>
<span class="quotelev2">&gt;&gt;          malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15929.php">http://www.open-mpi.org/community/lists/devel/2014/09/15929.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15930.php">http://www.open-mpi.org/community/lists/devel/2014/09/15930.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/topo/base/topo_base_cart_create.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/topo/base/topo_base_cart_create.c	(revision 32815)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/topo/base/topo_base_cart_create.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,10 +163,18 @@
</span><br>
<span class="quotelev2">&gt;&gt;         return MPI_ERR_INTERN;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(NULL == new_comm-&gt;c_topo);
</span><br>
<span class="quotelev2">&gt;&gt; +    assert(!(new_comm-&gt;c_flags &amp; OMPI_COMM_CART));
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev2">&gt;&gt; +    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt;&gt;     ret = ompi_comm_enable(old_comm, new_comm,
</span><br>
<span class="quotelev2">&gt;&gt;                            new_rank, num_procs, topo_procs);
</span><br>
<span class="quotelev2">&gt;&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt;&gt;         /* something wrong happened during setting the communicator */
</span><br>
<span class="quotelev2">&gt;&gt; +        new_comm-&gt;c_topo = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +        new_comm-&gt;c_flags &amp;= ~OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_comm_free (&amp;new_comm);
</span><br>
<span class="quotelev2">&gt;&gt;         free(topo_procs);
</span><br>
<span class="quotelev2">&gt;&gt;         if(NULL != cart-&gt;periods) free(cart-&gt;periods);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -176,10 +184,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;         return ret;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_topo           = topo;
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_topo-&gt;mtc.cart = cart;
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_topo-&gt;reorder  = reorder;
</span><br>
<span class="quotelev2">&gt;&gt; -    new_comm-&gt;c_flags         |= OMPI_COMM_CART;
</span><br>
<span class="quotelev2">&gt;&gt;     *comm_topo = new_comm;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     if( MPI_UNDEFINED == new_rank ) {
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/coll/basic/coll_basic_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/coll/basic/coll_basic_module.c	(revision 32815)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/coll/basic/coll_basic_module.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -13,6 +13,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2012      Sandia National Laboratories. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * Copyright (c) 2013      Los Alamos National Security, LLC. All rights
</span><br>
<span class="quotelev2">&gt;&gt;  *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2014      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  * 
</span><br>
<span class="quotelev2">&gt;&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -28,6 +30,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/coll.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/coll/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;ompi/mca/topo/topo.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &quot;ompi/mca/topo/base/base.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;coll_basic.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -70,7 +74,36 @@
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;         size = ompi_comm_size(comm);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; -    basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev2">&gt;&gt; +    size *= 2;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (OMPI_COMM_IS_CART(comm)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        int cart_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_topo_base_comm_cart_2_1_0_t *cart;
</span><br>
<span class="quotelev2">&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev2">&gt;&gt; +        cart = comm-&gt;c_topo-&gt;mtc.cart;
</span><br>
<span class="quotelev2">&gt;&gt; +        cart_size = cart-&gt;ndims * 4;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (cart_size &gt; size) {
</span><br>
<span class="quotelev2">&gt;&gt; +            size = cart_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    } else if (OMPI_COMM_IS_GRAPH(comm)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        int rank, degree;
</span><br>
<span class="quotelev2">&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev2">&gt;&gt; +        rank = ompi_comm_rank (comm);
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_topo_base_graph_neighbors_count (comm, rank, &amp;degree);
</span><br>
<span class="quotelev2">&gt;&gt; +        degree *= 2;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (degree &gt; size) {
</span><br>
<span class="quotelev2">&gt;&gt; +            size = degree;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    } else if (OMPI_COMM_IS_DIST_GRAPH(comm)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        int dist_graph_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        mca_topo_base_comm_dist_graph_2_1_0_t *dist_graph;
</span><br>
<span class="quotelev2">&gt;&gt; +        assert (NULL != comm-&gt;c_topo);
</span><br>
<span class="quotelev2">&gt;&gt; +        dist_graph = comm-&gt;c_topo-&gt;mtc.dist_graph;
</span><br>
<span class="quotelev2">&gt;&gt; +        dist_graph_size = dist_graph-&gt;indegree + dist_graph-&gt;outdegree;
</span><br>
<span class="quotelev2">&gt;&gt; +        if (dist_graph_size &gt; size) {
</span><br>
<span class="quotelev2">&gt;&gt; +            size = dist_graph_size;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    basic_module-&gt;mccb_num_reqs = size;
</span><br>
<span class="quotelev2">&gt;&gt;     basic_module-&gt;mccb_reqs = (ompi_request_t**) 
</span><br>
<span class="quotelev2">&gt;&gt;         malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15941.php">http://www.open-mpi.org/community/lists/devel/2014/09/15941.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15945.php">http://www.open-mpi.org/community/lists/devel/2014/09/15945.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Previous message:</strong> <a href="15947.php">Jeff Squyres (jsquyres): "[OMPI devel] Github migration: tomorrow"</a>
<li><strong>In reply to:</strong> <a href="15945.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15957.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15957.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
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
