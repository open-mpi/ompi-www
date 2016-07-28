<?
$subject_val = "Re: [OMPI users] openib MTL not working via slurm after update";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 14:33:19 2016" -->
<!-- isoreceived="20160511183319" -->
<!-- sent="Wed, 11 May 2016 18:32:03 +0000" -->
<!-- isosent="20160511183203" -->
<!-- name="Nathan Smith" -->
<!-- email="sminatha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib MTL not working via slurm after update" -->
<!-- id="25694FE1452A014695278ABD224034866C14E3AA_at_EXMB03.ohsu.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="571523C4.8010609_at_ohsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib MTL not working via slurm after update<br>
<strong>From:</strong> Nathan Smith (<em>sminatha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 14:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28956.php">Nathan Smith: "[OMPI users] openib MTL not working via slurm after update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We determined that this issue was actually due to not having an unlimited memlock for the slurm user when the slurm service started. The work-around was to simply restart slurm subsequent to boot and the new unlimited setting would allow infiniband usage. Moving the startup script to runlevel 3 did not fix the issue.
<br>

<br>
The solution is outlined in #58 in the Slurm FAQ  <a href="http://slurm.schedmd.com/faq.html#mpi_perf">http://slurm.schedmd.com/faq.html#mpi_perf</a>
<br>

<br>
I discovered this fix almost by accident. When trying an install on Centos 7, I observed the same error message when using my own custom-built RPMs of openmpi-1.10. When I used a packaged version, the error message correctly identified the memlock issue. After adding the correct setting to a file in /etc/security/limits.d/ , using my custom RPMs worked without the error message.
<br>

<br>
Hope this helps anyone who has had the same issue.
<br>

<br>
--
<br>
Nathan Smith
<br>
Research Systems Engineer
<br>
Advanced Computing Center
<br>
Oregon Health &amp; Science University
<br>
Ph: 503-494-6731
<br>

<br>

<br>
-----Original Message-----
<br>
From: Nathan Smith 
<br>
Sent: Monday, April 18, 2016 11:13 AM
<br>
To: users_at_[hidden]
<br>
Subject: openib MTL not working via slurm after update
<br>

<br>
We recently updated and rebooted Infiniband-attached nodes, and now when trying to schedule MPI jobs with slurm, we are seeing the following:
<br>

<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>

<br>
&nbsp;&nbsp;&nbsp;Local host:           node-x
<br>
&nbsp;&nbsp;&nbsp;Local device:         mlx5_0
<br>
&nbsp;&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;&nbsp;CPCs attempted:       udcm
<br>
--------------------------------------------------------------------------
<br>

<br>
This worked before reboots. The infiniband network itself is fine. 
<br>
However, if we invoke the same job directly using mpirun on the same nodes, we do not receive the message (meaning the openib BTL works). 
<br>
Some IB-related packages were updated (e.g. the rdma metapackage for Centos6.7).
<br>

<br>
What I'm hoping for is some guidance on what components are involved here and the possible causes of slurm not being able to use the openib BTL (a post to the slurm list did not get anywhere). There is very little documentation I could locate on what CPCs are, or what udcm is, and how to troubleshoot it.
<br>

<br>
Using openmpi 1.10.2 with slurm and PMI support configured in.
<br>

<br>
--
<br>
Nathan Smith
<br>
Research Systems Engineer
<br>
Advanced Computing Center
<br>
Oregon Health &amp; Science University
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29176.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29174.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28956.php">Nathan Smith: "[OMPI users] openib MTL not working via slurm after update"</a>
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
