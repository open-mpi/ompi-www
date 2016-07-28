<?
$subject_val = "[OMPI devel] Modex-less operations: setting options";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:13:17 2015" -->
<!-- isoreceived="20151110211317" -->
<!-- sent="Tue, 10 Nov 2015 13:13:11 -0800" -->
<!-- isosent="20151110211311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Modex-less operations: setting options" -->
<!-- id="E9787FDC-D80B-4030-AD00-C87D4FA7D6FB_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Modex-less operations: setting options<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-10 16:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18356.php">Gilles Gouaillardet: "[OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Previous message:</strong> <a href="18354.php">Ralph Castain: "[OMPI devel] 1.10.2 plans"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>We discussed this a bit at last week&#226;&#128;&#153;s developer telecon, and so I&#226;&#128;&#153;m attempting to capture the options/plans as they were discussed so that others may chime in with suggestions.
<br>
<p>Several new capabilities have been added to OMPI in recent months, all focused on exascale operations. Together, they combine to provide a reduced memory footprint and a potentially very fast launch time. They fall into two areas:
<br>
<p>1. asynchronous addition of the ompi_proc_t structure to reduce memory footprint. We previously would allocate a struct for every process in the job at startup, even though most applications would only actually communicate to a small subset of their peers. This has been changed to allow allocation of the structs upon first message, thus meaning that you only use memory for those peers with which you actually communicate. Note that we do still create structs for *all* dynamically spawned processes (i.e., procs spawned via MPI_Comm_spawn) at time of launch.
<br>
<p>This option is controlled by the MCA param &#226;&#128;&#156;mpi_add_procs_cutoff&#226;&#128;&#157;. Jobs that have #procs &lt; the cutoff will continue to create ompi_proc_t&#226;&#128;&#153;s for every process during startup. If #procs &gt; cutoff, then you&#226;&#128;&#153;ll use the async addition method.
<br>
<p><p>2. removal of barrier operations during MPI_Init. There currently are two barriers in MPI_Init - the first during the allgather collective which returns data posted by each process (the infamous &#226;&#128;&#156;modex&#226;&#128;&#157; operation), and the second right before completing MPI_Init that is used to ensure that all peers are ready to communicate. The modex operation is used to collect endpoint info from every other process in the job. As we have pointed out, most of that info is already known by the host RM, and we are working with the RM community to have them provide it - this would reduce the size of the modex message by roughly 90%.
<br>
<p>The remaining modex info provides endpoint info for each of the available transports. Many of our transports do not require this exchange as they operate on endpoints that can be computed based on knowledge of the other proc&#226;&#128;&#153;s location and relative rank on that location (hostname and our node_rank). In those cases, we can just drop thru the modex. This is controlled by setting the MCA param &#226;&#128;&#156;pmix_base_async_modex=1&#226;&#128;&#157;. If this param is set, then any info that is not provided at startup, but is subsequently requested by a proc, will be retrieved via the &#226;&#128;&#156;direct modex&#226;&#128;&#157; operation - i.e., a request for the target proc&#226;&#128;&#153;s data will be sent to the daemon hosting that proc, and the data retrieved and delivered to the requestor.
<br>
<p>The barrier at the end of MPI_Init is required to ensure that all procs are indeed ready to receive communications prior to allowing any proc to send a message. Some (if not most) of our transports don&#226;&#128;&#153;t have an &#226;&#128;&#156;ack&#226;&#128;&#157; or connection mechanism to detect if the other side was able to receive a message. Thus, in the absence of a barrier, the possibility exists for a proc to send a message before the other side has fully prepared to recv it - thereby resulting in the undetected loss of the message. So we currently always execute this barrier.
<br>
<p>We also have a barrier during MPI_Finalize to ensure that all MPI messages have been handled prior to exiting. No discussion about potentially removing or making that one optional have been held as it fills a similar requirement as the barrier at the end of MPI_Init.
<br>
<p><p><p>There were two subjects of discussion:
<br>
<p>1. the relationship, if any, between the two new MCA params. The async add_procs does not appear to have any major performance impact, though that remains to be fully proven. The async_modex is expected to help in all cases where the endpoints for all active transports are computed, regardless of connection topology. For other cases (i.e., non-computed endpoints), async modex will help for sparsely connected topologies, and hurt for densely connected topologies (e.g., those commonly found for OSHMEM apps).
<br>
<p>Conclusion: we&#226;&#128;&#153;ll leave these as separate params for now as the linkage appears weak.
<br>
<p>2. what to do about the other barriers. These are mostly driven by the characteristics of the specific active transports. Some can, or may someday be able to, support removal of one or both of the barriers. Accordingly, we decided to add flag(s) to the PML-BTL interface to indicate if barrier support is required prior to first message, and after last message. If any active BTL indicates it needs such support, then the corresponding barrier will be executed.
<br>
<p>Conclusion: Ralph will create two global variables to control barrier execution, and add the required &#226;&#128;&#156;if-then&#226;&#128;&#157; statements. Nathan will add the PML-BTL flags.
<br>
<p><p>I hope that accurately captured the intent of the participants. Please feel free to comment and/or correct
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18356.php">Gilles Gouaillardet: "[OMPI devel] ompi_win_create hangs on a non uniform cluster"</a>
<li><strong>Previous message:</strong> <a href="18354.php">Ralph Castain: "[OMPI devel] 1.10.2 plans"</a>
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
