<?
$subject_val = "[OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 00:51:55 2011" -->
<!-- isoreceived="20110127055155" -->
<!-- sent="Thu, 27 Jan 2011 16:51:43 +1100" -->
<!-- isosent="20110127055143" -->
<!-- name="Michael Curtis" -->
<!-- email="michael.curtis_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="8D5E6345-FC41-4E15-A5E7-30C1DEEA579E_at_monash.edu" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Michael Curtis (<em>michael.curtis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 00:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15427.php">Gabriele Fatigati: "[OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15425.php">Harald Anlauf: "Re: [OMPI users] MPI_Allreduce for INTEGER8?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15444.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15444.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm not sure whether this problem is with SLURM or OpenMPI, but the stack traces (below) point to an issue within OpenMPI.
<br>
<p>Whenever I try to launch an MPI job within SLURM, mpirun immediately segmentation faults -- but only if the machine that SLURM allocated to MPI is different to the one that I launched the MPI job.
<br>
<p>However, if I force SLURM to allocate only the local node (ie, the one on which salloc was called), everything works fine.
<br>
<p>Failing case:
<br>
michael_at_ipc ~ $ salloc -n8 mpirun --display-map ./mpi
<br>
&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: ipc4	Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [21326,1] Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
[ipc:16986] *** Process received signal ***
<br>
[ipc:16986] Signal: Segmentation fault (11)
<br>
[ipc:16986] Signal code: Address not mapped (1)
<br>
[ipc:16986] Failing at address: 0x801328268
<br>
[ipc:16986] [ 0] /lib/libpthread.so.0(+0xf8f0) [0x7ff85c7638f0]
<br>
[ipc:16986] [ 1] /usr/lib/libopen-rte.so.0(+0x3459a) [0x7ff85d4a059a]
<br>
[ipc:16986] [ 2] /usr/lib/libopen-pal.so.0(+0x1eeb8) [0x7ff85d233eb8]
<br>
[ipc:16986] [ 3] /usr/lib/libopen-pal.so.0(opal_progress+0x99) [0x7ff85d228439]
<br>
[ipc:16986] [ 4] /usr/lib/libopen-rte.so.0(orte_plm_base_daemon_callback+0x9d) [0x7ff85d4a002d]
<br>
[ipc:16986] [ 5] /usr/lib/openmpi/lib/openmpi/mca_plm_slurm.so(+0x211a) [0x7ff85bbc311a]
<br>
[ipc:16986] [ 6] mpirun() [0x403c1f]
<br>
[ipc:16986] [ 7] mpirun() [0x403014]
<br>
[ipc:16986] [ 8] /lib/libc.so.6(__libc_start_main+0xfd) [0x7ff85c3efc4d]
<br>
[ipc:16986] [ 9] mpirun() [0x402f39]
<br>
[ipc:16986] *** End of error message ***
<br>
<p>Non-failing case:
<br>
michael_at_eng-ipc4 ~ $ salloc -n8 -w ipc4 mpirun --display-map ./mpi
<br>
&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: eng-ipc4.FQDN Num procs: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12467,1] Process rank: 7
<br>
<p>&nbsp;=============================================================
<br>
Process 1 on eng-ipc4.FQDN out of 8
<br>
Process 3 on eng-ipc4.FQDN out of 8
<br>
Process 4 on eng-ipc4.FQDN out of 8
<br>
Process 6 on eng-ipc4.FQDN out of 8
<br>
Process 7 on eng-ipc4.FQDN out of 8
<br>
Process 0 on eng-ipc4.FQDN out of 8
<br>
Process 2 on eng-ipc4.FQDN out of 8
<br>
Process 5 on eng-ipc4.FQDN out of 8
<br>
<p>Using mpi directly is fine:
<br>
eg mpirun -H 'ipc3,ipc4'  -np 8 ./mpi
<br>
Works as expected
<br>
<p>This is a (small) homogenous cluster, all Xeon class machines with plenty of RAM and shared filesystem over NFS, running 64-bit Ubuntu server.  I was running stock OpenMPI (1.4.1) and SLURM (2.1.1), I have since upgraded to latest stable OpenMPI (1.4.3) and SLURM (2.2.0), with no effect. (the newer binaries were compiled from the respective upstream Debian packages).
<br>
<p>strace (not shown) shows that the job is launched via srun and a connection is received back from the child process over TCP/IP. Soon after this, mpirun crashes. Nodes communicate over a semi-dedicated TCP/IP GigE connection.
<br>
<p>Is this a known bug? What is going wrong?
<br>
<p>Regards,
<br>
Michael Curtis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15427.php">Gabriele Fatigati: "[OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15425.php">Harald Anlauf: "Re: [OMPI users] MPI_Allreduce for INTEGER8?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15444.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15444.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
