<?
$subject_val = "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:48:12 2007" -->
<!-- isoreceived="20071205154812" -->
<!-- sent="Wed, 05 Dec 2007 10:48:07 -0500" -->
<!-- isosent="20071205154807" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities" -->
<!-- id="4756C837.3070409_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C37AC4A7.B788%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 10:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Previous message:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>In reply to:</strong> <a href="2713.php">Ralph H Castain: "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I think it is pretty obvious that I am a fan of a attribute system :)
<br>
<p>For completeness, I will point out that we also exchange architecture 
<br>
and hostname info in the modex.
<br>
<p>Do we really need a complete node map? A far as I can tell, it looks 
<br>
like the MPI layer only needs a list of local processes. So maybe it 
<br>
would be better to forget about the node ids at the mpi layer and just 
<br>
return the local procs.
<br>
<p>So my vote would be to leave the modex alone, but remove the node id, 
<br>
and add a function to get the list of local procs. It doesn't matter to 
<br>
me how the RTE implements that.
<br>
<p>Alternatively, if we did a process attribute system we could just use 
<br>
predefined attributes, and the runtime can get each process's node id 
<br>
however it wants.
<br>
<p>Tim
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; IV. RTE/MPI relative modex responsibilities
</span><br>
<span class="quotelev1">&gt; The modex operation conducted during MPI_Init currently involves the
</span><br>
<span class="quotelev1">&gt; exchange of two critical pieces of information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. the location (i.e., node) of each process in my job so I can determine
</span><br>
<span class="quotelev1">&gt; who shares a node with me. This is subsequently used by the shared memory
</span><br>
<span class="quotelev1">&gt; subsystem for initialization and message routing; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. BTL contact info for each process in my job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; During our recent efforts to further abstract the RTE from the MPI layer, we
</span><br>
<span class="quotelev1">&gt; pushed responsibility for both pieces of information into the MPI layer.
</span><br>
<span class="quotelev1">&gt; This wasn't done capriciously - the modex has always included the exchange
</span><br>
<span class="quotelev1">&gt; of both pieces of information, and we chose not to disturb that situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the mixing of these two functional requirements does cause problems
</span><br>
<span class="quotelev1">&gt; when dealing with an environment such as the Cray where BTL information is
</span><br>
<span class="quotelev1">&gt; &quot;exchanged&quot; via an entirely different mechanism. In addition, it has been
</span><br>
<span class="quotelev1">&gt; noted that the RTE (and not the MPI layer) actually &quot;knows&quot; the node
</span><br>
<span class="quotelev1">&gt; location for each process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, questions have been raised as to whether:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) the modex should be built into a framework to allow multiple BTL
</span><br>
<span class="quotelev1">&gt; exchange mechansims to be supported, or some alternative mechanism be used -
</span><br>
<span class="quotelev1">&gt; one suggestion made was to implement an MPICH-like attribute exchange; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) the RTE should absorb responsibility for providing a &quot;node map&quot; of the
</span><br>
<span class="quotelev1">&gt; processes in a job (note: the modex may -use- that info, but would no longer
</span><br>
<span class="quotelev1">&gt; be required to exchange it). This has a number of implications that need to
</span><br>
<span class="quotelev1">&gt; be carefully considered - e.g., the memory required to store the node map in
</span><br>
<span class="quotelev1">&gt; every process is non-zero. On the other hand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (i) every proc already -does- store the node for every proc - it is simply
</span><br>
<span class="quotelev1">&gt; stored in the ompi_proc_t structures as opposed to somewhere in the RTE. We
</span><br>
<span class="quotelev1">&gt; would want to avoid duplicating that storage, but there would be no change
</span><br>
<span class="quotelev1">&gt; in memory footprint if done carefully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (ii) every daemon already knows the node map for the job, so communicating
</span><br>
<span class="quotelev1">&gt; that info to its local procs may not prove a major burden. However, the very
</span><br>
<span class="quotelev1">&gt; environments where this subject may be an issue (e.g., the Cray) do not use
</span><br>
<span class="quotelev1">&gt; our daemons, so some alternative mechanism for obtaining the info would be
</span><br>
<span class="quotelev1">&gt; required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the questions to be considered here are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) do we leave the current modex &quot;as-is&quot;, to include exchange of the node
</span><br>
<span class="quotelev1">&gt; map, perhaps including &quot;#if&quot; statements to support different exchange
</span><br>
<span class="quotelev1">&gt; mechanisms?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) do we separate the two functions currently in the modex and push the
</span><br>
<span class="quotelev1">&gt; requirement to obtain a node map into the RTE? If so, how do we want the MPI
</span><br>
<span class="quotelev1">&gt; layer to retrieve that info so we avoid increasing our memory footprint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (c) do we create a separate modex framework for handling the different
</span><br>
<span class="quotelev1">&gt; exchange mechanisms for BTL info, do we incorporate it into an existing one
</span><br>
<span class="quotelev1">&gt; (if so, which one), the new publish-subscribe framework, implement an
</span><br>
<span class="quotelev1">&gt; alternative approach, or...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (d) other suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="2722.php">Tim Prins: "Re: [OMPI devel] RTE Issue III: Collective communications across daemons"</a>
<li><strong>Previous message:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>In reply to:</strong> <a href="2713.php">Ralph H Castain: "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
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
