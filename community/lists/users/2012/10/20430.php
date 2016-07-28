<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 10:09:32 2012" -->
<!-- isoreceived="20121009140932" -->
<!-- sent="Tue, 9 Oct 2012 07:09:26 -0700" -->
<!-- isosent="20121009140926" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process" -->
<!-- id="CANjXV6-O8heiefCKOqAbKg6e-gyNWxL3udzJ4wc-4jaVdQaJYQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMD57oecd0c7m7R7Vcbm8+SZJrghWQUXLgb7ddK45n4o9oWYww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 10:09:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20431.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>In reply to:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20432.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20432.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph -
<br>
<p>Is this really true?  I've been using thread_multiple in my openmpi
<br>
programs for quite some time...  There may be known cases where it
<br>
will not work, but for vanilla MPI use, it seems good to go.  That's
<br>
not to say that you can't create your own deadlock if you're not
<br>
careful, but they are cases you'd expect deadlock.  What specifically
<br>
is unsupported about thread_multiple?
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Tue, Oct 9, 2012 at 6:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; We don't support thread_multiple, I'm afraid. Only thread_funneled, so
</span><br>
<span class="quotelev1">&gt; you'll have to architect things so that each process can perform all its MPI
</span><br>
<span class="quotelev1">&gt; actions inside of a single thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 9, 2012 at 6:10 AM, Hodge, Gary C &lt;gary.c.hodge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI, I implemented the harvesting thread but found out quickly that my
</span><br>
<span class="quotelev2">&gt;&gt; installation of open MPI does not have MPI_THREAD_MULIPLE support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My worker thread still does MPI_Send calls to move the data to the next
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I am going to download 1.6.2 today, configure it with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-thread-multiple and try again
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, October 04, 2012 8:10 PM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for delayed response - been on the road all day.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Usually we use the standard NetPipe, IMB, and other benchmarks to measure
</span><br>
<span class="quotelev2">&gt;&gt; latency. IIRC, these are all point-to-point measurements - i.e., they
</span><br>
<span class="quotelev2">&gt;&gt; measure the latency for a single process sending to one other process
</span><br>
<span class="quotelev2">&gt;&gt; (typically on the order of a couple of microseconds). The tests may have
</span><br>
<span class="quotelev2">&gt;&gt; multiple processes running, but they don't have one process receiving
</span><br>
<span class="quotelev2">&gt;&gt; messages from multiple senders.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You will, of course, see increased delays in that scenario just due to
</span><br>
<span class="quotelev2">&gt;&gt; cycle time - we give you a message, but cannot give you another one until
</span><br>
<span class="quotelev2">&gt;&gt; you return from our delivery callback. So the longer you spend in the
</span><br>
<span class="quotelev2">&gt;&gt; callback, the slower we go.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In one use-case I recently helped with, we had a &quot;harvesting&quot; thread that
</span><br>
<span class="quotelev2">&gt;&gt; simply reaped the messages from the MPI callback and stuffed them into a
</span><br>
<span class="quotelev2">&gt;&gt; multi-threaded processing queue. This minimized the MPI &quot;latency&quot;, but of
</span><br>
<span class="quotelev2">&gt;&gt; course the overall thruput depended on the speed of the follow-on queue. In
</span><br>
<span class="quotelev2">&gt;&gt; our case, we only had one process running on each node (like you), and had
</span><br>
<span class="quotelev2">&gt;&gt; lots of cores on the node - so we cranked up the threads in the processing
</span><br>
<span class="quotelev2">&gt;&gt; queue and rammed the data thru the pipe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your design looks similar, so you might benefit from a similar approach.
</span><br>
<span class="quotelev2">&gt;&gt; Just don't try to have multiple MPI callbacks each sitting in a separate
</span><br>
<span class="quotelev2">&gt;&gt; thread as thread support in MPI isn't good - better to have a single thread
</span><br>
<span class="quotelev2">&gt;&gt; handling the MPI stuff, and then push it into a queue that multiple threads
</span><br>
<span class="quotelev2">&gt;&gt; can access.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, glad that helped diagnose the issue.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 4, 2012 at 6:55 AM, Hodge, Gary C &lt;gary.c.hodge_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once I read your comment, Ralph, about this being &#147;orders of magnitude
</span><br>
<span class="quotelev2">&gt;&gt; worse than anything we measure&#148;, I knew it had to be our problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We already had some debug code in place to measure when we send and when
</span><br>
<span class="quotelev2">&gt;&gt; we receive over MPI.  I turned this code on and ran with 12 slaves instead
</span><br>
<span class="quotelev2">&gt;&gt; of 4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our debug showed that once an SP does a send, it is received at the GP in
</span><br>
<span class="quotelev2">&gt;&gt; less than 1 ms.   I then decided to take a close look at when each SP was
</span><br>
<span class="quotelev2">&gt;&gt; sending a message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It turns out that the first 9 slaves send out messages at very regular
</span><br>
<span class="quotelev2">&gt;&gt; intervals, but the last 3 slaves have 200 - 600 ms delays in sending out a
</span><br>
<span class="quotelev2">&gt;&gt; message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It could be that our SPs have a problem when many are running at once.  It
</span><br>
<span class="quotelev2">&gt;&gt; is also interesting to note that the first 9 slaves run on the same blade
</span><br>
<span class="quotelev2">&gt;&gt; chassis as the GP and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the last 3 SPs run on our second blade chassis.  I will later experiment
</span><br>
<span class="quotelev2">&gt;&gt; with the placement of our SPs across chassis to see if this an important
</span><br>
<span class="quotelev2">&gt;&gt; factor or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I first reported this problem, I had only turned on debug in the
</span><br>
<span class="quotelev2">&gt;&gt; receiving GP process.  The latency I was seeing then was the difference
</span><br>
<span class="quotelev2">&gt;&gt; between when I received a message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from the 10th slave and when I received the last message from the 10th
</span><br>
<span class="quotelev2">&gt;&gt; slave.  The time we use for our debug  comes from an MPI_Wtime call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, for my future reference, could you share how many processes were
</span><br>
<span class="quotelev2">&gt;&gt; sending to a single process in your testing, and what were the size of the
</span><br>
<span class="quotelev2">&gt;&gt; messages sent?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hristo, thanks for your input, I had already spent a few days searching
</span><br>
<span class="quotelev2">&gt;&gt; the faqs and tuning guides before posting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, October 03, 2012 4:01 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...you probably can't without digging down into the diagnostics.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps we could help more if we had some idea how you are measuring this
</span><br>
<span class="quotelev2">&gt;&gt; &quot;latency&quot;. I ask because that is orders of magnitude worse than anything we
</span><br>
<span class="quotelev2">&gt;&gt; measure - so I suspect the problem is in your app (i.e., that the time you
</span><br>
<span class="quotelev2">&gt;&gt; are measuring is actually how long it takes you to get around to processing
</span><br>
<span class="quotelev2">&gt;&gt; a message that was received some time ago).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2012, at 11:52 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; how do I tell the difference between when the message was received and
</span><br>
<span class="quotelev2">&gt;&gt; when the message was picked up in MPI_Test?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, October 03, 2012 1:00 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: EXTERNAL: Re: [OMPI users] unacceptable latency in gathering
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Out of curiosity, have you logged the time when the SP called &quot;send&quot; and
</span><br>
<span class="quotelev2">&gt;&gt; compared it to the time when the message was received, and when that message
</span><br>
<span class="quotelev2">&gt;&gt; is picked up in MPI_Test? In other words, have you actually verified that
</span><br>
<span class="quotelev2">&gt;&gt; the delay is in the MPI library as opposed to in your application?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2012, at 9:40 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running on an IBM BladeCenter, using Open MPI 1.4.1, and opensm
</span><br>
<span class="quotelev2">&gt;&gt; subnet manager for Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our application has real time requirements and it has recently been proven
</span><br>
<span class="quotelev2">&gt;&gt; that it does not scale to meet future requirements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Presently, I am re-organizing the application to process work in a more
</span><br>
<span class="quotelev2">&gt;&gt; parallel manner then it does now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jobs arrive at the rate of 200 per second and are sub-divided into groups
</span><br>
<span class="quotelev2">&gt;&gt; of objects by a master process (MP) on its own node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The MP then assigns the object groups to 20 slave processes (SP), each
</span><br>
<span class="quotelev2">&gt;&gt; running on their own node, to do the expensive computational work in
</span><br>
<span class="quotelev2">&gt;&gt; parallel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The SPs then send their results to a gatherer process (GP) on its own node
</span><br>
<span class="quotelev2">&gt;&gt; that merges the results for the job and sends it onward for final
</span><br>
<span class="quotelev2">&gt;&gt; processing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The highest latency for the last 1024 jobs that were processed is then
</span><br>
<span class="quotelev2">&gt;&gt; written to a log file that is displayed by a GUI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each process uses the same controller method for sending and  receiving
</span><br>
<span class="quotelev2">&gt;&gt; messages as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For (each CPU that sends us input)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv(&#133;.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While (true)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 For (each CPU that sends us input)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test(&#133;.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If (message was received)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Copy the message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Queue the copy to our input queue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 MPI_Irecv(&#133;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If (there are messages on our input queue)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 &#133; process the FIRST message on queue (this may queue
</span><br>
<span class="quotelev2">&gt;&gt; messages for output) &#133;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 For (each message on our output queue)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                 MPI_Send(&#133;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is that I do not meet our applications performance requirements
</span><br>
<span class="quotelev2">&gt;&gt; for a job (~ 20 ms) until I reduce the number of SPs from 20 to 4 or less.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added some debug into the GP and found that there are never more than 14
</span><br>
<span class="quotelev2">&gt;&gt; messages received in the for loop that calls MPI_Test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The messages that were sent from the other 6 SPs will eventually arrive at
</span><br>
<span class="quotelev2">&gt;&gt; the GP in a long stream after experiencing high latency (over 600 ms).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Going forward, we need to handle more objects per job and will need to
</span><br>
<span class="quotelev2">&gt;&gt; have more than 4 SPs to keep up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My thought is that I have to obey this 4 SPs to 1 GP ratio and create
</span><br>
<span class="quotelev2">&gt;&gt; intermediate GPs to gather results from every 4 slaves.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a contention problem at the GP?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there debugging or logging I can turn on in the MPI to prove that
</span><br>
<span class="quotelev2">&gt;&gt; contention is occurring?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I configure MPI receive processing to improve upon the 4 to 1 ratio?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I improve the controller method (listed above) to gain a performance
</span><br>
<span class="quotelev2">&gt;&gt; improvement?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any suggestions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gary Hodge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20431.php">Jeff Squyres: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>In reply to:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20432.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20432.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
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
