<?
$subject_val = "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 10:29:38 2014" -->
<!-- isoreceived="20140106152938" -->
<!-- sent="Mon, 06 Jan 2014 16:29:36 +0100" -->
<!-- isosent="20140106152936" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter" -->
<!-- id="52CACBE0.1020700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e2d5d6826e3a44fbb42c3ba5826ae970_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-06 10:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On windows, set/get_cpubind() are implemented by called
<br>
set/get_proc_cpubind() with GetCurrentProcess() as a 2nd argument, so
<br>
your code should be doing exactly the same, and I don't see what could
<br>
be going on here.
<br>
Do you pass any flag in these cpubind functions ?
<br>
Do you get any useful error code in errno ?
<br>
<p>Brice
<br>
<p><p><p><p>static int
<br>
hwloc_win_set_thisproc_cpubind(hwloc_topology_t topology,
<br>
hwloc_const_bitmap_t hwloc_set, int flags)
<br>
{
<br>
&nbsp;&nbsp;return hwloc_win_set_proc_cpubind(topology, GetCurrentProcess(),
<br>
hwloc_set, flags);
<br>
}
<br>
<p>static int
<br>
hwloc_win_get_thisproc_cpubind(hwloc_topology_t topology, hwloc_bitmap_t
<br>
hwloc_cpuset, int flags)
<br>
{
<br>
&nbsp;&nbsp;return hwloc_win_get_proc_cpubind(topology, GetCurrentProcess(),
<br>
hwloc_cpuset, flags);
<br>
}
<br>
<p><p><p><p>Le 06/01/2014 16:04, Eloi Gaudry a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Windows, hwloc_get_cpubind and hwloc_set_cpubind works correctly
</span><br>
<span class="quotelev1">&gt; but I cannot use hwloc_get_proc_cpubind or hwloc_set_proc_cpubind
</span><br>
<span class="quotelev1">&gt; using the current process handle as 2^nd parameter (no matter what the
</span><br>
<span class="quotelev1">&gt; last one is).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clue on this ? I'm trying to add support for Windows to an
</span><br>
<span class="quotelev1">&gt; hwloc-ps like utility, thus, I need to be able to use the
</span><br>
<span class="quotelev1">&gt; hwloc_get_proc_cpubind method.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eloi
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0927.php">Eloi Gaudry: "[hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0929.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
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
