<?
$subject_val = "Re: [OMPI users] send message twice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 01:19:46 2010" -->
<!-- isoreceived="20100913051946" -->
<!-- sent="Mon, 13 Sep 2010 10:49:41 +0530" -->
<!-- isosent="20100913051941" -->
<!-- name="Srikanth Raju" -->
<!-- email="srikiraju_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send message twice" -->
<!-- id="AANLkTikt8c7WG7rzfE0Y61Qqz7V7t4hBfBuugj13UwTv_at_mail.gmail.com" -->
<!-- charset="EUC-KR" -->
<!-- inreplyto="81f44f6f1847b5179dedac131cb9fe9f_at_tweb25-2.nm" -->
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
<strong>Subject:</strong> Re: [OMPI users] send message twice<br>
<strong>From:</strong> Srikanth Raju (<em>srikiraju_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 01:19:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14222.php">Georges Markomanolis: "[OMPI users] computing the latency with OpenMpi"</a>
<li><strong>Previous message:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>In reply to:</strong> <a href="14219.php">&#177;&#232;&#200;&#191;&#199;&#209;: "[OMPI users] send message twice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2010/9/13 &#177;&#232;&#200;&#191;&#199;&#209; &lt;hzluv_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some problem with sending messages. I want to send 2 messages to
</span><br>
<span class="quotelev1">&gt; each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, send 2 messages to 2 nodes,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;         for (dest = 1; dest &lt; numProcs; dest++) {
</span><br>
<span class="quotelev1">&gt;             MPI_Send(&amp;a, 1, MPI_INT, dest, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             MPI_Send(&amp;b, 1, MPI_INT, dest, 2, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;a_recv, 1, MPI_INT, 0, 1, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;b_recv, 1, MPI_INT, 0, 2, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
On a slightly different note, a MPI_Broadcast seems to be the right function
<br>
to use here.
<br>
<p><p><span class="quotelev1">&gt; but it doesn't work well. Only first message(sending data &quot;a&quot; to node1) is
</span><br>
<span class="quotelev1">&gt; sent successfully, but the rest 3 transmissions(sending data &quot;b&quot; to node1
</span><br>
<span class="quotelev1">&gt; and sending data &quot;a&quot; and &quot;b&quot; to node2) have no response which seems to be
</span><br>
<span class="quotelev1">&gt; deadlock. There are no runtime error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The version 1.4.1 has been used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; hyo
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Regards,
Srikanth Raju
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14222.php">Georges Markomanolis: "[OMPI users] computing the latency with OpenMpi"</a>
<li><strong>Previous message:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>In reply to:</strong> <a href="14219.php">&#177;&#232;&#200;&#191;&#199;&#209;: "[OMPI users] send message twice"</a>
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
