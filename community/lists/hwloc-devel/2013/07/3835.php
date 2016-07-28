<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] [open-mpi/hwloc] 3ae99c: Fix a memory leak of the info array when mergin...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 11 09:08:20 2013" -->
<!-- isoreceived="20130711130820" -->
<!-- sent="Thu, 11 Jul 2013 13:08:15 +0000" -->
<!-- isosent="20130711130815" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] [open-mpi/hwloc] 3ae99c: Fix a memory leak of the info array when mergin..." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F711794_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51deaded9f09e_33db649de418223b_at_hookshot-fe3-pe1-prd.aws.github.net.mail" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] [open-mpi/hwloc] 3ae99c: Fix a memory leak of the info array when mergin...<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-11 09:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3836.php">Brice Goglin: "[hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Previous message:</strong> <a href="3834.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5728)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was a test email post from github (we're exploring various options for migrating hwloc from svn to git).
<br>
<p>There might be more test emails over time; bear with us.
<br>
<p><p>On Jul 11, 2013, at 9:06 AM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Branch: refs/heads/master
</span><br>
<span class="quotelev1">&gt;  Home:   <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
</span><br>
<span class="quotelev1">&gt;  Commit: 3ae99c0d0f44d24c326258146e0401a03a167522
</span><br>
<span class="quotelev1">&gt;      <a href="https://github.com/open-mpi/hwloc/commit/3ae99c0d0f44d24c326258146e0401a03a167522">https://github.com/open-mpi/hwloc/commit/3ae99c0d0f44d24c326258146e0401a03a167522</a>
</span><br>
<span class="quotelev1">&gt;  Author: Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  Date:   2013-05-30 (Thu, 30 May 2013)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Changed paths:
</span><br>
<span class="quotelev1">&gt;    M src/topology.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Log Message:
</span><br>
<span class="quotelev1">&gt;  -----------
</span><br>
<span class="quotelev1">&gt;  Fix a memory leak of the info array when mergin...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fix a memory leak of the info array when merging objects
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure it ever occured since most objects merged in this code
</span><br>
<span class="quotelev1">&gt; have no infos.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit was SVN r5654.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Commit: 061f16d78a334dbaa6280d7c675646b4f72c7ebc
</span><br>
<span class="quotelev1">&gt;      <a href="https://github.com/open-mpi/hwloc/commit/061f16d78a334dbaa6280d7c675646b4f72c7ebc">https://github.com/open-mpi/hwloc/commit/061f16d78a334dbaa6280d7c675646b4f72c7ebc</a>
</span><br>
<span class="quotelev1">&gt;  Author: Brice Goglin &lt;brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  Date:   2013-05-30 (Thu, 30 May 2013)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Changed paths:
</span><br>
<span class="quotelev1">&gt;    M src/topology.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Log Message:
</span><br>
<span class="quotelev1">&gt;  -----------
</span><br>
<span class="quotelev1">&gt;  Fix a memory leak of the distance array when me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fix a memory leak of the distance array when merging objects
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Likely never occured...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit was SVN r5655.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Commit: a9c1ac48877fb98f603a2e7a5f32db50effa7cb9
</span><br>
<span class="quotelev1">&gt;      <a href="https://github.com/open-mpi/hwloc/commit/a9c1ac48877fb98f603a2e7a5f32db50effa7cb9">https://github.com/open-mpi/hwloc/commit/a9c1ac48877fb98f603a2e7a5f32db50effa7cb9</a>
</span><br>
<span class="quotelev1">&gt;  Author: Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  Date:   2013-06-06 (Thu, 06 Jun 2013)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Changed paths:
</span><br>
<span class="quotelev1">&gt;    M doc/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Log Message:
</span><br>
<span class="quotelev1">&gt;  -----------
</span><br>
<span class="quotelev1">&gt;  Add rule to remove spurious qualifiers (inline,...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Add rule to remove spurious qualifiers (inline, unused, etc.) from the generated html files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This commit was SVN r5659.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compare: <a href="https://github.com/open-mpi/hwloc/compare/c30565e852eb...a9c1ac48877f">https://github.com/open-mpi/hwloc/compare/c30565e852eb...a9c1ac48877f</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3836.php">Brice Goglin: "[hwloc-devel] upcoming cleaning of headers and doc sections"</a>
<li><strong>Previous message:</strong> <a href="3834.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5728)"</a>
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
