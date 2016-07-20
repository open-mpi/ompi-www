<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 16:25:56 2014" -->
<!-- isoreceived="20140213212556" -->
<!-- sent="Thu, 13 Feb 2014 22:25:56 +0100" -->
<!-- isosent="20140213212556" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released" -->
<!-- id="CALT_uBR5Og7n6HWKsGRJMqVB0F8wPRT1puuVq4tKnsm_KtsOBw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="52F0FE32.9020008_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 16:25:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0982.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="0980.php">Brice Goglin: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0982.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Reply:</strong> <a href="0982.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>when compiling hwloc-1.8.1 I have seen these warnings. Could you please
<br>
check them?
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<p>PS: thank you for distrib-reverse branch! I'm now looking into it and will
<br>
send you feedback soon.
<br>
<p>topology-pci.c: In function 'hwloc_look_pci':
<br>
topology-pci.c:256:7: warning: ignoring return value of 'fread', declared
<br>
with attribute warn_unused_result [-Wunused-result]
<br>
topology-pci.c:264:7: warning: ignoring return value of 'fread', declared
<br>
with attribute warn_unused_result [-Wunused-result]
<br>
topology-linux.c: In function 'hwloc_look_linuxfs_pci':
<br>
topology-linux.c:4499:12: warning: ignoring return value of 'fread',
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
topology-linux.c:4506:12: warning: ignoring return value of 'fread',
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
topology-linux.c:4513:12: warning: ignoring return value of 'fread',
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
topology-linux.c:4520:12: warning: ignoring return value of 'fread',
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
topology-linux.c:4527:12: warning: ignoring return value of 'fread',
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
topology-linux.c:4541:7: warning: ignoring return value of 'fread',
<br>
declared with attribute warn_unused_result [-Wunused-result]
<br>
<p><p>topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
<br>
topology-windows.c:338:30: warning: assignment from incompatible pointer
<br>
type [enabled by default]
<br>
topology-windows.c:343:28: warning: assignment from incompatible pointer
<br>
type [enabled by default]
<br>
topology-windows.c: In function 'hwloc_look_windows':
<br>
topology-windows.c:500:36: warning: assignment from incompatible pointer
<br>
type [enabled by default]
<br>
topology-windows.c:501:38: warning: assignment from incompatible pointer
<br>
type [enabled by default]
<br>
<p><p><p>On Tue, Feb 4, 2014 at 3:50 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the release
</span><br>
<span class="quotelev1">&gt; of v1.8.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.8.1 is (mostly) a bug fix release which addresses all known bugs in
</span><br>
<span class="quotelev1">&gt; the v1.8 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following is a summary of the changes since v1.8:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Fix the cpuid code on Windows 64bits so that the x86 backend gets
</span><br>
<span class="quotelev1">&gt;   enabled as expected and can populate CPU information.
</span><br>
<span class="quotelev1">&gt;   Thanks to Robin Scher for reporting the problem.
</span><br>
<span class="quotelev1">&gt; * Add CPUVendor/CPUModelNumber/CPUFamilyNumber attributes when running
</span><br>
<span class="quotelev1">&gt;   on x86 architecture. Thanks to Ralph Castain for the suggestion.
</span><br>
<span class="quotelev1">&gt; * Work around buggy BIOS reporting duplicate NUMA nodes on Linux.
</span><br>
<span class="quotelev1">&gt;   Thanks to Jeff Becker for reporting the problem and testing the patch.
</span><br>
<span class="quotelev1">&gt; * Add a name to the lstopo graphical window. Thanks to Michael Prokop
</span><br>
<span class="quotelev1">&gt;   for reporting the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since rc1 include the last item and some minor documentation
</span><br>
<span class="quotelev1">&gt; updates.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0981/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0982.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="0980.php">Brice Goglin: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0982.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Reply:</strong> <a href="0982.php">Brice Goglin: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
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
