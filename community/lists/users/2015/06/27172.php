<?
$subject_val = "[OMPI users] Anyone successfully running Abaqus with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 18:06:39 2015" -->
<!-- isoreceived="20150622220639" -->
<!-- sent="Mon, 22 Jun 2015 22:06:37 +0000" -->
<!-- isosent="20150622220637" -->
<!-- name="Belgin, Mehmet" -->
<!-- email="mehmet.belgin_at_[hidden]" -->
<!-- subject="[OMPI users] Anyone successfully running Abaqus with OpenMPI?" -->
<!-- id="SN2PR0701MB8143DF554FF1F267BDF3F2ED9A10_at_SN2PR0701MB814.namprd07.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI users] Anyone successfully running Abaqus with OpenMPI?<br>
<strong>From:</strong> Belgin, Mehmet (<em>mehmet.belgin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 18:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27171.php">Ralph Castain: "[OMPI users] PMIx 2.0: seeking input"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27174.php">Tim Prince: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>We recently upgraded the hwloc library used by the schedulers (along with openmpi and all applications compiled with it), but apparently Abaqus is using an internal MPI (PMPI) which still points to old hwloc versions that are not compatible. As a result, Abaqus either crashes or runs extremely slow.
<br>
<p>Abaqus documentation suggests that it may be possible to run it using an external MPI stack, and I am hoping to make it work with our stock openmpi/1.8.4 that knows how to talk with the scheduler's hwloc. Unfortunately, however, all of my attempts failed miserably so far (no specific instructions for openmpi).
<br>
<p>I was wondering if anyone had success with getting Abaqus running with openmpi. Even the information of whether it is possible or not will help us a great deal.
<br>
<p>Thanks for your help!
<br>
<p>-Mehmet
<br>
<p><p>PS: I sent a similar question to the mvapich2 list as well. If they respond with some information that can be applied to openmpi, I will happily share them here.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27171.php">Ralph Castain: "[OMPI users] PMIx 2.0: seeking input"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27173.php">Brice Goglin: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27174.php">Tim Prince: "Re: [OMPI users] Anyone successfully running Abaqus with OpenMPI?"</a>
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
