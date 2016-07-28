<?
$subject_val = "Re: [OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  7 22:43:29 2011" -->
<!-- isoreceived="20111108034329" -->
<!-- sent="Mon, 7 Nov 2011 22:43:21 -0500" -->
<!-- isosent="20111108034321" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger confusion" -->
<!-- id="2EADD954-FDB0-417B-B0DF-1EBF0AFF5BCF_at_eecs.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A259AD7D-A41E-41D6-9892-A1CE5203E1DD_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-07 22:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9930.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9930.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9938.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2011, at 22:26 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I didn't say the eventually wouldn't, George. I was trying to indicate that they may not be there yet, and our current code has been tested with their current releases - not what they eventually might release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As to who wanted this &quot;standard&quot;...I was there during the discussions about whether or not to submit the interface to the forum, and I recall the pressure coming from outside the tool vendors. If anything, certain parties twisted their arms into it.
</span><br>
<p>If you were there, you might then recall that:
<br>
<p>1. The MPI Forum was very skeptical about approving this, and that in fact it was _not really_ accepted as part of the MPI 2.2. It is a &quot;companion&quot; document, allowed to be published on the MPI website, but without the power of a standard.
<br>
<p>2. Based on the tool community saying what was accepted was not about what they really wanted to have (this apparently will be in MPI 3), but was about the most common implementation of what was already there &#226;&#128;&#166;
<br>
<p><span class="quotelev1">&gt; Regardless, I only caution about making changes without first checking that others believe it is broken...and I don't recall seeing that question raised to the community (and time given for a response) prior to the changes being committed. :-)
</span><br>
<p>?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2011, at 8:20 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They better do conform to what they asked us to &quot;accept&quot;. If wasn't that the MPI Forum members were eager to put the tool interface into the standard, we were kind of forced to. By whom &#226;&#128;&#166; well by the tool vendors to promote a certain homogeneity.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2011, at 20:34 , Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't speak to what is in ompi_debuggers.c as I believe Jeff wrote most of that. However, what is there has been tested and works with TotalView and a couple of other debuggers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best guess: from what I've seen, most debuggers don't seem to conform to what the MPI Forum has &quot;accepted&quot;. It doesn't appear that the vendors and debugger developers pay too much attention to that document, possibly because it (a) came after the debuggers were developed, and (b) still doesn't seem to be widely adopted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd suggest being a little careful about making changes without consulting people who use TV and &quot;stat&quot;, at least - those are the ones most recently tested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 7, 2011, at 5:59 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was trying to understand how the debugger interface is supposed to work. And if I was confused before, that feeling never disappeared.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is one thing that I really can't figure out, and I hope that somebody (Jeff/Ralph/Rolf based on svn blame) can enlighten me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIR_debug_gate. In the document accepted by the MPI Forum we have the following definition:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPIR_debug_gate is an integer variable that is set to 1 by the tool to notify the MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes that the debugger has attached. An MPI process may use this variable as a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; synchronization mechanism to prevent it from running away before the tool has time to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attach to the process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An MPI implementation is not required to use the MPIR_debug_gate variable for synchronization. However, the MPI job control runtime system must prevent the created MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes from running beyond the return from the applications call to MPI_INIT.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In case it is not clear enough, in the section describing the startup process, we can find the following clarification:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If the symbol MPIR_partial_attach_ok is de&#239;&#172;&#129;ned in the starter process, then this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; informs the tool that the initial startup barrier is implemented by the MPI system,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and it is not necessary to set the MPIR_debug_gate variable in any of MPI processes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, if the symbol MPIR_partial_attach_ok is not de&#239;&#172;&#129;ned in the starter process,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the tool must attach and set the MPIR_debug_gate variable to 1 in each MPI processes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to release them from the gate, even if the tool user has instructed the tool to not attach
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to all of the MPI processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A started process is defined as being our mpirun. In Open MPI MPIR_partial_attach_ok is defined, so the tool will suppose that we provide a means to synchronize the processes not based on MPIR_debug_gate. Therefore only one behavior if acceptable based on the text above: no MPIR_debug_gate=1 should be issued by the tool.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, in the ompi_debuggers.c around line 226, we have an if that switch between the two acceptable behavior (MPIR_debug_gate or own mechanism) based on the fact that we are a standalone (slurmd or generic) or not. As generic is the ess loaded in most of the cases, I can't figure out how this works if the MPIR specification document has to be trusted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9932.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25445"</a>
<li><strong>Previous message:</strong> <a href="9930.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9930.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9938.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
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
