<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  1 10:06:35 2006" -->
<!-- isoreceived="20060801140635" -->
<!-- sent="Tue, 01 Aug 2006 10:06:17 -0400" -->
<!-- isosent="20060801140617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error sending large number of small messages" -->
<!-- id="C0F4D819.FA3A%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cc86c080607291435g52b76ac4j8447a340d2af5afe_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-01 10:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1705.php">Wen Long at UMCES/HPL: "[OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1697.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcelo --
<br>
<p>Many thanks for this report!  I have duplicated your problem (doh!), and
<br>
have opened bug #232 about it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/232">https://svn.open-mpi.org/trac/ompi/ticket/232</a>
<br>
<p><p>On 7/29/06 5:35 PM, &quot;Marcelo Stival&quot; &lt;marstival_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here (attached) is a programm that reproduce the error reported...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I updated trunk , but got the same... (output attached again)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also tested with 1.1 stable release...
</span><br>
<span class="quotelev1">&gt; With 1.1 the program blocks without any error output...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program try to send 512K messages of 8bytes.
</span><br>
<span class="quotelev1">&gt; If reduced to 1k messages of 8bytes, it works fine...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Marcelo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/28/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Marcelo --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send your code that is failing?  I'm unable to reproduce with some
</span><br>
<span class="quotelev2">&gt;&gt; toy programs here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also notice that you're running a somewhat old version of and OMPI SVN
</span><br>
<span class="quotelev2">&gt;&gt; checkout of the trunk.  Can you update to the most recent version?  The
</span><br>
<span class="quotelev2">&gt;&gt; trunk is not guaranteed to be stable, and we did have some stability
</span><br>
<span class="quotelev2">&gt;&gt; problems recently -- you might want to upgrade to the most recent version
</span><br>
<span class="quotelev2">&gt;&gt; (today seems to be ok) and/or try one of the nightly or prerelease
</span><br>
<span class="quotelev2">&gt;&gt; tarballs
</span><br>
<span class="quotelev2">&gt;&gt; in the 1.1 branch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/26/06 6:18 PM, &quot;Marcelo Stival&quot; &lt;marstival_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got a problem with ompi when sending large number of messages from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process  A to process B.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process A only send... and B only receive (the buffers are reused)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int n = 4 * 1024;//number of iterations (messages to be sent)
</span><br>
<span class="quotelev2">&gt;&gt; consecutively
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int len = 8; //len of each message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process A (rank 0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for (i=0; i &lt; n; i++){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Send( sbuffer, len, MPI_BYTE,to,i,MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process B (rank 1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for (i=0; i &lt; n; i++){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Recv(rbuffer,len,MPI_BYTE,recv_from , i,MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (It's a benchmark program... will run with increasing messages sizes.. )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I tried with the same tag on all iterations - and got the same)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works fine for n (number of messages) equals to 3k (for example), but
</span><br>
<span class="quotelev2">&gt;&gt; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not work with n equals to 4k (for messages of 8 bytes 4k iterations
</span><br>
<span class="quotelev2">&gt;&gt; seems to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be the treshould).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error messages (complete output attached):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; malloc debug: Request for 8396964 bytes failed (class/ompi_free_list.c,
</span><br>
<span class="quotelev2">&gt;&gt; 142)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpptest: btl_tcp_endpoint.c:624: mca_btl_tcp_endpoint_recv_handler:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assertion `0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  == btl_endpoint-&gt;endpoint_cache_length' failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal:6 info.si_errno:0(Success) si_code:-6()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Considerations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works for synchronous send (MPI_Ssend).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It  works with MPICH2 ( 1.0.3).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is a benchmark program, I want to flood the network to measure the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bandwidth ... (for different message sizes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marcelo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1705.php">Wen Long at UMCES/HPL: "[OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1697.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
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
