<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 18:06:15 2012" -->
<!-- isoreceived="20121025220615" -->
<!-- sent="Fri, 26 Oct 2012 00:06:05 +0200" -->
<!-- isosent="20121025220605" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="20121025220605.GD5925_at_type.chello.at" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5089B5AD.5070203_at_uberware.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How do I access CPUModel info string<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 18:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0751.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0749.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0751.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0751.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robin Scher, le Thu 25 Oct 2012 23:57:38 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt;         ; eax = 0x80000002 --&gt; eax, ebx, ecx, edx: get processor name string
</span><br>
<span class="quotelev1">&gt; (part 1)
</span><br>
<span class="quotelev1">&gt;         mov eax,0x80000002
</span><br>
<span class="quotelev1">&gt;         cpuid
</span><br>
<p>Oh, this is indeed *exactly* the model name string. I only knew about
<br>
the vendor_id string.
<br>
<p><span class="quotelev1">&gt; I don't know if that would work on Win64, though.
</span><br>
<p>It should: cpuid is not a privileged instruction.
<br>
<p><span class="quotelev1">&gt; Do you think those could be added to hwloc?
</span><br>
<p>Yes: we already use cpuid for the x86 backend. That will only work on
<br>
x86 hosts of course.
<br>
<p>Brice, that actually brings another piece to the plugin engine: on
<br>
Windows ideally we should still get the topology from the OS, but take
<br>
the cpu string from the x86 backend...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0751.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0749.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0751.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0751.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
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
