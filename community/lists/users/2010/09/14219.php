<?
$subject_val = "[OMPI users] send message twice";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 13 01:03:38 2010" -->
<!-- isoreceived="20100913050338" -->
<!-- sent="Mon, 13 Sep 2010 14:03:31 +0900" -->
<!-- isosent="20100913050331" -->
<!-- name="&#177;&#232;&#200;&#191;&#199;&#209;" -->
<!-- email="hzluv_at_[hidden]" -->
<!-- subject="[OMPI users] send message twice" -->
<!-- id="81f44f6f1847b5179dedac131cb9fe9f_at_tweb25-2.nm" -->
<!-- charset="EUC-KR" -->
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
<strong>Subject:</strong> [OMPI users] send message twice<br>
<strong>From:</strong> &#177;&#232;&#200;&#191;&#199;&#209; (<em>hzluv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-13 01:03:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>Previous message:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>Reply:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>Reply:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
I have some problem with sending messages. I want to send 2 messages to each node.
<br>
for example, send 2 messages to 2 nodes,
<br>
&nbsp;if (rank == 0) {
<br>
&nbsp;for (dest = 1; dest &amp;lt; numProcs; dest++) {
<br>
&nbsp;MPI_Send(&amp;a, 1, MPI_INT, dest, 1, MPI_COMM_WORLD);
<br>
&nbsp;MPI_Send(&amp;b, 1, MPI_INT, dest, 2, MPI_COMM_WORLD);
<br>
&nbsp;}
<br>
&nbsp;} else {
<br>
&nbsp;MPI_Recv(&amp;a_recv, 1, MPI_INT, 0, 1, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;MPI_Recv(&amp;b_recv, 1, MPI_INT, 0, 2, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;}
<br>
but it doesn't work well. Only first message(sending data &quot;a&quot; to node1) is sent successfully, but the rest 3 transmissions(sending data &quot;b&quot; to node1 and sending data &quot;a&quot; and &quot;b&quot; to node2) have no response which seems to be deadlock. There are no runtime error.
<br>
The version 1.4.1 has been used.
<br>
best regards,
<br>
hyo
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>Previous message:</strong> <a href="14218.php">Srikanth Raju: "Re: [OMPI users] Strange Segmentation Fault inside MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>Reply:</strong> <a href="14220.php">Trent Creekmore: "Re: [OMPI users] send message twice"</a>
<li><strong>Reply:</strong> <a href="14221.php">Srikanth Raju: "Re: [OMPI users] send message twice"</a>
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
