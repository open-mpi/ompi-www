<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 18:09:25 2016" -->
<!-- isoreceived="20160404220925" -->
<!-- sent="Mon, 4 Apr 2016 22:09:19 +0000" -->
<!-- isosent="20160404220919" -->
<!-- name="Peyton, Jonathan L" -->
<!-- email="jonathan.l.peyton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="E721F964DFCE0143863414635137A1C72076E2A4_at_CRSMSX101.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5702D99B.1020207_at_inria.fr" -->
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
<strong>From:</strong> Peyton, Jonathan L (<em>jonathan.l.peyton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-04 18:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4775.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-1093-g1d27fe9)"</a>
<li><strong>Previous message:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Concerning issue #2, it is how the macro checks for the declaration which I think isn't correct.  The macro definition tries to get a compile failure to indicate successful detection.  For example with sched_setaffinity, the _HWLOC_CHECK_DECL() macro creates a small conftest.c file which contains a dummy declaration for sched_setaffinity (void * sched_setaffinity;  The entire test is below for reference).  If we were on Linux, this gives an error:
<br>
<p>conftest.c(104): error: declaration is incompatible with &quot;int sched_setaffinity(__pid_t={int}, size_t={unsigned long}, const cpu_set_t *)&quot; (declared at line 117 of &quot;/usr/include/sched.h&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;void * sched_setaffinity;
<br>
<p>But this implies that the test *passes* because the logic in _HWLOC_CHECK_DECL():
<br>
<p>AC_DEFUN([_HWLOC_CHECK_DECL], [
<br>
&nbsp;&nbsp;AC_MSG_CHECKING([whether function $1 is declared])
<br>
&nbsp;&nbsp;AC_REQUIRE([AC_PROG_CC])
<br>
&nbsp;&nbsp;AC_COMPILE_IFELSE([AC_LANG_PROGRAM(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_INCLUDES_DEFAULT([$4])
<br>
&nbsp;&nbsp;&nbsp;void * $1;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;)],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([no])  &lt;---- This runs when the test successfully compiles
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$3],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_RESULT([yes]) &lt;---- This runs when the test fails to compile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2]
<br>
&nbsp;&nbsp;)
<br>
])
<br>
<p>The issue is now when Visual Studio tries to compile, it also fails.  This result is expected, but also implies that the declaration exists!  Below is the exact output from trying with Visual Studio.  It says the result is &quot;yes&quot; despite sched_setaffinity not existing on native Windows machines.
<br>
<p>configure:23499: /cygdrive/o/users/jlpeyton/hwloc/config/compile cl -c -nologo -O2  conftest.c &gt;&amp;5
<br>
conftest.c
<br>
conftest.c(96) : fatal error C1083: Cannot open include file: 'sched.h': No such file or directory
<br>
configure:23499: $? = 2
<br>
configure: failed program was:
<br>
| /* confdefs.h */
<br>
| #define PACKAGE_NAME &quot;hwloc&quot;
<br>
| ...
<br>
| /* end confdefs.h.  */
<br>
|
<br>
| #ifndef _GNU_SOURCE
<br>
| # define _GNU_SOURCE
<br>
| #endif
<br>
| #include &lt;sched.h&gt;
<br>
|
<br>
|
<br>
|   void * sched_setaffinity;
<br>
| int
<br>
| main ()
<br>
| {
<br>
|
<br>
|   ;
<br>
|   return 0;
<br>
| }
<br>
configure:23504: result: yes &lt;---- **** Oops ****
<br>
configure:23512: WARNING: Support for sched_setaffinity() requires a C compiler which
<br>
configure:23514: WARNING: considers incorrect argument counts to be a fatal error.
<br>
configure:23516: error: Cannot continue.
<br>
<p>Fundamentally, I think _HWLOC_CHECK_DECL()'s macro logic is broken.  But maybe there is something I'm missing since it seems to have been necessary for something else.
<br>
<p>-- Johnny
<br>
<p>From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Monday, April 4, 2016 4:16 PM
<br>
To: hwloc-devel_at_[hidden]
<br>
Subject: Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.
<br>
<p>Le 04/04/2016 21:39, Peyton, Jonathan L a &#233;crit :
<br>
<p>Hello everyone,
<br>
<p>I've been working on a build using both MSVC and the Intel Windows compiler (ICL).  These three patches allow building of hwloc + utils.
<br>
<p>1) add-ifndef-guard-around-gnu-source.patch - this minor change only adds #ifndef _GNU_SOURCE inside the hwloc.m4 tests because it seems to be defined on Linux systems beforehand causing a warning in these autoconf tests.
<br>
<p>Hello
<br>
<p>I am pushing this one thanks.
<br>
<p><p>2) use-ac-check-decl.patch - this change removes the _HWLOC_CHECK_DECL() macro with the autoconf AC_CHECK_DECLS() macro.  The problem I was having concerned how _HWLOC_CHECK_DECL() worked.  It has an expected failure structure where if say, sched_setaffinity, is already defined, then the AC_COMPILE_IFELSE() macro will fail and say it *is* declared (the AC_MSG_RESULT([yes]) is in the &quot;if-false&quot; part of the check).  This is problematic when using MSVC because it will say that sched_setaffinity is declared when it really isn't.  The comment for _HWLOC_CHECK_DECL is also outdated so I think this can be safely removed.
<br>
<p>I am not very confident about this one because this is really something that was needed in the past. Unfortunately the very old commit 075eff1d1dd64292ff421a95f06d0151f1c246b5 doesn't give any detail. Looking the hwloc-devel archives in early 2009/11, it's likely related to some PGCC issues.
<br>
<p>What problem did you actually see?
<br>
<p><p><p><p>3) windows-compatibility-changes.patch - this change adds necessary autoconf checks that I needed to get MSVC/ICL to compile hwloc.  For instance, ssize_t wasn't declared and is defined from SSIZE_T instead, S_ISREG isn't defined in the windows headers so it is defined correctly when it doesn't exist, etc.  This also introduced hwloc_strcasecmp() which is modeled after hwloc_strncasecmp().  If strcasecmp() isn't defined, then hwloc_strcasecmp() is used instead.  These MSVC/ICL auxiliary defines are put in include/private/misc.h and this header was added to some source files that needed it.
<br>
<p><p>There are some easy pieces that I will commit soon.
<br>
There are some harder ones like changing the strtoull() stuff, I need to spend some time making sure it doesn't break anything.
<br>
By the way, hwloc-ps uses dirent for readding /proc, I think we should just always disable that program on Windows.
<br>
<p>Brice
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4775.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-1093-g1d27fe9)"</a>
<li><strong>Previous message:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4773.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
