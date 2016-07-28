<?
$subject_val = "[OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 09:45:01 2011" -->
<!-- isoreceived="20110510134501" -->
<!-- sent="Tue, 10 May 2011 15:43:34 +0200" -->
<!-- isosent="20110510134334" -->
<!-- name="francoise.roch_at_[hidden]" -->
<!-- email="francoise.roch_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DC94106.6010901_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1<br>
<strong>From:</strong> <a href="mailto:francoise.roch_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_COMM_DUP%20freeze%20with%20OpenMPI%201.4.1"><em>francoise.roch_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-05-10 09:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I compile a parallel program with OpenMPI 1.4.1 (compiled with intel 
<br>
compilers 12 from composerxe package) . This program is linked to MUMPS 
<br>
library 4.9.2, compiled with the same compilers and link with intel 
<br>
MKL.  The OS is linux debian.
<br>
No error in compiling or running the job, but the program freeze inside 
<br>
a call to &quot;zmumps&quot; routine, when the slaves process call MPI_COMM_DUP 
<br>
routine.
<br>
<p>The program is executed on 2 nodes of 12 cores each (westmere 
<br>
processors) with the following command :
<br>
<p>mpirun -np 24 --machinefile $OAR_NODE_FILE  -mca plm_rsh_agent &quot;oarsh&quot;  
<br>
--mca btl self,openib -x LD_LIBRARY_PATH ./prog
<br>
<p>We have 12 process running on each node. We submit the job with OAR 
<br>
batch scheduler (the $OAR_NODE_FILE variable and &quot;oarsh&quot; command are 
<br>
specific to this scheduler and are usually working well with openmpi )
<br>
<p>via gdb, on the slaves, we can see that they are blocked in  MPI_COMM_DUP :
<br>
<p>(gdb) where
<br>
#0  0x00002b32c1533113 in poll () from /lib/libc.so.6
<br>
#1  0x0000000000adf52c in poll_dispatch ()
<br>
#2  0x0000000000adcea3 in opal_event_loop ()
<br>
#3  0x0000000000ad69f9 in opal_progress ()
<br>
#4  0x0000000000a34b4e in mca_pml_ob1_recv ()
<br>
#5  0x00000000009b0768 in 
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling ()
<br>
#6  0x00000000009ac829 in ompi_coll_tuned_allreduce_intra_dec_fixed ()
<br>
#7  0x000000000097e271 in ompi_comm_allreduce_intra ()
<br>
#8  0x000000000097dd06 in ompi_comm_nextcid ()
<br>
#9  0x000000000097be01 in ompi_comm_dup ()
<br>
#10 0x00000000009a0785 in PMPI_Comm_dup ()
<br>
#11 0x000000000097931d in pmpi_comm_dup__ ()
<br>
#12 0x0000000000644251 in zmumps (id=...) at zmumps_part1.F:144
<br>
#13 0x00000000004c0d03 in sub_pbdirect_init (id=..., matrix_build=...) 
<br>
at sub_pbdirect_init.f90:44
<br>
#14 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
<br>
<p><p>the master wait further :
<br>
<p>(gdb) where
<br>
#0  0x00002b9dc9f3e113 in poll () from /lib/libc.so.6
<br>
#1  0x0000000000adf52c in poll_dispatch ()
<br>
#2  0x0000000000adcea3 in opal_event_loop ()
<br>
#3  0x0000000000ad69f9 in opal_progress ()
<br>
#4  0x000000000098f294 in ompi_request_default_wait_all ()
<br>
#5  0x0000000000a06e56 in ompi_coll_tuned_sendrecv_actual ()
<br>
#6  0x00000000009ab8e3 in ompi_coll_tuned_barrier_intra_bruck ()
<br>
#7  0x00000000009ac926 in ompi_coll_tuned_barrier_intra_dec_fixed ()
<br>
#8  0x00000000009a0b20 in PMPI_Barrier ()
<br>
#9  0x0000000000978c93 in pmpi_barrier__ ()
<br>
#10 0x00000000004c0dc4 in sub_pbdirect_init (id=..., matrix_build=...) 
<br>
at sub_pbdirect_init.f90:62
<br>
#11 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
<br>
<p><p>Remark :
<br>
The same code compiled and run well with intel MPI library, from the 
<br>
same intel package, on the same nodes.
<br>
<p>Thanks for any help
<br>
<p>Fran&#231;oise Roch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16500.php">Jeff Squyres: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16498.php">Salvatore Podda: "[OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
