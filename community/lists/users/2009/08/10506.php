<?
$subject_val = "[OMPI users] openmpiu 1.3.3. with OpenFOAM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 16:13:57 2009" -->
<!-- isoreceived="20090827201357" -->
<!-- sent="Thu, 27 Aug 2009 22:13:51 +0200" -->
<!-- isosent="20090827201351" -->
<!-- name="Bastil2001_at_[hidden]" -->
<!-- email="Bastil2001_at_[hidden]" -->
<!-- subject="[OMPI users] openmpiu 1.3.3. with OpenFOAM" -->
<!-- id="4A96E8FF.4030202_at_yahoo.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] openmpiu 1.3.3. with OpenFOAM<br>
<strong>From:</strong> <a href="mailto:Bastil2001_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpiu%201.3.3.%20with%20OpenFOAM"><em>Bastil2001_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-27 16:13:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<li><strong>Previous message:</strong> <a href="10505.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] VMware and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi-ers,
<br>
<p>I lately installed openmpi to run OpenFOAM 1.5 on our myrinet cluster. I
<br>
saw great performence improvements compared to openmpi 1.2.6, however it
<br>
is still little behind the commerical HPMPI.
<br>
Are there further tipps for fine-tuning the parameters to run mpirun
<br>
with for this special application? From my experience the MX-ML should
<br>
be the quicker one so I currently use:
<br>
<p>mpirun --mca mtl mx --mca pml cm ...
<br>
<p><p>as given the FAQ.
<br>
<p>I also thing that processor affinity might be worth trying, I will do
<br>
this. Some other tipps? Are there special reasons why HPMPI still
<br>
outperforms openMPI for this kind of tasks? Thanks and regards.
<br>
<p>BastiL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10507.php">Jeff Squyres: "Re: [OMPI users] Launch jobs with TM, but allocate with node files"</a>
<li><strong>Previous message:</strong> <a href="10505.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] VMware and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10552.php">Jeff Squyres: "Re: [OMPI users] openmpiu 1.3.3. with OpenFOAM"</a>
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
