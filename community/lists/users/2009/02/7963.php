<?
$subject_val = "Re: [OMPI users] signal 15 (terminated)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 08:54:01 2009" -->
<!-- isoreceived="20090204135401" -->
<!-- sent="Wed, 4 Feb 2009 08:53:56 -0500" -->
<!-- isosent="20090204135356" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] signal 15 (terminated)" -->
<!-- id="970A65FF-C243-495B-8D87-491F24356CA8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="820470.91725.qm_at_web111211.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] signal 15 (terminated)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 08:53:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7964.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7962.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2009, at 10:15 PM, Hana Milani wrote:
<br>
<p><span class="quotelev1">&gt; sorry if I didn't answer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you checked to ensure that the job manager is not killing your  
</span><br>
<span class="quotelev1">&gt; job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not quite sure what you mean by job manager, but, this is the  
</span><br>
<span class="quotelev1">&gt; personal computer of mine. Much to my surprise, I have also open  
</span><br>
<span class="quotelev1">&gt; suse on my laptop, took the similar procedure then the same message  
</span><br>
<span class="quotelev1">&gt; appeared !!!!
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; Is there a local system administrator that you can talk to about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a very good one, but I asked someone who had seen this message  
</span><br>
<span class="quotelev1">&gt; on his own works and this was his answer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It means that the program corresponding to the process identifier  
</span><br>
<span class="quotelev1">&gt; 2407 (the PID you can find on the second column from the &quot;ps aux&quot;  
</span><br>
<span class="quotelev1">&gt; command) running on one of you cluster's node (named linux-4pel) has  
</span><br>
<span class="quotelev1">&gt; stopped because it has received the signal SIGTERM (termination  
</span><br>
<span class="quotelev1">&gt; signal 15). Sorry if this is a long explanation of things you  
</span><br>
<span class="quotelev1">&gt; already know :-). Let's say thay you have a program running on your  
</span><br>
<span class="quotelev1">&gt; system ; you can figure out its process ID number nnnnn by doing a  
</span><br>
<span class="quotelev1">&gt; &quot;ps aux&quot;. Now if you want to stop it - f.e. because it is out of  
</span><br>
<span class="quotelev1">&gt; control - a convenient way is to send a termination request to the  
</span><br>
<span class="quotelev1">&gt; process by issuing the &quot;kill -s SIGTERM nnnnn&quot;. Here, openmpi  
</span><br>
<span class="quotelev1">&gt; notified to you  that one of the spawned processes has been  
</span><br>
<span class="quotelev1">&gt; terminated because it has received the SIGTERM signal and, as a  
</span><br>
<span class="quotelev1">&gt; consequence, has stopped all the other distributed processes running  
</span><br>
<span class="quotelev1">&gt; on the nodes - as PID 2407 process has acknowledged SIGTERM, openmpi  
</span><br>
<span class="quotelev1">&gt; has sent SIGTERM to all the processes associated to your parallel run.
</span><br>
<p>This is exactly correct.
<br>
<p><span class="quotelev1">&gt; Now ... how to avoid this? I am afraid there is no easy answer. The  
</span><br>
<span class="quotelev1">&gt; 2407 process has probably received a SIGTERM from another  
</span><br>
<span class="quotelev1">&gt; application - I mean it has not died by accident (a hanging or  
</span><br>
<span class="quotelev1">&gt; faulting process exits without invoking the MPI_FINALYZE and  
</span><br>
<span class="quotelev1">&gt; produces a different error message). The difficulty is that you have  
</span><br>
<span class="quotelev1">&gt; to investigate what application has issued the SIGTERM - what  
</span><br>
<span class="quotelev1">&gt; application has told your 2407 process to terminate.
</span><br>
<p>Also exactly correct.
<br>
<p><span class="quotelev1">&gt; If you are working on a cluster managing the MPI distributed  
</span><br>
<span class="quotelev1">&gt; processes to the nodes with a resource manager (like SLURM, PBS or  
</span><br>
<span class="quotelev1">&gt; Torque), I would check if the manager is not limiting the memory  
</span><br>
<span class="quotelev1">&gt; size footprint or the CPU time of the jobs accepted by the  
</span><br>
<span class="quotelev1">&gt; linux-4pel computer.
</span><br>
<p>This is what I was asking you; you're telling me that you have no  
<br>
resource manager, and therefore this probably isn't the cause.  But  
<br>
*something* is killing your app with a SIGTERM.
<br>
<p><span class="quotelev1">&gt; It is tricky for me to figure out what could have asked your program  
</span><br>
<span class="quotelev1">&gt; to stop ... does it stops immediately or during a long run (CPU  
</span><br>
<span class="quotelev1">&gt; time?), with small jobs or large ones (memory?) ; is MPI running on  
</span><br>
<span class="quotelev1">&gt; a personal computer or a huge cluster (resource manager?), do you  
</span><br>
<span class="quotelev1">&gt; have sufficient privileges to have a look on /var/log/messages on  
</span><br>
<span class="quotelev1">&gt; linux-4pel?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The code stops running immediately. 2. The computers are my  
</span><br>
<span class="quotelev1">&gt; personal ones and no administrator has limited the 7.9 GiB memory I  
</span><br>
<span class="quotelev1">&gt; have. 3. Sequentially the run takes 500-700MiB memory.
</span><br>
<p>Is this a Fortran program, perchance?
<br>
<p>Do you have access to the source code?  I wonder if the program is  
<br>
internally raising an error and effectively aborting itself.  Do you  
<br>
know that the application runs correctly?  Do you have any test data  
<br>
sets that you can try that give known outputs?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7964.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7962.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7990.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
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
