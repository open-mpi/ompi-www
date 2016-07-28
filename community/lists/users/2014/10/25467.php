<?
$subject_val = "[OMPI users] Update/patch to check/opal_check_pmi.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 15:28:10 2014" -->
<!-- isoreceived="20141006192810" -->
<!-- sent="Mon, 6 Oct 2014 13:28:09 -0600" -->
<!-- isosent="20141006192809" -->
<!-- name="Timothy Brown" -->
<!-- email="Timothy.Brown-1_at_[hidden]" -->
<!-- subject="[OMPI users] Update/patch to check/opal_check_pmi.m4" -->
<!-- id="54B12FAC-0C03-4524-9A13-017717B5D8D1_at_colorado.edu" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Update/patch to check/opal_check_pmi.m4<br>
<strong>From:</strong> Timothy Brown (<em>Timothy.Brown-1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 15:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25468.php">Michael Thomadakis: "[OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25466.php">Alain Miniussi: "[OMPI users] Problem with MPI_topo_test error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I&#146;m not too sure if this is the right list, or if I should be posting to the dev list. Please let me know if I&#146;m in the wrong.
<br>
<p>We use SLURM (14.03.7) and have been trying to get OpenMPI (1.8.3) to work with `srun`. It seems that the M4 file to check for PMI doesn&#146;t work in our situation. Where we have both a lib64 and lib directory within SLURM. The lib64 directory only contains perl modules, while the lib directory contains the PMI library.
<br>
<p>By changing the M4 AS_IF macro in config/opal_check_pmi.m4 to check for the library .so and to have an else if test. The configuration script finds the library. Which means OpenMPI builds with PMI support and now we have 
<br>
- srun
<br>
- mpirun
<br>
- mpiexec
<br>
all working properly.
<br>
<p>I have created a patch against the git master and it&#146;s attached.
<br>
<p>Regards
<br>
Timothy
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25467/0001-Updating-the-PMI-check.patch">0001-Updating-the-PMI-check.patch</a>
</ul>
<!-- attachment="0001-Updating-the-PMI-check.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25468.php">Michael Thomadakis: "[OMPI users] Strange behavior of OMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25466.php">Alain Miniussi: "[OMPI users] Problem with MPI_topo_test error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Reply:</strong> <a href="25469.php">Joshua Ladd: "Re: [OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
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
