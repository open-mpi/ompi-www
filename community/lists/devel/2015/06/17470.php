<?
$subject_val = "[OMPI devel] Fwd: PMIx 2.0 planning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 11:28:46 2015" -->
<!-- isoreceived="20150601152846" -->
<!-- sent="Mon, 1 Jun 2015 08:28:42 -0700" -->
<!-- isosent="20150601152842" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: PMIx 2.0 planning" -->
<!-- id="B2EAB8B6-656A-41C3-83F9-FBDF13FBCF62_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7A553261-0D46-42B7-8A32-DDDF9513EE22_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: PMIx 2.0 planning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 11:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17471.php">Howard Pritchard: "Re: [OMPI devel] README updates for new version number scheme"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17469.php">Ralph Castain: "[OMPI devel] ISC BoF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI - for anyone interested.
<br>
<p><span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: PMIx 2.0 planning
</span><br>
<span class="quotelev1">&gt; Date: June 1, 2015 at 7:59:50 AM PDT
</span><br>
<span class="quotelev1">&gt; To: pmix-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With v1.0 nearly out the door, I&#226;&#128;&#153;d like to invite discussion for v2.0. Our initial plan is to release 2.0 in time for SC15, with the expectation that we may not have all the features implemented yet - whether we add them during the 2.0 series, or delay some to 3.0 remains TBD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The initial thought is to focus 2.0 in the following areas - please note that we would deeply appreciate the involvement of each relevant community, so please feel free to forward this note and/or reach out to relevant representatives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Performance improvements
</span><br>
<span class="quotelev1">&gt;    * dynamic spawn/reap of listening threads to achieve target performance of completing 1000 client connections in &lt; 1 sec
</span><br>
<span class="quotelev1">&gt;    * shared memory use to reduce memory footprint (Elena has already sent out some thoughts on this)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Fault response support
</span><br>
<span class="quotelev1">&gt; We currently provide application notification of faults (existing and impending) that includes information on the impacted processes. However, the response is currently limited to calling PMIx_Abort - i.e., the app can take internal action, but the only request it can make of the RM is to abort. We do allow for abort of specific procs as opposed to the entire job, but we&#226;&#128;&#153;d like to support a broader set of options. For example, the app might request a coordinated checkpoint, ask for replacement nodes to be allocated, or request immediate restart at a reduced size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. File system support
</span><br>
<span class="quotelev1">&gt; We would like to begin supporting file positioning directives - e.g., hot/warm/cold data movement, persistence requests to maintain files and/or shared memory regions across job steps, and burst buffer management.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Network/fabric support
</span><br>
<span class="quotelev1">&gt; The existing notification capability can be used to notify of network issues. However, there has been interest expressed in further interactions that would allow an application to specify quality of service and security requirements, request information on network topology, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. Power directives
</span><br>
<span class="quotelev1">&gt; On very large scale systems, it is expected that some form of power management will be required or desired. Most of that happens at allocation request time, but there may be some possible directives an app could want to pass during execution. We&#226;&#128;&#153;re open to suggestion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other topics of interest are always welcome!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17471.php">Howard Pritchard: "Re: [OMPI devel] README updates for new version number scheme"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17469.php">Ralph Castain: "[OMPI devel] ISC BoF"</a>
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
