<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 16:53:41 2014" -->
<!-- isoreceived="20140911205341" -->
<!-- sent="Thu, 11 Sep 2014 16:53:41 -0400" -->
<!-- isosent="20140911205341" -->
<!-- name="Tim Mattox" -->
<!-- email="tmattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray" -->
<!-- id="CALwSR2VPEmQz0ydP1uKGrWHtT_2Q7yO=crZGVtvoSgqWe2wjag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140911203041.3E26A160FBB_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 - trunk/opal/mca/pmix/cray<br>
<strong>From:</strong> Tim Mattox (<em>tmattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 16:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15813.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray"</a>
<li><strong>Previous message:</strong> <a href="15811.php">Thomas Naughton: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15813.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray"</a>
<li><strong>Reply:</strong> <a href="15813.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sure that is not what you meant to do...
<br>
the assignment to NULL should occur AFTER the free()...
<br>
<p>On Thu, Sep 11, 2014 at 4:30 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hppritcha (Howard Pritchard)
</span><br>
<span class="quotelev1">&gt; Date: 2014-09-11 16:30:40 EDT (Thu, 11 Sep 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32711
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32711">https://svn.open-mpi.org/trac/ompi/changeset/32711</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix potential double free in cray pmi cray_fini
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/pmix/cray/pmix_cray.c |     1 +
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/pmix/cray/pmix_cray.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/pmix/cray/pmix_cray.c        Thu Sep 11 10:51:30 2014
</span><br>
<span class="quotelev1">&gt;       (r32710)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/pmix/cray/pmix_cray.c        2014-09-11 16:30:40 EDT
</span><br>
<span class="quotelev1">&gt; (Thu, 11 Sep 2014)      (r32711)
</span><br>
<span class="quotelev1">&gt; @@ -257,6 +257,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (NULL != pmix_lranks) {
</span><br>
<span class="quotelev1">&gt; +        pmix_lranks = NULL;
</span><br>
<span class="quotelev1">&gt;          free(pmix_lranks);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - tmattox_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15813.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray"</a>
<li><strong>Previous message:</strong> <a href="15811.php">Thomas Naughton: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15813.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray"</a>
<li><strong>Reply:</strong> <a href="15813.php">Pritchard Jr., Howard: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r32711 -	trunk/opal/mca/pmix/cray"</a>
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
