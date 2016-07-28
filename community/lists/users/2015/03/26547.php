<?
$subject_val = "[OMPI users] Errors on POWER8 Ubuntu 14.04u2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 19:48:04 2015" -->
<!-- isoreceived="20150326234804" -->
<!-- sent="Thu, 26 Mar 2015 23:47:48 +0000" -->
<!-- isosent="20150326234748" -->
<!-- name="Hammond, Simon David (-EXP)" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="[OMPI users] Errors on POWER8 Ubuntu 14.04u2" -->
<!-- id="1427413796168.7383_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI users] Errors on POWER8 Ubuntu 14.04u2<br>
<strong>From:</strong> Hammond, Simon David (-EXP) (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 19:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Previous message:</strong> <a href="26546.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Reply:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,

We are trying to compile custom installs of OpenMPI 1.8.4 on our POWER8 Ubuntu system. We can configure and build correctly but when running ompi_info we see many errors like those listed below. It appears that all of the libraries in the ./lib are static (.a) files. It appears that we are unable to get our IB system working as a result.

Can you recommend what we should be doing to ensure this works correctly? 

[node11:104711] mca: base: component_find: unable to open /home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none/lib/openmpi/mca_compress_bzip: lt_dlerror() returned NULL! (ignored)

Thanks for your help,


--
Simon Hammond
Center for Computing Research (Scalable Computer Architectures)
Sandia National Laboratories, NM
[Sent from remote connection, please excuse typing errors]<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26548.php">Zhisong Fu: "Re: [OMPI users] issue with openmpi + CUDA"</a>
<li><strong>Previous message:</strong> <a href="26546.php">Mark Santcroos: "Re: [OMPI users] open mpi on blue waters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Reply:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
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
