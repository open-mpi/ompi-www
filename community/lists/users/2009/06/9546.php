<?
$subject_val = "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 18:01:29 2009" -->
<!-- isoreceived="20090604220129" -->
<!-- sent="Thu, 4 Jun 2009 16:01:12 -0600" -->
<!-- isosent="20090604220112" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case" -->
<!-- id="1D4392ED-F9BB-4115-BA3B-7E2B891E4E4E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF25114C8B.068E4A37-ON852575CB.00450C34-852575CB.00495107_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 18:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Previous message:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>In reply to:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it helps, note that Open MPI already includes hooks (and just added  
<br>
some more) to support this area of research. Note that Open MPI does - 
<br>
not- kill your job when a process dies or leaves without calling  
<br>
MPI_Finalize. What it actually does is call an Error Manager (denoted  
<br>
as &quot;errmgr&quot;) in the underlying RTE, which then decides what action to  
<br>
take in response to that event.
<br>
<p>It is true that the default errmgr which ships with Open MPI releases  
<br>
kills the entire job, but that is by no means a requirement - it is  
<br>
simply the default. We deliberately designed the errmgr to be an MCA  
<br>
framework for exactly this reason - to allow anyone to write their own  
<br>
errmgr component and experiment with alternative fault responses.
<br>
<p>You currently have two options you can pursue:
<br>
<p>1. if you want to use 1.2.8 or 1.3.2 (the latter is a superior  
<br>
platform), you can write your own errmgr component and use it. Look at  
<br>
the orte/mca/errmgr directory and you will see a &quot;base&quot; that contains  
<br>
some common functions for startup, and a &quot;default&quot; that contains the  
<br>
default errmgr component. Either add you own component (see the Open  
<br>
MPI home page for a detailed writeup on how to do this), or modify the  
<br>
default component to suit your needs.
<br>
<p>2. if you want to use the developer's trunk, additional capabilities  
<br>
to support FT research were just added to it. In particular, we  
<br>
implemented an ability to register a callback function in the errmgr  
<br>
so that an application can receive a callback when a specified type of  
<br>
error occurs - and can then take whatever action it desires. Second,  
<br>
we added a new &quot;resilient mapper&quot; component that automatically re-maps  
<br>
failed processes to other available nodes, and then restarts them. You  
<br>
could use these, for example, to write your own version of a &quot;fault  
<br>
tolerant mpiexec&quot; - an example of how to do this will be added to the  
<br>
developer's trunk over the weekend.
<br>
<p>Note that, in either case, you will still have to deal with all the  
<br>
MPI issues mentioned by Dick - all OMPI does for you is provide an  
<br>
infrastructure so that you don't have to do all the nitty-gritty stuff  
<br>
of mapping process locations, launching the procs, detecting errors,  
<br>
etc.
<br>
<p>Instead, you get to do the &quot;simple&quot; things, like figure out how to  
<br>
deal with failures in the middle of a collective! :-)
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jun 4, 2009, at 7:20 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; Tee Wen Kai -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You asked &quot;Just to find out more about the consequences for exiting  
</span><br>
<span class="quotelev1">&gt; MPI processes without calling MPI_Finalize, will it cause memory  
</span><br>
<span class="quotelev1">&gt; leak or other fatal problem?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be aware that Jeff has offered you an OpenMPI implementation  
</span><br>
<span class="quotelev1">&gt; oriented answer rather than an MPI standard oriented answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When there is a communicator involving 2 or more tasks and any task  
</span><br>
<span class="quotelev1">&gt; involved in that communicator goes down, all other tasks that are  
</span><br>
<span class="quotelev1">&gt; members of that communicator enter a state the MPI standard says  
</span><br>
<span class="quotelev1">&gt; cannot be trusted. It is legitimate for the process that manages an  
</span><br>
<span class="quotelev1">&gt; MPI job as a single entity to recognize that the loss of a member  
</span><br>
<span class="quotelev1">&gt; task has made the state of all connected tasks untrustworthy and  
</span><br>
<span class="quotelev1">&gt; bring down all previously connected tasks too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you use MPI_Comm_spawn, one result is an intercommunicator  
</span><br>
<span class="quotelev1">&gt; connecting the task that did the spawn to the task(s) that were  
</span><br>
<span class="quotelev1">&gt; spawned so the two sides are &quot;connected&quot;. If you intend to use MPI  
</span><br>
<span class="quotelev1">&gt; to communicate between the spawn caller and the spawned tasks they  
</span><br>
<span class="quotelev1">&gt; must remain connected. You can explicitly disconnect them and then a  
</span><br>
<span class="quotelev1">&gt; failure of the spawned task is harmless to the task that spawned it  
</span><br>
<span class="quotelev1">&gt; but doing the disconnect costs you the communication path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI standard does not require that connected tasks be brought  
</span><br>
<span class="quotelev1">&gt; down but it is a valid MPI implementation behavior. This makes some  
</span><br>
<span class="quotelev1">&gt; sense when you consider the fact that there is no MPI mechanism by  
</span><br>
<span class="quotelev1">&gt; which the other tasks can see that the communicator involving the  
</span><br>
<span class="quotelev1">&gt; lost task is now broken and there is no way a collective  
</span><br>
<span class="quotelev1">&gt; communication can work &quot;correctly&quot; on a communicator that has lost a  
</span><br>
<span class="quotelev1">&gt; member task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, what would it mean to call MPI_Reduce on MPI_COMM_WORLD  
</span><br>
<span class="quotelev1">&gt; when a member of MPI_COMM_WORLD has been lost (especially if it is  
</span><br>
<span class="quotelev1">&gt; the root that was lost)? If you had an MPI application that computed  
</span><br>
<span class="quotelev1">&gt; for hours between the loss of one task and the next collective call  
</span><br>
<span class="quotelev1">&gt; on MPI_ COMM_WORLD, would you prefer to pay for hours of computation  
</span><br>
<span class="quotelev1">&gt; and then deadlock at the collective call or just abort ASAP after  
</span><br>
<span class="quotelev1">&gt; the job is recognizably broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a fault tolerance working group trying to define something  
</span><br>
<span class="quotelev1">&gt; for MPI 3.0 but at this stage they are still trying to work out a  
</span><br>
<span class="quotelev1">&gt; proposal to bring before the MPI Forum. You might be interested in  
</span><br>
<span class="quotelev1">&gt; getting involved in that effort. They try to address question like:
</span><br>
<span class="quotelev1">&gt; - how would a task know it should not make collective calls on the  
</span><br>
<span class="quotelev1">&gt; broken communicator?
</span><br>
<span class="quotelev1">&gt; - should the communicator still support point to point  
</span><br>
<span class="quotelev1">&gt; communications with remaining tasks?
</span><br>
<span class="quotelev1">&gt; - If a task has posted a receive and the expected sender is then  
</span><br>
<span class="quotelev1">&gt; lost, how should the posted receive act?
</span><br>
<span class="quotelev1">&gt; - is there a clean way to &quot;repair&quot; the broken communicator by  
</span><br>
<span class="quotelev1">&gt; spawning a replacement task?
</span><br>
<span class="quotelev1">&gt; - is there a clean way to &quot;shrink&quot; the broken communicator
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Fault Tolerance Working Group has taken on a very tough problem.  
</span><br>
<span class="quotelev1">&gt; The list above is just a tiny sample of the challenges in making MPI  
</span><br>
<span class="quotelev1">&gt; fault tolerant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Jeff Squyres ---06/04/2009 07:32:25 AM---On Jun 4,  
</span><br>
<span class="quotelev1">&gt; 2009, at 2:16 AM, Tee Wen Kai wrote: &gt; Just to find out more about  
</span><br>
<span class="quotelev1">&gt; the consequences for ex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; From:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Date:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; 06/04/2009 07:32 AM
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Exit Program Without Calling MPI_Finalize	 
</span><br>
<span class="quotelev1">&gt; ForSpecial Case
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:	&lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 4, 2009, at 2:16 AM, Tee Wen Kai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to find out more about the consequences for exiting MPI
</span><br>
<span class="quotelev2">&gt; &gt; processes without calling MPI_Finalize, will it cause memory leak or
</span><br>
<span class="quotelev2">&gt; &gt; other fatal problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're exiting the process, you won't cause any kind of problems --
</span><br>
<span class="quotelev1">&gt; the OS will clean up everything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we might also have the orted clean up some things when MPI
</span><br>
<span class="quotelev1">&gt; processes unexpectedly die (e.g., filesystem temporary files in /
</span><br>
<span class="quotelev1">&gt; tmp).  So you might want to leave those around to clean themselves up
</span><br>
<span class="quotelev1">&gt; and die naturally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9546/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9547.php">Lars Andersson: "[OMPI users] &quot;Re: Best way to overlap computation and transfer using MPI over TCP/Ethernet?&quot;"</a>
<li><strong>Previous message:</strong> <a href="9545.php">Bogdan Costescu: "Re: [OMPI users] Best way to overlap computation and transfer using MPI over TCP/Ethernet?"</a>
<li><strong>In reply to:</strong> <a href="9540.php">Richard Treumann: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
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
