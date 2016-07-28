<?
$subject_val = "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 09:20:57 2009" -->
<!-- isoreceived="20090604132057" -->
<!-- sent="Thu, 4 Jun 2009 09:20:48 -0400" -->
<!-- isosent="20090604132048" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case" -->
<!-- id="OF25114C8B.068E4A37-ON852575CB.00450C34-852575CB.00495107_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39018181-663A-43F2-9EA7-FFFB75013406_at_cisco.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 09:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<li><strong>In reply to:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9546.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>Reply:</strong> <a href="9546.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tee Wen Kai -
<br>
<p>You asked &quot;Just to find out more about the consequences for exiting MPI
<br>
processes without calling MPI_Finalize, will it cause memory leak or other
<br>
fatal problem?&quot;
<br>
<p>Be aware that Jeff has offered you an OpenMPI implementation oriented
<br>
answer rather than an MPI standard oriented answer.
<br>
<p>When there is a communicator involving 2 or more tasks and any task
<br>
involved in that communicator goes down, all other tasks that are members
<br>
of that communicator enter a state the MPI standard says cannot be trusted.
<br>
It is legitimate for the process that manages an MPI job as a single entity
<br>
to recognize that the loss of a member task has made the state of all
<br>
connected tasks untrustworthy and bring down all previously connected tasks
<br>
too.
<br>
<p>When you use MPI_Comm_spawn, one result is an intercommunicator connecting
<br>
the task that did the spawn to the task(s) that were spawned so the two
<br>
sides are &quot;connected&quot;.  If you intend to use MPI to communicate between the
<br>
spawn caller and the spawned tasks they must remain connected. You can
<br>
explicitly disconnect them and then a failure of the spawned task is
<br>
harmless to the task that spawned it but doing the disconnect costs you the
<br>
communication path.
<br>
<p>The MPI standard does not require that connected tasks be brought down but
<br>
it is a valid MPI implementation behavior. This makes some sense when you
<br>
consider the fact that there is no MPI mechanism by which the other tasks
<br>
can see that the communicator involving the lost task is now broken and
<br>
there is no way a collective communication can work &quot;correctly&quot; on a
<br>
communicator that has lost a member task.
<br>
<p>For example, what would it mean to call MPI_Reduce on MPI_COMM_WORLD when a
<br>
member of MPI_COMM_WORLD has been lost (especially if it is the root that
<br>
was lost)? If you had an MPI application that  computed for hours between
<br>
the loss of one task and the next collective call on MPI_ COMM_WORLD, would
<br>
you prefer to pay for hours of computation and then deadlock at the
<br>
collective call or just abort ASAP after the job is recognizably broken.
<br>
<p>There is a fault tolerance working group trying to define something for MPI
<br>
3.0 but at this stage they are still trying to work out a proposal to bring
<br>
before the MPI Forum.  You might be interested in getting involved in that
<br>
effort.  They try to address question like:
<br>
- how would a task know it should not make collective  calls on the broken
<br>
communicator?
<br>
- should the communicator still support point to point communications with
<br>
remaining tasks?
<br>
- If a task has posted a receive and the expected sender is then lost, how
<br>
should the posted receive act?
<br>
- is there a clean way to &quot;repair&quot;  the broken communicator by spawning a
<br>
replacement task?
<br>
- is there a clean way to  &quot;shrink&quot; the broken communicator
<br>
<p>The Fault Tolerance Working Group has taken on a very tough problem.  The
<br>
list above is just a tiny sample of the challenges in making MPI fault
<br>
tolerant.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;From:       Jeff Squyres &lt;jsquyres_at_[hidden]&gt;                                                                                 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;To:         &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;                                                                             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Date:       06/04/2009 07:32 AM                                                                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Subject:    Re: [OMPI users] Exit Program Without Calling MPI_Finalize  ForSpecial Case                                       
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;Sent by:    users-bounces_at_[hidden]                                                                                        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p><p>On Jun 4, 2009, at 2:16 AM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Just to find out more about the consequences for exiting MPI
</span><br>
<span class="quotelev1">&gt; processes without calling MPI_Finalize, will it cause memory leak or
</span><br>
<span class="quotelev1">&gt; other fatal problem?
</span><br>
<p>If you're exiting the process, you won't cause any kind of problems --
<br>
the OS will clean up everything.
<br>
<p>However, we might also have the orted clean up some things when MPI
<br>
processes unexpectedly die (e.g., filesystem temporary files in /
<br>
tmp).  So you might want to leave those around to clean themselves up
<br>
and die naturally.
<br>
<p><pre>
--
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-9540/graycol.gif" alt="graycol.gif">
<!-- attachment="graycol.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-9540/ecblank.gif" alt="ecblank.gif">
<!-- attachment="ecblank.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9541.php">wruslan wyusoff: "Re: [OMPI users] make vt_tracefilter.cc:133: internal compilererror: Segmentation fault - openmpi-1.3.2"</a>
<li><strong>Previous message:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<li><strong>In reply to:</strong> <a href="9539.php">Jeff Squyres: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize ForSpecial Case"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9546.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
<li><strong>Reply:</strong> <a href="9546.php">Ralph Castain: "Re: [OMPI users] Exit Program Without Calling MPI_Finalize	ForSpecial Case"</a>
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
