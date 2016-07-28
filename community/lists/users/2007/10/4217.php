<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 17:30:13 2007" -->
<!-- isoreceived="20071015213013" -->
<!-- sent="Mon, 15 Oct 2007 14:30:08 -0700" -->
<!-- isosent="20071015213008" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()" -->
<!-- id="20071015213008.GQ1707_at_mv.qlogic.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 17:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4218.php">Jorge Parra: "[OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>Previous message:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4215.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;By using non-blocking communications, you choose to expose separate
<br>
&nbsp;&nbsp;initiation and synchronization MPI calls such that an MPI
<br>
&nbsp;&nbsp;implementation is free to schedule the communication in any way it
<br>
&nbsp;&nbsp;wants between these two points (while retaining MPI semantics).  At
<br>
&nbsp;&nbsp;your advantage, this may mean that the MPI implementation can
<br>
&nbsp;&nbsp;co-opt specialized hardware/firmware in offloading parts (or all)
<br>
&nbsp;&nbsp;of the communication while you get back to computation (or
<br>
&nbsp;&nbsp;communication to another processor).  If there's nothing to overlap
<br>
&nbsp;&nbsp;in your application or if the MPI application has no way to offload
<br>
&nbsp;&nbsp;any parts of the communication, all you see is the added cost of
<br>
&nbsp;&nbsp;turning one call into two calls.  However, with any decent MPI
<br>
&nbsp;&nbsp;implementation, this added cost should be a matter of microseconds
<br>
&nbsp;&nbsp;(if not nanoseconds), so nothing to worry about for any
<br>
&nbsp;&nbsp;non-microbenchmark and at any reasonable scale.
<br>
<p>&nbsp;&nbsp;You should also know that since MPI requires local completion only
<br>
&nbsp;&nbsp;in that the send buffer be reusable once an MPI send is &quot;complete&quot;,
<br>
&nbsp;&nbsp;it's perfectly valid for an implementation to simply copy the send
<br>
&nbsp;&nbsp;data and claim completion while it defers but guarantees delivery
<br>
&nbsp;&nbsp;of the message at a later time.  When comparing blocking against
<br>
&nbsp;&nbsp;non-blocking, there's probably nothing wrong with the
<br>
&nbsp;&nbsp;implementation unless there's a dramatic difference.  MPI
<br>
&nbsp;&nbsp;implementations play different games on different types of messages
<br>
&nbsp;&nbsp;and at different sizes and thresholds.  Microbenchmarks just muddy
<br>
&nbsp;&nbsp;these issues up even further.  All uninteresting stuff, really.
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;For what you call the MPI broker, it turns out that it's fairly
<br>
&nbsp;&nbsp;difficult to completely and cheaply offload an MPI message since
<br>
&nbsp;&nbsp;MPI messages have data transfer and implied point-to-point
<br>
&nbsp;&nbsp;synchronization (this tags, ranks and communicators business).  A
<br>
&nbsp;&nbsp;lot of hardware will give you fast primitives for pure data
<br>
&nbsp;&nbsp;transfer but none can completely eliminate the cost of brokering or
<br>
&nbsp;&nbsp;synchronizing the message from the main application.  As a separate
<br>
&nbsp;&nbsp;software thread, the broker is tied to scheduling policies and may
<br>
&nbsp;&nbsp;positively or negatively compete with the main application thread.
<br>
&nbsp;&nbsp;When burried as a helper thread in firmware, the broker has to
<br>
&nbsp;&nbsp;negotiate synchronizations at a fraction of the speed of the main
<br>
&nbsp;&nbsp;host processor and may not provide sufficient concurrency for your
<br>
&nbsp;&nbsp;many-core machine.  
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
&nbsp;&nbsp;
<br>
On Mon, 15 Oct 2007, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	For completedness's sake, from what I understand here, the
</span><br>
<span class="quotelev1">&gt; 	only way to get &quot;true&quot; communications and computation overlap
</span><br>
<span class="quotelev1">&gt; 	is to have and &quot;MPI broker&quot; thread which would take care of
</span><br>
<span class="quotelev1">&gt; 	all communications in the form of sync MPI calls. It is that
</span><br>
<span class="quotelev1">&gt; 	thread which you call asynchronously and then let it manage
</span><br>
<span class="quotelev1">&gt; 	the communications in the back... correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le October 15, 2007, George Bosilca a &#233;crit&#160;:
</span><br>
<span class="quotelev2">&gt; &gt; Eric,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No there is no documentation about this on Open MPI. However, what I  
</span><br>
<span class="quotelev2">&gt; &gt; described here, is not related to Open MPI, it's a general problem  
</span><br>
<span class="quotelev2">&gt; &gt; with most/all MPI libraries. There are multiple scenarios where non  
</span><br>
<span class="quotelev2">&gt; &gt; blocking communications can improve the overall performance of a  
</span><br>
<span class="quotelev2">&gt; &gt; parallel application. But, in general, the reason is related to  
</span><br>
<span class="quotelev2">&gt; &gt; overlapping communications with computations, or communications with  
</span><br>
<span class="quotelev2">&gt; &gt; communications.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that using non blocking will increase the critical  
</span><br>
<span class="quotelev2">&gt; &gt; path compared with blocking, which usually never help at improving  
</span><br>
<span class="quotelev2">&gt; &gt; performance. Now I'll explain the real reason behind that. The REAL  
</span><br>
<span class="quotelev2">&gt; &gt; problem is that usually a MPI library cannot make progress while the  
</span><br>
<span class="quotelev2">&gt; &gt; application is not in an MPI call. Therefore, as soon as the MPI  
</span><br>
<span class="quotelev2">&gt; &gt; library return after posting the non-blocking send, no progress is  
</span><br>
<span class="quotelev2">&gt; &gt; possible on that send until the user goes back in the MPI library. If  
</span><br>
<span class="quotelev2">&gt; &gt; you compare this with the case of a blocking send, there the library  
</span><br>
<span class="quotelev2">&gt; &gt; do not return until the data is pushed on the network buffers, i.e.  
</span><br>
<span class="quotelev2">&gt; &gt; the library is the one in control until the send is completed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;      george.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 15, 2007, at 2:23 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello George,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 	What you're saying here is very interesting. I am presently  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; profiling communication patterns for Parallel Genetic Algorithms  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and could not figure out why the async versions tended to be worst  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; than the sync counterpart (imho, that was counter-intuitive). What  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; you're basically saying here is that the async communications  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; actually add some sychronization overhead that can only be  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; compensated if the application overlaps computation with the async  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; communications? Is there some &quot;official&quot; reference/documentation to  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; this behaviour from OpenMPI (I know the MPI standard doesn't define  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the actual implementation of the communications and therefore lets  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the implementer do as he pleases).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eric
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le October 15, 2007, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Your conclusion is not necessarily/always true. The MPI_Isend is just
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the non blocking version of the send operation. As one can imagine, a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Isend + MPI_Wait increase the execution path [inside the MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; library] compared with any blocking point-to-point communication,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; leading to worst performances. The main interest of the MPI_Isend
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; operation is the possible overlap of computation with communications,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; or the possible overlap between multiple communications.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; However, depending on the size of the message this might not be true.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For large messages, in order to keep the memory usage on the receiver
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; at a reasonable level, a rendezvous protocol is used. The sender
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [after sending a small packet] wait until the receiver confirm the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; message exchange (i.e. the corresponding receive operation has been
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; posted) to send the large data. Using MPI_Isend can lead to longer
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; execution times, as the real transfer will be delayed until the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; program enter in the next MPI call.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; In general, using non-blocking operations can improve the performance
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; of the application, if and only if the application is carefully  
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; crafted.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;    george.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Oct 14, 2007, at 2:38 PM, Jeremias Spiegel wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I'm working with Open-Mpi on an infiniband-cluster and have some
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; strange
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; effect when using MPI_Isend(). To my understanding this should
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; always be
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; quicker than MPI_Send() and MPI_Ssend(), yet in my program both
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; MPI_Send()
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; and MPI_Ssend() reproducably perform quicker than SSend(). Is there
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; something
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; obvious I'm missing?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Jeremias
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Eric Thibodeau
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Neural Bucket Solutions Inc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; T. (514) 736-1436
</span><br>
<span class="quotelev3">&gt; &gt; &gt; C. (514) 710-0517
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4218.php">Jorge Parra: "[OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>Previous message:</strong> <a href="4216.php">George Bosilca: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>In reply to:</strong> <a href="4215.php">Eric Thibodeau: "Re: [OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
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
