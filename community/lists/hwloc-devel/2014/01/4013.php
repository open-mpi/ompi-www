<?
$subject_val = "[hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 06:19:50 2014" -->
<!-- isoreceived="20140107111950" -->
<!-- sent="Tue, 7 Jan 2014 11:19:48 +0000" -->
<!-- isosent="20140107111948" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52CBE2D4.3050001_at_citrix.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 06:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Please find v2 of Xen support here:
<br>
<p><a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v2">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v2</a>
<br>
<p>This branch contains a few of Brice's patches to export more functions
<br>
for plugins, as well as the main Xen patch which is a merge of various
<br>
fixes against it since I originally posted.
<br>
<p>Xen support is usable as a plugin, and has a default of 0, requiring
<br>
explicit activation using &quot;HWLOC_COMPONENTS=xen&quot; when running in dom0.
<br>
<p>It currently supports PU, Core, NUMA Node and Socket enumeration, with
<br>
memory information for NUMA nodes.
<br>
<p><p>The code is based on top of master, and there is possibly a bug,
<br>
(Original thread:
<br>
<a href="http://lists.xen.org/archives/html/xen-devel/2014-01/msg00104.html">http://lists.xen.org/archives/html/xen-devel/2014-01/msg00104.html</a> ).
<br>
<p>One of the issues I had was that the Core IDs (as reported by Xen) are
<br>
enumerated per socket rather than as an entire system.  The purpose of
<br>
&quot;HACK - patch up cpu_to_core.&quot; in hwloc_get_xen_info() is to change the
<br>
per-socket enumeration to being per system.
<br>
<p>Samuel believes that hwloc should be able to cope with duplicate core
<br>
IDs with different cpusets, but if I attempt to do that, I get the
<br>
following error:
<br>
<p>/****************************************************************************/
<br>
/* hwloc has encountered what looks like an error from the operating system./
<br>
/*/
<br>
/* object (Core P#0 cpuset 0x30000003) intersection without inclusion!/
<br>
/* Error occurred in topology.c line 853/
<br>
/*/
<br>
/* Please report this error message to the hwloc user's mailing list,/
<br>
/* along with the output from the hwloc-gather-topology.sh script./
<br>
/****************************************************************************/
<br>
<p>(Although in this case, I am quite certain that hwloc-gather-topology.sh
<br>
will be of little use.)
<br>
<p><p>I currently have a crazy idea for getting at the cache information. 
<br>
topology-x86.c has a lot of cpuid knowledge, and I have a proposed new
<br>
hypercall which executes cpuid on a specific PU.  Would it be possible
<br>
(or indeed sensible) to parametrise the code in topology-x86.c to take a
<br>
few function pointers for get/set binding information, and for the cpuid
<br>
call itself?
<br>
<p>That way, the common x86 knowledge could be used correctly by the Xen
<br>
component, while still keeping its current design.
<br>
<p><p>~Andrew
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4014.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
