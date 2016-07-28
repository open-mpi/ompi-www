<?
$subject_val = "[OMPI users] Status of SLURM integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 02:38:39 2012" -->
<!-- isoreceived="20120111073839" -->
<!-- sent="Wed, 11 Jan 2012 11:38:34 +0400" -->
<!-- isosent="20120111073834" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="[OMPI users] Status of SLURM integration" -->
<!-- id="CAN7CqrcEXgNy5_MujPXzj0m0Lv9-OgOApVxYu9jX2_dK8VjF5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Status of SLURM integration<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 02:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18132.php">Reuti: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Reply:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Could you please describe the current status of SLURM integration? I
<br>
had a feeling srun supports direct launch of OpenMpi applications
<br>
(without mpirun) compiled with the 1.5 branch. &#160;At least one of my
<br>
colleagu succeeded on that.
<br>
<p>But when I installed SLURM and the head revision of OpenMPI 1.5 branch
<br>
I did not manage to run it without settings the&#160;SLURM_STEP_RESV_PORTS
<br>
environment variable.&#160;I receive the following:
<br>
<p>&nbsp;&nbsp;orte_grpcomm_modex failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;A message is attempting to be sent to a process whose
<br>
contact information is unknown&quot; (-117) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[mir9:25477] *** An error occurred in MPI_Init
<br>
[mir9:25477] *** on a NULL communicator
<br>
[mir9:25477] *** Unknown error
<br>
[mir9:25477] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
<p>So I have 2 questions:
<br>
1. Is support of SLURM in the head revision of 1.5 branch stable
<br>
enough to use it in the lab?
<br>
2. Does direct launch of mpi applications require setting the
<br>
SLURM_STEP_RESV_PORTS environment variable?
<br>
<p>Thanks,
<br>
Andrew Senin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18132.php">Reuti: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18130.php">Ralph Castain: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
<li><strong>Reply:</strong> <a href="18134.php">Jeff Squyres: "Re: [OMPI users] Status of SLURM integration"</a>
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
