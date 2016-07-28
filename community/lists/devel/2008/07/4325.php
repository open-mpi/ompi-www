<?
$subject_val = "[OMPI devel] User request: add envar?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 16:19:24 2008" -->
<!-- isoreceived="20080711201924" -->
<!-- sent="Fri, 11 Jul 2008 14:19:15 -0600" -->
<!-- isosent="20080711201915" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] User request: add envar?" -->
<!-- id="C49D1C63.E46B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] User request: add envar?<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 16:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4326.php">George Bosilca: "Re: [OMPI devel] SM latency regression"</a>
<li><strong>Previous message:</strong> <a href="4324.php">Terry Dontje: "[OMPI devel] SM latency regression"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>For those not following the user list, this request was generated today:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; Absolutely, these are useful time and time again so should be part of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the API and hence stable.  Care to mention what they are and I'll add it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to my note as something to change when upgrading to 1.3 (we are looking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at testing a snapshot in the near future).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Surely:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_COMM_WORLD_SIZE            #procs in the job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_COMM_WORLD_LOCAL_SIZE      #procs in this job that are sharing the node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_UNIVERSE_SIZE              total #slots allocated to this user
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 (across all nodes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_COMM_WORLD_RANK            proc's rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_COMM_WORLD_LOCAL_RANK      local rank on node - lowest rank'd proc on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                 the node is given local_rank=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there are others that would be useful, now is definitely the time to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; speak up!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only other one I'd like to see is some kind of global identifier for
</span><br>
<span class="quotelev2">&gt;&gt; the job but as far as I can see I don't believe that openmpi has such a
</span><br>
<span class="quotelev2">&gt;&gt; concept.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really - of course, many environments have a jobid they assign at time
</span><br>
<span class="quotelev1">&gt; of allocation. We could create a unified identifier from that to ensure a
</span><br>
<span class="quotelev1">&gt; consistent name was always available, but the problem would be that not all
</span><br>
<span class="quotelev1">&gt; environments provide it (e.g., rsh). To guarantee that the variable would
</span><br>
<span class="quotelev1">&gt; always be there, we would have to make something up in those cases.
</span><br>
<p>I could easily create such an envar, even for non-managed environments. The
<br>
plan would be to use the RM-provided jobid where one was available, and to
<br>
use the mpirun jobid where not.
<br>
<p>My thought was to call it OMPI_JOB_ID, unless someone has another
<br>
suggestion.
<br>
<p>Any objection to my doing so, and/or suggestions on alternative
<br>
implementations?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4326.php">George Bosilca: "Re: [OMPI devel] SM latency regression"</a>
<li><strong>Previous message:</strong> <a href="4324.php">Terry Dontje: "[OMPI devel] SM latency regression"</a>
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
