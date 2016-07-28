<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gatheringprocess";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 10:51:56 2012" -->
<!-- isoreceived="20121009145156" -->
<!-- sent="Tue, 9 Oct 2012 16:45:00 +0200 (CEST)" -->
<!-- isosent="20121009144500" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gatheringprocess" -->
<!-- id="201210091445.q99Ej0K6019462_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] EXTERNAL: Re: unacceptable latency in gatheringprocess" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gatheringprocess<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 10:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20435.php">Siegmar Gross: "[OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter"</a>
<li><strong>Previous message:</strong> <a href="20433.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I used die following options for &quot;configure&quot; in openmpi-1.9a1r27380
<br>
and I get &quot;MPI_THREAD_MULTIPLE&quot;
<br>
<p>&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;--enable-opal-multi-threads \
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-m64 \
<br>
&nbsp;&nbsp;--enable-debug \
<br>
<p><p>tyr small_prog 125 mpiexec thread_support
<br>
<p>I have requested MPI_THREAD_MULTIPLE in &quot;MPI_Init_thread ()&quot; and
<br>
it provides MPI_THREAD_MULTIPLE
<br>
<p>&quot;MPI_Query_thread ()&quot; returned MPI_THREAD_MULTIPLE:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Many threads are supported and any thread may call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI functions at any time.
<br>
<p>&quot;MPI_Is_thread_main ()&quot; returned: &quot;true&quot;.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; If you ask for thread multiple, I believe we return thread funneled
</span><br>
<span class="quotelev1">&gt; or thread serial. You can check, though - I might be remembering
</span><br>
<span class="quotelev1">&gt; wrong, but I'm pretty sure that's true
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 9, 2012, at 7:09 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph -
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this really true?  I've been using thread_multiple in my openmpi
</span><br>
<span class="quotelev2">&gt; &gt; programs for quite some time...  There may be known cases where it
</span><br>
<span class="quotelev2">&gt; &gt; will not work, but for vanilla MPI use, it seems good to go.  That's
</span><br>
<span class="quotelev2">&gt; &gt; not to say that you can't create your own deadlock if you're not
</span><br>
<span class="quotelev2">&gt; &gt; careful, but they are cases you'd expect deadlock.  What specifically
</span><br>
<span class="quotelev2">&gt; &gt; is unsupported about thread_multiple?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Oct 9, 2012 at 6:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We don't support thread_multiple, I'm afraid. Only thread_funneled, so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you'll have to architect things so that each process can perform all its 
</span><br>
MPI
<br>
<span class="quotelev3">&gt; &gt;&gt; actions inside of a single thread.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Oct 9, 2012 at 6:10 AM, Hodge, Gary C &lt;gary.c.hodge_at_[hidden]&gt; 
</span><br>
wrote:
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; FYI, I implemented the harvesting thread but found out quickly that my
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; installation of open MPI does not have MPI_THREAD_MULIPLE support
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My worker thread still does MPI_Send calls to move the data to the next
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; process.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So I am going to download 1.6.2 today, configure it with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-thread-multiple and try again
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Thursday, October 04, 2012 8:10 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sorry for delayed response - been on the road all day.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Usually we use the standard NetPipe, IMB, and other benchmarks to measure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; latency. IIRC, these are all point-to-point measurements - i.e., they
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; measure the latency for a single process sending to one other process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (typically on the order of a couple of microseconds). The tests may have
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; multiple processes running, but they don't have one process receiving
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; messages from multiple senders.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You will, of course, see increased delays in that scenario just due to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cycle time - we give you a message, but cannot give you another one until
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you return from our delivery callback. So the longer you spend in the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; callback, the slower we go.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In one use-case I recently helped with, we had a &quot;harvesting&quot; thread that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; simply reaped the messages from the MPI callback and stuffed them into a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; multi-threaded processing queue. This minimized the MPI &quot;latency&quot;, but of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; course the overall thruput depended on the speed of the follow-on queue. 
</span><br>
In
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; our case, we only had one process running on each node (like you), and had
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; lots of cores on the node - so we cranked up the threads in the processing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; queue and rammed the data thru the pipe.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Your design looks similar, so you might benefit from a similar approach.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just don't try to have multiple MPI callbacks each sitting in a separate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; thread as thread support in MPI isn't good - better to have a single 
</span><br>
thread
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; handling the MPI stuff, and then push it into a queue that multiple 
</span><br>
threads
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can access.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Anyway, glad that helped diagnose the issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Thu, Oct 4, 2012 at 6:55 AM, Hodge, Gary C &lt;gary.c.hodge_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Once I read your comment, Ralph, about this being &#226;&#128;&#156;orders of magnitude
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; worse than anything we measure&#226;&#128;&#157;, I knew it had to be our problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We already had some debug code in place to measure when we send and when
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; we receive over MPI.  I turned this code on and ran with 12 slaves instead
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of 4.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Our debug showed that once an SP does a send, it is received at the GP in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; less than 1 ms.   I then decided to take a close look at when each SP was
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sending a message.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It turns out that the first 9 slaves send out messages at very regular
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; intervals, but the last 3 slaves have 200 - 600 ms delays in sending out a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; message.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It could be that our SPs have a problem when many are running at once.  It
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is also interesting to note that the first 9 slaves run on the same blade
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; chassis as the GP and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the last 3 SPs run on our second blade chassis.  I will later experiment
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with the placement of our SPs across chassis to see if this an important
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; factor or not.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When I first reported this problem, I had only turned on debug in the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; receiving GP process.  The latency I was seeing then was the difference
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; between when I received a message
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; from the 10th slave and when I received the last message from the 10th
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; slave.  The time we use for our debug  comes from an MPI_Wtime call.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph, for my future reference, could you share how many processes were
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sending to a single process in your testing, and what were the size of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; messages sent?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hristo, thanks for your input, I had already spent a few days searching
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the faqs and tuning guides before posting.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Wednesday, October 03, 2012 4:01 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hmmm...you probably can't without digging down into the diagnostics.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Perhaps we could help more if we had some idea how you are measuring this
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;latency&quot;. I ask because that is orders of magnitude worse than anything 
</span><br>
we
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; measure - so I suspect the problem is in your app (i.e., that the time you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; are measuring is actually how long it takes you to get around to 
</span><br>
processing
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a message that was received some time ago).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Oct 3, 2012, at 11:52 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; how do I tell the difference between when the message was received and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when the message was picked up in MPI_Test?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Wednesday, October 03, 2012 1:00 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: EXTERNAL: Re: [OMPI users] unacceptable latency in gathering
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Out of curiosity, have you logged the time when the SP called &quot;send&quot; and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compared it to the time when the message was received, and when that 
</span><br>
message
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is picked up in MPI_Test? In other words, have you actually verified that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the delay is in the MPI library as opposed to in your application?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Oct 3, 2012, at 9:40 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am running on an IBM BladeCenter, using Open MPI 1.4.1, and opensm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; subnet manager for Infiniband
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Our application has real time requirements and it has recently been proven
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that it does not scale to meet future requirements.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Presently, I am re-organizing the application to process work in a more
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parallel manner then it does now.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jobs arrive at the rate of 200 per second and are sub-divided into groups
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; of objects by a master process (MP) on its own node.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The MP then assigns the object groups to 20 slave processes (SP), each
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; running on their own node, to do the expensive computational work in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parallel.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The SPs then send their results to a gatherer process (GP) on its own node
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that merges the results for the job and sends it onward for final
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; processing.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The highest latency for the last 1024 jobs that were processed is then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; written to a log file that is displayed by a GUI.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Each process uses the same controller method for sending and  receiving
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; messages as follows:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For (each CPU that sends us input)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Irecv(&#226;&#128;&#166;.)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; While (true)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                For (each CPU that sends us input)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Test(&#226;&#128;&#166;.)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If (message was received)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                Copy the message
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Queue the copy to our input queue
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                MPI_Irecv(&#226;&#128;&#166;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If (there are messages on our input queue)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                &#226;&#128;&#166; process the FIRST message on queue (this may queue
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; messages for output) &#226;&#128;&#166;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                For (each message on our output queue)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                                MPI_Send(&#226;&#128;&#166;)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My problem is that I do not meet our applications performance requirements
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for a job (~ 20 ms) until I reduce the number of SPs from 20 to 4 or less.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I added some debug into the GP and found that there are never more than 14
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; messages received in the for loop that calls MPI_Test.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The messages that were sent from the other 6 SPs will eventually arrive at
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the GP in a long stream after experiencing high latency (over 600 ms).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Going forward, we need to handle more objects per job and will need to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; have more than 4 SPs to keep up.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My thought is that I have to obey this 4 SPs to 1 GP ratio and create
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; intermediate GPs to gather results from every 4 slaves.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is this a contention problem at the GP?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is there debugging or logging I can turn on in the MPI to prove that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; contention is occurring?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can I configure MPI receive processing to improve upon the 4 to 1 ratio?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can I improve the controller method (listed above) to gain a performance
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; improvement?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks for any suggestions.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Gary Hodge
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20435.php">Siegmar Gross: "[OMPI users] question to Datatype.Vector and MPI.COMM_WORLD.Scatter"</a>
<li><strong>Previous message:</strong> <a href="20433.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
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
