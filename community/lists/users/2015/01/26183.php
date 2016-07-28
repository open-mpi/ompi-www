<?
$subject_val = "Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 04:18:36 2015" -->
<!-- isoreceived="20150115091836" -->
<!-- sent="Thu, 15 Jan 2015 09:18:32 +0000" -->
<!-- isosent="20150115091832" -->
<!-- name="Victor Vysotskiy" -->
<!-- email="victor.vysotskiy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c" -->
<!-- id="8D58A4B5E6148C419C6AD6334962375DDD9BD6B5_at_UWMBX04.uw.lu.se" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c" -->
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
<strong>Subject:</strong> Re: [OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c<br>
<strong>From:</strong> Victor Vysotskiy (<em>victor.vysotskiy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 04:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Maybe in reply to:</strong> <a href="26175.php">Victor Vysotskiy: "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>surely, OpenMPI was compiled with the Valgrind support:
<br>
<p>%/opt/mpi/openmpi-1.8.4.dbg/bin/ompi_info | grep -i memchecker
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memchecker: valgrind (MCA v2.0, API v2.0, Component v1.8.4)
<br>
<p>The following configure options were used:
<br>
<p>--enable-mem-debug --enable-debug --enable-memchecker --with-valgrind --with-mpi-param-check
<br>
<p>Best,
<br>
Victor.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26184.php">Diego Avesani: "Re: [OMPI users] MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26182.php">Ralph Castain: "Re: [OMPI users] libevent hangs on app finalize stage"</a>
<li><strong>Maybe in reply to:</strong> <a href="26175.php">Victor Vysotskiy: "[OMPI users] Valgrind reports a plenty of Invalid read's in osc_rdma_data_move.c"</a>
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
