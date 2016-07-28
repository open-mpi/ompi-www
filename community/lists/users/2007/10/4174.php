<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 02:09:16 2007" -->
<!-- isoreceived="20071009060916" -->
<!-- sent="Tue, 9 Oct 2007 08:08:30 +0200" -->
<!-- isosent="20071009060830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tool communication" -->
<!-- id="071F91ED-E525-4609-81BE-7CF06A0E623F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ab5deaf0710011349l127757f8vf4b6c8d14473ecf7_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-09 02:08:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>Previous message:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<li><strong>Reply:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting idea.
<br>
<p>One obvious solution would be to mpirun your controller tasks and, as  
<br>
you mentioned, use MPI to communicate between them.  Then you can use  
<br>
MPI_COMM_SPAWN to launch the actual MPI job that you want to monitor.
<br>
<p>However, this will only more-or-less work.  OMPI currently polls  
<br>
aggressively to make message passing progress, so if you end up over- 
<br>
subscribing nodes (because you filled up the cores on one node with  
<br>
all the target MPI processes but also have 1 or more controller  
<br>
processes running on the same node), they'll thrash each other and  
<br>
you'll get -- at best -- unreliable/unrepeatable performance fraught  
<br>
with lots of race conditions.
<br>
<p>Another issue is that OMPI's MPI_COMM_SPAWN does not give good  
<br>
options to allow specific process placement, so it might be a little  
<br>
dicey to get processes to land exactly where you want them.
<br>
<p>Alternatively, you could simply locally fork()/exec() your target  
<br>
process from the controller.  But the MPI spec does state that the  
<br>
use of fork()  is undefined within an MPI process.  Indeed, if you  
<br>
are using a high-speed network such as InfiniBand or Myrinet, calling  
<br>
fork() after you call MPI_INIT, Bad Things(tm) will happen (we can  
<br>
explain more if you care).  But if you're only using TCP, you should  
<br>
be fine.
<br>
<p>Another option might be to mpirun your target MPI app, have it wait  
<br>
in some kind of local barrier, and then mpirun your controllers on  
<br>
the same machines.  The controllers find/attach to your target  
<br>
processes, release them from the local barrier, and then you're good  
<br>
to go -- both your controllers and your target app are fully up and  
<br>
running under MPI.  You'll still have the spinning/performance issue,  
<br>
though -- so you won't want to oversubscribe nodes.
<br>
<p>Does this help?
<br>
<p><p>On Oct 1, 2007, at 10:49 PM, Oleg Morajko wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the context of my PhD research, I have been developing a run- 
</span><br>
<span class="quotelev1">&gt; time performance analyzer for MPI-based applications.
</span><br>
<span class="quotelev1">&gt; My tool provides a controller process for each MPI task. In  
</span><br>
<span class="quotelev1">&gt; particular, when a MPI job is started, a special wrapper script is  
</span><br>
<span class="quotelev1">&gt; generated that first starts my controller processes and next each  
</span><br>
<span class="quotelev1">&gt; controller spawns an actual MPI task (that performs MPI_Init etc.).  
</span><br>
<span class="quotelev1">&gt; I use dynamic instrumentation API (DynInst API) to control and  
</span><br>
<span class="quotelev1">&gt; instrument MPI tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The point is I need to intercommunicate my controller processes, in  
</span><br>
<span class="quotelev1">&gt; particular I need a point-to-point communication between arbitrary  
</span><br>
<span class="quotelev1">&gt; pair of controllers. So it seems reasonable to take advantage of  
</span><br>
<span class="quotelev1">&gt; MPI itself and use it for communication. However I am not sure what  
</span><br>
<span class="quotelev1">&gt; would be the impact of calling MPI_Init and communicating from  
</span><br>
<span class="quotelev1">&gt; controller processes taking into account both controllers and  
</span><br>
<span class="quotelev1">&gt; actual MPI  processes where started with the same mpirun  
</span><br>
<span class="quotelev1">&gt; invocation. Actually I would need to assure that controllers have a  
</span><br>
<span class="quotelev1">&gt; separate MPI execution enviroment while the application has another  
</span><br>
<span class="quotelev1">&gt; one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions how to achive that? Obviously another option is to  
</span><br>
<span class="quotelev1">&gt; use sockets to intercommunicate controllers, but having MPI this  
</span><br>
<span class="quotelev1">&gt; seems to be overkill.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; --Oleg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PhD student, Universitat Autonoma de Barcelona, Spain
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4175.php">Jeff Squyres: "Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<li><strong>Previous message:</strong> <a href="4173.php">Jeff Squyres: "Re: [OMPI users] ompi-1.2.4 fails to make on iMac (10.4.10)"</a>
<li><strong>In reply to:</strong> <a href="4122.php">Oleg Morajko: "[OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
<li><strong>Reply:</strong> <a href="4219.php">Oleg Morajko: "Re: [OMPI users] Tool communication"</a>
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
