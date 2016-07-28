<?
$subject_val = "Re: [OMPI devel] debian/ directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 09:38:43 2013" -->
<!-- isoreceived="20131106143843" -->
<!-- sent="Wed, 06 Nov 2013 15:38:01 +0100" -->
<!-- isosent="20131106143801" -->
<!-- name="Sylvestre Ledru" -->
<!-- email="sylvestre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debian/ directory" -->
<!-- id="527A5449.1040606_at_debian.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CE9F9FB8.15530%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debian/ directory<br>
<strong>From:</strong> Sylvestre Ledru (<em>sylvestre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 09:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13200.php">Barrett, Brian W: "[OMPI devel] portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13198.php">Barrett, Brian W: "[OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13198.php">Barrett, Brian W: "[OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Le 06/11/2013 15:26, Barrett, Brian W a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike added a debian/ directory to the top-level of the tree this morning,
</span><br>
<span class="quotelev1">&gt; which looks to be helping in building a Debian package.  While I don't
</span><br>
<span class="quotelev1">&gt; mind helping Debian, I'm really against having a debian/ directory in our
</span><br>
<span class="quotelev1">&gt; top-level tree.  We have a place for those things (in contrib/).  If
</span><br>
<span class="quotelev1">&gt; Debian can't conform to that requirement, maybe we shouldn't have Debian
</span><br>
<span class="quotelev1">&gt; support&#138;
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am sorry but it does not help for a few reasons:
<br>
* We, in Debian, are doing several uploads of the same upstream version.
<br>
So, we always have to modify debian/
<br>
* Our tools are removing automatically debian/ in upstream tarballs
<br>
* They would have to be in rootDir/debian/, rootDir/contrib/debian would
<br>
not work.
<br>
* There are already the Debian packages which are a bit more complete
<br>
and tested than the one pushed ;)
<br>
<p>Sylvestre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13200.php">Barrett, Brian W: "[OMPI devel] portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13198.php">Barrett, Brian W: "[OMPI devel] debian/ directory"</a>
<li><strong>In reply to:</strong> <a href="13198.php">Barrett, Brian W: "[OMPI devel] debian/ directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
<li><strong>Reply:</strong> <a href="13205.php">Mike Dubman: "Re: [OMPI devel] debian/ directory"</a>
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
