<?
$subject_val = "Re: [OMPI devel] RFC: revamp btl rdma interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 14:19:53 2014" -->
<!-- isoreceived="20141106191953" -->
<!-- sent="Thu, 6 Nov 2014 12:19:52 -0700" -->
<!-- isosent="20141106191952" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp btl rdma interface" -->
<!-- id="20141106191952.GS6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj4MGYs8CdvGOP7rNi4ikebjpiHCxqtSk42GYUsyk5dQ0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: revamp btl rdma interface<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 14:19:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16245.php">Ralph Castain: "[OMPI devel] Pull requests on the trunk"</a>
<li><strong>Previous message:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16258.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not handling the multi-rail case at this point. Only issue atomics and
<br>
rdma operations over a single btl module (which should be a single
<br>
HCA).
<br>
<p>-Nathan
<br>
<p>On Thu, Nov 06, 2014 at 12:15:13PM -0700, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt;    HI Nathan,
</span><br>
<span class="quotelev1">&gt;    How would you get things right with atomics and multirail? 
</span><br>
<span class="quotelev1">&gt;    Getting the memory consistency right would be really difficult.
</span><br>
<span class="quotelev1">&gt;    You'd have to keep issuing zero length rdma reads and hoping
</span><br>
<span class="quotelev1">&gt;    that that would have the effect of a pci-e flush in the case of
</span><br>
<span class="quotelev1">&gt;    multiple updates to a given target addr being in flight.
</span><br>
<span class="quotelev1">&gt;    Howard
</span><br>
<span class="quotelev1">&gt;    2014-11-06 12:08 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I haven't look at that yet. Would be great to get the new osc component
</span><br>
<span class="quotelev1">&gt;      working over both btls and mtls. I know portals supports atomics but I
</span><br>
<span class="quotelev1">&gt;      don't know whether psm does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Thu, Nov 06, 2014 at 08:45:15PM +0200, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;    btw, do you plan to add atomics API to MTL layer as well?
</span><br>
<span class="quotelev2">&gt;      &gt;    On Thu, Nov 6, 2014 at 5:23 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      At the moment I select the lowest latency BTL that can reach all
</span><br>
<span class="quotelev1">&gt;      of the
</span><br>
<span class="quotelev2">&gt;      &gt;      ranks in the communicator used to create the window. I can add
</span><br>
<span class="quotelev1">&gt;      code to
</span><br>
<span class="quotelev2">&gt;      &gt;      round-robin windows over the available BTLs on multi-rail
</span><br>
<span class="quotelev1">&gt;      systems.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      -Nathan
</span><br>
<span class="quotelev2">&gt;      &gt;      On Wed, Nov 05, 2014 at 06:38:25PM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    All atomics must be done through not just &quot;the same btl&quot; but
</span><br>
<span class="quotelev1">&gt;      the
</span><br>
<span class="quotelev2">&gt;      &gt;      same btl
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    MODULE,  since atomics from two IB HCAs, for instance, are
</span><br>
<span class="quotelev1">&gt;      not
</span><br>
<span class="quotelev2">&gt;      &gt;      necessarily
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    coherent. So, how is the &quot;best&quot; one to be selected?
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    -Paul [Sent from my phone]
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    On Nov 5, 2014 7:15 AM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      In the new osc component I don't try to handle that case.
</span><br>
<span class="quotelev1">&gt;      All
</span><br>
<span class="quotelev2">&gt;      &gt;      atomics
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      have to be done through the same btl (including atomics on
</span><br>
<span class="quotelev1">&gt;      self).
</span><br>
<span class="quotelev2">&gt;      &gt;      I did
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      this because with the default setup of Gemini they can not
</span><br>
<span class="quotelev1">&gt;      be
</span><br>
<span class="quotelev2">&gt;      &gt;      mixed. If
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      it is possible to mix them with other networks I would be
</span><br>
<span class="quotelev1">&gt;      happy
</span><br>
<span class="quotelev2">&gt;      &gt;      to add
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      an atomic flag for that.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      -Nathan
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      On Wed, Nov 05, 2014 at 03:41:58AM -0500, Joshua Ladd
</span><br>
<span class="quotelev1">&gt;      wrote:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    Quick question. Out of curiosity, how do you handle
</span><br>
<span class="quotelev1">&gt;      the
</span><br>
<span class="quotelev2">&gt;      &gt;      (common)
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      case of
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    mixing network atomics with CPU atomics? Say for a
</span><br>
<span class="quotelev1">&gt;      single
</span><br>
<span class="quotelev2">&gt;      &gt;      target
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      with two
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    initiators, one initiator is on host with the target,
</span><br>
<span class="quotelev1">&gt;      so
</span><br>
<span class="quotelev2">&gt;      &gt;      goes
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      through the
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    SM BTL, and the other initiator is off host, so goes
</span><br>
<span class="quotelev1">&gt;      through
</span><br>
<span class="quotelev2">&gt;      &gt;      the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      network
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    BTL.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    Josh
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;    On Tue, Nov 4, 2014 at 6:46 PM, Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;      &gt;      &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      wrote:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      What: Completely revamp the BTL RDMA interface
</span><br>
<span class="quotelev1">&gt;      (btl_put,
</span><br>
<span class="quotelev2">&gt;      &gt;      btl_get)
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      to
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      better match what is needed for MPI one-sided.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      Why: I am preparing to push an enhanced MPI-3
</span><br>
<span class="quotelev1">&gt;      one-sided
</span><br>
<span class="quotelev2">&gt;      &gt;      component
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      that
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      makes use of network rdma and atomic operations to
</span><br>
<span class="quotelev1">&gt;      provide
</span><br>
<span class="quotelev2">&gt;      &gt;      a fast
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      truely
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      one-sided implementation. Before I can push this
</span><br>
<span class="quotelev1">&gt;      component
</span><br>
<span class="quotelev2">&gt;      &gt;      I want
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      to
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      change the btl interface to:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;       - Provide access to network atomic operations. I
</span><br>
<span class="quotelev1">&gt;      only
</span><br>
<span class="quotelev2">&gt;      &gt;      need add
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      and
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         cswap but the interface can be extended to any
</span><br>
<span class="quotelev1">&gt;      number
</span><br>
<span class="quotelev2">&gt;      &gt;      of
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      operations.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         The new interface provides three new functions:
</span><br>
<span class="quotelev2">&gt;      &gt;      btl_atomic_op,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         btl_atomic_fop, and btl_atomic_cswap.
</span><br>
<span class="quotelev1">&gt;      Additionally
</span><br>
<span class="quotelev2">&gt;      &gt;      there are
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      two new
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         btl_flags to indicate available atomic support:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         MCA_BTL_FLAGS_ATOMIC_OPS, and
</span><br>
<span class="quotelev2">&gt;      &gt;      MCA_BTL_FLAGS_ATOMIC_FOPS. The
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         btl_atomics_flags field has been added to
</span><br>
<span class="quotelev1">&gt;      indicate
</span><br>
<span class="quotelev2">&gt;      &gt;      which
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      atomic
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         operations are supported (see
</span><br>
<span class="quotelev2">&gt;      &gt;      mca_btl_base_atomic_op_t). At
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      this time
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         I only added support for 64-bit integer atomics
</span><br>
<span class="quotelev1">&gt;      but I
</span><br>
<span class="quotelev2">&gt;      &gt;      am open
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      to
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         adding support for 32-bit as well.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;       - Provide an interface that will allow
</span><br>
<span class="quotelev1">&gt;      simultaneous
</span><br>
<span class="quotelev2">&gt;      &gt;      put/get
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      operations
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         without extra calls into the btl. The current
</span><br>
<span class="quotelev1">&gt;      interface
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      requires the
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         btl user to call prepare_src/prepare_dst before
</span><br>
<span class="quotelev1">&gt;      every
</span><br>
<span class="quotelev2">&gt;      &gt;      rdma
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         operation. In some cases this is a complete
</span><br>
<span class="quotelev1">&gt;      waste
</span><br>
<span class="quotelev2">&gt;      &gt;      (vader, sm
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      with
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         CMA, knem, or xpmem).
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         I seperated the registration of memory from the
</span><br>
<span class="quotelev1">&gt;      segment
</span><br>
<span class="quotelev2">&gt;      &gt;      info.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      More
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         information is provided below. The new put/get
</span><br>
<span class="quotelev2">&gt;      &gt;      functions have
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      the
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         following signatures:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      typedef int (*mca_btl_base_module_put_fn_t) (struct
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_endpoint_t *endpoint, void
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *local_address,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          uint64_t remote_address, struct
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *local_handle,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt;      &gt;      *remote_handle,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      size_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      size, int flags,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          int order, mca_btl_base_rdma_completion_fn_t
</span><br>
<span class="quotelev1">&gt;      cbfunc,
</span><br>
<span class="quotelev2">&gt;      &gt;      void
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      typedef int (*mca_btl_base_module_get_fn_t) (struct
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_endpoint_t *endpoint, void
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *local_address,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          uint64_t remote_address, struct
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *local_handle,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt;      &gt;      *remote_handle,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      size_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      size, int flags,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          int order, mca_btl_base_rdma_completion_fn_t
</span><br>
<span class="quotelev1">&gt;      cbfunc,
</span><br>
<span class="quotelev2">&gt;      &gt;      void
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      typedef void (*mca_btl_base_rdma_completion_fn_t)(
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_module_t* module,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          void *local_address,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt;      &gt;      *local_handle,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          void *context,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          void *cbdata,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          int status);
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         I may modify the completion function to provide
</span><br>
<span class="quotelev1">&gt;      more
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      information on
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         the completed operation (size).
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;       - Allow the registration of an entire region even
</span><br>
<span class="quotelev1">&gt;      if the
</span><br>
<span class="quotelev2">&gt;      &gt;      region
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      can not
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         be modified with a single rdma operation. At
</span><br>
<span class="quotelev1">&gt;      this time
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      prepare_src
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         and prepare_dst may modify the size and register
</span><br>
<span class="quotelev1">&gt;      a
</span><br>
<span class="quotelev2">&gt;      &gt;      smaller
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         region. This will not work.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         This is done in the new interface through the
</span><br>
<span class="quotelev1">&gt;      new
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      btl_register_mem,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         and btl_deregister_mem interfaces. The
</span><br>
<span class="quotelev1">&gt;      btl_register_mem
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      interface
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         returns a registration handle of size
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      btl_registration_handle_size
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         that can be used as either the local_handle or
</span><br>
<span class="quotelev2">&gt;      &gt;      remote_handle
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      to any
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         rdma/atomic function. BTLs that do not provide
</span><br>
<span class="quotelev1">&gt;      these
</span><br>
<span class="quotelev2">&gt;      &gt;      functions
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      do not
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         require registration for rdma/atomic operations.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_module_t* btl, struct
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      mca_btl_base_endpoint_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *endpoint, void *base,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          struct mca_btl_base_module_t* btl, struct
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      mca_btl_base_endpoint_t
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      *endpoint, void *base,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;       - Expose the limitations of the put and get
</span><br>
<span class="quotelev1">&gt;      operations so
</span><br>
<span class="quotelev2">&gt;      &gt;      the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      caller
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         can make decisions before trying a get or put
</span><br>
<span class="quotelev2">&gt;      &gt;      operation. Two
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         examples: the Gemini interconnect has an
</span><br>
<span class="quotelev1">&gt;      alignment
</span><br>
<span class="quotelev2">&gt;      &gt;      restriction
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      on
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         get, openib devices may have a limit on how
</span><br>
<span class="quotelev1">&gt;      large a
</span><br>
<span class="quotelev2">&gt;      &gt;      single
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      get/put
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         operation can be. The current interface sort of
</span><br>
<span class="quotelev1">&gt;      gives
</span><br>
<span class="quotelev2">&gt;      &gt;      the put
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      limit
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         but it is tied to the rdma pipeline protocol.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         This is done in the new interface by providing
</span><br>
<span class="quotelev2">&gt;      &gt;      btl_get_limit,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         btl_get_alignment, btl_put_limit, and
</span><br>
<span class="quotelev2">&gt;      &gt;      btl_put_alignment.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      Operations
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         that violate these restrictions should return
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      OPAL_ERR_BAD_PARAM
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         (operation over limit) or OPAL_ERR_NOT_SUPPORTED
</span><br>
<span class="quotelev2">&gt;      &gt;      (operation
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      not
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         supported due to alignment restructions with
</span><br>
<span class="quotelev1">&gt;      either the
</span><br>
<span class="quotelev2">&gt;      &gt;      source
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      or
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;         destination buffer).
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      This is a big change and I do not expect everyone
</span><br>
<span class="quotelev1">&gt;      to like
</span><br>
<span class="quotelev2">&gt;      &gt;      100% of
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      these
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      changes. I welcome any feedback people have.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      When: Tuesday, Nov 17, 2015. This is during SC so
</span><br>
<span class="quotelev1">&gt;      there
</span><br>
<span class="quotelev2">&gt;      &gt;      will be
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      time for
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      face-to-face discussion if anyone has any concerns
</span><br>
<span class="quotelev1">&gt;      or
</span><br>
<span class="quotelev2">&gt;      &gt;      would like
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      to see
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      something changed.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      The proposed new btl interface as well as updated
</span><br>
<span class="quotelev1">&gt;      versions
</span><br>
<span class="quotelev2">&gt;      &gt;      of:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      pml/ob1,
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      btl/openib, btl/self, btl/scif, btl/sm, btl/tcp,
</span><br>
<span class="quotelev1">&gt;      btl/ugni,
</span><br>
<span class="quotelev2">&gt;      &gt;      and
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      btl/vader
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      can be found in my btlmod branch at:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      <a href="https://github.com/hjelmn/ompi/tree/btlmod">https://github.com/hjelmn/ompi/tree/btlmod</a>
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      Other btls (smcuda, and usnic) still need to be
</span><br>
<span class="quotelev1">&gt;      updated to
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      provide the
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      new interface. Unmodified btl will not build.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      If there are no objections I will push the btl
</span><br>
<span class="quotelev2">&gt;      &gt;      modifications into
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      the
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      master two weeks from today (Nov 17). Please take a
</span><br>
<span class="quotelev1">&gt;      look
</span><br>
<span class="quotelev2">&gt;      &gt;      and let
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      me know
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      what you think.
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      _______________________________________________
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      devel mailing list
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      Subscription:
</span><br>
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;      Link to this post:
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16193.php">http://www.open-mpi.org/community/lists/devel/2014/11/16193.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt; Subscription:
</span><br>
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;      &gt;      &gt;      &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;     
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16195.php">http://www.open-mpi.org/community/lists/devel/2014/11/16195.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      devel mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      Subscription:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      Link to this post:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;     
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16198.php">http://www.open-mpi.org/community/lists/devel/2014/11/16198.php</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16224.php">http://www.open-mpi.org/community/lists/devel/2014/11/16224.php</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16230.php">http://www.open-mpi.org/community/lists/devel/2014/11/16230.php</a>
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    --
</span><br>
<span class="quotelev2">&gt;      &gt;    Kind Regards,
</span><br>
<span class="quotelev2">&gt;      &gt;    M.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16240.php">http://www.open-mpi.org/community/lists/devel/2014/11/16240.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16241.php">http://www.open-mpi.org/community/lists/devel/2014/11/16241.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16242.php">http://www.open-mpi.org/community/lists/devel/2014/11/16242.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16244/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16245.php">Ralph Castain: "[OMPI devel] Pull requests on the trunk"</a>
<li><strong>Previous message:</strong> <a href="16243.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16258.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
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
