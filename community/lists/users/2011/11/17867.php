<?
$subject_val = "[OMPI users] Asymmetric performance with nonblocking, multithreaded communications";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 30 11:06:01 2011" -->
<!-- isoreceived="20111130160601" -->
<!-- sent="Wed, 30 Nov 2011 11:05:36 -0500" -->
<!-- isosent="20111130160536" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="[OMPI users] Asymmetric performance with nonblocking, multithreaded communications" -->
<!-- id="CA+Py04APXmiPRKN2+xyi5HOiJs-Y3am2+-bfaKw5_js_AHkJsw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Asymmetric performance with nonblocking, multithreaded communications<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-30 11:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17868.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Reply:</strong> <a href="17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm seeing performance issues I don't understand in my multithreaded
<br>
MPI code, and I was hoping someone could shed some light on this.
<br>
<p>The code structure is as follows: A computational domain is decomposed
<br>
into MPI tasks. Each MPI task has a &quot;master thread&quot; that receives
<br>
messages from the other tasks and puts those into a local, concurrent
<br>
queue. The tasks then have a few &quot;worker threads&quot; that processes the
<br>
incoming messages and when necessary sends them to other tasks. So for
<br>
each task, there is one thread doing receives and N (typically number
<br>
of cores-1) threads doing sends. All messages are nonblocking, so the
<br>
workers just post the sends and continue with computation, and the
<br>
master repeatedly does a number of test calls to check for incoming
<br>
messages (there are different flavors of these messages so it does
<br>
several tests).
<br>
<p>Currently I'm just testing, so I'm running 2 tasks using the sm btl on
<br>
one node, and 5 worker threads. (Node has 12 cores.) What happens is
<br>
that task 0 receives everything that is sent by task 1 (number of
<br>
sends and receives roughly match). However, task 1 only receives about
<br>
25% of the messages sent by task 0. Task 0 apparently has no problem
<br>
keeping up with receiving the messages from task 1, even though the
<br>
throughput in that direction is actually a bit higher. In less than a
<br>
minute, there are hundreds of thousands of pending messages (but only
<br>
in one direction).At this point, throughput drops by orders of
<br>
magnitude to &lt;1000 msg/s. Using PAPI, I can see that the receiving
<br>
threads are at that point basically stalled on MPI tests and receives,
<br>
and stopping them in the debugger seems to indicate that they are
<br>
trying to acquire a lock. However, the test/receive that it is
<br>
stalling on is NOT the test for the huge number of pending messages,
<br>
but on another class of much rarer ones.
<br>
<p>I realize it's hard to know without looking at the code (it's
<br>
difficult to whittle it down to a workable example) but does anyone
<br>
have any ideas what is happening and how it can be fixed?  I don't
<br>
know if there are any problems with the basic structure of the code.
<br>
For example, are the simultaneous send/receives in different threads
<br>
bound to cause lock contention on the MPI side? How does the MPI
<br>
library decide which thread is used for actual message processing?
<br>
Does every nonblocking MPI call just &quot;steal&quot; a time slice to work on
<br>
communications or does MPI have its own thread dedicated to message
<br>
processing? What I would like is that the master thread devote all its
<br>
time to communication, while the sends by the worker threads should
<br>
just return as fast as possible.  Would it be better that the thread
<br>
doing receives do one large wait instead of repeatedly testing
<br>
different sets of requests, or would that acquire some lock and then
<br>
block the threads trying to post a send?
<br>
<p>I've looked around for info on how to best structure multithreaded MPI
<br>
code, but haven't had much luck in finding anything.
<br>
<p>This is with OpenMPI 1.5.3 using MPI_THREAD_MULTIPLE on a Dell
<br>
PowerEdge C6100 running linux kernel 2.6.18-194.32.1.el5, using Intel
<br>
12.3.174. I've attached the ompi_info output.
<br>
<p>Thanks,
<br>
<p>/Patrik J.
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17867/ompi_info.gz">ompi_info.gz</a>
</ul>
<!-- attachment="ompi_info.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17868.php">Ralph Castain: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17866.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes over Internet using ssh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Reply:</strong> <a href="17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17917.php">Yiannis Papadopoulos: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
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
