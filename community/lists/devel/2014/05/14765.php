<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 05:08:13 2014" -->
<!-- isoreceived="20140509090813" -->
<!-- sent="Fri, 09 May 2014 18:08:24 +0900" -->
<!-- isosent="20140509090824" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="536C9B08.6010707_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C7FE033C-0FB3-4161-9B9F-703D126BBE83_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 05:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14764.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran some more investigations with --mca btl scif,self
<br>
<p>i found that the previous patch i posted was complete crap and i
<br>
apologize for it.
<br>
<p>on a brighter side, and imho, the issue only occurs if fragments are
<br>
received (and then processed) out of order.
<br>
/* i did not observe this with the tcp btl, but i always see that with
<br>
the scif btl, i guess this can be observed too
<br>
with openib+RDMA */
<br>
<p>in this case only, opal_convertor_generic_simple_position(...) is
<br>
invoked and does not set the pConvertor-&gt;pStack
<br>
as expected by r31496
<br>
<p>i will run some more tests from now
<br>
<p>Gilles
<br>
<p>On 2014/05/08 2:23, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Strange. The outcome and the timing of this issue seems to highlight a link with the other datatype-related issue you reported earlier, and as suggested by Ralph with Gilles scif+vader issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally speaking, the mechanism used to split the data in the case of multiple BTLs, is identical to the one used to split the data in fragments. So, if the culprit is in the splitting logic, one might see some weirdness as soon as we force the exclusive usage of the send protocol, with an unconventional fragment size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words using the following flags &#147;&#151;mca btl tcp,self &#151;mca btl_tcp_flags 3 &#151;mca btl_tcp_rndv_eager_limit 23 &#151;mca btl_tcp_eager_limit 23 &#151;mca btl_tcp_max_send_size 23&#148; should always transfer wrong data, even when only one single BTL is in play.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 13:11 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK.  So, I investigated a little more.  I only see the issue when I am running with multiple ports enabled such that I have two openib BTLs instantiated.  In addition, large message RDMA has to be enabled.  If those conditions are not met, then I do not see the problem.  For example:
</span><br>
<span class="quotelev2">&gt;&gt; FAILS:
</span><br>
<span class="quotelev2">&gt;&gt; &#216;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include mlx5_0:1,mlx5_0:2 &#150;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev2">&gt;&gt; PASS:
</span><br>
<span class="quotelev2">&gt;&gt; &#216;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include mlx5_0:1 &#150;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev2">&gt;&gt; &#216;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include_mlx5:0:1,mlx5_0:2 &#150;mca btl_openib_flags 1 MPI_Isend_ator_c
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; So we must have some type of issue when we break up the message between the two openib BTLs.  Maybe someone else can confirm my observations?
</span><br>
<span class="quotelev2">&gt;&gt; I was testing against the latest trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14764.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>In reply to:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
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
