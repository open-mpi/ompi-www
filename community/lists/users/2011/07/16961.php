<?
$subject_val = "Re: [OMPI users] problems with parallel MPI-IO...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 10:21:00 2011" -->
<!-- isoreceived="20110719142100" -->
<!-- sent="Tue, 19 Jul 2011 16:20:55 +0200" -->
<!-- isosent="20110719142055" -->
<!-- name="Alexander Beck-Ratzka" -->
<!-- email="alexander.beck-ratzka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with parallel MPI-IO..." -->
<!-- id="201107191620.55454.alexander.beck-ratzka_at_aei.mpg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="22594_1311084882_4E259152_22594_422_1_4E259112.3030900_at_scinet.utoronto.ca" -->
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
<strong>From:</strong> Alexander Beck-Ratzka (<em>alexander.beck-ratzka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-19 10:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16962.php">Mouhamad Al-Sayed-Ali: "[OMPI users] no allocated resources for the application........(mpirun)"</a>
<li><strong>Previous message:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Maybe in reply to:</strong> <a href="16959.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel MPI-IO..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, July 19, 2011 16:13:38 Jonathan Dursi wrote:
<br>
<span class="quotelev1">&gt; On 19 Jul 9:02AM, Alexander Beck-Ratzka wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    integer ierr, i, myrank, BUFSIZE, thefile, intsize
</span><br>
<span class="quotelev2">&gt; &gt;    parameter (BUFSIZE=100)
</span><br>
<span class="quotelev2">&gt; &gt;    integer buf(BUFSIZE)
</span><br>
<span class="quotelev2">&gt; &gt;    
</span><br>
<span class="quotelev2">&gt; &gt;    do i=0,BUFSIZE
</span><br>
<span class="quotelev2">&gt; &gt;    
</span><br>
<span class="quotelev2">&gt; &gt;       buf(i) = myrank*BUFSIZE + i
</span><br>
<span class="quotelev2">&gt; &gt;       print*, 'i =', i, 'myrank =', myrank, 'buf(i)=',buf(i)
</span><br>
<span class="quotelev2">&gt; &gt;    
</span><br>
<span class="quotelev2">&gt; &gt;    end do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When I am reading the data in again and print them out, I always have:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; buf(0)=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you compile your code with -check bounds and run, you'll get an error
</span><br>
<span class="quotelev1">&gt; pointing out that buf(0) is an illegal access; in Fortran arrays start at
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks a lot, that solved the problem!
<br>
<p>Best wishes
<br>
<p>Alexander
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16962.php">Mouhamad Al-Sayed-Ali: "[OMPI users] no allocated resources for the application........(mpirun)"</a>
<li><strong>Previous message:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Maybe in reply to:</strong> <a href="16959.php">Alexander Beck-Ratzka: "[OMPI users] problems with parallel MPI-IO..."</a>
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
