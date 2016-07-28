<?
$subject_val = "Re: [OMPI devel] Benchmark with multiple orteds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:16:14 2016" -->
<!-- isoreceived="20160125121614" -->
<!-- sent="Mon, 25 Jan 2016 13:16:06 +0100" -->
<!-- isosent="20160125121606" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Benchmark with multiple orteds" -->
<!-- id="CADf4hJK6BZL_aq2s4-L7KOsBgx20UB8x2v920L21SP81tWMR-Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5s3Kcpjgk2AXwBv0XPAPUE2j0iCgco-PaKjFL7TG_QR7Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-25 07:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18501.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18501.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18501.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Gilles, you're right, with --bind-to none we have ~ 15% of
<br>
degradation rather than 50%.
<br>
<p>It's much better now, but I think it should be (in theory) around 0%.
<br>
The benchmark is MPI bound (the standard benchmark provided with SkaMPI),
<br>
it tests these functions: MPI_Bcast, MPI_Barrier, MPI_Reduce, MPI_Allreduce,
<br>
MPI_Alltoall, MPI_Gather, MPI_Scatter, MPI_Scan, MPI_Send/Recv
<br>
<p>Cheers,
<br>
Federico
<br>
__
<br>
Federico Reghenzani
<br>
M.Eng. Student @ Politecnico di Milano
<br>
Computer Science and Engineering
<br>
<p><p><p>2016-01-25 12:17 GMT+01:00 Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Federico,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unless you already took care of that, I would guess all 16 orted
</span><br>
<span class="quotelev1">&gt; bound their children MPI tasks on socket 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you try
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, is your benchmark application cpu bound ? memory bound ? MPI bound ?
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
<span class="quotelev1">&gt; On Monday, January 25, 2016, Federico Reghenzani &lt;
</span><br>
<span class="quotelev1">&gt; federico1.reghenzani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; we have executed a benchmark (SkaMPI) on the same machine (32 core Intel
</span><br>
<span class="quotelev2">&gt;&gt; Xeon 86_64) with these two configurations:
</span><br>
<span class="quotelev2">&gt;&gt; - 1 orted with 16 processes with BTL forced to TCP (--mca btl self,tcp)
</span><br>
<span class="quotelev2">&gt;&gt; - 16 orted with each 1 process (that uses TCP)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use a custom RAS to allow multiple orted on the same machine (I know
</span><br>
<span class="quotelev2">&gt;&gt; that it seems non-sense to have multiple orteds on the same machine for the
</span><br>
<span class="quotelev2">&gt;&gt; same application, but we are doing some experiments for migration).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Initially we have expected approximately the same performance in both
</span><br>
<span class="quotelev2">&gt;&gt; cases (we have 16 processes communicating via TCP in both cases), but we
</span><br>
<span class="quotelev2">&gt;&gt; have a degradation of 50%, and we are sure that is not an overhead due to
</span><br>
<span class="quotelev2">&gt;&gt; orteds initialization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have any idea how can multiple orteds influence the processess
</span><br>
<span class="quotelev2">&gt;&gt; performance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt; __
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18499.php">http://www.open-mpi.org/community/lists/devel/2016/01/18499.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18501.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18501.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18501.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
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
