<?
$subject_val = "Re: [OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 06:48:39 2011" -->
<!-- isoreceived="20111108114839" -->
<!-- sent="Tue, 8 Nov 2011 11:48:31 +0000" -->
<!-- isosent="20111108114831" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger confusion" -->
<!-- id="4FD7B5B8-80CD-4021-8899-E1FA4A08BF51_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CF6D9290-0562-4F69-87F5-C3BFF196C367_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger confusion<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 06:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>Previous message:</strong> <a href="9934.php">nadia.derbey: "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>In reply to:</strong> <a href="9926.php">George Bosilca: "[OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8 Nov 2011, at 00:59, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; A started process is defined as being our mpirun. In Open MPI MPIR_partial_attach_ok is defined, so the tool will suppose that we provide a means to synchronize the processes not based on MPIR_debug_gate. Therefore only one behavior if acceptable based on the text above: no MPIR_debug_gate=1 should be issued by the tool.
</span><br>
<p>Open MPI itself (Via ORTE) is not the only possible launch mechanism for Open MPI jobs, Slurm is the only other tool I can think of of the top of my head that can do it but I wouldn't be surprised if there are others.  At the time the document was written it was assumed that the MPI library and resource manager/job launcher were so closely integrated they could be assumed to be part of the same software.
<br>
<p><span class="quotelev1">&gt; However, in the ompi_debuggers.c around line 226, we have an if that switch between the two acceptable behavior (MPIR_debug_gate or own mechanism) based on the fact that we are a standalone (slurmd or generic) or not. As generic is the ess loaded in most of the cases, I can't figure out how this works if the MPIR specification document has to be trusted.
</span><br>
<p>Unless the library can guarantee that the starter process has MPIR_partial_attach_ok the only safe thing it can do it wait on MPIR_debug_gate, the only way the library can make any guarantees about mpirun is if it's launched from orted.
<br>
<p>I agree that it's not clear this, I don't think this spec is well understood by anyone, indeed it wasn't originally written with the intention of becoming a specification at all.  I've looked at it a couple of times but never used this aspect of it, padb (and I believe stat is the same) don't ever launch jobs under control of the debugger, simply attach to an already existing job which means I've been able to ignore this part of the spec in padb entirely.
<br>
<p>Ashley.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9936.php">Ralph Castain: "Re: [OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>Previous message:</strong> <a href="9934.php">nadia.derbey: "[OMPI devel] Segfault in odls_fork_local_procs() for some values of npersocket"</a>
<li><strong>In reply to:</strong> <a href="9926.php">George Bosilca: "[OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9937.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
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
