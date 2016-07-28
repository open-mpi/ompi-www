<?
$subject_val = "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 15:23:49 2008" -->
<!-- isoreceived="20080930192349" -->
<!-- sent="Tue, 30 Sep 2008 13:23:40 -0600" -->
<!-- isosent="20080930192340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration" -->
<!-- id="94991C89-DEA5-4CB6-B1DF-551DF72899A7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6404E7DF-633F-47E6-81B6-F3BCEC1A3618_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 15:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Previous message:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that we would also have to modify OMPI to:
<br>
<p>1. recognize these environmental variables, and
<br>
<p>2. use them to actually set the binding, instead of using OMPI- 
<br>
internal directives
<br>
<p>Not a big deal to do, but not something currently in the system. Since  
<br>
we launch through our own daemons (something that isn't likely to  
<br>
change in your time frame), these changes would be required.
<br>
<p>Otherwise, we could come up with some method by which you could  
<br>
provide mapper information we use. While I agree with Jeff that having  
<br>
you tell us which cores to use for each rank would generally be  
<br>
better, it does raise issues when users want specific mapping  
<br>
algorithms that you might not support. For example, we are working on  
<br>
mappers that will take input from the user regarding comm topology  
<br>
plus system info on network wiring topology and generate a near- 
<br>
optimal mapping of ranks. As part of that, users may request some  
<br>
number of cores be reserved for that rank for threading or other  
<br>
purposes.
<br>
<p>So perhaps both  options would be best - give us the list of cores  
<br>
available to us so we can map and do affinity, and pass in your own  
<br>
mapping. Maybe with some logic so we can decide which to use based on  
<br>
whether OMPI or GE did the mapping??
<br>
<p>Not sure here - just thinking out loud.
<br>
Ralph
<br>
<p>On Sep 30, 2008, at 12:58 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 30, 2008, at 2:51 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Restarting this discussion. A new update version of Grid Engine 6.2
</span><br>
<span class="quotelev2">&gt;&gt; will come out early next year [1], and I really hope that we can get
</span><br>
<span class="quotelev2">&gt;&gt; at least the interface defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the minimum, is it enough for the batch system to tell OpenMPI via
</span><br>
<span class="quotelev2">&gt;&gt; an env variable which core (or virtual core, in the SMT case) to  
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev2">&gt;&gt; binding the first MPI task?? I guess an added bonus would be
</span><br>
<span class="quotelev2">&gt;&gt; information about the number of processors to skip (the stride)
</span><br>
<span class="quotelev2">&gt;&gt; between the sibling tasks?? Stride of one is usually the case, but
</span><br>
<span class="quotelev2">&gt;&gt; something larger than one would allow the batch system to control the
</span><br>
<span class="quotelev2">&gt;&gt; level of cache and memory bandwidth sharing between the MPI tasks...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wouldn't it be better to give us a specific list of cores to bind  
</span><br>
<span class="quotelev1">&gt; to?  As core counts go up in servers, I think we may see a re- 
</span><br>
<span class="quotelev1">&gt; emergence of having multiple MPI jobs on a single server.  And as  
</span><br>
<span class="quotelev1">&gt; core counts go even *higher*, then fragmentation of available cores  
</span><br>
<span class="quotelev1">&gt; over time is possible/likely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you be giving us a list of *relative* cores to bind to (i.e.,  
</span><br>
<span class="quotelev1">&gt; &quot;bind to the Nth online core on the machine&quot; -- which may be  
</span><br>
<span class="quotelev1">&gt; different than the OS's ID for that processor) or will you be giving  
</span><br>
<span class="quotelev1">&gt; us the actual OS virtual processor ID(s) to bind to?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/10/4722.php">Jeff Squyres: "Re: [OMPI devel] RDMA CM CPC HG ready again"</a>
<li><strong>Previous message:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>In reply to:</strong> <a href="4720.php">Jeff Squyres: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
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
