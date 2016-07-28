<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 14:24:03 2007" -->
<!-- isoreceived="20071015182403" -->
<!-- sent="Mon, 15 Oct 2007 14:23:28 -0400" -->
<!-- isosent="20071015182328" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()" -->
<!-- id="200710151423.28915.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0F32EEF4-A2F9-49A2-95BD-34DE755E7BAD_at_eecs.utk.edu" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 14:23:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>In reply to:</strong> <a href="4211.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What you're saying here is very interesting. I am presently profiling communication patterns for Parallel Genetic Algorithms and could not figure out why the async versions tended to be worst than the sync counterpart (imho, that was counter-intuitive). What you're basically saying here is that the async communications actually add some sychronization overhead that can only be compensated if the application overlaps computation with the async communications? Is there some &quot;official&quot; reference/documentation to this behaviour from OpenMPI (I know the MPI standard doesn't define the actual implementation of the communications and therefore lets the implementer do as he pleases).
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>Le October 15, 2007, George Bosilca a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Your conclusion is not necessarily/always true. The MPI_Isend is just  
</span><br>
<span class="quotelev1">&gt; the non blocking version of the send operation. As one can imagine, a  
</span><br>
<span class="quotelev1">&gt; MPI_Isend + MPI_Wait increase the execution path [inside the MPI  
</span><br>
<span class="quotelev1">&gt; library] compared with any blocking point-to-point communication,  
</span><br>
<span class="quotelev1">&gt; leading to worst performances. The main interest of the MPI_Isend  
</span><br>
<span class="quotelev1">&gt; operation is the possible overlap of computation with communications,  
</span><br>
<span class="quotelev1">&gt; or the possible overlap between multiple communications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, depending on the size of the message this might not be true.  
</span><br>
<span class="quotelev1">&gt; For large messages, in order to keep the memory usage on the receiver  
</span><br>
<span class="quotelev1">&gt; at a reasonable level, a rendezvous protocol is used. The sender  
</span><br>
<span class="quotelev1">&gt; [after sending a small packet] wait until the receiver confirm the  
</span><br>
<span class="quotelev1">&gt; message exchange (i.e. the corresponding receive operation has been  
</span><br>
<span class="quotelev1">&gt; posted) to send the large data. Using MPI_Isend can lead to longer  
</span><br>
<span class="quotelev1">&gt; execution times, as the real transfer will be delayed until the  
</span><br>
<span class="quotelev1">&gt; program enter in the next MPI call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, using non-blocking operations can improve the performance  
</span><br>
<span class="quotelev1">&gt; of the application, if and only if the application is carefully crafted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2007, at 2:38 PM, Jeremias Spiegel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I'm working with Open-Mpi on an infiniband-cluster and have some  
</span><br>
<span class="quotelev2">&gt; &gt; strange
</span><br>
<span class="quotelev2">&gt; &gt; effect when using MPI_Isend(). To my understanding this should  
</span><br>
<span class="quotelev2">&gt; &gt; always be
</span><br>
<span class="quotelev2">&gt; &gt; quicker than MPI_Send() and MPI_Ssend(), yet in my program both  
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send()
</span><br>
<span class="quotelev2">&gt; &gt; and MPI_Ssend() reproducably perform quicker than SSend(). Is there  
</span><br>
<span class="quotelev2">&gt; &gt; something
</span><br>
<span class="quotelev2">&gt; &gt; obvious I'm missing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Jeremias
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4212.php">Josh Hursey: "Re: [OMPI users] mca_oob_tcp_peer_try_connect error when checkpoint and restart."</a>
<li><strong>In reply to:</strong> <a href="4211.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
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
