<?
$subject_val = "Re: [OMPI users] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 20:11:16 2010" -->
<!-- isoreceived="20100928001116" -->
<!-- sent="Mon, 27 Sep 2010 17:11:01 -0700" -->
<!-- isosent="20100928001101" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory affinity" -->
<!-- id="4CA13295.4070309_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CA1118C.7010200_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory affinity<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 20:11:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14350.php">Randolph Pullen: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Previous message:</strong> <a href="14348.php">David Zhang: "[OMPI users] mpi_in_place not working in mpi_allreduce"</a>
<li><strong>In reply to:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 9/27/2010 2:50 PM, David Singleton wrote:
<br>
<span class="quotelev1">&gt; On 09/28/2010 06:52 AM, Tim Prince wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 9/27/2010 12:21 PM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HI Tim,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have read that link, but I haven't understood if enabling processor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affinity are enabled also memory affinity because is written that:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Note that memory affinity support is enabled only when processor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; affinity is enabled&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can i set processory affinity without memory affinity? This is my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; question..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2010/9/27 Tim Prince&lt;n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 9/27/2010 9:01 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if OpenMPI is numa-compiled, memory affinity is enabled by default?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Because I didn't find memory affinity alone ( similar) parameter to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; set at 1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The FAQ <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; has a useful introduction to affinity. It's available in a default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build, but not enabled by default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Memory affinity is implied by processor affinity. Your system libraries
</span><br>
<span class="quotelev2">&gt;&gt; are set up so as to cause any memory allocated to be made local to the
</span><br>
<span class="quotelev2">&gt;&gt; processor, if possible. That's one of the primary benefits of processor
</span><br>
<span class="quotelev2">&gt;&gt; affinity. Not being an expert in openmpi, I assume, in the absence of
</span><br>
<span class="quotelev2">&gt;&gt; further easily accessible documentation, there's no useful explicit way
</span><br>
<span class="quotelev2">&gt;&gt; to disable maffinity while using paffinity on platforms other than the
</span><br>
<span class="quotelev2">&gt;&gt; specified legacy platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memory allocation policy really needs to be independent of processor
</span><br>
<span class="quotelev1">&gt; binding policy.  The default memory policy (memory affinity) of &quot;attempt
</span><br>
<span class="quotelev1">&gt; to allocate to the NUMA node of the cpu that made the allocation request
</span><br>
<span class="quotelev1">&gt; but fallback as needed&quot; is flawed in a number of situations.  This is 
</span><br>
<span class="quotelev1">&gt; true
</span><br>
<span class="quotelev1">&gt; even when MPI jobs are given dedicated access to processors.  A common 
</span><br>
<span class="quotelev1">&gt; one is
</span><br>
<span class="quotelev1">&gt; where the local NUMA node is full of pagecache pages (from the checkpoint
</span><br>
<span class="quotelev1">&gt; of the last job to complete).  For those sites that support 
</span><br>
<span class="quotelev1">&gt; suspend/resume
</span><br>
<span class="quotelev1">&gt; based scheduling, NUMA nodes will generally contain pages from suspended
</span><br>
<span class="quotelev1">&gt; jobs. Ideally, the new (suspending) job should suffer a little bit of 
</span><br>
<span class="quotelev1">&gt; paging
</span><br>
<span class="quotelev1">&gt; overhead (pushing out the suspended job) to get ideal memory placement 
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; the next 6 or whatever hours of execution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An mbind (MPOL_BIND) policy of binding to the one local NUMA node will 
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; work in the case of one process requiring more memory than that local 
</span><br>
<span class="quotelev1">&gt; NUMA
</span><br>
<span class="quotelev1">&gt; node.  One scenario is a master-slave where you might want:
</span><br>
<span class="quotelev1">&gt;   master (rank 0) bound to processor 0 but not memory bound
</span><br>
<span class="quotelev1">&gt;   slave (rank i) bound to processor i and memory bound to the local 
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt;         of processor i.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They really are independent requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
interesting; I agree with those of your points on which I have enough 
<br>
experience to have an opinion.
<br>
However, the original question was not whether it would be desirable to 
<br>
have independent memory affinity, but whether it is possible currently 
<br>
within openmpi to avoid memory placements being influenced by processor 
<br>
affinity.
<br>
I have seen the case you mention, where performance of a long job 
<br>
suffers because the state of memory from a previous job results in an 
<br>
abnormal number of allocations falling over to other NUMA nodes, but I 
<br>
don't know the practical solution.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14350.php">Randolph Pullen: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Previous message:</strong> <a href="14348.php">David Zhang: "[OMPI users] mpi_in_place not working in mpi_allreduce"</a>
<li><strong>In reply to:</strong> <a href="14347.php">David Singleton: "Re: [OMPI users] Memory affinity"</a>
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
