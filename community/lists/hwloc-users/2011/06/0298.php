<?
$subject_val = "Re: [hwloc-users] Patch to disable GCC __builtin_ operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 09:05:35 2011" -->
<!-- isoreceived="20110609130535" -->
<!-- sent="Thu, 9 Jun 2011 15:05:30 +0200" -->
<!-- isosent="20110609130530" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Patch to disable GCC __builtin_ operations" -->
<!-- id="20110609130530.GP5539_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1011162376.1309568.1307623959150.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-06-09 09:05:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe in reply to:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey, le Thu 09 Jun 2011 14:52:39 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; The odd thing about this environment is that the head node seems to
</span><br>
<span class="quotelev1">&gt; have a slightly different setup than the compute nodes (not sure why
</span><br>
<span class="quotelev1">&gt; exactly, but that's what it is). So hwloc is configured and runs
</span><br>
<span class="quotelev1">&gt; correctly on the head node, but when it is asked to run on the compute
</span><br>
<span class="quotelev1">&gt; nodes it segvs at the call site of the __builtin_ functions.
</span><br>
<p>Could you post a disassembly of the site?
<br>
<p><span class="quotelev1">&gt; I suspect that the ABI compatibility of the libc interface is what is
</span><br>
<span class="quotelev1">&gt; enabling the remainder of the code to work in both environments, and
</span><br>
<span class="quotelev1">&gt; that the __builtin_ functions bypass that ABI to put in system
</span><br>
<span class="quotelev1">&gt; specific code that (for whatever reason) does not match on the compute
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<p>But the odd thing is that there shouldn't be any ABI things here, it's
<br>
meant to be inlined.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Maybe in reply to:</strong> <a href="0290.php">Josh Hursey: "[hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
<li><strong>Reply:</strong> <a href="0299.php">Josh Hursey: "Re: [hwloc-users] Patch to disable GCC __builtin_ operations"</a>
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
