<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 - trunk/ompi/mca/coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:58:52 2014" -->
<!-- isoreceived="20140929215852" -->
<!-- sent="Mon, 29 Sep 2014 21:58:52 +0000" -->
<!-- isosent="20140929215852" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 - trunk/ompi/mca/coll/ml" -->
<!-- id="B80E0C38-18E0-4837-82FC-454695D39951_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140929210215.AFF07160F7F_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 - trunk/ompi/mca/coll/ml<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 17:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15935.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 -	trunk/ompi/mca/coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15933.php">Deva: "[OMPI devel] Broken abort backtrace functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15935.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 -	trunk/ompi/mca/coll/ml"</a>
<li><strong>Reply:</strong> <a href="15935.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 -	trunk/ompi/mca/coll/ml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard --
<br>
<p>Do you want to just check ompi_mpi_thread_provided (== MPI_THREAD_MULTIPLE), instead?
<br>
<p><p>On Sep 29, 2014, at 5:02 PM, &lt;svn-commit-mailer_at_[hidden]&gt; &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hppritcha (Howard Pritchard)
</span><br>
<span class="quotelev1">&gt; Date: 2014-09-29 17:02:15 EDT (Mon, 29 Sep 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32814
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32814">https://svn.open-mpi.org/trac/ompi/changeset/32814</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; disqualify coll ml for MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/coll/ml/coll_ml_module.c |     7 +++++++                                 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 7 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/coll/ml/coll_ml_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/coll/ml/coll_ml_module.c	Mon Sep 29 15:26:33 2014	(r32813)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/coll/ml/coll_ml_module.c	2014-09-29 17:02:15 EDT (Mon, 29 Sep 2014)	(r32814)
</span><br>
<span class="quotelev1">&gt; @@ -2896,6 +2896,13 @@
</span><br>
<span class="quotelev1">&gt;         return NULL;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if (opal_using_threads()) {
</span><br>
<span class="quotelev1">&gt; +        ML_VERBOSE(10, (&quot;coll:ml: MPI_THREAD_MULTIPLE not suppported; skipping this component&quot;));
</span><br>
<span class="quotelev1">&gt; +        *priority = -1;
</span><br>
<span class="quotelev1">&gt; +        return NULL;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* NTH: Disabled this check until we have a better one. */
</span><br>
<span class="quotelev1">&gt; #if 0
</span><br>
<span class="quotelev1">&gt;     if (!ompi_rte_proc_is_bound) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15935.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 -	trunk/ompi/mca/coll/ml"</a>
<li><strong>Previous message:</strong> <a href="15933.php">Deva: "[OMPI devel] Broken abort backtrace functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15935.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 -	trunk/ompi/mca/coll/ml"</a>
<li><strong>Reply:</strong> <a href="15935.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32814 -	trunk/ompi/mca/coll/ml"</a>
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
