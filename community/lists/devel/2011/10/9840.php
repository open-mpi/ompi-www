<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 18 10:00:31 2011" -->
<!-- isoreceived="20111018140031" -->
<!-- sent="Tue, 18 Oct 2011 08:00:23 -0600" -->
<!-- isosent="20111018140023" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302" -->
<!-- id="8025A3AA-9381-4F41-965D-6D566255B178_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E9D80AE.6040208_at_oracle.com" -->
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
<strong>Date:</strong> 2011-10-18 10:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9841.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>In reply to:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2011, at 7:35 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Strange - it ran fine for me on multiple tests. I'll check to see if something strange got into the mix and recommit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure it is the same issue but it looks like all my MTT tests on the trunk r25308 are timing out.
</span><br>
<p>Okay - sorry about that. I'm looking into it now. I tested it with a multi-node setup, but it's always possible that something got in there after the tests (and sounds like it did).
<br>
<p><span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2011, at 8:51 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This commit put the mpirun process in an infinite loop for the simple case 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --mca orte_default_hostfile machinefile --bynode *my_app*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 17, 2011, at 15:49 , rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: rhc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2011-10-17 15:49:04 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 25302
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25302">https://svn.open-mpi.org/trac/ompi/changeset/25302</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fix the mapping algo for computing vpids - it was borked for bynode operations when using nperxxx directives
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c |    67 ++++++++++++++++++++------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1 files changed, 34 insertions(+), 33 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	(original)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c	2011-10-17 15:49:04 EDT (Mon, 17 Oct 2011)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -527,7 +527,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int orte_rmaps_base_compute_vpids(orte_job_t *jdata)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_job_map_t *map;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -    orte_vpid_t vpid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +    orte_vpid_t vpid, cnt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int i, j;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_node_t *node;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    orte_proc_t *proc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -539,6 +539,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ORTE_MAPPING_BYSOCKET &amp; map-&gt;policy ||
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        ORTE_MAPPING_BYBOARD &amp; map-&gt;policy) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        /* assign the ranks sequentially */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        vpid = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -553,12 +554,10 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    /* find the next available vpid */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    for (vpid=0; vpid &lt; jdata-&gt;num_procs; vpid++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                        if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                            break;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        vpid++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -580,39 +579,41 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (ORTE_MAPPING_BYNODE &amp; map-&gt;policy) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        /* assign the ranks round-robin across nodes */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            for (j=0; j &lt; node-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, j))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        cnt = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        vpid = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        do {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            for (i=0; i &lt; map-&gt;nodes-&gt;size; i++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(map-&gt;nodes, i))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                /* ignore procs from other jobs */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                if (proc-&gt;name.jobid != jdata-&gt;jobid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    /* find the next available vpid */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    vpid = i;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                        vpid += map-&gt;num_nodes;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                        if (jdata-&gt;num_procs &lt;= vpid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                            vpid = vpid - jdata-&gt;num_procs;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                for (j=0; j &lt; node-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    if (NULL == (proc = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, j))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    /* ignore procs from other jobs */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    if (proc-&gt;name.jobid != jdata-&gt;jobid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                    if (ORTE_VPID_INVALID == proc-&gt;name.vpid) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        /* find next available vpid */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        while (NULL != opal_pointer_array_get_item(jdata-&gt;procs, vpid)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                            vpid++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        proc-&gt;name.vpid = vpid++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                                                                              proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                            ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                            return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        cnt++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +                        break;  /* move to next node */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    proc-&gt;name.vpid = vpid;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    ORTE_EPOCH_SET(proc-&gt;name.epoch,ORTE_EPOCH_INVALID);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    ORTE_EPOCH_SET(proc-&gt;name.epoch,orte_ess.proc_get_epoch(&amp;proc-&gt;name));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                if (NULL == opal_pointer_array_get_item(jdata-&gt;procs, proc-&gt;name.vpid)) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    if (ORTE_SUCCESS != (rc = opal_pointer_array_set_item(jdata-&gt;procs, proc-&gt;name.vpid, proc))) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                        ORTE_ERROR_LOG(rc);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                        return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -                    }                    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        } while (cnt &lt; jdata-&gt;num_procs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        return ORTE_SUCCESS;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9841.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
<li><strong>In reply to:</strong> <a href="9839.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25302"</a>
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
