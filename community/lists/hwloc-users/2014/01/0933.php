<?
$subject_val = "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 11:16:49 2014" -->
<!-- isoreceived="20140106161649" -->
<!-- sent="Mon, 6 Jan 2014 16:16:31 +0000" -->
<!-- isosent="20140106161631" -->
<!-- name="Eloi Gaudry" -->
<!-- email="Eloi.Gaudry_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter" -->
<!-- id="1825590d47be4dc0879ae28f7ac5045a_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2cfa7e005b9d4275830c022ae669b80d_at_DM2PR08MB512.namprd08.prod.outlook.com" -->
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
<strong>Date:</strong> 2014-01-06 11:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0934.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0932.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0932.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0934.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0934.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, it seems I'm using an invalid Handle as 2nd argument.
<br>
<p>I'm basically using CreateToolhelp32Snapshot to get a snapshot of the running processes, then looping over each process from the snapshot using Process32Next method. The PROCESSENTRY32 I receive from Process32Next has a member th32ProcessID, containing the PID of the process. I was assuming that casting this member to a HANDLE object would allow me to use hwloc_get_proc_cpubind, but I guess I've been a little bit optimistic (if not unconscious).
<br>
<p>Thanks,
<br>
Eloi
<br>
<p>-----Original Message-----
<br>
From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Eloi Gaudry
<br>
Sent: lundi 6 janvier 2014 17:01
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter
<br>
<p>Yes, Windows 7 SP1.
<br>
Let me call GetLastError inside hwloc_win_get_proc_cpubind and give you the results.
<br>
<p>-----Original Message-----
<br>
From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Samuel Thibault
<br>
Sent: lundi 6 janvier 2014 16:43
<br>
To: Hardware locality user list
<br>
Subject: Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter
<br>
<p>Eloi Gaudry, le Mon 06 Jan 2014 16:37:55 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; AFAIK, the issue seems related to the GetAffinityMask call inside 
</span><br>
<span class="quotelev1">&gt; hwloc_win_get_proc_cpubind : it always returns 0.
</span><br>
<p>So it's really the win32 layer which does not like seeing GetAffinityMask called.  Just to make sure: you are using at least Windows XP, right?
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
<p><p>_______________________________________________
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
<li><strong>Next message:</strong> <a href="0934.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Previous message:</strong> <a href="0932.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>In reply to:</strong> <a href="0932.php">Eloi Gaudry: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0934.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
<li><strong>Reply:</strong> <a href="0934.php">Samuel Thibault: "Re: [hwloc-users] [windows] hwloc_get_proc_cpubind issue, even with current process handle as 2nd parameter"</a>
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
