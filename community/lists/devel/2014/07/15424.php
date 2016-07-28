<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 23:29:21 2014" -->
<!-- isoreceived="20140801032921" -->
<!-- sent="Thu, 31 Jul 2014 20:29:17 -0700" -->
<!-- isosent="20140801032917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1" -->
<!-- id="5B4A2FEB-C527-452D-B3F7-9D1BD75619DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140801032824.0195815F83E_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 23:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15423.php">Ralph Castain: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15427.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15427.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: we had Siegmar try that and it didn't solve the problem. Paul?
<br>
<p><p>On Jul 31, 2014, at 8:28 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2014-07-31 23:28:23 EDT (Thu, 31 Jul 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32388
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32388">https://svn.open-mpi.org/trac/ompi/changeset/32388</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Missing alloca.h. Thanks Paul for catching this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/ob1/pml_ob1_isend.c |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;   2 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c	Thu Jul 31 21:00:42 2014	(r32387)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_irecv.c	2014-07-31 23:28:23 EDT (Thu, 31 Jul 2014)	(r32388)
</span><br>
<span class="quotelev1">&gt; @@ -28,6 +28,9 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;pml_ob1_recvfrag.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/peruse/peruse-internal.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/message/message.h&quot;
</span><br>
<span class="quotelev1">&gt; +#if HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif  /* HAVE_ALLOCA_H */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_irecv_init(void *addr,
</span><br>
<span class="quotelev1">&gt;                            size_t count,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/ob1/pml_ob1_isend.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/ob1/pml_ob1_isend.c	Thu Jul 31 21:00:42 2014	(r32387)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/ob1/pml_ob1_isend.c	2014-07-31 23:28:23 EDT (Thu, 31 Jul 2014)	(r32388)
</span><br>
<span class="quotelev1">&gt; @@ -26,6 +26,9 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;pml_ob1_sendreq.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;pml_ob1_recvreq.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/peruse/peruse-internal.h&quot;
</span><br>
<span class="quotelev1">&gt; +#if HAVE_ALLOCA_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif  /* HAVE_ALLOCA_H */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int mca_pml_ob1_isend_init(void *buf,
</span><br>
<span class="quotelev1">&gt;                            size_t count,
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15425.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>Previous message:</strong> <a href="15423.php">Ralph Castain: "Re: [OMPI devel] trunk link failure on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15427.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15427.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32388 - trunk/ompi/mca/pml/ob1"</a>
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
