<?
$subject_val = "[OMPI users] Using PMI as RTE component";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 15:52:57 2014" -->
<!-- isoreceived="20140515195257" -->
<!-- sent="Thu, 15 May 2014 14:52:36 -0500" -->
<!-- isosent="20140515195236" -->
<!-- name="Hadi Montakhabi" -->
<!-- email="hadi.montakhabi_at_[hidden]" -->
<!-- subject="[OMPI users] Using PMI as RTE component" -->
<!-- id="CACuWxGwBpgihJkqXgbCX+uT668LgeZLK9bO-1ZR_vmi5-fP_6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Using PMI as RTE component<br>
<strong>From:</strong> Hadi Montakhabi (<em>hadi.montakhabi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 15:52:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24390.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to utilize pmi instead of orte, but I come across the following
<br>
problem.
<br>
I do configure using --with-slurm=[slurm installation path] and
<br>
--with-pmi=[slurm installation path].
<br>
<p>After compiling, I run the executable using:
<br>
$srun -n 2 --mpi=pmi2 ./executable
<br>
<p>However, this still goes through orte component, not the pmi.
<br>
Am I missing something when I configure?
<br>
<p>Peace,
<br>
Hadi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24390.php">Hadi Montakhabi: "[OMPI users] Using PMI as RTE component"</a>
<li><strong>Previous message:</strong> <a href="24388.php">Ajay Nair: "[OMPI users] openMPI in 64 bit"</a>
<!-- nextthread="start" -->
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
