<?
$subject_val = "[OMPI users] Barrier implementation and use";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 22 14:50:21 2013" -->
<!-- isoreceived="20130422185021" -->
<!-- sent="Mon, 22 Apr 2013 20:50:06 +0200" -->
<!-- isosent="20130422185006" -->
<!-- name="Pablo Barrio" -->
<!-- email="pbarrio_at_[hidden]" -->
<!-- subject="[OMPI users] Barrier implementation and use" -->
<!-- id="5175865E.3020602_at_die.upm.es" -->
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
<strong>Subject:</strong> [OMPI users] Barrier implementation and use<br>
<strong>From:</strong> Pablo Barrio (<em>pbarrio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-22 14:50:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21763.php">Thomas Watson: "[OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21761.php">Javier Garcia Blas: "[OMPI users] Call For Participation: EuroMPI 2013. Madrid, Spain. September	15-18th, 2013"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm using mixed MPI/pthreads with MPI_THREAD_MULTIPLE support. At some 
<br>
point, only one of the threads on each process communicate, while the 
<br>
others keep waiting in a MPI_Barrier. The traces I took from execution 
<br>
suggest that the linux scheduler is waking up the threads blocked in the 
<br>
barrier from time to time, delaying the threads that are actually doing 
<br>
the hard work.
<br>
<p>Is that the correct behaviour or just that it's not optimized yet? I 
<br>
expected the barriers to use some kind of interrupt mechanism so that 
<br>
the blocked threads wouldn't get in the way of others. Any thoughts 
<br>
about how to prevent only some threads stealing cycles?
<br>
<p>Thanks ahead,
<br>
Pablo
<br>
<p><pre>
-- 
Pablo Barrio
Dpt. Electrical Engineering - Technical University of Madrid
Office C-203
Avda. Complutense s/n, 28040 Madrid
Tel. (+34) 915495700 ext. 4234
@: pbarrio_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21763.php">Thomas Watson: "[OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21761.php">Javier Garcia Blas: "[OMPI users] Call For Participation: EuroMPI 2013. Madrid, Spain. September	15-18th, 2013"</a>
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
