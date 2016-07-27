<?
$subject_val = "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 04:08:21 2010" -->
<!-- isoreceived="20101201090821" -->
<!-- sent="Wed, 1 Dec 2010 17:07:56 +0800" -->
<!-- isosent="20101201090756" -->
<!-- name="Wei Lin" -->
<!-- email="weilin_at_[hidden]" -->
<!-- subject="[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor" -->
<!-- id="DFA9E2C8156D4E4C89FF64AB3C4F1999388B8F_at_cnbjexm03.asia.corp.platform.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor<br>
<strong>From:</strong> Wei Lin (<em>weilin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 04:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="1646.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<li><strong>Reply:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<li><strong>Maybe reply:</strong> <a href="1650.php">Samuel Thibault: "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, hwloc-devel
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I cannot find the code branch from &quot;src/topology-x86.c &quot;which can
<br>
support for 32-bit APIC ID and CPUID leaf 0xb of Intel's new processors.
<br>
<p><p>So I think current hwLoc cannot support for latest Intel CPU with
<br>
x2APIC.
<br>
<p>&nbsp;
<br>
<p>Linux kernel 2.6.30 or following version already supports this hardware
<br>
feature 
<br>
<p>and uses CPUID leaf 0xb to recognize the topology for more than 1024
<br>
logical processors in SGI's super computer.
<br>
<p>&nbsp;
<br>
<p>I think hwloc could also support this. 
<br>
<p>&nbsp;
<br>
<p>The following docs from Intel give details about x2APIC:
<br>
<p><a href="http://www.intel.com/Assets/PDF/appnote/241618.pdf">http://www.intel.com/Assets/PDF/appnote/241618.pdf</a>
<br>
<p><a href="http://www.intel.com/Assets/pdf/manual/318148.pdf">http://www.intel.com/Assets/pdf/manual/318148.pdf</a>
<br>
<p>&nbsp;&nbsp;&nbsp;or &lt;&lt;Intel(r) 64 Architecture Processor Topology Enumeration&gt;&gt;
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Wei Lin 
<br>
<p>2010-12-1
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="1646.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<li><strong>Reply:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<li><strong>Maybe reply:</strong> <a href="1650.php">Samuel Thibault: "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
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
