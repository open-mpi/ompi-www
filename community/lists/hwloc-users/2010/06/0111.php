<?
$subject_val = "Re: [hwloc-users] Is OSX a supported platform ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 12:19:46 2010" -->
<!-- isoreceived="20100606161946" -->
<!-- sent="Sun, 06 Jun 2010 18:19:40 +0200" -->
<!-- isosent="20100606161940" -->
<!-- name="Olivier Cessenat" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Is OSX a supported platform ?" -->
<!-- id="1275841180.13649.51.camel_at_iliana.magic" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20100606154444.GA5358_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Is OSX a supported platform ?<br>
<strong>From:</strong> Olivier Cessenat (<em>cessenat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 12:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Olivier Cessenat: "[hwloc-users] Getting the cache hierarchy"</a>
<li><strong>In reply to:</strong> <a href="0109.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Reply:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Samuel,
<br>
<p>First thanks for your very fast answer !
<br>
Then, here are the outputs of the commands as you asked.
<br>
Occasion for yet another question, when --enable-debug is set, is there
<br>
some way to remove the messages to stderr ?
<br>
<p>Thanks.
<br>
<p>Olivier.
<br>
<p>$ sysctl hw
<br>
hw.ncpu: 2
<br>
hw.byteorder: 1234
<br>
hw.memsize: 1073741824
<br>
hw.activecpu: 2
<br>
hw.physicalcpu: 2
<br>
hw.physicalcpu_max: 2
<br>
hw.logicalcpu: 2
<br>
hw.logicalcpu_max: 2
<br>
hw.cputype: 7
<br>
hw.cpusubtype: 4
<br>
hw.cpufamily: 1114597871
<br>
hw.cacheconfig: 2 1 2 0 0 0 0 0 0 0
<br>
hw.pagesize: 4096
<br>
hw.busfrequency: 664000000
<br>
hw.busfrequency_min: 664000000
<br>
hw.busfrequency_max: 664000000
<br>
hw.cpufrequency: 2160000000
<br>
hw.cpufrequency_min: 2160000000
<br>
hw.cpufrequency_max: 2160000000
<br>
hw.cachelinesize: 64
<br>
hw.l1icachesize: 32768
<br>
hw.l1dcachesize: 32768
<br>
hw.l2cachesize: 4194304
<br>
hw.tbfrequency: 1000000000
<br>
hw.optional.floatingpoint: 1
<br>
hw.optional.mmx: 1
<br>
hw.optional.sse: 1
<br>
hw.optional.sse2: 1
<br>
hw.optional.sse3: 1
<br>
hw.optional.x86_64: 1
<br>
hw.optional.supplementalsse3: 1
<br>
hw.machine = i386
<br>
hw.model = iMac5,1
<br>
hw.ncpu = 2
<br>
hw.byteorder = 1234
<br>
hw.physmem = 1073741824
<br>
hw.usermem = 925937664
<br>
hw.pagesize = 4096
<br>
hw.epoch = 0
<br>
hw.vectorunit = 1
<br>
hw.busfrequency = 664000000
<br>
hw.cpufrequency = 2160000000
<br>
hw.cachelinesize = 64
<br>
hw.l1icachesize = 32768
<br>
hw.l1dcachesize = 32768
<br>
hw.l2settings = 1
<br>
hw.l2cachesize = 4194304
<br>
hw.tbfrequency = 1000000000
<br>
hw.memsize = 1073741824
<br>
hw.availcpu = 2
<br>
<p>$ hwloc-ls
<br>
2 procs
<br>
caches 4294967298(0kB) 2(0kB)
<br>
1 cache levels
<br>
L1cache 0 has cpuset 0x00000003
<br>
<p><p>&nbsp;* CPU cpusets *
<br>
<p>cpu 0 (os 0) has cpuset 0x00000001
<br>
cpu 1 (os 1) has cpuset 0x00000002
<br>
Machine#0 cpuset
<br>
0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff complete 0x00000003 online 0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff allowed 0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xfffffff<br>
f,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff nodeset 0x0 completeN 0x0 allowedN 0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff,0xffffffff
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002
<br>
<p>Restrict topology cpusets to existing PU and NODE objects
<br>
<p>Propagate offline and disallowed cpus down and up
<br>
<p>Propagate nodesets
<br>
Machine#0 cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001 complete 0x00000001 online 0x00000001 allowed
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002 complete 0x00000002 online 0x00000002 allowed
<br>
0x00000002
<br>
<p>Removing unauthorized and offline cpusets from all cpusets
<br>
<p>Removing disallowed memory according to nodesets
<br>
Machine#0 cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001 complete 0x00000001 online 0x00000001 allowed
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002 complete 0x00000002 online 0x00000002 allowed
<br>
0x00000002
<br>
<p>Removing ignored objects
<br>
Machine#0 cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001 complete 0x00000001 online 0x00000001 allowed
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002 complete 0x00000002 online 0x00000002 allowed
<br>
0x00000002
<br>
<p>Removing empty objects except numa nodes and PCI devices
<br>
Machine#0 cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001 complete 0x00000001 online 0x00000001 allowed
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002 complete 0x00000002 online 0x00000002 allowed
<br>
0x00000002
<br>
<p>Removing objects whose type has HWLOC_IGNORE_TYPE_KEEP_STRUCTURE and
<br>
have only one child or are the only child
<br>
Machine#0 cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001 complete 0x00000001 online 0x00000001 allowed
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002 complete 0x00000002 online 0x00000002 allowed
<br>
0x00000002
<br>
<p>Ok, finished tweaking, now connect
<br>
Machine#0 cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003 arity 1
<br>
&nbsp;&nbsp;L1Cache#0(0KB) cpuset 0x00000003 complete 0x00000003 online 0x00000003
<br>
allowed 0x00000003 arity 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001 complete 0x00000001 online 0x00000001 allowed
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002 complete 0x00000002 online 0x00000002 allowed
<br>
0x00000002
<br>
--- Cache level depth 1 has number 1
<br>
<p>--- PU level has number 2
<br>
<p><p>Propagate total memory up
<br>
Machine + L1 #0 (0KB)
<br>
&nbsp;&nbsp;PU #0 (phys=0)
<br>
&nbsp;&nbsp;PU #1 (phys=1)
<br>
<p><p><p>Le dimanche 06 juin 2010 &#195;&#160; 17:44 +0200, Samuel Thibault a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Olivier Cessenat, le Sun 06 Jun 2010 17:37:23 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I would like to get the cache sizes and hierachy;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-ls returns
</span><br>
<span class="quotelev2">&gt; &gt; &lt;&lt;
</span><br>
<span class="quotelev2">&gt; &gt; Machine + L1 #0 (0KB)
</span><br>
<span class="quotelev2">&gt; &gt;   PU #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;   PU #1 (phys=1)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; which detects my dual core, but not the cache sizes, L2 and L1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This depends on what the OS says.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this an already known behaviour ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sysctl hw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to check what the OS says?  Also, please build with --enable-debug to
</span><br>
<span class="quotelev1">&gt; enable the debugging output of hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Olivier Cessenat: "[hwloc-users] Getting the cache hierarchy"</a>
<li><strong>In reply to:</strong> <a href="0109.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Reply:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
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
