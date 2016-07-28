<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32401 - trunk/opal/util";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 12:37:00 2014" -->
<!-- isoreceived="20140801163700" -->
<!-- sent="Fri, 1 Aug 2014 09:36:51 -0700" -->
<!-- isosent="20140801163651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32401 - trunk/opal/util" -->
<!-- id="925718CB-17AD-4884-AC0F-A089CFB2B26F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140801163624.39F8815F87B_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32401 - trunk/opal/util<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 12:36:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15461.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Previous message:</strong> <a href="15459.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George!
<br>
<p>On Aug 1, 2014, at 9:36 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca)
</span><br>
<span class="quotelev1">&gt; Date: 2014-08-01 12:36:23 EDT (Fri, 01 Aug 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32401
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32401">https://svn.open-mpi.org/trac/ompi/changeset/32401</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; No more assert in the proc destructor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/util/proc.c |     9 ++++-----                               
</span><br>
<span class="quotelev1">&gt;   1 files changed, 4 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/util/proc.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/util/proc.c	Fri Aug  1 10:54:22 2014	(r32400)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/util/proc.c	2014-08-01 12:36:23 EDT (Fri, 01 Aug 2014)	(r32401)
</span><br>
<span class="quotelev1">&gt; @@ -47,11 +47,10 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void opal_proc_destruct(opal_proc_t* proc)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    proc-&gt;proc_flags    = 0;
</span><br>
<span class="quotelev1">&gt; -    proc-&gt;proc_name     = 0;
</span><br>
<span class="quotelev1">&gt; -    proc-&gt;proc_hostname = NULL;
</span><br>
<span class="quotelev1">&gt; -    /* We don't create the convertor so we don't have to release it either */
</span><br>
<span class="quotelev1">&gt; -    assert( NULL != proc-&gt;proc_convertor );
</span><br>
<span class="quotelev1">&gt; +    proc-&gt;proc_flags     = 0;
</span><br>
<span class="quotelev1">&gt; +    proc-&gt;proc_name      = 0;
</span><br>
<span class="quotelev1">&gt; +    proc-&gt;proc_hostname  = NULL;
</span><br>
<span class="quotelev1">&gt; +    proc-&gt;proc_convertor = NULL;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OBJ_CLASS_INSTANCE(opal_proc_t, opal_list_item_t,
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
<li><strong>Next message:</strong> <a href="15461.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
<li><strong>Previous message:</strong> <a href="15459.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32398 - in trunk: ompi/mca/bcol/basesmuma ompi/mca/coll/hierarch ompi/mca/coll/sm ompi/mca/dpm/orte ompi/mca/pml/bfo ompi/mca/rte/orte ompi/proc ompi/runtime opal/util orte/mca/ess/base orte/mca/ess/hnp orte/runtime orte/util"</a>
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
