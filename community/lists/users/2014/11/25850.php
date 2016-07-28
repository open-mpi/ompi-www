<?
$subject_val = "[OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 10:51:52 2014" -->
<!-- isoreceived="20141120155152" -->
<!-- sent="Thu, 20 Nov 2014 16:51:49 +0100" -->
<!-- isosent="20141120155149" -->
<!-- name="Ghislain Viguier" -->
<!-- email="ghislain.viguier_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3" -->
<!-- id="CABcsj_5NPdoPf7Zf6t4Q7UjPZJvKtDXcpfyxyT2FdJ8W0vnB9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3<br>
<strong>From:</strong> Ghislain Viguier (<em>ghislain.viguier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 10:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25851.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25849.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI SC'14 BOF slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25851.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25851.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25852.php">Howard Pritchard: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear support,
<br>
<p>I'm encountering an issue with the MPI_Neighbor_alltoallw request of
<br>
mpi-1.8.3.
<br>
I have enclosed a test case with information of my workstation.
<br>
<p>In this test, I define a weighted topology for 5 processes, where the
<br>
weight represent the number of buffers to send/receive :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 : | x |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 : | 2 | x |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 : | 1 | 1 | x |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 : | 3 | 2 | 3 | x |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 : | 5 | 2 | 2 | 2 | x |
<br>
<p>In this topology, the rank 1 will send/receive :
<br>
&nbsp;&nbsp;&nbsp;2 buffers to/from the rank 0,
<br>
&nbsp;&nbsp;&nbsp;1 buffer to/from the rank 2,
<br>
&nbsp;&nbsp;&nbsp;2 buffers to/from the rank 3,
<br>
&nbsp;&nbsp;&nbsp;2 buffers to/from the rank 4,
<br>
<p>The send buffer are defined with the MPI_Type_create_hindexed_block. This
<br>
allows to use a same buffer for several communications without duplicating
<br>
it (read only).
<br>
Here the rank 1 will have 2 send buffers (the max of 2, 1, 2, 2).
<br>
The receiver buffer is a contiguous buffer defined with MPI_Type_contiguous
<br>
request.
<br>
Here, the receiver buffer of the rank 1 is of size : 7 (2+1+2+2)
<br>
<p>This test case succesful for 2 or 3 processes. For 4 processes, the test
<br>
fails 1 times for 3 successes. For 5 processes, the test fails all the time.
<br>
<p>The error code is : *** MPI_ERR_IN_STATUS: error code in status
<br>
<p>I don't understand what I am doing wrong.
<br>
<p>Could you please have a look on it?
<br>
<p>Thank you very much.
<br>
<p>Best regards,
<br>
Ghislain Viguier
<br>
<p><pre>
-- 
Ghislain Viguier
T&#195;&#169;l. 06 31 95 03 17

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25850/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25850/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25851.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25849.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI SC'14 BOF slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25851.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25851.php">Ghislain Viguier: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
<li><strong>Reply:</strong> <a href="25852.php">Howard Pritchard: "Re: [OMPI users] MPI_Neighbor_alltoallw fails with mpi-1.8.3"</a>
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
