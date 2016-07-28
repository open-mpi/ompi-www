<?
$subject_val = "[hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 00:00:20 2015" -->
<!-- isoreceived="20150721040020" -->
<!-- sent="Tue, 21 Jul 2015 04:00:08 +0000" -->
<!-- isosent="20150721040008" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="1A8CB06B-6298-447C-A5A3-849037E293E9_at_anl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 00:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4502.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4500.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-10-ge6f786c)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4502.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4502.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>

<br>
The hwloc-1.11 build seems to fail with the pgi compiler on 32-bit platforms.  I see the following error:
<br>

<br>
----8&lt;----
<br>
&nbsp;&nbsp;CC       topology-x86.lo
<br>
PGC-F-0000-Internal compiler error. unable to allocate a register       8 (topology-x86.c: 87)
<br>
PGC/x86 Linux 13.9-0: compilation aborted
<br>
----8&lt;----
<br>

<br>
I only tried pgi-13.7 and 13.9 (I don't have access to later compiler versions).  It looks like the compiler doesn't like the assembly code in include/private/cpuid-x86.h for 32-bit platforms.
<br>

<br>

<br>

<br>
Thanks,
<br>

<br>
&nbsp;&nbsp;-- Pavan
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4502.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4500.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-10-ge6f786c)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4502.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4502.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
