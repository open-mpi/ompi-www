<?
$subject_val = "Re: [OMPI users] Job distribution on many-core NUMA system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 13:15:24 2009" -->
<!-- isoreceived="20090828171524" -->
<!-- sent="Fri, 28 Aug 2009 10:16:09 -0700" -->
<!-- isosent="20090828171609" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job distribution on many-core NUMA system" -->
<!-- id="4A9810D9.1000806_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1251477592.27185.1332105893_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job distribution on many-core NUMA system<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 13:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10511.php">A. Austen: "[OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>In reply to:</strong> <a href="10511.php">A. Austen: "[OMPI users] Job distribution on many-core NUMA system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Reply:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Big topic and actually the subject of much recent discussion.  Here are 
<br>
a few comments:
<br>
<p>1)  &quot;Optimally&quot; depends on what you're doing.  A big issue is making 
<br>
sure each MPI process gets as much memory bandwidth (and cache and other 
<br>
shared resources) as possible.   This would argue that processes 
<br>
*should* be spread over as many sockets as possible.  And, indeed, some 
<br>
MPIs default to this behavior.  It depends on lots of things, including 
<br>
how much of the machine you're using.
<br>
<p>2)  Currently (1.3.2), there is rankfile support.  This is probably a 
<br>
little bit more gruesome than you hope for.  E.g., if you have multiple 
<br>
jobs, you need to custom tailor the rankfile for each.  Another heavy 
<br>
hammer might be to write scripts that, depending on job and process rank 
<br>
and stuff, launches the MPI process using numactl.  I'm not convinced 
<br>
you want to go that route, but at some level it offers you the ability 
<br>
to do what you're asking for.
<br>
<p>3)  Soon, (1.3.4?, or use the trunk) there should be some richer support 
<br>
including bind-to-socket, bind-to-core, etc.  I happen to like 
<br>
bind-to-socket.  Sounds like you like bind-to-core.  Ralph's putbacks 
<br>
should make each of us happy.  But if multiple jobs are being launched, 
<br>
you might still not yet like the extent of the functionality.
<br>
<p>4)  The default behavior of the OS may depend on the OS, the BIOS (which 
<br>
numbers the cores), etc.
<br>
<p>Caveat:  this note is hastily written with fuzzy knowledge of the status 
<br>
of all the subissues.  Just a quick message to start what I think will 
<br>
in any case be a long e-mail thread.
<br>
<p>A. Austen wrote:
<br>
<p><span class="quotelev1">&gt;Hello all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I apologize if this has been addressed in the FAQ or on the mailing
</span><br>
<span class="quotelev1">&gt;list, but I spent a fair amount of time searching both and found no
</span><br>
<span class="quotelev1">&gt;direct answers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I use OpenMPI, currently version 1.3.2, on an 8-way quad-core AMD
</span><br>
<span class="quotelev1">&gt;Opteron machine.  So 32 cores in total.  The computer runs a modern 2.6
</span><br>
<span class="quotelev1">&gt;family Linux kernel.  I don't at the present time use a resource manager
</span><br>
<span class="quotelev1">&gt;like SLURM, since there is at most one other user and we don't step on
</span><br>
<span class="quotelev1">&gt;each others' toes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What I find is that when I launch MPI jobs, I don't see the processes
</span><br>
<span class="quotelev1">&gt;packed optimally onto the cores.  I think OMPI should try to place jobs
</span><br>
<span class="quotelev1">&gt;in such a way that the tasks fill up all four cores of one socket, then
</span><br>
<span class="quotelev1">&gt;as many cores as necessary on the next socket, and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So for example, if I want to run 6 tasks, each of which needs 4
</span><br>
<span class="quotelev1">&gt;processors, I can see that as I start the jobs up, the processes for
</span><br>
<span class="quotelev1">&gt;each job get distributed without regard to NUMA optimality -- 2 of them
</span><br>
<span class="quotelev1">&gt;might be on processor A, 1 on processor B, and the fourth on processor
</span><br>
<span class="quotelev1">&gt;C.  Since I have dynamic clocking enabled, I can check this by looking
</span><br>
<span class="quotelev1">&gt;at /proc/cpuinfo (see what the clock speeds are on each core when the
</span><br>
<span class="quotelev1">&gt;system is otherwise quiescent), or by using top and turning on the
</span><br>
<span class="quotelev1">&gt;display for each processor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Obviously, in terms of maximizing performance, this is bad.  Once I
</span><br>
<span class="quotelev1">&gt;start getting up to say 5 of the 4-processor jobs, I can see
</span><br>
<span class="quotelev1">&gt;computational throughput degrade heavily.  I would hypothesize there is
</span><br>
<span class="quotelev1">&gt;heavy contention on the HyperTransport links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I saw the processor and memory affinity options, but that seems to
</span><br>
<span class="quotelev1">&gt;address a different problem -- namely, keep the jobs pinned to specific
</span><br>
<span class="quotelev1">&gt;resources.  I also want that, but it's not the same issue as I discussed
</span><br>
<span class="quotelev1">&gt;above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So, I guess I have several questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Is there any way to have OpenMPI automatically tell Linux via its
</span><br>
<span class="quotelev1">&gt;affinity and NUMA-related APIs that the OMPI jobs should be scheduled in
</span><br>
<span class="quotelev1">&gt;such a way that they fill the cores on particular sockets, and try to
</span><br>
<span class="quotelev1">&gt;use adjacent sockets?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. I think the rankfile may be the way for me to address this issue, but
</span><br>
<span class="quotelev1">&gt;do I need to have a different rankfile for each job?  The FAQ shows the
</span><br>
<span class="quotelev1">&gt;ability to wildcard the &quot;core&quot; number/ID field.  Is there a way to
</span><br>
<span class="quotelev1">&gt;wildcard the socket field, but not the core field, that is tell OMPI I
</span><br>
<span class="quotelev1">&gt;don't care what socket you choose, but the job should always be mapped
</span><br>
<span class="quotelev1">&gt;onto the cores of a single socket?  The latter might not make sense for
</span><br>
<span class="quotelev1">&gt;a job using more than the number of cores per socket, but it would be
</span><br>
<span class="quotelev1">&gt;useful in that case.  On a job needing say more than 4 processes on a
</span><br>
<span class="quotelev1">&gt;quad-core, it probably makes sense to specifically tell OMPI which
</span><br>
<span class="quotelev1">&gt;sockets to use as well, to try to maintain the smallest number of
</span><br>
<span class="quotelev1">&gt;processor hops.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. If my understanding is correct, and a rankfile will help me solve
</span><br>
<span class="quotelev1">&gt;this problem, can I safely turn on processor and memory affinity such
</span><br>
<span class="quotelev1">&gt;that the different OMPI jobs I manually launched will not vie for
</span><br>
<span class="quotelev1">&gt;affinity on the same processor cores/memory chunks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10511.php">A. Austen: "[OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>In reply to:</strong> <a href="10511.php">A. Austen: "[OMPI users] Job distribution on many-core NUMA system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Reply:</strong> <a href="10513.php">A. Austen: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
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
