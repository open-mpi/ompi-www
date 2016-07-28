<?
$subject_val = "[OMPI devel] New MCA param: odls_base_exit_status_77_fatal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 17:56:05 2012" -->
<!-- isoreceived="20120508215605" -->
<!-- sent="Tue, 8 May 2012 17:56:00 -0400" -->
<!-- isosent="20120508215600" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] New MCA param: odls_base_exit_status_77_fatal" -->
<!-- id="095DEBF2-10FE-4607-A3B2-9424ACE453F0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201205082149.q48Ln6uc021298_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] New MCA param: odls_base_exit_status_77_fatal<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 17:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10983.php">Jeff Squyres: "[OMPI devel] 1.6rc3 is out"</a>
<li><strong>Previous message:</strong> <a href="10981.php">Jeff Squyres (jsquyres): "[OMPI devel] The Architecture of Open Source Applications (vol 2)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This commit adds a new MTT param that people should set in their MTT testing environments:
<br>
<p>&nbsp;&nbsp;MCA odls: parameter &quot;odls_base_exit_status_77_fatal&quot; (current
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value: &lt;1&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whether to kill an entire job if any process in that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;job exits normally with a status of 77 (exit status 77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in the GNU testing standards means &quot;this test was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skipped&quot;, and therefore we wouldn't want to kill the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;entire job)
<br>
<p>It defaults to 1, meaning that -- per a prior telecom discussion and subsequent email discussion (and RFC?) -- whenever a process exits with a nonzero status, the entire job is killed (recall that we polled other MPI implementations and found that they all adhere to this behavior, too).
<br>
<p>However, in MTT, we have a lot of tests that adhere to the GNU standard of &quot;if I exit(77), I'm just indicating that I skipped this test.&quot;
<br>
<p>In this case, we don't want orte to kill the entire job, which MTT would interpret as a failure.  Hence, we added this MCA param for the special case of testing: setting it to 1 means that if any proc calls exit(77), we won't kill the entire job.
<br>
<p>In my MTT for the trunk, I now set this MCA param in my MPI Get section thusly:
<br>
<p>-----
<br>
[MPI get: ompi-nightly-trunk]
<br>
mpi_details = OMPI trunk
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
<br>
ompi_snapshot_version_file = &amp;getenv(&quot;HOME&quot;)/mtt-versions/trunk&amp;getenv(&quot;MTT_VERSION_FILE_SUFFIX&quot;).txt
<br>
<p># Set this MCA param to 0 so that ORTE will not kill a job when a                             
<br>
# process exits cleanly with status 77 (which indicates that the test                         
<br>
# was simply skipped).                                                                       
<br>
setenv = OMPI_MCA_odls_base_exit_status_77_fatal 0
<br>
-----
<br>
<p>This environment variable is then carried through to the subsequent MPI Install, Test Build, and Test Run phases that derive from this MPI Get.
<br>
<p><p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r26413
</span><br>
<span class="quotelev1">&gt; Date: May 8, 2012 5:49:06 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2012-05-08 17:49:05 EDT (Tue, 08 May 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26413
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26413">https://svn.open-mpi.org/trac/ompi/changeset/26413</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; ORTE defaults to killing the entire job when any process exits with a
</span><br>
<span class="quotelev1">&gt; nonzero status (we polled other MPI implementations since one one in
</span><br>
<span class="quotelev1">&gt; the OMPI community had a concrete opinion on what behavior to do here
</span><br>
<span class="quotelev1">&gt; -- all other MPI's seem to adhere to this behavior, too).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit adds an MCA parameter that allows us to tell ORTE to
</span><br>
<span class="quotelev1">&gt; ''not'' kill jobs when a process exits with a status of 77, meaning
</span><br>
<span class="quotelev1">&gt; the GNU testing standard of &quot;this test was skipped&quot;.  In all the OMPI
</span><br>
<span class="quotelev1">&gt; tests, all procs will either return 77 or not.  So if they all return
</span><br>
<span class="quotelev1">&gt; 77, mpirun won't consider it an error, but will still return an exit
</span><br>
<span class="quotelev1">&gt; status of 77 (so that MTT can know that the test was cleanly skipped).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c |    13 ++++++++++++-                           
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_open.c        |     7 ++++++-                                 
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_private.h          |     4 +++-                                    
</span><br>
<span class="quotelev1">&gt;   3 files changed, 21 insertions(+), 3 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_default_fns.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_default_fns.c	2012-05-08 17:49:05 EDT (Tue, 08 May 2012)
</span><br>
<span class="quotelev1">&gt; @@ -13,7 +13,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011      Oak Ridge National Labs.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2011      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2011-2012 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  * 
</span><br>
<span class="quotelev1">&gt;  * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -2073,6 +2073,17 @@
</span><br>
<span class="quotelev1">&gt;             state = ORTE_PROC_STATE_CALLED_ABORT;
</span><br>
<span class="quotelev1">&gt;             goto MOVEON;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        /* If the exit status of this proc was 77 and the
</span><br>
<span class="quotelev1">&gt; +           odls_base_exit_status_77_fatal MCA param was set to false,
</span><br>
<span class="quotelev1">&gt; +           then don't kill the whole job.  The rationale is that the
</span><br>
<span class="quotelev1">&gt; +           GNU testing standards specify that an exit status of 77
</span><br>
<span class="quotelev1">&gt; +           indicates that a test was skipped -- it should not be
</span><br>
<span class="quotelev1">&gt; +           treated as a fatal error (to the whole job). */
</span><br>
<span class="quotelev1">&gt; +        if (!orte_odls_globals.is_exit_status_77_fatal &amp;&amp; 77 == proc-&gt;exit_code) {
</span><br>
<span class="quotelev1">&gt; +            state = ORTE_PROC_STATE_WAITPID_FIRED;
</span><br>
<span class="quotelev1">&gt; +            goto MOVEON;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* check to see if a sync was required and if it was received */
</span><br>
<span class="quotelev1">&gt;         if (proc-&gt;registered) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_base_open.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_base_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_base_open.c	2012-05-08 17:49:05 EDT (Tue, 08 May 2012)
</span><br>
<span class="quotelev1">&gt; @@ -10,7 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2010-2011 Oracle and/or its affiliates.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2011-2012 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011-2012 Los Alamos National Security, LLC.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; @@ -103,6 +103,11 @@
</span><br>
<span class="quotelev1">&gt;                                 &quot;Time to wait for a process to die after issuing a kill signal to it&quot;,
</span><br>
<span class="quotelev1">&gt;                                 false, false, 1, &amp;orte_odls_globals.timeout_before_sigkill);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int_name(&quot;odls&quot;, &quot;base_exit_status_77_fatal&quot;,
</span><br>
<span class="quotelev1">&gt; +                                &quot;Whether to kill an entire job if any process in that job exits normally with a status of 77 (exit status 77 in the GNU testing standards means \&quot;this test was skipped\&quot;, and therefore we wouldn't want to kill the entire job)&quot;,
</span><br>
<span class="quotelev1">&gt; +                                false, false, 1, &amp;i);
</span><br>
<span class="quotelev1">&gt; +    orte_odls_globals.is_exit_status_77_fatal = OPAL_INT_TO_BOOL(i);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     /* initialize the global array of local children */
</span><br>
<span class="quotelev1">&gt;     orte_local_children = OBJ_NEW(opal_pointer_array_t);
</span><br>
<span class="quotelev1">&gt;     if (OPAL_SUCCESS != (rc = opal_pointer_array_init(orte_local_children,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/odls/base/odls_private.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/odls/base/odls_private.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/odls/base/odls_private.h	2012-05-08 17:49:05 EDT (Tue, 08 May 2012)
</span><br>
<span class="quotelev1">&gt; @@ -9,7 +9,7 @@
</span><br>
<span class="quotelev1">&gt;  *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; - * Copyright (c) 2011 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2011-2012 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  * Copyright (c) 2011      Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev1">&gt;  *                         reserved. 
</span><br>
<span class="quotelev1">&gt;  * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; @@ -62,6 +62,8 @@
</span><br>
<span class="quotelev1">&gt;     opal_list_t xterm_ranks;
</span><br>
<span class="quotelev1">&gt;     /* the xterm cmd to be used */
</span><br>
<span class="quotelev1">&gt;     char **xtermcmd;
</span><br>
<span class="quotelev1">&gt; +    /* whether to consider an exit code of 77 fatal to a job or not */
</span><br>
<span class="quotelev1">&gt; +    bool is_exit_status_77_fatal;
</span><br>
<span class="quotelev1">&gt; } orte_odls_globals_t;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC extern orte_odls_globals_t orte_odls_globals;
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
<li><strong>Next message:</strong> <a href="10983.php">Jeff Squyres: "[OMPI devel] 1.6rc3 is out"</a>
<li><strong>Previous message:</strong> <a href="10981.php">Jeff Squyres (jsquyres): "[OMPI devel] The Architecture of Open Source Applications (vol 2)"</a>
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
