<?
$subject_val = "[OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 23:46:25 2009" -->
<!-- isoreceived="20090911034625" -->
<!-- sent="Fri, 11 Sep 2009 12:46:16 +0900" -->
<!-- isosent="20090911034616" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="[OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4AA9C808.3030201_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 23:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10612.php">amjad ali: "[OMPI users] Timers"</a>
<li><strong>Previous message:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10635.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10635.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>Please refer to image at:
<br>
<a href="http://i27.tinypic.com/mtqurp.jpg">http://i27.tinypic.com/mtqurp.jpg</a>
<br>
<p>Here the process illustrated in the image:
<br>
<p>1) C++ Webservice loads the &quot;libParallel.so&quot; when it starts up. (dlopen)
<br>
2) When a new request comes from a client,*new thread* is created,  SOAP 
<br>
data is bound to C++ objects and calcRisk() method of webservice 
<br>
invoked.Inside this method, &quot;calcRisk()&quot; of &quot;libParallel&quot; is invoked 
<br>
(using dlsym ..etc)
<br>
3) Inside &quot;calcRisk()&quot; of &quot;libParallel&quot; ,it spawns &quot;parallel-svr&quot; MPI 
<br>
application.
<br>
(I am using boost MPI and boost serializarion to send custom-data-types 
<br>
across spawned processes.)
<br>
4) &quot;parallel-svr&quot; (MPI Application in image) execute the parallel logic 
<br>
and send the result back to &quot;libParallel.so&quot; using boost MPI send..etc.
<br>
5) &quot;libParallel.so&quot; send the result to webservice,bind into SOAP and 
<br>
sent result to client and the thread ends.
<br>
<p>My problem is :
<br>
<p>Everthing works fine for the first request from the client,
<br>
For the second request it throws an error (i assume from 
<br>
libParallel.so&quot;) saying:
<br>
<p>&quot;--------------------------------------------------------------------------
<br>
Calling any MPI-function after calling MPI_Finalize is erroneous.
<br>
The only exceptions are MPI_Initialized, MPI_Finalized and MPI_Get_version.
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[umanga:19390] Abort after MPI_FINALIZE completed successfully; not able 
<br>
to guarantee that all other processes were killed!&quot;
<br>
<p><p>Is this because of multithreading ? Any idea how to fix this ?
<br>
<p>Thanks in advance,
<br>
umanga
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10612.php">amjad ali: "[OMPI users] Timers"</a>
<li><strong>Previous message:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10635.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10635.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
