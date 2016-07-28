<?
$subject_val = "Re: [OMPI users] problems with parallel MPI-IO...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 10:13:43 2011" -->
<!-- isoreceived="20110719141343" -->
<!-- sent="Tue, 19 Jul 2011 10:13:38 -0400" -->
<!-- isosent="20110719141338" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with parallel MPI-IO..." -->
<!-- id="4E259112.3030900_at_scinet.utoronto.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201107191502.36286.alexander.beck-ratzka_at_aei.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with parallel MPI-IO...<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-19 10:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16961.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Previous message:</strong> <a href="16959.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>In reply to:</strong> <a href="16959.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel MPI-IO..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16961.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19 Jul 9:02AM, Alexander Beck-Ratzka wrote:
<br>
<span class="quotelev1">&gt;    integer ierr, i, myrank, BUFSIZE, thefile, intsize
</span><br>
<span class="quotelev1">&gt;    parameter (BUFSIZE=100)
</span><br>
<span class="quotelev1">&gt;    integer buf(BUFSIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    do i=0,BUFSIZE
</span><br>
<span class="quotelev1">&gt;       buf(i) = myrank*BUFSIZE + i
</span><br>
<span class="quotelev1">&gt;       print*, 'i =', i, 'myrank =', myrank, 'buf(i)=',buf(i)
</span><br>
<span class="quotelev1">&gt;    end do
</span><br>
[...]
<br>
<span class="quotelev1">&gt; When I am reading the data in again and print them out, I always have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; buf(0)=0
</span><br>
<p>If you compile your code with -check bounds and run, you'll get an error 
<br>
pointing out that buf(0) is an illegal access; in Fortran arrays start at 1.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi | SciNet, Compute/Calcul Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16961.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Previous message:</strong> <a href="16959.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>In reply to:</strong> <a href="16959.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel MPI-IO..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16961.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
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
