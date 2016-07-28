<?
$subject_val = "Re: [OMPI devel] Benchmark with multiple orteds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 08:40:31 2016" -->
<!-- isoreceived="20160125134031" -->
<!-- sent="Mon, 25 Jan 2016 14:40:24 +0100" -->
<!-- isosent="20160125134024" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Benchmark with multiple orteds" -->
<!-- id="CADf4hJ+JznYnET-OW_a6tPZqB_8T7T5X-JMwL-SOf-scGYn0TQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57ofbj9+4Qfr=nYG3jGiUNrkYJz7xqXb78GU7S8fXBe69Cw_at_mail.gmail.com" -->
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
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 08:40:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thank you Ralph and Gilles, I will continue testing and I'll update you
<br>
if there is any news.
<br>
<p>Cheers,
<br>
Federico
<br>
<p><p>2016-01-25 14:23 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I believe the performance penalty will still always be greater than zero,
</span><br>
<span class="quotelev1">&gt; however, as the TCP stack is smart enough to take an optimized path when
</span><br>
<span class="quotelev1">&gt; doing a loopback as opposed to inter-node communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 25, 2016 at 4:28 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Federico,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did not expect 0% degradation, since you are now comparing two
</span><br>
<span class="quotelev2">&gt;&gt; different cases
</span><br>
<span class="quotelev2">&gt;&gt; 1 orted means tasks are bound on sockets
</span><br>
<span class="quotelev2">&gt;&gt; 16 orted means tasks are not bound.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a quick way to improve things is to use a wrapper that binds MPI tasks
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to none wrapper.sh skampi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrapper.sh can use environment variable to retrieve the rank id
</span><br>
<span class="quotelev2">&gt;&gt; (PMI(X)_RANK iirc) and then bind the tasks with taskset or helicopter
</span><br>
<span class="quotelev2">&gt;&gt; utils
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --tag-output grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev2">&gt;&gt; with 1 orted should return the same output than
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --tag-output --bind-to none wrapper.sh grep CPUs_allowed_list
</span><br>
<span class="quotelev2">&gt;&gt; /proc/self/status
</span><br>
<span class="quotelev2">&gt;&gt; with 16 orted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when wrapper.sh works fine, skampi degradation should be smaller with 16
</span><br>
<span class="quotelev2">&gt;&gt; orted
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, January 25, 2016, Federico Reghenzani &lt;
</span><br>
<span class="quotelev2">&gt;&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you Gilles, you're right, with --bind-to none we have ~ 15% of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; degradation rather than 50%.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's much better now, but I think it should be (in theory) around 0%.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The benchmark is MPI bound (the standard benchmark provided with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SkaMPI), it tests these functions: MPI_Bcast, MPI_Barrier, MPI_Reduce, MPI_Allreduce,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Alltoall, MPI_Gather, MPI_Scatter, MPI_Scan, MPI_Send/Recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2016-01-25 12:17 GMT+01:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Federico,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unless you already took care of that, I would guess all 16 orted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bound their children MPI tasks on socket 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can you try
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btw, is your benchmark application cpu bound ? memory bound ? MPI bound
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Monday, January 25, 2016, Federico Reghenzani &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we have executed a benchmark (SkaMPI) on the same machine (32 core
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Intel Xeon 86_64) with these two configurations:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 1 orted with 16 processes with BTL forced to TCP (--mca btl self,tcp)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 16 orted with each 1 process (that uses TCP)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We use a custom RAS to allow multiple orted on the same machine (I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; know that it seems non-sense to have multiple orteds on the same machine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for the same application, but we are doing some experiments for migration).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Initially we have expected approximately the same performance in both
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cases (we have 16 processes communicating via TCP in both cases), but we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have a degradation of 50%, and we are sure that is not an overhead due to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orteds initialization.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you have any idea how can multiple orteds influence the processess
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; __
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18499.php">http://www.open-mpi.org/community/lists/devel/2016/01/18499.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18501.php">http://www.open-mpi.org/community/lists/devel/2016/01/18501.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18502.php">http://www.open-mpi.org/community/lists/devel/2016/01/18502.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18504.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
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
