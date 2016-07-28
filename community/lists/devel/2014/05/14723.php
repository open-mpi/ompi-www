<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 13:42:45 2014" -->
<!-- isoreceived="20140507174245" -->
<!-- sent="Wed, 7 May 2014 10:42:44 -0700" -->
<!-- isosent="20140507174244" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601D5E4B57_at_HQMAIL02.nvidia.com" -->
<!-- charset="Windows-1252" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 13:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14765.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried this.  However, 23 bytes is too small so I added the 23 to the 56 (79) required for the PML header.  I do not get the error.
<br>
<p>mpirun -host host0,host1 -np 2 --mca btl self,tcp --mca btl_tcp_flags 3 --mca btl_tcp_rndv_eager_limit 23 --mca btl_tcp_eager_limit 23 --mca btl_tcp_max_send_size 23 MPI_Isend_ator_c
<br>
*** An error occurred in MPI_Init
<br>
The &quot;eager limit&quot; MCA parameter in the tcp BTL was set to a value which
<br>
is too low for Open MPI to function properly.  Please re-run your job
<br>
with a higher eager limit value for this BTL; the exact MCA parameter
<br>
name and its corresponding minimum value is shown below.
<br>
<p>&nbsp;&nbsp;Local host:              host0
<br>
&nbsp;&nbsp;BTL name:                tcp
<br>
&nbsp;&nbsp;BTL eager limit value:   23 (set via btl_tcp_eager_limit)
<br>
&nbsp;&nbsp;BTL eager limit minimum: 56
<br>
&nbsp;&nbsp;MCA parameter name:      btl_tcp_eager_limit 
<br>
--------------------------------------------------------------------------
<br>
<p>mpirun -host host0,host1 -np 2 --mca btl self,tcp --mca btl_tcp_flags 3 --mca btl_tcp_rndv_eager_limit 79 --mca btl_tcp_eager_limit 79 --mca btl_tcp_max_send_size 79 MPI_Isend_ator_c
<br>
MPITEST info  (0): Starting MPI_Isend_ator: All Isend TO Root test
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[6]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[22]=2 too large, using 1
<br>
MPITEST info  (0): Node spec MPITEST_comm_sizes[32]=2 too large, using 1
<br>
MPITEST_results: MPI_Isend_ator: All Isend TO Root all tests PASSED (3744)
<br>
<p>________________________________________
<br>
From: devel [devel-bounces_at_[hidden]] On Behalf Of George Bosilca [bosilca_at_[hidden]]
<br>
Sent: Wednesday, May 07, 2014 1:23 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] regression with derived datatypes
<br>
<p>Strange. The outcome and the timing of this issue seems to highlight a link with the other datatype-related issue you reported earlier, and as suggested by Ralph with Gilles scif+vader issue.
<br>
<p>Generally speaking, the mechanism used to split the data in the case of multiple BTLs, is identical to the one used to split the data in fragments. So, if the culprit is in the splitting logic, one might see some weirdness as soon as we force the exclusive usage of the send protocol, with an unconventional fragment size.
<br>
<p>In other words using the following flags &#147;&#151;mca btl tcp,self &#151;mca btl_tcp_flags 3 &#151;mca btl_tcp_rndv_eager_limit 23 &#151;mca btl_tcp_eager_limit 23 &#151;mca btl_tcp_max_send_size 23&#148; should always transfer wrong data, even when only one single BTL is in play.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On May 7, 2014, at 13:11 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
<p>OK.  So, I investigated a little more.  I only see the issue when I am running with multiple ports enabled such that I have two openib BTLs instantiated.  In addition, large message RDMA has to be enabled.  If those conditions are not met, then I do not see the problem.  For example:
<br>
FAILS:
<br>
<span class="quotelev1">&gt;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include mlx5_0:1,mlx5_0:2 &#150;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
PASS:
<br>
<span class="quotelev1">&gt;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include mlx5_0:1 &#150;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include_mlx5:0:1,mlx5_0:2 &#150;mca btl_openib_flags 1 MPI_Isend_ator_c
</span><br>
<p>So we must have some type of issue when we break up the message between the two openib BTLs.  Maybe someone else can confirm my observations?
<br>
I was testing against the latest trunk.
<br>
<p>Rolf
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
<br>
Sent: Wednesday, May 07, 2014 10:48 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] regression with derived datatypes
<br>
<p>Rolf,
<br>
This was run on a Sandy Bridge system with ConnectX-3 cards.
<br>
Josh
<br>
<p>On Wed, May 7, 2014 at 10:46 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&lt;mailto:jladd.mlnx_at_[hidden]&gt;&gt; wrote:
<br>
Elena, can you run your reproducer on the trunk, please, and see if the problem persists?
<br>
Josh
<br>
<p>On Wed, May 7, 2014 at 10:26 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
On May 7, 2014, at 10:03 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, this commit is also in the trunk.
</span><br>
Yes, I understand that -- my question is: is this same *behavior* happening on the trunk.  I.e., is there some other effect on the trunk that is causing the bad behavior to not occur?
<br>
<p><span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Elena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 7, 2014 at 5:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is this also happening on the trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 9:44 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #4501: Datatype unpack code produces incorrect results in some case
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r31370 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Reshape all the packing/unpacking functions to use the same skeleton. Rewrite the
</span><br>
<span class="quotelev2">&gt;&gt; generic_unpacking to take advantage of the same capabilitites.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r31380 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Remove a non-necessary label.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r31387 [[BR]]
</span><br>
<span class="quotelev2">&gt;&gt; Correctly save the displacement for the case where the convertor is not
</span><br>
<span class="quotelev2">&gt;&gt; completed. As we need to have the right displacement at the beginning
</span><br>
<span class="quotelev2">&gt;&gt; of the next call, we should save the position relative to the beginning
</span><br>
<span class="quotelev2">&gt;&gt; of the buffer and not to the last loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 7, 2014 at 5:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you cite the branch and SVN r number?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On May 7, 2014, at 9:24 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; b531973419a056696e6f88d813769aa4f1f1aee6
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14701.php">http://www.open-mpi.org/community/lists/devel/2014/05/14701.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14702.php">http://www.open-mpi.org/community/lists/devel/2014/05/14702.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14703.php">http://www.open-mpi.org/community/lists/devel/2014/05/14703.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14704.php">http://www.open-mpi.org/community/lists/devel/2014/05/14704.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14706.php">http://www.open-mpi.org/community/lists/devel/2014/05/14706.php</a>
________________________________
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
________________________________
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14720.php">http://www.open-mpi.org/community/lists/devel/2014/05/14720.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Previous message:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14722.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14765.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
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
