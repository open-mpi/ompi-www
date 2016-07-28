<?
$subject_val = "[OMPI devel] Benchmark with multiple orteds";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 06:11:37 2016" -->
<!-- isoreceived="20160125111137" -->
<!-- sent="Mon, 25 Jan 2016 12:11:33 +0100" -->
<!-- isosent="20160125111133" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="[OMPI devel] Benchmark with multiple orteds" -->
<!-- id="CADf4hJJ0oDY5dPxD0dp388Fado=op_mZCb7MLVfxE9eazFKFvQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Benchmark with multiple orteds<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 06:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18497.php">Gilles Gouaillardet: "[OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>we have executed a benchmark (SkaMPI) on the same machine (32 core Intel
<br>
Xeon 86_64) with these two configurations:
<br>
- 1 orted with 16 processes with BTL forced to TCP (--mca btl self,tcp)
<br>
- 16 orted with each 1 process (that uses TCP)
<br>
<p>We use a custom RAS to allow multiple orted on the same machine (I know
<br>
that it seems non-sense to have multiple orteds on the same machine for the
<br>
same application, but we are doing some experiments for migration).
<br>
<p>Initially we have expected approximately the same performance in both cases
<br>
(we have 16 processes communicating via TCP in both cases), but we have a
<br>
degradation of 50%, and we are sure that is not an overhead due to orteds
<br>
initialization.
<br>
<p>Do you have any idea how can multiple orteds influence the processess
<br>
performance?
<br>
<p><p>Cheers,
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Previous message:</strong> <a href="18497.php">Gilles Gouaillardet: "[OMPI devel] tm-less tm module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
<li><strong>Reply:</strong> <a href="18499.php">Gilles Gouaillardet: "Re: [OMPI devel] Benchmark with multiple orteds"</a>
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
