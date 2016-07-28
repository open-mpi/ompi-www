<?
$subject_val = "Re: [hwloc-devel] hwloc v1.5rc1 coming soon";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 11 01:28:21 2012" -->
<!-- isoreceived="20120711052821" -->
<!-- sent="Wed, 11 Jul 2012 07:28:14 +0200" -->
<!-- isosent="20120711052814" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc v1.5rc1 coming soon" -->
<!-- id="4FFD0EEE.20002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FFCE557.1070709_at_oracle.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-11 01:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3168.php">Jeff Squyres: "[hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>In reply to:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, it's this NEWS item:
<br>
<p>&nbsp;&nbsp;+ Do not limit the number of processors to 1024 on Solaris anymore.
<br>
<p><p>Brice
<br>
<p><p><p><p>Le 11/07/2012 04:30, TERRY DONTJE a &#233;crit :
<br>
<span class="quotelev1">&gt; Is this also going to include the topology_solaris.c improvements?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/10/2012 3:16 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am preparing a v1.5rc1 release, so here's the current status in case
</span><br>
<span class="quotelev2">&gt;&gt; somebody wants to comment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Major changes for is v1.5:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * instruction caches
</span><br>
<span class="quotelev2">&gt;&gt; * lstopo becomes lstopo + lstopo-no-graphics
</span><br>
<span class="quotelev2">&gt;&gt; * improvements to misc backends (AIX, FreeBSD)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Full v1.5 NEWS list:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Backends
</span><br>
<span class="quotelev2">&gt;&gt;   + Do not limit the number of processors to 1024 on Solaris anymore.
</span><br>
<span class="quotelev2">&gt;&gt;   + Gather total machine memory on FreeBSD.
</span><br>
<span class="quotelev2">&gt;&gt;   + XML topology files do not depend on the locale anymore. Float numbers
</span><br>
<span class="quotelev2">&gt;&gt;     such as NUMA distances or PCI link speeds now always use a dot as a
</span><br>
<span class="quotelev2">&gt;&gt;     decimal separator.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add instruction caches detection on Linux, AIX, Windows and Darwin.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add get_last_cpu_location() support for the current thread on AIX.
</span><br>
<span class="quotelev2">&gt;&gt;   + Support binding on AIX when threads or processes were bound with
</span><br>
<span class="quotelev2">&gt;&gt;     bindprocessor(). Thanks to Hendryk Bockelmann for reporting the issue
</span><br>
<span class="quotelev2">&gt;&gt;     and testing patches, and to Farid Parpia for explaining the binding
</span><br>
<span class="quotelev2">&gt;&gt;     interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;   + Improve AMD topology detection in the x86 backend (for FreeBSD) using
</span><br>
<span class="quotelev2">&gt;&gt;     the topoext feature.
</span><br>
<span class="quotelev2">&gt;&gt; * API
</span><br>
<span class="quotelev2">&gt;&gt;   + Increase HWLOC_API_VERSION to 0x00010500 so that API changes may be
</span><br>
<span class="quotelev2">&gt;&gt;     detected at build-time.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add a cache type attribute describind Data, Instruction and Unified
</span><br>
<span class="quotelev2">&gt;&gt;     caches. Caches with different types but same depth (for instance L1d
</span><br>
<span class="quotelev2">&gt;&gt;     and L1i) are placed on different levels.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add hwloc_get_cache_type_depth() to retrieve the hwloc level depth of
</span><br>
<span class="quotelev2">&gt;&gt;     of the given cache depth and type, for instance L1i or L2.
</span><br>
<span class="quotelev2">&gt;&gt;     It helps  disambiguating the case where hwloc_get_type_depth() returns
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_TYPE_DEPTH_MULTIPLE.
</span><br>
<span class="quotelev2">&gt;&gt;   + Instruction caches are ignored unless HWLOC_TOPOLOGY_FLAG_ICACHES is
</span><br>
<span class="quotelev2">&gt;&gt;     passed to hwloc_topology_set_flags() before load.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add hwloc_ibv_get_device_osdev_by_name() OpenFabrics helper in
</span><br>
<span class="quotelev2">&gt;&gt;     openfabrics-verbs.h to find the hwloc OS device object corresponding to
</span><br>
<span class="quotelev2">&gt;&gt;     an OpenFabrics device.
</span><br>
<span class="quotelev2">&gt;&gt; * Tools
</span><br>
<span class="quotelev2">&gt;&gt;   + Add lstopo-no-graphics, a lstopo built without graphical support to
</span><br>
<span class="quotelev2">&gt;&gt;     avoid dependencies on external libraries such as Cairo and X11. When
</span><br>
<span class="quotelev2">&gt;&gt;     supported, graphical outputs are only available in the original lstopo
</span><br>
<span class="quotelev2">&gt;&gt;     program.
</span><br>
<span class="quotelev2">&gt;&gt;     - Packagers splitting lstopo and lstopo-no-graphics into different
</span><br>
<span class="quotelev2">&gt;&gt;       packages are advised to use the alternatives system so that lstopo
</span><br>
<span class="quotelev2">&gt;&gt;       points to the best available binary.
</span><br>
<span class="quotelev2">&gt;&gt;   + Instruction caches are enabled in lstopo by default. User --no-icaches
</span><br>
<span class="quotelev2">&gt;&gt;     to disable them.
</span><br>
<span class="quotelev2">&gt;&gt;   + Add -t/--threads to show threads in hwloc-ps.
</span><br>
<span class="quotelev2">&gt;&gt; * Removal of obsolete components
</span><br>
<span class="quotelev2">&gt;&gt;   + Remove the old cpuset interface (hwloc/cpuset.h) which is deprecated and
</span><br>
<span class="quotelev2">&gt;&gt;     superseded by the bitmap API (hwloc/bitmap.h) since v1.1.
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_cpuset and nodeset types are still defined, but all hwloc_cpuset_*
</span><br>
<span class="quotelev2">&gt;&gt;     compatibility wrappers are now gone.
</span><br>
<span class="quotelev2">&gt;&gt;   + Remove Linux libnuma conversion helpers for the deprecated and
</span><br>
<span class="quotelev2">&gt;&gt;     broken nodemask_t interface.
</span><br>
<span class="quotelev2">&gt;&gt;   + Remove support for &quot;Proc&quot; type name, it was superseded by &quot;PU&quot; in v1.0.
</span><br>
<span class="quotelev2">&gt;&gt;   + Remove hwloc-mask symlinks, it was replaced by hwloc-calc in v1.0.
</span><br>
<span class="quotelev2">&gt;&gt; * Misc
</span><br>
<span class="quotelev2">&gt;&gt;   + Non-printable characters are dropped from strings during XML export.
</span><br>
<span class="quotelev2">&gt;&gt;   + Assert hwloc_is_thissystem() in several I/O related helpers.
</span><br>
<span class="quotelev2">&gt;&gt;   + Limit the number of retries when operating on all threads within a
</span><br>
<span class="quotelev2">&gt;&gt;     process on Linux if the list of threads is heavily getting modified.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Plus some item currently only listed in the v1.4 branch NEWS:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Fix PCIe 3.0 link speed computation.
</span><br>
<span class="quotelev2">&gt;&gt; * Fix importing of escaped characters with the minimalistic XML backend.
</span><br>
<span class="quotelev2">&gt;&gt; * Fix a memory leak in the x86 backend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open tickets against v1.5:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * #77: improve windows get_cpubind. I don't think I'll have time to work
</span><br>
<span class="quotelev2">&gt;&gt;   on this soon since only Hartmut can test such patches on large windows
</span><br>
<span class="quotelev2">&gt;&gt;   machines.
</span><br>
<span class="quotelev2">&gt;&gt; * #79: annotate the lstopo textual output for offline/unavailable/bound
</span><br>
<span class="quotelev2">&gt;&gt;   CPUs (red/green/black in the graphical output). Easy to implement but
</span><br>
<span class="quotelev2">&gt;&gt;   I don't have any obviously good solution yet.
</span><br>
<span class="quotelev2">&gt;&gt; * There's an OMPI ticket about hwloc fixes for a native windows build.
</span><br>
<span class="quotelev2">&gt;&gt;   We're supposed to get a patch one day.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3168.php">Jeff Squyres: "[hwloc-devel] Compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>In reply to:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
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
