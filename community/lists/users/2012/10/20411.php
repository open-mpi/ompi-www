<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 09:56:02 2012" -->
<!-- isoreceived="20121004135602" -->
<!-- sent="Thu, 04 Oct 2012 13:55:43 +0000" -->
<!-- isosent="20121004135543" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC041110BC_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C7FA27A6-7A3E-4104-AD3F-A7165DEDC22B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-10-04 09:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20412.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Previous message:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20406.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
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
<p><p>how do I tell the difference between when the message was received and when the message was picked up in MPI_Test?
<br>
<p>From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
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
<p><p><p>Hi all,
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20412.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Previous message:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20406.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20414.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
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
