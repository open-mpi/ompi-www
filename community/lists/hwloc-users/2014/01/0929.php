<?
$subject_val = "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 10:37:47 2014" -->
<!-- isoreceived="20140106153747" -->
<!-- sent="Mon, 6 Jan 2014 15:37:36 +0000" -->
<!-- isosent="20140106153736" -->
<!-- name="Eloi Gaudry" -->
<!-- email="Eloi.Gaudry_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter" -->
<!-- id="af1d05c42c164ced9eed1587587226d1_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52CACBE0.1020700_at_inria.fr" -->
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
<strong>From:</strong> Eloi Gaudry (<em>Eloi.Gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-06 10:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0930.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0928.php">Brice Goglin: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0928.php">Brice Goglin: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0931.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0931.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
I tried to use every flag but MEMBIND.
<br>
AFAIK, the issue seems related to the GetAffinityMask call inside hwloc_win_get_proc_cpubind : it always returns 0.
<br>
I'll try to get more error information tomorrow.
<br>
Regards,
<br>
Eloi
<br>
<p>From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: lundi 6 janvier 2014 16:30
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter
<br>
<p>Hello,
<br>
<p>On windows, set/get_cpubind() are implemented by called set/get_proc_cpubind() with GetCurrentProcess() as a 2nd argument, so your code should be doing exactly the same, and I don't see what could be going on here.
<br>
Do you pass any flag in these cpubind functions ?
<br>
Do you get any useful error code in errno ?
<br>
<p>Brice
<br>
<p><p><p><p>static int
<br>
hwloc_win_set_thisproc_cpubind(hwloc_topology_t topology, hwloc_const_bitmap_t hwloc_set, int flags)
<br>
{
<br>
&nbsp;&nbsp;return hwloc_win_set_proc_cpubind(topology, GetCurrentProcess(), hwloc_set, flags);
<br>
}
<br>
<p>static int
<br>
hwloc_win_get_thisproc_cpubind(hwloc_topology_t topology, hwloc_bitmap_t hwloc_cpuset, int flags)
<br>
{
<br>
&nbsp;&nbsp;return hwloc_win_get_proc_cpubind(topology, GetCurrentProcess(), hwloc_cpuset, flags);
<br>
}
<br>
<p><p><p><p>Le 06/01/2014 16:04, Eloi Gaudry a &#233;crit :
<br>
Hi,
<br>
<p>On Windows, hwloc_get_cpubind and hwloc_set_cpubind works correctly but I cannot use hwloc_get_proc_cpubind or hwloc_set_proc_cpubind using the current process handle as 2nd parameter (no matter what the last one is).
<br>
Any clue on this ? I'm trying to add support for Windows to an hwloc-ps like utility, thus, I need to be able to use the hwloc_get_proc_cpubind method.
<br>
<p>Regards,
<br>
Eloi
<br>
<p><p><p><p><p><p>_______________________________________________
<br>
<p>hwloc-users mailing list
<br>
<p>hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0929/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0930.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0928.php">Brice Goglin: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0928.php">Brice Goglin: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0931.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0931.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
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
