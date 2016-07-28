<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 15:13:38 2012" -->
<!-- isoreceived="20120321191338" -->
<!-- sent="Wed, 21 Mar 2012 15:13:33 -0400" -->
<!-- isosent="20120321191333" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172" -->
<!-- id="CAANzjE=0ui1h1V2CNFCxa+Q1bDuziXhb7-eEpj4xGAjTAcCFWA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FFCE1E67-50FF-486A-BEA5-6D246F1E7091_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2012-03-21 15:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10752.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10752.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10752.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see your point about setting MPI_ERR_PENDING on the internal status
<br>
versus the status returned by MPI_Waitall. As I mentioned, the reason
<br>
I choose to do that is to support the ompi_errhandler_request_invoke()
<br>
function. I could not think of an better way to fix this, so I'm open
<br>
to ideas.
<br>
<p>MPI_Waitall returns MPI_ERR_PENDING for 'not completed' requests (or
<br>
sets the exposed status.MPI_ERROR field appropriately, depending on
<br>
the completion function used). The user must still call a completion
<br>
function to complete the request at which point the true error value
<br>
is reported (MPI_SUCCESS, or something else). So I think we are on the
<br>
same page here.
<br>
<p>Setting the request-&gt;req_status.MPI_ERROR to MPI_ERR_PENDING in
<br>
MPI_Waitall does not prevent the OMPI system from overwriting that
<br>
value with the correct error (e.g., MPI_ERR_TRUNCATE). When the OMPI
<br>
system wants to set an error on the request it sets the value (without
<br>
checking the previous value in req_status.MPI_ERROR) before calling
<br>
the completion operation. We reset the value from MPI_ERR_PENDING to
<br>
MPI_SUCCESS at the start of the test/wait operations so that the rest
<br>
of the checks for (MPI_SUCCESS != req-&gt;req_status.MPI_ERROR) complete
<br>
appropriately in those functions.
<br>
<p>So I am still failing to see why the patch is incorrect. Is it
<br>
'incorrect' or just 'not implemented the way you think it should be'?
<br>
If the latter, then I'd love to see a patch. If the former, then I
<br>
would really like to understand why.
<br>
<p>Do we both agree that before this patch Open MPI did not support
<br>
MPI_ERR_PENDING?
<br>
<p>-- Josh
<br>
<p><p>On Wed, Mar 21, 2012 at 2:45 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; My point was that MPI_ERR_PENDING should never be set on a specific request. MPI_ERR_PENDING should only be returned in the array of statuses attached to MPI_Waitall. Thus, there is no need to remove it from any request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, there is another reason why this is unnecessary (and I was too lazy to describe it in my previous email). The MPI_Waitall is only allowed to return MPI_ERR_PENDING for &quot;not completed&quot; MPI request. Such requests will therefore be completed later by the MPI library, and at that moment the error in the status will be set to the correct value, or MPI_SUCCESS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2012, at 14:32 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the patch for errhandler_invoke.c, you can see that we need to
</span><br>
<span class="quotelev2">&gt;&gt; check for MPI_ERR_PENDING to make sure that we do not free the request
</span><br>
<span class="quotelev2">&gt;&gt; when we are trying to decide if we should invoke the error handler. So
</span><br>
<span class="quotelev2">&gt;&gt; setting the internal req-&gt;req_status.MPI_ERROR to MPI_ERR_PENDING made
</span><br>
<span class="quotelev2">&gt;&gt; it possible to check for this state in this code. Maybe you have a
</span><br>
<span class="quotelev2">&gt;&gt; better way around this, but that is why I chose to implement it this
</span><br>
<span class="quotelev2">&gt;&gt; way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that MPI_ERR_PENDING is only to be set in MPI_Waitall. And, in
</span><br>
<span class="quotelev2">&gt;&gt; this patch, MPI_ERR_PENDING is only set in that operation. The other
</span><br>
<span class="quotelev2">&gt;&gt; operations must look for the MPI_ERR_PENDING and reset the value -
</span><br>
<span class="quotelev2">&gt;&gt; since we are using the internal status object to carry it around per
</span><br>
<span class="quotelev2">&gt;&gt; above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You said that the implementation in ompi_request_default_wait_all was
</span><br>
<span class="quotelev2">&gt;&gt; incorrect. Would you care to elaborate as to what specifically is
</span><br>
<span class="quotelev2">&gt;&gt; incorrect?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 21, 2012 at 2:17 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't agree that these changes are required. In the current standard (2.2), MPI_ERR_PENDING is only allowed to be returned by MPI_WAITALL, in some very specific conditions. Here is the snippet from the MPI standard clarifying this behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When one or more of the communications completed by a call to MPI_WAITALL fail, it is desireable to return specific information on each communication. The function MPI_WAITALL will return in such case the error code MPI_ERR_IN_STATUS and will set the error field of each status to a specific error code. This code will be MPI_SUCCESS, if the specific communication completed; it will be another specific error code, if it failed; or it can be MPI_ERR_PENDING if it has neither failed nor completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you can notice, the MPI_ERR_PENDING is only for the error in the status array and not for the error field in the status attached to the MPI request. Moreover, we don't use this inside Open MPI at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The usage we're doing in the default_wait_all of MPI_ERR_PENDING is incorrect as well. I will fix it, once we clarify the issue with your patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 21, 2012, at 13:46 , jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2012-03-21 13:46:15 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 26172
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26172">https://svn.open-mpi.org/trac/ompi/changeset/26172</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Add support for MPI_ERR_PENDING - Per MPI 2.2 p 60
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tested with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;ompi-tests/mpich_tester/mpich_pt2pt/truncmult.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; trunk/ompi/errhandler/errhandler_invoke.c | &#160; &#160; 9 ++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/req_test.c &#160; &#160; &#160; &#160; &#160; &#160; | &#160; &#160;32 ++++++++++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/req_wait.c &#160; &#160; &#160; &#160; &#160; &#160; | &#160; 120 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/request.c &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/request.h &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 5 +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; 5 files changed, 158 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="10752.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10750.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10752.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10752.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
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
