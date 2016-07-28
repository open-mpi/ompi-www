<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 14:01:03 2007" -->
<!-- isoreceived="20070529180103" -->
<!-- sent="Tue, 29 May 2007 12:00:56 -0600" -->
<!-- isosent="20070529180056" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789" -->
<!-- id="C281C678.2E47%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C281C557.2E45%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-29 14:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1610.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1608.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>In reply to:</strong> <a href="1608.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1611.php">Anya Tatashina: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Reply:</strong> <a href="1611.php">Anya Tatashina: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies - I reviewed the opal code and see that it wasn't what I
<br>
remembered. The objection here is that strncmp returns an int, not a
<br>
pointer, and hence the NULL is bothering the compiler.
<br>
<p>I'll submit the fix
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 5/29/07 11:56 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...well, this operation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ( NULL == strncmp(appctx-&gt;app, OPAL_PATH_SEP, 1 )) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is not a legal one since OPAL_PATH_SEP is a character and not a
</span><br>
<span class="quotelev1">&gt; NULL-terminated string and thus generates the following warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; totalview.c: In function 'orte_totalview_init_after_spawn':
</span><br>
<span class="quotelev1">&gt; totalview.c:412: warning: comparison between pointer and integer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you modify it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/29/07 11:39 AM, &quot;Anya_at_[hidden]&quot; &lt;Anya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: Anya
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-05-29 13:39:11 EDT (Tue, 29 May 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 14789
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/14789">https://svn.open-mpi.org/trac/ompi/changeset/14789</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Ref Trac #1032; added suport for full path launching with TotalView
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/orte/tools/orterun/totalview.c |    11 +++++++++--
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 9 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/orte/tools/orterun/totalview.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
=============================================================================&gt;&gt;
<br>
=
<br>
<span class="quotelev2">&gt;&gt; --- trunk/orte/tools/orterun/totalview.c (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/orte/tools/orterun/totalview.c 2007-05-29 13:39:11 EDT (Tue, 29 May
</span><br>
<span class="quotelev2">&gt;&gt; 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;   *                         University of Stuttgart.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2007      Sun Microsystems, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;   * 
</span><br>
<span class="quotelev2">&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -408,8 +409,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  appctx = map-&gt;apps[proc-&gt;app_idx];
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt;                  MPIR_proctable[i].host_name = strdup(node-&gt;nodename);
</span><br>
<span class="quotelev2">&gt;&gt; -                MPIR_proctable[i].executable_name =
</span><br>
<span class="quotelev2">&gt;&gt; -                    opal_os_path( false, appctx-&gt;cwd, appctx-&gt;app, NULL );
</span><br>
<span class="quotelev2">&gt;&gt; +                if ( NULL == strncmp(appctx-&gt;app, OPAL_PATH_SEP, 1 )) {
</span><br>
<span class="quotelev2">&gt;&gt; +                   MPIR_proctable[i].executable_name =
</span><br>
<span class="quotelev2">&gt;&gt; +                     opal_os_path( false, appctx-&gt;app, NULL );
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt; +                else {
</span><br>
<span class="quotelev2">&gt;&gt; +                   MPIR_proctable[i].executable_name =
</span><br>
<span class="quotelev2">&gt;&gt; +                     opal_os_path( true, appctx-&gt;app, NULL );
</span><br>
<span class="quotelev2">&gt;&gt; +                }
</span><br>
<span class="quotelev2">&gt;&gt;                  MPIR_proctable[i].pid = proc-&gt;pid;
</span><br>
<span class="quotelev2">&gt;&gt;                  i++;
</span><br>
<span class="quotelev2">&gt;&gt;              }
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
<li><strong>Next message:</strong> <a href="1610.php">Brian Barrett: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>Previous message:</strong> <a href="1608.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>In reply to:</strong> <a href="1608.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1611.php">Anya Tatashina: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
<li><strong>Reply:</strong> <a href="1611.php">Anya Tatashina: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14789"</a>
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
