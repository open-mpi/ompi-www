<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 10:09:48 2012" -->
<!-- isoreceived="20120322140948" -->
<!-- sent="Thu, 22 Mar 2012 10:09:44 -0400" -->
<!-- isosent="20120322140944" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172" -->
<!-- id="CAANzjEnGtiRa55-wfNoHbGZixsC70__Z8ftAbAp0h1C8jSQFXA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjEkWu-Z=dQ+iJUM92X1rkC=p+LFvTGLMJe3YJcunSboGKw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-22 10:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10755.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10753.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10753.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10755.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10755.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed in r26177.
<br>
<p>On Thu, Mar 22, 2012 at 7:51 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Fair enough. Upon further inspection of the request_invoke() handler,
</span><br>
<span class="quotelev1">&gt; you are correct that it is not required here if we do not modify the
</span><br>
<span class="quotelev1">&gt; default value for req_status.MPI_ERROR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll work on a revised patch this morning and commit. One that does
</span><br>
<span class="quotelev1">&gt; not use this field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per your comment from your first message:
</span><br>
<span class="quotelev1">&gt; &#160;&quot;The usage we're doing in the default_wait_all of MPI_ERR_PENDING is
</span><br>
<span class="quotelev1">&gt; incorrect as well.&quot;
</span><br>
<span class="quotelev1">&gt; I'm glad that you no longer think the patch is &quot;incorrect&quot;, but just
</span><br>
<span class="quotelev1">&gt; not implemented as well as it could be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 22, 2012 at 1:40 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2012, at 15:13 , Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see your point about setting MPI_ERR_PENDING on the internal status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versus the status returned by MPI_Waitall. As I mentioned, the reason
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I choose to do that is to support the ompi_errhandler_request_invoke()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function. I could not think of an better way to fix this, so I'm open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to ideas.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If MPI_ERR_PENDING is not set on the request status then I don't see any issues with the ompi_errhandler_request_invoke. Do I miss something obvious?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Waitall returns MPI_ERR_PENDING for 'not completed' requests (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sets the exposed status.MPI_ERROR field appropriately, depending on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the completion function used). The user must still call a completion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function to complete the request at which point the true error value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is reported (MPI_SUCCESS, or something else). So I think we are on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same page here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the request-&gt;req_status.MPI_ERROR to MPI_ERR_PENDING in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Waitall does not prevent the OMPI system from overwriting that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value with the correct error (e.g., MPI_ERR_TRUNCATE). When the OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system wants to set an error on the request it sets the value (without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking the previous value in req_status.MPI_ERROR) before calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the completion operation. We reset the value from MPI_ERR_PENDING to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SUCCESS at the start of the test/wait operations so that the rest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the checks for (MPI_SUCCESS != req-&gt;req_status.MPI_ERROR) complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriately in those functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I am still failing to see why the patch is incorrect. Is it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'incorrect' or just 'not implemented the way you think it should be'?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the latter, then I'd love to see a patch. If the former, then I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would really like to understand why.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't say it is incorrect, just that it is an overkill that is (1) not required by the MPI standard; (2) potentially not thread safe; (3) sub-optimal in terms of memory writes; (4) way to complex for what MPI_ERR_PENDING is supposed to achieve. Moreover, I guess your patch is indeed correct if the MPICH test you were using pass.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we both agree that before this patch Open MPI did not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ERR_PENDING?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Who dares claim the opposite?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Mar 21, 2012 at 2:45 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My point was that MPI_ERR_PENDING should never be set on a specific request. MPI_ERR_PENDING should only be returned in the array of statuses attached to MPI_Waitall. Thus, there is no need to remove it from any request.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In addition, there is another reason why this is unnecessary (and I was too lazy to describe it in my previous email). The MPI_Waitall is only allowed to return MPI_ERR_PENDING for &quot;not completed&quot; MPI request. Such requests will therefore be completed later by the MPI library, and at that moment the error in the status will be set to the correct value, or MPI_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 21, 2012, at 14:32 , Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In the patch for errhandler_invoke.c, you can see that we need to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; check for MPI_ERR_PENDING to make sure that we do not free the request
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when we are trying to decide if we should invoke the error handler. So
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; setting the internal req-&gt;req_status.MPI_ERROR to MPI_ERR_PENDING made
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it possible to check for this state in this code. Maybe you have a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; better way around this, but that is why I chose to implement it this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I agree that MPI_ERR_PENDING is only to be set in MPI_Waitall. And, in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this patch, MPI_ERR_PENDING is only set in that operation. The other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; operations must look for the MPI_ERR_PENDING and reset the value -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; since we are using the internal status object to carry it around per
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You said that the implementation in ompi_request_default_wait_all was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; incorrect. Would you care to elaborate as to what specifically is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; incorrect?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, Mar 21, 2012 at 2:17 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I don't agree that these changes are required. In the current standard (2.2), MPI_ERR_PENDING is only allowed to be returned by MPI_WAITALL, in some very specific conditions. Here is the snippet from the MPI standard clarifying this behavior.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; When one or more of the communications completed by a call to MPI_WAITALL fail, it is desireable to return specific information on each communication. The function MPI_WAITALL will return in such case the error code MPI_ERR_IN_STATUS and will set the error field of each status to a specific error code. This code will be MPI_SUCCESS, if the specific communication completed; it will be another specific error code, if it failed; or it can be MPI_ERR_PENDING if it has neither failed nor completed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As you can notice, the MPI_ERR_PENDING is only for the error in the status array and not for the error field in the status attached to the MPI request. Moreover, we don't use this inside Open MPI at all.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The usage we're doing in the default_wait_all of MPI_ERR_PENDING is incorrect as well. I will fix it, once we clarify the issue with your patch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 21, 2012, at 13:46 , jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Date: 2012-03-21 13:46:15 EDT (Wed, 21 Mar 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New Revision: 26172
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26172">https://svn.open-mpi.org/trac/ompi/changeset/26172</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Add support for MPI_ERR_PENDING - Per MPI 2.2 p 60
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tested with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160;ompi-tests/mpich_tester/mpich_pt2pt/truncmult.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; trunk/ompi/errhandler/errhandler_invoke.c | &#160; &#160; 9 ++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/req_test.c &#160; &#160; &#160; &#160; &#160; &#160; | &#160; &#160;32 ++++++++++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/req_wait.c &#160; &#160; &#160; &#160; &#160; &#160; | &#160; 120 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/request.c &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; trunk/ompi/request/request.h &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 5 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160; 5 files changed, 158 insertions(+), 10 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="10755.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Previous message:</strong> <a href="10753.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>In reply to:</strong> <a href="10753.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10755.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
<li><strong>Reply:</strong> <a href="10755.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26172"</a>
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
