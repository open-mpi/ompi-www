<?
$subject_val = "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 23 22:47:39 2014" -->
<!-- isoreceived="20141124034739" -->
<!-- sent="Sun, 23 Nov 2014 21:47:37 -0600" -->
<!-- isosent="20141124034737" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3" -->
<!-- id="CAMJJpkVg1WM5dXBbN_Refv4XPUiKkZ3ZbQUOCi_CrcV8F9o4WQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="546F0A7A.1050605_at_iferc.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-23 22:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25859.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25857.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<li><strong>In reply to:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25864.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25864.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would argue this is a typical user level bug.
<br>
<p>The major difference between the dist_create and dist_create_adjacent is
<br>
that in the later each process provides its neighbors in an order that is
<br>
expected (and that match the info provided to the MPI_Neighbor_alltoallw
<br>
call. When the topology is created with dist_create, every process will
<br>
end-up having the correct partial topology, but in an order that doesn't
<br>
match what the user expected (not in the rank-order of the neighbors).
<br>
However, I can't find anything in the standard that would require from the
<br>
MPI library to sort the neighbors. I would assume is the user
<br>
responsibility, to make sure that they are using the topology in the right
<br>
order, where the right order is what the communicator really contains and
<br>
not what the user expect based on prior knowledge.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Nov 21, 2014 at 3:48 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Ghislain,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i can confirm there is a bug in mca_topo_base_dist_graph_distribute
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI a proof of concept is available at
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/283">https://github.com/open-mpi/ompi/pull/283</a>
</span><br>
<span class="quotelev1">&gt; and i recommend you use MPI_Dist_graph_create_adjacent if this meets your
</span><br>
<span class="quotelev1">&gt; needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a side note, the right way to set the info is
</span><br>
<span class="quotelev1">&gt;         MPI_Info info = MPI_INFO_NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* mpich is more picky and crashes with info = NULL */
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
<span class="quotelev1">&gt; On 2014/11/21 18:21, Ghislain Viguier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles and Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The use of MPI_Dist_graph_create_adjacent solves the issue :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best reagrds,
</span><br>
<span class="quotelev1">&gt; Ghislain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-11-21 7:23 GMT+01:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Hi Ghislain,
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
<span class="quotelev1">&gt; MPI_Dist_graph_create_
</span><br>
<span class="quotelev1">&gt; adjacent(MPI_COMM_WORLD, degrees, &amp;targets[0],
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
<span class="quotelev1">&gt; 2014-11-20 8:51 GMT-07:00 Ghislain Viguier &lt;ghislain.viguier_at_[hidden]&gt; &lt;ghislain.viguier_at_[hidden]&gt; &lt;ghislain.viguier_at_[hidden]&gt; &lt;ghislain.viguier_at_[hidden]&gt;:
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/11/25853.php">http://www.open-mpi.org/community/lists/users/2014/11/25853.php</a>
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25855.php">http://www.open-mpi.org/community/lists/users/2014/11/25855.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25856.php">http://www.open-mpi.org/community/lists/users/2014/11/25856.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25859.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25857.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI SC'14 BOF slides: mpif.h --&gt; module mpi"</a>
<li><strong>In reply to:</strong> <a href="25856.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25864.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25864.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
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
