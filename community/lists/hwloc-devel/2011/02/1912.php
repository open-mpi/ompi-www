<?
$subject_val = "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 10:49:02 2011" -->
<!-- isoreceived="20110207154902" -->
<!-- sent="Mon, 07 Feb 2011 16:48:56 +0100" -->
<!-- isosent="20110207154856" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode" -->
<!-- id="4D501468.20407_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1297089650.12560.125.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 10:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1913.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3167)"</a>
<li><strong>Previous message:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>In reply to:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/02/2011 15:40, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; When setting HWLOC_IGNORE_DISTANCES=1, hwloc-1.1 does not crash on this
</span><br>
<span class="quotelev1">&gt; machine, but produces a somehow unusual topology.
</span><br>
<p>Unusual but not so wrong given what the OS/BIOS says.
<br>
<span class="quotelev1">&gt;  Btw. the same topology
</span><br>
<span class="quotelev1">&gt; error is got when applying a trivial fix to the grouping code, namely
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- src/topology.c.bak	2010-11-25 15:54:33.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ src/topology.c	2011-02-07 10:55:14.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -269,6 +269,7 @@
</span><br>
<span class="quotelev1">&gt;        memset(groupdistances, 0, sizeof(groupdistances));
</span><br>
<span class="quotelev1">&gt;        for(i=0; i&lt;nbobjs; i++)
</span><br>
<span class="quotelev1">&gt;            for(j=0; j&lt;nbobjs; j++)
</span><br>
<span class="quotelev1">&gt; +	    if(groupids[i] &amp;&amp; groupids[j])
</span><br>
<span class="quotelev1">&gt;                groupdistances[groupids[i]-1][groupids[j]-1] += (*distances)[i][j];
</span><br>
<span class="quotelev1">&gt;        for(i=0; i&lt;nbgroups; i++)
</span><br>
<span class="quotelev1">&gt;            for(j=0; j&lt;nbgroups; j++)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Your patch looks good, thanks.
<br>
<p><span class="quotelev1">&gt; The topology error is: the 1st NODE object contains 2 sockets, instead
</span><br>
<span class="quotelev1">&gt; of one. The additional socket contains the processors of the lost node
</span><br>
<span class="quotelev1">&gt; 29.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how to deal with that, since /sys/devices/system/cpu is
</span><br>
<span class="quotelev1">&gt; inconsistent with /sys/devices/system/node on this machine.
</span><br>
<span class="quotelev1">&gt;  A naive idea
</span><br>
<span class="quotelev1">&gt; would be to implement such a consistency check. On this machine the node
</span><br>
<span class="quotelev1">&gt; ID of a cpu is found in
</span><br>
<span class="quotelev1">&gt; /sys/devices/system/cpu/cpu*/topology/physical_package_id
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The physical package id is a socket id, it's not the same than the
<br>
memory node id. At least on Itanium machines you can have two physical
<br>
package id within the same numa node (or any non-NUMA pre-Nehalem Intel
<br>
machine). With AMD Magny-Cours you have two NUMA node ids inside the
<br>
same physical package id.
<br>
<p>I don't think there is an inconsistency between /sys/devices/system/cpu
<br>
and /node here. It's just a bogus topology info that the kernel exposes
<br>
in a consistent manner.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1913.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3167)"</a>
<li><strong>Previous message:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>In reply to:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
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
