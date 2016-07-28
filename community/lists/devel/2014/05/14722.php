<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 13:23:19 2014" -->
<!-- isoreceived="20140507172319" -->
<!-- sent="Wed, 7 May 2014 13:23:16 -0400" -->
<!-- isosent="20140507172316" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="C7FE033C-0FB3-4161-9B9F-703D126BBE83_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601D537AE2_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2014-05-07 13:23:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14721.php">Ralph Castain: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14720.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14765.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange. The outcome and the timing of this issue seems to highlight a link with the other datatype-related issue you reported earlier, and as suggested by Ralph with Gilles scif+vader issue.
<br>
<p>Generally speaking, the mechanism used to split the data in the case of multiple BTLs, is identical to the one used to split the data in fragments. So, if the culprit is in the splitting logic, one might see some weirdness as soon as we force the exclusive usage of the send protocol, with an unconventional fragment size.
<br>
<p>In other words using the following flags &#147;&#151;mca btl tcp,self &#151;mca btl_tcp_flags 3 &#151;mca btl_tcp_rndv_eager_limit 23 &#151;mca btl_tcp_eager_limit 23 &#151;mca btl_tcp_max_send_size 23&#148; should always transfer wrong data, even when only one single BTL is in play.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On May 7, 2014, at 13:11 , Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OK.  So, I investigated a little more.  I only see the issue when I am running with multiple ports enabled such that I have two openib BTLs instantiated.  In addition, large message RDMA has to be enabled.  If those conditions are not met, then I do not see the problem.  For example:
</span><br>
<span class="quotelev1">&gt; FAILS:
</span><br>
<span class="quotelev1">&gt; &#216;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include mlx5_0:1,mlx5_0:2 &#150;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt; PASS:
</span><br>
<span class="quotelev1">&gt; &#216;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include mlx5_0:1 &#150;mca btl_openib_flags 3 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt; &#216;  mpirun &#150;np 2 &#150;host host1,host2 &#150;mca btl_openib_if_include_mlx5:0:1,mlx5_0:2 &#150;mca btl_openib_flags 1 MPI_Isend_ator_c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So we must have some type of issue when we break up the message between the two openib BTLs.  Maybe someone else can confirm my observations?
</span><br>
<span class="quotelev1">&gt; I was testing against the latest trunk.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 07, 2014 10:48 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] regression with derived datatypes
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was run on a Sandy Bridge system with ConnectX-3 cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 7, 2014 at 10:46 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Elena, can you run your reproducer on the trunk, please, and see if the problem persists?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 7, 2014 at 10:26 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On May 7, 2014, at 10:03 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, this commit is also in the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I understand that -- my question is: is this same *behavior* happening on the trunk.  I.e., is there some other effect on the trunk that is causing the bad behavior to not occur?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt; Elena
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, May 7, 2014 at 5:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Is this also happening on the trunk?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 7, 2014, at 9:44 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fixes #4501: Datatype unpack code produces incorrect results in some case
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; r31370 [[BR]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reshape all the packing/unpacking functions to use the same skeleton. Rewrite the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; generic_unpacking to take advantage of the same capabilitites.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; r31380 [[BR]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Remove a non-necessary label.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; r31387 [[BR]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Correctly save the displacement for the case where the convertor is not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; completed. As we need to have the right displacement at the beginning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of the next call, we should save the position relative to the beginning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of the buffer and not to the last loop.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Elena
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, May 7, 2014 at 5:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you cite the branch and SVN r number?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; On May 7, 2014, at 9:24 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; b531973419a056696e6f88d813769aa4f1f1aee6
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14701.php">http://www.open-mpi.org/community/lists/devel/2014/05/14701.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14702.php">http://www.open-mpi.org/community/lists/devel/2014/05/14702.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14703.php">http://www.open-mpi.org/community/lists/devel/2014/05/14703.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14704.php">http://www.open-mpi.org/community/lists/devel/2014/05/14704.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14706.php">http://www.open-mpi.org/community/lists/devel/2014/05/14706.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14720.php">http://www.open-mpi.org/community/lists/devel/2014/05/14720.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14721.php">Ralph Castain: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14720.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14723.php">Rolf vandeVaart: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14765.php">Gilles Gouaillardet: "Re: [OMPI devel] regression with derived datatypes"</a>
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
