<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 04:26:33 2016" -->
<!-- isoreceived="20160405082633" -->
<!-- sent="Tue, 5 Apr 2016 10:26:31 +0200" -->
<!-- isosent="20160405082631" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="20160405082631.GA4052_at_var.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E721F964DFCE0143863414635137A1C72076E2A4_at_CRSMSX101.amr.corp.intel.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 04:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4776.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.2-92-ge04c504)"</a>
<li><strong>In reply to:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Peyton, Jonathan L, on Mon 04 Apr 2016 22:09:19 +0000, wrote:
<br>
<span class="quotelev1">&gt; Fundamentally, I think _HWLOC_CHECK_DECL()&#226;&#128;&#153;s macro logic is broken.
</span><br>
<p>It was not, originally :)
<br>
<p>The problem of AC_CHECK_DECL is that it only checks that a declaration
<br>
exists (by referencing it as a right-value, not a function). That
<br>
however doesn't check that we have a proper declaration with full
<br>
parameters, etc. i.e. something like this:
<br>
<p>extern int ffsl();
<br>
<p>would be counted as proper declaration. The original version of
<br>
HWLOC_CHECK_DECL (mentioned in the comment) would try to call
<br>
the function with a lot of parameters, to check whether the
<br>
compiler detected that it's wrong, so that we catch miscalls at
<br>
compile-time instead of run-time. This was however changed in
<br>
6a9299ce9d1cb1c13b3b346fe6fdfed2df75c672 to add a prototype, and thus
<br>
detect the conflicting prototypes instead of the miscall. This was
<br>
done for the case where strict compilation flags are used which would
<br>
see implicit function declarations as a failure (and thus believe the
<br>
function is declared). Checking for the conflicting prototypes however
<br>
failed with clang an icc because they only emit a warning, see commit
<br>
447c8b038f57509c822c88cdeacffaeb03042874.  In the end these changes
<br>
completely changed the intent of the macro, and using AC_CHECK_DECL
<br>
would probably work a lot more. But the intent of the macro still makes
<br>
sense, and we currently don't implement it any more...
<br>
<p>The bug here is that that HWLOC_CHECK_DECL assumed that availability of
<br>
the function was tested before, i.e.
<br>
<p><span class="quotelev1">&gt; conftest.c(96) : fatal error C1083: Cannot open include file: 'sched.h': No
</span><br>
<span class="quotelev1">&gt; such file or directory
</span><br>
<p>was unexpected.
<br>
<p>So I'd say to revert to calling the function with a lot of arguments
<br>
(to get the originally intented detection), but calling AC_CHECK_DECL
<br>
beforewards to properly check for declaration presence. So we get
<br>
everything we actually wanted. I'm having a look at the changes for
<br>
that.
<br>
<p>samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4776.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.2-92-ge04c504)"</a>
<li><strong>In reply to:</strong> <a href="4774.php">Peyton, Jonathan L: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
