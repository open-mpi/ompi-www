<?
$subject_val = "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:47:46 2007" -->
<!-- isoreceived="20071204154746" -->
<!-- sent="Tue, 04 Dec 2007 08:47:35 -0700" -->
<!-- isosent="20071204154735" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities" -->
<!-- id="C37AC4A7.B788%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>Previous message:</strong> <a href="2712.php">Lisandro Dalcin: "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IV. RTE/MPI relative modex responsibilities
<br>
The modex operation conducted during MPI_Init currently involves the
<br>
exchange of two critical pieces of information:
<br>
<p>1. the location (i.e., node) of each process in my job so I can determine
<br>
who shares a node with me. This is subsequently used by the shared memory
<br>
subsystem for initialization and message routing; and
<br>
<p>2. BTL contact info for each process in my job.
<br>
<p>During our recent efforts to further abstract the RTE from the MPI layer, we
<br>
pushed responsibility for both pieces of information into the MPI layer.
<br>
This wasn't done capriciously - the modex has always included the exchange
<br>
of both pieces of information, and we chose not to disturb that situation.
<br>
<p>However, the mixing of these two functional requirements does cause problems
<br>
when dealing with an environment such as the Cray where BTL information is
<br>
&quot;exchanged&quot; via an entirely different mechanism. In addition, it has been
<br>
noted that the RTE (and not the MPI layer) actually &quot;knows&quot; the node
<br>
location for each process.
<br>
<p>Hence, questions have been raised as to whether:
<br>
<p>(a) the modex should be built into a framework to allow multiple BTL
<br>
exchange mechansims to be supported, or some alternative mechanism be used -
<br>
one suggestion made was to implement an MPICH-like attribute exchange; and
<br>
<p>(b) the RTE should absorb responsibility for providing a &quot;node map&quot; of the
<br>
processes in a job (note: the modex may -use- that info, but would no longer
<br>
be required to exchange it). This has a number of implications that need to
<br>
be carefully considered - e.g., the memory required to store the node map in
<br>
every process is non-zero. On the other hand:
<br>
<p>(i) every proc already -does- store the node for every proc - it is simply
<br>
stored in the ompi_proc_t structures as opposed to somewhere in the RTE. We
<br>
would want to avoid duplicating that storage, but there would be no change
<br>
in memory footprint if done carefully.
<br>
<p>(ii) every daemon already knows the node map for the job, so communicating
<br>
that info to its local procs may not prove a major burden. However, the very
<br>
environments where this subject may be an issue (e.g., the Cray) do not use
<br>
our daemons, so some alternative mechanism for obtaining the info would be
<br>
required.
<br>
<p><p>So the questions to be considered here are:
<br>
<p>(a) do we leave the current modex &quot;as-is&quot;, to include exchange of the node
<br>
map, perhaps including &quot;#if&quot; statements to support different exchange
<br>
mechanisms?
<br>
<p>(b) do we separate the two functions currently in the modex and push the
<br>
requirement to obtain a node map into the RTE? If so, how do we want the MPI
<br>
layer to retrieve that info so we avoid increasing our memory footprint?
<br>
<p>(c) do we create a separate modex framework for handling the different
<br>
exchange mechanisms for BTL info, do we incorporate it into an existing one
<br>
(if so, which one), the new publish-subscribe framework, implement an
<br>
alternative approach, or...?
<br>
<p>(d) other suggestions?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>Previous message:</strong> <a href="2712.php">Lisandro Dalcin: "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Reply:</strong> <a href="2721.php">Tim Prins: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
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
