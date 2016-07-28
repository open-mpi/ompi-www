<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 14:08:37 2007" -->
<!-- isoreceived="20070611180837" -->
<!-- sent="Mon, 11 Jun 2007 14:07:52 -0400" -->
<!-- isosent="20070611180752" -->
<!-- name="Kelley, Sean" -->
<!-- email="Sean.Kelley_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hanging when processes started on head node" -->
<!-- id="864805E437EF7C40986276CE00F29E4C9D9CE0_at_ava-es5.solers.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="864805E437EF7C40986276CE00F29E4C9D9CDF_at_ava-es5.solers.local" -->
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
<strong>From:</strong> Kelley, Sean (<em>Sean.Kelley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 14:07:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3457.php">Corwell, Sophia: "[OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Previous message:</strong> <a href="3455.php">Jeff Pummill: "[OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Reply:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are running the OFED 1.2rc4 distribution containing openmpi-1.2.2 on a RedhatEL4U4 system with Scyld Clusterware 4.1. The hardware configuration consists of a DELL 2950 as the headnode and 3 DELL 1950 blades as compute nodes using Cisco TopSpin Infiband HCAs and switches for the interconnect.
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When we use 'mpirun' from the OFED/Open MPI distribution to start processes on the compute nodes, everything works correctly. However, when we try to start processes on the head node, the processes appear to run correctly but 'mpirun' hangs and does not terminate until killed. The attached 'run1.tgz' file contains detailed information from running the following command:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --hostfile hostfile1 --np 1 --byslot --debug-daemons -d hostname
<br>
&nbsp;
<br>
where 'hostfile1' contains the following:
<br>
&nbsp;
<br>
-1 slots=2 max_slots=2
<br>
&nbsp;
<br>
The 'run.log' is the output of the above line. The 'strace.out.0' is the result of 'strace -f' on the mpirun process (and the 'hostname' child process since mpirun simply forks the local processes). The child process (pid 23415 in this case) runs to completion and exits successfully. The parent process (mpirun) doesn't appear to recognize that the child has completed and hangs until killed (with a ^c). 
<br>
&nbsp;
<br>
Additionally, when we run a set of processes which span the headnode and the compute nodes, the processes on the head node complete successfully, but the processes on the compute nodes do not appear to start. mpirun again appears to hang.
<br>
&nbsp;
<br>
Do I have a configuration error or is there a problem that I have encountered? Thank you in advance for your assistance or suggestions
<br>
&nbsp;
<br>
Sean
<br>
&nbsp;
<br>
------
<br>
Sean M. Kelley
<br>
sean.kelley_at_[hidden]
<br>
&nbsp;
<br>
&nbsp;
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3456/run1.tgz">run1.tgz</a>
</ul>
<!-- attachment="run1.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3457.php">Corwell, Sophia: "[OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>Previous message:</strong> <a href="3455.php">Jeff Pummill: "[OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Reply:</strong> <a href="3458.php">Kelley, Sean: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
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
