<?
$subject_val = "[OMPI users] mpirun (Aborted) error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 24 06:16:04 2013" -->
<!-- isoreceived="20130224111604" -->
<!-- sent="Sun, 24 Feb 2013 03:15:59 -0800 (PST)" -->
<!-- isosent="20130224111559" -->
<!-- name="Mohammad Mohsenie" -->
<!-- email="m.mohsenie_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun (Aborted) error" -->
<!-- id="1361704559.36448.YahooMailClassic_at_web161902.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpirun (Aborted) error<br>
<strong>From:</strong> Mohammad Mohsenie (<em>m.mohsenie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-24 06:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21455.php">Matthieu Brucher: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Previous message:</strong> <a href="21453.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21455.php">Matthieu Brucher: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Reply:</strong> <a href="21455.php">Matthieu Brucher: "Re: [OMPI users] mpirun (Aborted) error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
Greetings,
<br>
<p>I have installed openmpi to make my siesta package run in parallel in ubuntu 12. After all lateral packages (BLAS, LAPACK, BLACS, SCALAPACK ) are build I run an example with this command:
<br>
&#160;mpirun -np 4 siesta &lt;h2o.fdf &gt;h20.out
<br>
<p>but this error showed up :
<br>
<p>mpirun noticed that process rank 2 with PID 6371 on node mahdi-System-Product-Name exited on signal 6 (Aborted).
<br>
<p>but when I changed command to serial mode ( mpirun -np 1 siesta &lt;h2o.fdf &gt;h20.out) there was no problem.
<br>
<p>Any help regard to my problem would be highly appreciated,
<br>
<p>Regards,
<br>
SMM1370
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21455.php">Matthieu Brucher: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Previous message:</strong> <a href="21453.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21455.php">Matthieu Brucher: "Re: [OMPI users] mpirun (Aborted) error"</a>
<li><strong>Reply:</strong> <a href="21455.php">Matthieu Brucher: "Re: [OMPI users] mpirun (Aborted) error"</a>
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
