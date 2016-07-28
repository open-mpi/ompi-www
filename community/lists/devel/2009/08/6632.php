<?
$subject_val = "Re: [OMPI devel] Too many fds per a.out in 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 20:13:56 2009" -->
<!-- isoreceived="20090815001356" -->
<!-- sent="Fri, 14 Aug 2009 18:13:49 -0600" -->
<!-- isosent="20090815001349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Too many fds per a.out in 1.3" -->
<!-- id="71d2d8cc0908141713q4d646d68mffada29e0a3ff320_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A85D5F7.3080904_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Too many fds per a.out in 1.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 20:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6633.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6631.php">Rolf Vandevaart: "[OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>In reply to:</strong> <a href="6631.php">Rolf Vandevaart: "[OMPI devel] Too many fds per a.out in 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, that fix was done because we were leaving fd's unclosed, and thus
<br>
continually consuming them. There is no reason not to bring it over, though
<br>
it may take some cleanup to apply cleanly to the 1.3 branch. The question of
<br>
bringing it to 1.3 was simply overlooked when it was done.
<br>
<p>Ralph
<br>
<p><p>On Fri, Aug 14, 2009 at 3:24 PM, Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Ralph:
</span><br>
<span class="quotelev1">&gt; (Or anyone else...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As was reported on the user's list, we are consuming about 12 fds per
</span><br>
<span class="quotelev1">&gt; a.out.  I have reproduced this with the 1.3 branch.  I also have run with
</span><br>
<span class="quotelev1">&gt; the trunk, and we only consume about 6 fds per a.out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From what I can tell, in the 1.3 branch we are opening 3 pipes that we do
</span><br>
<span class="quotelev1">&gt; not need.  I have traced this to the fact that we call
</span><br>
<span class="quotelev1">&gt; orte_iof_base_setup_prefork() twice for each a.out that we fork/exec. The
</span><br>
<span class="quotelev1">&gt; calls occur from odls_default_fork_local_proc().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the trunk, we only call the function once.  It looks like we made a
</span><br>
<span class="quotelev1">&gt; change in the trunk version of odls_default_module.c 12 months ago that
</span><br>
<span class="quotelev1">&gt; change the way the trunk behaved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/19275/trunk/orte/mca/odls/default/odls_default_module.c">https://svn.open-mpi.org/trac/ompi/changeset/19275/trunk/orte/mca/odls/default/odls_default_module.c</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we fix this problem, then we can reduce the number of fds per a.out from
</span><br>
<span class="quotelev1">&gt; 12 to 6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking for some thoughts on this issue as the changeset I refer to
</span><br>
<span class="quotelev1">&gt; was done to fix other issues.  There is no mention about opening pipes
</span><br>
<span class="quotelev1">&gt; unnecessarily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6633.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6631.php">Rolf Vandevaart: "[OMPI devel] Too many fds per a.out in 1.3"</a>
<li><strong>In reply to:</strong> <a href="6631.php">Rolf Vandevaart: "[OMPI devel] Too many fds per a.out in 1.3"</a>
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
