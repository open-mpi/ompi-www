<?
$subject_val = "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 10:14:24 2007" -->
<!-- isoreceived="20071206151424" -->
<!-- sent="Thu, 06 Dec 2007 08:14:09 -0700" -->
<!-- isosent="20071206151409" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities" -->
<!-- id="C37D5FD1.B81E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C37D7AC1.1F7B%gshipman_at_ornl.gov" -->
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
<strong>Date:</strong> 2007-12-06 10:14:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2749.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/6/07 8:09 AM, &quot;Shipman, Galen M.&quot; &lt;gshipman_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, to be clear that should have been:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One option is for the RTE to just pass in an enviro variable with a
</span><br>
<span class="quotelev2">&gt;&gt; comma-separated list of your local ranks, but that creates a problem down
</span><br>
<span class="quotelev2">&gt;&gt; the road when trying to integrate tighter with systems like SLURM where the
</span><br>
<span class="quotelev2">&gt;&gt; procs would get mass-launched (so the environment has to be the same for all
</span><br>
<span class="quotelev2">&gt;&gt; of them).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Having an enviro variable with a comma-seperated list of local ranks seems
</span><br>
<span class="quotelev1">&gt; like a bit of a hack to me.
</span><br>
<p>No argument - just trying to offer options for consideration. Not advocating
<br>
any of them yet. I'm still hoping for the &quot;perfect solution&quot; to show itself,
<br>
but I personally expect an acceptable compromise is the most likely
<br>
scenario.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So my vote would be to leave the modex alone, but remove the node id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and add a function to get the list of local procs. It doesn't matter to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me how the RTE implements that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think we would need to be careful here that we don't create a need for
</span><br>
<span class="quotelev2">&gt;&gt; more communication. We have two functions currently in the modex:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. how to exchange the info required to populate the ompi_proc_t structures;
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. how to identify which of those procs are &quot;local&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem with leaving the modex as it currently sits is that some
</span><br>
<span class="quotelev2">&gt;&gt; environments require a different mechanism for exchanging the ompi_proc_t
</span><br>
<span class="quotelev2">&gt;&gt; info. While most can use the RML, some can't. The same division of
</span><br>
<span class="quotelev2">&gt;&gt; capabilities applies to getting the &quot;local&quot; info, so it makes sense to me to
</span><br>
<span class="quotelev2">&gt;&gt; put the modex in a framework.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, we wind up with a bunch of #if's in the code to support
</span><br>
<span class="quotelev2">&gt;&gt; environments like the Cray. I believe the mca system was put in place
</span><br>
<span class="quotelev2">&gt;&gt; precisely to avoid those kind of practices, so it makes sense to me to take
</span><br>
<span class="quotelev2">&gt;&gt; advantage of it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, if we did a process attribute system we could just use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; predefined attributes, and the runtime can get each process's node id
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however it wants.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Same problem as above, isn't it? Probably ignorance on my part, but it seems
</span><br>
<span class="quotelev2">&gt;&gt; to me that we simply exchange a modex framework for an attribute framework
</span><br>
<span class="quotelev2">&gt;&gt; (since each environment would have to get the attribute values in a
</span><br>
<span class="quotelev2">&gt;&gt; different manner) - don't we?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have no problem with using attributes instead of the modex, but the issue
</span><br>
<span class="quotelev2">&gt;&gt; appears to be the same either way - you still need a framework to handle the
</span><br>
<span class="quotelev2">&gt;&gt; different methods.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IV. RTE/MPI relative modex responsibilities
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The modex operation conducted during MPI_Init currently involves the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exchange of two critical pieces of information:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. the location (i.e., node) of each process in my job so I can determine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; who shares a node with me. This is subsequently used by the shared memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subsystem for initialization and message routing; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. BTL contact info for each process in my job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; During our recent efforts to further abstract the RTE from the MPI layer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pushed responsibility for both pieces of information into the MPI layer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This wasn't done capriciously - the modex has always included the exchange
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of both pieces of information, and we chose not to disturb that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, the mixing of these two functional requirements does cause
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when dealing with an environment such as the Cray where BTL information is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;exchanged&quot; via an entirely different mechanism. In addition, it has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; noted that the RTE (and not the MPI layer) actually &quot;knows&quot; the node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location for each process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hence, questions have been raised as to whether:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (a) the modex should be built into a framework to allow multiple BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exchange mechansims to be supported, or some alternative mechanism be used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one suggestion made was to implement an MPICH-like attribute exchange; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (b) the RTE should absorb responsibility for providing a &quot;node map&quot; of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes in a job (note: the modex may -use- that info, but would no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; longer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be required to exchange it). This has a number of implications that need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be carefully considered - e.g., the memory required to store the node map
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every process is non-zero. On the other hand:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (i) every proc already -does- store the node for every proc - it is simply
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stored in the ompi_proc_t structures as opposed to somewhere in the RTE. We
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would want to avoid duplicating that storage, but there would be no change
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in memory footprint if done carefully.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (ii) every daemon already knows the node map for the job, so communicating
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that info to its local procs may not prove a major burden. However, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; very
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environments where this subject may be an issue (e.g., the Cray) do not use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; our daemons, so some alternative mechanism for obtaining the info would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; required.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So the questions to be considered here are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (a) do we leave the current modex &quot;as-is&quot;, to include exchange of the node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; map, perhaps including &quot;#if&quot; statements to support different exchange
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mechanisms?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (b) do we separate the two functions currently in the modex and push the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requirement to obtain a node map into the RTE? If so, how do we want the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer to retrieve that info so we avoid increasing our memory footprint?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (c) do we create a separate modex framework for handling the different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exchange mechanisms for BTL info, do we incorporate it into an existing one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (if so, which one), the new publish-subscribe framework, implement an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; alternative approach, or...?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (d) other suggestions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
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
<li><strong>Next message:</strong> <a href="2749.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2747.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
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
