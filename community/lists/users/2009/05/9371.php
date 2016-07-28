<?
$subject_val = "[OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 17:05:37 2009" -->
<!-- isoreceived="20090518210537" -->
<!-- sent="Mon, 18 May 2009 17:05:33 -0400" -->
<!-- isosent="20090518210533" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="[OMPI users] CP2K mpi hang" -->
<!-- id="A7459071-12C8-40D1-8997-029CCA270681_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d21ea44c0905160004j356ce17dycfeb7df897aacd6b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 17:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9372.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all - I have a bizarre OpenMPI hanging problem.  I'm running an MPI  
<br>
code
<br>
called CP2K (related to, but not the same as cpmd).  The complications  
<br>
of the
<br>
software aside, here are the observations:
<br>
<p>At the base is a serial code that uses system() calls to repeatedly  
<br>
invoke
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun cp2k.popt.
<br>
When I run from my NFS mounted home directory, everything appears to be
<br>
fine.  When I run from a scratch directory local to each node, it  
<br>
hangs on
<br>
the _third_ invokation of CP2K (the 1st and 3rd invokations do  
<br>
computationally
<br>
expensive stuff, the 2nd uses the code in a different mode which does  
<br>
a rather
<br>
different and quicker computation).   These behaviors are quite  
<br>
repeatable.
<br>
Run from NFS mounted home dir - no problem.  Run from node-local scratch
<br>
directory - hang.  Hang is always in the same place (as far as the  
<br>
output of
<br>
the code, anyway).
<br>
<p>The underlying system is Linux with a 2.6.18-128.1.6.el5 kernel  
<br>
(CentOS 5.3)
<br>
on a dual single core Opteron system with Mellanox Infiniband SDR cards.
<br>
One note of caution is that I'm running OFED 1.4.1-rc4, because I need  
<br>
1.4.1
<br>
for compatibility with this kernel as far as I can tell.
<br>
<p>The code is complicated, the input files are big and lead to long  
<br>
computation
<br>
times, so I don't think I'll be able to make a simple test case.   
<br>
Instead
<br>
I attached to the hanging processes (all 8 of them) with gdb
<br>
during  the hang. The stack trace is below.  Nodes seem to spend most of
<br>
their time in the  btl_openib_component_progress(), and occasionally in
<br>
mca_pml_ob1_progress().  I.e. not completely stuck, but not making  
<br>
progress.
<br>
<p>Does anyone have any ideas what could be wrong?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<p>P.S. I get a similar hang with MVAPICH, in a nearby but different part  
<br>
of the
<br>
code (on an MPI_Bcast, specifically), increasing my tendency to believe
<br>
that it's OFED's fault.  But maybe the stack trace will suggest to  
<br>
someone
<br>
where it might be stuck, and therefore perhaps an mca flag to try?
<br>
<p><p>#0  0x00002ac2d19d7733 in btl_openib_component_progress () from /share/ 
<br>
apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_btl_openib.so
<br>
#1  0x00002ac2cdd4daea in opal_progress () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
<br>
#2  0x00002ac2cd887e55 in ompi_request_default_wait_all () from /share/ 
<br>
apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
<br>
#3  0x00002ac2d2eb544f in  
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling () from /share/apps/ 
<br>
mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_coll_tuned.so
<br>
#4  0x00002ac2cd89b867 in PMPI_Allreduce () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
<br>
#5  0x00002ac2cd6429b5 in pmpi_allreduce__ () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libmpi_f77.so.0
<br>
#6  0x000000000077e7db in message_passing_mp_mp_sum_r1_ ()
<br>
#7  0x0000000000be67dd in  
<br>
sparse_matrix_types_mp_cp_sm_sm_trace_scalar_ ()
<br>
#8  0x000000000160b68c in  
<br>
qs_initial_guess_mp_calculate_first_density_matrix_ ()
<br>
#9  0x0000000000a7ec05 in qs_scf_mp_scf_env_initial_rho_setup_ ()
<br>
#10 0x0000000000a79fca in qs_scf_mp_init_scf_run_ ()
<br>
#11 0x0000000000a659fd in qs_scf_mp_scf_ ()
<br>
#12 0x00000000008c5713 in qs_energy_mp_qs_energies_ ()
<br>
#13 0x00000000008d469e in qs_force_mp_qs_forces_ ()
<br>
#14 0x00000000005368bb in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#15 0x000000000053620e in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#16 0x0000000000742724 in md_run_mp_qs_mol_dyn_ ()
<br>
#17 0x0000000000489c42 in cp2k_runs_mp_cp2k_run_ ()
<br>
#18 0x000000000048878a in cp2k_runs_mp_run_input_ ()
<br>
#19 0x0000000000487669 in MAIN__ ()
<br>
#20 0x000000000048667c in main ()
<br>
<p><p><p><p><p><p>#0  0x00002b4d0b57bf09 in mca_pml_ob1_progress () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_pml_ob1.so
<br>
#1  0x00002b4d08538aea in opal_progress () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
<br>
#2  0x00002b4d08072e55 in ompi_request_default_wait_all () from /share/ 
<br>
apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
<br>
#3  0x00002b4d0d6a044f in  
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling () from /share/apps/ 
<br>
mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/mca_coll_tuned.so
<br>
#4  0x00002b4d08086867 in PMPI_Allreduce () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
<br>
#5  0x00002b4d07e2d9b5 in pmpi_allreduce__ () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libmpi_f77.so.0
<br>
#6  0x000000000077e7db in message_passing_mp_mp_sum_r1_ ()
<br>
#7  0x0000000000be67dd in  
<br>
sparse_matrix_types_mp_cp_sm_sm_trace_scalar_ ()
<br>
#8  0x000000000160b68c in  
<br>
qs_initial_guess_mp_calculate_first_density_matrix_ ()
<br>
#9  0x0000000000a7ec05 in qs_scf_mp_scf_env_initial_rho_setup_ ()
<br>
#10 0x0000000000a79fca in qs_scf_mp_init_scf_run_ ()
<br>
#11 0x0000000000a659fd in qs_scf_mp_scf_ ()
<br>
#12 0x00000000008c5713 in qs_energy_mp_qs_energies_ ()
<br>
#13 0x00000000008d469e in qs_force_mp_qs_forces_ ()
<br>
#14 0x00000000005368bb in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#15 0x000000000053620e in  
<br>
force_env_methods_mp_force_env_calc_energy_force_ ()
<br>
#16 0x0000000000742724 in md_run_mp_qs_mol_dyn_ ()
<br>
#17 0x0000000000489c42 in cp2k_runs_mp_cp2k_run_ ()
<br>
#18 0x000000000048878a in cp2k_runs_mp_run_input_ ()
<br>
#19 0x0000000000487669 in MAIN__ ()
<br>
#20 0x000000000048667c in main ()
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9372.php">Joshua Bernstein: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>Previous message:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9358.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
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
