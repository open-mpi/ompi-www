<?
$subject_val = "Re: [OMPI users] Tip for HPC cluster admins";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 12:23:36 2012" -->
<!-- isoreceived="20121029162336" -->
<!-- sent="Mon, 29 Oct 2012 16:23:01 +0000" -->
<!-- isosent="20121029162301" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tip for HPC cluster admins" -->
<!-- id="CAPqNE2X4RyCcj_VdMocOuqCa1a3nySfnGNG14_N5tiJGgxdzQA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EA48B79-8372-4AD8-A00F-C3E72F07381A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tip for HPC cluster admins<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 12:23:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20578.php">Rayson Ho: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20565.php">Jeff Squyres: "[OMPI users] Tip for HPC cluster admins"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,  this is very good advice.
<br>
<p>I have had many, many hours of deep joy getting to know the OOM killer
<br>
and all of his wily ways.
<br>
Respect the OOM Killer!
<br>
<p>On cluster I manage, the OOM killer is working, however there is a
<br>
strict policy that if OOM killer kicks on in a cluster node it is
<br>
excluded from the batch system and rebooted.
<br>
As you say, you can't tell what processes it goes off to kill.
<br>
<p>However, there is a very sueful sysctl setting for OOM:
<br>
<p>vm.oom_kill_allocating_task     Set this to 1 and the system kills the
<br>
task which triggered the OOM, rather than doing a scan of system
<br>
processes.
<br>
I find that an an HPC environment this will kill the executable which
<br>
is using too much memory.
<br>
<p><a href="http://www.linuxinsight.com/proc_sys_vm_oom_kill_allocating_task.html">http://www.linuxinsight.com/proc_sys_vm_oom_kill_allocating_task.html</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20578.php">Rayson Ho: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20565.php">Jeff Squyres: "[OMPI users] Tip for HPC cluster admins"</a>
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
