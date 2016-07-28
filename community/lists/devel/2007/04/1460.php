<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 13:13:53 2007" -->
<!-- isoreceived="20070425171353" -->
<!-- sent="Wed, 25 Apr 2007 13:13:38 -0400" -->
<!-- isosent="20070425171338" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444" -->
<!-- id="F0063A18-76D7-4B55-A2DF-DE1646361BE2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B8434E6B-62CD-472C-A190-0274A4BD8706_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-25 13:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1461.php">Aurelien Bouteiller: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>In reply to:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In fact, if you find any internal Open MPI code which call directly  
<br>
the MPI functions you should raise the flag. It's a design choice,  
<br>
the MPI API is for the users, when you need to call any MPI like  
<br>
functions from inside ompi you need to take another path. In the  
<br>
collectives we're using the PML macros. One of the reasons is  
<br>
performance. We know that the arguments for the functions we call are  
<br>
correct, so there is no reason to check them. For this particular  
<br>
case, the collective modules never call the PML with the request set  
<br>
to NULL, instead we're using the MPI_REQUEST_NULL.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Apr 24, 2007, at 2:46 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Actually, after doing a quick grep through the code base it seems
</span><br>
<span class="quotelev1">&gt; that the tuned collectives use the PML start interface without going
</span><br>
<span class="quotelev1">&gt; through the MPI level call (as far as I could tell). So since I don't
</span><br>
<span class="quotelev1">&gt; know the full impact of such a change I'm going to not make this
</span><br>
<span class="quotelev1">&gt; change and leave it for someone more knowledgeable in those systems
</span><br>
<span class="quotelev1">&gt; to do so. Someone else can better ensure proper testing of the impact
</span><br>
<span class="quotelev1">&gt; of this change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2007, at 4:05 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah I was not actually sure what the standard said about passing an
</span><br>
<span class="quotelev2">&gt;&gt; array of requests and having one of the elements be NULL. This just
</span><br>
<span class="quotelev2">&gt;&gt; seemed like a subtle bug when I was looking through the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Taking a quick look at the check in mpi/c/startall.c it seems that we
</span><br>
<span class="quotelev2">&gt;&gt; do check for this case there and error out if any element is NULL, so
</span><br>
<span class="quotelev2">&gt;&gt; I agree that we can just remove this from the file. If no one gets to
</span><br>
<span class="quotelev2">&gt;&gt; it before tomorrow sometime (or there are objections) then I'll take
</span><br>
<span class="quotelev2">&gt;&gt; the NULL check out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 20, 2007, at 3:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think the NULL test is a left over from long ago. At one point in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; past we decided that all MPI related tests have to be done outside
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PML
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions (i.e. in the MPI layer). The test for request == NULL is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the start.c and startall.c. Anywhere else (i.e. where we use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the pml_start call) we can make sure that this doesn't happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Therefore,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the test can be safely removed from the startall function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 20 Apr 2007, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2007-04-20 13:17:11 EDT (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 14444
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14444">https://svn.open-mpi.org/trac/ompi/changeset/14444</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check for NULL before trying to use the variable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_start.c |     4 ++--
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_start.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =================================================================== 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; =========
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_start.c	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_start.c	2007-04-20 13:17:11 EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -32,11 +32,11 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     for(i=0; i&lt;count; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mca_pml_base_request_t *pml_request =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mca_pml_base_request_t*)requests[i];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        if(NULL == pml_request)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         if (OMPI_REQUEST_PML != requests[i]-&gt;req_type) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        if(NULL == pml_request)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         /* If the persistent request is currently active - obtain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          * request lock and verify the status is incomplete. if the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;We must accept finite disappointment, but we must never lose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infinite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                    Martin Luther King
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
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey
</span><br>
<span class="quotelev2">&gt;&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1460/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1461.php">Aurelien Bouteiller: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>In reply to:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
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
