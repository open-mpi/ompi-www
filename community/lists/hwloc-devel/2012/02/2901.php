<?
$subject_val = "[hwloc-devel] hwloc_alloc_membind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 24 07:04:33 2012" -->
<!-- isoreceived="20120224120433" -->
<!-- sent="Fri, 24 Feb 2012 13:04:29 +0100" -->
<!-- isosent="20120224120429" -->
<!-- name="Karl Napf" -->
<!-- email="karl.b.napf_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc_alloc_membind" -->
<!-- id="CANnDKzfCW=_Wcx5MC7kapnjNMp6mXJYsfQugObRYZeDPbKM88g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc_alloc_membind<br>
<strong>From:</strong> Karl Napf (<em>karl.b.napf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-24 07:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2900.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4340)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Maybe reply:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Maybe reply:</strong> <a href="2905.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've got a problem and a question regarding hwloc_alloc_membind (I'm
<br>
using hwloc V 1.4):
<br>
<p>1. I want to allocate memory near a particular CPU by the call
<br>
<p>hwloc_alloc_membind(topology, len, cpuset, HWLOC_MEMBIND_BIND,
<br>
HWLOC_MEMBIND_STRICT).
<br>
<p>I tried this on two Linux machines (single-core, Kernel 2.6.35 and
<br>
48-core NUMA, Kernel 3.0.0), but on both machines the call fails (it
<br>
works without HWLOC_MEMBIND_STRICT). Any ideas what's going wrong?
<br>
What surprises me is that the result of the call to
<br>
hwloc_fix_membind_cpuset in line 534 of bind.c is negated, even though
<br>
hwloc_fix_membind_cpuset returns 0 on success. Might this be a bug?
<br>
<p>2. In another use case I want to allocate memory using the first-touch
<br>
policy (HWLOC_MEMBIND_FIRSTTOUCH). Does the cpuset passed to
<br>
hwloc_alloc_membind have any meaning in this case, since the memory is
<br>
not immediately bound to a node? What cpuset should be passed?
<br>
<p>Thank you very much in advance for your help.
<br>
<p>Kind regards
<br>
Karl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Previous message:</strong> <a href="2900.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.3a1r4340)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Maybe reply:</strong> <a href="2902.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
<li><strong>Maybe reply:</strong> <a href="2905.php">Samuel Thibault: "Re: [hwloc-devel] hwloc_alloc_membind"</a>
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
