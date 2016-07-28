<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 11:07:51 2010" -->
<!-- isoreceived="20100504150751" -->
<!-- sent="04 May 2010 16:07:47 +0100" -->
<!-- isosent="20100504150747" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing" -->
<!-- id="Prayer.1.3.2.1005041607470.1846_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2B66593B-FACA-4AD5-B6A7-DE55BFFA1D57_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 11:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7891.php">Ralph Castain: "[OMPI devel] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 4 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; If there's a sleep(1) in the run-time test, that would be an annoying 
</span><br>
<span class="quotelev1">&gt; source of delay in the startup of a job. This is not a deal-breaker, but 
</span><br>
<span class="quotelev1">&gt; it would be nice(r) if there was a &quot;fast&quot; run-time check that could be 
</span><br>
<span class="quotelev1">&gt; checked during the sysv selection logic (i.e., sysv could disqualify 
</span><br>
<span class="quotelev1">&gt; itself if the feature is not available at runtime). Keep in mind that the 
</span><br>
<span class="quotelev1">&gt; run-time check will be run in parallel across the whole job, so it's 
</span><br>
<span class="quotelev1">&gt; (more or less) a constant amount of time that is added to job startup.
</span><br>
<p>Yes.  I was thinking more of a configuration test and would recommend a
<br>
higher value - sleep(1) is a bit unpredictable as to whether it returns
<br>
almost immediately.
<br>
<p>In the absence of a proper specification of such facilities, it really
<br>
comes down to which is the least unsatisfactory piece of guesswork :-(
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7891.php">Ralph Castain: "[OMPI devel] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="7889.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for OpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7886.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
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
