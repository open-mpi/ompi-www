<?
$subject_val = "Re: [OMPI users] unacceptable latency in gathering process";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 05:02:03 2012" -->
<!-- isoreceived="20121004090203" -->
<!-- sent="Thu, 04 Oct 2012 09:01:56 +0000" -->
<!-- isosent="20121004090156" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unacceptable latency in gathering process" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9031513D3_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3258BBCAE92D924BB7419ABF3554AC04110F9C_at_HVXDSP24.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unacceptable latency in gathering process<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 05:01:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20408.php">Siegmar Gross: "[OMPI users] remark on process mapping"</a>
<li><strong>In reply to:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>I would suggest that (if you haven't done it already) you trace your
<br>
program's execution with Vampir or Scalasca. The latter has some pretty nice
<br>
analysis capabilities built-in and can detect common patterns that would
<br>
make your code not to scale, no matter how good the MPI library is. Also
<br>
Open MPI has many knobs that you can tune via MCA parameters. Start with the
<br>
general tuning FAQ:
<br>
<p>&nbsp;
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a>
<br>
<p>&nbsp;
<br>
<p>then move to the InfiniBand tuning FAQ:
<br>
<p>&nbsp;
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Hodge, Gary C
Sent: Wednesday, October 03, 2012 6:41 PM
To: users_at_[hidden]
Subject: [OMPI users] unacceptable latency in gathering process
 
Hi all,
I am running on an IBM BladeCenter, using Open MPI 1.4.1, and opensm subnet
manager for Infiniband
 
Our application has real time requirements and it has recently been proven
that it does not scale to meet future requirements.
Presently, I am re-organizing the application to process work in a more
parallel manner then it does now.
 
Jobs arrive at the rate of 200 per second and are sub-divided into groups of
objects by a master process (MP) on its own node.
The MP then assigns the object groups to 20 slave processes (SP), each
running on their own node, to do the expensive computational work in
parallel.
The SPs then send their results to a gatherer process (GP) on its own node
that merges the results for the job and sends it onward for final
processing.
The highest latency for the last 1024 jobs that were processed is then
written to a log file that is displayed by a GUI.
Each process uses the same controller method for sending and  receiving
messages as follows:
 
For (each CPU that sends us input)
{
MPI_Irecv(..)
}
 
While (true)
{
                For (each CPU that sends us input)
{
MPI_Test(..)
If (message was received)
{
                Copy the message
Queue the copy to our input queue
                MPI_Irecv(.) 
}
}
If (there are messages on our input queue)
{
                . process the FIRST message on queue (this may queue
messages for output) ..
 
                For (each message on our output queue)
                {
                                MPI_Send(.)
                }
}              
}
 
My problem is that I do not meet our applications performance requirements
for a job (~ 20 ms) until I reduce the number of SPs from 20 to 4 or less.
I added some debug into the GP and found that there are never more than 14
messages received in the for loop that calls MPI_Test.
The messages that were sent from the other 6 SPs will eventually arrive at
the GP in a long stream after experiencing high latency (over 600 ms).
 
Going forward, we need to handle more objects per job and will need to have
more than 4 SPs to keep up.
My thought is that I have to obey this 4 SPs to 1 GP ratio and create
intermediate GPs to gather results from every 4 slaves.
 
Is this a contention problem at the GP?
Is there debugging or logging I can turn on in the MPI to prove that
contention is occurring?
Can I configure MPI receive processing to improve upon the 4 to 1 ratio?
Can I improve the controller method (listed above) to gain a performance
improvement?
 
Thanks for any suggestions.
Gary Hodge
 
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20409/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20408.php">Siegmar Gross: "[OMPI users] remark on process mapping"</a>
<li><strong>In reply to:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
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
