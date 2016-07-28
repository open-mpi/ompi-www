<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 16:55:19 2016" -->
<!-- isoreceived="20160210215519" -->
<!-- sent="Wed, 10 Feb 2016 22:55:17 +0100" -->
<!-- isosent="20160210215517" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion" -->
<!-- id="56BBB1C5.9040308_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56BB9DD5.8030209_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] object intersection without inclusion<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 16:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/03/1258.php">Brice Goglin: "[hwloc-users] anybody still has access to Itanium?"</a>
<li><strong>Previous message:</strong> <a href="1256.php">Fabricio Cannini: "[hwloc-users] object intersection without inclusion"</a>
<li><strong>In reply to:</strong> <a href="1256.php">Fabricio Cannini: "[hwloc-users] object intersection without inclusion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>compute-0-12 reports totally buggy NUMA information:
<br>
<p>$ cat compute-0-12/sys/devices/system/node/node*/cpumap
<br>
00000000,000000ff
<br>
00000000,ff00ff00
<br>
00000000,00ff0000
<br>
0000ffff,00000000
<br>
$ cat compute-0-0/sys/devices/system/node/node*/cpumap
<br>
00000000,000000ff
<br>
00000000,0000ff00
<br>
00000000,00ff0000
<br>
00000000,ff000000
<br>
000000ff,00000000
<br>
0000ff00,00000000
<br>
00ff0000,00000000
<br>
ff000000,00000000
<br>
<p>This is likely a BIOS bug, and indeed the BIOS is older on compute-0-0
<br>
(3.0a instead of 3.5). I would suggest trying the latest 3.5a from
<br>
<a href="http://www.supermicro.com/support/resources/results.aspx">http://www.supermicro.com/support/resources/results.aspx</a>
<br>
If it doesn't help, you should ask SuperMicro to provide the old 3.0a
<br>
(and report the issue)
<br>
<p>Brice
<br>
<p><p><p>Le 10/02/2016 21:30, Fabricio Cannini a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm facing an issue with hwloc 1.5.3 (old, i know, but it's the stock
</span><br>
<span class="quotelev1">&gt; centos 6 package) in that a single node emits this message whenever i
</span><br>
<span class="quotelev1">&gt; run any MPI-enabled program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object (Socket P#0 cpuset 0x0000ffff) intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 718
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This happen only in one node. Other similar nodes (same hardware, same
</span><br>
<span class="quotelev1">&gt; OS, same software) run fine. The OS is centos 6.5 x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the attachments, 'compute-0-0' is the healthy node, 'compute-0-12'
</span><br>
<span class="quotelev1">&gt; is the quirky one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to point the faulty hardware from the attached outputs ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt; Fabricio
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/03/1258.php">Brice Goglin: "[hwloc-users] anybody still has access to Itanium?"</a>
<li><strong>Previous message:</strong> <a href="1256.php">Fabricio Cannini: "[hwloc-users] object intersection without inclusion"</a>
<li><strong>In reply to:</strong> <a href="1256.php">Fabricio Cannini: "[hwloc-users] object intersection without inclusion"</a>
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
