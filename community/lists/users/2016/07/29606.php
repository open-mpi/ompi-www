<?
$subject_val = "[OMPI users] mpi_reduce implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 09:16:06 2016" -->
<!-- isoreceived="20160708131606" -->
<!-- sent="Fri, 08 Jul 2016 15:13:33 +0200" -->
<!-- isosent="20160708131333" -->
<!-- name="Juan Francisco Mart&#237;nez" -->
<!-- email="juan.francisco.martinez_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_reduce implementation" -->
<!-- id="1467983613.5372.16.camel_at_est.fib.upc.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpi_reduce implementation<br>
<strong>From:</strong> Juan Francisco Mart&#237;nez (<em>juan.francisco.martinez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-08 09:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Previous message:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Reply:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Reply:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Maybe reply:</strong> <a href="29611.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody!
<br>
<p>First of all I want to congratulate all of you because the quality of
<br>
the community, I have solved a lot of doubts just reading the mailing
<br>
list.
<br>
<p>However I have a question that I can not solve... Until now I though
<br>
that all the collective operations have an implicit sincronization, but
<br>
I can see that this is not true at all (because optimizations?). Then,
<br>
after searching a little bit on the web I saw that there are several
<br>
implementations of the reduction in openmpi, in fact there are 6
<br>
possible algorithm (at least on OMPI 1.6) that you can use by mean of
<br>
the mca parameters... 
<br>
<p>I thought that one of them behaves as a synchronization but after
<br>
execute a test with each one, no one behaves as it. Then my question
<br>
is, there is any possibility, by tuning ompi, the reduce operation
<br>
syncrhonize all the ranks that are involved at the end of the
<br>
operation?
<br>
<p>Also I would like to know if there is any mechanism to know at runtime
<br>
which algorithm is being used.
<br>
<p>Thanks for all!
<br>
- Fran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Previous message:</strong> <a href="29605.php">Gilles Gouaillardet: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Reply:</strong> <a href="29607.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Reply:</strong> <a href="29608.php">Gilles Gouaillardet: "Re: [OMPI users] mpi_reduce implementation"</a>
<li><strong>Maybe reply:</strong> <a href="29611.php">George Bosilca: "Re: [OMPI users] mpi_reduce implementation"</a>
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
