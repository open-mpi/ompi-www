<?
$subject_val = "Re: [OMPI users] iWARP usage issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 18:24:29 2016" -->
<!-- isoreceived="20160308232429" -->
<!-- sent="Tue, 8 Mar 2016 16:24:27 -0700" -->
<!-- isosent="20160308232427" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] iWARP usage issue" -->
<!-- id="20160308232427.GD18627_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56DE77E3.2090907_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] iWARP usage issue<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 18:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>In reply to:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See <a href="https://github.com/open-mpi/ompi/pull/1439">https://github.com/open-mpi/ompi/pull/1439</a>
<br>
<p>I was seeing this problem when enabling CUDA support as it sets
<br>
btl_openib_max_send_size to 128k but does not change the receive queue
<br>
settings. Tested the commit in #1439 and it fixes the issue for me.
<br>
<p>-Nathan
<br>
<p>On Tue, Mar 08, 2016 at 03:57:39PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;    Per the error message, can you try to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun --mca btl_openib_if_include cxgb3_0 --mca btl_openib_max_send_size
</span><br>
<span class="quotelev1">&gt;    65536 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    and see whether it helps ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    you can also try various settings for the receive queue, for example edit
</span><br>
<span class="quotelev1">&gt;    your /.../share/openmpi/mca-btl-openib-device-params.ini and set the
</span><br>
<span class="quotelev1">&gt;    parameters for your specific hardware
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On 3/8/2016 2:55 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I am asking for help for the following situation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I have two (mostly identical) nodes. Each of them have (completely
</span><br>
<span class="quotelev1">&gt;      identical)
</span><br>
<span class="quotelev1">&gt;      1. qlogic 4x DDR infiniband, AND
</span><br>
<span class="quotelev1">&gt;      2. Chelsio S310E (T3 chip based) 10GE iWARP cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Both are connected back-to-back, without a switch. The connection is
</span><br>
<span class="quotelev1">&gt;      physically OK and IP traffic can flow on both of them without issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The issue is, I can run MPI programs using the openib BTL using the
</span><br>
<span class="quotelev1">&gt;      qlogic card, but not the Chelsio card. Here are the commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      [durga_at_smallMPI ~]$ ibv_devices
</span><br>
<span class="quotelev1">&gt;          device                 node GUID
</span><br>
<span class="quotelev1">&gt;          ------              ----------------
</span><br>
<span class="quotelev1">&gt;          cxgb3_0             00074306cd3b0000      &lt;-- Chelsio
</span><br>
<span class="quotelev1">&gt;          qib0                0011750000ff831d           &lt;-- Qlogic
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The following command works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       mpirun -np 2 --hostfile ~/hostfile -mca btl_openib_if_include qib0
</span><br>
<span class="quotelev1">&gt;      ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      And the following do not:
</span><br>
<span class="quotelev1">&gt;      mpirun -np 2 --hostfile ~/hostfile -mca btl_openib_if_include cxgb3_0
</span><br>
<span class="quotelev1">&gt;      ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      mpirun -np 2 --hostfile ~/hostfile -mca pml ob1 -mca
</span><br>
<span class="quotelev1">&gt;      btl_openib_if_include cxgb3_0 ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      mpirun -np 2 --hostfile ~/hostfile -mca pml ^cm -mca
</span><br>
<span class="quotelev1">&gt;      btl_openib_if_include cxgb3_0 ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The error I get is the following (in all of the non-working cases):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      WARNING: The largest queue pair buffer size specified in the
</span><br>
<span class="quotelev1">&gt;      btl_openib_receive_queues MCA parameter is smaller than the maximum
</span><br>
<span class="quotelev1">&gt;      send size (i.e., the btl_openib_max_send_size MCA parameter), meaning
</span><br>
<span class="quotelev1">&gt;      that no queue is large enough to receive the largest possible incoming
</span><br>
<span class="quotelev1">&gt;      message fragment.  The OpenFabrics (openib) BTL will therefore be
</span><br>
<span class="quotelev1">&gt;      deactivated for this run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Local host: smallMPI
</span><br>
<span class="quotelev1">&gt;        Largest buffer size: 65536
</span><br>
<span class="quotelev1">&gt;        Maximum send fragment size: 131072
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt;      used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt;      support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Local host:           bigMPI
</span><br>
<span class="quotelev1">&gt;        Local device:         cxgb3_0
</span><br>
<span class="quotelev1">&gt;        Local port:           1
</span><br>
<span class="quotelev1">&gt;        CPCs attempted:       udcm
</span><br>
<span class="quotelev1">&gt;      --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I have a vague understanding of what the message is trying to say, but I
</span><br>
<span class="quotelev1">&gt;      do not know which file or configuration parameters to change to fix the
</span><br>
<span class="quotelev1">&gt;      situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thanks in advance
</span><br>
<span class="quotelev1">&gt;      Durga
</span><br>
<span class="quotelev1">&gt;      Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28657.php">http://www.open-mpi.org/community/lists/users/2016/03/28657.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28658.php">http://www.open-mpi.org/community/lists/users/2016/03/28658.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28662/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28663.php">Jackson, Gary L.: "Re: [OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>In reply to:</strong> <a href="28658.php">Gilles Gouaillardet: "Re: [OMPI users] iWARP usage issue"</a>
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
