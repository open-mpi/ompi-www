<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 13 08:32:45 2011" -->
<!-- isoreceived="20110513123245" -->
<!-- sent="Fri, 13 May 2011 14:31:11 +0200" -->
<!-- isosent="20110513123111" -->
<!-- name="francoise.roch_at_[hidden]" -->
<!-- email="francoise.roch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DCD248F.8050605_at_obs.ujf-grenoble.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B60D6EC1-6262-48A5-A51A-730723E5879F_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1<br>
<strong>From:</strong> <a href="mailto:francoise.roch_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_COMM_DUP%20freeze%20with%20OpenMPI%201.4.1"><em>francoise.roch_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-05-13 08:31:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16537.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The debugger traces are captured when the different tasks are blocked.
<br>
Before the MPI_COMM_DUP, a MPI_undefined color has been affected to the 
<br>
master process and a MPI_COMM_SPLIT construct a new communicator not 
<br>
containing the master.
<br>
The master process doesn't call the MPI_COMM_DUP routine, and so the 
<br>
master is not blocked at this level of instruction, but further in the 
<br>
program, at a barrier call. The master process behaviour is normal, it 
<br>
wait for the slaves which are all blocked in MPI_COMM_DUP.
<br>
<p>Here is the MUMPS portion of code (in zmumps_part1.F file) where the 
<br>
slaves call MPI_COMM_DUP , id%PAR and MASTER are initialized to 0 before :
<br>
<p>CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
<br>
IF ( id%PAR .eq. 0 ) THEN
<br>
IF ( id%MYID .eq. MASTER ) THEN
<br>
color = MPI_UNDEFINED
<br>
ELSE
<br>
color = 0
<br>
END IF
<br>
CALL MPI_COMM_SPLIT( id%COMM, color, 0,
<br>
&amp; id%COMM_NODES, IERR )
<br>
id%NSLAVES = id%NPROCS - 1
<br>
ELSE
<br>
CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
<br>
id%NSLAVES = id%NPROCS
<br>
END IF
<br>
<p>IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
<br>
CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
<br>
ENDIF
<br>
<p>------
<br>
<p>In our case (id%PAR = 0), only the second MPI_COMM_DUP call is executed 
<br>
on the slaves.
<br>
<p>MUMPS library and our program are compiled with intel fortran 12 and I 
<br>
have test -O1 option with no more success.
<br>
<p>Franc,oise.
<br>
<p><p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; On May 10, 2011, at 08:10 , Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On 5/10/2011 6:43 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compile a parallel program with OpenMPI 1.4.1 (compiled with intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers 12 from composerxe package) . This program is linked to MUMPS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library 4.9.2, compiled with the same compilers and link with intel MKL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OS is linux debian.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No error in compiling or running the job, but the program freeze inside
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a call to &quot;zmumps&quot; routine, when the slaves process call MPI_COMM_DUP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; routine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program is executed on 2 nodes of 12 cores each (westmere
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors) with the following command :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 24 --machinefile $OAR_NODE_FILE -mca plm_rsh_agent &quot;oarsh&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl self,openib -x LD_LIBRARY_PATH ./prog
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have 12 process running on each node. We submit the job with OAR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; batch scheduler (the $OAR_NODE_FILE variable and &quot;oarsh&quot; command are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific to this scheduler and are usually working well with openmpi )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; via gdb, on the slaves, we can see that they are blocked in MPI_COMM_DUP :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francoise,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on your traces the workers and the master are not doing the same MPI call. The workers are blocked in an MPI_Comm_dup in sub_pbdirect_init.f90:44, while the master is blocked in an MPI_Barrier in sub_pbdirect_init.f90:62. Can you verify that the slaves and the master are calling the MPI_Barrier and the MPI_Comm_dup in the same logical order?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0 0x00002b32c1533113 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 0x0000000000adf52c in poll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 0x0000000000adcea3 in opal_event_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3 0x0000000000ad69f9 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4 0x0000000000a34b4e in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5 0x00000000009b0768 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6 0x00000000009ac829 in ompi_coll_tuned_allreduce_intra_dec_fixed ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7 0x000000000097e271 in ompi_comm_allreduce_intra ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8 0x000000000097dd06 in ompi_comm_nextcid ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9 0x000000000097be01 in ompi_comm_dup ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0x00000000009a0785 in PMPI_Comm_dup ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0x000000000097931d in pmpi_comm_dup__ ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #12 0x0000000000644251 in zmumps (id=...) at zmumps_part1.F:144
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #13 0x00000000004c0d03 in sub_pbdirect_init (id=..., matrix_build=...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at sub_pbdirect_init.f90:44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #14 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the master wait further :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0 0x00002b9dc9f3e113 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 0x0000000000adf52c in poll_dispatch ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2 0x0000000000adcea3 in opal_event_loop ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3 0x0000000000ad69f9 in opal_progress ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4 0x000000000098f294 in ompi_request_default_wait_all ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5 0x0000000000a06e56 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6 0x00000000009ab8e3 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #7 0x00000000009ac926 in ompi_coll_tuned_barrier_intra_dec_fixed ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #8 0x00000000009a0b20 in PMPI_Barrier ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #9 0x0000000000978c93 in pmpi_barrier__ ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #10 0x00000000004c0dc4 in sub_pbdirect_init (id=..., matrix_build=...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at sub_pbdirect_init.f90:62
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #11 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remark :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same code compiled and run well with intel MPI library, from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same intel package, on the same nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Did you try compiling with equivalent options in each compiler?  For example, (supposing you had gcc 4.6)
</span><br>
<span class="quotelev2">&gt;&gt; gcc -O3 -funroll-loops --param max-unroll-times=2 -march=corei7
</span><br>
<span class="quotelev2">&gt;&gt; would be equivalent (as closely as I know) to
</span><br>
<span class="quotelev2">&gt;&gt; icc -fp-model source -msse4.2 -ansi-alias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you should be aware, default settings in icc are more closely equivalent to
</span><br>
<span class="quotelev2">&gt;&gt; gcc -O3 -ffast-math -fno-cx-limited-range -funroll-loops --param max-unroll-times=2 -fnostrict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The options I suggest as an upper limit are probably more aggressive than most people have used successfully with OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As to run-time MPI options, Intel MPI has affinity with Westmere awareness turned on by default.  I suppose testing without affinity settings, particularly when banging against all hyperthreads, is a more severe test of your application.   Don't you get better results at 1 rank per core?
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Prince
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev1">&gt;   -- Thomas Jefferson, 1799
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16537.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16535.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16584.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
