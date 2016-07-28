<?
$subject_val = "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 22:26:39 2015" -->
<!-- isoreceived="20150410022639" -->
<!-- sent="Thu, 9 Apr 2015 19:26:37 -0700" -->
<!-- isosent="20150410022637" -->
<!-- name="Subhra Mazumdar" -->
<!-- email="subhramazumdar1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl" -->
<!-- id="CAATkYOXgLnAsic_zkO63S9kqBpDViamNw_TztR8JdnA53J2uZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAO1KyZ9i66+GXxqsMxAU6BttPP0ccXttFcuLZBLuG3nYRTbHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl<br>
<strong>From:</strong> Subhra Mazumdar (<em>subhramazumdar1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-09 22:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26664.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26584.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26665.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26665.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Does ipoib need to be configured on the ib cards for mxm (I have a separate
<br>
ethernet connection too)? Also are there special flags in mpirun to select
<br>
from UD/RC/DC? What is the default?
<br>
<p>Thanks,
<br>
Subhra.
<br>
<p><p>On Tue, Mar 31, 2015 at 9:46 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; mxm uses IB rdma/roce technologies. Once can select UD/RC/DC transports to
</span><br>
<span class="quotelev1">&gt; be used in mxm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By selecting mxm, all MPI p2p routines will be mapped to appropriate mxm
</span><br>
<span class="quotelev1">&gt; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 30, 2015 at 7:32 PM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev1">&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi MIke,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the mxm mtl use infiniband rdma? Also from programming perspective,
</span><br>
<span class="quotelev2">&gt;&gt; do I need to use anything else other than MPI_Send/MPI_Recv?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Subhra.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Mar 29, 2015 at 11:14 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib btl does not support this thread model.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can use OMPI w/ mxm (-mca mtl mxm) and multiple thread mode lin 1.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x series or (-mca pml yalla) in the master branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Mar 30, 2015 at 9:09 AM, Subhra Mazumdar &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subhramazumdar1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can MPI_THREAD_MULTIPLE and openib btl work together in open mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.8.4? If so are there any command line options needed during run time?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subhra.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26574.php">http://www.open-mpi.org/community/lists/users/2015/03/26574.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26575.php">http://www.open-mpi.org/community/lists/users/2015/03/26575.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26580.php">http://www.open-mpi.org/community/lists/users/2015/03/26580.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26584.php">http://www.open-mpi.org/community/lists/users/2015/03/26584.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26664.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26662.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26584.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26665.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Reply:</strong> <a href="26665.php">Mike Dubman: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
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
