<?
$subject_val = "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 09:43:28 2014" -->
<!-- isoreceived="20141223144328" -->
<!-- sent="Tue, 23 Dec 2014 11:43:05 -0300" -->
<!-- isosent="20141223144305" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()" -->
<!-- id="CAEcYPwCXNUgVAtQ-aQe0UAotDdk3yCBUzr3xMyLF6oGFOr=5NQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAMJJpkW4O_UynW==XiKk0KFNoFWD0yUmjmDm8AW+irvvhKYp7Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-23 09:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15928.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 28 September 2014 at 19:13, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good catch. Indeed the MPI_Ireduce_scatter was not covering the case where
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE was used over a communicator with a single participant. I
</span><br>
<span class="quotelev1">&gt; pushed a patch and schedule it for 1.8.4. Check
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4924">https://svn.open-mpi.org/trac/ompi/ticket/4924</a> for more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>While your change fixed the issues when using MPI_IN_PLACE, now 1.8.4
<br>
seems to fail when in-place is not used.
<br>
<p>Please try the attached example:
<br>
<p>$ mpicc -DNBCOLL=0 ireduce_scatter.c
<br>
$ mpiexec -n 2 ./a.out
<br>
[0] rbuf[0]= 2  expected: 2
<br>
[0] rbuf[1]= 0  expected: 0
<br>
[1] rbuf[0]= 2  expected: 2
<br>
[1] rbuf[1]= 0  expected: 0
<br>
$ mpiexec -n 1 ./a.out
<br>
[0] rbuf[0]= 1  expected: 1
<br>
<p><p>$ mpicc -DNBCOLL=1 ireduce_scatter.c
<br>
$ mpiexec -n 2 ./a.out
<br>
[0] rbuf[0]= 2  expected: 2
<br>
[0] rbuf[1]= 0  expected: 0
<br>
[1] rbuf[0]= 2  expected: 2
<br>
[1] rbuf[1]= 0  expected: 0
<br>
$ mpiexec -n 1 ./a.out
<br>
[0] rbuf[0]= 0  expected: 1
<br>
<p>The last one is wrong. Not sure what's going on. Am I missing something?
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
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16718/ireduce_scatter.c">ireduce_scatter.c</a>
</ul>
<!-- attachment="ireduce_scatter.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Previous message:</strong> <a href="16717.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can require autotools"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15928.php">George Bosilca: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="16719.php">Gilles Gouaillardet: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
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
