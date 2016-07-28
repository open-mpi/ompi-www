<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 14:17:09 2012" -->
<!-- isoreceived="20120321181709" -->
<!-- sent="Wed, 21 Mar 2012 14:17:05 -0400" -->
<!-- isosent="20120321181705" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172" -->
<!-- id="282753C6-457C-469F-9B63-FE446F88093D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201203211746.q2LHkG7H014183_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 14:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10747.php">Nathan Hjelm: "[OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>I don't agree that these changes are required. In the current standard (2.2), MPI_ERR_PENDING is only allowed to be returned by MPI_WAITALL, in some very specific conditions. Here is the snippet from the MPI standard clarifying this behavior.
<br>
<p><span class="quotelev1">&gt; When one or more of the communications completed by a call to MPI_WAITALL fail, it is desireable to return specific information on each communication. The function MPI_WAITALL will return in such case the error code MPI_ERR_IN_STATUS and will set the error field of each status to a specific error code. This code will be MPI_SUCCESS, if the specific communication completed; it will be another specific error code, if it failed; or it can be MPI_ERR_PENDING if it has neither failed nor completed.
</span><br>
<p>As you can notice, the MPI_ERR_PENDING is only for the error in the status array and not for the error field in the status attached to the MPI request. Moreover, we don't use this inside Open MPI at all.
<br>
<p>The usage we're doing in the default_wait_all of MPI_ERR_PENDING is incorrect as well. I will fix it, once we clarify the issue with your patch.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Mar 21, 2012, at 13:46 , jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2012-03-21 13:46:15 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26172
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26172">https://svn.open-mpi.org/trac/ompi/changeset/26172</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add support for MPI_ERR_PENDING - Per MPI 2.2 p 60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tested with:
</span><br>
<span class="quotelev1">&gt;  ompi-tests/mpich_tester/mpich_pt2pt/truncmult.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/errhandler/errhandler_invoke.c |     9 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/request/req_test.c             |    32 ++++++++++                              
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/request/req_wait.c             |   120 +++++++++++++++++++++++++++++++++++++-- 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/request/request.c              |     2                                         
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/request/request.h              |     5 +                                       
</span><br>
<span class="quotelev1">&gt;   5 files changed, 158 insertions(+), 10 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10747.php">Nathan Hjelm: "[OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
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
