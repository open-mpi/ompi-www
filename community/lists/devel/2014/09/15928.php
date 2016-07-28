<?
$subject_val = "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 28 18:13:19 2014" -->
<!-- isoreceived="20140928221319" -->
<!-- sent="Sun, 28 Sep 2014 18:13:18 -0400" -->
<!-- isosent="20140928221318" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()" -->
<!-- id="CAMJJpkW4O_UynW==XiKk0KFNoFWD0yUmjmDm8AW+irvvhKYp7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwB_RXAMqWRHvxmTdGNTB_GoQnECZFkQnHXYBy1rBguscA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-28 18:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15929.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15926.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>Good catch. Indeed the MPI_Ireduce_scatter was not covering the case where
<br>
MPI_IN_PLACE was used over a communicator with a single participant. I
<br>
pushed a patch and schedule it for 1.8.4. Check
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/4924">https://svn.open-mpi.org/trac/ompi/ticket/4924</a> for more info.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p>On Sun, Sep 28, 2014 at 6:29 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 22 April 2014 03:02, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Btw, the proposed validator was incorrect the first printf instead of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  printf(&#226;&#128;&#156;[%d] rbuf[%d]=%2d  expected:%2d\n&#226;&#128;&#157;, rank, 0, recvbuf[i], size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; should be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  printf(&#226;&#128;&#156;[%d] rbuf[%d]=%2d  expected:%2d\n&#226;&#128;&#157;, rank, 0, recvbuf[0], size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm testing this with 1.8.3 after fixed the my incorrect printf, and
</span><br>
<span class="quotelev1">&gt; still get different results (and the nbcoll one is wrong) using one
</span><br>
<span class="quotelev1">&gt; process (for two or more everything's OK).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -DNBCOLL=0 ireduce_scatter.c &amp;&amp; mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -DNBCOLL=1 ireduce_scatter.c &amp;&amp; mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]=60  expected: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15929.php">Gilles Gouaillardet: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>Previous message:</strong> <a href="15927.php">Lisandro Dalcin: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<li><strong>In reply to:</strong> <a href="15926.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
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
