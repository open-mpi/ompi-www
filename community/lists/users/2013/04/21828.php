<?
$subject_val = "Re: [OMPI users] Broadcast problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 08:39:40 2013" -->
<!-- isoreceived="20130430123940" -->
<!-- sent="Tue, 30 Apr 2013 14:39:33 +0200" -->
<!-- isosent="20130430123933" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast problem" -->
<!-- id="84F98E21-FD38-4302-8137-55D29BAF3335_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1367307608.26691.YahooMailNeo_at_web162902.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Broadcast problem<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 08:39:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21827.php">giggzounet: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>In reply to:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can't use gather either. Same for gatherv, as you need to know the amount you will receive in advance.
<br>
<p>If I understand correctly your scenario (a random process is doing a broadcast at random time steps), using MPI collectives is not the best approach as they need global knowledge (there is a broadcast with a known root). Even if you implement your own protocol to broadcast the root of the next operation, without an agreement protocol this might lead to unmatched collectives. The most straightforward way to reach an agreement with MPI today is by focusing all broadcast decisions through a single process (a leader), who will decide in which order to available broadcast operations will be executed.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 30, 2013, at 09:40 , Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oops,I think I meant gather not scatter...
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21829.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Previous message:</strong> <a href="21827.php">giggzounet: "Re: [OMPI users] Broadcast and root process"</a>
<li><strong>In reply to:</strong> <a href="21826.php">Randolph Pullen: "Re: [OMPI users] Broadcast problem"</a>
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
