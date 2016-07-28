<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 05:19:43 2014" -->
<!-- isoreceived="20140109101943" -->
<!-- sent="Thu, 9 Jan 2014 11:19:41 +0100" -->
<!-- isosent="20140109101941" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="20140109101941.GD5790_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="735333287.19411174.1389095678704.JavaMail.root_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 05:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4022.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-33-g089185d)"</a>
<li><strong>Previous message:</strong> <a href="4020.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-32-g3e6a7f2)"</a>
<li><strong>In reply to:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brice Goglin, le Tue 07 Jan 2014 12:54:45 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;     I currently have a crazy idea for getting at the cache information. 
</span><br>
<span class="quotelev1">&gt;     topology-x86.c has a lot of cpuid knowledge, and I have a proposed new
</span><br>
<span class="quotelev1">&gt;     hypercall which executes cpuid on a specific PU.  Would it be possible (or
</span><br>
<span class="quotelev1">&gt;     indeed sensible) to parametrise the code in topology-x86.c to take a few
</span><br>
<span class="quotelev1">&gt;     function pointers for get/set binding information, and for the cpuid call
</span><br>
<span class="quotelev1">&gt;     itself?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see why we couldn't do that.
</span><br>
<p>Yep, it should just work.
<br>
<p><span class="quotelev1">&gt; Can you post an example of what the Xen cpuid hypercall prototype
</span><br>
<span class="quotelev1">&gt; would be, so that I see how I need to change the x86 backend?
</span><br>
<p>Well, it will probably just take a cpu number and eax,ecx values (or
<br>
even all register values, in case future cpuid calls use all registers
<br>
as input) as parameters, and return eax,ebx,ecx,edx.
<br>
<p>Compared to what we have already in the x86 backend, we are essentially
<br>
missing passing the cpu number, since in our case we were assuming that
<br>
the code was already running on the cpu itself.
<br>
<p>We might however want to have a way to restrict discovery to caches
<br>
only.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4022.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-33-g089185d)"</a>
<li><strong>Previous message:</strong> <a href="4020.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-32-g3e6a7f2)"</a>
<li><strong>In reply to:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
