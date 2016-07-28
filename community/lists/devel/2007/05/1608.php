<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 13:56:13 2007" -->
<!-- isoreceived="20070529175613" -->
<!-- sent="Tue, 29 May 2007 11:56:07 -0600" -->
<!-- isosent="20070529175607" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789" -->
<!-- id="C281C557.2E45%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200705291739.l4THdBMr015529_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 13:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Previous message:</strong> <a href="1607.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Reply:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, this operation
<br>
<p>&nbsp;&nbsp;&nbsp;if ( NULL == strncmp(appctx-&gt;app, OPAL_PATH_SEP, 1 )) {
<br>
<p>is not a legal one since OPAL_PATH_SEP is a character and not a
<br>
NULL-terminated string and thus generates the following warning:
<br>
<p>totalview.c: In function 'orte_totalview_init_after_spawn':
<br>
totalview.c:412: warning: comparison between pointer and integer
<br>
<p>Could you modify it?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 5/29/07 11:39 AM, &quot;Anya_at_[hidden]&quot; &lt;Anya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: Anya
</span><br>
<span class="quotelev1">&gt; Date: 2007-05-29 13:39:11 EDT (Tue, 29 May 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 14789
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14789">https://svn.open-mpi.org/trac/ompi/changeset/14789</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Ref Trac #1032; added suport for full path launching with TotalView
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orterun/totalview.c |    11 +++++++++--
</span><br>
<span class="quotelev1">&gt;    1 files changed, 9 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/tools/orterun/totalview.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/tools/orterun/totalview.c (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/tools/orterun/totalview.c 2007-05-29 13:39:11 EDT (Tue, 29 May
</span><br>
<span class="quotelev1">&gt; 2007)
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; + * Copyright (c) 2007      Sun Microsystems, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;   * 
</span><br>
<span class="quotelev1">&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -408,8 +409,14 @@
</span><br>
<span class="quotelev1">&gt;                  appctx = map-&gt;apps[proc-&gt;app_idx];
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  MPIR_proctable[i].host_name = strdup(node-&gt;nodename);
</span><br>
<span class="quotelev1">&gt; -                MPIR_proctable[i].executable_name =
</span><br>
<span class="quotelev1">&gt; -                    opal_os_path( false, appctx-&gt;cwd, appctx-&gt;app, NULL );
</span><br>
<span class="quotelev1">&gt; +                if ( NULL == strncmp(appctx-&gt;app, OPAL_PATH_SEP, 1 )) {
</span><br>
<span class="quotelev1">&gt; +                   MPIR_proctable[i].executable_name =
</span><br>
<span class="quotelev1">&gt; +                     opal_os_path( false, appctx-&gt;app, NULL );
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt; +                else {
</span><br>
<span class="quotelev1">&gt; +                   MPIR_proctable[i].executable_name =
</span><br>
<span class="quotelev1">&gt; +                     opal_os_path( true, appctx-&gt;app, NULL );
</span><br>
<span class="quotelev1">&gt; +                }
</span><br>
<span class="quotelev1">&gt;                  MPIR_proctable[i].pid = proc-&gt;pid;
</span><br>
<span class="quotelev1">&gt;                  i++;
</span><br>
<span class="quotelev1">&gt;              }
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
<li><strong>Next message:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Previous message:</strong> <a href="1607.php">Ralph Castain: "Re: [OMPI devel] ORTE registry patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Reply:</strong> <a href="1609.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
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
