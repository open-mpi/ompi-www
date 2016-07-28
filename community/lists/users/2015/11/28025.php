<?
$subject_val = "[OMPI users] Propagate current shell's environment";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 11:40:18 2015" -->
<!-- isoreceived="20151109164018" -->
<!-- sent="Mon, 9 Nov 2015 11:40:13 -0500" -->
<!-- isosent="20151109164013" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="[OMPI users] Propagate current shell's environment" -->
<!-- id="DUB123-W10ACCC23234CC865CD0E6BB1150_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Propagate current shell's environment<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 11:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28024.php">Cristian RUIZ: "[OMPI users] Failure handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Reply:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

Is there any way with OpenMPI to propagate the current shell's environment to the parallel program? I am looking for an equivalent way to how MPICH handles environment variables (<a href="https://wiki.mpich.org/mpich/index.php/Frequently_Asked_Questions#Q:_How_do_I_pass_environment_variables_to_the_processes_of_my_parallel_program_when_using_the_mpd.2C_hydra_or_gforker_process_manager.3F">https://wiki.mpich.org/mpich/index.php/Frequently_Asked_Questions#Q:_How_do_I_pass_environment_variables_to_the_processes_of_my_parallel_program_when_using_the_mpd.2C_hydra_or_gforker_process_manager.3F</a>):

&gt; By default, all the environment variables in the shell where mpiexec is 
run are passed to all processes of the application program.

OpenMPI has the parallel processes read bashrc so the environment can be different for different processes, which is exactly what I want to avoid. I could not find any way of doing this in orterun --help or on the forums.

Thank you.

saurabh
 		 	   		  <br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Previous message:</strong> <a href="28024.php">Cristian RUIZ: "[OMPI users] Failure handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
<li><strong>Reply:</strong> <a href="28026.php">Saurabh T: "Re: [OMPI users] Propagate current shell's environment"</a>
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
