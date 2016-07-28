<?
$subject_val = "[OMPI users] OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 03:36:25 2008" -->
<!-- isoreceived="20080612073625" -->
<!-- sent="Thu, 12 Jun 2008 09:36:14 +0200" -->
<!-- isosent="20080612073614" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI bug?" -->
<!-- id="3a37617f0806120036g58e3544eq5c3f50d20aed446f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI bug?<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 03:36:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5862.php">twurgl_at_[hidden]: "[OMPI users] locked  memory problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i have installed OpenMPI 1.2.6, using gcc with bounds checking. But, when i
<br>
compile an MPI program, i have many time the same error:
<br>
<p>../opal/include/opal/sys/amd64/atomic.h:89:    Address in memory:    0x8 ..
<br>
0xb
<br>
../opal/include/opal/sys/amd64/atomic.h:89:    Size:                 4 bytes
<br>
../opal/include/opal/sys/amd64/atomic.h:89:    Element size:         1 bytes
<br>
../opal/include/opal/sys/amd64/atomic.h:89:    Number of elements:   4
<br>
../opal/include/opal/sys/amd64/atomic.h:89:    Created at:
<br>
class/opal_object.c, line 52
<br>
../opal/include/opal/sys/amd64/atomic.h:89:    Storage class:        static
<br>
../opal/include/opal/sys/amd64/atomic.h:89:Bounds error: attempt to
<br>
reference memory overrunning the end of an object.
<br>
../opal/include/opal/sys/amd64/atomic.h:89:  Pointer value: 0x8, Size: 8
<br>
<p>Setting the enviroment variable to &quot;-never-fatal&quot;, the compile phase, ends
<br>
successfull. But, at runtime, i have ever the error above, very much time,
<br>
and the program fails, with &quot;undefined status&quot;.
<br>
<p>Is this an OpenMPI bug?
<br>
<p><p><p><p><p><pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5862.php">twurgl_at_[hidden]: "[OMPI users] locked  memory problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Reply:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
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
