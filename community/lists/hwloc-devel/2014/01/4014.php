<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 06:54:40 2014" -->
<!-- isoreceived="20140107115440" -->
<!-- sent="Tue, 7 Jan 2014 12:54:38 +0100 (CET)" -->
<!-- isosent="20140107115438" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="735333287.19411174.1389095678704.JavaMail.root_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52CBE2D4.3050001_at_citrix.com" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 06:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4013.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4013.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4021.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, 
<br>
<p>Can't check the code right now, but a couple questions below. 
<br>
<p><span class="quotelev1">&gt; One of the issues I had was that the Core IDs (as reported by Xen)
</span><br>
<span class="quotelev1">&gt; are enumerated per socket rather than as an entire system. The
</span><br>
<span class="quotelev1">&gt; purpose of &quot;HACK - patch up cpu_to_core.&quot; in hwloc_get_xen_info() is
</span><br>
<span class="quotelev1">&gt; to change the per-socket enumeration to being per system.
</span><br>
<p><span class="quotelev1">&gt; Samuel believes that hwloc should be able to cope with duplicate core
</span><br>
<span class="quotelev1">&gt; IDs with different cpusets, but if I attempt to do that, I get the
</span><br>
<span class="quotelev1">&gt; following error:
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system. * * object (Core P#0 cpuset 0x30000003) intersection without
</span><br>
<span class="quotelev1">&gt; inclusion! * Error occurred in topology.c line 853 * * Please report
</span><br>
<span class="quotelev1">&gt; this error message to the hwloc user's mailing list, * along with
</span><br>
<span class="quotelev1">&gt; the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<p>I don't understand what's going on here. Can you post the list of PU/core/socket IDs that Xen reports so that I see what is unique and what is not? 
<br>
<p><span class="quotelev1">&gt; I currently have a crazy idea for getting at the cache information.
</span><br>
<span class="quotelev1">&gt; topology-x86.c has a lot of cpuid knowledge, and I have a proposed
</span><br>
<span class="quotelev1">&gt; new hypercall which executes cpuid on a specific PU. Would it be
</span><br>
<span class="quotelev1">&gt; possible (or indeed sensible) to parametrise the code in
</span><br>
<span class="quotelev1">&gt; topology-x86.c to take a few function pointers for get/set binding
</span><br>
<span class="quotelev1">&gt; information, and for the cpuid call itself?
</span><br>
<p>I don't see why we couldn't do that. Can you post an example of what the Xen cpuid hypercall prototype would be, so that I see how I need to change the x86 backend? 
<br>
<p><span class="quotelev1">&gt; That way, the common x86 knowledge could be used correctly by the Xen
</span><br>
<span class="quotelev1">&gt; component, while still keeping its current design.
</span><br>
<p>Is there anything that the current Xen backend supports and that wouldn't be feasible through x86 cpuid? The x86 component can already detect a lot of topology information, including cores/caches/sockets/NUMA. Maybe the NUMA node sizes? 
<br>
<p>By the way, which architectures are supported by Xen aside of x86? Does Xen have topology information for them? 
<br>
<p>Brice 
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4013.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4013.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4015.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4021.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
