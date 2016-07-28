<?
$subject_val = "[OMPI users] OpenMP explicit thread affinity with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 23:40:25 2016" -->
<!-- isoreceived="20160629034025" -->
<!-- sent="Tue, 28 Jun 2016 23:40:23 -0400" -->
<!-- isosent="20160629034023" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMP explicit thread affinity with MPI" -->
<!-- id="CA+ssbKWq_w-O97MgCbNC=CKJvXgESLdGiXW=58dV5gVsyuURFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMP explicit thread affinity with MPI<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-28 23:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29555.php">Vega, Joshua: "[OMPI users] Parallel Backtracking in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to do something like below with OpenMPI and OpenMP (threads).
<br>
<p>[image: Inline image 1]
<br>
<p>I was trying to use the explicit thread affinity with GOMP_CPU_AFFINITY
<br>
environment variable as described here (
<br>
<a href="https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html">https://gcc.gnu.org/onlinedocs/libgomp/GOMP_005fCPU_005fAFFINITY.html</a>).
<br>
<p>However, both P0 and P1 processes will read the same GOMP_CPU_AFFINITY and
<br>
will place threads on the same set of cores.
<br>
<p>Is there a way to overcome this and pass process specific affinity scheme
<br>
to OpenMP when running with OpenMPI? For example, can I say T0 of P0 should
<br>
be in Core 0, but T0 of P1 should be Core 4?
<br>
<p>P.S. I can manually achieve this within the program using
<br>
*sched_setaffinity()*, but that's not portable.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29556/image.png" alt="image.png">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29555.php">Vega, Joshua: "[OMPI users] Parallel Backtracking in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Reply:</strong> <a href="29557.php">Ralph Castain: "Re: [OMPI users] OpenMP explicit thread affinity with MPI"</a>
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
