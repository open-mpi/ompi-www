<?
$subject_val = "Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 15:52:06 2013" -->
<!-- isoreceived="20130123205206" -->
<!-- sent="Wed, 23 Jan 2013 15:52:00 -0500" -->
<!-- isosent="20130123205200" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR" -->
<!-- id="CE2A5FFF-EF6C-4707-8AE3-A088569349EA_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D11D7DA0-DE24-4A1C-9006-C8F5CBCB32D1_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] IBV_EVENT_QP_ACCESS_ERR<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 15:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21214.php">Sabuj Pattanayek: "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Previous message:</strong> <a href="21212.php">Brock Palen: "[OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>In reply to:</strong> <a href="21212.php">Brock Palen: "[OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; have a user whos code at scale dies reliably with the errors (new hosts each time):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have been using for this code:
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_receive_queues X,4096,128:X,12288,128:X,65536,12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Without that option it dies with an out of memory message reliably. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note this code runs fine at the same scale on Pilaties (NASA SGI box) using MPT, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are we running out of QP?  Is that possible?
</span><br>
<p>I don't think this running-out-of-QP error. 
<br>
<p>The initiator gets NACK on request, which essentially says that the request isn't good. The passive side reports QP access error.
<br>
Do you observe this error on small scale runs ? let's say 8-16 nodes ?
<br>
<p>Did you try to replace all the &quot;X&quot; with &quot;S&quot; and see what happens ? Do you know what OFED version is installed on your system ?
<br>
Last time I tested the XRC (X) with OFED 1.5.1. I'm wandering if newer OFED version changed XRC behavior.
<br>
&nbsp;
<br>
<p>Regards,
<br>
Pasha
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev1">&gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:        nyx5608.engin.umich.edu
</span><br>
<span class="quotelev1">&gt;  MPI process PID:   42036
</span><br>
<span class="quotelev1">&gt;  Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt; please contact your system administrator.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[9462,1],3][../../../../../openmpi-1.6/ompi/mca/btl/openib/btl_openib_component.c:3394:handle_wc] from nyx5608.engin.umich.edu to: nyx5022 error polling LP CQ with status INVALID REQUEST ERROR status number 9 for wr_id 14d6d00 opcode 0  vendor error 138 qp_idx 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics stack has reported a network error event.  Open MPI
</span><br>
<span class="quotelev1">&gt; will try to continue, but your job may end up failing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:        (null)
</span><br>
<span class="quotelev1">&gt;  MPI process PID:   42038
</span><br>
<span class="quotelev1">&gt;  Error number:      3 (IBV_EVENT_QP_ACCESS_ERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error may indicate connectivity problems within the fabric;
</span><br>
<span class="quotelev1">&gt; please contact your system administrator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21214.php">Sabuj Pattanayek: "[OMPI users] openmpi 1.6.3, job submitted through torque/PBS + Moab (scheduler) only land on one node even though multiple nodes/processors are specified"</a>
<li><strong>Previous message:</strong> <a href="21212.php">Brock Palen: "[OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
<li><strong>In reply to:</strong> <a href="21212.php">Brock Palen: "[OMPI users] IBV_EVENT_QP_ACCESS_ERR"</a>
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
