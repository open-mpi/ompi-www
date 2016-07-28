<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 14:11:48 2011" -->
<!-- isoreceived="20110510181148" -->
<!-- sent="Tue, 10 May 2011 11:11:41 -0700" -->
<!-- isosent="20110510181141" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="B60D6EC1-6262-48A5-A51A-730723E5879F_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DC9557B.9060003_at_aol.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-10 14:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16504.php">Tom Rosmond: "[OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2011, at 08:10 , Tim Prince wrote:
<br>
<p><span class="quotelev1">&gt; On 5/10/2011 6:43 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compile a parallel program with OpenMPI 1.4.1 (compiled with intel
</span><br>
<span class="quotelev2">&gt;&gt; compilers 12 from composerxe package) . This program is linked to MUMPS
</span><br>
<span class="quotelev2">&gt;&gt; library 4.9.2, compiled with the same compilers and link with intel MKL.
</span><br>
<span class="quotelev2">&gt;&gt; The OS is linux debian.
</span><br>
<span class="quotelev2">&gt;&gt; No error in compiling or running the job, but the program freeze inside
</span><br>
<span class="quotelev2">&gt;&gt; a call to &quot;zmumps&quot; routine, when the slaves process call MPI_COMM_DUP
</span><br>
<span class="quotelev2">&gt;&gt; routine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The program is executed on 2 nodes of 12 cores each (westmere
</span><br>
<span class="quotelev2">&gt;&gt; processors) with the following command :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 24 --machinefile $OAR_NODE_FILE -mca plm_rsh_agent &quot;oarsh&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl self,openib -x LD_LIBRARY_PATH ./prog
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have 12 process running on each node. We submit the job with OAR
</span><br>
<span class="quotelev2">&gt;&gt; batch scheduler (the $OAR_NODE_FILE variable and &quot;oarsh&quot; command are
</span><br>
<span class="quotelev2">&gt;&gt; specific to this scheduler and are usually working well with openmpi )
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; via gdb, on the slaves, we can see that they are blocked in MPI_COMM_DUP :
</span><br>
<p>Francoise,
<br>
<p>Based on your traces the workers and the master are not doing the same MPI call. The workers are blocked in an MPI_Comm_dup in sub_pbdirect_init.f90:44, while the master is blocked in an MPI_Barrier in sub_pbdirect_init.f90:62. Can you verify that the slaves and the master are calling the MPI_Barrier and the MPI_Comm_dup in the same logical order?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0 0x00002b32c1533113 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1 0x0000000000adf52c in poll_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt; #2 0x0000000000adcea3 in opal_event_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; #3 0x0000000000ad69f9 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt; #4 0x0000000000a34b4e in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev2">&gt;&gt; #5 0x00000000009b0768 in
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling ()
</span><br>
<span class="quotelev2">&gt;&gt; #6 0x00000000009ac829 in ompi_coll_tuned_allreduce_intra_dec_fixed ()
</span><br>
<span class="quotelev2">&gt;&gt; #7 0x000000000097e271 in ompi_comm_allreduce_intra ()
</span><br>
<span class="quotelev2">&gt;&gt; #8 0x000000000097dd06 in ompi_comm_nextcid ()
</span><br>
<span class="quotelev2">&gt;&gt; #9 0x000000000097be01 in ompi_comm_dup ()
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00000000009a0785 in PMPI_Comm_dup ()
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x000000000097931d in pmpi_comm_dup__ ()
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x0000000000644251 in zmumps (id=...) at zmumps_part1.F:144
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x00000000004c0d03 in sub_pbdirect_init (id=..., matrix_build=...)
</span><br>
<span class="quotelev2">&gt;&gt; at sub_pbdirect_init.f90:44
</span><br>
<span class="quotelev2">&gt;&gt; #14 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the master wait further :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0 0x00002b9dc9f3e113 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1 0x0000000000adf52c in poll_dispatch ()
</span><br>
<span class="quotelev2">&gt;&gt; #2 0x0000000000adcea3 in opal_event_loop ()
</span><br>
<span class="quotelev2">&gt;&gt; #3 0x0000000000ad69f9 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt; #4 0x000000000098f294 in ompi_request_default_wait_all ()
</span><br>
<span class="quotelev2">&gt;&gt; #5 0x0000000000a06e56 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev2">&gt;&gt; #6 0x00000000009ab8e3 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev2">&gt;&gt; #7 0x00000000009ac926 in ompi_coll_tuned_barrier_intra_dec_fixed ()
</span><br>
<span class="quotelev2">&gt;&gt; #8 0x00000000009a0b20 in PMPI_Barrier ()
</span><br>
<span class="quotelev2">&gt;&gt; #9 0x0000000000978c93 in pmpi_barrier__ ()
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00000000004c0dc4 in sub_pbdirect_init (id=..., matrix_build=...)
</span><br>
<span class="quotelev2">&gt;&gt; at sub_pbdirect_init.f90:62
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Remark :
</span><br>
<span class="quotelev2">&gt;&gt; The same code compiled and run well with intel MPI library, from the
</span><br>
<span class="quotelev2">&gt;&gt; same intel package, on the same nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Did you try compiling with equivalent options in each compiler?  For example, (supposing you had gcc 4.6)
</span><br>
<span class="quotelev1">&gt; gcc -O3 -funroll-loops --param max-unroll-times=2 -march=corei7
</span><br>
<span class="quotelev1">&gt; would be equivalent (as closely as I know) to
</span><br>
<span class="quotelev1">&gt; icc -fp-model source -msse4.2 -ansi-alias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you should be aware, default settings in icc are more closely equivalent to
</span><br>
<span class="quotelev1">&gt; gcc -O3 -ffast-math -fno-cx-limited-range -funroll-loops --param max-unroll-times=2 -fnostrict-aliasing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The options I suggest as an upper limit are probably more aggressive than most people have used successfully with OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As to run-time MPI options, Intel MPI has affinity with Westmere awareness turned on by default.  I suppose testing without affinity settings, particularly when banging against all hyperthreads, is a more severe test of your application.   Don't you get better results at 1 rank per core?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;To preserve the freedom of the human mind then and freedom of the press, every spirit should be ready to devote itself to martyrdom; for as long as we may think as we will, and speak as we think, the condition of man will proceed in improvement.&quot;
<br>
&nbsp;&nbsp;-- Thomas Jefferson, 1799
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16504.php">Tom Rosmond: "[OMPI users] Trouble with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16502.php">Tim Prince: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
