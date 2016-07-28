<?
$subject_val = "Re: [OMPI users] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 17:50:12 2010" -->
<!-- isoreceived="20100927215012" -->
<!-- sent="Tue, 28 Sep 2010 07:50:04 +1000" -->
<!-- isosent="20100927215004" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory affinity" -->
<!-- id="4CA1118C.7010200_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5282_1285620892_4CA1049C_5282_119092_1_4CA103F3.1080904_at_aol.com" -->
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
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 17:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14348.php">David Zhang: "[OMPI users] mpi_in_place not working in mpi_allreduce"</a>
<li><strong>Previous message:</strong> <a href="14346.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="14341.php">Gabriele Fatigati: "[OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/28/2010 06:52 AM, Tim Prince wrote:
<br>
<span class="quotelev1">&gt; On 9/27/2010 12:21 PM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt; HI Tim,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read that link, but I haven't understood if enabling processor
</span><br>
<span class="quotelev2">&gt;&gt; affinity are enabled also memory affinity because is written that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Note that memory affinity support is enabled only when processor
</span><br>
<span class="quotelev2">&gt;&gt; affinity is enabled&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can i set processory affinity without memory affinity? This is my
</span><br>
<span class="quotelev2">&gt;&gt; question..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2010/9/27 Tim Prince&lt;n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/27/2010 9:01 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if OpenMPI is numa-compiled, memory affinity is enabled by default?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because I didn't find memory affinity alone ( similar) parameter to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set at 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The FAQ <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has a useful introduction to affinity. It's available in a default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build, but not enabled by default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Memory affinity is implied by processor affinity. Your system libraries
</span><br>
<span class="quotelev1">&gt; are set up so as to cause any memory allocated to be made local to the
</span><br>
<span class="quotelev1">&gt; processor, if possible. That's one of the primary benefits of processor
</span><br>
<span class="quotelev1">&gt; affinity. Not being an expert in openmpi, I assume, in the absence of
</span><br>
<span class="quotelev1">&gt; further easily accessible documentation, there's no useful explicit way
</span><br>
<span class="quotelev1">&gt; to disable maffinity while using paffinity on platforms other than the
</span><br>
<span class="quotelev1">&gt; specified legacy platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Memory allocation policy really needs to be independent of processor
<br>
binding policy.  The default memory policy (memory affinity) of &quot;attempt
<br>
to allocate to the NUMA node of the cpu that made the allocation request
<br>
but fallback as needed&quot; is flawed in a number of situations.  This is true
<br>
even when MPI jobs are given dedicated access to processors.  A common one is
<br>
where the local NUMA node is full of pagecache pages (from the checkpoint
<br>
of the last job to complete).  For those sites that support suspend/resume
<br>
based scheduling, NUMA nodes will generally contain pages from suspended
<br>
jobs. Ideally, the new (suspending) job should suffer a little bit of paging
<br>
overhead (pushing out the suspended job) to get ideal memory placement for
<br>
the next 6 or whatever hours of execution.
<br>
<p>An mbind (MPOL_BIND) policy of binding to the one local NUMA node will not
<br>
work in the case of one process requiring more memory than that local NUMA
<br>
node.  One scenario is a master-slave where you might want:
<br>
&nbsp;&nbsp;&nbsp;master (rank 0) bound to processor 0 but not memory bound
<br>
&nbsp;&nbsp;&nbsp;slave (rank i) bound to processor i and memory bound to the local memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of processor i.
<br>
<p>They really are independent requirements.
<br>
<p>Cheers,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14348.php">David Zhang: "[OMPI users] mpi_in_place not working in mpi_allreduce"</a>
<li><strong>Previous message:</strong> <a href="14346.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="14341.php">Gabriele Fatigati: "[OMPI users] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
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
