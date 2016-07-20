<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 19:37:48 2012" -->
<!-- isoreceived="20120215003748" -->
<!-- sent="Wed, 15 Feb 2012 01:37:43 +0100" -->
<!-- isosent="20120215003743" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released" -->
<!-- id="CALT_uBQWRgfMtM8_=4qEHsEiLOzJrSZXT23qTj0aaRDPBKzPpw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F2187A7.7030402_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 19:37:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0549.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Maybe reply:</strong> <a href="0549.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>thanks for releasing version 1.4. I have just created package for Fedora.
<br>
<p>I have found one minor issue - file hwloc-assembler-remote does not have
<br>
executable bit set. I had to add following to the RPM SPEC file to fix it:
<br>
<p>%{__chmod} 0755 %{buildroot}%{_bindir}/hwloc-assembler-remote
<br>
<p>Could you please fix it in the next release?
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p>On Thu, Jan 26, 2012 at 6:04 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the release
</span><br>
<span class="quotelev1">&gt; of v1.4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.4 is a major new release series.  It includes many new features and
</span><br>
<span class="quotelev1">&gt; changes over the v1.3.x series. The most noticeable improvement is the
</span><br>
<span class="quotelev1">&gt; ability to assemble the topologies of multiple nodes into a single
</span><br>
<span class="quotelev1">&gt; global one. See the Multi-node Topologies section in the documentation
</span><br>
<span class="quotelev1">&gt; for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also please note that 64bits windows builds are now available for
</span><br>
<span class="quotelev1">&gt; download.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Major features
</span><br>
<span class="quotelev1">&gt;  + Add &quot;custom&quot; interface and &quot;assembler&quot; tools to build multi-node
</span><br>
<span class="quotelev1">&gt;    topology. See the Multi-node Topologies section in the documentation
</span><br>
<span class="quotelev1">&gt;    for details.
</span><br>
<span class="quotelev1">&gt; * Interface improvements
</span><br>
<span class="quotelev1">&gt;  + Add symmetric_subtree object attribute to ease assumptions when
</span><br>
<span class="quotelev1">&gt; consulting
</span><br>
<span class="quotelev1">&gt;    regular symmetric topologies.
</span><br>
<span class="quotelev1">&gt;  + Add a CPUModel and CPUType info attribute to Socket objects on Linux
</span><br>
<span class="quotelev1">&gt;    and Solaris.
</span><br>
<span class="quotelev1">&gt;  + Add hwloc_get_obj_index_inside_cpuset() to retrieve the &quot;logical&quot; index
</span><br>
<span class="quotelev1">&gt;    of an object within a subtree of the topology.
</span><br>
<span class="quotelev1">&gt;  + Add more NVIDIA CUDA helpers in cuda.h and cudart.h to find hwloc
</span><br>
<span class="quotelev1">&gt; objects
</span><br>
<span class="quotelev1">&gt;    corresponding to CUDA devices.
</span><br>
<span class="quotelev1">&gt; * Discovery improvements
</span><br>
<span class="quotelev1">&gt;  + Add a group object above partial distance matrices to make sure
</span><br>
<span class="quotelev1">&gt;    the matrices are available in the final topology, except when this
</span><br>
<span class="quotelev1">&gt;    new object would contradict the existing hierarchy.
</span><br>
<span class="quotelev1">&gt;  + Grouping by distances now also works when loading from XML.
</span><br>
<span class="quotelev1">&gt;  + Fix some corner cases in object insertion, for instance when dealing
</span><br>
<span class="quotelev1">&gt;    with NUMA nodes without any CPU.
</span><br>
<span class="quotelev1">&gt; * Backends
</span><br>
<span class="quotelev1">&gt;  + Implement hwloc_get_area_membind() on Linux.
</span><br>
<span class="quotelev1">&gt;  + Honor I/O topology flags when importing from XML.
</span><br>
<span class="quotelev1">&gt;  + Further improve XML-related error checking and reporting.
</span><br>
<span class="quotelev1">&gt;  + Hide synthetic topology error messages unless HWLOC_SYNTHETIC_VERBOSE=1.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;  + Add synthetic exporting of symmetric topologies to lstopo.
</span><br>
<span class="quotelev1">&gt;  + lstopo --horiz and --vert can now be applied to some specific object
</span><br>
<span class="quotelev1">&gt; types.
</span><br>
<span class="quotelev1">&gt;  + lstopo -v -p now displays distance matrices with physical indexes.
</span><br>
<span class="quotelev1">&gt;  + Add hwloc-distances utility to list distances.
</span><br>
<span class="quotelev1">&gt; * Documentation
</span><br>
<span class="quotelev1">&gt;  + Fix and/or document the behavior of most inline functions in
</span><br>
<span class="quotelev1">&gt; hwloc/helper.h
</span><br>
<span class="quotelev1">&gt;    when the topology contains some I/O or Misc objects.
</span><br>
<span class="quotelev1">&gt;  + Backend documentation enhancements.
</span><br>
<span class="quotelev1">&gt; * Bug fixes
</span><br>
<span class="quotelev1">&gt;  + Fix missing last bit in hwloc_linux_get_thread_cpubind().
</span><br>
<span class="quotelev1">&gt;    Thanks to Carolina G&#195;&#179;mez-Tost&#195;&#179;n Guti&#195;&#169;rrez for reporting the issue.
</span><br>
<span class="quotelev1">&gt;  + Fix FreeBSD build without cpuid support.
</span><br>
<span class="quotelev1">&gt;  + Fix several Windows build issues.
</span><br>
<span class="quotelev1">&gt;  + Fix inline keyword definition in public headers.
</span><br>
<span class="quotelev1">&gt;  + Fix dependencies in the embedded library.
</span><br>
<span class="quotelev1">&gt;  + Improve visibility support detection. Thanks to Dave Love for providing
</span><br>
<span class="quotelev1">&gt;    the patch.
</span><br>
<span class="quotelev1">&gt;  + Remove references to internal symbols in the tools.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0549.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0547.php">Brice Goglin: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0549.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Maybe reply:</strong> <a href="0549.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
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
