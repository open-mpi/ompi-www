<?
$subject_val = "Re: [OMPI users] latency #2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 10:50:03 2010" -->
<!-- isoreceived="20100913145003" -->
<!-- sent="Mon, 13 Sep 2010 07:49:26 -0700" -->
<!-- isosent="20100913144926" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] latency #2" -->
<!-- id="4C8E39F6.9090503_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C8E08F4.9020606_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] latency #2<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 10:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14227.php">ananda.mudar_at_[hidden]: "[OMPI users] Question on staging in checkpoint"</a>
<li><strong>Previous message:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<li><strong>In reply to:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Georges Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi again, after using MPI_Ssend seems to be what I was looking for but 
</span><br>
<span class="quotelev1">&gt; I would like to know more about MPI_Send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example sending 1 byte with MPI_Send it takes 8.69 microsec but 
</span><br>
<span class="quotelev1">&gt; with MPI_Ssend it takes 152.9 microsec. I understand the difference 
</span><br>
<span class="quotelev1">&gt; but it seems that from one message's size and after their difference 
</span><br>
<span class="quotelev1">&gt; is not so big like trying for 518400 bytes where it needs 3515.78 
</span><br>
<span class="quotelev1">&gt; microsec with MPI_Send and 3584.1 microsec with MPI_Ssend. So has is 
</span><br>
<span class="quotelev1">&gt; there any rule to figure out (of course it depends on the hardware) 
</span><br>
<span class="quotelev1">&gt; the threshold that after this size the difference between the timings 
</span><br>
<span class="quotelev1">&gt; of MPI_Send and MPI_Send is not so big or at least how to find it for 
</span><br>
<span class="quotelev1">&gt; my hardware? 
</span><br>
<p>Most MPI implementations choose one strategy for passing short messages 
<br>
(sender sends, MPI implementation buffers the message, receiver 
<br>
receives) and long messages (sender alerts receiver, receiver replies, 
<br>
then sender and receiver coordinate the transfer).  The first style is 
<br>
&quot;eager&quot; (sender sends eagerly without waiting for receiver to 
<br>
coordinate) while the second style is &quot;rendezvous&quot; (sender and receiver 
<br>
meet).  The message size at which the crossover occurs can be determined 
<br>
or changed.  In OMPI, it depends on the BTL.  E.g., try &quot;ompi_info -a | 
<br>
grep eager&quot;.
<br>
<p>Try the OMPI FAQ at <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a> and look at the 
<br>
&quot;Tuning&quot; categories.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14227.php">ananda.mudar_at_[hidden]: "[OMPI users] Question on staging in checkpoint"</a>
<li><strong>Previous message:</strong> <a href="14225.php">Eugene Loh: "Re: [OMPI users] computing the latency with OpenMpi"</a>
<li><strong>In reply to:</strong> <a href="14223.php">Georges Markomanolis: "[OMPI users] latency #2"</a>
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
