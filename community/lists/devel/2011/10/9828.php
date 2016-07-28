<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 17 22:51:25 2011" -->
<!-- isoreceived="20111018025125" -->
<!-- sent="Mon, 17 Oct 2011 22:51:20 -0400" -->
<!-- isosent="20111018025120" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302" -->
<!-- id="1659815B-3DDA-48A5-BE52-403443AFA51C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201110171949.p9HJn5Oe006284_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-17 22:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9829.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Previous message:</strong> <a href="9827.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9837.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>Reply:</strong> <a href="9837.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit put the mpirun process in an infinite loop for the simple case 
<br>
mpirun -np 2 --mca orte_default_hostfile machinefile --bynode *my_app*
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 17, 2011, at 15:49 , rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2011-10-17 15:49:04 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25302
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25302">https://svn.open-mpi.org/trac/ompi/changeset/25302</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix the mapping algo for computing vpids - it was borked for bynode operations when using nperxxx directives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c |    67 ++++++++++++++++++++------------------- 
</span><br>
<span class="quotelev1">&gt;   1 files changed, 34 insertions(+), 33 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2011-10-17 15:49:04 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev1">&gt; @@ -527,7 +527,7 @@
</span><br>
<span class="quotelev1">&gt; int orte_rmaps_base_compute_vpids(orte_job_t *jdata)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     orte_job_map_t *map;
</span><br>
<span class="quotelev1">&gt; -    orte_vpid_t vpid;
</span><br>
<span class="quotelev1">&gt; +    orte_vpid_t vpid, cnt;
</span><br>
<span class="quotelev1">&gt;     int i, j;
</span><br>
<span class="quotelev1">&gt;     orte_node_t *node;
</span><br>
<span class="quotelev1">&gt;     orte_proc_t *proc;
</span><br>
<span class="quotelev1">&gt; @@ -539,6 +539,7 @@
</span><br>
<span class="quotelev1">&gt;         ORTE_MAPPING_BYSOCKET &amp; map-&gt;policy ||
</span><br>
<span class="quotelev1">&gt;         ORTE_MAPPING_BYBOARD &amp; map-&gt;policy) {
</span><br>
<span class="quotelev1">&gt;         /* assign the ranks sequentially */
</span><br>
<span class="quotelev1">&gt; +        vpid = 0;
</span><br>
<span class="quotelev1">&gt;         for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt;             if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt; @@ -553,12 +554,10 @@
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev1">&gt;                     /* find the next available vpid */
</span><br>
<span class="quotelev1">&gt; -                    for (vpid=0; vpid &lt; jdata-&gt;num_procs; vpid++) {
</span><br>
<span class="quotelev1">&gt; -                        if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev1">&gt; -                            break;
</span><br>
<span class="quotelev1">&gt; -                        }
</span><br>
<span class="quotelev1">&gt; +                    while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev1">&gt; +                        vpid++;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt; -                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev1">&gt; +                    proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev1">&gt;                     ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev1">&gt;                     ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -580,39 +579,41 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
</span><br>
<span class="quotelev1">&gt;         /* assign the ranks round-robin across nodes */
</span><br>
<span class="quotelev1">&gt; -        for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt; -            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev1">&gt; -                continue;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -            for (j=0; j &lt; node-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev1">&gt; -                if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, j))) {
</span><br>
<span class="quotelev1">&gt; +        cnt = 0;
</span><br>
<span class="quotelev1">&gt; +        vpid = 0;
</span><br>
<span class="quotelev1">&gt; +        do {
</span><br>
<span class="quotelev1">&gt; +            for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt; +                if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev1">&gt;                     continue;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; -                /* ignore procs from other jobs */
</span><br>
<span class="quotelev1">&gt; -                if (proc-&gt;name.jobid != jdata-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt; -                    continue;
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -                if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev1">&gt; -                    /* find the next available vpid */
</span><br>
<span class="quotelev1">&gt; -                    vpid = i;
</span><br>
<span class="quotelev1">&gt; -                    while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev1">&gt; -                        vpid += map-&gt;num_nodes;
</span><br>
<span class="quotelev1">&gt; -                        if (jdata-&gt;num_procs &lt;= vpid) {
</span><br>
<span class="quotelev1">&gt; -                            vpid = vpid - jdata-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt; +                for (j=0; j &lt; node-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev1">&gt; +                    if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, j))) {
</span><br>
<span class="quotelev1">&gt; +                        continue;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                    /* ignore procs from other jobs */
</span><br>
<span class="quotelev1">&gt; +                    if (proc-&gt;name.jobid != jdata-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt; +                        continue;
</span><br>
<span class="quotelev1">&gt; +                    }
</span><br>
<span class="quotelev1">&gt; +                    if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev1">&gt; +                        /* find next available vpid */
</span><br>
<span class="quotelev1">&gt; +                        while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev1">&gt; +                            vpid++;
</span><br>
<span class="quotelev1">&gt; +                        }
</span><br>
<span class="quotelev1">&gt; +                        proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev1">&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev1">&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev1">&gt; +                        if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs,
</span><br>
<span class="quotelev1">&gt; +                                                                              proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev1">&gt; +                            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; +                            return rc;
</span><br>
<span class="quotelev1">&gt;                         }
</span><br>
<span class="quotelev1">&gt; +                        cnt++;
</span><br>
<span class="quotelev1">&gt; +                        break;  /* move to next node */
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt; -                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev1">&gt; -                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev1">&gt; -                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; -                if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev1">&gt; -                    if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev1">&gt; -                        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev1">&gt; -                        return rc;
</span><br>
<span class="quotelev1">&gt; -                    }                    
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        } while (cnt &lt; jdata-&gt;num_procs);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         return ORTE_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9829.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Previous message:</strong> <a href="9827.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9837.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>Reply:</strong> <a href="9837.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
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
