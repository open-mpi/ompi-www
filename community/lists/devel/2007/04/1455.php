<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 15:29:00 2007" -->
<!-- isoreceived="20070420192900" -->
<!-- sent="Fri, 20 Apr 2007 15:28:50 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20070420192850" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444" -->
<!-- id="Pine.WNT.4.64.0704201526430.612_at_voyager" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200704201717.l3KHHBe4007397_at_sourcehaven.osl.iu.edu" -->
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
<strong>Date:</strong> 2007-04-20 15:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Previous message:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Reply:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the NULL test is a left over from long ago. At one point in the 
<br>
past we decided that all MPI related tests have to be done outside the PML 
<br>
functions (i.e. in the MPI layer). The test for request == NULL is present 
<br>
in the start.c and startall.c. Anywhere else (i.e. where we use internally 
<br>
the pml_start call) we can make sure that this doesn't happens. Therefore, 
<br>
the test can be safely removed from the startall function.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Fri, 20 Apr 2007, jjhursey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: jjhursey
</span><br>
<span class="quotelev1">&gt; Date: 2007-04-20 13:17:11 EDT (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 14444
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14444">https://svn.open-mpi.org/trac/ompi/changeset/14444</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Check for NULL before trying to use the variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_start.c |     4 ++--
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_start.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_start.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_start.c	2007-04-20 13:17:11 EDT (Fri, 20 Apr 2007)
</span><br>
<span class="quotelev1">&gt; @@ -32,11 +32,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for(i=0; i&lt;count; i++) {
</span><br>
<span class="quotelev1">&gt;         mca_pml_base_request_t *pml_request = (mca_pml_base_request_t*)requests[i];
</span><br>
<span class="quotelev1">&gt; +        if(NULL == pml_request)
</span><br>
<span class="quotelev1">&gt; +            continue;
</span><br>
<span class="quotelev1">&gt;         if (OMPI_REQUEST_PML != requests[i]-&gt;req_type) {
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; -        if(NULL == pml_request)
</span><br>
<span class="quotelev1">&gt; -            continue;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* If the persistent request is currently active - obtain the
</span><br>
<span class="quotelev1">&gt;          * request lock and verify the status is incomplete. if the
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Previous message:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Reply:</strong> <a href="1456.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
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
