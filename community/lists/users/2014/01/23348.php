<?
$subject_val = "[OMPI users] OpenMPI with dual port Myrinet cards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 19:02:35 2014" -->
<!-- isoreceived="20140110000235" -->
<!-- sent="Fri, 10 Jan 2014 00:02:33 +0000" -->
<!-- isosent="20140110000233" -->
<!-- name="Victor Prosolin" -->
<!-- email="Victor.Prosolin_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with dual port Myrinet cards" -->
<!-- id="3ee5731d1e04446bad7d3059a8becc9d_at_GUE-W12S-MBX2.rwdigroup.net" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with dual port Myrinet cards<br>
<strong>From:</strong> Victor Prosolin (<em>Victor.Prosolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 19:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23349.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23347.php">Brock Palen: "[OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Reply:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
H,
<br>
Our cluster has servers with either a single port or a dual port Myrinet card. In case of a dual card, only one port is connected to the Myrinet switch. The OpenMPI library is configured with &quot;--with-mx=...&quot; option and it works fine when I submit jobs to single port servers only. However, when I try to include a server with a dual port card, I get a bunch of errors like the following:
<br>
[compute-08:17788] mx_connect fail for unknown 60dd464f9d nic_id with key aaaaffff (error Destination NIC not found in network table)
<br>
<p>60dd464f9d is the wrong MAC address corresponding to port 1 (not connected) when port 0 is connected to the switch and has MAC  60dd464f9c.
<br>
<p>This is how (try to) I run the job:
<br>
<p>1.       mpiexec -np 32 -host compute-08,compute-17,compute-18,compute-16 -mca mtl mx --mca pml cm ./wrf.exe
<br>
or
<br>
<p>2.       Using a similar command but via Sun Grid Engine.
<br>
<p>The OS is Centos 6.4, 64bit. OpenMPI 1.6.5 compiled from the official src rpm with gcc 4.4.7, MX library 1.2.16 manually compiled. Again, this configuration works fine when only single port servers are used.
<br>
<p>Is there a way to tell OpenMPI to stick to the one port that is connected? I haven't found any options through ompi_info or via google... Any help will be greatly appreciated.
<br>
<p>Sincerely,
<br>
Victor.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RWDI - One of Canada's 50 Best Managed Companies
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
This communication is intended for the sole use of the party to whom it was addressed and may contain information that is privileged and/or confidential. Any other distribution, copying or disclosure is strictly prohibited. If you received this email in error, please notify us immediately by replying to this email and delete the message without retaining any hard or electronic copies of same. 
<br>
<p>Outgoing emails are scanned for viruses, but no warranty is made to their absence in this email or attachments.
<br>
<p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23348/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23349.php">Pradeep Jha: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>Previous message:</strong> <a href="23347.php">Brock Palen: "[OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Reply:</strong> <a href="23354.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
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
