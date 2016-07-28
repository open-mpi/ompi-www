<?
$subject_val = "Re: [OMPI users] send message twice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 01:13:08 2010" -->
<!-- isoreceived="20100913051308" -->
<!-- sent="Mon, 13 Sep 2010 00:12:58 -0500" -->
<!-- isosent="20100913051258" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send message twice" -->
<!-- id="COL117-DS13BB9F583D10AFE955A9EBE9770_at_phx.gbl" -->
<!-- charset="ks_c_5601-1987" -->
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
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 01:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
<li><strong>Previous message:</strong> <a href="14219.php">&#177;&#232;&#200;&#191;&#199;&#209;: "[OMPI users] send message twice"</a>
<li><strong>In reply to:</strong> <a href="14219.php">&#177;&#232;&#200;&#191;&#199;&#209;: "[OMPI users] send message twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I find issues like this is related to security issue. Firewall, not enough
<br>
access privilege, SE Linux, etc.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of ???
<br>
Sent: Monday, September 13, 2010 12:04 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] send message twice
<br>
<p>&nbsp;
<br>
<p>Hi all.
<br>
<p>I have some problem with sending messages. I want to send 2 messages to
<br>
each node.
<br>
<p>for example, send 2 messages to 2 nodes,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (dest = 1; dest &lt; numProcs; dest++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;a, 1, MPI_INT, dest, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;b, 1, MPI_INT, dest, 2, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;a_recv, 1, MPI_INT, 0, 1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;b_recv, 1, MPI_INT, 0, 2, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>but it doesn't work well. Only first message(sending data &quot;a&quot; to node1) is
<br>
sent successfully, but the rest 3 transmissions(sending data &quot;b&quot; to node1
<br>
and sending data &quot;a&quot; and &quot;b&quot; to node2) have no response which seems to be
<br>
deadlock. There are no runtime error.
<br>
<p>The version 1.4.1 has been used.
<br>
<p><p>best regards,
<br>
hyo
<br>
<p>&nbsp;
<br>
&lt;<a href="http://mail2.naver.com/newmailcheck/dens+NknD4C4FA34Kx2YF4MwaAtXMoEwFq0vp63">http://mail2.naver.com/newmailcheck/dens+NknD4C4FA34Kx2YF4MwaAtXMoEwFq0vp63</a>
<br>
CMquqK6FSa6p0a6pg+H+0MoU97xU5W4dQaXkqpBiqtzemp6/RWBIG74eZpm==.gif&gt; 
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
<li><strong>Previous message:</strong> <a href="14219.php">&#177;&#232;&#200;&#191;&#199;&#209;: "[OMPI users] send message twice"</a>
<li><strong>In reply to:</strong> <a href="14219.php">&#177;&#232;&#200;&#191;&#199;&#209;: "[OMPI users] send message twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
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
