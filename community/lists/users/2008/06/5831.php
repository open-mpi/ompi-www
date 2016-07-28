<?
$subject_val = "[OMPI users] Documentation on running under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 18:16:08 2008" -->
<!-- isoreceived="20080605221608" -->
<!-- sent="Thu, 5 Jun 2008 15:15:59 -0700 (PDT)" -->
<!-- isosent="20080605221559" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] Documentation on running under slurm" -->
<!-- id="830307.39626.qm_at_web57606.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Documentation on running under slurm<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 18:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<li><strong>Previous message:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<li><strong>Reply:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
<p>It would seem that the documentation, at least the FAQ page at <a href="http://www.open-mpi.org/faq/?category=slurm">http://www.open-mpi.org/faq/?category=slurm</a> is a little out of date with respect to running on newer versions of SLURM (I just got things working with version 1.3.3) .
<br>
<p>According to the SLURM documentation, srun -A is deperecated, and even if you look in the manpage for salloc, -A is not directly mentioned, it's just discussed in the --no-shell section.
<br>
<p>I was able to successfully submit/run using:
<br>
salloc -n &lt;# procs&gt; mpirun &lt;exename&gt;
<br>
<p>without needing an interactive shell.  So doesn't this seem like the more up-to-date way of doing things rather than srun -A?  Also, it would seem sbatch replaces srun -b, but I don't use this mode of operation, so I'm not sure.
<br>
<p>Perhaps the OpenMPI documentation should be updated accordingly?
<br>
<p>Thanks.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<li><strong>Previous message:</strong> <a href="5830.php">Brock Palen: "Re: [OMPI users] libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
<li><strong>Reply:</strong> <a href="5832.php">Jeff Squyres: "Re: [OMPI users] Documentation on running under slurm"</a>
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
