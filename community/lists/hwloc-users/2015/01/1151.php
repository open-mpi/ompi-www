<?
$subject_val = "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 17 14:55:50 2015" -->
<!-- isoreceived="20150117195550" -->
<!-- sent="Sat, 17 Jan 2015 20:55:48 +0100" -->
<!-- isosent="20150117195548" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system" -->
<!-- id="54BABE44.4090703_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="868uh1yz2m.fsf_at_gly.ftfl.ca" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-17 14:55:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/02/1152.php">Mads Boye: "[hwloc-users] hwloc-gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1150.php">Joseph Mingrone: "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>In reply to:</strong> <a href="1150.php">Joseph Mingrone: "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
This is a widespread problem with AMD machines. Buggy platform reporting
<br>
invalid L3 cache information in this case. Upgrading the BIOS may help.
<br>
Anyway, I guess Slurm doesn't care much about L3 cache affinity, so you
<br>
can ignore the error by setting HWLOC_HIDE_ERRORS=1 in the environment.
<br>
More details also
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error</a>
<br>
Brice
<br>
<p><p>Le 17/01/2015 20:41, Joseph Mingrone a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the error message we see when staring slurmd or running
</span><br>
<span class="quotelev1">&gt; hwloc-info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (P#6 cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with any relevant topology information from your platform.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:       4 Socket (type #3)
</span><br>
<span class="quotelev1">&gt;   depth 2:      8 NUMANode (type #2)
</span><br>
<span class="quotelev1">&gt;    depth 3:     8 L3Cache (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:    24 L2Cache (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 5:   24 L1iCache (type #4)
</span><br>
<span class="quotelev1">&gt;       depth 6:  48 L1dCache (type #4)
</span><br>
<span class="quotelev1">&gt;        depth 7: 48 Core (type #5)
</span><br>
<span class="quotelev1">&gt;         depth 8:        48 PU (type #6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a system with four 12-core 6348 AMD CPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other nodes with older AMD CPUs also running FreeBSD 10.1 don't report
</span><br>
<span class="quotelev1">&gt; the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is any other information I can provide, please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joseph
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1150.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/01/1150.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/02/1152.php">Mads Boye: "[hwloc-users] hwloc-gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1150.php">Joseph Mingrone: "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>In reply to:</strong> <a href="1150.php">Joseph Mingrone: "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
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
