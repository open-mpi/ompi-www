<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 23 07:36:15 2013" -->
<!-- isoreceived="20130823113615" -->
<!-- sent="Fri, 23 Aug 2013 13:36:14 +0200" -->
<!-- isosent="20130823113614" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1" -->
<!-- id="67999C35-0472-4088-B905-A8D66FF64EAC_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36006386EAA_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-23 07:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12796.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Previous message:</strong> <a href="12794.php">George Bosilca: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>On Aug 22, 2013, at 19:24 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi George:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason it tainted the PML is because the CUDA IPC support makes use of the large message RDMA protocol of the PML layer.  The smcuda btl starts up, but does not initially support any large message RDMA (RGET,RPUT) protocols.  Then when a GPU buffer is first accessed, the smcuda btl starts an exchange of some control messages with its peer.  If they determine that they can support CUDA IPC, then the smcuda calls up into the PML layer and says it is OK to start using the large message RDMA.  This all happens in code that is only compiled in if the user asks for CUDA-aware support.
</span><br>
<p>The issue is not that is compiled in only when CUDA support is enabled. The problem is that it is a breakage of the separation between PML and BTL. Almost all BTL did manage to implement highly optimized protocols under this design without having to taint the PML. Very similarly to CUDA I can cite CMA and KNEM support in the SM BTL. So I really wonder why the CUDA support is so different, at the point where it had to go all over the place (convertor, memory pool and PML)?
<br>
<p><span class="quotelev1">&gt; The key requirement was I wanted to dynamically add the support for CUDA IPC when the user first started accessing GPU buffers rather than during MPI_Init.
</span><br>
<p>Moving from BTL flags to endpoint based flags is indeed a good thing. This is something that should be done everywhere in the PML code, as it will allow the BTL to support different behaviors based on the  peer.
<br>
<p>George.
<br>
<p><span class="quotelev1">&gt; This the best way I could figure out how to accomplish this but I am open to other ideas.   
</span><br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev2">&gt;&gt; Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, August 22, 2013 11:32 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev2">&gt;&gt; trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not very keen of seeing BTL modification tainting the PML. I would have
</span><br>
<span class="quotelev2">&gt;&gt; expected support for IPC between GPU must be a BTL-level decision, no a
</span><br>
<span class="quotelev2">&gt;&gt; special path in the PML.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason IPC support cannot be hidden down in the SMCUDA BTL?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2013, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: rolfv (Rolf Vandevaart)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2013-08-21 17:00:09 EDT (Wed, 21 Aug 2013) New Revision: 29055
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29055">https://svn.open-mpi.org/trac/ompi/changeset/29055</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fix support in smcuda btl so it does not blow up when there is no CUDA IPC
</span><br>
<span class="quotelev2">&gt;&gt; support between two GPUs. Also make it so CUDA IPC support is added
</span><br>
<span class="quotelev2">&gt;&gt; dynamically.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixes ticket 3531.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/README
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/btl.h                         |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/README                 |   113
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda.c           |   104
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda.h           |    28 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c |   200
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h  |     5 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/common/cuda/common_cuda.c         |    29 +++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/common/cuda/common_cuda.h         |     3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    11 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c            |    42 ++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  11 files changed, 535 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12796.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29060 - in branches/v1.7: . ompi/mca/btl	ompi/mca/btl/openib ompi/mca/btl/openib/connect	ompi/mca/common/verbs"</a>
<li><strong>Previous message:</strong> <a href="12794.php">George Bosilca: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
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
