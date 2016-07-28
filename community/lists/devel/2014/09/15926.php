<?
$subject_val = "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 06:29:24 2014" -->
<!-- isoreceived="20140928102924" -->
<!-- sent="Sun, 28 Sep 2014 13:29:04 +0300" -->
<!-- isosent="20140928102904" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()" -->
<!-- id="CAEcYPwB_RXAMqWRHvxmTdGNTB_GoQnECZFkQnHXYBy1rBguscA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="84419478-1724-4B4C-8885-39BA9CACB0A8_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-28 06:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15925.php">Lisandro Dalcin: "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15928.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="15928.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22 April 2014 03:02, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Btw, the proposed validator was incorrect the first printf instead of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&#226;&#128;&#156;[%d] rbuf[%d]=%2d  expected:%2d\n&#226;&#128;&#157;, rank, 0, recvbuf[i], size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  printf(&#226;&#128;&#156;[%d] rbuf[%d]=%2d  expected:%2d\n&#226;&#128;&#157;, rank, 0, recvbuf[0], size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm testing this with 1.8.3 after fixed the my incorrect printf, and
<br>
still get different results (and the nbcoll one is wrong) using one
<br>
process (for two or more everything's OK).
<br>
<p>$ mpicc -DNBCOLL=0 ireduce_scatter.c &amp;&amp; mpiexec -n 1 ./a.out
<br>
[0] rbuf[0]= 1  expected: 1
<br>
<p>$ mpicc -DNBCOLL=1 ireduce_scatter.c &amp;&amp; mpiexec -n 1 ./a.out
<br>
[0] rbuf[0]=60  expected: 1
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15925.php">Lisandro Dalcin: "[OMPI devel] Valgrind warning in MPI_Win_allocate[_shared]()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14570.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15928.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="15928.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
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
