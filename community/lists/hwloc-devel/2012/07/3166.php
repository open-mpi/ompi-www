<?
$subject_val = "Re: [hwloc-devel] hwloc v1.5rc1 coming soon";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 22:30:54 2012" -->
<!-- isoreceived="20120711023054" -->
<!-- sent="Tue, 10 Jul 2012 22:30:47 -0400" -->
<!-- isosent="20120711023047" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc v1.5rc1 coming soon" -->
<!-- id="4FFCE557.1070709_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FFC7F87.6050803_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc v1.5rc1 coming soon<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 22:30:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>Previous message:</strong> <a href="3165.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4609)"</a>
<li><strong>In reply to:</strong> <a href="3164.php">Brice Goglin: "[hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>Reply:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this also going to include the topology_solaris.c improvements?
<br>
<p>--td
<br>
<p>On 7/10/2012 3:16 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I am preparing a v1.5rc1 release, so here's the current status in case
</span><br>
<span class="quotelev1">&gt; somebody wants to comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Major changes for is v1.5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * instruction caches
</span><br>
<span class="quotelev1">&gt; * lstopo becomes lstopo + lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; * improvements to misc backends (AIX, FreeBSD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Full v1.5 NEWS list:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Backends
</span><br>
<span class="quotelev1">&gt;    + Do not limit the number of processors to 1024 on Solaris anymore.
</span><br>
<span class="quotelev1">&gt;    + Gather total machine memory on FreeBSD.
</span><br>
<span class="quotelev1">&gt;    + XML topology files do not depend on the locale anymore. Float numbers
</span><br>
<span class="quotelev1">&gt;      such as NUMA distances or PCI link speeds now always use a dot as a
</span><br>
<span class="quotelev1">&gt;      decimal separator.
</span><br>
<span class="quotelev1">&gt;    + Add instruction caches detection on Linux, AIX, Windows and Darwin.
</span><br>
<span class="quotelev1">&gt;    + Add get_last_cpu_location() support for the current thread on AIX.
</span><br>
<span class="quotelev1">&gt;    + Support binding on AIX when threads or processes were bound with
</span><br>
<span class="quotelev1">&gt;      bindprocessor(). Thanks to Hendryk Bockelmann for reporting the issue
</span><br>
<span class="quotelev1">&gt;      and testing patches, and to Farid Parpia for explaining the binding
</span><br>
<span class="quotelev1">&gt;      interfaces.
</span><br>
<span class="quotelev1">&gt;    + Improve AMD topology detection in the x86 backend (for FreeBSD) using
</span><br>
<span class="quotelev1">&gt;      the topoext feature.
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;    + Increase HWLOC_API_VERSION to 0x00010500 so that API changes may be
</span><br>
<span class="quotelev1">&gt;      detected at build-time.
</span><br>
<span class="quotelev1">&gt;    + Add a cache type attribute describind Data, Instruction and Unified
</span><br>
<span class="quotelev1">&gt;      caches. Caches with different types but same depth (for instance L1d
</span><br>
<span class="quotelev1">&gt;      and L1i) are placed on different levels.
</span><br>
<span class="quotelev1">&gt;    + Add hwloc_get_cache_type_depth() to retrieve the hwloc level depth of
</span><br>
<span class="quotelev1">&gt;      of the given cache depth and type, for instance L1i or L2.
</span><br>
<span class="quotelev1">&gt;      It helps  disambiguating the case where hwloc_get_type_depth() returns
</span><br>
<span class="quotelev1">&gt;      HWLOC_TYPE_DEPTH_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;    + Instruction caches are ignored unless HWLOC_TOPOLOGY_FLAG_ICACHES is
</span><br>
<span class="quotelev1">&gt;      passed to hwloc_topology_set_flags() before load.
</span><br>
<span class="quotelev1">&gt;    + Add hwloc_ibv_get_device_osdev_by_name() OpenFabrics helper in
</span><br>
<span class="quotelev1">&gt;      openfabrics-verbs.h to find the hwloc OS device object corresponding to
</span><br>
<span class="quotelev1">&gt;      an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;    + Add lstopo-no-graphics, a lstopo built without graphical support to
</span><br>
<span class="quotelev1">&gt;      avoid dependencies on external libraries such as Cairo and X11. When
</span><br>
<span class="quotelev1">&gt;      supported, graphical outputs are only available in the original lstopo
</span><br>
<span class="quotelev1">&gt;      program.
</span><br>
<span class="quotelev1">&gt;      - Packagers splitting lstopo and lstopo-no-graphics into different
</span><br>
<span class="quotelev1">&gt;        packages are advised to use the alternatives system so that lstopo
</span><br>
<span class="quotelev1">&gt;        points to the best available binary.
</span><br>
<span class="quotelev1">&gt;    + Instruction caches are enabled in lstopo by default. User --no-icaches
</span><br>
<span class="quotelev1">&gt;      to disable them.
</span><br>
<span class="quotelev1">&gt;    + Add -t/--threads to show threads in hwloc-ps.
</span><br>
<span class="quotelev1">&gt; * Removal of obsolete components
</span><br>
<span class="quotelev1">&gt;    + Remove the old cpuset interface (hwloc/cpuset.h) which is deprecated and
</span><br>
<span class="quotelev1">&gt;      superseded by the bitmap API (hwloc/bitmap.h) since v1.1.
</span><br>
<span class="quotelev1">&gt;      hwloc_cpuset and nodeset types are still defined, but all hwloc_cpuset_*
</span><br>
<span class="quotelev1">&gt;      compatibility wrappers are now gone.
</span><br>
<span class="quotelev1">&gt;    + Remove Linux libnuma conversion helpers for the deprecated and
</span><br>
<span class="quotelev1">&gt;      broken nodemask_t interface.
</span><br>
<span class="quotelev1">&gt;    + Remove support for &quot;Proc&quot; type name, it was superseded by &quot;PU&quot; in v1.0.
</span><br>
<span class="quotelev1">&gt;    + Remove hwloc-mask symlinks, it was replaced by hwloc-calc in v1.0.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;    + Non-printable characters are dropped from strings during XML export.
</span><br>
<span class="quotelev1">&gt;    + Assert hwloc_is_thissystem() in several I/O related helpers.
</span><br>
<span class="quotelev1">&gt;    + Limit the number of retries when operating on all threads within a
</span><br>
<span class="quotelev1">&gt;      process on Linux if the list of threads is heavily getting modified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Plus some item currently only listed in the v1.4 branch NEWS:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Fix PCIe 3.0 link speed computation.
</span><br>
<span class="quotelev1">&gt; * Fix importing of escaped characters with the minimalistic XML backend.
</span><br>
<span class="quotelev1">&gt; * Fix a memory leak in the x86 backend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open tickets against v1.5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * #77: improve windows get_cpubind. I don't think I'll have time to work
</span><br>
<span class="quotelev1">&gt;    on this soon since only Hartmut can test such patches on large windows
</span><br>
<span class="quotelev1">&gt;    machines.
</span><br>
<span class="quotelev1">&gt; * #79: annotate the lstopo textual output for offline/unavailable/bound
</span><br>
<span class="quotelev1">&gt;    CPUs (red/green/black in the graphical output). Easy to implement but
</span><br>
<span class="quotelev1">&gt;    I don't have any obviously good solution yet.
</span><br>
<span class="quotelev1">&gt; * There's an OMPI ticket about hwloc fixes for a native windows build.
</span><br>
<span class="quotelev1">&gt;    We're supposed to get a patch one day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>Previous message:</strong> <a href="3165.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4609)"</a>
<li><strong>In reply to:</strong> <a href="3164.php">Brice Goglin: "[hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>Reply:</strong> <a href="3167.php">Brice Goglin: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
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
