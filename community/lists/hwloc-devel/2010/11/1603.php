<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 10:14:59 2010" -->
<!-- isoreceived="20101124151459" -->
<!-- sent="Wed, 24 Nov 2010 10:14:40 -0500" -->
<!-- isosent="20101124151440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="228FE1C4-E18D-443A-867A-E83B3C3445D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CECDB7C.1030302_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 10:14:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1604.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2010, at 4:31 AM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt; 1. Gracefully abort at configure time if the compiler doesn't support C99: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<p>(now that I'm on a proper keyboard...)
<br>
<p>I'm ok with this, even if it's redundant elsewhere.  Defensive programming and all that.
<br>
<p><span class="quotelev1">&gt; 2. Slight improvement to the error message: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7499/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<p>No problem.
<br>
<p><span class="quotelev1">&gt; 3. Warning squashes from shadowing global variables: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7501/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<p>I have no argument with this one, either.
<br>
<p><span class="quotelev1">&gt; The following patches are just a matter of preference. So you might not want to incorporate them, but here they are anyway:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Disable doxygen builds by default: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<p>I agree with Brice on this one; you should be using embedded mode to disable a bunch of stuff by default.  This will save you lots of hassles; not just doxygen.
<br>
<p>So my question -- per prior email -- is: why not use --disable-embedded-mode, and --disable-shared --enable-static?  (vs. patching)  IIRC, I put --disable-embedded-mode there exactly for the case of projects that want to embed but don't want to call our m4 directly.
<br>
<p><span class="quotelev1">&gt; 2. Don't automatically pick debugging or picky compiler options unless the user asked for them: <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7500/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<p>I originally asked for this policy (do debug builds by default when you find .svn), but I could probably be convinced to reverse it pretty easily.  So -- I'm ok with it.
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
<li><strong>Next message:</strong> <a href="1604.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
