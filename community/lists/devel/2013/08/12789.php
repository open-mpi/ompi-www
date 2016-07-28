<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 11:32:33 2013" -->
<!-- isoreceived="20130822153233" -->
<!-- sent="Thu, 22 Aug 2013 17:32:25 +0200" -->
<!-- isosent="20130822153225" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1" -->
<!-- id="4CADDD33-0D4E-4763-A471-EEE0F41CAFE8_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130821210010.7BF8D160D28_at_tiger.crest.iu.edu" -->
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
<strong>Date:</strong> 2013-08-22 11:32:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12790.php">Guillaume Papauré: "Re: [OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>Previous message:</strong> <a href="12788.php">Tim Mattox: "[OMPI devel] Potential Performance issues with mmap'ed files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not very keen of seeing BTL modification tainting the PML. I would have expected support for IPC between GPU must be a BTL-level decision, no a special path in the PML.
<br>
<p>Is there a reason IPC support cannot be hidden down in the SMCUDA BTL?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Aug 21, 2013, at 23:00 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rolfv (Rolf Vandevaart)
</span><br>
<span class="quotelev1">&gt; Date: 2013-08-21 17:00:09 EDT (Wed, 21 Aug 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29055
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29055">https://svn.open-mpi.org/trac/ompi/changeset/29055</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix support in smcuda btl so it does not blow up when there is no CUDA IPC support between two GPUs. Also make it so CUDA IPC support is added dynamically.
</span><br>
<span class="quotelev1">&gt; Fixes ticket 3531.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/README
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/btl.h                         |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/README                 |   113 ++++++++++++++++++++++                  
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.c           |   104 ++++++++++++++++++++                    
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda.h           |    28 +++++                                   
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_component.c |   200 +++++++++++++++++++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/btl/smcuda/btl_smcuda_endpoint.h  |     5 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/cuda/common_cuda.c         |    29 +++++                                   
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/cuda/common_cuda.h         |     3                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1.c                 |    11 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_cuda.c            |    42 ++++++++                                
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_recvreq.c         |     6                                         
</span><br>
<span class="quotelev1">&gt;   11 files changed, 535 insertions(+), 8 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12790.php">Guillaume Papauré: "Re: [OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>Previous message:</strong> <a href="12788.php">Tim Mattox: "[OMPI devel] Potential Performance issues with mmap'ed files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>Reply:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
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
