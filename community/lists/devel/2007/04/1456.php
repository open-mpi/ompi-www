<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 16:05:06 2007" -->
<!-- isoreceived="20070420200506" -->
<!-- sent="Fri, 20 Apr 2007 16:05:01 -0400" -->
<!-- isosent="20070420200501" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444" -->
<!-- id="89F926CA-344A-4496-9E28-F127EDEC8708_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.WNT.4.64.0704201526430.612_at_voyager" -->
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
<strong>Date:</strong> 2007-04-20 16:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1457.php">bouteill: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1455.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>In reply to:</strong> <a href="1455.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Reply:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah I was not actually sure what the standard said about passing an  
<br>
array of requests and having one of the elements be NULL. This just  
<br>
seemed like a subtle bug when I was looking through the code.
<br>
<p>Taking a quick look at the check in mpi/c/startall.c it seems that we  
<br>
do check for this case there and error out if any element is NULL, so  
<br>
I agree that we can just remove this from the file. If no one gets to  
<br>
it before tomorrow sometime (or there are objections) then I'll take  
<br>
the NULL check out.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Apr 20, 2007, at 3:28 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think the NULL test is a left over from long ago. At one point in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; past we decided that all MPI related tests have to be done outside  
</span><br>
<span class="quotelev1">&gt; the PML
</span><br>
<span class="quotelev1">&gt; functions (i.e. in the MPI layer). The test for request == NULL is  
</span><br>
<span class="quotelev1">&gt; present
</span><br>
<span class="quotelev1">&gt; in the start.c and startall.c. Anywhere else (i.e. where we use  
</span><br>
<span class="quotelev1">&gt; internally
</span><br>
<span class="quotelev1">&gt; the pml_start call) we can make sure that this doesn't happens.  
</span><br>
<span class="quotelev1">&gt; Therefore,
</span><br>
<span class="quotelev1">&gt; the test can be safely removed from the startall function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 20 Apr 2007, jjhursey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: jjhursey
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-04-20 13:17:11 EDT (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 14444
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14444">https://svn.open-mpi.org/trac/ompi/changeset/14444</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Check for NULL before trying to use the variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_start.c |     4 ++--
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_start.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_start.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_start.c	2007-04-20 13:17:11 EDT  
</span><br>
<span class="quotelev2">&gt;&gt; (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -32,11 +32,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     for(i=0; i&lt;count; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;         mca_pml_base_request_t *pml_request =  
</span><br>
<span class="quotelev2">&gt;&gt; (mca_pml_base_request_t*)requests[i];
</span><br>
<span class="quotelev2">&gt;&gt; +        if(NULL == pml_request)
</span><br>
<span class="quotelev2">&gt;&gt; +            continue;
</span><br>
<span class="quotelev2">&gt;&gt;         if (OMPI_REQUEST_PML != requests[i]-&gt;req_type) {
</span><br>
<span class="quotelev2">&gt;&gt;             continue;
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt; -        if(NULL == pml_request)
</span><br>
<span class="quotelev2">&gt;&gt; -            continue;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         /* If the persistent request is currently active - obtain the
</span><br>
<span class="quotelev2">&gt;&gt;          * request lock and verify the status is incomplete. if the
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                    Martin Luther King
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1457.php">bouteill: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Previous message:</strong> <a href="1455.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>In reply to:</strong> <a href="1455.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Reply:</strong> <a href="1459.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
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
