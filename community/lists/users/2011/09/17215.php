<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 08:20:07 2011" -->
<!-- isoreceived="20110912122007" -->
<!-- sent="Mon, 12 Sep 2011 14:20:02 +0200" -->
<!-- isosent="20110912122002" -->
<!-- name="Ghislain Lartigue" -->
<!-- email="ghislain.lartigue_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="FDB5CB2B-C0BE-4E8C-B71A-5E766507F123_at_coria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E6A3821.2070800_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Ghislain Lartigue (<em>ghislain.lartigue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 08:20:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17216.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17214.php">Ahsan Ali: "[OMPI users] Infiniband Error"</a>
<li><strong>In reply to:</strong> <a href="17207.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17200.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you: this is very enlightening.
<br>
I will try this and let you know...
<br>
<p>Ghislain.
<br>
<p>Le 9 sept. 2011 &#224; 18:00, Eugene Loh a &#233;crit :
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/8/2011 11:47 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess you're perfectly right!
</span><br>
<span class="quotelev2">&gt;&gt; I will try to test it tomorrow by putting a call system(&quot;wait(X)) befor the barrier!
</span><br>
<span class="quotelev1">&gt; What does &quot;wait(X)&quot; mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhow, here is how I see your computation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A)  The first barrier simply synchronizes the processes.
</span><br>
<span class="quotelev1">&gt; B)  Then you start a bunch of non-blocking, point-to-point messages.
</span><br>
<span class="quotelev1">&gt; C)  Then another barrier.
</span><br>
<span class="quotelev1">&gt; D)  Finally, the point-to-point messages are completed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your mental model might be that A, B, and C should be fast and that D should take a long time.  The reality may be that the completion of all those messages is actually taking place during C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about the following?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barrier
</span><br>
<span class="quotelev1">&gt; t0 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; start all non-blocking messages
</span><br>
<span class="quotelev1">&gt; t1 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; Barrier
</span><br>
<span class="quotelev1">&gt; t2 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; complete all messages
</span><br>
<span class="quotelev1">&gt; t3 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; Barrier
</span><br>
<span class="quotelev1">&gt; t4 = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, look at the data from all the processes graphically.  Compare the picture to the same experiment, but with middle Barrier missing.  Presumably, the full iteration will take roughly as long in both cases.  The difference, I might expect, would be that with the middle barrier present, it gets all the time and the message-completion is fast.  Without the middle barrier, the message completion is slow.  So, message completion is taking a long time either way and the only difference is whether it's taking place during your MPI_Test loop or during what you thought was only a barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple way of doing all this is to run with a time-line profiler... some MPI performance analysis tool.  You won't have to instrument the code, dump timings, or figure out graphics.  Just look at pretty pictures!  There is some description of tool candidates in the OMPI FAQ at <a href="http://www.open-mpi.org/faq/?category=perftools">http://www.open-mpi.org/faq/?category=perftools</a>
</span><br>
<span class="quotelev2">&gt;&gt; PS:
</span><br>
<span class="quotelev2">&gt;&gt; if anyone has more information about the implementation of the MPI_IRECV() procedure, I would be glad to learn more about it!
</span><br>
<span class="quotelev1">&gt; I don't know how much detail you want here, but I suspect not much detail is warranted.  There is a lot of complexity here, but I think a few key ideas will help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, I'm pretty sure you're sending &quot;long&quot; messages.  OMPI usually sends such messages by queueing up a request.  These requests can, in the general case, be &quot;progressed&quot; whenever an MPI call is made.  So, whenever you make an MPI call, get away from the thought that you're doing one specific thing, as specified by the call and its arguments.  Think instead that you will also be looking around to see whatever other MPI work can be progressed.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17216.php">Ralph Castain: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17214.php">Ahsan Ali: "[OMPI users] Infiniband Error"</a>
<li><strong>In reply to:</strong> <a href="17207.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17200.php">Teng Ma: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
