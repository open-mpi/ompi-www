<?
$subject_val = "[OMPI users] Maui + Slurm + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 11:22:50 2008" -->
<!-- isoreceived="20080522152250" -->
<!-- sent="Thu, 22 May 2008 17:22:36 +0200" -->
<!-- isosent="20080522152236" -->
<!-- name="Romaric David" -->
<!-- email="david_at_[hidden]" -->
<!-- subject="[OMPI users] Maui + Slurm + OpenMPI" -->
<!-- id="48358FBC.7030201_at_icps.u-strasbg.fr" -->
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
<strong>Subject:</strong> [OMPI users] Maui + Slurm + OpenMPI<br>
<strong>From:</strong> Romaric David (<em>david_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 11:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5719.php">Jeff Squyres: "Re: [OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5719.php">Jeff Squyres: "Re: [OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5719.php">Jeff Squyres: "Re: [OMPI users] Maui + Slurm + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to make use of Maui 1.3.6p19 + Slurm 1.2.29 + OpenMPI 1.2.6 together.
<br>
<p>I am currently trying to have slurm procs --ntasks-per-node specification work
<br>
with openmpi.
<br>
<p>I submit a simple mpirun job with :
<br>
sbatch -N 2 --ntasks-per-node=1 myscript  where myscript only contains an mpirun command.
<br>
<p>When submitting this script using slurm's builtin scheduler, all runs perfectly and processes
<br>
get dispatched, one per node, allright.
<br>
<p>When using maui scheduler, the  mpi program does not start : the mpi executable
<br>
does not get read.
<br>
<p>Would mpirun be confused by the environment transmitted by slurm/maui ?
<br>
<p>Do you have a clue on this ?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Romaric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5719.php">Jeff Squyres: "Re: [OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5717.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5719.php">Jeff Squyres: "Re: [OMPI users] Maui + Slurm + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5719.php">Jeff Squyres: "Re: [OMPI users] Maui + Slurm + OpenMPI"</a>
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
