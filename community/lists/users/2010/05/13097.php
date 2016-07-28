<?
$subject_val = "[OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 20 05:31:04 2010" -->
<!-- isoreceived="20100520093104" -->
<!-- sent="Thu, 20 May 2010 11:30:58 +0200" -->
<!-- isosent="20100520093058" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="[OMPI users] General question on the implementation of a &amp;quot;scheduler&amp;quot; on client side..." -->
<!-- id="AANLkTinzwDcYjrp-jVqTg0HUCCGKnee5It3zTBhObifp_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] General question on the implementation of a &quot;scheduler&quot; on client side...<br>
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-20 05:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13096.php">Olivier Riff: "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a general question about the best way to implement an openmpi
<br>
application, i.e the design of the application.
<br>
<p>A machine (I call it the &quot;server&quot;) should send to a cluster containing a lot
<br>
of processors (the &quot;clients&quot;) regularly task to do (byte buffers from very
<br>
various size).
<br>
The server should send to each client a different buffer, then wait for each
<br>
client answers (buffer sent by each client after some processing), and
<br>
retrieve the result data.
<br>
<p>First I made something looking like this.
<br>
On the server side: Send sequentially to each client buffers using MPI_Send.
<br>
On each client side: loop which waits a buffer using MPI_Recv, then process
<br>
the buffer and sends the result using MPI_Send
<br>
This is really not efficient because a lot of time is lost due to the fact
<br>
that the server sends and receives sequentially the buffers.
<br>
It only has the advantage to have on the client size a pretty easy
<br>
scheduler:
<br>
Wait for buffer (MPI_Recv) -&gt; Analyse it -&gt; Send result (MPI_Send)
<br>
<p>My wish is to mix MPI_Send/MPI_Recv and other mpi functions like
<br>
MPI_BCast/MPI_Scatter/MPI_Gather... (like I imagine every mpi application
<br>
does).
<br>
The problem is that I cannot find a easy solution in order that each client
<br>
knows which kind of mpi function is currently called by the server. If the
<br>
server calls MPI_BCast the client should do the same. Sending at each time a
<br>
first message to indicate the function the server will call next does not
<br>
look very nice. Though I do not see an easy/best way to implement an
<br>
&quot;adaptative&quot; scheduler on the client side.
<br>
<p>Any tip, advice, help would be appreciate.
<br>
<p><p>Thanks,
<br>
<p>Olivier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13098.php">Terry Dontje: "Re: [OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<li><strong>Previous message:</strong> <a href="13096.php">Olivier Riff: "[OMPI users] Buffer size limit and memory consumption problem on heterogeneous (32 bit / 64 bit) machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
<li><strong>Reply:</strong> <a href="13110.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation of a&quot;scheduler&quot; on client side..."</a>
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
