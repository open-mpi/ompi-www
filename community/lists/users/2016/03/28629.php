<?
$subject_val = "[OMPI users] Orted path with module manager on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 17:22:13 2016" -->
<!-- isoreceived="20160303222213" -->
<!-- sent="Thu, 03 Mar 2016 16:22:03 -0600" -->
<!-- isosent="20160303222203" -->
<!-- name="Davide Vanzo" -->
<!-- email="vanzod_at_[hidden]" -->
<!-- subject="[OMPI users] Orted path with module manager on cluster" -->
<!-- id="1457043723.11487.8.camel_at_accre.vanderbilt.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Orted path with module manager on cluster<br>
<strong>From:</strong> Davide Vanzo (<em>vanzod_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 17:22:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28630.php">Davide Vanzo: "[OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>Previous message:</strong> <a href="28628.php">Jim Dinan: "Re: [OMPI users] Fw: Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Reply:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Reply:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I have built OpenMPI 1.10.2 with RoCE network support on our test
<br>
cluster. On the cluster we use lmod to manage paths to different
<br>
versions of softwares. The problem I have is that I receive the &quot;orted:
<br>
command not found&quot; message given that the path to the orted binary is
<br>
not exported to the other nodes where my run is launched via a non-
<br>
interactive ssh connection. I temporarily solved the problem by
<br>
exporting PATH with the correct path to orted on my .bashrc file but
<br>
this is not obviously a solution.
<br>
Any idea how I can fix it?
<br>
<p>Thank you.
<br>
<p>Davide
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28630.php">Davide Vanzo: "[OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>Previous message:</strong> <a href="28628.php">Jim Dinan: "Re: [OMPI users] Fw: Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Reply:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Reply:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
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
