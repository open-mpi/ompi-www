<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 08:29:24 2009" -->
<!-- isoreceived="20090519122924" -->
<!-- sent="Tue, 19 May 2009 08:29:18 -0400" -->
<!-- isosent="20090519122918" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="6FDB9035-F698-4AF6-A5B2-06E7E52BC259_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A7459071-12C8-40D1-8997-029CCA270681_at_nrl.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 08:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9371.php">Noam Bernstein: "[OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fork() support in OpenFabrics has always been dicey -- it can lead to  
<br>
random behavior like this.  Supposedly it works in a specific set of  
<br>
circumstances, but I don't have a recent enough kernel on my machines  
<br>
to test.
<br>
<p>It's best not to use calls to system() if they can be avoided.   
<br>
Indeed, Open MPI v1.3.x will warn you if you create a child process  
<br>
after MPI_INIT when using OpenFabrics networks.
<br>
<p><p>On May 18, 2009, at 5:05 PM, Noam Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Hi all - I have a bizarre OpenMPI hanging problem.  I'm running an MPI
</span><br>
<span class="quotelev1">&gt; code
</span><br>
<span class="quotelev1">&gt; called CP2K (related to, but not the same as cpmd).  The complications
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; software aside, here are the observations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the base is a serial code that uses system() calls to repeatedly
</span><br>
<span class="quotelev1">&gt; invoke
</span><br>
<span class="quotelev1">&gt;     mpirun cp2k.popt.
</span><br>
<span class="quotelev1">&gt; When I run from my NFS mounted home directory, everything appears to  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; fine.  When I run from a scratch directory local to each node, it
</span><br>
<span class="quotelev1">&gt; hangs on
</span><br>
<span class="quotelev1">&gt; the _third_ invokation of CP2K (the 1st and 3rd invokations do
</span><br>
<span class="quotelev1">&gt; computationally
</span><br>
<span class="quotelev1">&gt; expensive stuff, the 2nd uses the code in a different mode which does
</span><br>
<span class="quotelev1">&gt; a rather
</span><br>
<span class="quotelev1">&gt; different and quicker computation).   These behaviors are quite
</span><br>
<span class="quotelev1">&gt; repeatable.
</span><br>
<span class="quotelev1">&gt; Run from NFS mounted home dir - no problem.  Run from node-local  
</span><br>
<span class="quotelev1">&gt; scratch
</span><br>
<span class="quotelev1">&gt; directory - hang.  Hang is always in the same place (as far as the
</span><br>
<span class="quotelev1">&gt; output of
</span><br>
<span class="quotelev1">&gt; the code, anyway).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The underlying system is Linux with a 2.6.18-128.1.6.el5 kernel
</span><br>
<span class="quotelev1">&gt; (CentOS 5.3)
</span><br>
<span class="quotelev1">&gt; on a dual single core Opteron system with Mellanox Infiniband SDR  
</span><br>
<span class="quotelev1">&gt; cards.
</span><br>
<span class="quotelev1">&gt; One note of caution is that I'm running OFED 1.4.1-rc4, because I need
</span><br>
<span class="quotelev1">&gt; 1.4.1
</span><br>
<span class="quotelev1">&gt; for compatibility with this kernel as far as I can tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code is complicated, the input files are big and lead to long
</span><br>
<span class="quotelev1">&gt; computation
</span><br>
<span class="quotelev1">&gt; times, so I don't think I'll be able to make a simple test case.
</span><br>
<span class="quotelev1">&gt; Instead
</span><br>
<span class="quotelev1">&gt; I attached to the hanging processes (all 8 of them) with gdb
</span><br>
<span class="quotelev1">&gt; during  the hang. The stack trace is below.  Nodes seem to spend  
</span><br>
<span class="quotelev1">&gt; most of
</span><br>
<span class="quotelev1">&gt; their time in the  btl_openib_component_progress(), and occasionally  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_progress().  I.e. not completely stuck, but not making
</span><br>
<span class="quotelev1">&gt; progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any ideas what could be wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                                                         Noam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. I get a similar hang with MVAPICH, in a nearby but different part
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; code (on an MPI_Bcast, specifically), increasing my tendency to  
</span><br>
<span class="quotelev1">&gt; believe
</span><br>
<span class="quotelev1">&gt; that it's OFED's fault.  But maybe the stack trace will suggest to
</span><br>
<span class="quotelev1">&gt; someone
</span><br>
<span class="quotelev1">&gt; where it might be stuck, and therefore perhaps an mca flag to try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00002ac2d19d7733 in btl_openib_component_progress () from / 
</span><br>
<span class="quotelev1">&gt; share/
</span><br>
<span class="quotelev1">&gt; apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002ac2cdd4daea in opal_progress () from /share/apps/mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002ac2cd887e55 in ompi_request_default_wait_all () from / 
</span><br>
<span class="quotelev1">&gt; share/
</span><br>
<span class="quotelev1">&gt; apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002ac2d2eb544f in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling () from /share/apps/
</span><br>
<span class="quotelev1">&gt; mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002ac2cd89b867 in PMPI_Allreduce () from /share/apps/mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00002ac2cd6429b5 in pmpi_allreduce__ () from /share/apps/mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/libmpi_f77.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x000000000077e7db in message_passing_mp_mp_sum_r1_ ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000be67dd in
</span><br>
<span class="quotelev1">&gt; sparse_matrix_types_mp_cp_sm_sm_trace_scalar_ ()
</span><br>
<span class="quotelev1">&gt; #8  0x000000000160b68c in
</span><br>
<span class="quotelev1">&gt; qs_initial_guess_mp_calculate_first_density_matrix_ ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000a7ec05 in qs_scf_mp_scf_env_initial_rho_setup_ ()
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000a79fca in qs_scf_mp_init_scf_run_ ()
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000a659fd in qs_scf_mp_scf_ ()
</span><br>
<span class="quotelev1">&gt; #12 0x00000000008c5713 in qs_energy_mp_qs_energies_ ()
</span><br>
<span class="quotelev1">&gt; #13 0x00000000008d469e in qs_force_mp_qs_forces_ ()
</span><br>
<span class="quotelev1">&gt; #14 0x00000000005368bb in
</span><br>
<span class="quotelev1">&gt; force_env_methods_mp_force_env_calc_energy_force_ ()
</span><br>
<span class="quotelev1">&gt; #15 0x000000000053620e in
</span><br>
<span class="quotelev1">&gt; force_env_methods_mp_force_env_calc_energy_force_ ()
</span><br>
<span class="quotelev1">&gt; #16 0x0000000000742724 in md_run_mp_qs_mol_dyn_ ()
</span><br>
<span class="quotelev1">&gt; #17 0x0000000000489c42 in cp2k_runs_mp_cp2k_run_ ()
</span><br>
<span class="quotelev1">&gt; #18 0x000000000048878a in cp2k_runs_mp_run_input_ ()
</span><br>
<span class="quotelev1">&gt; #19 0x0000000000487669 in MAIN__ ()
</span><br>
<span class="quotelev1">&gt; #20 0x000000000048667c in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00002b4d0b57bf09 in mca_pml_ob1_progress () from /share/apps/ 
</span><br>
<span class="quotelev1">&gt; mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #1  0x00002b4d08538aea in opal_progress () from /share/apps/mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002b4d08072e55 in ompi_request_default_wait_all () from / 
</span><br>
<span class="quotelev1">&gt; share/
</span><br>
<span class="quotelev1">&gt; apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b4d0d6a044f in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling () from /share/apps/
</span><br>
<span class="quotelev1">&gt; mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #4  0x00002b4d08086867 in PMPI_Allreduce () from /share/apps/mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00002b4d07e2d9b5 in pmpi_allreduce__ () from /share/apps/mpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2/intel-11.0.083/lib/libmpi_f77.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x000000000077e7db in message_passing_mp_mp_sum_r1_ ()
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000be67dd in
</span><br>
<span class="quotelev1">&gt; sparse_matrix_types_mp_cp_sm_sm_trace_scalar_ ()
</span><br>
<span class="quotelev1">&gt; #8  0x000000000160b68c in
</span><br>
<span class="quotelev1">&gt; qs_initial_guess_mp_calculate_first_density_matrix_ ()
</span><br>
<span class="quotelev1">&gt; #9  0x0000000000a7ec05 in qs_scf_mp_scf_env_initial_rho_setup_ ()
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000a79fca in qs_scf_mp_init_scf_run_ ()
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000a659fd in qs_scf_mp_scf_ ()
</span><br>
<span class="quotelev1">&gt; #12 0x00000000008c5713 in qs_energy_mp_qs_energies_ ()
</span><br>
<span class="quotelev1">&gt; #13 0x00000000008d469e in qs_force_mp_qs_forces_ ()
</span><br>
<span class="quotelev1">&gt; #14 0x00000000005368bb in
</span><br>
<span class="quotelev1">&gt; force_env_methods_mp_force_env_calc_energy_force_ ()
</span><br>
<span class="quotelev1">&gt; #15 0x000000000053620e in
</span><br>
<span class="quotelev1">&gt; force_env_methods_mp_force_env_calc_energy_force_ ()
</span><br>
<span class="quotelev1">&gt; #16 0x0000000000742724 in md_run_mp_qs_mol_dyn_ ()
</span><br>
<span class="quotelev1">&gt; #17 0x0000000000489c42 in cp2k_runs_mp_cp2k_run_ ()
</span><br>
<span class="quotelev1">&gt; #18 0x000000000048878a in cp2k_runs_mp_run_input_ ()
</span><br>
<span class="quotelev1">&gt; #19 0x0000000000487669 in MAIN__ ()
</span><br>
<span class="quotelev1">&gt; #20 0x000000000048667c in main ()
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9371.php">Noam Bernstein: "[OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
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
