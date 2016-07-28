<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 17:16:31 2016" -->
<!-- isoreceived="20160404211631" -->
<!-- sent="Mon, 4 Apr 2016 23:16:11 +0200" -->
<!-- isosent="20160404211611" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="5702D99B.1020207_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E721F964DFCE0143863414635137A1C72076DF0D_at_CRSMSX101.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-04 17:16:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4772.php">Peyton, Jonathan L: "[hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4772.php">Peyton, Jonathan L: "[hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/04/2016 21:39, Peyton, Jonathan L a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve been working on a build using both MSVC and the Intel Windows
</span><br>
<span class="quotelev1">&gt; compiler (ICL).  These three patches allow building of hwloc + utils.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) add-ifndef-guard-around-gnu-source.patch &#150; this minor change only
</span><br>
<span class="quotelev1">&gt; adds #ifndef _/GNU/_SOURCE inside the hwloc.m4 tests because it seems
</span><br>
<span class="quotelev1">&gt; to be defined on Linux systems beforehand causing a warning in these
</span><br>
<span class="quotelev1">&gt; autoconf tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello
<br>
<p>I am pushing this one thanks.
<br>
<p><span class="quotelev1">&gt; 2) use-ac-check-decl.patch &#150; this change removes the
</span><br>
<span class="quotelev1">&gt; _/HWLOC_CHECK_DECL() macro with the autoconf AC_CHECK/_DECLS() macro. 
</span><br>
<span class="quotelev1">&gt; The problem I was having concerned how _/HWLOC_CHECK/_DECL() worked. 
</span><br>
<span class="quotelev1">&gt; It has an expected failure structure where if say, sched_setaffinity,
</span><br>
<span class="quotelev1">&gt; is already defined, then the AC_COMPILE_IFELSE() macro will fail and
</span><br>
<span class="quotelev1">&gt; say it **is** declared (the AC_MSG_RESULT([yes]) is in the &#147;if-false&#148;
</span><br>
<span class="quotelev1">&gt; part of the check).  This is problematic when using MSVC because it
</span><br>
<span class="quotelev1">&gt; will say that sched_setaffinity is declared when it really isn&#146;t.  The
</span><br>
<span class="quotelev1">&gt; comment for _/HWLOC_CHECK/_DECL is also outdated so I think this can
</span><br>
<span class="quotelev1">&gt; be safely removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am not very confident about this one because this is really something
<br>
that was needed in the past. Unfortunately the very old commit
<br>
075eff1d1dd64292ff421a95f06d0151f1c246b5 doesn't give any detail.
<br>
Looking the hwloc-devel archives in early 2009/11, it's likely related
<br>
to some PGCC issues.
<br>
<p>What problem did you actually see?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) windows-compatibility-changes.patch &#150; this change adds necessary
</span><br>
<span class="quotelev1">&gt; autoconf checks that I needed to get MSVC/ICL to compile hwloc.  For
</span><br>
<span class="quotelev1">&gt; instance, ssize_t wasn&#146;t declared and is defined from SSIZE_T instead,
</span><br>
<span class="quotelev1">&gt; S_ISREG isn&#146;t defined in the windows headers so it is defined
</span><br>
<span class="quotelev1">&gt; correctly when it doesn&#146;t exist, etc.  This also introduced
</span><br>
<span class="quotelev1">&gt; hwloc_strcasecmp() which is modeled after hwloc_strncasecmp().  If
</span><br>
<span class="quotelev1">&gt; strcasecmp() isn&#146;t defined, then hwloc_strcasecmp() is used instead. 
</span><br>
<span class="quotelev1">&gt; These MSVC/ICL auxiliary defines are put in include/private/misc.h and
</span><br>
<span class="quotelev1">&gt; this header was added to some source files that needed it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There are some easy pieces that I will commit soon.
<br>
There are some harder ones like changing the strtoull() stuff, I need to
<br>
spend some time making sure it doesn't break anything.
<br>
By the way, hwloc-ps uses dirent for readding /proc, I think we should
<br>
just always disable that program on Windows.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4773/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4772.php">Peyton, Jonathan L: "[hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4772.php">Peyton, Jonathan L: "[hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
