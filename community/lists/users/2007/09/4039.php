<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 20:19:16 2007" -->
<!-- isoreceived="20070919001916" -->
<!-- sent="Tue, 18 Sep 2007 20:19:05 -0400" -->
<!-- isosent="20070919001905" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv" -->
<!-- id="231BAB35-0ACD-42DB-9C39-1731537C3064_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46EE9CA4.2040406_at_yahoo.com" -->
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
<strong>Date:</strong> 2007-09-18 20:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4040.php">Tim Prins: "Re: [OMPI users] Segmentation fault when spawning"</a>
<li><strong>Previous message:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<li><strong>In reply to:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 17, 2007, at 11:26 AM, Daniel Rozenbaum wrote:
<br>
<p><span class="quotelev1">&gt; What seems to be happening is this: the code of the server is  
</span><br>
<span class="quotelev1">&gt; written in
</span><br>
<span class="quotelev1">&gt; such a manner that the server knows how many &quot;responses&quot; it's supposed
</span><br>
<span class="quotelev1">&gt; to receive from all the clients, so when all the calculation tasks  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; been distributed, the server enters a loop inside which it calls
</span><br>
<span class="quotelev1">&gt; MPI_Waitany on an array of handles until it receives all the  
</span><br>
<span class="quotelev1">&gt; results it
</span><br>
<span class="quotelev1">&gt; expects. However, from my debug prints it looks like all the clients
</span><br>
<span class="quotelev1">&gt; think they've sent all the results they could, and they're now all
</span><br>
<span class="quotelev1">&gt; sitting in MPI_Probe, waiting for the server to send out the next
</span><br>
<span class="quotelev1">&gt; instruction (which is supposed to contain a message indicating the end
</span><br>
<span class="quotelev1">&gt; of the run). So, the server is stuck in MPI_Waitany() while all the
</span><br>
<span class="quotelev1">&gt; clients are stuck in MPI_Probe().
</span><br>
<p>On the server side, try putting in a debug loop and see if any of the  
<br>
requests that your app is waiting for are not MPI_REQUEST_NULL (it's  
<br>
not a value of 0 -- you'll need to compare against  
<br>
MPI_REQUEST_NULL).  If there are any, see if you can trace backwards  
<br>
to see what request it is.
<br>
<p><span class="quotelev1">&gt; I was wondering if you could comment on the &quot;readv failed&quot; messages  
</span><br>
<span class="quotelev1">&gt; I'm
</span><br>
<span class="quotelev1">&gt; seeing in the server's stderr:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm seeing a few of these along the server's run, with errno=110
</span><br>
<span class="quotelev1">&gt; (&quot;Connection timed out&quot; according to the &quot;perl -e 'die$!=errno'&quot;  
</span><br>
<span class="quotelev1">&gt; method
</span><br>
<span class="quotelev1">&gt; I found in OpenMPI FAQs), and I've also seen errno=113 (&quot;No route to
</span><br>
<span class="quotelev1">&gt; host&quot;). Could this mean there's an occasional infrastructure  
</span><br>
<span class="quotelev1">&gt; problem? It
</span><br>
<span class="quotelev1">&gt; would be strange, as it would then seem that this particular run  
</span><br>
<span class="quotelev1">&gt; somehow
</span><br>
<span class="quotelev1">&gt; triggers it?.. Could these messages also mean that some messages got
</span><br>
<span class="quotelev1">&gt; lost due to these errors, and that's why the server thinks it still  
</span><br>
<span class="quotelev1">&gt; has
</span><br>
<span class="quotelev1">&gt; some results to receive while the clients think they've sent  
</span><br>
<span class="quotelev1">&gt; everything out?
</span><br>
<p>That is all possible.  Sorry I missed that message in your original  
<br>
message -- it's basically a message saying that MPI_COMM_WORLD rank 0  
<br>
got a timeout from one of the peers that it shouldn't have.
<br>
<p>You're sure that none of your processes are exiting early, right?   
<br>
You said they were all waiting in MPI_Probe, but I just wanted to  
<br>
double check that they're all still running.
<br>
<p>Unfortunately, our error message is not very clear about which host  
<br>
it lost the connection with -- after you see that message, do you see  
<br>
incoming communications from all the slaves, or only some of them?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4040.php">Tim Prins: "Re: [OMPI users] Segmentation fault when spawning"</a>
<li><strong>Previous message:</strong> <a href="4038.php">Jeff Squyres: "Re: [OMPI users] g4 mpicc error"</a>
<li><strong>In reply to:</strong> <a href="4028.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4044.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
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
