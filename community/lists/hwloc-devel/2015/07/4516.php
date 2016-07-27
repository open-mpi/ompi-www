<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 09:55:20 2015" -->
<!-- isoreceived="20150728135520" -->
<!-- sent="Tue, 28 Jul 2015 15:55:16 +0200" -->
<!-- isosent="20150728135516" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="20150728135516.GJ3090_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16389czoJYo8JEHMAbGo-sD_dST0L564efJSTzGR1ADfA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 09:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4515.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-13-g8d1c527)"</a>
<li><strong>In reply to:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Paul Hargrove, le Mon 20 Jul 2015 23:12:10 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I believe the following inline x86 asm is correct and more robust than the
</span><br>
<span class="quotelev1">&gt; existing code that pgi appears to reject:
</span><br>
<p>Indeed, in the 32bit case, we don't need to shuffle between 32 and 64bit
<br>
values, so it's simpler to just use a register. It's surprising that
<br>
letting the compiler decide the register fails more than just specifying
<br>
SD, but since wide testing shows that, then let's go with it.
<br>
<p>I'm however afraid that this code has again posed problem, even if we
<br>
do test its compilation in configure.ac.  I'm wondering: instead of
<br>
insisting on inlining this function, we should perhaps just put it in a
<br>
separate .c file, which we try to compile from configure.ac exactly the
<br>
same way as it will be for libhwloc.so?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4515.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-13-g8d1c527)"</a>
<li><strong>In reply to:</strong> <a href="4503.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
