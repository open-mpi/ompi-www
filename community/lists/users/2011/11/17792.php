<?
$subject_val = "Re: [OMPI users] UDP like messaging with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 19 12:42:48 2011" -->
<!-- isoreceived="20111119174248" -->
<!-- sent="Sat, 19 Nov 2011 17:42:43 +0000 (GMT)" -->
<!-- isosent="20111119174243" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI users] UDP like messaging with MPI" -->
<!-- id="1321724563.16587.YahooMailNeo_at_web24712.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1321717627.38571.androidMobile_at_web121716.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] UDP like messaging with MPI<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-19 12:42:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17793.php">Mudassar Majeed: "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p><span class="quotelev1">&gt;I know about tn&#196;&#177;s funct&#196;&#177;ons, they special requirements&#194;&#160;&#194;&#160;like the mpi_irecv call should be made in every process. My processes should not look for messages or implicitly receive them.
</span><br>
<p>I understand. But then I think your UDP comparison is wrong - whatever... :)
<br>
<p><p><p><span class="quotelev1">&gt; But messages shuddering go into their msg queues and retrieved when needed.
</span><br>
<p>I don't know if MPI has something like message queues. If not then I would use &quot;MPI RMA&quot; (i.e. MPI Remote Memory Access from MPI-2) and implement a message queue like this:
<br>
<p>1. On the node which shall get the messages (I call it G) I would create a buffer with a size which is as big as needed to store enough messages from the processes which shall write into the message queue.
<br>
2. With the collective operation MPI_Win_create() I would make the buffer of G available for all participating nodes.
<br>
3. Now the sender nodes can put data into the window buffer with MPI_Put():
<br>
Here the problem is that they must know which part of the buffer is already overwritten with messages of other senders.
<br>
Therefore I would use a integer value at the beginning of the window buffer. This value shows the next free position in the window buffer.
<br>
In other words each sender who wants to save a message in the window buffer
<br>
&#194;&#160;a) reads the integer value from the buffer
<br>
<p>&#194;&#160;b) saves its message at the free place in the buffer
<br>
&#194;&#160;c) increments the integer value by the size of the written message
<br>
4. To avoid race conditions you must lock the accesses to the window by MPI_Win_lockI() and MPI_Win_unlock().
<br>
BTW: There are three type of synchronization calls:
<br>
&#194;&#160;a) MPI_Win_fence()
<br>
&#194;&#160;b) MPI_Win_start(), MPI_Win_complete, MPI_Win_post(), MPI_Win_wait()
<br>
&#194;&#160;c) MPI_Win_lock(), MPI_Win_unlock()But I think the right one here is c) because then the target process of your MPI_put() (i.e. G) doesn't need to be involved in the communication. Therefore a communication which is synchronized by method c) is called a &quot;passive target communication&quot;. Have a look into the MPI-2 standard if you don't know what that means.
<br>
<p>5. When G wants to &quot;receive&quot; from the windows buffer it must also call the MPI_Win_lock() &amp; MPI_Win_unlock() operations. Then it reads one or more messages from the buffer window. After that it must decrement the integer value by the size of the read message(s).
<br>
<p><p>Hints:
<br>
This would be a LIFO message queue. If you want a FIFO queue then implement a &quot;ring buffer&quot;. Therefore you could use two integer values at the beginning of the buffer which show the head and the tail of the queue. Maybe there's also an more efficient way but that's an idea I have.
<br>
<p><p><p><span class="quotelev1">&gt; Just like udp communication.
</span><br>
<p><p>In the best of my knowledge &quot;normal&quot; UDP sockets have no receive queues . So if there's no receiver which waits for an incoming UDP datagram then it's discarded, isn't it? (Maybe asynchronous UDP sockets have queues...)
<br>
<p><p>Regards,
<br>
Lukas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17793.php">Mudassar Majeed: "[OMPI users] MPI_Irecv, MPI_Wait and MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Mudassar Majeed: "Re: [OMPI users] UDP like messaging with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17802.php">Jeff Squyres: "Re: [OMPI users] UDP like messaging with MPI"</a>
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
