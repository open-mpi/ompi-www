<?
$subject_val = "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 12:07:54 2014" -->
<!-- isoreceived="20140106170754" -->
<!-- sent="Mon, 6 Jan 2014 18:07:52 +0100" -->
<!-- isosent="20140106170752" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter" -->
<!-- id="20140106170752.GN5592_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1825590d47be4dc0879ae28f7ac5045a_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-06 12:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0933.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0933.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eloi Gaudry, le Mon 06 Jan 2014 17:16:53 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; the PID of the process. I was assuming that casting this member to a HANDLE object would allow me to use hwloc_get_proc_cpubind,
</span><br>
<p>No, PIDs are mere numbers, they have nothing to do with HANDLES. More
<br>
interestingly, PID values are valid along the whole systems, while
<br>
HANDLE values are only valid with a given process. You have to use
<br>
OpenProcess, to create a HANDLE from a PID.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0933.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0933.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
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
