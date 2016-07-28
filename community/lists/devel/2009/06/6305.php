<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 14:05:29 2009" -->
<!-- isoreceived="20090622180529" -->
<!-- sent="Mon, 22 Jun 2009 12:05:22 -0600" -->
<!-- isosent="20090622180522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480" -->
<!-- id="71d2d8cc0906221105h27233552j1fdfde7257329128_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A3FBB6E.1050204_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-22 14:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - now that is easily fixed, without breaking the support for everyone
<br>
else. I'll commit the fix right away.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Mon, Jun 22, 2009 at 11:12 AM, Iain Bason &lt;Iain.Bason_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but look at orte/mca/plm/rsh/plm_rsh_module.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* ensure that only the ssh plm is selected on the remote daemon */
</span><br>
<span class="quotelev2">&gt;&gt;    var = mca_base_param_environ_variable(&quot;plm&quot;, NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;    opal_setenv(var, &quot;rsh&quot;, true, &amp;env);
</span><br>
<span class="quotelev2">&gt;&gt;    free(var);
</span><br>
<span class="quotelev2">&gt;&gt;   This is done in &quot;ssh_child&quot;, right before we fork_exec the ssh command
</span><br>
<span class="quotelev2">&gt;&gt; to launch the remote daemon. This is why slave spawn works, for example.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My ssh does not preserve environment variables:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash-3.2$ export MY_VERY_OWN_ENVIRONMENT_VARIABLE=yes
</span><br>
<span class="quotelev1">&gt; bash-3.2$ ssh cubbie env | grep MY_VERY_OWN
</span><br>
<span class="quotelev1">&gt; WARNING: This is a restricted access server. If you do not have explicit
</span><br>
<span class="quotelev1">&gt; permission to access this server, please disconnect immediately.
</span><br>
<span class="quotelev1">&gt; Unauthorized access to this system is considered gross misconduct and may
</span><br>
<span class="quotelev1">&gt; result in disciplinary action, including revocation of SWAN access
</span><br>
<span class="quotelev1">&gt; privileges, immediate termination of employment, and/or prosecution to the
</span><br>
<span class="quotelev1">&gt; fullest extent of the law.
</span><br>
<span class="quotelev1">&gt; bash-3.2$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rsh man page explicitly states that the local environment is not passed
</span><br>
<span class="quotelev1">&gt; to the remote shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't checked qrsh.  Maybe it works with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I agree that tree_spawn doesn't seem to work right now, but it is not due
</span><br>
<span class="quotelev2">&gt;&gt; to the plm not being selected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was for me.  I don't know whether it is because your rsh/ssh work
</span><br>
<span class="quotelev1">&gt; differently, or for some other reason, but there is no question that my tree
</span><br>
<span class="quotelev1">&gt; spawn failed because no PLM was loaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There are other factors involved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other factors that I came across were:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * I didn't have my .ssh/config file set up to forward
</span><br>
<span class="quotelev1">&gt;     authentication.  I added a -A flag to the ssh command in
</span><br>
<span class="quotelev1">&gt;     plm_base_rsh_support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * In plm_rsh_module.c:setup_launch, a NULL orted_cmd made asprintf
</span><br>
<span class="quotelev1">&gt;     crash.  I used (orted_cmd == NULL ? &quot;&quot; : orted_cmd) in the call to
</span><br>
<span class="quotelev1">&gt;     asprintf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once I fixed those, tree spawning worked for me.  (I believe you mentioned
</span><br>
<span class="quotelev1">&gt; a race condition in another conversation.  I haven't run into that.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6306.php">Mike Dubman: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6304.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6303.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21480"</a>
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
