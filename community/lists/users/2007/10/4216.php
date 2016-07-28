<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 17:09:12 2007" -->
<!-- isoreceived="20071015210912" -->
<!-- sent="Mon, 15 Oct 2007 17:08:57 -0400" -->
<!-- isosent="20071015210857" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()" -->
<!-- id="8E3D2FBB-44E8-443C-96BE-B21C56FC48F9_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200710151456.23045.kyron_at_neuralbs.com" -->
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
<strong>Date:</strong> 2007-10-15 17:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4215.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4215.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's one possible way of achieving the overlap. However, it's not a  
<br>
portable solution as right now from all open source libraries, only  
<br>
Open MPI propose this &quot;helper&quot; thread (as far as I know).
<br>
<p>Another way of achieving the same goal, it's to have a truly thread  
<br>
safe MPI library and the user will have a thread blocked in a  
<br>
MPI_Recv that will eventually complete at the end of the application.  
<br>
This approach, seems more user friendly, as the user is in control of  
<br>
when the overlap will occur.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 15, 2007, at 2:56 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	For completedness's sake, from what I understand here, the only  
</span><br>
<span class="quotelev1">&gt; way to get &quot;true&quot; communications and computation overlap is to have  
</span><br>
<span class="quotelev1">&gt; and &quot;MPI broker&quot; thread which would take care of all communications  
</span><br>
<span class="quotelev1">&gt; in the form of sync MPI calls. It is that thread which you call  
</span><br>
<span class="quotelev1">&gt; asynchronously and then let it manage the communications in the  
</span><br>
<span class="quotelev1">&gt; back... correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le October 15, 2007, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No there is no documentation about this on Open MPI. However, what I
</span><br>
<span class="quotelev2">&gt;&gt; described here, is not related to Open MPI, it's a general problem
</span><br>
<span class="quotelev2">&gt;&gt; with most/all MPI libraries. There are multiple scenarios where non
</span><br>
<span class="quotelev2">&gt;&gt; blocking communications can improve the overall performance of a
</span><br>
<span class="quotelev2">&gt;&gt; parallel application. But, in general, the reason is related to
</span><br>
<span class="quotelev2">&gt;&gt; overlapping communications with computations, or communications with
</span><br>
<span class="quotelev2">&gt;&gt; communications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that using non blocking will increase the critical
</span><br>
<span class="quotelev2">&gt;&gt; path compared with blocking, which usually never help at improving
</span><br>
<span class="quotelev2">&gt;&gt; performance. Now I'll explain the real reason behind that. The REAL
</span><br>
<span class="quotelev2">&gt;&gt; problem is that usually a MPI library cannot make progress while the
</span><br>
<span class="quotelev2">&gt;&gt; application is not in an MPI call. Therefore, as soon as the MPI
</span><br>
<span class="quotelev2">&gt;&gt; library return after posting the non-blocking send, no progress is
</span><br>
<span class="quotelev2">&gt;&gt; possible on that send until the user goes back in the MPI library. If
</span><br>
<span class="quotelev2">&gt;&gt; you compare this with the case of a blocking send, there the library
</span><br>
<span class="quotelev2">&gt;&gt; do not return until the data is pushed on the network buffers, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; the library is the one in control until the send is completed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 15, 2007, at 2:23 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	What you're saying here is very interesting. I am presently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; profiling communication patterns for Parallel Genetic Algorithms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and could not figure out why the async versions tended to be worst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than the sync counterpart (imho, that was counter-intuitive). What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you're basically saying here is that the async communications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually add some sychronization overhead that can only be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compensated if the application overlaps computation with the async
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communications? Is there some &quot;official&quot; reference/documentation to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this behaviour from OpenMPI (I know the MPI standard doesn't define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the actual implementation of the communications and therefore lets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the implementer do as he pleases).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le October 15, 2007, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your conclusion is not necessarily/always true. The MPI_Isend is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the non blocking version of the send operation. As one can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; imagine, a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Isend + MPI_Wait increase the execution path [inside the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; library] compared with any blocking point-to-point communication,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leading to worst performances. The main interest of the MPI_Isend
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operation is the possible overlap of computation with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communications,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or the possible overlap between multiple communications.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, depending on the size of the message this might not be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; true.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For large messages, in order to keep the memory usage on the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receiver
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at a reasonable level, a rendezvous protocol is used. The sender
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [after sending a small packet] wait until the receiver confirm the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message exchange (i.e. the corresponding receive operation has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; posted) to send the large data. Using MPI_Isend can lead to longer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execution times, as the real transfer will be delayed until the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program enter in the next MPI call.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In general, using non-blocking operations can improve the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the application, if and only if the application is carefully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; crafted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 14, 2007, at 2:38 PM, Jeremias Spiegel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm working with Open-Mpi on an infiniband-cluster and have some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; strange
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; effect when using MPI_Isend(). To my understanding this should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; always be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; quicker than MPI_Send() and MPI_Ssend(), yet in my program both
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Send()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and MPI_Ssend() reproducably perform quicker than SSend(). Is  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; obvious I'm missing?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeremias
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric Thibodeau
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; T. (514) 736-1436
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C. (514) 710-0517
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau
</span><br>
<span class="quotelev1">&gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev1">&gt; T. (514) 736-1436
</span><br>
<span class="quotelev1">&gt; C. (514) 710-0517
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4216/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4215.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4215.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4217.php">Christian Bell: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
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
