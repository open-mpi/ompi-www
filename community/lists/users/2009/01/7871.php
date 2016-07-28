<?
$subject_val = "[OMPI users] Pinned memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 06:00:12 2009" -->
<!-- isoreceived="20090129110012" -->
<!-- sent="Thu, 29 Jan 2009 12:00:06 +0100" -->
<!-- isosent="20090129110006" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Pinned memory" -->
<!-- id="3a37617f0901290300g422f64c9m50a6365c61fb13d2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Pinned memory<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 06:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>Previous message:</strong> <a href="7870.php">Paul Wardman: "[OMPI users] Rmpi and LAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<li><strong>Reply:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Developer,
<br>
i have a doubt regards mpi_leave_pinned parameter. Suppose i have a simple for:
<br>
<p>for( int i=0; i&lt; 100; i++)
<br>
&nbsp;&nbsp;MPI_Reduce(a, b, .......)
<br>
<p>My question is: if i set mpi_leave_pinned= 1, buffer memories are
<br>
pinned in the entire process, or just into the for cycle?
<br>
<p>When the cycle is finished, a and b memories, are unregistrered?
<br>
<p>Thanks in advance.
<br>
<p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<li><strong>Previous message:</strong> <a href="7870.php">Paul Wardman: "[OMPI users] Rmpi and LAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<li><strong>Reply:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
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
