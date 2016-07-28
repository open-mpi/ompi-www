<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 14:45:24 2012" -->
<!-- isoreceived="20120321184524" -->
<!-- sent="Wed, 21 Mar 2012 14:45:19 -0400" -->
<!-- isosent="20120321184519" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172" -->
<!-- id="FFCE1E67-50FF-486A-BEA5-6D246F1E7091_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjEn_Fybm9uYTAkPO_+5Egb_ytwdjOyRSruE2Z-FWfMSy4g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-21 14:45:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10751.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10751.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10751.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My point was that MPI_ERR_PENDING should never be set on a specific request. MPI_ERR_PENDING should only be returned in the array of statuses attached to MPI_Waitall. Thus, there is no need to remove it from any request.
<br>
<p>In addition, there is another reason why this is unnecessary (and I was too lazy to describe it in my previous email). The MPI_Waitall is only allowed to return MPI_ERR_PENDING for &quot;not completed&quot; MPI request. Such requests will therefore be completed later by the MPI library, and at that moment the error in the status will be set to the correct value, or MPI_SUCCESS.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 21, 2012, at 14:32 , Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; In the patch for errhandler_invoke.c, you can see that we need to
</span><br>
<span class="quotelev1">&gt; check for MPI_ERR_PENDING to make sure that we do not free the request
</span><br>
<span class="quotelev1">&gt; when we are trying to decide if we should invoke the error handler. So
</span><br>
<span class="quotelev1">&gt; setting the internal req-&gt;req_status.MPI_ERROR to MPI_ERR_PENDING made
</span><br>
<span class="quotelev1">&gt; it possible to check for this state in this code. Maybe you have a
</span><br>
<span class="quotelev1">&gt; better way around this, but that is why I chose to implement it this
</span><br>
<span class="quotelev1">&gt; way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that MPI_ERR_PENDING is only to be set in MPI_Waitall. And, in
</span><br>
<span class="quotelev1">&gt; this patch, MPI_ERR_PENDING is only set in that operation. The other
</span><br>
<span class="quotelev1">&gt; operations must look for the MPI_ERR_PENDING and reset the value -
</span><br>
<span class="quotelev1">&gt; since we are using the internal status object to carry it around per
</span><br>
<span class="quotelev1">&gt; above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You said that the implementation in ompi_request_default_wait_all was
</span><br>
<span class="quotelev1">&gt; incorrect. Would you care to elaborate as to what specifically is
</span><br>
<span class="quotelev1">&gt; incorrect?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 21, 2012 at 2:17 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't agree that these changes are required. In the current standard (2.2), MPI_ERR_PENDING is only allowed to be returned by MPI_WAITALL, in some very specific conditions. Here is the snippet from the MPI standard clarifying this behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When one or more of the communications completed by a call to MPI_WAITALL fail, it is desireable to return specific information on each communication. The function MPI_WAITALL will return in such case the error code MPI_ERR_IN_STATUS and will set the error field of each status to a specific error code. This code will be MPI_SUCCESS, if the specific communication completed; it will be another specific error code, if it failed; or it can be MPI_ERR_PENDING if it has neither failed nor completed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you can notice, the MPI_ERR_PENDING is only for the error in the status array and not for the error field in the status attached to the MPI request. Moreover, we don't use this inside Open MPI at all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The usage we're doing in the default_wait_all of MPI_ERR_PENDING is incorrect as well. I will fix it, once we clarify the issue with your patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2012, at 13:46 , jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-03-21 13:46:15 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 26172
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26172">https://svn.open-mpi.org/trac/ompi/changeset/26172</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Add support for MPI_ERR_PENDING - Per MPI 2.2 p 60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tested with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi-tests/mpich_tester/mpich_pt2pt/truncmult.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/errhandler/errhandler_invoke.c |     9 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/request/req_test.c             |    32 ++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/request/req_wait.c             |   120 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/request/request.c              |     2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/request/request.h              |     5 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   5 files changed, 158 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10751.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10749.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10751.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10751.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
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
