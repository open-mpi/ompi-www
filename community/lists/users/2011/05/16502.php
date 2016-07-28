<?
$subject_val = "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 11:11:07 2011" -->
<!-- isoreceived="20110510151107" -->
<!-- sent="Tue, 10 May 2011 08:10:51 -0700" -->
<!-- isosent="20110510151051" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1" -->
<!-- id="4DC9557B.9060003_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DC94106.6010901_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-10 11:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16501.php">Tyler W. Wilson: "[OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>In reply to:</strong> <a href="16499.php">francoise.roch_at_[hidden]: "[OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/10/2011 6:43 AM, francoise.roch_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compile a parallel program with OpenMPI 1.4.1 (compiled with intel
</span><br>
<span class="quotelev1">&gt; compilers 12 from composerxe package) . This program is linked to MUMPS
</span><br>
<span class="quotelev1">&gt; library 4.9.2, compiled with the same compilers and link with intel MKL.
</span><br>
<span class="quotelev1">&gt; The OS is linux debian.
</span><br>
<span class="quotelev1">&gt; No error in compiling or running the job, but the program freeze inside
</span><br>
<span class="quotelev1">&gt; a call to &quot;zmumps&quot; routine, when the slaves process call MPI_COMM_DUP
</span><br>
<span class="quotelev1">&gt; routine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is executed on 2 nodes of 12 cores each (westmere
</span><br>
<span class="quotelev1">&gt; processors) with the following command :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 24 --machinefile $OAR_NODE_FILE -mca plm_rsh_agent &quot;oarsh&quot;
</span><br>
<span class="quotelev1">&gt; --mca btl self,openib -x LD_LIBRARY_PATH ./prog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have 12 process running on each node. We submit the job with OAR
</span><br>
<span class="quotelev1">&gt; batch scheduler (the $OAR_NODE_FILE variable and &quot;oarsh&quot; command are
</span><br>
<span class="quotelev1">&gt; specific to this scheduler and are usually working well with openmpi )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; via gdb, on the slaves, we can see that they are blocked in MPI_COMM_DUP :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0 0x00002b32c1533113 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1 0x0000000000adf52c in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt; #2 0x0000000000adcea3 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt; #3 0x0000000000ad69f9 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #4 0x0000000000a34b4e in mca_pml_ob1_recv ()
</span><br>
<span class="quotelev1">&gt; #5 0x00000000009b0768 in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling ()
</span><br>
<span class="quotelev1">&gt; #6 0x00000000009ac829 in ompi_coll_tuned_allreduce_intra_dec_fixed ()
</span><br>
<span class="quotelev1">&gt; #7 0x000000000097e271 in ompi_comm_allreduce_intra ()
</span><br>
<span class="quotelev1">&gt; #8 0x000000000097dd06 in ompi_comm_nextcid ()
</span><br>
<span class="quotelev1">&gt; #9 0x000000000097be01 in ompi_comm_dup ()
</span><br>
<span class="quotelev1">&gt; #10 0x00000000009a0785 in PMPI_Comm_dup ()
</span><br>
<span class="quotelev1">&gt; #11 0x000000000097931d in pmpi_comm_dup__ ()
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000644251 in zmumps (id=...) at zmumps_part1.F:144
</span><br>
<span class="quotelev1">&gt; #13 0x00000000004c0d03 in sub_pbdirect_init (id=..., matrix_build=...)
</span><br>
<span class="quotelev1">&gt; at sub_pbdirect_init.f90:44
</span><br>
<span class="quotelev1">&gt; #14 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the master wait further :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0 0x00002b9dc9f3e113 in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1 0x0000000000adf52c in poll_dispatch ()
</span><br>
<span class="quotelev1">&gt; #2 0x0000000000adcea3 in opal_event_loop ()
</span><br>
<span class="quotelev1">&gt; #3 0x0000000000ad69f9 in opal_progress ()
</span><br>
<span class="quotelev1">&gt; #4 0x000000000098f294 in ompi_request_default_wait_all ()
</span><br>
<span class="quotelev1">&gt; #5 0x0000000000a06e56 in ompi_coll_tuned_sendrecv_actual ()
</span><br>
<span class="quotelev1">&gt; #6 0x00000000009ab8e3 in ompi_coll_tuned_barrier_intra_bruck ()
</span><br>
<span class="quotelev1">&gt; #7 0x00000000009ac926 in ompi_coll_tuned_barrier_intra_dec_fixed ()
</span><br>
<span class="quotelev1">&gt; #8 0x00000000009a0b20 in PMPI_Barrier ()
</span><br>
<span class="quotelev1">&gt; #9 0x0000000000978c93 in pmpi_barrier__ ()
</span><br>
<span class="quotelev1">&gt; #10 0x00000000004c0dc4 in sub_pbdirect_init (id=..., matrix_build=...)
</span><br>
<span class="quotelev1">&gt; at sub_pbdirect_init.f90:62
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000628706 in fwt2d_elas_v2 () at fwt2d_elas.f90:1048
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remark :
</span><br>
<span class="quotelev1">&gt; The same code compiled and run well with intel MPI library, from the
</span><br>
<span class="quotelev1">&gt; same intel package, on the same nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Did you try compiling with equivalent options in each compiler?  For 
<br>
example, (supposing you had gcc 4.6)
<br>
gcc -O3 -funroll-loops --param max-unroll-times=2 -march=corei7
<br>
would be equivalent (as closely as I know) to
<br>
icc -fp-model source -msse4.2 -ansi-alias
<br>
<p>As you should be aware, default settings in icc are more closely 
<br>
equivalent to
<br>
gcc -O3 -ffast-math -fno-cx-limited-range -funroll-loops --param 
<br>
max-unroll-times=2 -fnostrict-aliasing
<br>
<p>The options I suggest as an upper limit are probably more aggressive 
<br>
than most people have used successfully with OpenMPI.
<br>
<p>As to run-time MPI options, Intel MPI has affinity with Westmere 
<br>
awareness turned on by default.  I suppose testing without affinity 
<br>
settings, particularly when banging against all hyperthreads, is a more 
<br>
severe test of your application.   Don't you get better results at 1 
<br>
rank per core?
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16501.php">Tyler W. Wilson: "[OMPI users] Issue with Open MPI 1.5.3 Windows binary builds"</a>
<li><strong>In reply to:</strong> <a href="16499.php">francoise.roch_at_[hidden]: "[OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Reply:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
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
