<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 14:56:57 2007" -->
<!-- isoreceived="20071015185657" -->
<!-- sent="Mon, 15 Oct 2007 14:56:22 -0400" -->
<!-- isosent="20071015185622" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()" -->
<!-- id="200710151456.23045.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B0BED12A-E1D1-444C-99BA-8F509D0769BA_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-10-15 14:56:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For completedness's sake, from what I understand here, the only way to get &quot;true&quot; communications and computation overlap is to have and &quot;MPI broker&quot; thread which would take care of all communications in the form of sync MPI calls. It is that thread which you call asynchronously and then let it manage the communications in the back... correct?
<br>
<p>Eric
<br>
<p>Le October 15, 2007, George Bosilca a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No there is no documentation about this on Open MPI. However, what I  
</span><br>
<span class="quotelev1">&gt; described here, is not related to Open MPI, it's a general problem  
</span><br>
<span class="quotelev1">&gt; with most/all MPI libraries. There are multiple scenarios where non  
</span><br>
<span class="quotelev1">&gt; blocking communications can improve the overall performance of a  
</span><br>
<span class="quotelev1">&gt; parallel application. But, in general, the reason is related to  
</span><br>
<span class="quotelev1">&gt; overlapping communications with computations, or communications with  
</span><br>
<span class="quotelev1">&gt; communications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that using non blocking will increase the critical  
</span><br>
<span class="quotelev1">&gt; path compared with blocking, which usually never help at improving  
</span><br>
<span class="quotelev1">&gt; performance. Now I'll explain the real reason behind that. The REAL  
</span><br>
<span class="quotelev1">&gt; problem is that usually a MPI library cannot make progress while the  
</span><br>
<span class="quotelev1">&gt; application is not in an MPI call. Therefore, as soon as the MPI  
</span><br>
<span class="quotelev1">&gt; library return after posting the non-blocking send, no progress is  
</span><br>
<span class="quotelev1">&gt; possible on that send until the user goes back in the MPI library. If  
</span><br>
<span class="quotelev1">&gt; you compare this with the case of a blocking send, there the library  
</span><br>
<span class="quotelev1">&gt; do not return until the data is pushed on the network buffers, i.e.  
</span><br>
<span class="quotelev1">&gt; the library is the one in control until the send is completed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 15, 2007, at 2:23 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello George,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	What you're saying here is very interesting. I am presently  
</span><br>
<span class="quotelev2">&gt; &gt; profiling communication patterns for Parallel Genetic Algorithms  
</span><br>
<span class="quotelev2">&gt; &gt; and could not figure out why the async versions tended to be worst  
</span><br>
<span class="quotelev2">&gt; &gt; than the sync counterpart (imho, that was counter-intuitive). What  
</span><br>
<span class="quotelev2">&gt; &gt; you're basically saying here is that the async communications  
</span><br>
<span class="quotelev2">&gt; &gt; actually add some sychronization overhead that can only be  
</span><br>
<span class="quotelev2">&gt; &gt; compensated if the application overlaps computation with the async  
</span><br>
<span class="quotelev2">&gt; &gt; communications? Is there some &quot;official&quot; reference/documentation to  
</span><br>
<span class="quotelev2">&gt; &gt; this behaviour from OpenMPI (I know the MPI standard doesn't define  
</span><br>
<span class="quotelev2">&gt; &gt; the actual implementation of the communications and therefore lets  
</span><br>
<span class="quotelev2">&gt; &gt; the implementer do as he pleases).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eric
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le October 15, 2007, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Your conclusion is not necessarily/always true. The MPI_Isend is just
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the non blocking version of the send operation. As one can imagine, a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Isend + MPI_Wait increase the execution path [inside the MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; library] compared with any blocking point-to-point communication,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; leading to worst performances. The main interest of the MPI_Isend
</span><br>
<span class="quotelev3">&gt; &gt;&gt; operation is the possible overlap of computation with communications,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or the possible overlap between multiple communications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, depending on the size of the message this might not be true.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For large messages, in order to keep the memory usage on the receiver
</span><br>
<span class="quotelev3">&gt; &gt;&gt; at a reasonable level, a rendezvous protocol is used. The sender
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [after sending a small packet] wait until the receiver confirm the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message exchange (i.e. the corresponding receive operation has been
</span><br>
<span class="quotelev3">&gt; &gt;&gt; posted) to send the large data. Using MPI_Isend can lead to longer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; execution times, as the real transfer will be delayed until the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program enter in the next MPI call.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In general, using non-blocking operations can improve the performance
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of the application, if and only if the application is carefully  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; crafted.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Oct 14, 2007, at 2:38 PM, Jeremias Spiegel wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm working with Open-Mpi on an infiniband-cluster and have some
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; strange
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; effect when using MPI_Isend(). To my understanding this should
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; always be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; quicker than MPI_Send() and MPI_Ssend(), yet in my program both
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Send()
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and MPI_Ssend() reproducably perform quicker than SSend(). Is there
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; something
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; obvious I'm missing?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeremias
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev2">&gt; &gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev2">&gt; &gt; T. (514) 736-1436
</span><br>
<span class="quotelev2">&gt; &gt; C. (514) 710-0517
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
<li><strong>Next message:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4214.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Reply:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
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
