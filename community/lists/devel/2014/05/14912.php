<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 08:58:19 2014" -->
<!-- isoreceived="20140530125819" -->
<!-- sent="Fri, 30 May 2014 05:58:16 -0700" -->
<!-- isosent="20140530125816" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360459DDC4F_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkXi4o8PBT43P1-xVmFrBH9GWK+wR5Auqqtok8Ms2i4Edg_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 08:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14911.php">Gilles Gouaillardet: "[OMPI devel] fortran types alignment"</a>
<li><strong>In reply to:</strong> <a href="14910.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This fixed all of my issues.  Thanks.  I will add that comment to ticket also.
<br>

<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George
</span><br>
<span class="quotelev1">&gt;Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, May 29, 2014 5:58 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] regression with derived datatypes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;r31904 should fix this issue. Please test it thoughtfully and report all issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Fri, May 9, 2014 at 6:56 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;&lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; i opened #4610 <a href="https://svn.open-mpi.org/trac/ompi/ticket/4610">https://svn.open-mpi.org/trac/ompi/ticket/4610</a>
</span><br>
<span class="quotelev2">&gt;&gt; and attached a patch for the v1.8 branch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i ran several tests from the intel_tests test suite and did not
</span><br>
<span class="quotelev2">&gt;&gt; observe any regression.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; please note there are still issues when running with --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; scif,vader,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this might be an other issue, i will investigate more next week
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/05/09 18:08, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran some more investigations with --mca btl scif,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i found that the previous patch i posted was complete crap and i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apologize for it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on a brighter side, and imho, the issue only occurs if fragments are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received (and then processed) out of order.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* i did not observe this with the tcp btl, but i always see that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the scif btl, i guess this can be observed too with openib+RDMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in this case only, opal_convertor_generic_simple_position(...) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invoked and does not set the pConvertor-&gt;pStack as expected by r31496
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i will run some more tests from now
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/05/08 2:23, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Strange. The outcome and the timing of this issue seems to highlight a link
</span><br>
<span class="quotelev1">&gt;with the other datatype-related issue you reported earlier, and as suggested
</span><br>
<span class="quotelev1">&gt;by Ralph with Gilles scif+vader issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Generally speaking, the mechanism used to split the data in the case of
</span><br>
<span class="quotelev1">&gt;multiple BTLs, is identical to the one used to split the data in fragments. So, if
</span><br>
<span class="quotelev1">&gt;the culprit is in the splitting logic, one might see some weirdness as soon as
</span><br>
<span class="quotelev1">&gt;we force the exclusive usage of the send protocol, with an unconventional
</span><br>
<span class="quotelev1">&gt;fragment size.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In other words using the following flags &#226;&#128;&#156;&#226;&#128;&#148;mca btl tcp,self &#226;&#128;&#148;mca
</span><br>
<span class="quotelev1">&gt;btl_tcp_flags 3 &#226;&#128;&#148;mca btl_tcp_rndv_eager_limit 23 &#226;&#128;&#148;mca btl_tcp_eager_limit
</span><br>
<span class="quotelev1">&gt;23 &#226;&#128;&#148;mca btl_tcp_max_send_size 23&#226;&#128;&#157; should always transfer wrong data,
</span><br>
<span class="quotelev1">&gt;even when only one single BTL is in play.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 7, 2014, at 13:11 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OK.  So, I investigated a little more.  I only see the issue when I am
</span><br>
<span class="quotelev1">&gt;running with multiple ports enabled such that I have two openib BTLs
</span><br>
<span class="quotelev1">&gt;instantiated.  In addition, large message RDMA has to be enabled.  If those
</span><br>
<span class="quotelev1">&gt;conditions are not met, then I do not see the problem.  For example:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FAILS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#195;&#152;  mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;host host1,host2 &#226;&#128;&#147;mca btl_openib_if_include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mlx5_0:1,mlx5_0:2 &#226;&#128;&#147;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PASS:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#195;&#152;  mpirun &#226;&#128;&#147;np 2 &#226;&#128;&#147;host host1,host2 &#226;&#128;&#147;mca btl_openib_if_include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mlx5_0:1 &#226;&#128;&#147;mca btl_openib_flags 3 MPI_Isend_ator_c &#195;&#152;  mpirun &#226;&#128;&#147;np 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#226;&#128;&#147;host host1,host2 &#226;&#128;&#147;mca btl_openib_if_include_mlx5:0:1,mlx5_0:2 &#226;&#128;&#147;mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_openib_flags 1 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So we must have some type of issue when we break up the message
</span><br>
<span class="quotelev1">&gt;between the two openib BTLs.  Maybe someone else can confirm my
</span><br>
<span class="quotelev1">&gt;observations?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was testing against the latest trunk.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14766.php">http://www.open-mpi.org/community/lists/devel/2014/05/14766.php</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2014/05/14910.php
</span><br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14911.php">Gilles Gouaillardet: "[OMPI devel] fortran types alignment"</a>
<li><strong>In reply to:</strong> <a href="14910.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14913.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
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
