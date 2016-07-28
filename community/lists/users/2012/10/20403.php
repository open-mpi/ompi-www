<?
$subject_val = "Re: [OMPI users] unacceptable latency in gathering process";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 13:00:29 2012" -->
<!-- isoreceived="20121003170029" -->
<!-- sent="Wed, 3 Oct 2012 10:00:21 -0700" -->
<!-- isosent="20121003170021" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unacceptable latency in gathering process" -->
<!-- id="61A233BA-AF44-469F-A245-E89EB7016B6A_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 13:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20404.php">Jeff Squyres: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Previous message:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<li><strong>In reply to:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20405.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20405.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Out of curiosity, have you logged the time when the SP called &quot;send&quot; and compared it to the time when the message was received, and when that message is picked up in MPI_Test? In other words, have you actually verified that the delay is in the MPI library as opposed to in your application?
<br>
<p><p>On Oct 3, 2012, at 9:40 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I am running on an IBM BladeCenter, using Open MPI 1.4.1, and opensm subnet manager for Infiniband
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Our application has real time requirements and it has recently been proven that it does not scale to meet future requirements.
</span><br>
<span class="quotelev1">&gt; Presently, I am re-organizing the application to process work in a more parallel manner then it does now.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jobs arrive at the rate of 200 per second and are sub-divided into groups of objects by a master process (MP) on its own node.
</span><br>
<span class="quotelev1">&gt; The MP then assigns the object groups to 20 slave processes (SP), each running on their own node, to do the expensive computational work in parallel.
</span><br>
<span class="quotelev1">&gt; The SPs then send their results to a gatherer process (GP) on its own node that merges the results for the job and sends it onward for final processing.
</span><br>
<span class="quotelev1">&gt; The highest latency for the last 1024 jobs that were processed is then written to a log file that is displayed by a GUI.
</span><br>
<span class="quotelev1">&gt; Each process uses the same controller method for sending and  receiving messages as follows:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For (each CPU that sends us input)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(&#133;.)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; While (true)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;                 For (each CPU that sends us input)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; MPI_Test(&#133;.)
</span><br>
<span class="quotelev1">&gt; If (message was received)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;                 Copy the message
</span><br>
<span class="quotelev1">&gt; Queue the copy to our input queue
</span><br>
<span class="quotelev1">&gt;                 MPI_Irecv(&#133;)
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; If (there are messages on our input queue)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;                 &#133; process the FIRST message on queue (this may queue messages for output) &#133;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                 For (each message on our output queue)
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                                 MPI_Send(&#133;)
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; }             
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My problem is that I do not meet our applications performance requirements for a job (~ 20 ms) until I reduce the number of SPs from 20 to 4 or less.
</span><br>
<span class="quotelev1">&gt; I added some debug into the GP and found that there are never more than 14 messages received in the for loop that calls MPI_Test.
</span><br>
<span class="quotelev1">&gt; The messages that were sent from the other 6 SPs will eventually arrive at the GP in a long stream after experiencing high latency (over 600 ms).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Going forward, we need to handle more objects per job and will need to have more than 4 SPs to keep up.
</span><br>
<span class="quotelev1">&gt; My thought is that I have to obey this 4 SPs to 1 GP ratio and create intermediate GPs to gather results from every 4 slaves.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is this a contention problem at the GP?
</span><br>
<span class="quotelev1">&gt; Is there debugging or logging I can turn on in the MPI to prove that contention is occurring?
</span><br>
<span class="quotelev1">&gt; Can I configure MPI receive processing to improve upon the 4 to 1 ratio?
</span><br>
<span class="quotelev1">&gt; Can I improve the controller method (listed above) to gain a performance improvement?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for any suggestions.
</span><br>
<span class="quotelev1">&gt; Gary Hodge
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20404.php">Jeff Squyres: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Previous message:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<li><strong>In reply to:</strong> <a href="20402.php">Hodge, Gary C: "[OMPI users] unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20405.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
<li><strong>Reply:</strong> <a href="20405.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering process"</a>
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
