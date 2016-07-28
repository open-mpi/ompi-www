<?
$subject_val = "[OMPI users] Job distribution on many-core NUMA system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 12:39:57 2009" -->
<!-- isoreceived="20090828163957" -->
<!-- sent="Fri, 28 Aug 2009 12:39:52 -0400" -->
<!-- isosent="20090828163952" -->
<!-- name="A. Austen" -->
<!-- email="metallurgist_at_[hidden]" -->
<!-- subject="[OMPI users] Job distribution on many-core NUMA system" -->
<!-- id="1251477592.27185.1332105893_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> [OMPI users] Job distribution on many-core NUMA system<br>
<strong>From:</strong> A. Austen (<em>metallurgist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 12:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10510.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Reply:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
<p>I apologize if this has been addressed in the FAQ or on the mailing
<br>
list, but I spent a fair amount of time searching both and found no
<br>
direct answers.
<br>
<p>I use OpenMPI, currently version 1.3.2, on an 8-way quad-core AMD
<br>
Opteron machine.  So 32 cores in total.  The computer runs a modern 2.6
<br>
family Linux kernel.  I don't at the present time use a resource manager
<br>
like SLURM, since there is at most one other user and we don't step on
<br>
each others' toes.
<br>
<p>What I find is that when I launch MPI jobs, I don't see the processes
<br>
packed optimally onto the cores.  I think OMPI should try to place jobs
<br>
in such a way that the tasks fill up all four cores of one socket, then
<br>
as many cores as necessary on the next socket, and so on.
<br>
<p>So for example, if I want to run 6 tasks, each of which needs 4
<br>
processors, I can see that as I start the jobs up, the processes for
<br>
each job get distributed without regard to NUMA optimality -- 2 of them
<br>
might be on processor A, 1 on processor B, and the fourth on processor
<br>
C.  Since I have dynamic clocking enabled, I can check this by looking
<br>
at /proc/cpuinfo (see what the clock speeds are on each core when the
<br>
system is otherwise quiescent), or by using top and turning on the
<br>
display for each processor.
<br>
<p>Obviously, in terms of maximizing performance, this is bad.  Once I
<br>
start getting up to say 5 of the 4-processor jobs, I can see
<br>
computational throughput degrade heavily.  I would hypothesize there is
<br>
heavy contention on the HyperTransport links.
<br>
<p>I saw the processor and memory affinity options, but that seems to
<br>
address a different problem -- namely, keep the jobs pinned to specific
<br>
resources.  I also want that, but it's not the same issue as I discussed
<br>
above.
<br>
<p>So, I guess I have several questions:
<br>
<p>1. Is there any way to have OpenMPI automatically tell Linux via its
<br>
affinity and NUMA-related APIs that the OMPI jobs should be scheduled in
<br>
such a way that they fill the cores on particular sockets, and try to
<br>
use adjacent sockets?
<br>
<p>2. I think the rankfile may be the way for me to address this issue, but
<br>
do I need to have a different rankfile for each job?  The FAQ shows the
<br>
ability to wildcard the &quot;core&quot; number/ID field.  Is there a way to
<br>
wildcard the socket field, but not the core field, that is tell OMPI I
<br>
don't care what socket you choose, but the job should always be mapped
<br>
onto the cores of a single socket?  The latter might not make sense for
<br>
a job using more than the number of cores per socket, but it would be
<br>
useful in that case.  On a job needing say more than 4 processes on a
<br>
quad-core, it probably makes sense to specifically tell OMPI which
<br>
sockets to use as well, to try to maintain the smallest number of
<br>
processor hops.
<br>
<p>3. If my understanding is correct, and a rankfile will help me solve
<br>
this problem, can I safely turn on processor and memory affinity such
<br>
that the different OMPI jobs I manually launched will not vie for
<br>
affinity on the same processor cores/memory chunks?
<br>
<p>Thank you.
<br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - Same, same, but different...
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Previous message:</strong> <a href="10510.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Reply:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
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
