<?
$subject_val = "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 14:52:54 2014" -->
<!-- isoreceived="20140106195254" -->
<!-- sent="Mon, 6 Jan 2014 19:52:44 +0000" -->
<!-- isosent="20140106195244" -->
<!-- name="Eloi Gaudry" -->
<!-- email="Eloi.Gaudry_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter" -->
<!-- id="a46f50f6d03f438cb42d64011fda72ea_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140106171443.GS5592_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2014-01-06 14:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0937.php">Eloi Gaudry: "[hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Previous message:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0930.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you're right, this is exactly what I did after my last email.
<br>
Sorry for the convenience, that was a silly mistake from my own.
<br>
I'm going to start another thread related to building from source on Windows, using Visual Studio.
<br>
Thanks for the good work !
<br>
Eloi
<br>
<p>-----Original Message-----
<br>
From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: lundi 6 janvier 2014 18:15
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter
<br>
<p>Samuel Thibault, le Mon 06 Jan 2014 18:07:59 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Eloi Gaudry, le Mon 06 Jan 2014 17:16:53 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; the PID of the process. I was assuming that casting this member to a 
</span><br>
<span class="quotelev2">&gt; &gt; HANDLE object would allow me to use hwloc_get_proc_cpubind,
</span><br>
<p>Let me fix my typos:
<br>
<p>No, PIDs are mere numbers, they have nothing to do with HANDLEs. More interestingly, PID values are valid along the whole system, while HANDLE values are only valid within a given process. You have to use OpenProcess(), to create a HANDLE from a PID value.
<br>
<p>Samuel
<br>
_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0937.php">Eloi Gaudry: "[hwloc-users] [windows] build from source using visual studio"</a>
<li><strong>Previous message:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0935.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0930.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
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
