<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 03:14:35 2007" -->
<!-- isoreceived="20071016071435" -->
<!-- sent="Tue, 16 Oct 2007 09:14:29 +0200" -->
<!-- isosent="20071016071429" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tool communication" -->
<!-- id="6ab5deaf0710160014m3f10fe00u6dd8c1685dc8843b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="071F91ED-E525-4609-81BE-7CF06A0E623F_at_cisco.com" -->
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
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-16 03:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4218.php">Jorge Parra: "[OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>In reply to:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thank you for your thoughts. Some more comments inlined.
<br>
<p>Regards,
<br>
--Oleg
<br>
<p>On 10/9/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One obvious solution would be to mpirun your controller tasks and, as
</span><br>
<span class="quotelev1">&gt; you mentioned, use MPI to communicate between them.  Then you can use
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPAWN to launch the actual MPI job that you want to monitor.
</span><br>
<p><p>Well. Yes, it's certainly could be done, but would not work in my scenario.
<br>
As I said before,
<br>
I use dynamic instrumentation API (DynInst API) to control and instrument
<br>
MPI tasks.
<br>
DynInst is sort of a debugger, it uses ptrace() on Linux to control
<br>
processes. So I need to use dyninst API
<br>
to create a controlled process (and not fork() it or MPI_Spawn () it),or
<br>
eventually I could fork it, and later
<br>
attach (with DynInst) to a running process in order to to control it. In the
<br>
latter case however, I would loose control
<br>
over the first several seconds of execution.
<br>
<p><p>However, this will only more-or-less work.  OMPI currently polls
<br>
<span class="quotelev1">&gt; aggressively to make message passing progress, so if you end up over-
</span><br>
<span class="quotelev1">&gt; subscribing nodes (because you filled up the cores on one node with
</span><br>
<span class="quotelev1">&gt; all the target MPI processes but also have 1 or more controller
</span><br>
<span class="quotelev1">&gt; processes running on the same node), they'll thrash each other and
</span><br>
<span class="quotelev1">&gt; you'll get -- at best -- unreliable/unrepeatable performance fraught
</span><br>
<span class="quotelev1">&gt; with lots of race conditions.
</span><br>
<p><p>This actually is a less serious issue than it seems. The daemon itself is a
<br>
very lightweight process. After executing the startup code (binary parsing,
<br>
process creation and instrumentation) it lets the MPI process go without any
<br>
additional overhead and than it sits waiting on certain events, so normally
<br>
the intrusion is less than 2%. The overhead of instrumentation inserted into
<br>
MPI task is controlled with a threshold and if placed reasonably stays low
<br>
(egg. not in a tight loop that executes lots of times, but on entry/exit of
<br>
let's say MPI_xxx comm calls).
<br>
<p><p>Another issue is that OMPI's MPI_COMM_SPAWN does not give good
<br>
<span class="quotelev1">&gt; options to allow specific process placement, so it might be a little
</span><br>
<span class="quotelev1">&gt; dicey to get processes to land exactly where you want them.
</span><br>
<p><p>Not an option, as daemon and task must sit on the same host. The best
<br>
scenario is dual-core host, one cpu per task and another per daemon.
<br>
<p>Alternatively, you could simply locally fork()/exec() your target
<br>
<span class="quotelev1">&gt; process from the controller.  But the MPI spec does state that the
</span><br>
<span class="quotelev1">&gt; use of fork()  is undefined within an MPI process.  Indeed, if you
</span><br>
<span class="quotelev1">&gt; are using a high-speed network such as InfiniBand or Myrinet, calling
</span><br>
<span class="quotelev1">&gt; fork() after you call MPI_INIT, Bad Things(tm) will happen (we can
</span><br>
<span class="quotelev1">&gt; explain more if you care).  But if you're only using TCP, you should
</span><br>
<span class="quotelev1">&gt; be fine.
</span><br>
<p><p>More less this is what I was doing. Daemon is mpirun, but it does not call
<br>
MPI_Init itself but DynInst-forks the mpi task that calls MPI_Init. I tested
<br>
this on OpenMPI using TCP/IP and Infiniband and MPICH and LAMMPI (on TCP)
<br>
and it worked.
<br>
<p><p>Another option might be to mpirun your target MPI app, have it wait
<br>
<span class="quotelev1">&gt; in some kind of local barrier, and then mpirun your controllers on
</span><br>
<span class="quotelev1">&gt; the same machines.  The controllers find/attach to your target
</span><br>
<span class="quotelev1">&gt; processes, release them from the local barrier, and then you're good
</span><br>
<span class="quotelev1">&gt; to go -- both your controllers and your target app are fully up and
</span><br>
<span class="quotelev1">&gt; running under MPI.  You'll still have the spinning/performance issue,
</span><br>
<span class="quotelev1">&gt; though -- so you won't want to oversubscribe nodes.
</span><br>
<p><p>Absolutely, this would be attach scenario for the daemons and they could use
<br>
MPI. Nice idea.
<br>
Unfortunately it would make the tool usage more complicated and their would
<br>
be no control on what happens during first several seconds.
<br>
<p><p>Does this help?
<br>
<p><p>Open-thinking always helps. Thank you.
<br>
<p>Finally I decided not to use MPI for inter daemon communication, but opted
<br>
for MRNet infrastructure (multicast/reduction network,
<br>
<a href="http://www.paradyn.org/mrnet/release-1.1/UG.html">http://www.paradyn.org/mrnet/release-1.1/UG.html</a>).
<br>
<p><p><p>On Oct 1, 2007, at 10:49 PM, Oleg Morajko wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the context of my PhD research, I have been developing a run-
</span><br>
<span class="quotelev2">&gt; &gt; time performance analyzer for MPI-based applications.
</span><br>
<span class="quotelev2">&gt; &gt; My tool provides a controller process for each MPI task. In
</span><br>
<span class="quotelev2">&gt; &gt; particular, when a MPI job is started, a special wrapper script is
</span><br>
<span class="quotelev2">&gt; &gt; generated that first starts my controller processes and next each
</span><br>
<span class="quotelev2">&gt; &gt; controller spawns an actual MPI task (that performs MPI_Init etc.).
</span><br>
<span class="quotelev2">&gt; &gt; I use dynamic instrumentation API (DynInst API) to control and
</span><br>
<span class="quotelev2">&gt; &gt; instrument MPI tasks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The point is I need to intercommunicate my controller processes, in
</span><br>
<span class="quotelev2">&gt; &gt; particular I need a point-to-point communication between arbitrary
</span><br>
<span class="quotelev2">&gt; &gt; pair of controllers. So it seems reasonable to take advantage of
</span><br>
<span class="quotelev2">&gt; &gt; MPI itself and use it for communication. However I am not sure what
</span><br>
<span class="quotelev2">&gt; &gt; would be the impact of calling MPI_Init and communicating from
</span><br>
<span class="quotelev2">&gt; &gt; controller processes taking into account both controllers and
</span><br>
<span class="quotelev2">&gt; &gt; actual MPI  processes where started with the same mpirun
</span><br>
<span class="quotelev2">&gt; &gt; invocation. Actually I would need to assure that controllers have a
</span><br>
<span class="quotelev2">&gt; &gt; separate MPI execution enviroment while the application has another
</span><br>
<span class="quotelev2">&gt; &gt; one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions how to achive that? Obviously another option is to
</span><br>
<span class="quotelev2">&gt; &gt; use sockets to intercommunicate controllers, but having MPI this
</span><br>
<span class="quotelev2">&gt; &gt; seems to be overkill.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you in advance for your help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; --Oleg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PhD student, Universitat Autonoma de Barcelona, Spain
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
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4220.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4218.php">Jorge Parra: "[OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>In reply to:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
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
