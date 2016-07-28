<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 11:18:21 2011" -->
<!-- isoreceived="20110609151821" -->
<!-- sent="Thu, 9 Jun 2011 17:18:16 +0200" -->
<!-- isosent="20110609151816" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="20110609151816.GE5539_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="429859731.1314451.1307631809226.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Patch to disable GCC __builtin_ operations<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 11:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe in reply to:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Josh Hursey, le Thu 09 Jun 2011 17:03:29 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Program terminated with signal 4, Illegal instruction.
</span><br>
<span class="quotelev1">&gt; #0  0x000000000041d8d9 in hwloc_weight_long ()
</span><br>
<p><span class="quotelev1">&gt; 0x000000000041d8d9 &lt;hwloc_weight_long+8&gt;:	popcnt 0xfffffffffffffff8(%rbp),%rax
</span><br>
<p>This is SSE4 indeed.  You could check in grep sse4 /proc/cpuinfo that the frontend
<br>
has it while the computation nodes don't.
<br>
<p>Gcc does not emit such instruction unless being instructed to (and
<br>
hwloc does not). Since it does on your machine, there must be something
<br>
on your frontend toolchain which forces -march=native or -march=sse4,
<br>
and you will have other appearances of such bugs, where gcc adds
<br>
SSE4-specific instructions with will SIGILL on the computation nodes,
<br>
and it's probably only by luck that you have not encountered it yet.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe in reply to:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0301.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
