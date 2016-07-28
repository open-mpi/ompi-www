<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 18:18:10 2008" -->
<!-- isoreceived="20080903221810" -->
<!-- sent="Wed, 3 Sep 2008 23:17:58 +0100" -->
<!-- isosent="20080903221758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="3F6A7F35-D03A-40B0-AA66-FF6B5D65580B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF09B81941.2BCA229F-ON852574B9.0061E7DA-852574B9.0064737E_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 18:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As usual, Dick is much more eloquent than me.  :-)
<br>
<p>He also correctly pointed out to me in an off-list mail that in my  
<br>
first reply, I casually used the internal term &quot;blocking progress&quot; and  
<br>
probably sowed some of the initial seeds of confusion in this thread  
<br>
(because &quot;blocking&quot; has specific meaning in MPI parlance).  Sorry  
<br>
about that.
<br>
<p>What I should have said is that we have on our to-do list to effect a  
<br>
non-polling model of making message passing progress.  As has been  
<br>
stated several times on this thread, OMPI currently polls for message  
<br>
passing progress.  While you're in MPI_BCAST, it's quite possible/ 
<br>
likely that OMPI will poll hard until the BCAST is done.  It is  
<br>
possible that a future version of OMPI will use a hybrid polling+non- 
<br>
polling approach for progress, such that if you call MPI_BCAST, we'll  
<br>
poll for a while.  And if nothing &quot;interesting&quot; happens after a while  
<br>
(i.e., the BCAST hasn't finished and nothing else seems to be  
<br>
happening), we'll allow OMPI's internal progression engine to block/go  
<br>
to sleep until something interesting happens.  We casually refer to  
<br>
this as &quot;blocking progress&quot; in OMPI developer circles, but we mean it  
<br>
in a very different way than the traditional &quot;blocking&quot; meaning for  
<br>
MPI communication.
<br>
<p>Again, sorry about the confusion -- hopefully all the followups in  
<br>
this thread cleared up the issue.
<br>
<p><p><p>On Sep 3, 2008, at 7:17 PM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Assume you are running an MPI program which has 16 tasks in  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, you have 16 dedicated CPUs and each task is single  
</span><br>
<span class="quotelev1">&gt; threaded. (a task is a distinct process, a process can contain one  
</span><br>
<span class="quotelev1">&gt; or more threads) The is the most common traditional model. In this  
</span><br>
<span class="quotelev1">&gt; model, when a task makes a blocking call, the CPU is used to poll  
</span><br>
<span class="quotelev1">&gt; the communication layer. With only one thread per task, there is no  
</span><br>
<span class="quotelev1">&gt; way the CPU can be given other useful work because the only thread  
</span><br>
<span class="quotelev1">&gt; is in the MPI_Bast and not available to compute. With nothing else  
</span><br>
<span class="quotelev1">&gt; for the CPU to do anyway, it may as well poll because that is likely  
</span><br>
<span class="quotelev1">&gt; to complete the blocking operation in shortest time. Polling is the  
</span><br>
<span class="quotelev1">&gt; right choice. You should not worry that the CPU is being &quot;burned&quot;.  
</span><br>
<span class="quotelev1">&gt; It will not wear out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Now assume you have the same number of tasks and CPUs but you  
</span><br>
<span class="quotelev1">&gt; have provided a compute thread and a communication thread in each  
</span><br>
<span class="quotelev1">&gt; task. At the moment you make an MPI_Bcast call on each task's  
</span><br>
<span class="quotelev1">&gt; communication thread you have unfinished computation that the CPUs  
</span><br>
<span class="quotelev1">&gt; could process on the compute threads. In this case you want the CPU  
</span><br>
<span class="quotelev1">&gt; to be released by the blocked MPI_Bcast so it can be used by the  
</span><br>
<span class="quotelev1">&gt; compute thread. The MPI_Bcast may take longer to complete because it  
</span><br>
<span class="quotelev1">&gt; is not burning the CPU but if useful computation is going forward  
</span><br>
<span class="quotelev1">&gt; you come out ahead. A non-polling mode for the blocking MPI_Bcast is  
</span><br>
<span class="quotelev1">&gt; the better option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Take a third case - the CPUs are not dedicated to your MPI job.  
</span><br>
<span class="quotelev1">&gt; You have only one thread per task but when that thread is blocked in  
</span><br>
<span class="quotelev1">&gt; an MPI_Bcast you want other processes to be able to run. This is not  
</span><br>
<span class="quotelev1">&gt; a common situation in production environments but may be common in  
</span><br>
<span class="quotelev1">&gt; learning or development situations. Perhaps your MPI homework  
</span><br>
<span class="quotelev1">&gt; problem is running at the same time someone else is trying to  
</span><br>
<span class="quotelev1">&gt; compile theirs on the same nodes. In this case you really do not  
</span><br>
<span class="quotelev1">&gt; need the MPI_Bcast to finish in the shortest possible time and you  
</span><br>
<span class="quotelev1">&gt; do want the people who share the node with you to quit complaining.  
</span><br>
<span class="quotelev1">&gt; Again. a non-polling mode than gives up the CPU and lets your  
</span><br>
<span class="quotelev1">&gt; neighbors compilation run is best.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which of these is closest to your situation? If it is situation 1,  
</span><br>
<span class="quotelev1">&gt; why would you care that CPU is burning? If it is situation 2 or 3  
</span><br>
<span class="quotelev1">&gt; then you do have reason to care.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 09/03/2008 01:11:00 PM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [image removed]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] CPU burning in Wait state
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Vincent Rotival
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 09/03/2008 01:15 PM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eugene,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No what I'd like is that when doing something like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; call mpi_bcast(data, 1, MPI_INTEGER, 0, .....)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the program continues AFTER the Bcast is completed (so no control
</span><br>
<span class="quotelev2">&gt; &gt; returned to user), but while threads with rank &gt; 0 are waiting in  
</span><br>
<span class="quotelev1">&gt; Bcast
</span><br>
<span class="quotelev2">&gt; &gt; they are not taking CPU resources
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope it is more clear, I apologize for not being clear in the  
</span><br>
<span class="quotelev1">&gt; first place
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Vincent
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Vincent Rotival wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The solution I retained was for the main thread to isend data
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; separately to each other threads that are using Irecv + loop on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; works much better than using Bcast
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for the clarification.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But this strikes me more as a question about the MPI standard than
</span><br>
<span class="quotelev3">&gt; &gt; &gt; about the Open MPI implementation.  That is, what you really  
</span><br>
<span class="quotelev1">&gt; want is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for the MPI API to support a non-blocking form of collectives.   
</span><br>
<span class="quotelev1">&gt; You
</span><br>
<span class="quotelev3">&gt; &gt; &gt; want control to return to the user program before the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; barrier/bcast/etc. operation has completed.  That's an API change.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6469.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
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
