<?
$subject_val = "Re: [OMPI devel] [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 21 01:23:14 2014" -->
<!-- isoreceived="20141121062314" -->
<!-- sent="Fri, 21 Nov 2014 15:23:34 +0900" -->
<!-- isosent="20141121062334" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3" -->
<!-- id="546EDA66.9010607_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj5SA+REDxPJJVb=MjA-R+dQ83t-bsfUs=rD-muF4hHMXA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-21 01:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16330.php">Allan Wu: "[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ghislain,
<br>
<p>that sound like a but in MPI_Dist_graph_create :-(
<br>
<p>you can use MPI_Dist_graph_create_adjacent instead :
<br>
<p>MPI_Dist_graph_create_adjacent(MPI_COMM_WORLD, degrees, &amp;targets[0],
<br>
&amp;weights[0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;degrees, &amp;targets[0], &amp;weights[0], info,
<br>
rankReordering, &amp;commGraph);
<br>
<p>it does not crash and as far as i understand, it produces correct results,
<br>
<p>according the the mpi standard (example 7.3) that should do the same
<br>
thing, that's why
<br>
i think there is a bug in MPI_Dist_graph_create
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On 2014/11/21 2:21, Howard Pritchard wrote:
<br>
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
<span class="quotelev1">&gt; 2014-11-20 8:51 GMT-07:00 Ghislain Viguier &lt;ghislain.viguier_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear support,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm encountering an issue with the MPI_Neighbor_alltoallw request of
</span><br>
<span class="quotelev2">&gt;&gt; mpi-1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt; I have enclosed a test case with information of my workstation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this test, I define a weighted topology for 5 processes, where the
</span><br>
<span class="quotelev2">&gt;&gt; weight represent the number of buffers to send/receive :
</span><br>
<span class="quotelev2">&gt;&gt;     rank
</span><br>
<span class="quotelev2">&gt;&gt;       0 : | x |
</span><br>
<span class="quotelev2">&gt;&gt;       1 : | 2 | x |
</span><br>
<span class="quotelev2">&gt;&gt;       2 : | 1 | 1 | x |
</span><br>
<span class="quotelev2">&gt;&gt;       3 : | 3 | 2 | 3 | x |
</span><br>
<span class="quotelev2">&gt;&gt;       4 : | 5 | 2 | 2 | 2 | x |
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this topology, the rank 1 will send/receive :
</span><br>
<span class="quotelev2">&gt;&gt;    2 buffers to/from the rank 0,
</span><br>
<span class="quotelev2">&gt;&gt;    1 buffer to/from the rank 2,
</span><br>
<span class="quotelev2">&gt;&gt;    2 buffers to/from the rank 3,
</span><br>
<span class="quotelev2">&gt;&gt;    2 buffers to/from the rank 4,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The send buffer are defined with the MPI_Type_create_hindexed_block. This
</span><br>
<span class="quotelev2">&gt;&gt; allows to use a same buffer for several communications without duplicating
</span><br>
<span class="quotelev2">&gt;&gt; it (read only).
</span><br>
<span class="quotelev2">&gt;&gt; Here the rank 1 will have 2 send buffers (the max of 2, 1, 2, 2).
</span><br>
<span class="quotelev2">&gt;&gt; The receiver buffer is a contiguous buffer defined with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_contiguous request.
</span><br>
<span class="quotelev2">&gt;&gt; Here, the receiver buffer of the rank 1 is of size : 7 (2+1+2+2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This test case succesful for 2 or 3 processes. For 4 processes, the test
</span><br>
<span class="quotelev2">&gt;&gt; fails 1 times for 3 successes. For 5 processes, the test fails all the time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error code is : *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand what I am doing wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you please have a look on it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ghislain Viguier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ghislain Viguier
</span><br>
<span class="quotelev2">&gt;&gt; T&#233;l. 06 31 95 03 17
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25850.php">http://www.open-mpi.org/community/lists/users/2014/11/25850.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25852.php">http://www.open-mpi.org/community/lists/users/2014/11/25852.php</a>
</span><br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16329/neighbor_alltoallw.patch">neighbor_alltoallw.patch</a>
</ul>
<!-- attachment="neighbor_alltoallw.patch" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16329/main2.cpp">main2.cpp</a>
</ul>
<!-- attachment="main2.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16330.php">Allan Wu: "[OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<li><strong>Previous message:</strong> <a href="16328.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
