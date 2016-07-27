<?
$subject_val = "[hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 15:39:40 2016" -->
<!-- isoreceived="20160404193940" -->
<!-- sent="Mon, 4 Apr 2016 19:39:35 +0000" -->
<!-- isosent="20160404193935" -->
<!-- name="Peyton, Jonathan L" -->
<!-- email="jonathan.l.peyton_at_[hidden]" -->
<!-- subject="[hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="E721F964DFCE0143863414635137A1C72076DF0D_at_CRSMSX101.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Three patches for MSVC/ICL builds on Windows.<br>
<strong>From:</strong> Peyton, Jonathan L (<em>jonathan.l.peyton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-04 15:39:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4771.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.2-91-gb5442a5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I've been working on a build using both MSVC and the Intel Windows compiler (ICL).  These three patches allow building of hwloc + utils.
<br>
<p>1) add-ifndef-guard-around-gnu-source.patch - this minor change only adds #ifndef _GNU_SOURCE inside the hwloc.m4 tests because it seems to be defined on Linux systems beforehand causing a warning in these autoconf tests.
<br>
<p>2) use-ac-check-decl.patch - this change removes the _HWLOC_CHECK_DECL() macro with the autoconf AC_CHECK_DECLS() macro.  The problem I was having concerned how _HWLOC_CHECK_DECL() worked.  It has an expected failure structure where if say, sched_setaffinity, is already defined, then the AC_COMPILE_IFELSE() macro will fail and say it *is* declared (the AC_MSG_RESULT([yes]) is in the &quot;if-false&quot; part of the check).  This is problematic when using MSVC because it will say that sched_setaffinity is declared when it really isn't.  The comment for _HWLOC_CHECK_DECL is also outdated so I think this can be safely removed.
<br>
<p>3) windows-compatibility-changes.patch - this change adds necessary autoconf checks that I needed to get MSVC/ICL to compile hwloc.  For instance, ssize_t wasn't declared and is defined from SSIZE_T instead, S_ISREG isn't defined in the windows headers so it is defined correctly when it doesn't exist, etc.  This also introduced hwloc_strcasecmp() which is modeled after hwloc_strncasecmp().  If strcasecmp() isn't defined, then hwloc_strcasecmp() is used instead.  These MSVC/ICL auxiliary defines are put in include/private/misc.h and this header was added to some source files that needed it.
<br>
<p>I'm of course open to any suggested changes, feedback is welcome!
<br>
<p>Thanks,
<br>
Johnny
<br>
<p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4772/add-ifndef-guard-around-gnu-source.patch">add-ifndef-guard-around-gnu-source.patch</a>
</ul>
<!-- attachment="add-ifndef-guard-around-gnu-source.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4772/use-ac-check-decl.patch">use-ac-check-decl.patch</a>
</ul>
<!-- attachment="use-ac-check-decl.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4772/windows-compatibility-changes.patch">windows-compatibility-changes.patch</a>
</ul>
<!-- attachment="windows-compatibility-changes.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4771.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.2-91-gb5442a5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
