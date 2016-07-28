<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 17:36:00 2011" -->
<!-- isoreceived="20110714213600" -->
<!-- sent="Thu, 14 Jul 2011 15:35:52 -0600" -->
<!-- isosent="20110714213552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903" -->
<!-- id="9A81EAE8-273A-462A-8368-3C5A0C0F62D8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201107142010.p6EKAmQN011291_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 17:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9531.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>Previous message:</strong> <a href="9529.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9531.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>Reply:</strong> <a href="9531.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify, as this commit message is somewhat misleading. The nested loop problem would cause a problem whenever the system had a specified limit (that we had sensed) on the number of files a process could have open, and that number would have been violated by starting another process. It had nothing to do with comm_spawn_multiple or any other specific MPI command, which is why it has passed MTT for so long.
<br>
<p><p>On Jul 14, 2011, at 2:10 PM, eugene_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: eugene
</span><br>
<span class="quotelev1">&gt; Date: 2011-07-14 16:10:48 EDT (Thu, 14 Jul 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24903
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24903">https://svn.open-mpi.org/trac/ompi/changeset/24903</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Clean up the computations of num_procs_alive.  Do some code
</span><br>
<span class="quotelev1">&gt; refactoring to improve readability and to compute num_procs_alive
</span><br>
<span class="quotelev1">&gt; correctly and to remove the use of loop iteration variables for
</span><br>
<span class="quotelev1">&gt; two loops nested one inside another (causing MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev1">&gt; to fail).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c |    62 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev1">&gt;   1 files changed, 31 insertions(+), 31 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c	2011-07-14 16:10:48 EDT (Thu, 14 Jul 2011)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2007-2010 Oracle and/or its affiliates.  All rights reserved. 
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007-2011 Oracle and/or its affiliates.  All rights reserved. 
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011      Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011      Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; @@ -1240,6 +1240,28 @@
</span><br>
<span class="quotelev1">&gt;     time_is_up = true;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +static int compute_num_procs_alive(orte_jobid_t *job)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +    opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt; +    orte_odls_child_t *child;
</span><br>
<span class="quotelev1">&gt; +    int num_procs_alive = 0, match_job;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (item  = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; +         item != opal_list_get_end  (&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; +         item  = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; +        child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev1">&gt; +        if ( NULL != job ) {
</span><br>
<span class="quotelev1">&gt; +            match_job = ( OPAL_EQUAL == opal_dss.compare(job, &amp;(child-&gt;name-&gt;jobid), ORTE_JOBID) );
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            match_job = 0;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +        if (child-&gt;alive || match_job) {
</span><br>
<span class="quotelev1">&gt; +            num_procs_alive++;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    return num_procs_alive;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; int orte_odls_base_default_launch_local(orte_jobid_t job,
</span><br>
<span class="quotelev1">&gt;                                         orte_odls_base_fork_local_proc_fn_t fork_local)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; @@ -1371,16 +1393,7 @@
</span><br>
<span class="quotelev1">&gt;         /* compute the number of local procs alive or about to be launched
</span><br>
<span class="quotelev1">&gt;          * as part of this job
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt; -        num_procs_alive = 0;
</span><br>
<span class="quotelev1">&gt; -        for (item = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; -             item != opal_list_get_end(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; -             item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; -            child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev1">&gt; -            if (child-&gt;alive ||
</span><br>
<span class="quotelev1">&gt; -                OPAL_EQUAL == opal_dss.compare(&amp;job, &amp;(child-&gt;name-&gt;jobid), ORTE_JOBID)) {
</span><br>
<span class="quotelev1">&gt; -                num_procs_alive++;
</span><br>
<span class="quotelev1">&gt; -            }
</span><br>
<span class="quotelev1">&gt; -        }
</span><br>
<span class="quotelev1">&gt; +        num_procs_alive = compute_num_procs_alive(&amp;job);
</span><br>
<span class="quotelev1">&gt;         /* get the number of local processors */
</span><br>
<span class="quotelev1">&gt;         if (ORTE_SUCCESS != (rc = opal_paffinity_base_get_processor_info(&amp;num_processors))) {
</span><br>
<span class="quotelev1">&gt;             /* if we cannot find the number of local processors, we have no choice
</span><br>
<span class="quotelev1">&gt; @@ -1409,6 +1422,9 @@
</span><br>
<span class="quotelev1">&gt;     /* setup to report the proc state to the HNP */
</span><br>
<span class="quotelev1">&gt;     OBJ_CONSTRUCT(&amp;alert, opal_buffer_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    /* compute the num procs alive */
</span><br>
<span class="quotelev1">&gt; +    num_procs_alive = compute_num_procs_alive(NULL);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     for (j=0; j &lt; jobdat-&gt;apps.size; j++) {
</span><br>
<span class="quotelev1">&gt;         if (NULL == (app = (orte_app_context_t*)opal_pointer_array_get_item(&amp;jobdat-&gt;apps, j))) {
</span><br>
<span class="quotelev1">&gt;             continue;
</span><br>
<span class="quotelev1">&gt; @@ -1438,15 +1454,7 @@
</span><br>
<span class="quotelev1">&gt;                 /* wait */
</span><br>
<span class="quotelev1">&gt;                 ORTE_PROGRESSED_WAIT(time_is_up, 0, 1);
</span><br>
<span class="quotelev1">&gt;                 /* recompute the num procs alive */
</span><br>
<span class="quotelev1">&gt; -                num_procs_alive = 0;
</span><br>
<span class="quotelev1">&gt; -                for (item = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; -                     item != opal_list_get_end(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; -                     item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; -                    child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev1">&gt; -                    if (child-&gt;alive) {
</span><br>
<span class="quotelev1">&gt; -                        num_procs_alive++;
</span><br>
<span class="quotelev1">&gt; -                    }
</span><br>
<span class="quotelev1">&gt; -                }
</span><br>
<span class="quotelev1">&gt; +                num_procs_alive = compute_num_procs_alive(NULL);
</span><br>
<span class="quotelev1">&gt;                 /* see if we still have a problem */
</span><br>
<span class="quotelev1">&gt;                 limit = num_procs_alive + app-&gt;num_procs;
</span><br>
<span class="quotelev1">&gt;                 OPAL_OUTPUT_VERBOSE((10,  orte_odls_globals.output,
</span><br>
<span class="quotelev1">&gt; @@ -1600,7 +1608,7 @@
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt;             if (0 &lt; opal_sys_limits.num_files) {
</span><br>
<span class="quotelev1">&gt;                 int limit;
</span><br>
<span class="quotelev1">&gt; -                limit = (4*num_procs_alive)+6;
</span><br>
<span class="quotelev1">&gt; +                limit = 4*(num_procs_alive + app-&gt;num_procs)+6;
</span><br>
<span class="quotelev1">&gt;                 OPAL_OUTPUT_VERBOSE((10,  orte_odls_globals.output,
</span><br>
<span class="quotelev1">&gt;                                      &quot;%s checking limit on file descriptors %d need %d&quot;,
</span><br>
<span class="quotelev1">&gt;                                      ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; @@ -1612,17 +1620,9 @@
</span><br>
<span class="quotelev1">&gt;                     /* wait */
</span><br>
<span class="quotelev1">&gt;                     ORTE_PROGRESSED_WAIT(time_is_up, 0, 1);
</span><br>
<span class="quotelev1">&gt;                     /* recompute the num procs alive */
</span><br>
<span class="quotelev1">&gt; -                    num_procs_alive = 0;
</span><br>
<span class="quotelev1">&gt; -                    for (item = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; -                         item != opal_list_get_end(&amp;orte_local_children);
</span><br>
<span class="quotelev1">&gt; -                         item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt; -                        child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev1">&gt; -                        if (child-&gt;alive) {
</span><br>
<span class="quotelev1">&gt; -                            num_procs_alive++;
</span><br>
<span class="quotelev1">&gt; -                        }
</span><br>
<span class="quotelev1">&gt; -                    }
</span><br>
<span class="quotelev1">&gt; +                    num_procs_alive = compute_num_procs_alive(NULL);
</span><br>
<span class="quotelev1">&gt;                     /* see if we still have a problem */
</span><br>
<span class="quotelev1">&gt; -                    limit = (4*num_procs_alive)+6;
</span><br>
<span class="quotelev1">&gt; +                    limit = 4*(num_procs_alive + app-&gt;num_procs)+6;
</span><br>
<span class="quotelev1">&gt;                     OPAL_OUTPUT_VERBOSE((10,  orte_odls_globals.output,
</span><br>
<span class="quotelev1">&gt;                                          &quot;%s rechecking limit on file descriptors %d need %d&quot;,
</span><br>
<span class="quotelev1">&gt;                                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
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
<li><strong>Next message:</strong> <a href="9531.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>Previous message:</strong> <a href="9529.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9531.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>Reply:</strong> <a href="9531.php">Eugene Loh: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
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
