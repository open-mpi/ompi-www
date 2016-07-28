<?
$subject_val = "Re: [OMPI devel] RFC: revamp btl rdma interface";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 21:38:29 2014" -->
<!-- isoreceived="20141106023829" -->
<!-- sent="Wed, 5 Nov 2014 18:38:25 -0800" -->
<!-- isosent="20141106023825" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp btl rdma interface" -->
<!-- id="CAAvDA1703D51i-zdnKGwuAg89ycF2UwS6r-8xKq5CWsTxtsaVg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20141105151547.GL6508_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 21:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16225.php">Ralph Castain: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>Previous message:</strong> <a href="16223.php">Gilles Gouaillardet: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>In reply to:</strong> <a href="16198.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16230.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16230.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All atomics must be done through not just &quot;the same btl&quot; but the same btl
<br>
MODULE,  since atomics from two IB HCAs, for instance, are not necessarily
<br>
coherent. So, how is the &quot;best&quot; one to be selected?
<br>
<p>-Paul [Sent from my phone]
<br>
On Nov 5, 2014 7:15 AM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the new osc component I don't try to handle that case. All atomics
</span><br>
<span class="quotelev1">&gt; have to be done through the same btl (including atomics on self). I did
</span><br>
<span class="quotelev1">&gt; this because with the default setup of Gemini they can not be mixed. If
</span><br>
<span class="quotelev1">&gt; it is possible to mix them with other networks I would be happy to add
</span><br>
<span class="quotelev1">&gt; an atomic flag for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 05, 2014 at 03:41:58AM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Quick question. Out of curiosity, how do you handle the (common) case
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt;    mixing network atomics with CPU atomics? Say for a single target with
</span><br>
<span class="quotelev1">&gt; two
</span><br>
<span class="quotelev2">&gt; &gt;    initiators, one initiator is on host with the target, so goes through
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;    SM BTL, and the other initiator is off host, so goes through the
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev2">&gt; &gt;    BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Josh
</span><br>
<span class="quotelev2">&gt; &gt;    On Tue, Nov 4, 2014 at 6:46 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      What: Completely revamp the BTL RDMA interface (btl_put, btl_get) to
</span><br>
<span class="quotelev2">&gt; &gt;      better match what is needed for MPI one-sided.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Why: I am preparing to push an enhanced MPI-3 one-sided component
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt;      makes use of network rdma and atomic operations to provide a fast
</span><br>
<span class="quotelev1">&gt; truely
</span><br>
<span class="quotelev2">&gt; &gt;      one-sided implementation. Before I can push this component I want to
</span><br>
<span class="quotelev2">&gt; &gt;      change the btl interface to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       - Provide access to network atomic operations. I only need add and
</span><br>
<span class="quotelev2">&gt; &gt;         cswap but the interface can be extended to any number of
</span><br>
<span class="quotelev1">&gt; operations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         The new interface provides three new functions: btl_atomic_op,
</span><br>
<span class="quotelev2">&gt; &gt;         btl_atomic_fop, and btl_atomic_cswap. Additionally there are two
</span><br>
<span class="quotelev1">&gt; new
</span><br>
<span class="quotelev2">&gt; &gt;         btl_flags to indicate available atomic support:
</span><br>
<span class="quotelev2">&gt; &gt;         MCA_BTL_FLAGS_ATOMIC_OPS, and MCA_BTL_FLAGS_ATOMIC_FOPS. The
</span><br>
<span class="quotelev2">&gt; &gt;         btl_atomics_flags field has been added to indicate which atomic
</span><br>
<span class="quotelev2">&gt; &gt;         operations are supported (see mca_btl_base_atomic_op_t). At this
</span><br>
<span class="quotelev1">&gt; time
</span><br>
<span class="quotelev2">&gt; &gt;         I only added support for 64-bit integer atomics but I am open to
</span><br>
<span class="quotelev2">&gt; &gt;         adding support for 32-bit as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       - Provide an interface that will allow simultaneous put/get
</span><br>
<span class="quotelev1">&gt; operations
</span><br>
<span class="quotelev2">&gt; &gt;         without extra calls into the btl. The current interface requires
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;         btl user to call prepare_src/prepare_dst before every rdma
</span><br>
<span class="quotelev2">&gt; &gt;         operation. In some cases this is a complete waste (vader, sm with
</span><br>
<span class="quotelev2">&gt; &gt;         CMA, knem, or xpmem).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         I seperated the registration of memory from the segment info.
</span><br>
<span class="quotelev1">&gt; More
</span><br>
<span class="quotelev2">&gt; &gt;         information is provided below. The new put/get functions have the
</span><br>
<span class="quotelev2">&gt; &gt;         following signatures:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      typedef int (*mca_btl_base_module_put_fn_t) (struct
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_endpoint_t *endpoint, void *local_address,
</span><br>
<span class="quotelev2">&gt; &gt;          uint64_t remote_address, struct
</span><br>
<span class="quotelev1">&gt; mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt; &gt;      *local_handle,
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_registration_handle_t *remote_handle, size_t
</span><br>
<span class="quotelev2">&gt; &gt;      size, int flags,
</span><br>
<span class="quotelev2">&gt; &gt;          int order, mca_btl_base_rdma_completion_fn_t cbfunc, void
</span><br>
<span class="quotelev2">&gt; &gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      typedef int (*mca_btl_base_module_get_fn_t) (struct
</span><br>
<span class="quotelev2">&gt; &gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_endpoint_t *endpoint, void *local_address,
</span><br>
<span class="quotelev2">&gt; &gt;          uint64_t remote_address, struct
</span><br>
<span class="quotelev1">&gt; mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt; &gt;      *local_handle,
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_registration_handle_t *remote_handle, size_t
</span><br>
<span class="quotelev2">&gt; &gt;      size, int flags,
</span><br>
<span class="quotelev2">&gt; &gt;          int order, mca_btl_base_rdma_completion_fn_t cbfunc, void
</span><br>
<span class="quotelev2">&gt; &gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      typedef void (*mca_btl_base_rdma_completion_fn_t)(
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_module_t* module,
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev2">&gt; &gt;          void *local_address,
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_registration_handle_t *local_handle,
</span><br>
<span class="quotelev2">&gt; &gt;          void *context,
</span><br>
<span class="quotelev2">&gt; &gt;          void *cbdata,
</span><br>
<span class="quotelev2">&gt; &gt;          int status);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         I may modify the completion function to provide more information
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev2">&gt; &gt;         the completed operation (size).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       - Allow the registration of an entire region even if the region
</span><br>
<span class="quotelev1">&gt; can not
</span><br>
<span class="quotelev2">&gt; &gt;         be modified with a single rdma operation. At this time
</span><br>
<span class="quotelev1">&gt; prepare_src
</span><br>
<span class="quotelev2">&gt; &gt;         and prepare_dst may modify the size and register a smaller
</span><br>
<span class="quotelev2">&gt; &gt;         region. This will not work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         This is done in the new interface through the new
</span><br>
<span class="quotelev1">&gt; btl_register_mem,
</span><br>
<span class="quotelev2">&gt; &gt;         and btl_deregister_mem interfaces. The btl_register_mem interface
</span><br>
<span class="quotelev2">&gt; &gt;         returns a registration handle of size
</span><br>
<span class="quotelev1">&gt; btl_registration_handle_size
</span><br>
<span class="quotelev2">&gt; &gt;         that can be used as either the local_handle or remote_handle to
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev2">&gt; &gt;         rdma/atomic function. BTLs that do not provide these functions
</span><br>
<span class="quotelev1">&gt; do not
</span><br>
<span class="quotelev2">&gt; &gt;         require registration for rdma/atomic operations.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt; &gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_module_t* btl, struct
</span><br>
<span class="quotelev1">&gt; mca_btl_base_endpoint_t
</span><br>
<span class="quotelev2">&gt; &gt;      *endpoint, void *base,
</span><br>
<span class="quotelev2">&gt; &gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev2">&gt; &gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev2">&gt; &gt;          struct mca_btl_base_module_t* btl, struct
</span><br>
<span class="quotelev1">&gt; mca_btl_base_endpoint_t
</span><br>
<span class="quotelev2">&gt; &gt;      *endpoint, void *base,
</span><br>
<span class="quotelev2">&gt; &gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       - Expose the limitations of the put and get operations so the
</span><br>
<span class="quotelev1">&gt; caller
</span><br>
<span class="quotelev2">&gt; &gt;         can make decisions before trying a get or put operation. Two
</span><br>
<span class="quotelev2">&gt; &gt;         examples: the Gemini interconnect has an alignment restriction on
</span><br>
<span class="quotelev2">&gt; &gt;         get, openib devices may have a limit on how large a single
</span><br>
<span class="quotelev1">&gt; get/put
</span><br>
<span class="quotelev2">&gt; &gt;         operation can be. The current interface sort of gives the put
</span><br>
<span class="quotelev1">&gt; limit
</span><br>
<span class="quotelev2">&gt; &gt;         but it is tied to the rdma pipeline protocol.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         This is done in the new interface by providing btl_get_limit,
</span><br>
<span class="quotelev2">&gt; &gt;         btl_get_alignment, btl_put_limit, and btl_put_alignment.
</span><br>
<span class="quotelev1">&gt; Operations
</span><br>
<span class="quotelev2">&gt; &gt;         that violate these restrictions should return OPAL_ERR_BAD_PARAM
</span><br>
<span class="quotelev2">&gt; &gt;         (operation over limit) or OPAL_ERR_NOT_SUPPORTED (operation not
</span><br>
<span class="quotelev2">&gt; &gt;         supported due to alignment restructions with either the source or
</span><br>
<span class="quotelev2">&gt; &gt;         destination buffer).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      This is a big change and I do not expect everyone to like 100% of
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev2">&gt; &gt;      changes. I welcome any feedback people have.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      When: Tuesday, Nov 17, 2015. This is during SC so there will be
</span><br>
<span class="quotelev1">&gt; time for
</span><br>
<span class="quotelev2">&gt; &gt;      face-to-face discussion if anyone has any concerns or would like to
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev2">&gt; &gt;      something changed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      The proposed new btl interface as well as updated versions of:
</span><br>
<span class="quotelev1">&gt; pml/ob1,
</span><br>
<span class="quotelev2">&gt; &gt;      btl/openib, btl/self, btl/scif, btl/sm, btl/tcp, btl/ugni, and
</span><br>
<span class="quotelev1">&gt; btl/vader
</span><br>
<span class="quotelev2">&gt; &gt;      can be found in my btlmod branch at:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="https://github.com/hjelmn/ompi/tree/btlmod">https://github.com/hjelmn/ompi/tree/btlmod</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Other btls (smcuda, and usnic) still need to be updated to provide
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;      new interface. Unmodified btl will not build.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      If there are no objections I will push the btl modifications into
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;      master two weeks from today (Nov 17). Please take a look and let me
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev2">&gt; &gt;      what you think.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;      Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16193.php">http://www.open-mpi.org/community/lists/devel/2014/11/16193.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16195.php">http://www.open-mpi.org/community/lists/devel/2014/11/16195.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16198.php">http://www.open-mpi.org/community/lists/devel/2014/11/16198.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16225.php">Ralph Castain: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>Previous message:</strong> <a href="16223.php">Gilles Gouaillardet: "Re: [OMPI devel] simple_spawn test fails using different set of btls."</a>
<li><strong>In reply to:</strong> <a href="16198.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16230.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16230.php">Nathan Hjelm: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
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
