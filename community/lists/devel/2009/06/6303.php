<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 13:12:41 2009" -->
<!-- isoreceived="20090622171241" -->
<!-- sent="Mon, 22 Jun 2009 13:12:14 -0400" -->
<!-- isosent="20090622171214" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480" -->
<!-- id="4A3FBB6E.1050204_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0906220903t6aee3c94g2949deeabac5ea0f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 13:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6300.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yes, but look at orte/mca/plm/rsh/plm_rsh_module.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;     /* ensure that only the ssh plm is selected on the remote daemon */
</span><br>
<span class="quotelev1">&gt;     var = mca_base_param_environ_variable(&quot;plm&quot;, NULL, NULL);
</span><br>
<span class="quotelev1">&gt;     opal_setenv(var, &quot;rsh&quot;, true, &amp;env);
</span><br>
<span class="quotelev1">&gt;     free(var);
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; This is done in &quot;ssh_child&quot;, right before we fork_exec the ssh command 
</span><br>
<span class="quotelev1">&gt; to launch the remote daemon. This is why slave spawn works, for example.
</span><br>
<p>My ssh does not preserve environment variables:
<br>
<p>bash-3.2$ export MY_VERY_OWN_ENVIRONMENT_VARIABLE=yes
<br>
bash-3.2$ ssh cubbie env | grep MY_VERY_OWN
<br>
WARNING: This is a restricted access server. If you do not have explicit 
<br>
permission to access this server, please disconnect immediately. 
<br>
Unauthorized access to this system is considered gross misconduct and 
<br>
may result in disciplinary action, including revocation of SWAN access 
<br>
privileges, immediate termination of employment, and/or prosecution to 
<br>
the fullest extent of the law.
<br>
bash-3.2$
<br>
<p>The rsh man page explicitly states that the local environment is not 
<br>
passed to the remote shell.
<br>
<p>I haven't checked qrsh.  Maybe it works with that.
<br>
<p><span class="quotelev1">&gt; I agree that tree_spawn doesn't seem to work right now, but it is not 
</span><br>
<span class="quotelev1">&gt; due to the plm not being selected. 
</span><br>
<p>It was for me.  I don't know whether it is because your rsh/ssh work 
<br>
differently, or for some other reason, but there is no question that my 
<br>
tree spawn failed because no PLM was loaded.
<br>
<p><span class="quotelev1">&gt; There are other factors involved.
</span><br>
<p>The other factors that I came across were:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* I didn't have my .ssh/config file set up to forward
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;authentication.  I added a -A flag to the ssh command in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;plm_base_rsh_support.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* In plm_rsh_module.c:setup_launch, a NULL orted_cmd made asprintf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crash.  I used (orted_cmd == NULL ? &quot;&quot; : orted_cmd) in the call to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf.
<br>
<p><p>Once I fixed those, tree spawning worked for me.  (I believe you 
<br>
mentioned a race condition in another conversation.  I haven't run into 
<br>
that.)
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6302.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6300.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<li><strong>Reply:</strong> <a href="6305.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
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
