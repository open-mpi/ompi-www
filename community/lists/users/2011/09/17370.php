<?
$subject_val = "[OMPI users] Building with thread support on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 11:18:34 2011" -->
<!-- isoreceived="20110921151834" -->
<!-- sent="Wed, 21 Sep 2011 17:18:26 +0200" -->
<!-- isosent="20110921151826" -->
<!-- name="Bj&#195;&#182;rn Regnstr&#195;&#182;m" -->
<!-- email="regnstrom_at_[hidden]" -->
<!-- subject="[OMPI users] Building with thread support on Windows?" -->
<!-- id="1316618306.4e7a004257596_at_go.flowtech.se" -->
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
<strong>Subject:</strong> [OMPI users] Building with thread support on Windows?<br>
<strong>From:</strong> Bj&#195;&#182;rn Regnstr&#195;&#182;m (<em>regnstrom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 11:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Previous message:</strong> <a href="17369.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Reply:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to build Open MPI 1.4.3 with thread support on Windows. A
<br>
trivial test program 
<br>
runs if it calls MPI_Init or MP_Init_thread(int *argc, char ***argv,
<br>
int required, int *provide) with
<br>
reguired=0 but hangs if required&gt;0. ompi_info for my build reports
<br>
that there is no thread
<br>
support but MPI_Init_thread returns provide==required. 
<br>
<p>The only change in the CMake configuration was to check
<br>
OMPI_ENABLE_MPI_THREADS. 
<br>
Is there anything else that needs to be done with the configuration? 
<br>
<p>I have built 1.4.3 with thread support on several linuxes and mac and
<br>
it works fine there. 
<br>
<p>Regards,
<br>
Bjorn Regnstrom
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Previous message:</strong> <a href="17369.php">Ralph Castain: "Re: [OMPI users] Large TCP cluster timeout issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Reply:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
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
