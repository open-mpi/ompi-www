<?
$subject_val = "Re: [OMPI devel] ompi github repository is NOT up to date";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  5 23:58:24 2014" -->
<!-- isoreceived="20141006035824" -->
<!-- sent="Sun, 05 Oct 2014 21:58:14 -0600" -->
<!-- isosent="20141006035814" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi github repository is NOT up to date" -->
<!-- id="8738b1q27d.fsf_at_jedbrown.org" -->
<!-- inreplyto="670174EA-B09B-4C13-942E-3F1A42E4404E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi github repository is NOT up to date<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-05 23:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16013.php">Ralph Castain: "[OMPI devel] Solaris x86 warnings"</a>
<li><strong>Previous message:</strong> <a href="16011.php">Ralph Castain: "Re: [OMPI devel] ompi github repository is NOT up to date"</a>
<li><strong>In reply to:</strong> <a href="16011.php">Ralph Castain: "Re: [OMPI devel] ompi github repository is NOT up to date"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; No, it's okay - for some reason, Mike's last commit is labelled as
</span><br>
<span class="quotelev1">&gt; having been written 13 days ago. If you look at the commit log, you'll
</span><br>
<span class="quotelev1">&gt; see that everything is just fine.
</span><br>
<p>The commit was amended or rebased on Oct 5:
<br>
<p>$ git log -1 --format=fuller
<br>
commit fd77ebd4525e9e0c1a3ab1c4966bf31aa45251b4
<br>
Author:     Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
AuthorDate: Mon Sep 22 20:11:40 2014 +0300
<br>
Commit:     Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
CommitDate: Sun Oct 5 14:33:56 2014 +0300
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OSHMEM: sshmem verbs: allocate memory at fixed address
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Use experimental verbs to allocate memory at fixed base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;virtual address.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;verbs will disqualify itself if shared_mr is disabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;or not supported and it is impossible to allocate memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;starting at fixed base virtual address.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;verbs contig pages allocator did not guarantee fixed va, now it does.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16012/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16013.php">Ralph Castain: "[OMPI devel] Solaris x86 warnings"</a>
<li><strong>Previous message:</strong> <a href="16011.php">Ralph Castain: "Re: [OMPI devel] ompi github repository is NOT up to date"</a>
<li><strong>In reply to:</strong> <a href="16011.php">Ralph Castain: "Re: [OMPI devel] ompi github repository is NOT up to date"</a>
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
