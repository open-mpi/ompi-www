<?
$subject_val = "Re: [OMPI users] iWARP usage issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 01:57:39 2016" -->
<!-- isoreceived="20160308065739" -->
<!-- sent="Tue, 8 Mar 2016 15:57:39 +0900" -->
<!-- isosent="20160308065739" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] iWARP usage issue" -->
<!-- id="56DE77E3.2090907_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDgFR=-d2gtYaaY-28-J5BReHxK5B7MDiG=ptg_m9sTaig_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-08 01:57:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28657.php">dpchoudh .: "[OMPI users] iWARP usage issue"</a>
<li><strong>In reply to:</strong> <a href="28657.php">dpchoudh .: "[OMPI users] iWARP usage issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Reply:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Reply:</strong> <a href="28662.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the error message, can you try to
<br>
<p>mpirun --mca btl_openib_if_include cxgb3_0 --mca 
<br>
btl_openib_max_send_size 65536 ...
<br>
<p>and see whether it helps ?
<br>
<p>you can also try various settings for the receive queue, for example 
<br>
edit your /.../share/openmpi/mca-btl-openib-device-params.ini and set 
<br>
the parameters for your specific hardware
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/8/2016 2:55 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am asking for help for the following situation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two (mostly identical) nodes. Each of them have (completely 
</span><br>
<span class="quotelev1">&gt; identical)
</span><br>
<span class="quotelev1">&gt; 1. qlogic 4x DDR infiniband, AND
</span><br>
<span class="quotelev1">&gt; 2. Chelsio S310E (T3 chip based) 10GE iWARP cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both are connected back-to-back, without a switch. The connection is 
</span><br>
<span class="quotelev1">&gt; physically OK and IP traffic can flow on both of them without issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is, I can run MPI programs using the openib BTL using the 
</span><br>
<span class="quotelev1">&gt; qlogic card, but not the Chelsio card. Here are the commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ ibv_devices
</span><br>
<span class="quotelev1">&gt;     device                 node GUID
</span><br>
<span class="quotelev1">&gt;     ------              ----------------
</span><br>
<span class="quotelev1">&gt;     cxgb3_0             00074306cd3b0000      &lt;-- Chelsio
</span><br>
<span class="quotelev1">&gt;     qib0                0011750000ff831d &lt;-- Qlogic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following command works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 --hostfile ~/hostfile -mca btl_openib_if_include qib0 
</span><br>
<span class="quotelev1">&gt; ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the following do not:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca btl_openib_if_include cxgb3_0 
</span><br>
<span class="quotelev1">&gt; ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca pml ob1 -mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_if_include cxgb3_0 ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca pml ^cm -mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_if_include cxgb3_0 ./osu_acc_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get is the following (in all of the non-working cases):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: The largest queue pair buffer size specified in the
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues MCA parameter is smaller than the maximum
</span><br>
<span class="quotelev1">&gt; send size (i.e., the btl_openib_max_send_size MCA parameter), meaning
</span><br>
<span class="quotelev1">&gt; that no queue is large enough to receive the largest possible incoming
</span><br>
<span class="quotelev1">&gt; message fragment.  The OpenFabrics (openib) BTL will therefore be
</span><br>
<span class="quotelev1">&gt; deactivated for this run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host: smallMPI
</span><br>
<span class="quotelev1">&gt;   Largest buffer size: 65536
</span><br>
<span class="quotelev1">&gt;   Maximum send fragment size: 131072
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No OpenFabrics connection schemes reported that they were able to be
</span><br>
<span class="quotelev1">&gt; used on a specific port.  As such, the openib BTL (OpenFabrics
</span><br>
<span class="quotelev1">&gt; support) will be disabled for this port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:           bigMPI
</span><br>
<span class="quotelev1">&gt;   Local device:         cxgb3_0
</span><br>
<span class="quotelev1">&gt;   Local port:           1
</span><br>
<span class="quotelev1">&gt;   CPCs attempted:       udcm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a vague understanding of what the message is trying to say, but 
</span><br>
<span class="quotelev1">&gt; I do not know which file or configuration parameters to change to fix 
</span><br>
<span class="quotelev1">&gt; the situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28657.php">http://www.open-mpi.org/community/lists/users/2016/03/28657.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28659.php">Jackson, Gary L.: "[OMPI users] Poor performance on Amazon EC2 with TCP"</a>
<li><strong>Previous message:</strong> <a href="28657.php">dpchoudh .: "[OMPI users] iWARP usage issue"</a>
<li><strong>In reply to:</strong> <a href="28657.php">dpchoudh .: "[OMPI users] iWARP usage issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Reply:</strong> <a href="28661.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
<li><strong>Reply:</strong> <a href="28662.php">Nathan Hjelm: "Re: [OMPI users] iWARP usage issue"</a>
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
