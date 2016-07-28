<?
$subject_val = "[OMPI devel] interaction with slurm 14.11";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 22:42:48 2015" -->
<!-- isoreceived="20150417024248" -->
<!-- sent="Fri, 17 Apr 2015 12:42:37 +1000" -->
<!-- isosent="20150417024237" -->
<!-- name="David Singleton" -->
<!-- email="david.b.singleton_at_[hidden]" -->
<!-- subject="[OMPI devel] interaction with slurm 14.11" -->
<!-- id="CAFNyhXkBmuzpiCHjY5GLfTu2CfBYNmcayBQ8MY0uEyRjNgbWTA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] interaction with slurm 14.11<br>
<strong>From:</strong> David Singleton (<em>david.b.singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-16 22:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17237.php">Gilles Gouaillardet: "[OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our site effectively runs all slurm jobs with sbatch --export=NONE ...  and
<br>
creates the necessary environment inside the batch script.  After upgading
<br>
to 14.11,  OpenMPI mpirun jobs hit
<br>
<p>2015-04-15T08:53:54+08:00 nod0138 slurmstepd[3122]: error: execve(): orted:
<br>
No such file or directory
<br>
<p>The issue appears to be that, as of 14.11, srun now recognizes
<br>
--export=NONE and, more importantly, the SLURM_EXPORT_ENV=NONE set in the
<br>
jobs environment if you submit with sbatch --export=NONE .   The simple
<br>
workaround is to unset SLURM_EXPORT_ENV before mpirun.  Possibly mpirun
<br>
should add --export=ALL to its srun commands.
<br>
<p>Cheers
<br>
David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17236/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17237.php">Gilles Gouaillardet: "[OMPI devel] running Open MPI with different install paths"</a>
<li><strong>Previous message:</strong> <a href="17235.php">Nathan Hjelm: "Re: [OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>Reply:</strong> <a href="17252.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
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
