<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 09:19:28 2014" -->
<!-- isoreceived="20140107141928" -->
<!-- sent="Tue, 7 Jan 2014 14:19:26 +0000" -->
<!-- isosent="20140107141926" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52CC0CEE.80405_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 09:19:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4016.php">Guy Streeter: "[hwloc-devel] cython re-write of python-hwloc"</a>
<li><strong>Previous message:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4018.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4018.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/01/14 11:54, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can't check the code right now, but a couple questions below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     One of the issues I had was that the Core IDs (as reported by Xen)
</span><br>
<span class="quotelev1">&gt;     are enumerated per socket rather than as an entire system.  The
</span><br>
<span class="quotelev1">&gt;     purpose of &quot;HACK - patch up cpu_to_core.&quot; in hwloc_get_xen_info()
</span><br>
<span class="quotelev1">&gt;     is to change the per-socket enumeration to being per system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Samuel believes that hwloc should be able to cope with duplicate
</span><br>
<span class="quotelev1">&gt;     core IDs with different cpusets, but if I attempt to do that, I
</span><br>
<span class="quotelev1">&gt;     get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /****************************************************************************/
</span><br>
<span class="quotelev1">&gt;     /* hwloc has encountered what looks like an error from the operating system./
</span><br>
<span class="quotelev1">&gt;     /*/
</span><br>
<span class="quotelev1">&gt;     /* object (Core P#0 cpuset 0x30000003) intersection without inclusion!/
</span><br>
<span class="quotelev1">&gt;     /* Error occurred in topology.c line 853/
</span><br>
<span class="quotelev1">&gt;     /*/
</span><br>
<span class="quotelev1">&gt;     /* Please report this error message to the hwloc user's mailing list,/
</span><br>
<span class="quotelev1">&gt;     /* along with the output from the hwloc-gather-topology.sh script./
</span><br>
<span class="quotelev1">&gt;     /****************************************************************************/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand what's going on here. Can you post the list of
</span><br>
<span class="quotelev1">&gt; PU/core/socket IDs that Xen reports so that I see what is unique and
</span><br>
<span class="quotelev1">&gt; what is not?
</span><br>
<p>I will get back to you with the exact ids from the problematic system.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I currently have a crazy idea for getting at the cache
</span><br>
<span class="quotelev1">&gt;     information.  topology-x86.c has a lot of cpuid knowledge, and I
</span><br>
<span class="quotelev1">&gt;     have a proposed new hypercall which executes cpuid on a specific
</span><br>
<span class="quotelev1">&gt;     PU.  Would it be possible (or indeed sensible) to parametrise the
</span><br>
<span class="quotelev1">&gt;     code in topology-x86.c to take a few function pointers for get/set
</span><br>
<span class="quotelev1">&gt;     binding information, and for the cpuid call itself?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see why we couldn't do that. Can you post an example of what
</span><br>
<span class="quotelev1">&gt; the Xen cpuid hypercall prototype would be, so that I see how I need
</span><br>
<span class="quotelev1">&gt; to change the x86 backend?
</span><br>
<p>I have already (pre-emptively) started hacking on the code.  I shall see
<br>
if I can get an RFC patch ready, but I am intending to do it will very
<br>
few changes to the cpuid code.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That way, the common x86 knowledge could be used correctly by the
</span><br>
<span class="quotelev1">&gt;     Xen component, while still keeping its current design.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything that the current Xen backend supports and that
</span><br>
<span class="quotelev1">&gt; wouldn't be feasible through x86 cpuid? The x86 component can already
</span><br>
<span class="quotelev1">&gt; detect a lot of topology information, including
</span><br>
<span class="quotelev1">&gt; cores/caches/sockets/NUMA. Maybe the NUMA node sizes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, which architectures are supported by Xen aside of x86?
</span><br>
<span class="quotelev1">&gt; Does Xen have topology information for them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Xen currently supports x86 and has experimental support for arm32 and
<br>
arm64.  The information available from the current code is generic,
<br>
should should JustWork even on the arm systems.
<br>
<p>It would certainly be interesting to see whether my current Xen code
<br>
agrees with x86 cpuid's idea of the topology.
<br>
<p>~Andrew
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4016.php">Guy Streeter: "[hwloc-devel] cython re-write of python-hwloc"</a>
<li><strong>Previous message:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4018.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4018.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
