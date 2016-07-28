<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 26 18:21:08 2006" -->
<!-- isoreceived="20060726222108" -->
<!-- sent="Wed, 26 Jul 2006 19:21:05 -0300" -->
<!-- isosent="20060726222105" -->
<!-- name="Marcelo Stival" -->
<!-- email="marstival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error sending large number of small messages" -->
<!-- id="cc86c080607261521w4c768c2wcd725a94c4547163_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cc86c080607261518o16ebb639sb5b32b9962ab6673_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-07-26 18:21:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1685.php">bdickinson_at_[hidden]: "[OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1683.php">Marcelo Stival: "[OMPI users] Error sending large number of small messages"</a>
<li><strong>In reply to:</strong> <a href="1683.php">Marcelo Stival: "[OMPI users] Error sending large number of small messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
oops
<br>
<p>On 7/26/06, Marcelo Stival &lt;marstival_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got a problem with ompi when sending large number of messages from
</span><br>
<span class="quotelev1">&gt; process  A to process B.
</span><br>
<span class="quotelev1">&gt; Process A only send... and B only receive (the buffers are reused)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int n = 4 * 1024;//number of iterations (messages to be sent)
</span><br>
<span class="quotelev1">&gt; consecutively
</span><br>
<span class="quotelev1">&gt; int len = 8; //len of each message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process A (rank 0):
</span><br>
<span class="quotelev1">&gt; for (i=0; i &lt; n; i++){
</span><br>
<span class="quotelev1">&gt;     MPI_Send( sbuffer, len, MPI_BYTE,to,i,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; Process B (rank 1):
</span><br>
<span class="quotelev1">&gt; for (i=0; i &lt; n; i++){
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(rbuffer,len,MPI_BYTE,recv_from , i,MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; (It's a benchmark program... will run with increasing messages sizes.. )
</span><br>
<span class="quotelev1">&gt; (I tried with the same tag on all iterations - and got the same)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine for n (number of messages) equals to 3k (for example), but
</span><br>
<span class="quotelev1">&gt; do not work with n equals to 4k (for messages of 8 bytes 4k iterations seems
</span><br>
<span class="quotelev1">&gt; to be the treshould).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error messages (complete output attached):
</span><br>
<span class="quotelev1">&gt; malloc debug: Request for 8396964 bytes failed (class/ompi_free_list.c,
</span><br>
<span class="quotelev1">&gt; 142)
</span><br>
<span class="quotelev1">&gt; mpptest: btl_tcp_endpoint.c:624: mca_btl_tcp_endpoint_recv_handler:
</span><br>
<span class="quotelev1">&gt; Assertion `0
</span><br>
<span class="quotelev1">&gt;  == btl_endpoint-&gt;endpoint_cache_length' failed.
</span><br>
<span class="quotelev1">&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Considerations:
</span><br>
<span class="quotelev1">&gt; It works for synchronous send (MPI_Ssend).
</span><br>
<span class="quotelev1">&gt; It  works with MPICH2 ( 1.0.3).
</span><br>
<span class="quotelev1">&gt; It is a benchmark program, I want to flood the network to measure the
</span><br>
<span class="quotelev1">&gt; bandwidth ... (for different message sizes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcelo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1684/output.tar">output.tar</a>
</ul>
<!-- attachment="output.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1685.php">bdickinson_at_[hidden]: "[OMPI users] Fault Tolerant Method"</a>
<li><strong>Previous message:</strong> <a href="1683.php">Marcelo Stival: "[OMPI users] Error sending large number of small messages"</a>
<li><strong>In reply to:</strong> <a href="1683.php">Marcelo Stival: "[OMPI users] Error sending large number of small messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1693.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
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
