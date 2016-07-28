<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 00:18:16 2009" -->
<!-- isoreceived="20090812041816" -->
<!-- sent="Wed, 12 Aug 2009 00:17:57 -0400" -->
<!-- isosent="20090812041757" -->
<!-- name="Sims, James S. Dr." -->
<!-- email="james.sims_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler" -->
<!-- id="D7A0423E5E193F40BE6E94126930C493078524523B_at_MBCLUSTER.xchange.nist.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler<br>
<strong>From:</strong> Sims, James S. Dr. (<em>james.sims_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 00:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Previous message:</strong> <a href="10315.php">Allen Barnett: "[OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>Reply:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Back to this problem.
<br>
<p>The last suggestion was to upgrade to 1.3.3, which has been done. Still cannot get this code to 
<br>
run in 64 bit mode with torque. What I can do is run the job in l6 bit mode using a  hostfile.
<br>
Specifically, if I use
<br>
qsub  -I -l nodes=2:ppn=1 torque allocates two nodes to the job, and since this is an interactive
<br>
shell, logs me in to the controlling node. In this example process rank 0 is n72 and process rank 1 is n89:
<br>
[sims_at_n72 4000]$ mpirun --display-allocation -pernode --display-map hostname
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: n72.clust.nist.gov        Num slots: 1    Max slots: 0
<br>
&nbsp;Data for node: Name: n89       Num slots: 1    Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: n72.clust.nist.gov        Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [47657,1] Process rank: 0
<br>
<p>&nbsp;Data for node: Name: n89       Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [47657,1] Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
n89
<br>
n72.clust.nist.gov
<br>
<p>My hostfile is
<br>
[sims_at_n72 4000]$ cat hostfile
<br>
n72
<br>
n89
<br>
<p><p>If, logged in to n72, I use the command
<br>
mpirun -np 2 ./MPI_li_64 
<br>
the job fails with a 
<br>
mpirun noticed that process rank 1 with PID 10538 on node n89 exited on signal 11 (Segmentation fault).
<br>
<p>If I use the command 
<br>
mpirun -np 2 --hostfile hostfile ./MPI_li_64 
<br>
the same thing happens.
<br>
<p>However, if I ssh to n73, for example, and use the command 
<br>
mpirun -np 2 --hostfile hostfile ./MPI_li_64
<br>
everything works fine. So it appears that the problem is with torque. 
<br>
<p>Any ideas?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<li><strong>Previous message:</strong> <a href="10315.php">Allen Barnett: "[OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>Reply:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
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
