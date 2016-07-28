<?
$subject_val = "Re: [OMPI devel] Benchmark with multiple orteds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 12:01:50 2016" -->
<!-- isoreceived="20160125170150" -->
<!-- sent="Mon, 25 Jan 2016 09:01:44 -0800" -->
<!-- isosent="20160125170144" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Benchmark with multiple orteds" -->
<!-- id="CAMD57of0C7N2JxjQD2MOSgLgo8yU-MS4EDqgZXUgPFBeBpFOCA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uXt644_oWiByLHX7OtoAQzQCEsPXsFCK7u5wjZA1ai5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Benchmark with multiple orteds<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 12:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also assumed that was true. However, when communicating between two
<br>
procs, the TCP stack will use a shortcut in the loopback code if the two
<br>
procs are known to be on the same node. In the case of multiple orteds, it
<br>
isn't clear to me that the stack knows this situation as the orteds, at
<br>
least, must have unique IP addresses and think they are on separate nodes.
<br>
<p>On Mon, Jan 25, 2016 at 6:32 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Though I did not repeat it, I assumed --mca btl tcp,self is always used,
</span><br>
<span class="quotelev1">&gt; as described in the initial email
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday, January 25, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the performance penalty will still always be greater than zero,
</span><br>
<span class="quotelev2">&gt;&gt; however, as the TCP stack is smart enough to take an optimized path when
</span><br>
<span class="quotelev2">&gt;&gt; doing a loopback as opposed to inter-node communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jan 25, 2016 at 4:28 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not expect 0% degradation, since you are now comparing two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 orted means tasks are bound on sockets
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 16 orted means tasks are not bound.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a quick way to improve things is to use a wrapper that binds MPI tasks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --bind-to none wrapper.sh skampi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper.sh can use environment variable to retrieve the rank id
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (PMI(X)_RANK iirc) and then bind the tasks with taskset or helicopter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; utils
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --tag-output grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 1 orted should return the same output than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --tag-output --bind-to none wrapper.sh grep CPUs_allowed_list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /proc/self/status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with 16 orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when wrapper.sh works fine, skampi degradation should be smaller with 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Monday, January 25, 2016, Federico Reghenzani &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you Gilles, you're right, with --bind-to none we have ~ 15% of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; degradation rather than 50%.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's much better now, but I think it should be (in theory) around 0%.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The benchmark is MPI bound (the standard benchmark provided with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SkaMPI), it tests these functions: MPI_Bcast, MPI_Barrier, MPI_Reduce, MPI_Allreduce,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Alltoall, MPI_Gather, MPI_Scatter, MPI_Scan, MPI_Send/Recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; __
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2016-01-25 12:17 GMT+01:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Federico,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unless you already took care of that, I would guess all 16 orted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bound their children MPI tasks on socket 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can you try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btw, is your benchmark application cpu bound ? memory bound ? MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bound ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Monday, January 25, 2016, Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we have executed a benchmark (SkaMPI) on the same machine (32 core
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Intel Xeon 86_64) with these two configurations:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - 1 orted with 16 processes with BTL forced to TCP (--mca btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; self,tcp)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - 16 orted with each 1 process (that uses TCP)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We use a custom RAS to allow multiple orted on the same machine (I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; know that it seems non-sense to have multiple orteds on the same machine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for the same application, but we are doing some experiments for migration).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Initially we have expected approximately the same performance in both
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cases (we have 16 processes communicating via TCP in both cases), but we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; have a degradation of 50%, and we are sure that is not an overhead due to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orteds initialization.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea how can multiple orteds influence the processess
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performance?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; __
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18499.php">http://www.open-mpi.org/community/lists/devel/2016/01/18499.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18501.php">http://www.open-mpi.org/community/lists/devel/2016/01/18501.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18504.php">http://www.open-mpi.org/community/lists/devel/2016/01/18504.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18505.php">Howard Pritchard: "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18507.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
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
