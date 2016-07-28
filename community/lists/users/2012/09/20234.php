<?
$subject_val = "[OMPI users] How to make a connection uninterruptible";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 17 05:34:21 2012" -->
<!-- isoreceived="20120917093421" -->
<!-- sent="Mon, 17 Sep 2012 09:34:10 +0000" -->
<!-- isosent="20120917093410" -->
<!-- name="toufik hadjazi" -->
<!-- email="h_toufik7_at_[hidden]" -->
<!-- subject="[OMPI users] How to make a connection uninterruptible" -->
<!-- id="DUB116-W143049A444015DA7D0C04BB0950_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to make a connection uninterruptible<br>
<strong>From:</strong> toufik hadjazi (<em>h_toufik7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-17 05:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20235.php">Siegmar Gross: "[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Guys, 
<br>
I'm working on a client/server application on windows 7, where both the client and the server have a multithreaded architecture, more precisely, three threads per application, the first for receiving messages, the 2nd for analysing them and processing and the 3rd for sending answers. when I implemented this architecture, sometimes I have deadlocks, I don't know why? the code of the two threads that uses MPI is below, I think the problem is the the blocking callls, So, is there any alternatives? what I tried to do is make the whole connection session uninterruptible but i couldn't find a way to do it.
<br>
Receiver thread:forever	{		// wait up for a new message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;emit WriteLine(&quot;waiting for connections on &lt;&quot; + QString::fromStdString(myPort) + &quot;&gt;\n&quot;);		MPI_Comm_accept( myPort, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client);				MPI_Recv(&amp;message, 1, MessageType, MPI_ANY_SOURCE, MPI_ANY_TAG, client, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIH.InFifo.Insert(message);    //insert the message into the fifo		emit WriteLine(&quot;A messaage &quot;+QString::number(message.Command, 10)+&quot; has been received from &lt;&quot;+QString::fromStdString(message.portSource)+&quot;&gt;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//disconnect from the current client		MPI_Barrier(client);		MPI_Comm_disconnect(&amp;client);	}
<br>
Sender Thread:forever 	{		message = DIH.OutFifo.Mov(); // to remove the message from the Fifo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// send a new message		emit WriteLine(&quot;trying to connect to &lt;&quot; + QString::fromStdString(message.portDest) + &quot;&gt;\n&quot;);		MPI_Comm_connect(message.portDest, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;message, 1, MessageType, 0, 0, client);		emit WriteLine(&quot;A messaage &quot;+QString::number(message.Command, 10)+&quot; has been sent to &lt;&quot;+QString::fromStdString(message.portDest)+&quot;&gt;\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//disconnect from the current client		MPI_Barrier(client);		MPI_Comm_disconnect(&amp;client);	} 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20235.php">Siegmar Gross: "[OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<li><strong>Previous message:</strong> <a href="20233.php">Jingcha Joba: "Re: [OMPI users] Newbie question?"</a>
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
