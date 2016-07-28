<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 13:25:28 2013" -->
<!-- isoreceived="20130822172528" -->
<!-- sent="Thu, 22 Aug 2013 10:24:55 -0700" -->
<!-- isosent="20130822172455" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36006386EAA_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CADDD33-0D4E-4763-A471-EEE0F41CAFE8_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-08-22 13:24:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12792.php">Larry Baker: "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Previous message:</strong> <a href="12790.php">Guillaume Papaur&#233;: "Re: [OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>In reply to:</strong> <a href="12789.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George:
<br>
<p>The reason it tainted the PML is because the CUDA IPC support makes use of the large message RDMA protocol of the PML layer.  The smcuda btl starts up, but does not initially support any large message RDMA (RGET,RPUT) protocols.  Then when a GPU buffer is first accessed, the smcuda btl starts an exchange of some control messages with its peer.  If they determine that they can support CUDA IPC, then the smcuda calls up into the PML layer and says it is OK to start using the large message RDMA.  This all happens in code that is only compiled in if the user asks for CUDA-aware support.
<br>
<p>The key requirement was I wanted to dynamically add the support for CUDA IPC when the user first started accessing GPU buffers rather than during MPI_Init.
<br>
This the best way I could figure out how to accomplish this but I am open to other ideas.   
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev1">&gt;Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, August 22, 2013 11:32 AM
</span><br>
<span class="quotelev1">&gt;To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev1">&gt;trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not very keen of seeing BTL modification tainting the PML. I would have
</span><br>
<span class="quotelev1">&gt;expected support for IPC between GPU must be a BTL-level decision, no a
</span><br>
<span class="quotelev1">&gt;special path in the PML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there a reason IPC support cannot be hidden down in the SMCUDA BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 21, 2013, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: rolfv (Rolf Vandevaart)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-08-21 17:00:09 EDT (Wed, 21 Aug 2013) New Revision: 29055
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29055">https://svn.open-mpi.org/trac/ompi/changeset/29055</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix support in smcuda btl so it does not blow up when there is no CUDA IPC
</span><br>
<span class="quotelev1">&gt;support between two GPUs. Also make it so CUDA IPC support is added
</span><br>
<span class="quotelev1">&gt;dynamically.
</span><br>
<span class="quotelev2">&gt;&gt; Fixes ticket 3531.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/README
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/btl.h                         |     2
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/README                 |   113
</span><br>
<span class="quotelev1">&gt;++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.c           |   104
</span><br>
<span class="quotelev1">&gt;++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.h           |    28 +++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c |   200
</span><br>
<span class="quotelev1">&gt;+++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h  |     5 +
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/cuda/common_cuda.c         |    29 +++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/common/cuda/common_cuda.h         |     3
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    11 ++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c            |    42 ++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     6
</span><br>
<span class="quotelev2">&gt;&gt;   11 files changed, 535 insertions(+), 8 deletions(-)
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
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12792.php">Larry Baker: "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Previous message:</strong> <a href="12790.php">Guillaume Papaur&#233;: "Re: [OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>In reply to:</strong> <a href="12789.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12795.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
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
