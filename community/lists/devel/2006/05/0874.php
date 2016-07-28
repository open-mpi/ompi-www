<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 11 09:23:03 2006" -->
<!-- isoreceived="20060511132303" -->
<!-- sent="Thu, 11 May 2006 09:22:58 -0400" -->
<!-- isosent="20060511132258" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r9892" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7FB975_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] [OMPI svn-full] svn:open-mpi r9892" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-11 09:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Edgar Gabriel: "Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
##@$%#@$%!!!
<br>
<p>I thought we got all of these -- thanks Gleb...
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: svn-full-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:svn-full-bounces_at_[hidden]] On Behalf Of gleb_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 11, 2006 9:16 AM
</span><br>
<span class="quotelev1">&gt; To: svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r9892
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: gleb
</span><br>
<span class="quotelev1">&gt; Date: 2006-05-11 09:15:48 EDT (Thu, 11 May 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 9892
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/pls/fork/pls_fork_module.c
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/pls/slurm/pls_slurm_module.c
</span><br>
<span class="quotelev1">&gt;    trunk/orte/mca/pls/tm/pls_tm_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; remove newline from environment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/pls/fork/pls_fork_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/pls/fork/pls_fork_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/pls/fork/pls_fork_module.c	2006-05-11 
</span><br>
<span class="quotelev1">&gt; 09:15:48 EDT (Thu, 11 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -324,7 +324,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              /* Reset PATH */
</span><br>
<span class="quotelev1">&gt;              if (0 == strncmp(&quot;PATH=&quot;, context-&gt;env[i], 5)) {
</span><br>
<span class="quotelev1">&gt; -                asprintf(&amp;newenv, &quot;%s/bin:%s\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                asprintf(&amp;newenv, &quot;%s/bin:%s&quot;,
</span><br>
<span class="quotelev1">&gt;                           context-&gt;prefix_dir, context-&gt;env[i] + 5);
</span><br>
<span class="quotelev1">&gt;                  opal_setenv(&quot;PATH&quot;, newenv, true, &amp;environ_copy);
</span><br>
<span class="quotelev1">&gt;                  free(newenv);
</span><br>
<span class="quotelev1">&gt; @@ -332,7 +332,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              /* Reset LD_LIBRARY_PATH */
</span><br>
<span class="quotelev1">&gt;              else if (0 == strncmp(&quot;LD_LIBRARY_PATH=&quot;, 
</span><br>
<span class="quotelev1">&gt; context-&gt;env[i], 16)) {
</span><br>
<span class="quotelev1">&gt; -                asprintf(&amp;newenv, &quot;%s/lib:%s\n&quot;,
</span><br>
<span class="quotelev1">&gt; +                asprintf(&amp;newenv, &quot;%s/lib:%s&quot;,
</span><br>
<span class="quotelev1">&gt;                           context-&gt;prefix_dir, context-&gt;env[i] + 16);
</span><br>
<span class="quotelev1">&gt;                  opal_setenv(&quot;LD_LIBRARY_PATH&quot;, newenv, true, 
</span><br>
<span class="quotelev1">&gt; &amp;environ_copy);
</span><br>
<span class="quotelev1">&gt;                  free(newenv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/pls/slurm/pls_slurm_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/pls/slurm/pls_slurm_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/pls/slurm/pls_slurm_module.c	
</span><br>
<span class="quotelev1">&gt; 2006-05-11 09:15:48 EDT (Thu, 11 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -471,7 +471,7 @@
</span><br>
<span class="quotelev1">&gt;              /* Reset PATH */
</span><br>
<span class="quotelev1">&gt;              oldenv = getenv(&quot;PATH&quot;);
</span><br>
<span class="quotelev1">&gt;              if (NULL != oldenv) {
</span><br>
<span class="quotelev1">&gt; -                asprintf(&amp;newenv, &quot;%s/bin:%s\n&quot;, prefix, oldenv);
</span><br>
<span class="quotelev1">&gt; +                asprintf(&amp;newenv, &quot;%s/bin:%s&quot;, prefix, oldenv);
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  asprintf(&amp;newenv, &quot;%s/bin&quot;, prefix);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; @@ -484,7 +484,7 @@
</span><br>
<span class="quotelev1">&gt;              /* Reset LD_LIBRARY_PATH */
</span><br>
<span class="quotelev1">&gt;              oldenv = getenv(&quot;LD_LIBRARY_PATH&quot;);
</span><br>
<span class="quotelev1">&gt;              if (NULL != oldenv) {
</span><br>
<span class="quotelev1">&gt; -                asprintf(&amp;newenv, &quot;%s/lib:%s\n&quot;, prefix, oldenv);
</span><br>
<span class="quotelev1">&gt; +                asprintf(&amp;newenv, &quot;%s/lib:%s&quot;, prefix, oldenv);
</span><br>
<span class="quotelev1">&gt;              } else {
</span><br>
<span class="quotelev1">&gt;                  asprintf(&amp;newenv, &quot;%s/lib&quot;, prefix);
</span><br>
<span class="quotelev1">&gt;              }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/pls/tm/pls_tm_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================
</span><br>
<span class="quotelev1">&gt; ================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/pls/tm/pls_tm_module.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/pls/tm/pls_tm_module.c	2006-05-11 
</span><br>
<span class="quotelev1">&gt; 09:15:48 EDT (Thu, 11 May 2006)
</span><br>
<span class="quotelev1">&gt; @@ -311,7 +311,7 @@
</span><br>
<span class="quotelev1">&gt;              for (i = 0; NULL != env &amp;&amp; NULL != env[i]; ++i) {
</span><br>
<span class="quotelev1">&gt;                  /* Reset PATH */
</span><br>
<span class="quotelev1">&gt;                  if (0 == strncmp(&quot;PATH=&quot;, env[i], 5)) {
</span><br>
<span class="quotelev1">&gt; -                    asprintf(&amp;newenv, &quot;%s/bin:%s\n&quot;, 
</span><br>
<span class="quotelev1">&gt; +                    asprintf(&amp;newenv, &quot;%s/bin:%s&quot;, 
</span><br>
<span class="quotelev1">&gt;                               cur_prefix, env[i] + 5);
</span><br>
<span class="quotelev1">&gt;                      if (mca_pls_tm_component.debug) {
</span><br>
<span class="quotelev1">&gt;                          opal_output(0, &quot;pls:tm: resetting PATH: %s&quot;, 
</span><br>
<span class="quotelev1">&gt; @@ -323,7 +323,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                  /* Reset LD_LIBRARY_PATH */
</span><br>
<span class="quotelev1">&gt;                  else if (0 == strncmp(&quot;LD_LIBRARY_PATH=&quot;, 
</span><br>
<span class="quotelev1">&gt; env[i], 16)) {
</span><br>
<span class="quotelev1">&gt; -                    asprintf(&amp;newenv, &quot;%s/lib:%s\n&quot;, 
</span><br>
<span class="quotelev1">&gt; +                    asprintf(&amp;newenv, &quot;%s/lib:%s&quot;, 
</span><br>
<span class="quotelev1">&gt;                               cur_prefix, env[i] + 16);
</span><br>
<span class="quotelev1">&gt;                      if (mca_pls_tm_component.debug) {
</span><br>
<span class="quotelev1">&gt;                          opal_output(0, &quot;pls:tm: resetting 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH: %s&quot;, 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Edgar Gabriel: "Re: [OMPI devel] Repost: MPI_Comm_spawn_multiple() and	MPI_ERRORCODES_IGNORE"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Brian Barrett: "Re: [OMPI devel] Non-threaded test fails with thread-safe library"</a>
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
