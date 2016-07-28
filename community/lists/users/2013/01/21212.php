<?
$subject_val = "[OMPI users] IBV_EVENT_QP_ACCESS_ERR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 15:17:27 2013" -->
<!-- isoreceived="20130123201727" -->
<!-- sent="Wed, 23 Jan 2013 15:17:20 -0500" -->
<!-- isosent="20130123201720" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] IBV_EVENT_QP_ACCESS_ERR" -->
<!-- id="D11D7DA0-DE24-4A1C-9006-C8F5CBCB32D1_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] IBV_EVENT_QP_ACCESS_ERR<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 15:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
have a user whos code at scale dies reliably with the errors (new hosts each time):
<br>
<p>We have been using for this code:
<br>
-mca btl_openib_receive_queues X,4096,128:X,12288,128:X,65536,12
<br>
<p>Without that option it dies with an out of memory message reliably. 
<br>
<p>Note this code runs fine at the same scale on Pilaties (NASA SGI box) using MPT, 
<br>
<p>Are we running out of QP?  Is that possible?
<br>
<p>--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;Local host:        nyx5608.engin.umich.edu
<br>
&nbsp;&nbsp;MPI process PID:   42036
<br>
&nbsp;&nbsp;Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
[[9462,1],3][../../../../../openmpi-1.6/ompi/mca/btl/openib/btl_openib_component.c:3394:handle_wc] from nyx5608.engin.umich.edu to: nyx5022 error polling LP CQ with status INVALID REQUEST ERROR status number 9 for wr_id 14d6d00 opcode 0  vendor error 138 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;Local host:        (null)
<br>
&nbsp;&nbsp;MPI process PID:   42038
<br>
&nbsp;&nbsp;Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Previous message:</strong> <a href="21211.php">Shamis, Pavel: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>Reply:</strong> <a href="21213.php">Shamis, Pavel: "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
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
