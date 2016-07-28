<?
$subject_val = "Re: [OMPI users] send_request error with allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 16:57:02 2015" -->
<!-- isoreceived="20150930205702" -->
<!-- sent="Wed, 30 Sep 2015 20:56:59 +0000" -->
<!-- isosent="20150930205659" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send_request error with allocate" -->
<!-- id="8CC9B359-5740-46F6-B9B8-BD35EEAEFF33_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y4PvUyu7EpOoHbwf9+FnFypu3CuN7A+x3Xsh57JBw_=tg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send_request error with allocate<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 16:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27752.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27752.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2015, at 4:41 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt; sorry to ask you again and to be frustrating,
</span><br>
<span class="quotelev1">&gt; basically is this what I shall do for each CPU:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_ISEND(send_messageL, MsgLength, MPI_DOUBLE_COMPLEX, MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, REQUEST(1), MPIdata%iErr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_IRECV(recv_messageR, MsgLength, MPI_DOUBLE_COMPLEX, MPIdata%rank+1, MPIdata%rank+1, MPI_COMM_WORLD, REQUEST(2), MPIdata%iErr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_WAITALL(nMsg,REQUEST(1:2),send_status_list,MPIdata%iErr)
</span><br>
<p>Per my prior email: what is the value of nMsg?  If it's 2, you should probably be ok.
<br>
<p><p><span class="quotelev1">&gt; On 30 September 2015 at 12:42, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Put differently:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - You have an array of N requests
</span><br>
<span class="quotelev1">&gt; - If you're only filling up M of them (where N&lt;M)
</span><br>
<span class="quotelev1">&gt; - And then you pass the whole array of size N to MPI
</span><br>
<span class="quotelev1">&gt; - Then N-M of them will have garbage values (unless you initialize them to MPI_REQUEST_NULL)
</span><br>
<span class="quotelev1">&gt; - And MPI's behavior with garbage values will be unpredictable / undefined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can either pass M (i.e., the number of requests that you have *actually* filled) to MPI, or you can ensure that the N-M unused requests in the array are filled with MPI_REQUEST_NULL (which MPI_WAITANY and friends will safely ignore).  One way of doing the latter is initializing the entire array with MPI_REQUEST_NULL and then only filling in the M entries with real requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems much simpler / faster to just pass in M to MPI_WAITANY (any friends), not N.
</span><br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27754.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27752.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27752.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
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
