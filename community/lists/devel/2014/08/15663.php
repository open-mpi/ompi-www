<?
$subject_val = "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 22:44:42 2014" -->
<!-- isoreceived="20140819024442" -->
<!-- sent="Mon, 18 Aug 2014 22:44:40 -0400" -->
<!-- isosent="20140819024440" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)" -->
<!-- id="CAMJJpkVqjwJ1sgM7YOXGWTrvneYEV4Xvr5EwvCZ12J_UwNQ47A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140710185719.GB48523_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 22:44:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15664.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15662.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15101.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Indeed the original design allowed for multiple usages of the same
<br>
descriptor, not concurrent as the text in the btl.h indicates but
<br>
consecutive. The MCA_BTL_FLAGS_RDMA_MATCHED flag is a weirdness needed for
<br>
Portal, and I am not use it is currently in use anywhere in the code base.
<br>
<p>My problem with the depicted approach is that now we have two critical
<br>
sections in the fast path: one to allocate/reserve the descriptor (this is
<br>
at the BTL level on a call from the PML), and then another one to allocate
<br>
whatever structure the BTL needs to store the callback informations (again
<br>
on a call from the PML to the BTL).  In the previous design, we carefully
<br>
analyzed all communications path and tried to minimize the number of
<br>
back-and-forth between the PML and BTL layer in order to preserve the
<br>
performance.
<br>
<p>&nbsp;George.
<br>
<p><p><p><p>On Thu, Jul 10, 2014 at 2:57 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What: Change the descriptor completion callback function to include
</span><br>
<span class="quotelev1">&gt; cbdata and context pointers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Old callback:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef void (*mca_btl_base_completion_fn_t)(
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* module,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_descriptor_t* descriptor,
</span><br>
<span class="quotelev1">&gt;     int status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New callback:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef void (*mca_btl_base_completion_fn_t)(
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_module_t* module,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_endpoint_t* endpoint,
</span><br>
<span class="quotelev1">&gt;     struct mca_btl_base_descriptor_t* descriptor,
</span><br>
<span class="quotelev1">&gt;     void *cbdata, void *context, int status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: The BTL interface provides support for using a single descriptor
</span><br>
<span class="quotelev1">&gt; with multiple concurrent RDMA operations. BTLs support this feature if
</span><br>
<span class="quotelev1">&gt; the following flag is not set:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /** RDMA put/get calls must have a matching prepare_{src,dst} call
</span><br>
<span class="quotelev1">&gt;     on the target with the same base (and possibly bound). */
</span><br>
<span class="quotelev1">&gt; #define MCA_BTL_FLAGS_RDMA_MATCHED    0x0040
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that in order to pass back the correct callback data and
</span><br>
<span class="quotelev1">&gt; context to the completion function BTLs need to modify the
</span><br>
<span class="quotelev1">&gt; descriptor. This could be a disaster in a multi-threaded application if
</span><br>
<span class="quotelev1">&gt; one thread is calling the completion callback while another thread is
</span><br>
<span class="quotelev1">&gt; preparing to start a put/get operation. To avoid issues it is better to
</span><br>
<span class="quotelev1">&gt; provide the callback data as seperate arguments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change is straightforward and the commit will update all BTLs and
</span><br>
<span class="quotelev1">&gt; BTL users to use the new completion callback signature.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: As this was discussed at the developer's meeting last month I am
</span><br>
<span class="quotelev1">&gt; setting a short timeout for this RFC. This times out next Wed (July
</span><br>
<span class="quotelev1">&gt; 16).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would really like feedback on this change. Can it be improved? Should
</span><br>
<span class="quotelev1">&gt; the segment data be passed back to the function (not something I need
</span><br>
<span class="quotelev1">&gt; for RMA but might be useful elsewhere)? Would it be better to remove the
</span><br>
<span class="quotelev1">&gt; simultaneous RDMA feature in favor of a lightweight descriptor clone (I
</span><br>
<span class="quotelev1">&gt; have this implemented as well and I have no problem with providing
</span><br>
<span class="quotelev1">&gt; both features)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is another is a series of RFCs to improve (I hope) the BTL
</span><br>
<span class="quotelev1">&gt; interface for one-sided operations. The next RFC will be on the
</span><br>
<span class="quotelev1">&gt; one-sided BTL interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-5, LANL
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15101.php">http://www.open-mpi.org/community/lists/devel/2014/07/15101.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15664.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15662.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15101.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
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
