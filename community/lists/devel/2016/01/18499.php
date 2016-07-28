<?
$subject_val = "Re: [OMPI devel] Benchmark with multiple orteds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 06:18:09 2016" -->
<!-- isoreceived="20160125111809" -->
<!-- sent="Mon, 25 Jan 2016 20:17:59 +0900" -->
<!-- isosent="20160125111759" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Benchmark with multiple orteds" -->
<!-- id="CAAkFZ5s3Kcpjgk2AXwBv0XPAPUE2j0iCgco-PaKjFL7TG_QR7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADf4hJJ0oDY5dPxD0dp388Fado=op_mZCb7MLVfxE9eazFKFvQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-25 06:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18498.php">Federico Reghenzani: "[OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18498.php">Federico Reghenzani: "[OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Federico,
<br>
<p>unless you already took care of that, I would guess all 16 orted
<br>
bound their children MPI tasks on socket 0
<br>
<p>can you try
<br>
mpirun --bind-to none ...
<br>
<p>btw, is your benchmark application cpu bound ? memory bound ? MPI bound ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, January 25, 2016, Federico Reghenzani &lt;
<br>
federico1.reghenzani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we have executed a benchmark (SkaMPI) on the same machine (32 core Intel
</span><br>
<span class="quotelev1">&gt; Xeon 86_64) with these two configurations:
</span><br>
<span class="quotelev1">&gt; - 1 orted with 16 processes with BTL forced to TCP (--mca btl self,tcp)
</span><br>
<span class="quotelev1">&gt; - 16 orted with each 1 process (that uses TCP)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use a custom RAS to allow multiple orted on the same machine (I know
</span><br>
<span class="quotelev1">&gt; that it seems non-sense to have multiple orteds on the same machine for the
</span><br>
<span class="quotelev1">&gt; same application, but we are doing some experiments for migration).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initially we have expected approximately the same performance in both
</span><br>
<span class="quotelev1">&gt; cases (we have 16 processes communicating via TCP in both cases), but we
</span><br>
<span class="quotelev1">&gt; have a degradation of 50%, and we are sure that is not an overhead due to
</span><br>
<span class="quotelev1">&gt; orteds initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any idea how can multiple orteds influence the processess
</span><br>
<span class="quotelev1">&gt; performance?
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18498.php">Federico Reghenzani: "[OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>In reply to:</strong> <a href="18498.php">Federico Reghenzani: "[OMPI devel] Benchmark with multiple orteds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18500.php">Federico Reghenzani: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
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
