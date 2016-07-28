<?
$subject_val = "[OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 19:59:49 2011" -->
<!-- isoreceived="20111108005949" -->
<!-- sent="Mon, 7 Nov 2011 19:59:44 -0500" -->
<!-- isosent="20111108005944" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] debugger confusion" -->
<!-- id="CF6D9290-0562-4F69-87F5-C3BFF196C367_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] debugger confusion<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 19:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9925.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was trying to understand how the debugger interface is supposed to work. And if I was confused before, that feeling never disappeared.
<br>
<p>There is one thing that I really can't figure out, and I hope that somebody (Jeff/Ralph/Rolf based on svn blame) can enlighten me.
<br>
<p>MPIR_debug_gate. In the document accepted by the MPI Forum we have the following definition:
<br>
<p><span class="quotelev1">&gt; MPIR_debug_gate is an integer variable that is set to 1 by the tool to notify the MPI
</span><br>
<span class="quotelev1">&gt; processes that the debugger has attached. An MPI process may use this variable as a
</span><br>
<span class="quotelev1">&gt; synchronization mechanism to prevent it from running away before the tool has time to
</span><br>
<span class="quotelev1">&gt; attach to the process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An MPI implementation is not required to use the MPIR_debug_gate variable for synchronization. However, the MPI job control runtime system must prevent the created MPI
</span><br>
<span class="quotelev1">&gt; processes from running beyond the return from the applications call to MPI_INIT.
</span><br>
<p>In case it is not clear enough, in the section describing the startup process, we can find the following clarification:
<br>
<p><span class="quotelev1">&gt; If the symbol MPIR_partial_attach_ok is de&#239;&#172;&#129;ned in the starter process, then this
</span><br>
<span class="quotelev1">&gt; informs the tool that the initial startup barrier is implemented by the MPI system,
</span><br>
<span class="quotelev1">&gt; and it is not necessary to set the MPIR_debug_gate variable in any of MPI processes.
</span><br>
<span class="quotelev1">&gt; However, if the symbol MPIR_partial_attach_ok is not de&#239;&#172;&#129;ned in the starter process,
</span><br>
<span class="quotelev1">&gt; the tool must attach and set the MPIR_debug_gate variable to 1 in each MPI processes
</span><br>
<span class="quotelev1">&gt; to release them from the gate, even if the tool user has instructed the tool to not attach
</span><br>
<span class="quotelev1">&gt; to all of the MPI processes.
</span><br>
<p>A started process is defined as being our mpirun. In Open MPI MPIR_partial_attach_ok is defined, so the tool will suppose that we provide a means to synchronize the processes not based on MPIR_debug_gate. Therefore only one behavior if acceptable based on the text above: no MPIR_debug_gate=1 should be issued by the tool.
<br>
<p>However, in the ompi_debuggers.c around line 226, we have an if that switch between the two acceptable behavior (MPIR_debug_gate or own mechanism) based on the fact that we are a standalone (slurmd or generic) or not. As generic is the ess loaded in most of the cases, I can't figure out how this works if the MPIR specification document has to be trusted.
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9925.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9927.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
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
