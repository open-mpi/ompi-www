<?
$subject_val = "[OMPI users] iWARP usage issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 00:55:03 2016" -->
<!-- isoreceived="20160308055503" -->
<!-- sent="Tue, 8 Mar 2016 00:55:02 -0500" -->
<!-- isosent="20160308055502" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] iWARP usage issue" -->
<!-- id="CAHXxYDgFR=-d2gtYaaY-28-J5BReHxK5B7MDiG=ptg_m9sTaig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] iWARP usage issue<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 00:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Previous message:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Reply:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I am asking for help for the following situation:
<br>
<p>I have two (mostly identical) nodes. Each of them have (completely
<br>
identical)
<br>
1. qlogic 4x DDR infiniband, AND
<br>
2. Chelsio S310E (T3 chip based) 10GE iWARP cards.
<br>
<p>Both are connected back-to-back, without a switch. The connection is
<br>
physically OK and IP traffic can flow on both of them without issues.
<br>
<p>The issue is, I can run MPI programs using the openib BTL using the qlogic
<br>
card, but not the Chelsio card. Here are the commands:
<br>
<p>[durga_at_smallMPI ~]$ ibv_devices
<br>
&nbsp;&nbsp;&nbsp;&nbsp;device                 node GUID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;------              ----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cxgb3_0             00074306cd3b0000      &lt;-- Chelsio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;qib0                0011750000ff831d           &lt;-- Qlogic
<br>
<p>The following command works:
<br>
<p>&nbsp;mpirun -np 2 --hostfile ~/hostfile -mca btl_openib_if_include qib0
<br>
./osu_acc_latency
<br>
<p>And the following do not:
<br>
mpirun -np 2 --hostfile ~/hostfile -mca btl_openib_if_include cxgb3_0
<br>
./osu_acc_latency
<br>
<p>mpirun -np 2 --hostfile ~/hostfile -mca pml ob1 -mca btl_openib_if_include
<br>
cxgb3_0 ./osu_acc_latency
<br>
<p>mpirun -np 2 --hostfile ~/hostfile -mca pml ^cm -mca btl_openib_if_include
<br>
cxgb3_0 ./osu_acc_latency
<br>
<p>The error I get is the following (in all of the non-working cases):
<br>
<p>WARNING: The largest queue pair buffer size specified in the
<br>
btl_openib_receive_queues MCA parameter is smaller than the maximum
<br>
send size (i.e., the btl_openib_max_send_size MCA parameter), meaning
<br>
that no queue is large enough to receive the largest possible incoming
<br>
message fragment.  The OpenFabrics (openib) BTL will therefore be
<br>
deactivated for this run.
<br>
<p>&nbsp;&nbsp;Local host: smallMPI
<br>
&nbsp;&nbsp;Largest buffer size: 65536
<br>
&nbsp;&nbsp;Maximum send fragment size: 131072
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&nbsp;&nbsp;Local host:           bigMPI
<br>
&nbsp;&nbsp;Local device:         cxgb3_0
<br>
&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;CPCs attempted:       udcm
<br>
--------------------------------------------------------------------------
<br>
<p>I have a vague understanding of what the message is trying to say, but I do
<br>
not know which file or configuration parameters to change to fix the
<br>
situation.
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p><p>Life is complex. It has real and imaginary parts.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Previous message:</strong> <a href="28656.php">Gilles Gouaillardet: "Re: [OMPI users] Nonblocking neighborhood collectives with distributed graph creation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Reply:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
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
