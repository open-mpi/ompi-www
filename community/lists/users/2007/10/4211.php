<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 05:59:01 2007" -->
<!-- isoreceived="20071015095901" -->
<!-- sent="Mon, 15 Oct 2007 05:58:48 -0400" -->
<!-- isosent="20071015095848" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()" -->
<!-- id="0F32EEF4-A2F9-49A2-95BD-34DE755E7BAD_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710142038.10102.jeremias.spiegel_at_postamt.cs.uni-dortmund.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 05:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Previous message:</strong> <a href="4210.php">Jeremias Spiegel: "[OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4210.php">Jeremias Spiegel: "[OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4213.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4213.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your conclusion is not necessarily/always true. The MPI_Isend is just  
<br>
the non blocking version of the send operation. As one can imagine, a  
<br>
MPI_Isend + MPI_Wait increase the execution path [inside the MPI  
<br>
library] compared with any blocking point-to-point communication,  
<br>
leading to worst performances. The main interest of the MPI_Isend  
<br>
operation is the possible overlap of computation with communications,  
<br>
or the possible overlap between multiple communications.
<br>
<p>However, depending on the size of the message this might not be true.  
<br>
For large messages, in order to keep the memory usage on the receiver  
<br>
at a reasonable level, a rendezvous protocol is used. The sender  
<br>
[after sending a small packet] wait until the receiver confirm the  
<br>
message exchange (i.e. the corresponding receive operation has been  
<br>
posted) to send the large data. Using MPI_Isend can lead to longer  
<br>
execution times, as the real transfer will be delayed until the  
<br>
program enter in the next MPI call.
<br>
<p>In general, using non-blocking operations can improve the performance  
<br>
of the application, if and only if the application is carefully crafted.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 14, 2007, at 2:38 PM, Jeremias Spiegel wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm working with Open-Mpi on an infiniband-cluster and have some  
</span><br>
<span class="quotelev1">&gt; strange
</span><br>
<span class="quotelev1">&gt; effect when using MPI_Isend(). To my understanding this should  
</span><br>
<span class="quotelev1">&gt; always be
</span><br>
<span class="quotelev1">&gt; quicker than MPI_Send() and MPI_Ssend(), yet in my program both  
</span><br>
<span class="quotelev1">&gt; MPI_Send()
</span><br>
<span class="quotelev1">&gt; and MPI_Ssend() reproducably perform quicker than SSend(). Is there  
</span><br>
<span class="quotelev1">&gt; something
</span><br>
<span class="quotelev1">&gt; obvious I'm missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jeremias
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4211/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>Previous message:</strong> <a href="4210.php">Jeremias Spiegel: "[OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4210.php">Jeremias Spiegel: "[OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4213.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4213.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
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
