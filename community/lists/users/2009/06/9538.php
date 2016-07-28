<?
$subject_val = "[OMPI users] [1.2.x] --enable--mpi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 04:32:50 2009" -->
<!-- isoreceived="20090604083250" -->
<!-- sent="Thu, 04 Jun 2009 10:32:45 +0200" -->
<!-- isosent="20090604083245" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] [1.2.x] --enable--mpi-threads" -->
<!-- id="4A2786AD.1010403_at_fft.be" -->
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
<strong>Subject:</strong> [OMPI users] [1.2.x] --enable--mpi-threads<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 04:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<li><strong>Previous message:</strong> <a href="9537.php">Lars Andersson: "[OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'm encountering several issues at runtime in the following environment:
<br>
- a multi-thread (two threads) code (build with gcc -pthread) where:
<br>
&nbsp;&nbsp;. the main thread is the only one that do MPI stuff
<br>
&nbsp;&nbsp;. a control thread periodically records the current machine state
<br>
(doing malloc)
<br>
- OpenMPI-1.2.7 (&quot;standard&quot; configure + --enable-cxx-execptions) orterun
<br>
is used to launched a parallel execution of our multithread code
<br>
<p>The issues observed seems somehow related to memory allocation. In the
<br>
cPicle.so Python module (where thousands of malloc/realloc occur when
<br>
dumping/loading a Python object), for instance, we randomly got some bad
<br>
malloc return code when running parallel under orterun (using
<br>
self,tcp,sm as btl). Might it be due the fact that openmpi allocates
<br>
memory using a non-thread-safe mechanism ?
<br>
<p>I'm wondering if I should be using the --enable-mpi-threads option when
<br>
compiling (configuring) OpenMPI to prevent such issues. Is there any
<br>
extensive doc. about this specific option ? Should I be using something
<br>
else when building OpenMPI ?
<br>
<p>Thanks for your help,
<br>
Eloi
<br>
<p><p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<li><strong>Previous message:</strong> <a href="9537.php">Lars Andersson: "[OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<!-- nextthread="start" -->
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
