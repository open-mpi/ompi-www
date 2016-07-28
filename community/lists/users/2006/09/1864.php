<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 14 00:08:30 2006" -->
<!-- isoreceived="20060914040830" -->
<!-- sent="Thu, 14 Sep 2006 00:08:06 -0400" -->
<!-- isosent="20060914040806" -->
<!-- name="chris.neale_at_[hidden]" -->
<!-- email="chris.neale_at_[hidden]" -->
<!-- subject="[OMPI users] tcp short settings" -->
<!-- id="1158206886.4508d5a62e6e3_at_webmail.utoronto.ca" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> <a href="mailto:chris.neale_at_[hidden]?Subject=Re:%20[OMPI%20users]%20tcp%20short%20settings"><em>chris.neale_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-09-14 00:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Previous message:</strong> <a href="1863.php">Wael Sinno: "[OMPI users] Error initializing application linked with UnixODBC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I previously posted this basic question about how to get a max short message
<br>
size of 512kb instead of 64kb:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2006/08/1803.php">http://www.open-mpi.org/community/lists/users/2006/08/1803.php</a>
<br>
Appologies for the repost, but I simply can't figure this out.
<br>
My application (Gromacs) works fine with LAM.
<br>
<p>I have tried:
<br>
mpirun --mca btl_tcp_eager_limit 524288 --mca btl_tcp_max_send_size 524288 --mca
<br>
btl_tcp_min_rdma_size 524288 --mca btl_tcp_sndbuf 1048576 --mca btl_tcp_rcvbuf
<br>
1048576
<br>
*****Crashes immediately with a MPI_Alltoall error
<br>
<p>--mca btl_tcp_eager_limit 524288 --mca btl_tcp_min_send_size 524288 --mca
<br>
btl_tcp_max_send_size 1048576 --mca btl_tcp_min_rdma_size 1048576 --mca
<br>
btl_tcp_sndbuf 1048576 --mca btl_tcp_rcvbuf 1048576 --mca btl_base_verbose 1
<br>
--mca btl_base_debug
<br>
*****Same thing
<br>
<p>mpirun --mca btl_tcp_eager_limit 524288 
<br>
*****Same thing
<br>
<p>mpirun --mca btl_tcp_eager_limit 131072
<br>
*****Seems to work, but no benifit (I need at least 223560)
<br>
<p>mpirun --mca btl_tcp_eager_limit 141072
<br>
*****Tried this only as a test, Overloaded the main node.
<br>
<p>Much appreciation and thanks,
<br>
Chris Neale.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1865.php">Marcin Skoczylas: "Re: [OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>Previous message:</strong> <a href="1863.php">Wael Sinno: "[OMPI users] Error initializing application linked with UnixODBC"</a>
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
