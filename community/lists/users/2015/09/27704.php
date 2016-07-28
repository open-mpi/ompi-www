<?
$subject_val = "Re: [OMPI users] send_request error with allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 18:15:25 2015" -->
<!-- isoreceived="20150928221525" -->
<!-- sent="Mon, 28 Sep 2015 22:15:23 +0000" -->
<!-- isosent="20150928221523" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send_request error with allocate" -->
<!-- id="5EBE02DD-654A-4146-A841-72BF733A1B92_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y4fxMwLxQ-MGzQRdQz6B=26OrvQ3CVkeUFfVGDeKAMxtw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-09-28 18:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27705.php">Marcin Krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27703.php">Diego Avesani: "[OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27703.php">Diego Avesani: "[OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27706.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27706.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send a small reproducer program?
<br>
<p><span class="quotelev1">&gt; On Sep 28, 2015, at 4:45 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to use a send_request in a MPI_WAITALL.
</span><br>
<span class="quotelev1">&gt; Here the strange things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use at the begging of the SUBROUTINE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INTEGER :: send_request(3), recv_request(3) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no problem, but if I use
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; USE COMONVARS,ONLY : nMsg
</span><br>
<span class="quotelev1">&gt; with nMsg=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and after that I declare
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INTEGER :: send_request(nMsg), recv_request(nMsg), I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Lap] *** An error occurred in MPI_Waitall 
</span><br>
<span class="quotelev1">&gt; [Lap] *** reported by process [139726485585921,0] 
</span><br>
<span class="quotelev1">&gt; [Lap] *** on communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev1">&gt; [Lap] *** MPI_ERR_REQUEST: invalid request 
</span><br>
<span class="quotelev1">&gt; [Lap] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort, 
</span><br>
<span class="quotelev1">&gt; [Lap] ***    and potentially your MPI job) 
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Someone could please explain to me where I am wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27703.php">http://www.open-mpi.org/community/lists/users/2015/09/27703.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27705.php">Marcin Krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>Previous message:</strong> <a href="27703.php">Diego Avesani: "[OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27703.php">Diego Avesani: "[OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27706.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27706.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
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
