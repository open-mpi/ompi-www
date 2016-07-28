<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 16:23:46 2012" -->
<!-- isoreceived="20120814202346" -->
<!-- sent="Tue, 14 Aug 2012 13:23:38 -0700" -->
<!-- isosent="20120814202338" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util" -->
<!-- id="C9760D2F-8AC5-45E0-8311-65BC5C566763_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALwSR2VnpW2pHM+nafq4pz8eL3C4-NrZvmCxD7Dg1d6VYBz0vA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 16:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11400.php">John T. Foster: "[OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>Previous message:</strong> <a href="11398.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<li><strong>In reply to:</strong> <a href="11398.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes tim, i'm aware of it - this just needed to be fixed quickly so lanl could operate.
<br>
<p>On Aug 14, 2012, at 1:00 PM, Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is a linear search actually necessary?  Is there some order to the
</span><br>
<span class="quotelev1">&gt; vpid's in the array?
</span><br>
<span class="quotelev1">&gt; I would hope you could do a binary search, or if the vpid's are unordered, then
</span><br>
<span class="quotelev1">&gt; hopefully this is a rarely invoked code path.  Just thinking of scalability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 14, 2012 at 2:18 PM,  &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-08-14 14:17:59 EDT (Tue, 14 Aug 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 27035
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/27035">https://svn.open-mpi.org/trac/ompi/changeset/27035</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; We can't just lookup the node in the node pool by daemon vpid as the daemons aren't stored that way - this was done because when holes exist in daemon vpids, we can generate huge orte_node_pool arrays even when only a few daemons actually exist. So we have to search for the vpid in the array
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/util/nidmap.c |    42 +++++++++++++++++++++++++++++++++++++--
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 39 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/util/nidmap.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/util/nidmap.c    Tue Aug 14 14:11:09 2012        (r27034)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/util/nidmap.c    2012-08-14 14:17:59 EDT (Tue, 14 Aug 2012)      (r27035)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1045,7 +1045,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     orte_std_cntr_t n;
</span><br>
<span class="quotelev2">&gt;&gt;     opal_buffer_t buf;
</span><br>
<span class="quotelev2">&gt;&gt;     int rc, j, k;
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_job_t *jdata;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_job_t *jdata, *daemons;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_proc_t *proc, *pptr;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_node_t *node, *nptr;
</span><br>
<span class="quotelev2">&gt;&gt;     orte_proc_state_t *states=NULL;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1061,6 +1061,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;         goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    daemons = orte_get_job_data_object(ORTE_PROC_MY_NAME-&gt;jobid);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;     n = 1;
</span><br>
<span class="quotelev2">&gt;&gt;     /* cycle through the buffer */
</span><br>
<span class="quotelev2">&gt;&gt;     while (ORTE_SUCCESS == (rc = opal_dss.unpack(&amp;buf, &amp;jobid, &amp;n, ORTE_JOBID))) {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1167,10 +1169,44 @@
</span><br>
<span class="quotelev2">&gt;&gt;                 proc-&gt;name.vpid = i;
</span><br>
<span class="quotelev2">&gt;&gt;                 opal_pointer_array_set_item(jdata-&gt;procs, i, proc);
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt; -            if (NULL == (node = (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, nodes[i]))) {
</span><br>
<span class="quotelev2">&gt;&gt; +            /* we can't just lookup the node in the node pool by daemon vpid
</span><br>
<span class="quotelev2">&gt;&gt; +             * as the daemons aren't stored that way - this was done because
</span><br>
<span class="quotelev2">&gt;&gt; +             * when holes exist in daemon vpids, we can generate huge orte_node_pool
</span><br>
<span class="quotelev2">&gt;&gt; +             * arrays even when only a few daemons actually exist. So we have to
</span><br>
<span class="quotelev2">&gt;&gt; +             * search for the vpid in the array
</span><br>
<span class="quotelev2">&gt;&gt; +             */
</span><br>
<span class="quotelev2">&gt;&gt; +            node = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +            for (j=0; j &lt; orte_node_pool-&gt;size; j++) {
</span><br>
<span class="quotelev2">&gt;&gt; +                if (NULL == (nptr = (orte_node_t*)opal_pointer_array_get_item(orte_node_pool, j))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    continue;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                if (nptr-&gt;daemon-&gt;name.vpid == nodes[i]) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    node = nptr;
</span><br>
<span class="quotelev2">&gt;&gt; +                    break;
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +            }
</span><br>
<span class="quotelev2">&gt;&gt; +            if (NULL == node) {
</span><br>
<span class="quotelev2">&gt;&gt;                 /* this should never happen, but protect ourselves anyway */
</span><br>
<span class="quotelev2">&gt;&gt;                 node = OBJ_NEW(orte_node_t);
</span><br>
<span class="quotelev2">&gt;&gt; -                opal_pointer_array_set_item(orte_node_pool, nodes[i], node);
</span><br>
<span class="quotelev2">&gt;&gt; +                /* find the daemon */
</span><br>
<span class="quotelev2">&gt;&gt; +                found = false;
</span><br>
<span class="quotelev2">&gt;&gt; +                for (j=0; j &lt; daemons-&gt;procs-&gt;size; j++) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (NULL == (pptr = (orte_proc_t*)opal_pointer_array_get_item(daemons-&gt;procs, j))) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        continue;
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (pptr-&gt;name.vpid == nodes[i]) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        found = true;
</span><br>
<span class="quotelev2">&gt;&gt; +                        break;
</span><br>
<span class="quotelev2">&gt;&gt; +                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                if (!found) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    pptr = OBJ_NEW(orte_proc_t);
</span><br>
<span class="quotelev2">&gt;&gt; +                    pptr-&gt;name.jobid = ORTE_PROC_MY_NAME-&gt;jobid;
</span><br>
<span class="quotelev2">&gt;&gt; +                    pptr-&gt;name.vpid = nodes[i];
</span><br>
<span class="quotelev2">&gt;&gt; +                    opal_pointer_array_set_item(daemons-&gt;procs, nodes[i], pptr);
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                node-&gt;daemon = pptr;
</span><br>
<span class="quotelev2">&gt;&gt; +                opal_pointer_array_add(orte_node_pool, node);
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;             if (NULL != proc-&gt;node) {
</span><br>
<span class="quotelev2">&gt;&gt;                 if (node != proc-&gt;node) {
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; timattox_at_[hidden] || tmattox_at_[hidden]
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
<li><strong>Next message:</strong> <a href="11400.php">John T. Foster: "[OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>Previous message:</strong> <a href="11398.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<li><strong>In reply to:</strong> <a href="11398.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
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
