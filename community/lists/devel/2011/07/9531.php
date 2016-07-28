<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 17:53:57 2011" -->
<!-- isoreceived="20110714215357" -->
<!-- sent="Thu, 14 Jul 2011 14:53:51 -0700" -->
<!-- isosent="20110714215351" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903" -->
<!-- id="4E1F656F.1030405_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9A81EAE8-273A-462A-8368-3C5A0C0F62D8_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 17:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9532.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9530.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>In reply to:</strong> <a href="9530.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the clarification.  My myopic sense of the issue came out of 
<br>
stumbling on this behavior due to MPI_Comm_spawn_multiple failing.
<br>
<p>I think *multiple* issues caused this problem to escape notice for so 
<br>
long.  One is that if the system thought it was oversubscribed, 
<br>
num_procs_alive was used uninitialized, which could potentially cause us 
<br>
to believe the file limit had been exceeded (whether or not that was the 
<br>
case, and all depending on the value of the uninitialized variable).
<br>
<p>That's a problem that can get us to the nested-loop problem.
<br>
<p>And the nested-loop problem would not necessarily lead to a 
<br>
user-observable error if the last process (the one we pick up due to the 
<br>
iteration variable getting screwed up) is happy getting the app that was 
<br>
intended for the first process.  When are we unhappy with this 
<br>
situation?  When MPI_Comm_spawn_multiple is called!  (For reasons I need 
<br>
to investigate further, we actually triggered the nested-loop problem 
<br>
often, but it caused problems only with that one MPI call.)
<br>
<p>Anyhow, thanks for the perspective on the issues.  Most of all, the code 
<br>
should be cleaner now and we don't need to worry about all the possible 
<br>
failure modes of the old code.
<br>
<p>On 7/14/2011 2:35 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just to clarify, as this commit message is somewhat misleading. The nested loop problem would cause a problem whenever the system had a specified limit (that we had sensed) on the number of files a process could have open, and that number would have been violated by starting another process. It had nothing to do with comm_spawn_multiple or any other specific MPI command, which is why it has passed MTT for so long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2011, at 2:10 PM, eugene_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: eugene
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-07-14 16:10:48 EDT (Thu, 14 Jul 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24903
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24903">https://svn.open-mpi.org/trac/ompi/changeset/24903</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Clean up the computations of num_procs_alive.  Do some code
</span><br>
<span class="quotelev2">&gt;&gt; refactoring to improve readability and to compute num_procs_alive
</span><br>
<span class="quotelev2">&gt;&gt; correctly and to remove the use of loop iteration variables for
</span><br>
<span class="quotelev2">&gt;&gt; two loops nested one inside another (causing MPI_Comm_spawn_multiple
</span><br>
<span class="quotelev2">&gt;&gt; to fail).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/mca/odls/base/odls_base_default_fns.c |    62 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 31 insertions(+), 31 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c	2011-07-14 16:10:48 EDT (Thu, 14 Jul 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2007-2010 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2007-2011 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2011      Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2011      Los Alamos National Security, LLC.
</span><br>
<span class="quotelev2">&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1240,6 +1240,28 @@
</span><br>
<span class="quotelev2">&gt;&gt;      time_is_up = true;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +static int compute_num_procs_alive(orte_jobid_t *job)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +    opal_list_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_odls_child_t *child;
</span><br>
<span class="quotelev2">&gt;&gt; +    int num_procs_alive = 0, match_job;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    for (item  = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; +         item != opal_list_get_end  (&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; +         item  = opal_list_get_next(item)) {
</span><br>
<span class="quotelev2">&gt;&gt; +        child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev2">&gt;&gt; +        if ( NULL != job ) {
</span><br>
<span class="quotelev2">&gt;&gt; +            match_job = ( OPAL_EQUAL == opal_dss.compare(job,&amp;(child-&gt;name-&gt;jobid), ORTE_JOBID) );
</span><br>
<span class="quotelev2">&gt;&gt; +        } else {
</span><br>
<span class="quotelev2">&gt;&gt; +            match_job = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +        if (child-&gt;alive || match_job) {
</span><br>
<span class="quotelev2">&gt;&gt; +            num_procs_alive++;
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    return num_procs_alive;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; int orte_odls_base_default_launch_local(orte_jobid_t job,
</span><br>
<span class="quotelev2">&gt;&gt;                                          orte_odls_base_fork_local_proc_fn_t fork_local)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1371,16 +1393,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          /* compute the number of local procs alive or about to be launched
</span><br>
<span class="quotelev2">&gt;&gt;           * as part of this job
</span><br>
<span class="quotelev2">&gt;&gt;           */
</span><br>
<span class="quotelev2">&gt;&gt; -        num_procs_alive = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        for (item = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; -             item != opal_list_get_end(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; -             item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev2">&gt;&gt; -            child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev2">&gt;&gt; -            if (child-&gt;alive ||
</span><br>
<span class="quotelev2">&gt;&gt; -                OPAL_EQUAL == opal_dss.compare(&amp;job,&amp;(child-&gt;name-&gt;jobid), ORTE_JOBID)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                num_procs_alive++;
</span><br>
<span class="quotelev2">&gt;&gt; -            }
</span><br>
<span class="quotelev2">&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt; +        num_procs_alive = compute_num_procs_alive(&amp;job);
</span><br>
<span class="quotelev2">&gt;&gt;          /* get the number of local processors */
</span><br>
<span class="quotelev2">&gt;&gt;          if (ORTE_SUCCESS != (rc = opal_paffinity_base_get_processor_info(&amp;num_processors))) {
</span><br>
<span class="quotelev2">&gt;&gt;              /* if we cannot find the number of local processors, we have no choice
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1409,6 +1422,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;      /* setup to report the proc state to the HNP */
</span><br>
<span class="quotelev2">&gt;&gt;      OBJ_CONSTRUCT(&amp;alert, opal_buffer_t);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    /* compute the num procs alive */
</span><br>
<span class="quotelev2">&gt;&gt; +    num_procs_alive = compute_num_procs_alive(NULL);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      for (j=0; j&lt;  jobdat-&gt;apps.size; j++) {
</span><br>
<span class="quotelev2">&gt;&gt;          if (NULL == (app = (orte_app_context_t*)opal_pointer_array_get_item(&amp;jobdat-&gt;apps, j))) {
</span><br>
<span class="quotelev2">&gt;&gt;              continue;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1438,15 +1454,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  /* wait */
</span><br>
<span class="quotelev2">&gt;&gt;                  ORTE_PROGRESSED_WAIT(time_is_up, 0, 1);
</span><br>
<span class="quotelev2">&gt;&gt;                  /* recompute the num procs alive */
</span><br>
<span class="quotelev2">&gt;&gt; -                num_procs_alive = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -                for (item = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; -                     item != opal_list_get_end(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; -                     item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                    child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev2">&gt;&gt; -                    if (child-&gt;alive) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        num_procs_alive++;
</span><br>
<span class="quotelev2">&gt;&gt; -                    }
</span><br>
<span class="quotelev2">&gt;&gt; -                }
</span><br>
<span class="quotelev2">&gt;&gt; +                num_procs_alive = compute_num_procs_alive(NULL);
</span><br>
<span class="quotelev2">&gt;&gt;                  /* see if we still have a problem */
</span><br>
<span class="quotelev2">&gt;&gt;                  limit = num_procs_alive + app-&gt;num_procs;
</span><br>
<span class="quotelev2">&gt;&gt;                  OPAL_OUTPUT_VERBOSE((10,  orte_odls_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1600,7 +1608,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;               */
</span><br>
<span class="quotelev2">&gt;&gt;              if (0&lt;  opal_sys_limits.num_files) {
</span><br>
<span class="quotelev2">&gt;&gt;                  int limit;
</span><br>
<span class="quotelev2">&gt;&gt; -                limit = (4*num_procs_alive)+6;
</span><br>
<span class="quotelev2">&gt;&gt; +                limit = 4*(num_procs_alive + app-&gt;num_procs)+6;
</span><br>
<span class="quotelev2">&gt;&gt;                  OPAL_OUTPUT_VERBOSE((10,  orte_odls_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt;                                       &quot;%s checking limit on file descriptors %d need %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                       ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1612,17 +1620,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;                      /* wait */
</span><br>
<span class="quotelev2">&gt;&gt;                      ORTE_PROGRESSED_WAIT(time_is_up, 0, 1);
</span><br>
<span class="quotelev2">&gt;&gt;                      /* recompute the num procs alive */
</span><br>
<span class="quotelev2">&gt;&gt; -                    num_procs_alive = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -                    for (item = opal_list_get_first(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; -                         item != opal_list_get_end(&amp;orte_local_children);
</span><br>
<span class="quotelev2">&gt;&gt; -                         item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev2">&gt;&gt; -                        child = (orte_odls_child_t*)item;
</span><br>
<span class="quotelev2">&gt;&gt; -                        if (child-&gt;alive) {
</span><br>
<span class="quotelev2">&gt;&gt; -                            num_procs_alive++;
</span><br>
<span class="quotelev2">&gt;&gt; -                        }
</span><br>
<span class="quotelev2">&gt;&gt; -                    }
</span><br>
<span class="quotelev2">&gt;&gt; +                    num_procs_alive = compute_num_procs_alive(NULL);
</span><br>
<span class="quotelev2">&gt;&gt;                      /* see if we still have a problem */
</span><br>
<span class="quotelev2">&gt;&gt; -                    limit = (4*num_procs_alive)+6;
</span><br>
<span class="quotelev2">&gt;&gt; +                    limit = 4*(num_procs_alive + app-&gt;num_procs)+6;
</span><br>
<span class="quotelev2">&gt;&gt;                      OPAL_OUTPUT_VERBOSE((10,  orte_odls_globals.output,
</span><br>
<span class="quotelev2">&gt;&gt;                                           &quot;%s rechecking limit on file descriptors %d need %d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                                           ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
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
<li><strong>Next message:</strong> <a href="9532.php">Yevgeny Kliteynik: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24830"</a>
<li><strong>Previous message:</strong> <a href="9530.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
<li><strong>In reply to:</strong> <a href="9530.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r24903"</a>
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
