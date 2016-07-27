<?
$subject_val = "Re: [hwloc-devel] How to create a patch file?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 19:47:18 2010" -->
<!-- isoreceived="20100713234718" -->
<!-- sent="Tue, 13 Jul 2010 19:47:40 -0400" -->
<!-- isosent="20100713234740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to create a patch file?" -->
<!-- id="E43CC86D-D913-4BB3-A532-285EA16478B7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201007130107.51082.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to create a patch file?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 19:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1173.php">Jeff Squyres: "[hwloc-devel] v1.0.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1171.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.2a1r2313)"</a>
<li><strong>In reply to:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1189.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Reply:</strong> <a href="1189.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2010, at 7:07 PM, Jirka Hladky wrote:
<br>
<p><span class="quotelev2">&gt; &gt; |Index: tests/embedded/Makefile.am
</span><br>
<span class="quotelev2">&gt; &gt; |===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; |--- tests/embedded/Makefile.am (.../tags/hwloc-1.0.1)  (revision 2305)
</span><br>
<span class="quotelev2">&gt; &gt; |+++ tests/embedded/Makefile.am (.../branches/v1.0)     (revision 2305)
</span><br>
<span class="quotelev1">&gt; Brice, regarding patch error above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tests/embedded/Makefile.am does not exist in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/hwloc/v1.0/downloads/hwloc-1.0.1.tar.gz">http://www.open-mpi.org/software/hwloc/v1.0/downloads/hwloc-1.0.1.tar.gz</a>
</span><br>
<p>Correct.  For esoteric reasons, the tests/embedded tree is not included in the tarball (I can explain if you care, but the reasons are pretty boring).
<br>
<p><span class="quotelev1">&gt; I would really need  an updated tarball hwloc-1.0.2a1-20100712-2034
</span><br>
<p>You can actually grab a nightly tarball, if it would help -- they're made every night around 9pm US Eastern time if there were any commits in SVN since the last successful nightly tarball creation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/">http://www.open-mpi.org/software/hwloc/nightly/trunk/</a>
<br>
<p>Oops -- I see that we only have trunk nightly tarballs (oops!).  I'll add 1.0 nightly tarballs...  done:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/hwloc/nightly/v1.0/">http://www.open-mpi.org/software/hwloc/nightly/v1.0/</a>
<br>
<p>There's obviously only one v1.0 tarball there right now, but they'll continue to be created on a nightly basis.
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
<li><strong>Next message:</strong> <a href="1173.php">Jeff Squyres: "[hwloc-devel] v1.0.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1171.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.2a1r2313)"</a>
<li><strong>In reply to:</strong> <a href="1156.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1189.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Reply:</strong> <a href="1189.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
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
