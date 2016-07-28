<?
$subject_val = "Re: [OMPI users] Select a card in a multi card system";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 11:19:23 2015" -->
<!-- isoreceived="20150415151923" -->
<!-- sent="Wed, 15 Apr 2015 18:12:21 +0300" -->
<!-- isosent="20150415151221" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Select a card in a multi card system" -->
<!-- id="CAAO1KyZo+wd5tStMbsUzkuO6JqyX0ChuYPu6EK9o4BFDd=BQaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPqNE2U0s2n3MHPv0xOymCaRrGDfbiEFcg1t56D_ALvUthTDQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Select a card in a multi card system<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 11:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26739.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>Previous message:</strong> <a href="26737.php">Ralph Castain: "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>In reply to:</strong> <a href="26734.php">John Hearns: "[OMPI users] Select a card in a multi card system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
With MXM, you can specify list of devices to use for communication:
<br>
<p>-x MXM_IB_PORTS=&quot;mlx5_1:1,mlx4_1:1&quot;
<br>
<p>also select specific or all transpoirts:
<br>
<p>-x MXM_TLS=shm,self,ud
<br>
<p>To change port rate one can use *ibportstate*
<br>
<p>*<a href="http://www.hpcadvisorycouncil.com/events/2011/switzerland_workshop/pdf/Presentations/Day%202/2_IB_Tools.pdf">http://www.hpcadvisorycouncil.com/events/2011/switzerland_workshop/pdf/Presentations/Day%202/2_IB_Tools.pdf</a>
<br>
&lt;<a href="http://www.hpcadvisorycouncil.com/events/2011/switzerland_workshop/pdf/Presentations/Day%202/2_IB_Tools.pdf">http://www.hpcadvisorycouncil.com/events/2011/switzerland_workshop/pdf/Presentations/Day%202/2_IB_Tools.pdf</a>&gt;*
<br>
<p><p>*M*
<br>
<p><p>On Wed, Apr 15, 2015 at 10:09 AM, John Hearns &lt;hearnsj_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; If you have a system with two IB cards, can you choose using a command
</span><br>
<span class="quotelev1">&gt; line switch which card to use with Openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also a more general question - can you change (or throttle back) the speed
</span><br>
<span class="quotelev1">&gt; at which an Infiniband card works at?
</span><br>
<span class="quotelev1">&gt; For example, to use an fDR card at QDR speeds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any insights!
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26734.php">http://www.open-mpi.org/community/lists/users/2015/04/26734.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26738/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26739.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>Previous message:</strong> <a href="26737.php">Ralph Castain: "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>In reply to:</strong> <a href="26734.php">John Hearns: "[OMPI users] Select a card in a multi card system"</a>
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
