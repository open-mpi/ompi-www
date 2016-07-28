<?
$subject_val = "[OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 10:40:04 2011" -->
<!-- isoreceived="20111214154004" -->
<!-- sent="Wed, 14 Dec 2011 18:39:56 +0300" -->
<!-- isosent="20111214153956" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI users] How &amp;quot;CUDA Init prior to MPI_Init&amp;quot; co-exists with unique GPU for each MPI process?" -->
<!-- id="CAGR4S9E2Goh-OWjRK8rUbefOiSe-DaaH5=7rTZQGa-C6LUfiKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 10:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17950.php">Micah Sklut: "[OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Reply:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear colleagues,
<br>
<p>For GPU Winter School powered by Moscow State University cluster
<br>
&quot;Lomonosov&quot;, the OpenMPI 1.7 was built to test and popularize CUDA
<br>
capabilities of MPI. There is one strange warning I cannot understand:
<br>
OpenMPI runtime suggests to initialize CUDA prior to MPI_Init. Sorry,
<br>
but how could it be? I thought processes are spawned during MPI_Init,
<br>
and such context will be created on the very first root process. Why
<br>
do we need existing CUDA context before MPI_Init? I think there was no
<br>
such error in previous versions.
<br>
<p>Thanks,
<br>
- D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Previous message:</strong> <a href="17950.php">Micah Sklut: "[OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
<li><strong>Reply:</strong> <a href="17952.php">Matthieu Brucher: "Re: [OMPI users] How &quot;CUDA Init prior to MPI_Init&quot; co-exists with unique GPU for each MPI process?"</a>
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
