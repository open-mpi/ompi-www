<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 26 18:18:31 2006" -->
<!-- isoreceived="20060726221831" -->
<!-- sent="Wed, 26 Jul 2006 19:18:30 -0300" -->
<!-- isosent="20060726221830" -->
<!-- name="Marcelo Stival" -->
<!-- email="marstival_at_[hidden]" -->
<!-- subject="[OMPI users] Error sending large number of small messages" -->
<!-- id="cc86c080607261518o16ebb639sb5b32b9962ab6673_at_mail.gmail.com" -->
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
<strong>From:</strong> Marcelo Stival (<em>marstival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-26 18:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1682.php">Michael Kluskens: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Reply:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Reply:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I got a problem with ompi when sending large number of messages from
<br>
process  A to process B.
<br>
Process A only send... and B only receive (the buffers are reused)
<br>
<p>int n = 4 * 1024;//number of iterations (messages to be sent) consecutively
<br>
int len = 8; //len of each message
<br>
<p>Process A (rank 0):
<br>
for (i=0; i &lt; n; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( sbuffer, len, MPI_BYTE,to,i,MPI_COMM_WORLD);
<br>
}
<br>
Process B (rank 1):
<br>
for (i=0; i &lt; n; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(rbuffer,len,MPI_BYTE,recv_from , i,MPI_COMM_WORLD, &amp;status);
<br>
}
<br>
(It's a benchmark program... will run with increasing messages sizes.. )
<br>
(I tried with the same tag on all iterations - and got the same)
<br>
<p>It works fine for n (number of messages) equals to 3k (for example), but do
<br>
not work with n equals to 4k (for messages of 8 bytes 4k iterations seems to
<br>
be the treshould).
<br>
<p>The error messages (complete output attached):
<br>
malloc debug: Request for 8396964 bytes failed (class/ompi_free_list.c, 142)
<br>
mpptest: btl_tcp_endpoint.c:624: mca_btl_tcp_endpoint_recv_handler:
<br>
Assertion `0
<br>
&nbsp;== btl_endpoint-&gt;endpoint_cache_length' failed.
<br>
Signal:6 info.si_errno:0(Success) si_code:-6()
<br>
<p><p>Considerations:
<br>
It works for synchronous send (MPI_Ssend).
<br>
It  works with MPICH2 ( 1.0.3).
<br>
It is a benchmark program, I want to flood the network to measure the
<br>
bandwidth ... (for different message sizes)
<br>
<p><p>Thanks
<br>
<p>Marcelo
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1683/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1682.php">Michael Kluskens: "Re: [OMPI users] Open-MPI running os SMP cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Reply:</strong> <a href="1684.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Reply:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
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
