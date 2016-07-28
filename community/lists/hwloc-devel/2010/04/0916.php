<?
$subject_val = "[hwloc-devel] backward API compat or not?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 13:54:18 2010" -->
<!-- isoreceived="20100420175418" -->
<!-- sent="Tue, 20 Apr 2010 19:54:13 +0200" -->
<!-- isosent="20100420175413" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] backward API compat or not?" -->
<!-- id="4BCDEA45.3010206_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] backward API compat or not?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 13:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0917.php">Samuel Thibault: "Re: [hwloc-devel] backward API compat or not?"</a>
<li><strong>Previous message:</strong> <a href="0915.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0917.php">Samuel Thibault: "Re: [hwloc-devel] backward API compat or not?"</a>
<li><strong>Reply:</strong> <a href="0917.php">Samuel Thibault: "Re: [hwloc-devel] backward API compat or not?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a static inline in hwloc/helper.h to replace the old
<br>
get_system_obj() into the new get_root_obj(). But there are other API
<br>
changes in 1.0 which have no similar compat wrapper. For instance
<br>
replacing HWLOC_OBJ_PU instead of HWLOC_OBJ_PROC probably broke every
<br>
hwloc user on earth. So I tend to think that we should just drop the
<br>
get_system_obj() and make it clear that people have to fix everything,
<br>
not everything except foo and bar.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0917.php">Samuel Thibault: "Re: [hwloc-devel] backward API compat or not?"</a>
<li><strong>Previous message:</strong> <a href="0915.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0917.php">Samuel Thibault: "Re: [hwloc-devel] backward API compat or not?"</a>
<li><strong>Reply:</strong> <a href="0917.php">Samuel Thibault: "Re: [hwloc-devel] backward API compat or not?"</a>
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
