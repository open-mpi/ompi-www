<?
$subject_val = "Re: [hwloc-users] Object Depth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 06:54:27 2012" -->
<!-- isoreceived="20120313105427" -->
<!-- sent="Tue, 13 Mar 2012 11:54:22 +0100" -->
<!-- isosent="20120313105422" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Object Depth" -->
<!-- id="20120313105422.GS4466_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="789000618.75233.1331634798429.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Object Depth<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 06:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0571.php">Marwan Abd Ellah: "[hwloc-users] Object Depth"</a>
<li><strong>Maybe in reply to:</strong> <a href="0571.php">Marwan Abd Ellah: "[hwloc-users] Object Depth"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marwan Abd Ellah, le Tue 13 Mar 2012 11:33:18 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I was using the HWLoc library v 1.4.1 for getting a cpuset of the socket
</span><br>
<span class="quotelev1">&gt; connected to a certain PCI device (mainly GPU). When I was trying to print the
</span><br>
<span class="quotelev1">&gt; topology tree I got the following&#160;
</span><br>
<span class="quotelev1">&gt; Machine#0(12GB)
</span><br>
<span class="quotelev1">&gt; &#160; Socket#0
</span><br>
<span class="quotelev1">&gt; &#160; &#160; L3(12MB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; L2(256KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; L1(32KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Core#0
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#0
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#6
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; L2(256KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; L1(32KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Core#1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#7
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; L2(256KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; L1(32KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Core#2
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#2
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#8
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; L2(256KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; L1(32KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Core#8
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#3
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#9
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; L2(256KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; L1(32KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Core#9
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#4
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#10
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; L2(256KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; L1(32KB)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Core#10
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#5
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; PU#11
</span><br>
<span class="quotelev1">&gt; &#160; HostBridge#0
</span><br>
<span class="quotelev1">&gt; &#160; &#160; PCIBridge#16
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; PCI 1b4b:9123#4096
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; Block
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; Block
</span><br>
<span class="quotelev1">&gt; &#160; &#160; PCIBridge#48
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; PCI 10de:1086#12288
</span><br>
<span class="quotelev1">&gt; &#160; &#160; PCI 8086:10ce#400
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; Net
</span><br>
<span class="quotelev1">&gt; &#160; &#160; PCIBridge#452
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; PCI 197b:2363#20480
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; PCI 197b:2363#20481
</span><br>
<span class="quotelev1">&gt; &#160; &#160; PCI 8086:3a20#498
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; Block
</span><br>
<span class="quotelev1">&gt; &#160; &#160; PCI 8086:3a26#501
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that the Socket30 and the HostBridge#0 are at the same level
</span><br>
<span class="quotelev1">&gt; (hwloc_obj_t-&gt;depth), but fetching this parameter for each object, I have a
</span><br>
<span class="quotelev1">&gt; correct value for the Socket which is 1 and &quot;-3&quot; for the host bridge. Do you
</span><br>
<span class="quotelev1">&gt; have a clue about this?&#160;
</span><br>
<p>The depth is not exactly the same as the tree depth, even for CPUs, for
<br>
instance you could have such heterogeneous case:
<br>
<p>Machine
<br>
&nbsp;&nbsp;Socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;core
<br>
&nbsp;&nbsp;Socket
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;core
<br>
<p>hwloc will make sure that all L2 caches have the same depth value, even
<br>
if in the tree they don't.
<br>
<p>In the case of PCI devices, we just put them aside on completely
<br>
separate depths, so that applications can continue using depths as an
<br>
orthogonal way to address CPU objects.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0573.php">Hartmut Kaiser: "[hwloc-users] Problems on SMP with 48 cores"</a>
<li><strong>Previous message:</strong> <a href="0571.php">Marwan Abd Ellah: "[hwloc-users] Object Depth"</a>
<li><strong>Maybe in reply to:</strong> <a href="0571.php">Marwan Abd Ellah: "[hwloc-users] Object Depth"</a>
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
