<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 04:45:14 2014" -->
<!-- isoreceived="20140401084514" -->
<!-- sent="Tue, 1 Apr 2014 10:45:12 +0200" -->
<!-- isosent="20140401084512" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released" -->
<!-- id="CALT_uBSn_ANPCXnz29QNZfEzH_ZczTRAdJZkWSrbWvdaS-j_SA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5332BE7B.7070200_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 04:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>no more warning detected with rpmlint
<br>
<p>hwloc-gui.x86_64: W: manual-page-warning /usr/share/man/man1/lstopo.1.gz
<br>
66: cannot use a space as a starting delimiter
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p>On Wed, Mar 26, 2014 at 12:48 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the release
</span><br>
<span class="quotelev1">&gt; of v1.9:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.9 is a major new release series.
</span><br>
<span class="quotelev1">&gt; It adds a couple enhanced API functions, many object attributes for
</span><br>
<span class="quotelev1">&gt; better representing CPU and I/O device characteristics, and more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_obj_type_sscanf() to extend hwloc_obj_type_of_string() with
</span><br>
<span class="quotelev1">&gt;     type-specific attributes such as Cache/Group depth and Cache type.
</span><br>
<span class="quotelev1">&gt;     hwloc_obj_type_of_string() is moved to hwloc/deprecated.h.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_linux_get_tid_last_cpu_location() for retrieving the
</span><br>
<span class="quotelev1">&gt;     last CPU where a Linux thread given by TID ran.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_distrib() to extend the old hwloc_distribute[v]() functions.
</span><br>
<span class="quotelev1">&gt;     hwloc_distribute[v]() is moved to hwloc/deprecated.h.
</span><br>
<span class="quotelev1">&gt;   + Don't mix total and local memory when displaying verbose object
</span><br>
<span class="quotelev1">&gt; attributes
</span><br>
<span class="quotelev1">&gt;     with hwloc_obj_attr_snprintf() or in lstopo.
</span><br>
<span class="quotelev1">&gt; * Backends
</span><br>
<span class="quotelev1">&gt;   + Add CPUVendor, CPUModelNumber and CPUFamilyNumber info attributes for
</span><br>
<span class="quotelev1">&gt;     x86, ia64 and Xeon Phi sockets on Linux, to extend the x86-specific
</span><br>
<span class="quotelev1">&gt;     support added in v1.8.1. Requested by Ralph Castain.
</span><br>
<span class="quotelev1">&gt;   + Add many CPU- and Platform-related info attributes on ARM and POWER
</span><br>
<span class="quotelev1">&gt;     platforms, in the Machine and Socket objects.
</span><br>
<span class="quotelev1">&gt;   + Add CUDA info attributes describing the number of multiprocessors and
</span><br>
<span class="quotelev1">&gt;     cores and the size of the global, shared and L2 cache memories in CUDA
</span><br>
<span class="quotelev1">&gt;     OS devices.
</span><br>
<span class="quotelev1">&gt;   + Add OpenCL info attributes describing the number of compute units and
</span><br>
<span class="quotelev1">&gt;     the global memory size in OpenCL OS devices.
</span><br>
<span class="quotelev1">&gt;   + The synthetic backend now accepts extended types such as L2Cache, L1i
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;     Group3. lstopo also exports synthetic strings using these extended
</span><br>
<span class="quotelev1">&gt; types.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + lstopo
</span><br>
<span class="quotelev1">&gt;     - Do not overwrite output files by default anymore.
</span><br>
<span class="quotelev1">&gt;       Pass -f or --force to enforce it.
</span><br>
<span class="quotelev1">&gt;     - Display OpenCL, CUDA and Xeon Phi numbers of cores and memory sizes
</span><br>
<span class="quotelev1">&gt;       in the graphical output.
</span><br>
<span class="quotelev1">&gt;     - Fix export to stdout when specifying a Cairo-based output type
</span><br>
<span class="quotelev1">&gt;       with --of.
</span><br>
<span class="quotelev1">&gt;   + hwloc-ps
</span><br>
<span class="quotelev1">&gt;     - Add -e or --get-last-cpu-location to report where processes/threads
</span><br>
<span class="quotelev1">&gt;       run instead of where they are bound.
</span><br>
<span class="quotelev1">&gt;     - Report locations as likely-more-useful objects such as Cores or
</span><br>
<span class="quotelev1">&gt; Sockets
</span><br>
<span class="quotelev1">&gt;       instead of Caches when possible.
</span><br>
<span class="quotelev1">&gt;   + hwloc-bind
</span><br>
<span class="quotelev1">&gt;     - Fix failure on Windows when not using --pid.
</span><br>
<span class="quotelev1">&gt;     - Add -e as a synonym to --get-last-cpu-location.
</span><br>
<span class="quotelev1">&gt;   + hwloc-distrib
</span><br>
<span class="quotelev1">&gt;     - Add --reverse to distribute using last objects first and singlify
</span><br>
<span class="quotelev1">&gt;       into last bits first. Thanks to Jirka Hladky for the suggestion.
</span><br>
<span class="quotelev1">&gt;   + hwloc-info
</span><br>
<span class="quotelev1">&gt;     - Report unified caches when looking for data or instruction cache
</span><br>
<span class="quotelev1">&gt;       ancestor objects.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;   + Add experimental Visual Studio support under contrib/windows.
</span><br>
<span class="quotelev1">&gt;     Thanks to Eloi Gaudry for his help and for providing the first draft.
</span><br>
<span class="quotelev1">&gt;   + Fix some overzealous assertions and warnings about the ordering of
</span><br>
<span class="quotelev1">&gt;     objects on a level with respect to cpusets. The ordering is only
</span><br>
<span class="quotelev1">&gt;     guaranteed for complete cpusets (based on the first bit in sets).
</span><br>
<span class="quotelev1">&gt;   + Fix some memory leaks when importing xml diffs and when exporting a
</span><br>
<span class="quotelev1">&gt;     &quot;too complex&quot; entry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since v1.9rc1 only consists in minor documentation updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-announce mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1016.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
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
