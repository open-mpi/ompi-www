<?
$subject_val = "[OMPI users] Getting MPI to access processes on a 2nd computer.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 14:53:18 2012" -->
<!-- isoreceived="20120703185318" -->
<!-- sent="Tue, 3 Jul 2012 14:53:13 -0400" -->
<!-- isosent="20120703185313" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="[OMPI users] Getting MPI to access processes on a 2nd computer." -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB401DEDA11_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Getting%20MPI%20to%20access%20processes%20on%20a%202nd%20computer."><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-07-03 14:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19719.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19717.php">Jeff Squyres: "[OMPI users] Fwd: EuroMPI 2012 Call for participation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19723.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Reply:</strong> <a href="19723.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I'm trying to run an MPI code using processes on a remote machine.
<br>
<p>I've connected the 2 machines using a crossover cable and they are
<br>
communicating with each other(I'm getting ping replies and I can access
<br>
drives on one another).
<br>
<p>&nbsp;
<br>
<p>When I run mpiexec -host system_name MPI_Test.exe, I get the following
<br>
error:
<br>
<p>&nbsp;
<br>
<p>C:\OpenMPI\openmpi-1.6\build\Debug&gt;mpiexec -host SOUMIWHP4500449
<br>
MPI_Test.exe
<br>
<p>connecting to SOUMIWHP4500449
<br>
<p>username:C9995799
<br>
<p>password:**********
<br>
<p>Save Credential?(Y/N) N
<br>
<p>[SOUMIWHP5003567:01728] Could not connect to namespace cimv2 on node
<br>
SOUMIWHP450
<br>
<p>0449. Error code =-2147023174
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
mpiexec was unable to start the specified application as it encountered
an error
.
More information may be available above.
------------------------------------------------------------------------
--
[SOUMIWHP5003567:01728] [[38316,0],0] ORTE_ERROR_LOG: A message is
attempting to
be sent to a process whose contact information is unknown in file
..\..\..\open
mpi-1.6\orte\mca\rml\oob\rml_oob_send.c at line 145
[SOUMIWHP5003567:01728] [[38316,0],0] attempted to send to
[[38316,0],1]: tag 1
[SOUMIWHP5003567:01728] [[38316,0],0] ORTE_ERROR_LOG: A message is
attempting to
be sent to a process whose contact information is unknown in file
..\..\..\open
mpi-1.6\orte\orted\orted_comm.c at line 126
 
Could anyone tell me what I'm missing?
 
I've configured MPI on VS Express 2010 and I'm able to run MPI programs
on one system.
On the other computer, I pasted the MPI_Test.exe file in the same
location as the calling computer.
 
Thanks,
Vimal
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19719.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19717.php">Jeff Squyres: "[OMPI users] Fwd: EuroMPI 2012 Call for participation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19723.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
<li><strong>Reply:</strong> <a href="19723.php">Shiqing Fan: "Re: [OMPI users] Getting MPI to access processes on a 2nd computer."</a>
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
