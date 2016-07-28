<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 14:46:23 2007" -->
<!-- isoreceived="20070424184623" -->
<!-- sent="Tue, 24 Apr 2007 14:46:20 -0400" -->
<!-- isosent="20070424184620" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444" -->
<!-- id="B8434E6B-62CD-472C-A190-0274A4BD8706_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="89F926CA-344A-4496-9E28-F127EDEC8708_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 14:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Previous message:</strong> <a href="1458.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.1rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Reply:</strong> <a href="1460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, after doing a quick grep through the code base it seems  
<br>
that the tuned collectives use the PML start interface without going  
<br>
through the MPI level call (as far as I could tell). So since I don't  
<br>
know the full impact of such a change I'm going to not make this  
<br>
change and leave it for someone more knowledgeable in those systems  
<br>
to do so. Someone else can better ensure proper testing of the impact  
<br>
of this change.
<br>
<p>Sorry,
<br>
Josh
<br>
<p>On Apr 20, 2007, at 4:05 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Yeah I was not actually sure what the standard said about passing an
</span><br>
<span class="quotelev1">&gt; array of requests and having one of the elements be NULL. This just
</span><br>
<span class="quotelev1">&gt; seemed like a subtle bug when I was looking through the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Taking a quick look at the check in mpi/c/startall.c it seems that we
</span><br>
<span class="quotelev1">&gt; do check for this case there and error out if any element is NULL, so
</span><br>
<span class="quotelev1">&gt; I agree that we can just remove this from the file. If no one gets to
</span><br>
<span class="quotelev1">&gt; it before tomorrow sometime (or there are objections) then I'll take
</span><br>
<span class="quotelev1">&gt; the NULL check out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2007, at 3:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the NULL test is a left over from long ago. At one point in
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; past we decided that all MPI related tests have to be done outside
</span><br>
<span class="quotelev2">&gt;&gt; the PML
</span><br>
<span class="quotelev2">&gt;&gt; functions (i.e. in the MPI layer). The test for request == NULL is
</span><br>
<span class="quotelev2">&gt;&gt; present
</span><br>
<span class="quotelev2">&gt;&gt; in the start.c and startall.c. Anywhere else (i.e. where we use
</span><br>
<span class="quotelev2">&gt;&gt; internally
</span><br>
<span class="quotelev2">&gt;&gt; the pml_start call) we can make sure that this doesn't happens.
</span><br>
<span class="quotelev2">&gt;&gt; Therefore,
</span><br>
<span class="quotelev2">&gt;&gt; the test can be safely removed from the startall function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 20 Apr 2007, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2007-04-20 13:17:11 EDT (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 14444
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14444">https://svn.open-mpi.org/trac/ompi/changeset/14444</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check for NULL before trying to use the variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_start.c |     4 ++--
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_start.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================================== 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_start.c	(original)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_start.c	2007-04-20 13:17:11 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -32,11 +32,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for(i=0; i&lt;count; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mca_pml_base_request_t *pml_request =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mca_pml_base_request_t*)requests[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        if(NULL == pml_request)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         if (OMPI_REQUEST_PML != requests[i]-&gt;req_type) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        if(NULL == pml_request)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /* If the persistent request is currently active - obtain  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          * request lock and verify the status is incomplete. if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Martin Luther King
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
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="1460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Previous message:</strong> <a href="1458.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.1rc2 has been posted"</a>
<li><strong>In reply to:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Reply:</strong> <a href="1460.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
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
