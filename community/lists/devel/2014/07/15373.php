<?
$subject_val = "[OMPI devel] RFC: job size info in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 18:00:20 2014" -->
<!-- isoreceived="20140730220020" -->
<!-- sent="Wed, 30 Jul 2014 22:00:18 +0000" -->
<!-- isosent="20140730220018" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: job size info in OPAL" -->
<!-- id="BE97CEB2-2F97-4652-AAAB-403AA416B1C6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: job size info in OPAL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 18:00:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15378.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15378.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15394.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Should we make the job size (i.e., initial number of procs) available in OPAL?
<br>
<p>WHY: At least 2 BTLs are using this info (*more below)
<br>
<p>WHERE: usnic and ugni
<br>
<p>TIMEOUT: there's already been some inflammatory emails about this; let's discuss next Tuesday on the teleconf: Tue, 5 Aug 2014
<br>
<p>MORE DETAIL:
<br>
<p>This is an open question.  We *have* the information at the time that the BTLs are initialized: do we allow that information to go down to OPAL?
<br>
<p>Ralph added this info down in OPAL in r32355, but George reverted it in r32361.
<br>
<p>Points for: YES, WE SHOULD
<br>
+++ 2 BTLs were using it (usinc, ugni)
<br>
+++ Other RTE job-related info are already in OPAL (num local ranks, local rank)
<br>
<p>Points for: NO, WE SHOULD NOT
<br>
--- What exactly is this number (e.g., num currently-connected procs?), and when is it updated?
<br>
--- We need to precisely delineate what belongs in OPAL vs. above-OPAL
<br>
<p>FWIW: here's how ompi_process_info.num_procs was used before the BTL move down to OPAL:
<br>
<p>- usnic: for a minor latency optimization / sizing of a shared receive buffer queue length, and for the initial size of a peer lookup hash
<br>
- ugni: to determine the size of the per-peer buffers used for send/recv communication
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15372.php">Ralph Castain: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15378.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15378.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15394.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
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
