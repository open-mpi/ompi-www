<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 28 17:11:52 2013" -->
<!-- isoreceived="20130828211152" -->
<!-- sent="Wed, 28 Aug 2013 23:11:47 +0200" -->
<!-- isosent="20130828211147" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1" -->
<!-- id="711F0FC3-E1B6-4501-A330-DB34697ECA3D_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F360063871BE_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2013-08-28 17:11:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<li><strong>In reply to:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12830.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12830.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>I'm not arguing against the choices you made. I just want to pinpoint that there are other way of achieving a similar goal with less impact on the components outside of the SMCUDA BTL, an approach which might be interesting in the long run. Thus my answer below is just so there is a trace of a possible starting point toward a less intrusive approach, in case someone is interested in implementing in the future (an intern or some PhD student).
<br>
<p>On Aug 23, 2013, at 21:53 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I agree that the CUDA support is more intrusive and ends up in different areas.  The problem is that the changes could not be simply isolated in a BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. To support the direct movement of GPU buffers, we often utilize copying into host memory and then out of host memory.   These copies have to be done utilizing the cuMemcpy() functions rather than the memcpy() function.  This is why some changes ended up in the opal datatype area.  Must of that copying is driven by the convertor.
</span><br>
<p>Each proc has a master_convertor which is a specialized class of convertors used for the target processor(s), and this specialized convertor is cloned for every new request. Some of these convertors support heterogeneous operations, some of them checksums and some of them just memcpy. The CUDA could have become just another class of convertors, with their definition visible only in the SMCUDA component.
<br>
<p><span class="quotelev1">&gt; 2. I added support for doing an asynchronous copy into and out of host buffers.  This ended up touching datatype, PML, and BTL layers.
</span><br>
<p>I'm not sure I understand the issue here, but what you do in the BTL is none of the PML business as long as you respect the rules. For message logging we have to copy the data locally in addition to sending it over the network, and we do not sequentialize these two steps, the can progress simultaneously (supported by extra threads eventually).
<br>
<p><span class="quotelev1">&gt; 3. A GPU buffer may utilize a different protocol than a HOST buffer within a BTL.  This required me to find different ways to direct which PML protocol to use.  In addition, it is assume that a BTL either supports RDMA or not.  There is no idea of supporting based on the type of buffer one is sending.
</span><br>
<p>The change where the PML is using the flags on the endpoint instead of the one on the BTL is a good change, allowing far more flexibility on the handling of the transfer protocols.
<br>
<p>Based on my understudying of your code, you changed the AM tag used by the PML to send the message something that could have been done easily in the BTL as an example by providing different path for the PUT/GET operations based on the memory ownership. Basically I could not figure out why the decision of using specialized RDMA (IPC based) should be reported upstream to the PML instead of being a totally local decision on the BTL and exposed to the PML as a single PUT/GET interface.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; Therefore, to leverage much of the existing datatype and PML support, I had to make changes in there.  Overall, I agree it is not ideal, but the best I could come up with. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev2">&gt;&gt; Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, August 23, 2013 7:36 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev2">&gt;&gt; trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rolf,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 22, 2013, at 19:24 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi George:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason it tainted the PML is because the CUDA IPC support makes use
</span><br>
<span class="quotelev2">&gt;&gt; of the large message RDMA protocol of the PML layer.  The smcuda btl starts
</span><br>
<span class="quotelev2">&gt;&gt; up, but does not initially support any large message RDMA (RGET,RPUT)
</span><br>
<span class="quotelev2">&gt;&gt; protocols.  Then when a GPU buffer is first accessed, the smcuda btl starts an
</span><br>
<span class="quotelev2">&gt;&gt; exchange of some control messages with its peer.  If they determine that
</span><br>
<span class="quotelev2">&gt;&gt; they can support CUDA IPC, then the smcuda calls up into the PML layer and
</span><br>
<span class="quotelev2">&gt;&gt; says it is OK to start using the large message RDMA.  This all happens in code
</span><br>
<span class="quotelev2">&gt;&gt; that is only compiled in if the user asks for CUDA-aware support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The issue is not that is compiled in only when CUDA support is enabled. The
</span><br>
<span class="quotelev2">&gt;&gt; problem is that it is a breakage of the separation between PML and BTL.
</span><br>
<span class="quotelev2">&gt;&gt; Almost all BTL did manage to implement highly optimized protocols under this
</span><br>
<span class="quotelev2">&gt;&gt; design without having to taint the PML. Very similarly to CUDA I can cite CMA
</span><br>
<span class="quotelev2">&gt;&gt; and KNEM support in the SM BTL. So I really wonder why the CUDA support is
</span><br>
<span class="quotelev2">&gt;&gt; so different, at the point where it had to go all over the place (convertor,
</span><br>
<span class="quotelev2">&gt;&gt; memory pool and PML)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The key requirement was I wanted to dynamically add the support for CUDA
</span><br>
<span class="quotelev2">&gt;&gt; IPC when the user first started accessing GPU buffers rather than during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Moving from BTL flags to endpoint based flags is indeed a good thing. This is
</span><br>
<span class="quotelev2">&gt;&gt; something that should be done everywhere in the PML code, as it will allow
</span><br>
<span class="quotelev2">&gt;&gt; the BTL to support different behaviors based on the  peer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This the best way I could figure out how to accomplish this but I am open to
</span><br>
<span class="quotelev2">&gt;&gt; other ideas.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Bosilca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, August 22, 2013 11:32 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not very keen of seeing BTL modification tainting the PML. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would have expected support for IPC between GPU must be a BTL-level
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decision, no a special path in the PML.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a reason IPC support cannot be hidden down in the SMCUDA BTL?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 21, 2013, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Author: rolfv (Rolf Vandevaart)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 2013-08-21 17:00:09 EDT (Wed, 21 Aug 2013) New Revision: 29055
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29055">https://svn.open-mpi.org/trac/ompi/changeset/29055</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fix support in smcuda btl so it does not blow up when there is no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CUDA IPC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support between two GPUs. Also make it so CUDA IPC support is added
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dynamically.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fixes ticket 3531.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/README
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/btl.h                         |     2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/README                 |   113
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda.c           |   104
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda.h           |    28 +++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c |   200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h  |     5 +
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/common/cuda/common_cuda.c         |    29 +++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/common/cuda/common_cuda.h         |     3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    11 ++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c            |    42 ++++++++
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 11 files changed, 535 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12816.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29079 - in trunk: opal/mca/hwloc/base	orte/mca/rmaps/mindist"</a>
<li><strong>In reply to:</strong> <a href="12798.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12830.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12830.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
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
