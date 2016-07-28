<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 17:58:43 2012" -->
<!-- isoreceived="20121025215843" -->
<!-- sent="Thu, 25 Oct 2012 23:58:37 +0200" -->
<!-- isosent="20121025215837" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="5089B60D.70700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121025214245.GY5925_at_type.chello.at" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 17:58:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0749.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0746.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/10/2012 23:42, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Robin Scher, le Thu 25 Oct 2012 23:39:46 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to get this string (e.g. &quot;Intel(R) Core(TM) i7 CPU M 620 @
</span><br>
<span class="quotelev2">&gt;&gt; 2.67GHz&quot;) consistently on Windows, Linux, OS-X and Solaris?
</span><br>
<span class="quotelev1">&gt; Currently, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc itself does not have a table of such strings, and each OS has its
</span><br>
<span class="quotelev1">&gt; own table.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Actually there's no table on Linux/x86. It uses cpuid to fill the model
<br>
name in the vast majority of cases [1]. We could use that to get
<br>
consistent names on non-Linux non-Solaris OS, and in the x86 backend.
<br>
<p>Brice
<br>
<p>[1] <a href="http://lxr.free-electrons.com/source/arch/x86/kernel/cpu/common.c#L389">http://lxr.free-electrons.com/source/arch/x86/kernel/cpu/common.c#L389</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0749.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0746.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
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
