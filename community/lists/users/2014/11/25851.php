<?
$subject_val = "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 11:47:24 2014" -->
<!-- isoreceived="20141120164724" -->
<!-- sent="Thu, 20 Nov 2014 17:47:22 +0100" -->
<!-- isosent="20141120164722" -->
<!-- name="Ghislain Viguier" -->
<!-- email="ghislain.viguier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3" -->
<!-- id="CABcsj_7byqp5cujZyME9HR510KW00yS-AqtAwuLj2fhvB_bb3Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABcsj_5NPdoPf7Zf6t4Q7UjPZJvKtDXcpfyxyT2FdJ8W0vnB9Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-20 11:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25852.php">Howard Pritchard: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25850.php">Ghislain Viguier: "[OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25850.php">Ghislain Viguier: "[OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25852.php">Howard Pritchard: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For further information, the test also fails with MPI-1.8.4rc1.
<br>
<p><p>2014-11-20 16:51 GMT+01:00 Ghislain Viguier &lt;ghislain.viguier_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear support,
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
<p><p><p><pre>
-- 
Ghislain Viguier
T&#195;&#169;l. 06 31 95 03 17
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25851/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25852.php">Howard Pritchard: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25850.php">Ghislain Viguier: "[OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25850.php">Ghislain Viguier: "[OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25852.php">Howard Pritchard: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
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
