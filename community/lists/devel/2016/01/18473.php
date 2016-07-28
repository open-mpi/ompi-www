<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 04:14:10 2016" -->
<!-- isoreceived="20160106091410" -->
<!-- sent="Wed, 6 Jan 2016 01:14:06 -0800" -->
<!-- isosent="20160106091406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab" -->
<!-- id="0252F553-D7E3-4845-A0E7-A3B173D6F6B0_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20160106072234.740BD26196D_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 04:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Previous message:</strong> <a href="18472.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.0 is getting ready"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Reply:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>Could you please explain this one - I honestly don&#226;&#128;&#153;t understand the change, and haven&#226;&#128;&#153;t encountered a problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jan 5, 2016, at 11:22 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  213b2abde47cf02ba3152a301d3ec0ffeec54438 (commit)
</span><br>
<span class="quotelev1">&gt;      from  e4bdad09c1bf7f11dada5ae6ac32e052b553ce4b (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438">https://github.com/open-mpi/ompi/commit/213b2abde47cf02ba3152a301d3ec0ffeec54438</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 213b2abde47cf02ba3152a301d3ec0ffeec54438
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Jan 6 16:21:13 2016 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    dpm: correctly handle procs_cutoff in ompi_dpm_connect_accept()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/dpm/dpm.c b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev1">&gt; index 9a236d0..b1c562e 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/dpm/dpm.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/dpm/dpm.c
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2015 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2013-2015 Intel, Inc. All rights reserved
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2014-2015 Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2014-2016 Research Organization for Information Science
</span><br>
<span class="quotelev1">&gt;  *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; @@ -167,7 +167,13 @@ int ompi_dpm_connect_accept(ompi_communicator_t *comm, int root,
</span><br>
<span class="quotelev1">&gt;             dense = false;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         for (i=0; i &lt; size; i++) {
</span><br>
<span class="quotelev1">&gt; -            rc = opal_convert_process_name_to_string(&amp;nstring, &amp;(proc_list[i]-&gt;super.proc_name));
</span><br>
<span class="quotelev1">&gt; +            opal_process_name_t proc_name;
</span><br>
<span class="quotelev1">&gt; +            if (ompi_proc_is_sentinel (proc_list[i])) {
</span><br>
<span class="quotelev1">&gt; +                proc_name = ompi_proc_sentinel_to_name ((intptr_t) proc_list[i]);
</span><br>
<span class="quotelev1">&gt; +            } else {
</span><br>
<span class="quotelev1">&gt; +                proc_name = proc_list[i]-&gt;super.proc_name;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt; +            rc = opal_convert_process_name_to_string(&amp;nstring, &amp;proc_name);
</span><br>
<span class="quotelev1">&gt;             if (OPAL_SUCCESS != rc) {
</span><br>
<span class="quotelev1">&gt;                 if (!dense) {
</span><br>
<span class="quotelev1">&gt;                     free(proc_list);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; ompi/dpm/dpm.c | 10 ++++++++--
</span><br>
<span class="quotelev1">&gt; 1 file changed, 8 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ompi-commits mailing list
</span><br>
<span class="quotelev1">&gt; ompi-commits_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits">http://www.open-mpi.org/mailman/listinfo.cgi/ompi-commits</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Previous message:</strong> <a href="18472.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.0 is getting ready"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>Reply:</strong> <a href="18474.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
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
