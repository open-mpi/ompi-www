<?
$subject_val = "Re: [OMPI devel] Benchmark with multiple orteds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:28:43 2016" -->
<!-- isoreceived="20160125122843" -->
<!-- sent="Mon, 25 Jan 2016 21:28:42 +0900" -->
<!-- isosent="20160125122842" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Benchmark with multiple orteds" -->
<!-- id="CAAkFZ5vtWJkxxEMQJmHes0xV3WdG5Y0xDaEozUm6Z0uMuT6L+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADf4hJK6BZL_aq2s4-L7KOsBgx20UB8x2v920L21SP81tWMR-Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 07:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Federico,
<br>
<p>I did not expect 0% degradation, since you are now comparing two different
<br>
cases
<br>
1 orted means tasks are bound on sockets
<br>
16 orted means tasks are not bound.
<br>
<p>a quick way to improve things is to use a wrapper that binds MPI tasks
<br>
mpirun --bind-to none wrapper.sh skampi
<br>
<p>wrapper.sh can use environment variable to retrieve the rank id
<br>
(PMI(X)_RANK iirc) and then bind the tasks with taskset or helicopter utils
<br>
<p>mpirun --tag-output grep Cpus_allowed_list /proc/self/status
<br>
with 1 orted should return the same output than
<br>
mpirun --tag-output --bind-to none wrapper.sh grep CPUs_allowed_list
<br>
/proc/self/status
<br>
with 16 orted
<br>
<p>when wrapper.sh works fine, skampi degradation should be smaller with 16
<br>
orted
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, January 25, 2016, Federico Reghenzani &lt;
<br>
federico1.reghenzani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Gilles, you're right, with --bind-to none we have ~ 15% of
</span><br>
<span class="quotelev1">&gt; degradation rather than 50%.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's much better now, but I think it should be (in theory) around 0%.
</span><br>
<span class="quotelev1">&gt; The benchmark is MPI bound (the standard benchmark provided with SkaMPI),
</span><br>
<span class="quotelev1">&gt; it tests these functions: MPI_Bcast, MPI_Barrier, MPI_Reduce, MPI_Allreduce,
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall, MPI_Gather, MPI_Scatter, MPI_Scan, MPI_Send/Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-25 12:17 GMT+01:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Federico,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; unless you already took care of that, I would guess all 16 orted
</span><br>
<span class="quotelev2">&gt;&gt; bound their children MPI tasks on socket 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you try
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, is your benchmark application cpu bound ? memory bound ? MPI bound ?
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, January 25, 2016, Federico Reghenzani &lt;
</span><br>
<span class="quotelev2">&gt;&gt; federico1.reghenzani_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','federico1.reghenzani_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we have executed a benchmark (SkaMPI) on the same machine (32 core Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xeon 86_64) with these two configurations:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - 1 orted with 16 processes with BTL forced to TCP (--mca btl self,tcp)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - 16 orted with each 1 process (that uses TCP)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We use a custom RAS to allow multiple orted on the same machine (I know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it seems non-sense to have multiple orteds on the same machine for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same application, but we are doing some experiments for migration).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initially we have expected approximately the same performance in both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cases (we have 16 processes communicating via TCP in both cases), but we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a degradation of 50%, and we are sure that is not an overhead due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orteds initialization.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any idea how can multiple orteds influence the processess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18499.php">http://www.open-mpi.org/community/lists/devel/2016/01/18499.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18502.php">Ralph Castain: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
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
