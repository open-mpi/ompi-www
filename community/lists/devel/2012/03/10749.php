<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 14:33:02 2012" -->
<!-- isoreceived="20120321183302" -->
<!-- sent="Wed, 21 Mar 2012 14:32:58 -0400" -->
<!-- isosent="20120321183258" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172" -->
<!-- id="CAANzjEn_Fybm9uYTAkPO_+5Egb_ytwdjOyRSruE2Z-FWfMSy4g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="282753C6-457C-469F-9B63-FE446F88093D_at_eecs.utk.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 14:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10748.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10748.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the patch for errhandler_invoke.c, you can see that we need to
<br>
check for MPI_ERR_PENDING to make sure that we do not free the request
<br>
when we are trying to decide if we should invoke the error handler. So
<br>
setting the internal req-&gt;req_status.MPI_ERROR to MPI_ERR_PENDING made
<br>
it possible to check for this state in this code. Maybe you have a
<br>
better way around this, but that is why I chose to implement it this
<br>
way.
<br>
<p>I agree that MPI_ERR_PENDING is only to be set in MPI_Waitall. And, in
<br>
this patch, MPI_ERR_PENDING is only set in that operation. The other
<br>
operations must look for the MPI_ERR_PENDING and reset the value -
<br>
since we are using the internal status object to carry it around per
<br>
above.
<br>
<p>You said that the implementation in ompi_request_default_wait_all was
<br>
incorrect. Would you care to elaborate as to what specifically is
<br>
incorrect?
<br>
<p>-- Josh
<br>
<p>On Wed, Mar 21, 2012 at 2:17 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't agree that these changes are required. In the current standard (2.2), MPI_ERR_PENDING is only allowed to be returned by MPI_WAITALL, in some very specific conditions. Here is the snippet from the MPI standard clarifying this behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When one or more of the communications completed by a call to MPI_WAITALL fail, it is desireable to return specific information on each communication. The function MPI_WAITALL will return in such case the error code MPI_ERR_IN_STATUS and will set the error field of each status to a specific error code. This code will be MPI_SUCCESS, if the specific communication completed; it will be another specific error code, if it failed; or it can be MPI_ERR_PENDING if it has neither failed nor completed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can notice, the MPI_ERR_PENDING is only for the error in the status array and not for the error field in the status attached to the MPI request. Moreover, we don't use this inside Open MPI at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usage we're doing in the default_wait_all of MPI_ERR_PENDING is incorrect as well. I will fix it, once we clarify the issue with your patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2012, at 13:46 , jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-03-21 13:46:15 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 26172
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26172">https://svn.open-mpi.org/trac/ompi/changeset/26172</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Add support for MPI_ERR_PENDING - Per MPI 2.2 p 60
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tested with:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;ompi-tests/mpich_tester/mpich_pt2pt/truncmult.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/ompi/errhandler/errhandler_invoke.c | &#160; &#160; 9 ++
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/ompi/request/req_test.c &#160; &#160; &#160; &#160; &#160; &#160; | &#160; &#160;32 ++++++++++
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/ompi/request/req_wait.c &#160; &#160; &#160; &#160; &#160; &#160; | &#160; 120 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/ompi/request/request.c &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; trunk/ompi/request/request.h &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 5 +
</span><br>
<span class="quotelev2">&gt;&gt; &#160; 5 files changed, 158 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10748.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10748.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
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
