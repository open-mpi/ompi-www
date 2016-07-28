<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 23 15:54:32 2013" -->
<!-- isoreceived="20130823195432" -->
<!-- sent="Fri, 23 Aug 2013 12:53:56 -0700" -->
<!-- isosent="20130823195356" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360063871BE_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="67999C35-0472-4088-B905-A8D66FF64EAC_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-23 15:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12799.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Previous message:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>In reply to:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I agree that the CUDA support is more intrusive and ends up in different areas.  The problem is that the changes could not be simply isolated in a BTL.
<br>
<p>1. To support the direct movement of GPU buffers, we often utilize copying into host memory and then out of host memory.   These copies have to be done utilizing the cuMemcpy() functions rather than the memcpy() function.  This is why some changes ended up in the opal datatype area.  Must of that copying is driven by the convertor.
<br>
2. I added support for doing an asynchronous copy into and out of host buffers.  This ended up touching datatype, PML, and BTL layers.
<br>
3. A GPU buffer may utilize a different protocol than a HOST buffer within a BTL.  This required me to find different ways to direct which PML protocol to use.  In addition, it is assume that a BTL either supports RDMA or not.  There is no idea of supporting based on the type of buffer one is sending.
<br>
<p>Therefore, to leverage much of the existing datatype and PML support, I had to make changes in there.  Overall, I agree it is not ideal, but the best I could come up with. 
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev1">&gt;Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Friday, August 23, 2013 7:36 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev1">&gt;trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 22, 2013, at 19:24 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi George:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason it tainted the PML is because the CUDA IPC support makes use
</span><br>
<span class="quotelev1">&gt;of the large message RDMA protocol of the PML layer.  The smcuda btl starts
</span><br>
<span class="quotelev1">&gt;up, but does not initially support any large message RDMA (RGET,RPUT)
</span><br>
<span class="quotelev1">&gt;protocols.  Then when a GPU buffer is first accessed, the smcuda btl starts an
</span><br>
<span class="quotelev1">&gt;exchange of some control messages with its peer.  If they determine that
</span><br>
<span class="quotelev1">&gt;they can support CUDA IPC, then the smcuda calls up into the PML layer and
</span><br>
<span class="quotelev1">&gt;says it is OK to start using the large message RDMA.  This all happens in code
</span><br>
<span class="quotelev1">&gt;that is only compiled in if the user asks for CUDA-aware support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The issue is not that is compiled in only when CUDA support is enabled. The
</span><br>
<span class="quotelev1">&gt;problem is that it is a breakage of the separation between PML and BTL.
</span><br>
<span class="quotelev1">&gt;Almost all BTL did manage to implement highly optimized protocols under this
</span><br>
<span class="quotelev1">&gt;design without having to taint the PML. Very similarly to CUDA I can cite CMA
</span><br>
<span class="quotelev1">&gt;and KNEM support in the SM BTL. So I really wonder why the CUDA support is
</span><br>
<span class="quotelev1">&gt;so different, at the point where it had to go all over the place (convertor,
</span><br>
<span class="quotelev1">&gt;memory pool and PML)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The key requirement was I wanted to dynamically add the support for CUDA
</span><br>
<span class="quotelev1">&gt;IPC when the user first started accessing GPU buffers rather than during
</span><br>
<span class="quotelev1">&gt;MPI_Init.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Moving from BTL flags to endpoint based flags is indeed a good thing. This is
</span><br>
<span class="quotelev1">&gt;something that should be done everywhere in the PML code, as it will allow
</span><br>
<span class="quotelev1">&gt;the BTL to support different behaviors based on the  peer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This the best way I could figure out how to accomplish this but I am open to
</span><br>
<span class="quotelev1">&gt;other ideas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, August 22, 2013 11:32 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not very keen of seeing BTL modification tainting the PML. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would have expected support for IPC between GPU must be a BTL-level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decision, no a special path in the PML.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a reason IPC support cannot be hidden down in the SMCUDA BTL?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 21, 2013, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rolfv (Rolf Vandevaart)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2013-08-21 17:00:09 EDT (Wed, 21 Aug 2013) New Revision: 29055
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29055">https://svn.open-mpi.org/trac/ompi/changeset/29055</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fix support in smcuda btl so it does not blow up when there is no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CUDA IPC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support between two GPUs. Also make it so CUDA IPC support is added
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamically.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fixes ticket 3531.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/README
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/btl.h                         |     2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/README                 |   113
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++++++++++++++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda.c           |   104
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda.h           |    28 +++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c |   200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h  |     5 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/common/cuda/common_cuda.c         |    29 +++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/common/cuda/common_cuda.h         |     3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    11 ++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c            |    42 ++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  11 files changed, 535 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12799.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7:	. ompi/mca/btl	ompi/mca/btl/openib	ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Previous message:</strong> <a href="12797.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>In reply to:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
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
