<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 11:01:43 2009" -->
<!-- isoreceived="20090519150143" -->
<!-- sent="Tue, 19 May 2009 11:01:37 -0400" -->
<!-- isosent="20090519150137" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="3B241BB6-D7BA-463F-9BAA-AD321E493359_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242739950.26039.455.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 11:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 9:32 AM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you confirm that *all* processes are in PMPI_Allreduce at some
</span><br>
<span class="quotelev1">&gt; point, the collectives commonly get blamed for a lot of hangs and it's
</span><br>
<span class="quotelev1">&gt; not always the correct place to look.
</span><br>
<p>For the openmpi run, every single process showed one of those
<br>
two stack traces, mostly the first one.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S. I get a similar hang with MVAPICH, in a nearby but different  
</span><br>
<span class="quotelev2">&gt;&gt; part
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev2">&gt;&gt; code (on an MPI_Bcast, specifically), increasing my tendency to  
</span><br>
<span class="quotelev2">&gt;&gt; believe
</span><br>
<span class="quotelev2">&gt;&gt; that it's OFED's fault.  But maybe the stack trace will suggest to
</span><br>
<span class="quotelev2">&gt;&gt; someone
</span><br>
<span class="quotelev2">&gt;&gt; where it might be stuck, and therefore perhaps an mca flag to try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This strikes me as a filesystem problem more than MPI per se.  Again
</span><br>
<span class="quotelev1">&gt; with MVAPICH are all your processes in MPI_Bcast or just some of them?
</span><br>
<p>I'd suspect the filesystem too, except that it's hung up in an MPI  
<br>
call.  As I said
<br>
before, the whole thing is bizarre.  It doesn't matter where the  
<br>
executable is,
<br>
just what CWD is (i.e. I can do mpirun /scratch/exec or mpirun /home/ 
<br>
bernstei/exec,
<br>
but if it's sitting in /scratch it'll hang).  And I've been running
<br>
other codes both from NFS and from scratch directories for months,
<br>
and never had a problem.
<br>
<p>Using MVAPICH every process is stuck in a collective, but they're not  
<br>
all the
<br>
same collective (see stack traces below).  The 2 processes on the head  
<br>
node
<br>
are stuck on mpi_bcast, in various low level MPI routines.  The other 6
<br>
processes are stuck on an mpi_allreduce, again in various low level mpi
<br>
processes.  I don't know enough about the code to tell they're all  
<br>
supposed
<br>
to be part of the same communicator, and the fact that they're stuck on
<br>
different collectives is suspicious.  I can look into that.
<br>
<p>So yes, it does seem to be a problem with collective communication.
<br>
But a very weird one.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p>#0  0x0000000001b2c120 in MPIDI_CH3I_read_progress ()
<br>
#1  0x0000000001b2be44 in MPIDI_CH3I_Progress ()
<br>
#2  0x0000000001b0686b in MPIC_Wait ()
<br>
#3  0x0000000001b072a6 in MPIC_Send ()
<br>
#4  0x0000000001b01b16 in MPIR_Bcast ()
<br>
#5  0x0000000001b033ad in PMPI_Bcast ()
<br>
#6  0x0000000001b1ec52 in pmpi_bcast_ ()
<br>
#7  0x00000000007098d4 in message_passing_mp_mp_bcast_rm_ ()
<br>
#8  0x000000000091f9c0 in qs_mo_types_mp_read_mos_restart_low_ ()
<br>
#9  0x0000000000922485 in qs_mo_types_mp_read_mo_set_from_restart_ ()
<br>
#10 0x000000000158b00e in  
<br>
qs_initial_guess_mp_calculate_first_density_matrix_ ()
<br>
#11 0x0000000000a013c5 in qs_scf_mp_scf_env_initial_rho_setup_ ()
<br>
#12 0x00000000009fc78a in qs_scf_mp_init_scf_run_ ()
<br>
#13 0x00000000009e81bd in qs_scf_mp_scf_ ()
<br>
#14 0x0000000000847ed3 in qs_energy_mp_qs_energies_ ()
<br>
#15 0x0000000000856e5e in qs_force_mp_qs_forces_ ()
<br>
#16 0x00000000004b904b in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#17 0x00000000004b899e in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#18 0x00000000006c4ee4 in md_run_mp_qs_mol_dyn_ ()
<br>
#19 0x000000000040c3d2 in cp2k_runs_mp_cp2k_run_ ()
<br>
#20 0x000000000040af1a in cp2k_runs_mp_run_input_ ()
<br>
#21 0x0000000000409df9 in MAIN__ ()
<br>
#22 0x0000000000408e0c in main ()
<br>
<p><p>#0  0x0000000001b3d4e4 in MPIDI_CH3I_MRAILI_Get_next_vbuf ()
<br>
#1  0x0000000001b2c1ae in MPIDI_CH3I_read_progress ()
<br>
#2  0x0000000001b2be44 in MPIDI_CH3I_Progress ()
<br>
#3  0x0000000001b0686b in MPIC_Wait ()
<br>
#4  0x0000000001b06c60 in MPIC_Sendrecv ()
<br>
#5  0x0000000001aff15a in MPIR_Allreduce ()
<br>
#6  0x0000000001b0036d in PMPI_Allreduce ()
<br>
#7  0x0000000001b1f1da in pmpi_allreduce_ ()
<br>
#8  0x0000000000700f9b in message_passing_mp_mp_sum_r1_ ()
<br>
#9  0x0000000000b68f9d in  
<br>
sparse_matrix_types_mp_cp_sm_sm_trace_scalar_ ()
<br>
#10 0x000000000158de4c in  
<br>
qs_initial_guess_mp_calculate_first_density_matrix_ ()
<br>
#11 0x0000000000a013c5 in qs_scf_mp_scf_env_initial_rho_setup_ ()
<br>
#12 0x00000000009fc78a in qs_scf_mp_init_scf_run_ ()
<br>
#13 0x00000000009e81bd in qs_scf_mp_scf_ ()
<br>
#14 0x0000000000847ed3 in qs_energy_mp_qs_energies_ ()
<br>
#15 0x0000000000856e5e in qs_force_mp_qs_forces_ ()
<br>
#16 0x00000000004b904b in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#17 0x00000000004b899e in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#18 0x00000000006c4ee4 in md_run_mp_qs_mol_dyn_ ()
<br>
#19 0x000000000040c3d2 in cp2k_runs_mp_cp2k_run_ ()
<br>
#20 0x000000000040af1a in cp2k_runs_mp_run_input_ ()
<br>
#21 0x0000000000409df9 in MAIN__ ()
<br>
#22 0x0000000000408e0c in main ()
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9387.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9385.php">Josh Hursey: "Re: [OMPI users] bug in ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
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
