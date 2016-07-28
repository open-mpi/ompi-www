<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 09:10:27 2012" -->
<!-- isoreceived="20121009131027" -->
<!-- sent="Tue, 09 Oct 2012 13:10:02 +0000" -->
<!-- isosent="20121009131002" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC041113AA_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oeGm4zxFEDPicbGPS3QYo-vHhVfddTT2wXv6XCCYK1wmA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process<br>
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 09:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20427.php">Jeff Squyres: "Re: [OMPI users] MPI code"</a>
<li><strong>In reply to:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, I implemented the harvesting thread but found out quickly that my installation of open MPI does not have MPI_THREAD_MULIPLE support
<br>
My worker thread still does MPI_Send calls to move the data to the next process.
<br>
So I am going to download 1.6.2 today, configure it with --enable-thread-multiple and try again
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, October 04, 2012 8:10 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process
<br>
<p>Sorry for delayed response - been on the road all day.
<br>
<p>Usually we use the standard NetPipe, IMB, and other benchmarks to measure latency. IIRC, these are all point-to-point measurements - i.e., they measure the latency for a single process sending to one other process (typically on the order of a couple of microseconds). The tests may have multiple processes running, but they don't have one process receiving messages from multiple senders.
<br>
<p>You will, of course, see increased delays in that scenario just due to cycle time - we give you a message, but cannot give you another one until you return from our delivery callback. So the longer you spend in the callback, the slower we go.
<br>
<p>In one use-case I recently helped with, we had a &quot;harvesting&quot; thread that simply reaped the messages from the MPI callback and stuffed them into a multi-threaded processing queue. This minimized the MPI &quot;latency&quot;, but of course the overall thruput depended on the speed of the follow-on queue. In our case, we only had one process running on each node (like you), and had lots of cores on the node - so we cranked up the threads in the processing queue and rammed the data thru the pipe.
<br>
<p>Your design looks similar, so you might benefit from a similar approach. Just don't try to have multiple MPI callbacks each sitting in a separate thread as thread support in MPI isn't good - better to have a single thread handling the MPI stuff, and then push it into a queue that multiple threads can access.
<br>
<p>Anyway, glad that helped diagnose the issue.
<br>
Ralph
<br>
<p><p><p>On Thu, Oct 4, 2012 at 6:55 AM, Hodge, Gary C &lt;gary.c.hodge_at_[hidden]&lt;mailto:gary.c.hodge_at_[hidden]&gt;&gt; wrote:
<br>
Once I read your comment, Ralph, about this being &quot;orders of magnitude worse than anything we measure&quot;, I knew it had to be our problem
<br>
<p>We already had some debug code in place to measure when we send and when we receive over MPI.  I turned this code on and ran with 12 slaves instead of 4.
<br>
Our debug showed that once an SP does a send, it is received at the GP in less than 1 ms.   I then decided to take a close look at when each SP was sending a message.
<br>
It turns out that the first 9 slaves send out messages at very regular intervals, but the last 3 slaves have 200 - 600 ms delays in sending out a message.
<br>
It could be that our SPs have a problem when many are running at once.  It is also interesting to note that the first 9 slaves run on the same blade chassis as the GP and
<br>
the last 3 SPs run on our second blade chassis.  I will later experiment with the placement of our SPs across chassis to see if this an important factor or not.
<br>
<p>When I first reported this problem, I had only turned on debug in the receiving GP process.  The latency I was seeing then was the difference between when I received a message
<br>
from the 10th slave and when I received the last message from the 10th slave.  The time we use for our debug  comes from an MPI_Wtime call.
<br>
<p>Ralph, for my future reference, could you share how many processes were sending to a single process in your testing, and what were the size of the messages sent?
<br>
<p>Hristo, thanks for your input, I had already spent a few days searching the faqs and tuning guides before posting.
<br>
<p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, October 03, 2012 4:01 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process
<br>
<p>Hmmm...you probably can't without digging down into the diagnostics.
<br>
<p>Perhaps we could help more if we had some idea how you are measuring this &quot;latency&quot;. I ask because that is orders of magnitude worse than anything we measure - so I suspect the problem is in your app (i.e., that the time you are measuring is actually how long it takes you to get around to processing a message that was received some time ago).
<br>
<p><p>On Oct 3, 2012, at 11:52 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&lt;mailto:gary.c.hodge_at_[hidden]&gt;&gt; wrote:
<br>
<p>how do I tell the difference between when the message was received and when the message was picked up in MPI_Test?
<br>
<p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-&lt;mailto:users-&gt;bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, October 03, 2012 1:00 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] unacceptable latency in gathering process
<br>
<p>Out of curiosity, have you logged the time when the SP called &quot;send&quot; and compared it to the time when the message was received, and when that message is picked up in MPI_Test? In other words, have you actually verified that the delay is in the MPI library as opposed to in your application?
<br>
<p><p>On Oct 3, 2012, at 9:40 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&lt;mailto:gary.c.hodge_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi all,
<br>
I am running on an IBM BladeCenter, using Open MPI 1.4.1, and opensm subnet manager for Infiniband
<br>
<p>Our application has real time requirements and it has recently been proven that it does not scale to meet future requirements.
<br>
Presently, I am re-organizing the application to process work in a more parallel manner then it does now.
<br>
<p>Jobs arrive at the rate of 200 per second and are sub-divided into groups of objects by a master process (MP) on its own node.
<br>
The MP then assigns the object groups to 20 slave processes (SP), each running on their own node, to do the expensive computational work in parallel.
<br>
The SPs then send their results to a gatherer process (GP) on its own node that merges the results for the job and sends it onward for final processing.
<br>
The highest latency for the last 1024 jobs that were processed is then written to a log file that is displayed by a GUI.
<br>
Each process uses the same controller method for sending and  receiving messages as follows:
<br>
<p>For (each CPU that sends us input)
<br>
{
<br>
MPI_Irecv(....)
<br>
}
<br>
<p>While (true)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For (each CPU that sends us input)
<br>
{
<br>
MPI_Test(....)
<br>
If (message was received)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copy the message
<br>
Queue the copy to our input queue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(...)
<br>
}
<br>
}
<br>
If (there are messages on our input queue)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... process the FIRST message on queue (this may queue messages for output) ....
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For (each message on our output queue)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
}
<br>
<p>My problem is that I do not meet our applications performance requirements for a job (~ 20 ms) until I reduce the number of SPs from 20 to 4 or less.
<br>
I added some debug into the GP and found that there are never more than 14 messages received in the for loop that calls MPI_Test.
<br>
The messages that were sent from the other 6 SPs will eventually arrive at the GP in a long stream after experiencing high latency (over 600 ms).
<br>
<p>Going forward, we need to handle more objects per job and will need to have more than 4 SPs to keep up.
<br>
My thought is that I have to obey this 4 SPs to 1 GP ratio and create intermediate GPs to gather results from every 4 slaves.
<br>
<p>Is this a contention problem at the GP?
<br>
Is there debugging or logging I can turn on in the MPI to prove that contention is occurring?
<br>
Can I configure MPI receive processing to improve upon the 4 to 1 ratio?
<br>
Can I improve the controller method (listed above) to gain a performance improvement?
<br>
<p>Thanks for any suggestions.
<br>
Gary Hodge
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20427.php">Jeff Squyres: "Re: [OMPI users] MPI code"</a>
<li><strong>In reply to:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20429.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
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
