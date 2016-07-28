<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 17:58:02 2014" -->
<!-- isoreceived="20140529215802" -->
<!-- sent="Thu, 29 May 2014 17:58:01 -0400" -->
<!-- isosent="20140529215801" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="CAMJJpkXi4o8PBT43P1-xVmFrBH9GWK+wR5Auqqtok8Ms2i4Edg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="536CB466.6050309_at_iferc.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-29 17:58:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14911.php">Gilles Gouaillardet: "[OMPI devel] fortran types alignment"</a>
<li><strong>Previous message:</strong> <a href="14909.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14912.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14912.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r31904 should fix this issue. Please test it thoughtfully and report all issues.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, May 9, 2014 at 6:56 AM, Gilles Gouaillardet
<br>
&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; i opened #4610 <a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>
</span><br>
<span class="quotelev1">&gt; and attached a patch for the v1.8 branch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i ran several tests from the intel_tests test suite and did not observe
</span><br>
<span class="quotelev1">&gt; any regression.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; please note there are still issues when running with --mca btl
</span><br>
<span class="quotelev1">&gt; scif,vader,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this might be an other issue, i will investigate more next week
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/05/09 18:08, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I ran some more investigations with --mca btl scif,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i found that the previous patch i posted was complete crap and i
</span><br>
<span class="quotelev2">&gt;&gt; apologize for it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on a brighter side, and imho, the issue only occurs if fragments are
</span><br>
<span class="quotelev2">&gt;&gt; received (and then processed) out of order.
</span><br>
<span class="quotelev2">&gt;&gt; /* i did not observe this with the tcp btl, but i always see that with
</span><br>
<span class="quotelev2">&gt;&gt; the scif btl, i guess this can be observed too
</span><br>
<span class="quotelev2">&gt;&gt; with openib+RDMA */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in this case only, opal_convertor_generic_simple_position(...) is
</span><br>
<span class="quotelev2">&gt;&gt; invoked and does not set the pConvertor-&gt;pStack
</span><br>
<span class="quotelev2">&gt;&gt; as expected by r31496
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i will run some more tests from now
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/05/08 2:23, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Strange. The outcome and the timing of this issue seems to highlight a link with the other datatype-related issue you reported earlier, and as suggested by Ralph with Gilles scif+vader issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Generally speaking, the mechanism used to split the data in the case of multiple BTLs, is identical to the one used to split the data in fragments. So, if the culprit is in the splitting logic, one might see some weirdness as soon as we force the exclusive usage of the send protocol, with an unconventional fragment size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In other words using the following flags &#226;&#128;&#156;&#226;&#128;&#148;mca btl tcp,self &#226;&#128;&#148;mca btl_tcp_flags 3 &#226;&#128;&#148;mca btl_tcp_rndv_eager_limit 23 &#226;&#128;&#148;mca btl_tcp_eager_limit 23 &#226;&#128;&#148;mca btl_tcp_max_send_size 23&#226;&#128;&#157; should always transfer wrong data, even when only one single BTL is in play.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2014, at 13:11 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK.  So, I investigated a little more.  I only see the issue when I am running with multiple ports enabled such that I have two openib BTLs instantiated.  In addition, large message RDMA has to be enabled.  If those conditions are not met, then I do not see the problem.  For example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAILS:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#195;&#152;  mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;host host1,host2 &#226;&#128;&#147;mca btl_openib_if_include mlx5_0:1,mlx5_0:2 &#226;&#128;&#147;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PASS:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#195;&#152;  mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;host host1,host2 &#226;&#128;&#147;mca btl_openib_if_include mlx5_0:1 &#226;&#128;&#147;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#195;&#152;  mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;host host1,host2 &#226;&#128;&#147;mca btl_openib_if_include_mlx5:0:1,mlx5_0:2 &#226;&#128;&#147;mca btl_openib_flags 1 MPI_Isend_ator_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So we must have some type of issue when we break up the message between the two openib BTLs.  Maybe someone else can confirm my observations?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was testing against the latest trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14766.php">http://www.open-mpi.org/community/lists/devel/2014/05/14766.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14911.php">Gilles Gouaillardet: "[OMPI devel] fortran types alignment"</a>
<li><strong>Previous message:</strong> <a href="14909.php">Edgar Gabriel: "Re: [OMPI devel] RFC: add STCI component to OMPI/RTE framework"</a>
<li><strong>In reply to:</strong> <a href="14766.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14912.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14912.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
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
