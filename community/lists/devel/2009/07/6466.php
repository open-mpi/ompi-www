<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 10:46:33 2009" -->
<!-- isoreceived="20090719144633" -->
<!-- sent="Sun, 19 Jul 2009 08:46:18 -0600" -->
<!-- isosent="20090719144618" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="B3E45BB8-CB84-4869-AC49-A61935F6C7FB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2083270505.798031248011653935.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-19 10:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6465.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6464.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something I should have mentioned. The paffinity_base_service.c  file  
<br>
is solely used by the rank_file syntax. It has nothing to do with  
<br>
setting mpi_paffinity_alone and letting OMPI self-determine the  
<br>
process-to-core binding.
<br>
<p>You want to dig into the linux module code that calls down into the  
<br>
plpa. The same mca param should give you messages from the module, and  
<br>
-might- give you messages from inside plpa (not sure of the latter).
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jul 19, 2009, at 7:54 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Chris Samuel&quot; &lt;csamuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll carry on digging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to track back from the linux
</span><br>
<span class="quotelev1">&gt; paffinity module to find some useful debugging
</span><br>
<span class="quotelev1">&gt; info I can get my teeth into and I can see that
</span><br>
<span class="quotelev1">&gt; the file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/base/paffinity_base_service.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; seems to have lots of useful debugging message that
</span><br>
<span class="quotelev1">&gt; should output what processes are getting bound where,
</span><br>
<span class="quotelev1">&gt; but they are often conditional on the diag_requested
</span><br>
<span class="quotelev1">&gt; variable.  It seems that diag_requested is set based
</span><br>
<span class="quotelev1">&gt; on this logic:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (4 &lt; opal_output_get_verbosity(opal_paffinity_base_output)) {
</span><br>
<span class="quotelev1">&gt;        diag_requested = true;
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        diag_requested = false;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I can't see what I have to set to make those messages
</span><br>
<span class="quotelev1">&gt; appear! I've been through the output of ompi_info -a in case
</span><br>
<span class="quotelev1">&gt; there was something listed there but nothing leapt out at me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clues please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
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
<li><strong>Next message:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Previous message:</strong> <a href="6465.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>In reply to:</strong> <a href="6464.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6467.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
