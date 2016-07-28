<?
$subject_val = "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 22:27:46 2014" -->
<!-- isoreceived="20141224032746" -->
<!-- sent="Wed, 24 Dec 2014 12:27:51 +0900" -->
<!-- isosent="20141224032751" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()" -->
<!-- id="549A32B7.7000102_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEcYPwCXNUgVAtQ-aQe0UAotDdk3yCBUzr3xMyLF6oGFOr=5NQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-23 22:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16720.php">Gilles Gouaillardet: "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>Previous message:</strong> <a href="16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>In reply to:</strong> <a href="16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>i fixed this in the master and made a PR for v1.8.
<br>
<p>this is a one liner, and you can find it at
<br>
<a href="https://github.com/ggouaillardet/ompi-release/commit/0e478c1191715fff37e4deb56f8891774db62775">https://github.com/ggouaillardet/ompi-release/commit/0e478c1191715fff37e4deb56f8891774db62775</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/23 23:43, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; On 28 September 2014 at 19:13, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good catch. Indeed the MPI_Ireduce_scatter was not covering the case where
</span><br>
<span class="quotelev2">&gt;&gt; MPI_IN_PLACE was used over a communicator with a single participant. I
</span><br>
<span class="quotelev2">&gt;&gt; pushed a patch and schedule it for 1.8.4. Check
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4924">https://svn.open-mpi.org/trac/ompi/ticket/4924</a> for more info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; While your change fixed the issues when using MPI_IN_PLACE, now 1.8.4
</span><br>
<span class="quotelev1">&gt; seems to fail when in-place is not used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please try the attached example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -DNBCOLL=0 ireduce_scatter.c
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 2  expected: 2
</span><br>
<span class="quotelev1">&gt; [0] rbuf[1]= 0  expected: 0
</span><br>
<span class="quotelev1">&gt; [1] rbuf[0]= 2  expected: 2
</span><br>
<span class="quotelev1">&gt; [1] rbuf[1]= 0  expected: 0
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 1  expected: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc -DNBCOLL=1 ireduce_scatter.c
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 2  expected: 2
</span><br>
<span class="quotelev1">&gt; [0] rbuf[1]= 0  expected: 0
</span><br>
<span class="quotelev1">&gt; [1] rbuf[0]= 2  expected: 2
</span><br>
<span class="quotelev1">&gt; [1] rbuf[1]= 0  expected: 0
</span><br>
<span class="quotelev1">&gt; $ mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt; [0] rbuf[0]= 0  expected: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last one is wrong. Not sure what's going on. Am I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16718.php">http://www.open-mpi.org/community/lists/devel/2014/12/16718.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16719/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16720.php">Gilles Gouaillardet: "[OMPI devel] mpirun hang (regression in bffb2b7a4bb49c9188d942201b8a8f04872ff63c)"</a>
<li><strong>Previous message:</strong> <a href="16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
<li><strong>In reply to:</strong> <a href="16718.php">Lisandro Dalcin: "Re: [OMPI devel] Different behaviour with MPI_IN_PLACE in MPI_Reduce_scatter() and MPI_Ireduce_scatter()"</a>
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
