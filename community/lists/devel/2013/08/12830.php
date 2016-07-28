<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 16:16:37 2013" -->
<!-- isoreceived="20130830201637" -->
<!-- sent="Fri, 30 Aug 2013 13:16:34 -0700" -->
<!-- isosent="20130830201634" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3600673C731_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="711F0FC3-E1B6-4501-A330-DB34697ECA3D_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-08-30 16:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="12829.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, I appreciate the thought you have put into these comments.  Perhaps I can try and make some of the changes as you suggest, but as you noted, sometime in the future.  In theory, I agree with them, but in practice they are not so easy to implement.  I have added a few more comments below.  Also note, I am hoping to move this change into Open MPI 1.7.4 and have you as a reviewer for the ticket.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/3732">https://svn.open-mpi.org/trac/ompi/ticket/3732</a>
<br>
<p>&nbsp;&nbsp;
<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev1">&gt;Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, August 28, 2013 5:12 PM
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
<span class="quotelev1">&gt;I'm not arguing against the choices you made. I just want to pinpoint that
</span><br>
<span class="quotelev1">&gt;there are other way of achieving a similar goal with less impact on the
</span><br>
<span class="quotelev1">&gt;components outside of the SMCUDA BTL, an approach which might be
</span><br>
<span class="quotelev1">&gt;interesting in the long run. Thus my answer below is just so there is a trace of
</span><br>
<span class="quotelev1">&gt;a possible starting point toward a less intrusive approach, in case someone is
</span><br>
<span class="quotelev1">&gt;interested in implementing in the future (an intern or some PhD student).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 23, 2013, at 21:53 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I agree that the CUDA support is more intrusive and ends up in
</span><br>
<span class="quotelev1">&gt;different areas.  The problem is that the changes could not be simply isolated
</span><br>
<span class="quotelev1">&gt;in a BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. To support the direct movement of GPU buffers, we often utilize copying
</span><br>
<span class="quotelev2">&gt;&gt;into host memory and then out of host memory.   These copies have to be
</span><br>
<span class="quotelev2">&gt;&gt;done utilizing the cuMemcpy() functions rather than the memcpy() function.
</span><br>
<span class="quotelev2">&gt;&gt;This is why some changes ended up in the opal datatype area.  Must of that
</span><br>
<span class="quotelev2">&gt;&gt;copying is driven by the convertor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Each proc has a master_convertor which is a specialized class of convertors
</span><br>
<span class="quotelev1">&gt;used for the target processor(s), and this specialized convertor is cloned for
</span><br>
<span class="quotelev1">&gt;every new request. Some of these convertors support heterogeneous
</span><br>
<span class="quotelev1">&gt;operations, some of them checksums and some of them just memcpy. The
</span><br>
<span class="quotelev1">&gt;CUDA could have become just another class of convertors, with their
</span><br>
<span class="quotelev1">&gt;definition visible only in the SMCUDA component.
</span><br>
This would be nice to do.  I just do not know how to implement.  Note that this is not used only within smcuda BTL.  It is also used in openib BTL and any other BTL if they end up supporting GPU buffers.
<br>
<p><span class="quotelev2">&gt;&gt; 2. I added support for doing an asynchronous copy into and out of host
</span><br>
<span class="quotelev2">&gt;&gt;buffers.  This ended up touching datatype, PML, and BTL layers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not sure I understand the issue here, but what you do in the BTL is none of
</span><br>
<span class="quotelev1">&gt;the PML business as long as you respect the rules. For message logging we
</span><br>
<span class="quotelev1">&gt;have to copy the data locally in addition to sending it over the network, and
</span><br>
<span class="quotelev1">&gt;we do not sequentialize these two steps, the can progress simultaneously
</span><br>
<span class="quotelev1">&gt;(supported by extra threads eventually).
</span><br>
This touched the datatype layer because I added a field into the convertor (a stream).  I would have to think more about this one.  
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. A GPU buffer may utilize a different protocol than a HOST buffer within a
</span><br>
<span class="quotelev1">&gt;BTL.  This required me to find different ways to direct which PML protocol to
</span><br>
<span class="quotelev1">&gt;use.  In addition, it is assume that a BTL either supports RDMA or not.  There is
</span><br>
<span class="quotelev1">&gt;no idea of supporting based on the type of buffer one is sending.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The change where the PML is using the flags on the endpoint instead of the
</span><br>
<span class="quotelev1">&gt;one on the BTL is a good change, allowing far more flexibility on the handling
</span><br>
<span class="quotelev1">&gt;of the transfer protocols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Based on my understudying of your code, you changed the AM tag used by
</span><br>
<span class="quotelev1">&gt;the PML to send the message something that could have been done easily in
</span><br>
<span class="quotelev1">&gt;the BTL as an example by providing different path for the PUT/GET operations
</span><br>
<span class="quotelev1">&gt;based on the memory ownership. Basically I could not figure out why the
</span><br>
<span class="quotelev1">&gt;decision of using specialized RDMA (IPC based) should be reported upstream
</span><br>
<span class="quotelev1">&gt;to the PML instead of being a totally local decision on the BTL and exposed to
</span><br>
<span class="quotelev1">&gt;the PML as a single PUT/GET interface.
</span><br>
I am using a new active message tag that is local to the smcuda for the smcuda BTLs to decide if they can support RDMA of GPU memory.  When they agree that they can, I then piggy backed on the error handler callback support from the PML. I created a new flag so that when we call the error handler  with that flag, the PML realizes it wants to adjust to add RDMA of GPU buffers, and adjusts the flag on the endpoint.   And for this case, this can happen sometime after MPI_Init(), so that is why we call into the PML layer sometime later.  For all other cases, the decision to support large message RDMA is determined at MPI_Init() time.    And we need to report it upstream because the that is how the PML determines what protocol it will instruct the BTL to do.       
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, to leverage much of the existing datatype and PML support, I
</span><br>
<span class="quotelev1">&gt;had to make changes in there.  Overall, I agree it is not ideal, but the best I
</span><br>
<span class="quotelev1">&gt;could come up with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, August 23, 2013 7:36 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 22, 2013, at 19:24 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi George:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The reason it tainted the PML is because the CUDA IPC support makes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the large message RDMA protocol of the PML layer.  The smcuda btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starts up, but does not initially support any large message RDMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (RGET,RPUT) protocols.  Then when a GPU buffer is first accessed, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; smcuda btl starts an exchange of some control messages with its peer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If they determine that they can support CUDA IPC, then the smcuda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls up into the PML layer and says it is OK to start using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large message RDMA.  This all happens in code that is only compiled in if
</span><br>
<span class="quotelev1">&gt;the user asks for CUDA-aware support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue is not that is compiled in only when CUDA support is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enabled. The problem is that it is a breakage of the separation between
</span><br>
<span class="quotelev1">&gt;PML and BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Almost all BTL did manage to implement highly optimized protocols
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under this design without having to taint the PML. Very similarly to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CUDA I can cite CMA and KNEM support in the SM BTL. So I really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wonder why the CUDA support is so different, at the point where it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had to go all over the place (convertor, memory pool and PML)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The key requirement was I wanted to dynamically add the support for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CUDA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IPC when the user first started accessing GPU buffers rather than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during MPI_Init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moving from BTL flags to endpoint based flags is indeed a good thing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is something that should be done everywhere in the PML code, as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it will allow the BTL to support different behaviors based on the  peer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This the best way I could figure out how to accomplish this but I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other ideas.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt;George
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Bosilca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Thursday, August 22, 2013 11:32 AM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not very keen of seeing BTL modification tainting the PML. I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would have expected support for IPC between GPU must be a BTL-level
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; decision, no a special path in the PML.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a reason IPC support cannot be hidden down in the SMCUDA
</span><br>
<span class="quotelev1">&gt;BTL?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 21, 2013, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Author: rolfv (Rolf Vandevaart)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: 2013-08-21 17:00:09 EDT (Wed, 21 Aug 2013) New Revision:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 29055
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29055">https://svn.open-mpi.org/trac/ompi/changeset/29055</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fix support in smcuda btl so it does not blow up when there is no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CUDA IPC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support between two GPUs. Also make it so CUDA IPC support is added
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dynamically.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fixes ticket 3531.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/README
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/btl.h                         |     2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/README                 |   113
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda.c           |   104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda.h           |    28 +++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c |   200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h  |     5 +
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/common/cuda/common_cuda.c         |    29 +++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/common/cuda/common_cuda.h         |     3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    11 ++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c            |    42 ++++++++
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 11 files changed, 535 insertions(+), 8 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="12829.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12815.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
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
