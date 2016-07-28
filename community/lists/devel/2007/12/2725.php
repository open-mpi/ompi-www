<?
$subject_val = "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 11:24:18 2007" -->
<!-- isoreceived="20071205162418" -->
<!-- sent="Wed, 05 Dec 2007 09:23:59 -0700" -->
<!-- isosent="20071205162359" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities" -->
<!-- id="C37C1EAF.B7DC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4756C837.3070409_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 11:23:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2744.php">Jeff Squyres: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2744.php">Jeff Squyres: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/5/07 8:48 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Well, I think it is pretty obvious that I am a fan of a attribute system :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For completeness, I will point out that we also exchange architecture
</span><br>
<span class="quotelev1">&gt; and hostname info in the modex.
</span><br>
<p>True - except we should note that hostname info is only exchanged if someone
<br>
specifically requests it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we really need a complete node map? A far as I can tell, it looks
</span><br>
<span class="quotelev1">&gt; like the MPI layer only needs a list of local processes. So maybe it
</span><br>
<span class="quotelev1">&gt; would be better to forget about the node ids at the mpi layer and just
</span><br>
<span class="quotelev1">&gt; return the local procs.
</span><br>
<p>I agree, though I don't think we want a parallel list of procs. We just need
<br>
to set the &quot;local&quot; flag in the existing ompi_proc_t structures.
<br>
<p>One option is for the RTE to just pass in an enviro variable with a
<br>
comma-separated list of your local ranks, but that creates a problem down
<br>
the road when trying to integrate tighter with systems like SLURM where the
<br>
procs would get mass-launched (so the environment has to be the same for all
<br>
of them).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my vote would be to leave the modex alone, but remove the node id,
</span><br>
<span class="quotelev1">&gt; and add a function to get the list of local procs. It doesn't matter to
</span><br>
<span class="quotelev1">&gt; me how the RTE implements that.
</span><br>
<p>I think we would need to be careful here that we don't create a need for
<br>
more communication. We have two functions currently in the modex:
<br>
<p>1. how to exchange the info required to populate the ompi_proc_t structures;
<br>
and
<br>
<p>2. how to identify which of those procs are &quot;local&quot;
<br>
<p>The problem with leaving the modex as it currently sits is that some
<br>
environments require a different mechanism for exchanging the ompi_proc_t
<br>
info. While most can use the RML, some can't. The same division of
<br>
capabilities applies to getting the &quot;local&quot; info, so it makes sense to me to
<br>
put the modex in a framework.
<br>
<p>Otherwise, we wind up with a bunch of #if's in the code to support
<br>
environments like the Cray. I believe the mca system was put in place
<br>
precisely to avoid those kind of practices, so it makes sense to me to take
<br>
advantage of it.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, if we did a process attribute system we could just use
</span><br>
<span class="quotelev1">&gt; predefined attributes, and the runtime can get each process's node id
</span><br>
<span class="quotelev1">&gt; however it wants.
</span><br>
<p>Same problem as above, isn't it? Probably ignorance on my part, but it seems
<br>
to me that we simply exchange a modex framework for an attribute framework
<br>
(since each environment would have to get the attribute values in a
<br>
different manner) - don't we?
<br>
<p>I have no problem with using attributes instead of the modex, but the issue
<br>
appears to be the same either way - you still need a framework to handle the
<br>
different methods.
<br>
<p><p>Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; IV. RTE/MPI relative modex responsibilities
</span><br>
<span class="quotelev2">&gt;&gt; The modex operation conducted during MPI_Init currently involves the
</span><br>
<span class="quotelev2">&gt;&gt; exchange of two critical pieces of information:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. the location (i.e., node) of each process in my job so I can determine
</span><br>
<span class="quotelev2">&gt;&gt; who shares a node with me. This is subsequently used by the shared memory
</span><br>
<span class="quotelev2">&gt;&gt; subsystem for initialization and message routing; and
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. BTL contact info for each process in my job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; During our recent efforts to further abstract the RTE from the MPI layer, we
</span><br>
<span class="quotelev2">&gt;&gt; pushed responsibility for both pieces of information into the MPI layer.
</span><br>
<span class="quotelev2">&gt;&gt; This wasn't done capriciously - the modex has always included the exchange
</span><br>
<span class="quotelev2">&gt;&gt; of both pieces of information, and we chose not to disturb that situation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the mixing of these two functional requirements does cause problems
</span><br>
<span class="quotelev2">&gt;&gt; when dealing with an environment such as the Cray where BTL information is
</span><br>
<span class="quotelev2">&gt;&gt; &quot;exchanged&quot; via an entirely different mechanism. In addition, it has been
</span><br>
<span class="quotelev2">&gt;&gt; noted that the RTE (and not the MPI layer) actually &quot;knows&quot; the node
</span><br>
<span class="quotelev2">&gt;&gt; location for each process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, questions have been raised as to whether:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (a) the modex should be built into a framework to allow multiple BTL
</span><br>
<span class="quotelev2">&gt;&gt; exchange mechansims to be supported, or some alternative mechanism be used -
</span><br>
<span class="quotelev2">&gt;&gt; one suggestion made was to implement an MPICH-like attribute exchange; and
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (b) the RTE should absorb responsibility for providing a &quot;node map&quot; of the
</span><br>
<span class="quotelev2">&gt;&gt; processes in a job (note: the modex may -use- that info, but would no longer
</span><br>
<span class="quotelev2">&gt;&gt; be required to exchange it). This has a number of implications that need to
</span><br>
<span class="quotelev2">&gt;&gt; be carefully considered - e.g., the memory required to store the node map in
</span><br>
<span class="quotelev2">&gt;&gt; every process is non-zero. On the other hand:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (i) every proc already -does- store the node for every proc - it is simply
</span><br>
<span class="quotelev2">&gt;&gt; stored in the ompi_proc_t structures as opposed to somewhere in the RTE. We
</span><br>
<span class="quotelev2">&gt;&gt; would want to avoid duplicating that storage, but there would be no change
</span><br>
<span class="quotelev2">&gt;&gt; in memory footprint if done carefully.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (ii) every daemon already knows the node map for the job, so communicating
</span><br>
<span class="quotelev2">&gt;&gt; that info to its local procs may not prove a major burden. However, the very
</span><br>
<span class="quotelev2">&gt;&gt; environments where this subject may be an issue (e.g., the Cray) do not use
</span><br>
<span class="quotelev2">&gt;&gt; our daemons, so some alternative mechanism for obtaining the info would be
</span><br>
<span class="quotelev2">&gt;&gt; required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So the questions to be considered here are:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (a) do we leave the current modex &quot;as-is&quot;, to include exchange of the node
</span><br>
<span class="quotelev2">&gt;&gt; map, perhaps including &quot;#if&quot; statements to support different exchange
</span><br>
<span class="quotelev2">&gt;&gt; mechanisms?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (b) do we separate the two functions currently in the modex and push the
</span><br>
<span class="quotelev2">&gt;&gt; requirement to obtain a node map into the RTE? If so, how do we want the MPI
</span><br>
<span class="quotelev2">&gt;&gt; layer to retrieve that info so we avoid increasing our memory footprint?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (c) do we create a separate modex framework for handling the different
</span><br>
<span class="quotelev2">&gt;&gt; exchange mechanisms for BTL info, do we incorporate it into an existing one
</span><br>
<span class="quotelev2">&gt;&gt; (if so, which one), the new publish-subscribe framework, implement an
</span><br>
<span class="quotelev2">&gt;&gt; alternative approach, or...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (d) other suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2726.php">Brian W. Barrett: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Previous message:</strong> <a href="2724.php">Steve Wise: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>In reply to:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2744.php">Jeff Squyres: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2744.php">Jeff Squyres: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
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
