<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 08:52:34 2014" -->
<!-- isoreceived="20140724125234" -->
<!-- sent="Thu, 24 Jul 2014 14:52:32 +0200 (CEST)" -->
<!-- isosent="20140724125232" -->
<!-- name="Peter Breitenlohner" -->
<!-- email="peb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="alpine.LNX.2.00.1407241442340.2271_at_pcl321.mppmu.mpg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAO1KyadbV3NQoPG5NYG=qeQ6Z95mFRZgczHrnpfttSXbyYFvA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Peter Breitenlohner (<em>peb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 08:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 24 Jul 2014, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; it seems autotools related:
</span><br>
<span class="quotelev1">&gt; it tries to create link in &quot;hooks&quot; subfolder which does not present.
</span><br>
<p>This typically occurs when you try to create a file (symlink) in a
<br>
nonexistent directory.  In such situations the make rules must ensure that
<br>
such directories exist, e.g., via
<br>
<p>some_target: Some_prerequisite
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(MKDIR_P) hooks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(LN_S) $(srcdir)/hooks/vt_unify_hooks_base.cc hooks/vt_unify_hooks_base.cc
<br>
<p>Regards
<br>
Peter Breitenlohner &lt;peb_at_[hidden]&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15244.php">Mike Dubman: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
