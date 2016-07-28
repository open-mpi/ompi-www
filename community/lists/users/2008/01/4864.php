<?
$subject_val = "Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only ..";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 14:19:39 2008" -->
<!-- isoreceived="20080122191939" -->
<!-- sent="Tue, 22 Jan 2008 20:19:27 +0100" -->
<!-- isosent="20080122191927" -->
<!-- name="Pignot Geoffroy" -->
<!-- email="geopignot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .." -->
<!-- id="b4f9bf870801221119w25d8deafu84b5ba2af6c1f6cc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .." -->
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
<strong>Subject:</strong> Re: [OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only ..<br>
<strong>From:</strong> Pignot Geoffroy (<em>geopignot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-22 14:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4863.php">Marco Sbrighi: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Maybe in reply to:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4869.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Reply:</strong> <a href="4869.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could try the following MCA setting in your mpirun command
<br>
--mca mpi_yield_when_idle 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4863.php">Marco Sbrighi: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Maybe in reply to:</strong> <a href="4859.php">Graham Jenkins: "[OMPI users] Excessive Use of CPU System Resources with OpenMPI 1.2.4 using TCP only .."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4869.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
<li><strong>Reply:</strong> <a href="4869.php">Terry Frankcombe: "Re: [OMPI users] Excessive Use of CPU System Resources with	OpenMPI 1.2.4 using TCP only .."</a>
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
