<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 10:18:18 2012" -->
<!-- isoreceived="20120216151818" -->
<!-- sent="Thu, 16 Feb 2012 10:18:13 -0500" -->
<!-- isosent="20120216151813" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="3B7A9F0F-6CE7-42E9-921F-D6545A402BCA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3CC7AF.30247.6C124235_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 10:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18508.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>In reply to:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2012, at 9:09 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; (2) Solution to this issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may set the $TMPDIR to a same directory on the same host if 
</span><br>
<span class="quotelev1">&gt; possible; or you could setenv OMPI_PREFIX_ENV to a common 
</span><br>
<span class="quotelev1">&gt; directory for MPI processes on the same host while keeping your 
</span><br>
<span class="quotelev1">&gt; $TMPDIR setting. either way is verified and working fine for me!
</span><br>
<p>A clarification on this...
<br>
<p>I found OMPI_PREFIX_ENV through some code diving, and it looks like this is an old name from previous logic.  We'll actually be removing it from our SVN trunk shortly.
<br>
<p>I think the right answer here is to use the orte_tmpdir_base MCA parameter:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca orte_tmpdir_base /tmp ...
<br>
<p>This will tell OMPI where to put the session directory for all processes (even if their $TMPDIRs are different from each other).  This should be used instead of setting OMPI_PREFIX_ENV.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18508.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18506.php">Prentice Bisbal: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.4.5 released"</a>
<li><strong>In reply to:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
