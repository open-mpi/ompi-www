<?
$subject_val = "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 04:21:38 2014" -->
<!-- isoreceived="20141121092138" -->
<!-- sent="Fri, 21 Nov 2014 10:21:36 +0100" -->
<!-- isosent="20141121092136" -->
<!-- name="Ghislain Viguier" -->
<!-- email="ghislain.viguier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3" -->
<!-- id="CABcsj_6m+ziPaTcmA+KfeKgdcgQTZMWdeA_OivzgvDmff04FjQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="546EDA66.9010607_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3<br>
<strong>From:</strong> Ghislain Viguier (<em>ghislain.viguier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-21 04:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25854.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<li><strong>In reply to:</strong> <a href="25853.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles and Howard,
<br>
<p>The use of MPI_Dist_graph_create_adjacent solves the issue :)
<br>
<p>Thanks for your help!
<br>
<p>Best reagrds,
<br>
Ghislain
<br>
<p>2014-11-21 7:23 GMT+01:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
<br>
<span class="quotelev1">&gt;:
</span><br>
<p><span class="quotelev1">&gt;  Hi Ghislain,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that sound like a but in MPI_Dist_graph_create :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can use MPI_Dist_graph_create_adjacent instead :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Dist_graph_create_adjacent(MPI_COMM_WORLD, degrees, &amp;targets[0],
</span><br>
<span class="quotelev1">&gt; &amp;weights[0],
</span><br>
<span class="quotelev1">&gt;                         degrees, &amp;targets[0], &amp;weights[0], info,
</span><br>
<span class="quotelev1">&gt; rankReordering, &amp;commGraph);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it does not crash and as far as i understand, it produces correct results,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; according the the mpi standard (example 7.3) that should do the same
</span><br>
<span class="quotelev1">&gt; thing, that's why
</span><br>
<span class="quotelev1">&gt; i think there is a bug in MPI_Dist_graph_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/11/21 2:21, Howard Pritchard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ghislain,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to run your test with mvapich 1.9 and get a &quot;message truncated&quot;
</span><br>
<span class="quotelev1">&gt; failure at three ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-11-20 8:51 GMT-07:00 Ghislain Viguier &lt;ghislain.viguier_at_[hidden]&gt; &lt;ghislain.viguier_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear support,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm encountering an issue with the MPI_Neighbor_alltoallw request of
</span><br>
<span class="quotelev1">&gt; mpi-1.8.3.
</span><br>
<span class="quotelev1">&gt; I have enclosed a test case with information of my workstation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this test, I define a weighted topology for 5 processes, where the
</span><br>
<span class="quotelev1">&gt; weight represent the number of buffers to send/receive :
</span><br>
<span class="quotelev1">&gt;     rank
</span><br>
<span class="quotelev1">&gt;       0 : | x |
</span><br>
<span class="quotelev1">&gt;       1 : | 2 | x |
</span><br>
<span class="quotelev1">&gt;       2 : | 1 | 1 | x |
</span><br>
<span class="quotelev1">&gt;       3 : | 3 | 2 | 3 | x |
</span><br>
<span class="quotelev1">&gt;       4 : | 5 | 2 | 2 | 2 | x |
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this topology, the rank 1 will send/receive :
</span><br>
<span class="quotelev1">&gt;    2 buffers to/from the rank 0,
</span><br>
<span class="quotelev1">&gt;    1 buffer to/from the rank 2,
</span><br>
<span class="quotelev1">&gt;    2 buffers to/from the rank 3,
</span><br>
<span class="quotelev1">&gt;    2 buffers to/from the rank 4,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The send buffer are defined with the MPI_Type_create_hindexed_block. This
</span><br>
<span class="quotelev1">&gt; allows to use a same buffer for several communications without duplicating
</span><br>
<span class="quotelev1">&gt; it (read only).
</span><br>
<span class="quotelev1">&gt; Here the rank 1 will have 2 send buffers (the max of 2, 1, 2, 2).
</span><br>
<span class="quotelev1">&gt; The receiver buffer is a contiguous buffer defined with
</span><br>
<span class="quotelev1">&gt; MPI_Type_contiguous request.
</span><br>
<span class="quotelev1">&gt; Here, the receiver buffer of the rank 1 is of size : 7 (2+1+2+2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test case succesful for 2 or 3 processes. For 4 processes, the test
</span><br>
<span class="quotelev1">&gt; fails 1 times for 3 successes. For 5 processes, the test fails all the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error code is : *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand what I am doing wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please have a look on it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Ghislain Viguier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ghislain Viguier
</span><br>
<span class="quotelev1">&gt; T&#195;&#169;l. 06 31 95 03 17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25850.php">http://www.open-mpi.org/community/lists/users/2014/11/25850.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25852.php">http://www.open-mpi.org/community/lists/users/2014/11/25852.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25853.php">http://www.open-mpi.org/community/lists/users/2014/11/25853.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ghislain Viguier
T&#195;&#169;l. 06 31 95 03 17
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25855/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25854.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<li><strong>In reply to:</strong> <a href="25853.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
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
