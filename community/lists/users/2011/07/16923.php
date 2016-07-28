<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 19:59:03 2011" -->
<!-- isoreceived="20110714235903" -->
<!-- sent="Thu, 14 Jul 2011 19:58:58 -0400" -->
<!-- isosent="20110714235858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="C9BEB301-D66F-4F70-A9A0-C6BBB3C29413_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1310687719.39122.YahooMailNeo_at_web121704.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 19:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16924.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16922.php">Mudassar Majeed: "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16922.php">Mudassar Majeed: "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you use MPI_ANY_SOURCE in a receive, the rank of the actual sender is passed back to you in the status.MPI_SOURCE.
<br>
<p>On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Hello people, 
</span><br>
<span class="quotelev1">&gt;                         I am trapped in the following problem plz help me. Suppose a process A sends a message to process B. The process B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the source argument. Let say process B does not know that A is the sender. But I want B to receive message from process A (the one who actually sends the message to process B). But if I use MPI_ANY_SOURCE, then any message from any source is captured by process B (let say there are other processes sending messages). Instead of MPI_ANY_SOURCE I cannot use A in the source argument as B does not know about the sender. What should I do in this situation ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Mudassar Majeed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16924.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>Previous message:</strong> <a href="16922.php">Mudassar Majeed: "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16922.php">Mudassar Majeed: "[OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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
