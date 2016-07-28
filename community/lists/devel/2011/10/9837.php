<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 09:19:22 2011" -->
<!-- isoreceived="20111018131922" -->
<!-- sent="Tue, 18 Oct 2011 07:19:11 -0600" -->
<!-- isosent="20111018131911" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302" -->
<!-- id="87526935-E782-4ACA-B84F-F15E4BCBBB70_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1659815B-3DDA-48A5-BE52-403443AFA51C_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-18 09:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9838.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Previous message:</strong> <a href="9836.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>In reply to:</strong> <a href="9828.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>Reply:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange - it ran fine for me on multiple tests. I'll check to see if something strange got into the mix and recommit.
<br>
<p>On Oct 17, 2011, at 8:51 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This commit put the mpirun process in an infinite loop for the simple case 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca orte_default_hostfile machinefile --bynode *my_app*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2011, at 15:49 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-10-17 15:49:04 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 25302
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25302">https://svn.open-mpi.org/trac/ompi/changeset/25302</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix the mapping algo for computing vpids - it was borked for bynode operations when using nperxxx directives
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c |    67 ++++++++++++++++++++------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 34 insertions(+), 33 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2011-10-17 15:49:04 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -527,7 +527,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; int orte_rmaps_base_compute_vpids(orte_job_t *jdata)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    orte_job_map_t *map;
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_vpid_t vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_vpid_t vpid, cnt;
</span><br>
<span class="quotelev2">&gt;&gt;    int i, j;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_node_t *node;
</span><br>
<span class="quotelev2">&gt;&gt;    orte_proc_t *proc;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -539,6 +539,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_MAPPING_BYSOCKET &amp; map-&gt;policy ||
</span><br>
<span class="quotelev2">&gt;&gt;        ORTE_MAPPING_BYBOARD &amp; map-&gt;policy) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* assign the ranks sequentially */
</span><br>
<span class="quotelev2">&gt;&gt; +        vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt;        for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev2">&gt;&gt;                continue;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -553,12 +554,10 @@
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;                if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev2">&gt;&gt;                    /* find the next available vpid */
</span><br>
<span class="quotelev2">&gt;&gt; -                    for (vpid=0; vpid &lt; jdata-&gt;num_procs; vpid++) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                            break;
</span><br>
<span class="quotelev2">&gt;&gt; -                        }
</span><br>
<span class="quotelev2">&gt;&gt; +                    while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        vpid++;
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt; -                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; +                    proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt;                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -580,39 +579,41 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
</span><br>
<span class="quotelev2">&gt;&gt;        /* assign the ranks round-robin across nodes */
</span><br>
<span class="quotelev2">&gt;&gt; -        for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; -            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev2">&gt;&gt; -                continue;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -            for (j=0; j &lt; node-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev2">&gt;&gt; -                if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, j))) {
</span><br>
<span class="quotelev2">&gt;&gt; +        cnt = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +        vpid = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +        do {
</span><br>
<span class="quotelev2">&gt;&gt; +            for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev2">&gt;&gt;                    continue;
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt; -                /* ignore procs from other jobs */
</span><br>
<span class="quotelev2">&gt;&gt; -                if (proc-&gt;name.jobid != jdata-&gt;jobid) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    continue;
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -                if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    /* find the next available vpid */
</span><br>
<span class="quotelev2">&gt;&gt; -                    vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt; -                    while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        vpid += map-&gt;num_nodes;
</span><br>
<span class="quotelev2">&gt;&gt; -                        if (jdata-&gt;num_procs &lt;= vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; -                            vpid = vpid - jdata-&gt;num_procs;
</span><br>
<span class="quotelev2">&gt;&gt; +                for (j=0; j &lt; node-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, j))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        continue;
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                    /* ignore procs from other jobs */
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (proc-&gt;name.jobid != jdata-&gt;jobid) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        continue;
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        /* find next available vpid */
</span><br>
<span class="quotelev2">&gt;&gt; +                        while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt; +                            vpid++;
</span><br>
<span class="quotelev2">&gt;&gt; +                        }
</span><br>
<span class="quotelev2">&gt;&gt; +                        proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; +                        if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs,
</span><br>
<span class="quotelev2">&gt;&gt; +                                                                              proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; +                            return rc;
</span><br>
<span class="quotelev2">&gt;&gt;                        }
</span><br>
<span class="quotelev2">&gt;&gt; +                        cnt++;
</span><br>
<span class="quotelev2">&gt;&gt; +                        break;  /* move to next node */
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt; -                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev2">&gt;&gt; -                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev2">&gt;&gt; -                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; -                if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev2">&gt;&gt; -                        return rc;
</span><br>
<span class="quotelev2">&gt;&gt; -                    }                    
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; +        } while (cnt &lt; jdata-&gt;num_procs);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9838.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25303"</a>
<li><strong>Previous message:</strong> <a href="9836.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #2888: base.h inclusion breaks Solaris build"</a>
<li><strong>In reply to:</strong> <a href="9828.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>Reply:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
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
