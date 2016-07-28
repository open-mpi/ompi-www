<?
$subject_val = "Re: [OMPI devel] RFC: revamp btl rdma interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 14:08:02 2014" -->
<!-- isoreceived="20141106190802" -->
<!-- sent="Thu, 6 Nov 2014 12:08:01 -0700" -->
<!-- isosent="20141106190801" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp btl rdma interface" -->
<!-- id="20141106190801.GR6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyYJui_Di1NCiydpV0VKSepM4oWx8yRE7+xCn5-j3OvDhg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-06 14:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16240.php">Mike Dubman: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16240.php">Mike Dubman: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16258.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't look at that yet. Would be great to get the new osc component
<br>
working over both btls and mtls. I know portals supports atomics but I
<br>
don't know whether psm does.
<br>
<p>-Nathan
<br>
<p>On Thu, Nov 06, 2014 at 08:45:15PM +0200, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    btw, do you plan to add atomics API to MTL layer as well?
</span><br>
<span class="quotelev1">&gt;    On Thu, Nov 6, 2014 at 5:23 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      At the moment I select the lowest latency BTL that can reach all of the
</span><br>
<span class="quotelev1">&gt;      ranks in the communicator used to create the window. I can add code to
</span><br>
<span class="quotelev1">&gt;      round-robin windows over the available BTLs on multi-rail systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      -Nathan
</span><br>
<span class="quotelev1">&gt;      On Wed, Nov 05, 2014 at 06:38:25PM -0800, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;    All atomics must be done through not just &quot;the same btl&quot; but the
</span><br>
<span class="quotelev1">&gt;      same btl
</span><br>
<span class="quotelev2">&gt;      &gt;    MODULE,  since atomics from two IB HCAs, for instance, are not
</span><br>
<span class="quotelev1">&gt;      necessarily
</span><br>
<span class="quotelev2">&gt;      &gt;    coherent. So, how is the &quot;best&quot; one to be selected?
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    -Paul [Sent from my phone]
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    On Nov 5, 2014 7:15 AM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      In the new osc component I don't try to handle that case. All
</span><br>
<span class="quotelev1">&gt;      atomics
</span><br>
<span class="quotelev2">&gt;      &gt;      have to be done through the same btl (including atomics on self).
</span><br>
<span class="quotelev1">&gt;      I did
</span><br>
<span class="quotelev2">&gt;      &gt;      this because with the default setup of Gemini they can not be
</span><br>
<span class="quotelev1">&gt;      mixed. If
</span><br>
<span class="quotelev2">&gt;      &gt;      it is possible to mix them with other networks I would be happy
</span><br>
<span class="quotelev1">&gt;      to add
</span><br>
<span class="quotelev2">&gt;      &gt;      an atomic flag for that.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      -Nathan
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      On Wed, Nov 05, 2014 at 03:41:58AM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    Quick question. Out of curiosity, how do you handle the
</span><br>
<span class="quotelev1">&gt;      (common)
</span><br>
<span class="quotelev2">&gt;      &gt;      case of
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    mixing network atomics with CPU atomics? Say for a single
</span><br>
<span class="quotelev1">&gt;      target
</span><br>
<span class="quotelev2">&gt;      &gt;      with two
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    initiators, one initiator is on host with the target, so
</span><br>
<span class="quotelev1">&gt;      goes
</span><br>
<span class="quotelev2">&gt;      &gt;      through the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    SM BTL, and the other initiator is off host, so goes through
</span><br>
<span class="quotelev1">&gt;      the
</span><br>
<span class="quotelev2">&gt;      &gt;      network
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    BTL.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    Josh
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;    On Tue, Nov 4, 2014 at 6:46 PM, Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;      &lt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;      wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      What: Completely revamp the BTL RDMA interface (btl_put,
</span><br>
<span class="quotelev1">&gt;      btl_get)
</span><br>
<span class="quotelev2">&gt;      &gt;      to
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      better match what is needed for MPI one-sided.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      Why: I am preparing to push an enhanced MPI-3 one-sided
</span><br>
<span class="quotelev1">&gt;      component
</span><br>
<span class="quotelev2">&gt;      &gt;      that
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      makes use of network rdma and atomic operations to provide
</span><br>
<span class="quotelev1">&gt;      a fast
</span><br>
<span class="quotelev2">&gt;      &gt;      truely
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      one-sided implementation. Before I can push this component
</span><br>
<span class="quotelev1">&gt;      I want
</span><br>
<span class="quotelev2">&gt;      &gt;      to
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      change the btl interface to:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;       - Provide access to network atomic operations. I only
</span><br>
<span class="quotelev1">&gt;      need add
</span><br>
<span class="quotelev2">&gt;      &gt;      and
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         cswap but the interface can be extended to any number
</span><br>
<span class="quotelev1">&gt;      of
</span><br>
<span class="quotelev2">&gt;      &gt;      operations.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         The new interface provides three new functions:
</span><br>
<span class="quotelev1">&gt;      btl_atomic_op,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         btl_atomic_fop, and btl_atomic_cswap. Additionally
</span><br>
<span class="quotelev1">&gt;      there are
</span><br>
<span class="quotelev2">&gt;      &gt;      two new
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         btl_flags to indicate available atomic support:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         MCA_BTL_FLAGS_ATOMIC_OPS, and
</span><br>
<span class="quotelev1">&gt;      MCA_BTL_FLAGS_ATOMIC_FOPS. The
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         btl_atomics_flags field has been added to indicate
</span><br>
<span class="quotelev1">&gt;      which
</span><br>
<span class="quotelev2">&gt;      &gt;      atomic
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         operations are supported (see
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_atomic_op_t). At
</span><br>
<span class="quotelev2">&gt;      &gt;      this time
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         I only added support for 64-bit integer atomics but I
</span><br>
<span class="quotelev1">&gt;      am open
</span><br>
<span class="quotelev2">&gt;      &gt;      to
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         adding support for 32-bit as well.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;       - Provide an interface that will allow simultaneous
</span><br>
<span class="quotelev1">&gt;      put/get
</span><br>
<span class="quotelev2">&gt;      &gt;      operations
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         without extra calls into the btl. The current interface
</span><br>
<span class="quotelev2">&gt;      &gt;      requires the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         btl user to call prepare_src/prepare_dst before every
</span><br>
<span class="quotelev1">&gt;      rdma
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         operation. In some cases this is a complete waste
</span><br>
<span class="quotelev1">&gt;      (vader, sm
</span><br>
<span class="quotelev2">&gt;      &gt;      with
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         CMA, knem, or xpmem).
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         I seperated the registration of memory from the segment
</span><br>
<span class="quotelev1">&gt;      info.
</span><br>
<span class="quotelev2">&gt;      &gt;      More
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         information is provided below. The new put/get
</span><br>
<span class="quotelev1">&gt;      functions have
</span><br>
<span class="quotelev2">&gt;      &gt;      the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         following signatures:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      typedef int (*mca_btl_base_module_put_fn_t) (struct
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_endpoint_t *endpoint, void
</span><br>
<span class="quotelev2">&gt;      &gt;      *local_address,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          uint64_t remote_address, struct
</span><br>
<span class="quotelev2">&gt;      &gt;      mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *local_handle,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *remote_handle,
</span><br>
<span class="quotelev2">&gt;      &gt;      size_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      size, int flags,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          int order, mca_btl_base_rdma_completion_fn_t cbfunc,
</span><br>
<span class="quotelev1">&gt;      void
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      typedef int (*mca_btl_base_module_get_fn_t) (struct
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_endpoint_t *endpoint, void
</span><br>
<span class="quotelev2">&gt;      &gt;      *local_address,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          uint64_t remote_address, struct
</span><br>
<span class="quotelev2">&gt;      &gt;      mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *local_handle,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *remote_handle,
</span><br>
<span class="quotelev2">&gt;      &gt;      size_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      size, int flags,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          int order, mca_btl_base_rdma_completion_fn_t cbfunc,
</span><br>
<span class="quotelev1">&gt;      void
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      typedef void (*mca_btl_base_rdma_completion_fn_t)(
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_module_t* module,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          void *local_address,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *local_handle,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          void *context,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          void *cbdata,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          int status);
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         I may modify the completion function to provide more
</span><br>
<span class="quotelev2">&gt;      &gt;      information on
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         the completed operation (size).
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;       - Allow the registration of an entire region even if the
</span><br>
<span class="quotelev1">&gt;      region
</span><br>
<span class="quotelev2">&gt;      &gt;      can not
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         be modified with a single rdma operation. At this time
</span><br>
<span class="quotelev2">&gt;      &gt;      prepare_src
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         and prepare_dst may modify the size and register a
</span><br>
<span class="quotelev1">&gt;      smaller
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         region. This will not work.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         This is done in the new interface through the new
</span><br>
<span class="quotelev2">&gt;      &gt;      btl_register_mem,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         and btl_deregister_mem interfaces. The btl_register_mem
</span><br>
<span class="quotelev2">&gt;      &gt;      interface
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         returns a registration handle of size
</span><br>
<span class="quotelev2">&gt;      &gt;      btl_registration_handle_size
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         that can be used as either the local_handle or
</span><br>
<span class="quotelev1">&gt;      remote_handle
</span><br>
<span class="quotelev2">&gt;      &gt;      to any
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         rdma/atomic function. BTLs that do not provide these
</span><br>
<span class="quotelev1">&gt;      functions
</span><br>
<span class="quotelev2">&gt;      &gt;      do not
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         require registration for rdma/atomic operations.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_module_t* btl, struct
</span><br>
<span class="quotelev2">&gt;      &gt;      mca_btl_base_endpoint_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *endpoint, void *base,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          struct mca_btl_base_module_t* btl, struct
</span><br>
<span class="quotelev2">&gt;      &gt;      mca_btl_base_endpoint_t
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      *endpoint, void *base,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;       - Expose the limitations of the put and get operations so
</span><br>
<span class="quotelev1">&gt;      the
</span><br>
<span class="quotelev2">&gt;      &gt;      caller
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         can make decisions before trying a get or put
</span><br>
<span class="quotelev1">&gt;      operation. Two
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         examples: the Gemini interconnect has an alignment
</span><br>
<span class="quotelev1">&gt;      restriction
</span><br>
<span class="quotelev2">&gt;      &gt;      on
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         get, openib devices may have a limit on how large a
</span><br>
<span class="quotelev1">&gt;      single
</span><br>
<span class="quotelev2">&gt;      &gt;      get/put
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         operation can be. The current interface sort of gives
</span><br>
<span class="quotelev1">&gt;      the put
</span><br>
<span class="quotelev2">&gt;      &gt;      limit
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         but it is tied to the rdma pipeline protocol.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         This is done in the new interface by providing
</span><br>
<span class="quotelev1">&gt;      btl_get_limit,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         btl_get_alignment, btl_put_limit, and
</span><br>
<span class="quotelev1">&gt;      btl_put_alignment.
</span><br>
<span class="quotelev2">&gt;      &gt;      Operations
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         that violate these restrictions should return
</span><br>
<span class="quotelev2">&gt;      &gt;      OPAL_ERR_BAD_PARAM
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         (operation over limit) or OPAL_ERR_NOT_SUPPORTED
</span><br>
<span class="quotelev1">&gt;      (operation
</span><br>
<span class="quotelev2">&gt;      &gt;      not
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         supported due to alignment restructions with either the
</span><br>
<span class="quotelev1">&gt;      source
</span><br>
<span class="quotelev2">&gt;      &gt;      or
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;         destination buffer).
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      This is a big change and I do not expect everyone to like
</span><br>
<span class="quotelev1">&gt;      100% of
</span><br>
<span class="quotelev2">&gt;      &gt;      these
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      changes. I welcome any feedback people have.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      When: Tuesday, Nov 17, 2015. This is during SC so there
</span><br>
<span class="quotelev1">&gt;      will be
</span><br>
<span class="quotelev2">&gt;      &gt;      time for
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      face-to-face discussion if anyone has any concerns or
</span><br>
<span class="quotelev1">&gt;      would like
</span><br>
<span class="quotelev2">&gt;      &gt;      to see
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      something changed.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      The proposed new btl interface as well as updated versions
</span><br>
<span class="quotelev1">&gt;      of:
</span><br>
<span class="quotelev2">&gt;      &gt;      pml/ob1,
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      btl/openib, btl/self, btl/scif, btl/sm, btl/tcp, btl/ugni,
</span><br>
<span class="quotelev1">&gt;      and
</span><br>
<span class="quotelev2">&gt;      &gt;      btl/vader
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      can be found in my btlmod branch at:
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      <a href="https://github.com/hjelmn/ompi/tree/btlmod">https://github.com/hjelmn/ompi/tree/btlmod</a>
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      Other btls (smcuda, and usnic) still need to be updated to
</span><br>
<span class="quotelev2">&gt;      &gt;      provide the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      new interface. Unmodified btl will not build.
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      If there are no objections I will push the btl
</span><br>
<span class="quotelev1">&gt;      modifications into
</span><br>
<span class="quotelev2">&gt;      &gt;      the
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      master two weeks from today (Nov 17). Please take a look
</span><br>
<span class="quotelev1">&gt;      and let
</span><br>
<span class="quotelev2">&gt;      &gt;      me know
</span><br>
<span class="quotelev3">&gt;      &gt;      &gt;      what you think.
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
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16193.php">http://www.open-mpi.org/community/lists/devel/2014/11/16193.php</a>
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
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16195.php">http://www.open-mpi.org/community/lists/devel/2014/11/16195.php</a>
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
<span class="quotelev2">&gt;      &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16198.php">http://www.open-mpi.org/community/lists/devel/2014/11/16198.php</a>
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
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16224.php">http://www.open-mpi.org/community/lists/devel/2014/11/16224.php</a>
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
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16230.php">http://www.open-mpi.org/community/lists/devel/2014/11/16230.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Kind Regards,
</span><br>
<span class="quotelev1">&gt;    M.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16240.php">http://www.open-mpi.org/community/lists/devel/2014/11/16240.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16241/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Previous message:</strong> <a href="16240.php">Mike Dubman: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>In reply to:</strong> <a href="16240.php">Mike Dubman: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16242.php">Howard Pritchard: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16258.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
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
