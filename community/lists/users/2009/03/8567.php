<?
$subject_val = "[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 13:17:58 2009" -->
<!-- isoreceived="20090324171758" -->
<!-- sent="Tue, 24 Mar 2009 18:17:50 +0100" -->
<!-- isosent="20090324171750" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved" -->
<!-- id="1237915070.12303.41.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] Possible regression from 1.2 to 1.3 when BLACS is involved<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 13:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8566.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<li><strong>Reply:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>We're having problems with code that uses BLACS and openmpi 1.3.x.
<br>
When compiled with memory-manager turned on (base only), code using
<br>
BLACS either start leaking memory or gets into some kind of deadlock.
<br>
The first code-case can be circumvented by using
<br>
mpi_leave_pinned_pipeline 0, but the second one could only be solved by
<br>
compiling openmpi without memory manager.
<br>
<p>Building 1.3.1 with ptmalloc2-internal makes the second code break in
<br>
different ways.
<br>
<p>Anyone else seen similar problems when using BLACS?
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8568.php">Simone Pellegrini: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<li><strong>Previous message:</strong> <a href="8566.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
<li><strong>Reply:</strong> <a href="8652.php">Jeff Squyres: "Re: [OMPI users] Possible regression from 1.2 to 1.3 when BLACS isinvolved"</a>
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
