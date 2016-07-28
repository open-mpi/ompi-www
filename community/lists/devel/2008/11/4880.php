<?
$subject_val = "Re: [OMPI devel] Progress of the asynchronous messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 16:50:28 2008" -->
<!-- isoreceived="20081110215028" -->
<!-- sent="Mon, 10 Nov 2008 13:50:18 -0800" -->
<!-- isosent="20081110215018" -->
<!-- name="Nifty niftyompi Mitch" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Progress of the asynchronous messages" -->
<!-- id="20081110215018.GA3404_at_compegg.wr.niftyegg.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="024B6BB8-56A4-4DE2-A368-A07B97F8D533_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Progress of the asynchronous messages<br>
<strong>From:</strong> Nifty niftyompi Mitch (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 16:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4881.php">Brad Benton: "[OMPI devel] Call for Testing of the upcoming v1.3 release candidate"</a>
<li><strong>Previous message:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 06, 2008 at 03:04:13PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the web archives: this same question was posted and answered on the 
</span><br>
<span class="quotelev1">&gt; users list.  See this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2008/11/7222.php">http://www.open-mpi.org/community/lists/users/2008/11/7222.php</a>
</span><br>
<p>Good thread... one possible omission is the possible replacement of
<br>
the sleep(1) with sched_yield() to get some overlap with other system
<br>
activity.   
<br>
<p>As a general rule tight test loops should be aware of the max
<br>
and minimum times for the test to change to true.    Retesting
<br>
the flag sooner than the minimum time invites system contention.
<br>
Waiting longer than the max time wastes resources.
<br>
<p>The loop should know if the state of the object being tested will change
<br>
without local CPU activity.  If the CPU you are executing the test loop on
<br>
is the same CPU/core that will finish the transaction then a sched_yield()
<br>
is a very good thing.
<br>
<p>Also knowing if the test itself impacts the system is important (example:
<br>
cache line contention or system call).
<br>
<p>MPI is interesting because for some hardware a lot of work is done in
<br>
user space and a &quot;sleep()&quot; or &quot;sched_yield()&quot; gets no MPI work done.
<br>
Other transport code moves data with system calls (example: tcp/ip)
<br>
where yielding gives the system an opportunity to work any IO queue,
<br>
or interrupt that might be pending.
<br>
<p>To point...
<br>
<span class="quotelev2">  &gt;&gt; vladimir marjanovic wrote:
</span><br>
<span class="quotelev3">  &gt;&gt;&gt;
</span><br>
<span class="quotelev3">  &gt;&gt;&gt; In order to overlap communication and computation
</span><br>
<p>Communication requires work in the form of {small, medium, large}
<br>
interaction with a processor.   Work is work and overlap is strictly
<br>
not possible.  Thus the problem is scheduling for minimum conflict
<br>
which is just hard to solve in the general set of cases since scheduling
<br>
is work too.  Thus &quot;sched_yield()&quot; may help.    
<br>
<p><p><p><span class="quotelev1">&gt; On Nov 6, 2008, at 1:00 PM, vladimir marjanovic wrote:
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; I am new user of Open MPI, I've used MPICH before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried on the user list but they couldn't help me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is performance bug with the following scenario:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_B:  MPI_Isend(...,proc_A,..,&amp;request)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 do{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   sleep(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MPI_Test(..,&amp;flag,&amp;request);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   count++
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 }while(!flag);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_A: MPI_Recv(...,proc_B);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For message size 8MB,  proc_B calls MPI_Test 88 times. It means that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point to point communication costs 88 seconds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Btw, bandwidth isn't the problem (interconnection network:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; InfiniBand)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Obviously, there is the problem with progress of the asynchronous  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages.  In order to overlap communication and computation I don't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to use MPI_Wait.  Probably, the message is being decomposed into 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chucks and the size of chuck is probably defined by environment 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  How can I advance the message more aggressively or can I control  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size of chunk?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vladimir
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4881.php">Brad Benton: "[OMPI devel] Call for Testing of the upcoming v1.3 release candidate"</a>
<li><strong>Previous message:</strong> <a href="4879.php">Josh Hursey: "Re: [OMPI devel] Error after ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="4858.php">Jeff Squyres: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
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
