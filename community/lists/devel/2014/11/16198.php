<?
$subject_val = "Re: [OMPI devel] RFC: revamp btl rdma interface";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 10:15:48 2014" -->
<!-- isoreceived="20141105151548" -->
<!-- sent="Wed, 5 Nov 2014 08:15:47 -0700" -->
<!-- isosent="20141105151547" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp btl rdma interface" -->
<!-- id="20141105151547.GL6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z-UJXERcEehd2kRfRYFA+4DaJYj7D9=Bz66kJzMux+YKw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-05 10:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16199.php">twurgl_at_[hidden]: "[OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Previous message:</strong> <a href="16197.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16224.php">Paul Hargrove: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the new osc component I don't try to handle that case. All atomics
<br>
have to be done through the same btl (including atomics on self). I did
<br>
this because with the default setup of Gemini they can not be mixed. If
<br>
it is possible to mix them with other networks I would be happy to add
<br>
an atomic flag for that.
<br>
<p>-Nathan
<br>
<p>On Wed, Nov 05, 2014 at 03:41:58AM -0500, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt;    Quick question. Out of curiosity, how do you handle the (common) case of
</span><br>
<span class="quotelev1">&gt;    mixing network atomics with CPU atomics? Say for a single target with two
</span><br>
<span class="quotelev1">&gt;    initiators, one initiator is on host with the target, so goes through the
</span><br>
<span class="quotelev1">&gt;    SM BTL, and the other initiator is off host, so goes through the network
</span><br>
<span class="quotelev1">&gt;    BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Josh
</span><br>
<span class="quotelev1">&gt;    On Tue, Nov 4, 2014 at 6:46 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      What: Completely revamp the BTL RDMA interface (btl_put, btl_get) to
</span><br>
<span class="quotelev1">&gt;      better match what is needed for MPI one-sided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Why: I am preparing to push an enhanced MPI-3 one-sided component that
</span><br>
<span class="quotelev1">&gt;      makes use of network rdma and atomic operations to provide a fast truely
</span><br>
<span class="quotelev1">&gt;      one-sided implementation. Before I can push this component I want to
</span><br>
<span class="quotelev1">&gt;      change the btl interface to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       - Provide access to network atomic operations. I only need add and
</span><br>
<span class="quotelev1">&gt;         cswap but the interface can be extended to any number of operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         The new interface provides three new functions: btl_atomic_op,
</span><br>
<span class="quotelev1">&gt;         btl_atomic_fop, and btl_atomic_cswap. Additionally there are two new
</span><br>
<span class="quotelev1">&gt;         btl_flags to indicate available atomic support:
</span><br>
<span class="quotelev1">&gt;         MCA_BTL_FLAGS_ATOMIC_OPS, and MCA_BTL_FLAGS_ATOMIC_FOPS. The
</span><br>
<span class="quotelev1">&gt;         btl_atomics_flags field has been added to indicate which atomic
</span><br>
<span class="quotelev1">&gt;         operations are supported (see mca_btl_base_atomic_op_t). At this time
</span><br>
<span class="quotelev1">&gt;         I only added support for 64-bit integer atomics but I am open to
</span><br>
<span class="quotelev1">&gt;         adding support for 32-bit as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       - Provide an interface that will allow simultaneous put/get operations
</span><br>
<span class="quotelev1">&gt;         without extra calls into the btl. The current interface requires the
</span><br>
<span class="quotelev1">&gt;         btl user to call prepare_src/prepare_dst before every rdma
</span><br>
<span class="quotelev1">&gt;         operation. In some cases this is a complete waste (vader, sm with
</span><br>
<span class="quotelev1">&gt;         CMA, knem, or xpmem).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I seperated the registration of memory from the segment info. More
</span><br>
<span class="quotelev1">&gt;         information is provided below. The new put/get functions have the
</span><br>
<span class="quotelev1">&gt;         following signatures:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      typedef int (*mca_btl_base_module_put_fn_t) (struct
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_endpoint_t *endpoint, void *local_address,
</span><br>
<span class="quotelev1">&gt;          uint64_t remote_address, struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *local_handle,
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_registration_handle_t *remote_handle, size_t
</span><br>
<span class="quotelev1">&gt;      size, int flags,
</span><br>
<span class="quotelev1">&gt;          int order, mca_btl_base_rdma_completion_fn_t cbfunc, void
</span><br>
<span class="quotelev1">&gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      typedef int (*mca_btl_base_module_get_fn_t) (struct
</span><br>
<span class="quotelev1">&gt;      mca_btl_base_module_t *btl,
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_endpoint_t *endpoint, void *local_address,
</span><br>
<span class="quotelev1">&gt;          uint64_t remote_address, struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *local_handle,
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_registration_handle_t *remote_handle, size_t
</span><br>
<span class="quotelev1">&gt;      size, int flags,
</span><br>
<span class="quotelev1">&gt;          int order, mca_btl_base_rdma_completion_fn_t cbfunc, void
</span><br>
<span class="quotelev1">&gt;      *cbcontext, void *cbdata);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      typedef void (*mca_btl_base_rdma_completion_fn_t)(
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_module_t* module,
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;          void *local_address,
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_registration_handle_t *local_handle,
</span><br>
<span class="quotelev1">&gt;          void *context,
</span><br>
<span class="quotelev1">&gt;          void *cbdata,
</span><br>
<span class="quotelev1">&gt;          int status);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I may modify the completion function to provide more information on
</span><br>
<span class="quotelev1">&gt;         the completed operation (size).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       - Allow the registration of an entire region even if the region can not
</span><br>
<span class="quotelev1">&gt;         be modified with a single rdma operation. At this time prepare_src
</span><br>
<span class="quotelev1">&gt;         and prepare_dst may modify the size and register a smaller
</span><br>
<span class="quotelev1">&gt;         region. This will not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         This is done in the new interface through the new btl_register_mem,
</span><br>
<span class="quotelev1">&gt;         and btl_deregister_mem interfaces. The btl_register_mem interface
</span><br>
<span class="quotelev1">&gt;         returns a registration handle of size btl_registration_handle_size
</span><br>
<span class="quotelev1">&gt;         that can be used as either the local_handle or remote_handle to any
</span><br>
<span class="quotelev1">&gt;         rdma/atomic function. BTLs that do not provide these functions do not
</span><br>
<span class="quotelev1">&gt;         require registration for rdma/atomic operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_module_t* btl, struct mca_btl_base_endpoint_t
</span><br>
<span class="quotelev1">&gt;      *endpoint, void *base,
</span><br>
<span class="quotelev1">&gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      typedef struct mca_btl_base_registration_handle_t
</span><br>
<span class="quotelev1">&gt;      *(*mca_btl_base_module_register_mem_fn_t)(
</span><br>
<span class="quotelev1">&gt;          struct mca_btl_base_module_t* btl, struct mca_btl_base_endpoint_t
</span><br>
<span class="quotelev1">&gt;      *endpoint, void *base,
</span><br>
<span class="quotelev1">&gt;          size_t size, uint32_t flags);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       - Expose the limitations of the put and get operations so the caller
</span><br>
<span class="quotelev1">&gt;         can make decisions before trying a get or put operation. Two
</span><br>
<span class="quotelev1">&gt;         examples: the Gemini interconnect has an alignment restriction on
</span><br>
<span class="quotelev1">&gt;         get, openib devices may have a limit on how large a single get/put
</span><br>
<span class="quotelev1">&gt;         operation can be. The current interface sort of gives the put limit
</span><br>
<span class="quotelev1">&gt;         but it is tied to the rdma pipeline protocol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         This is done in the new interface by providing btl_get_limit,
</span><br>
<span class="quotelev1">&gt;         btl_get_alignment, btl_put_limit, and btl_put_alignment. Operations
</span><br>
<span class="quotelev1">&gt;         that violate these restrictions should return OPAL_ERR_BAD_PARAM
</span><br>
<span class="quotelev1">&gt;         (operation over limit) or OPAL_ERR_NOT_SUPPORTED (operation not
</span><br>
<span class="quotelev1">&gt;         supported due to alignment restructions with either the source or
</span><br>
<span class="quotelev1">&gt;         destination buffer).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      This is a big change and I do not expect everyone to like 100% of these
</span><br>
<span class="quotelev1">&gt;      changes. I welcome any feedback people have.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      When: Tuesday, Nov 17, 2015. This is during SC so there will be time for
</span><br>
<span class="quotelev1">&gt;      face-to-face discussion if anyone has any concerns or would like to see
</span><br>
<span class="quotelev1">&gt;      something changed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The proposed new btl interface as well as updated versions of: pml/ob1,
</span><br>
<span class="quotelev1">&gt;      btl/openib, btl/self, btl/scif, btl/sm, btl/tcp, btl/ugni, and btl/vader
</span><br>
<span class="quotelev1">&gt;      can be found in my btlmod branch at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="https://github.com/hjelmn/ompi/tree/btlmod">https://github.com/hjelmn/ompi/tree/btlmod</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Other btls (smcuda, and usnic) still need to be updated to provide the
</span><br>
<span class="quotelev1">&gt;      new interface. Unmodified btl will not build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      If there are no objections I will push the btl modifications into the
</span><br>
<span class="quotelev1">&gt;      master two weeks from today (Nov 17). Please take a look and let me know
</span><br>
<span class="quotelev1">&gt;      what you think.
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
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16193.php">http://www.open-mpi.org/community/lists/devel/2014/11/16193.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16195.php">http://www.open-mpi.org/community/lists/devel/2014/11/16195.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16198/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16199.php">twurgl_at_[hidden]: "[OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Previous message:</strong> <a href="16197.php">Mike Dubman: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16201.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16224.php">Paul Hargrove: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
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
