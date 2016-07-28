<?
$subject_val = "[hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 14:45:41 2011" -->
<!-- isoreceived="20111214194541" -->
<!-- sent="Wed, 14 Dec 2011 11:45:21 -0800" -->
<!-- isosent="20111214194521" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1" -->
<!-- id="4EE8FCD1.20707_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 14:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice has been helping me get hwloc working on an old Red Hat Linux 8 
<br>
system.
<br>
We've appear to have gotten past the sched_setaffinity() prototype 
<br>
conflicts, and I can build hwloc.
<br>
However, when I run &quot;make check&quot; there are 640 instances of the 
<br>
following from test-hwloc-calc.sh.
<br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<p>Here is one manual run of hwloc-calc
<br>
<span class="quotelev1">&gt; $ ./utils/hwloc-calc --if synthetic --input &quot;node:4 core:4 pu:4&quot; 
</span><br>
<span class="quotelev1">&gt; pu:22-47 --largest
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; pcilib: proc_read: tried to read 256 bytes at 0, but got only 64
</span><br>
<span class="quotelev1">&gt; PU:22 PU:23 Core:6 Core:7 NUMANode:2
</span><br>
<p>I can run &quot;lspci -vv&quot; to get plenty of correct information and no such 
<br>
messages.
<br>
So, this is not just a case of total libpci breakage.
<br>
<p>Some system info:
<br>
<span class="quotelev1">&gt; $ cat /etc/redhat-release
</span><br>
<span class="quotelev1">&gt; Red Hat Linux release 8.0 (Psyche)
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux [hostname] 2.4.21-60.ELsmp #1 SMP Fri Aug 28 06:45:10 EDT 2009 
</span><br>
<span class="quotelev1">&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.2 20020903 (Red Hat Linux 8.0 3.2-7)
</span><br>
<span class="quotelev1">&gt; $ rpm -qf /usr/include/pci/pci.h
</span><br>
<span class="quotelev1">&gt; pciutils-devel-2.1.10-2
</span><br>
<span class="quotelev1">&gt; $ rpm -qf /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; glibc-2.3.2-4.80.8
</span><br>
<p>FWIW:
<br>
This system is running a kernel from RHEL due to a lack of security 
<br>
updates to RHL8.
<br>
So, it *is* possible that this is a mismatch between the kernel's /proc 
<br>
and libpci's expectations.
<br>
If that is the case, of course, then hwloc can't possibly do anything 
<br>
about it.
<br>
However &quot;lspci -vv&quot; does work, making me doubt this option.
<br>
<p>Let me know what else might be needed to address this problem (or at 
<br>
least determine if it is even a hwloc problem or not).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2640.php">Samuel Thibault: "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Reply:</strong> <a href="2642.php">Brice Goglin: "Re: [hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
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
