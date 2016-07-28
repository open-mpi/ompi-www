<?
$subject_val = "[OMPI devel] RFC: BTL Interface Change (2 of 5)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 14:57:21 2014" -->
<!-- isoreceived="20140710185721" -->
<!-- sent="Thu, 10 Jul 2014 12:57:19 -0600" -->
<!-- isosent="20140710185719" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: BTL Interface Change (2 of 5)" -->
<!-- id="20140710185719.GB48523_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: BTL Interface Change (2 of 5)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 14:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15663.php">George Bosilca: "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15663.php">George Bosilca: "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Change the descriptor completion callback function to include
<br>
cbdata and context pointers.
<br>
<p>Old callback:
<br>
<p>typedef void (*mca_btl_base_completion_fn_t)(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* descriptor,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int status);
<br>
<p><p>New callback:
<br>
<p>typedef void (*mca_btl_base_completion_fn_t)(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_module_t* module,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_endpoint_t* endpoint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct mca_btl_base_descriptor_t* descriptor,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void *cbdata, void *context, int status);
<br>
<p><p>Why: The BTL interface provides support for using a single descriptor
<br>
with multiple concurrent RDMA operations. BTLs support this feature if
<br>
the following flag is not set:
<br>
<p>/** RDMA put/get calls must have a matching prepare_{src,dst} call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on the target with the same base (and possibly bound). */
<br>
#define MCA_BTL_FLAGS_RDMA_MATCHED    0x0040
<br>
<p><p>The problem is that in order to pass back the correct callback data and
<br>
context to the completion function BTLs need to modify the
<br>
descriptor. This could be a disaster in a multi-threaded application if
<br>
one thread is calling the completion callback while another thread is
<br>
preparing to start a put/get operation. To avoid issues it is better to
<br>
provide the callback data as seperate arguments.
<br>
<p>The change is straightforward and the commit will update all BTLs and
<br>
BTL users to use the new completion callback signature.
<br>
<p><p>When: As this was discussed at the developer's meeting last month I am
<br>
setting a short timeout for this RFC. This times out next Wed (July
<br>
16).
<br>
<p><p>I would really like feedback on this change. Can it be improved? Should
<br>
the segment data be passed back to the function (not something I need
<br>
for RMA but might be useful elsewhere)? Would it be better to remove the
<br>
simultaneous RDMA feature in favor of a lightweight descriptor clone (I
<br>
have this implemented as well and I have no problem with providing
<br>
both features)?
<br>
<p><p>This is another is a series of RFCs to improve (I hope) the BTL
<br>
interface for one-sided operations. The next RFC will be on the
<br>
one-sided BTL interface.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15101/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Previous message:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15663.php">George Bosilca: "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15663.php">George Bosilca: "Re: [OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
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
