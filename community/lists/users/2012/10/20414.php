<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 20:10:11 2012" -->
<!-- isoreceived="20121005001011" -->
<!-- sent="Thu, 4 Oct 2012 17:10:02 -0700" -->
<!-- isosent="20121005001002" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process" -->
<!-- id="CAMD57oeGm4zxFEDPicbGPS3QYo-vHhVfddTT2wXv6XCCYK1wmA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3258BBCAE92D924BB7419ABF3554AC041110BC_at_HVXDSP24.us.lmco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 20:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20415.php">Siegmar Gross: "[OMPI users] question to -cpus-to-proc"</a>
<li><strong>Previous message:</strong> <a href="20413.php">S&#233;bastien Boisvert: "[OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<li><strong>In reply to:</strong> <a href="20411.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20428.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<li><strong>Reply:</strong> <a href="20428.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delayed response - been on the road all day.
<br>
<p>Usually we use the standard NetPipe, IMB, and other benchmarks to measure
<br>
latency. IIRC, these are all point-to-point measurements - i.e., they
<br>
measure the latency for a single process sending to one other process
<br>
(typically on the order of a couple of microseconds). The tests may have
<br>
multiple processes running, but they don't have one process receiving
<br>
messages from multiple senders.
<br>
<p>You will, of course, see increased delays in that scenario just due to
<br>
cycle time - we give you a message, but cannot give you another one until
<br>
you return from our delivery callback. So the longer you spend in the
<br>
callback, the slower we go.
<br>
<p>In one use-case I recently helped with, we had a &quot;harvesting&quot; thread that
<br>
simply reaped the messages from the MPI callback and stuffed them into a
<br>
multi-threaded processing queue. This minimized the MPI &quot;latency&quot;, but of
<br>
course the overall thruput depended on the speed of the follow-on queue. In
<br>
our case, we only had one process running on each node (like you), and had
<br>
lots of cores on the node - so we cranked up the threads in the processing
<br>
queue and rammed the data thru the pipe.
<br>
<p>Your design looks similar, so you might benefit from a similar approach.
<br>
Just don't try to have multiple MPI callbacks each sitting in a separate
<br>
thread as thread support in MPI isn't good - better to have a single thread
<br>
handling the MPI stuff, and then push it into a queue that multiple threads
<br>
can access.
<br>
<p>Anyway, glad that helped diagnose the issue.
<br>
Ralph
<br>
<p><p><p><p>On Thu, Oct 4, 2012 at 6:55 AM, Hodge, Gary C &lt;gary.c.hodge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Once I read your comment, Ralph, about this being &#147;orders of magnitude
</span><br>
<span class="quotelev1">&gt; worse than anything we measure&#148;, I knew it had to be our problem****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We already had some debug code in place to measure when we send and when
</span><br>
<span class="quotelev1">&gt; we receive over MPI.  I turned this code on and ran with 12 slaves instead
</span><br>
<span class="quotelev1">&gt; of 4.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our debug showed that once an SP does a send, it is received at the GP in
</span><br>
<span class="quotelev1">&gt; less than 1 ms.   I then decided to take a close look at when each SP was
</span><br>
<span class="quotelev1">&gt; sending a message.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It turns out that the first 9 slaves send out messages at very regular
</span><br>
<span class="quotelev1">&gt; intervals, but the last 3 slaves have 200 - 600 ms delays in sending out a
</span><br>
<span class="quotelev1">&gt; message.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It could be that our SPs have a problem when many are running at once.  It
</span><br>
<span class="quotelev1">&gt; is also interesting to note that the first 9 slaves run on the same blade
</span><br>
<span class="quotelev1">&gt; chassis as the GP and****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the last 3 SPs run on our second blade chassis.  I will later experiment
</span><br>
<span class="quotelev1">&gt; with the placement of our SPs across chassis to see if this an important
</span><br>
<span class="quotelev1">&gt; factor or not.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I first reported this problem, I had only turned on debug in the
</span><br>
<span class="quotelev1">&gt; receiving GP process.  The latency I was seeing then was the difference
</span><br>
<span class="quotelev1">&gt; between when I received a message****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from the 10th slave and when I received the last message from the 10thslave.  The time we use for our debug  comes from an MPI_Wtime call.
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph, for my future reference, could you share how many processes were
</span><br>
<span class="quotelev1">&gt; sending to a single process in your testing, and what were the size of the
</span><br>
<span class="quotelev1">&gt; messages sent?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hristo, thanks for your input, I had already spent a few days searching
</span><br>
<span class="quotelev1">&gt; the faqs and tuning guides before posting.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Ralph Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, October 03, 2012 4:01 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] EXTERNAL: Re: unacceptable latency in
</span><br>
<span class="quotelev1">&gt; gathering process****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...you probably can't without digging down into the diagnostics.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps we could help more if we had some idea how you are measuring this
</span><br>
<span class="quotelev1">&gt; &quot;latency&quot;. I ask because that is orders of magnitude worse than anything we
</span><br>
<span class="quotelev1">&gt; measure - so I suspect the problem is in your app (i.e., that the time you
</span><br>
<span class="quotelev1">&gt; are measuring is actually how long it takes you to get around to processing
</span><br>
<span class="quotelev1">&gt; a message that was received some time ago).****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2012, at 11:52 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how do I tell the difference between when the message was received and
</span><br>
<span class="quotelev1">&gt; when the message was picked up in MPI_Test?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Ralph Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, October 03, 2012 1:00 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* EXTERNAL: Re: [OMPI users] unacceptable latency in gathering
</span><br>
<span class="quotelev1">&gt; process****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Out of curiosity, have you logged the time when the SP called &quot;send&quot; and
</span><br>
<span class="quotelev1">&gt; compared it to the time when the message was received, and when that
</span><br>
<span class="quotelev1">&gt; message is picked up in MPI_Test? In other words, have you actually
</span><br>
<span class="quotelev1">&gt; verified that the delay is in the MPI library as opposed to in your
</span><br>
<span class="quotelev1">&gt; application?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2012, at 9:40 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on an IBM BladeCenter, using Open MPI 1.4.1, and opensm
</span><br>
<span class="quotelev1">&gt; subnet manager for Infiniband****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our application has real time requirements and it has recently been proven
</span><br>
<span class="quotelev1">&gt; that it does not scale to meet future requirements.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Presently, I am re-organizing the application to process work in a more
</span><br>
<span class="quotelev1">&gt; parallel manner then it does now.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jobs arrive at the rate of 200 per second and are sub-divided into groups
</span><br>
<span class="quotelev1">&gt; of objects by a master process (MP) on its own node.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MP then assigns the object groups to 20 slave processes (SP), each
</span><br>
<span class="quotelev1">&gt; running on their own node, to do the expensive computational work in
</span><br>
<span class="quotelev1">&gt; parallel.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The SPs then send their results to a gatherer process (GP) on its own node
</span><br>
<span class="quotelev1">&gt; that merges the results for the job and sends it onward for final
</span><br>
<span class="quotelev1">&gt; processing.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The highest latency for the last 1024 jobs that were processed is then
</span><br>
<span class="quotelev1">&gt; written to a log file that is displayed by a GUI.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process uses the same controller method for sending and  receiving
</span><br>
<span class="quotelev1">&gt; messages as follows:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For (each CPU that sends us input)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(&#133;.)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While (true)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 For (each CPU that sends us input)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Test(&#133;.)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If (message was received)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Copy the message****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Queue the copy to our input queue****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 MPI_Irecv(&#133;)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If (there are messages on our input queue)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 &#133; process the FIRST message on queue (this may queue
</span><br>
<span class="quotelev1">&gt; messages for output) &#133;.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 For (each message on our output queue)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 {****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 MPI_Send(&#133;)****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }             ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is that I do not meet our applications performance requirements
</span><br>
<span class="quotelev1">&gt; for a job (~ 20 ms) until I reduce the number of SPs from 20 to 4 or less.
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added some debug into the GP and found that there are never more than 14
</span><br>
<span class="quotelev1">&gt; messages received in the for loop that calls MPI_Test.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The messages that were sent from the other 6 SPs will eventually arrive at
</span><br>
<span class="quotelev1">&gt; the GP in a long stream after experiencing high latency (over 600 ms).****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Going forward, we need to handle more objects per job and will need to
</span><br>
<span class="quotelev1">&gt; have more than 4 SPs to keep up.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My thought is that I have to obey this 4 SPs to 1 GP ratio and create
</span><br>
<span class="quotelev1">&gt; intermediate GPs to gather results from every 4 slaves.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a contention problem at the GP?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there debugging or logging I can turn on in the MPI to prove that
</span><br>
<span class="quotelev1">&gt; contention is occurring?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I configure MPI receive processing to improve upon the 4 to 1 ratio?**
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I improve the controller method (listed above) to gain a performance
</span><br>
<span class="quotelev1">&gt; improvement?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any suggestions.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gary Hodge****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20415.php">Siegmar Gross: "[OMPI users] question to -cpus-to-proc"</a>
<li><strong>Previous message:</strong> <a href="20413.php">S&#233;bastien Boisvert: "[OMPI users] -output-filename 1234 versus --mca orte_output_filename 1234"</a>
<li><strong>In reply to:</strong> <a href="20411.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20428.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<li><strong>Reply:</strong> <a href="20428.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
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
