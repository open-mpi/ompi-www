<?
$subject_val = "[OMPI users] unacceptable latency in gathering process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 12:41:07 2012" -->
<!-- isoreceived="20121003164107" -->
<!-- sent="Wed, 03 Oct 2012 16:40:38 +0000" -->
<!-- isosent="20121003164038" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="[OMPI users] unacceptable latency in gathering process" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC04110F9C_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] unacceptable latency in gathering process<br>
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 12:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20403.php">Ralph Castain: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20401.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20403.php">Ralph Castain: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20403.php">Ralph Castain: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20409.php">Iliev, Hristo: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20403.php">Ralph Castain: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Previous message:</strong> <a href="20401.php">Ralph Castain: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20403.php">Ralph Castain: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20403.php">Ralph Castain: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20409.php">Iliev, Hristo: "Re: [OMPI users] unacceptable latency in gathering process"</a>
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
