<?
$subject_val = "[OMPI devel] RFC: revamp btl rdma interface";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 18:46:53 2014" -->
<!-- isoreceived="20141104234653" -->
<!-- sent="Tue, 4 Nov 2014 16:46:52 -0700" -->
<!-- isosent="20141104234652" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: revamp btl rdma interface" -->
<!-- id="20141104234652.GK6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: revamp btl rdma interface<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 18:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16194.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Completely revamp the BTL RDMA interface (btl_put, btl_get) to
<br>
better match what is needed for MPI one-sided.
<br>
<p>Why: I am preparing to push an enhanced MPI-3 one-sided component that
<br>
makes use of network rdma and atomic operations to provide a fast truely
<br>
one-sided implementation. Before I can push this component I want to
<br>
change the btl interface to:
<br>
<p>&nbsp;- Provide access to network atomic operations. I only need add and
<br>
&nbsp;&nbsp;&nbsp;cswap but the interface can be extended to any number of operations.
<br>
<p>&nbsp;&nbsp;&nbsp;The new interface provides three new functions: btl_atomic_op,
<br>
&nbsp;&nbsp;&nbsp;btl_atomic_fop, and btl_atomic_cswap. Additionally there are two new
<br>
&nbsp;&nbsp;&nbsp;btl_flags to indicate available atomic support:
<br>
&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_ATOMIC_OPS, and MCA_BTL_FLAGS_ATOMIC_FOPS. The
<br>
&nbsp;&nbsp;&nbsp;btl_atomics_flags field has been added to indicate which atomic
<br>
&nbsp;&nbsp;&nbsp;operations are supported (see mca_btl_base_atomic_op_t). At this time
<br>
&nbsp;&nbsp;&nbsp;I only added support for 64-bit integer atomics but I am open to
<br>
&nbsp;&nbsp;&nbsp;adding support for 32-bit as well.
<br>
<p><p>&nbsp;- Provide an interface that will allow simultaneous put/get operations
<br>
&nbsp;&nbsp;&nbsp;without extra calls into the btl. The current interface requires the
<br>
&nbsp;&nbsp;&nbsp;btl user to call prepare_src/prepare_dst before every rdma
<br>
&nbsp;&nbsp;&nbsp;operation. In some cases this is a complete waste (vader, sm with
<br>
&nbsp;&nbsp;&nbsp;CMA, knem, or xpmem).
<br>
<p>&nbsp;&nbsp;&nbsp;I seperated the registration of memory from the segment info. More
<br>
&nbsp;&nbsp;&nbsp;information is provided below. The new put/get functions have the
<br>
&nbsp;&nbsp;&nbsp;following signatures:
<br>
<p><p>typedef int (*mca_btl_base_module_put_fn_t) (struct mca_btl_base_module_t *btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t *endpoint, void *local_address,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint64_t remote_address, struct mca_btl_base_registration_handle_t *local_handle,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_registration_handle_t *remote_handle, size_t size, int flags,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int order, mca_btl_base_rdma_completion_fn_t cbfunc, void *cbcontext, void *cbdata);
<br>
<p>typedef int (*mca_btl_base_module_get_fn_t) (struct mca_btl_base_module_t *btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t *endpoint, void *local_address,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint64_t remote_address, struct mca_btl_base_registration_handle_t *local_handle,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_registration_handle_t *remote_handle, size_t size, int flags,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int order, mca_btl_base_rdma_completion_fn_t cbfunc, void *cbcontext, void *cbdata);
<br>
<p>typedef void (*mca_btl_base_rdma_completion_fn_t)(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void *local_address,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_registration_handle_t *local_handle,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void *context,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void *cbdata,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int status);
<br>
<p>&nbsp;&nbsp;&nbsp;I may modify the completion function to provide more information on
<br>
&nbsp;&nbsp;&nbsp;the completed operation (size).
<br>
<p><p>&nbsp;- Allow the registration of an entire region even if the region can not
<br>
&nbsp;&nbsp;&nbsp;be modified with a single rdma operation. At this time prepare_src
<br>
&nbsp;&nbsp;&nbsp;and prepare_dst may modify the size and register a smaller
<br>
&nbsp;&nbsp;&nbsp;region. This will not work.
<br>
<p>&nbsp;&nbsp;&nbsp;This is done in the new interface through the new btl_register_mem,
<br>
&nbsp;&nbsp;&nbsp;and btl_deregister_mem interfaces. The btl_register_mem interface
<br>
&nbsp;&nbsp;&nbsp;returns a registration handle of size btl_registration_handle_size
<br>
&nbsp;&nbsp;&nbsp;that can be used as either the local_handle or remote_handle to any
<br>
&nbsp;&nbsp;&nbsp;rdma/atomic function. BTLs that do not provide these functions do not
<br>
&nbsp;&nbsp;&nbsp;require registration for rdma/atomic operations.
<br>
<p>typedef struct mca_btl_base_registration_handle_t *(*mca_btl_base_module_register_mem_fn_t)(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* btl, struct mca_btl_base_endpoint_t *endpoint, void *base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t size, uint32_t flags);
<br>
<p>typedef struct mca_btl_base_registration_handle_t *(*mca_btl_base_module_register_mem_fn_t)(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* btl, struct mca_btl_base_endpoint_t *endpoint, void *base,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t size, uint32_t flags);
<br>
<p><p>&nbsp;- Expose the limitations of the put and get operations so the caller
<br>
&nbsp;&nbsp;&nbsp;can make decisions before trying a get or put operation. Two
<br>
&nbsp;&nbsp;&nbsp;examples: the Gemini interconnect has an alignment restriction on
<br>
&nbsp;&nbsp;&nbsp;get, openib devices may have a limit on how large a single get/put
<br>
&nbsp;&nbsp;&nbsp;operation can be. The current interface sort of gives the put limit
<br>
&nbsp;&nbsp;&nbsp;but it is tied to the rdma pipeline protocol.
<br>
<p>&nbsp;&nbsp;&nbsp;This is done in the new interface by providing btl_get_limit,
<br>
&nbsp;&nbsp;&nbsp;btl_get_alignment, btl_put_limit, and btl_put_alignment. Operations
<br>
&nbsp;&nbsp;&nbsp;that violate these restrictions should return OPAL_ERR_BAD_PARAM
<br>
&nbsp;&nbsp;&nbsp;(operation over limit) or OPAL_ERR_NOT_SUPPORTED (operation not
<br>
&nbsp;&nbsp;&nbsp;supported due to alignment restructions with either the source or
<br>
&nbsp;&nbsp;&nbsp;destination buffer).
<br>
<p>This is a big change and I do not expect everyone to like 100% of these
<br>
changes. I welcome any feedback people have.
<br>
<p><p>When: Tuesday, Nov 17, 2015. This is during SC so there will be time for
<br>
face-to-face discussion if anyone has any concerns or would like to see
<br>
something changed.
<br>
<p><p><p>The proposed new btl interface as well as updated versions of: pml/ob1,
<br>
btl/openib, btl/self, btl/scif, btl/sm, btl/tcp, btl/ugni, and btl/vader
<br>
can be found in my btlmod branch at:
<br>
<p><a href="https://github.com/hjelmn/ompi/tree/btlmod">https://github.com/hjelmn/ompi/tree/btlmod</a>
<br>
<p>Other btls (smcuda, and usnic) still need to be updated to provide the
<br>
new interface. Unmodified btl will not build.
<br>
<p>If there are no objections I will push the btl modifications into the
<br>
master two weeks from today (Nov 17). Please take a look and let me know
<br>
what you think.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16193/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16194.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib choosing the wrong queue settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
<li><strong>Reply:</strong> <a href="16195.php">Joshua Ladd: "Re: [OMPI devel] RFC: revamp btl rdma interface"</a>
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
