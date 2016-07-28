<?
$subject_val = "Re: [OMPI devel] 1.8.4rc4 now out for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 09:49:14 2014" -->
<!-- isoreceived="20141215144914" -->
<!-- sent="Mon, 15 Dec 2014 15:49:04 +0100" -->
<!-- isosent="20141215144904" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc4 now out for testing" -->
<!-- id="548EF4E0.7030800_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4D91FFAE-DD1C-44C3-9D10-EE1D249790DD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc4 now out for testing<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 09:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16597.php">Adrian Reber: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2014 12:06 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve rolled up the bug fixes so far, including the thread-multiple
</span><br>
<span class="quotelev1">&gt; performance fix. So please give this one a whirl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p><p>No regression on Cygwin 64 bit
<br>
<p>Only and usual FAIL: atomic_cmpset_noinline.exe
<br>
<p>Tested also OSU benchmarks 4.4.1
<br>
Only test failing (as already seen)
<br>
&nbsp;&nbsp;&nbsp;mpi/pt2pt/osu_latency_mt.exe
<br>
&nbsp;&nbsp;&nbsp;mpi/pt2pt/osu_multi_lat.exe
<br>
<p>and I am not sure that I am correctly running them.
<br>
All the other tests are passed
<br>
<p>./mpi/collective/osu_allgather.exe
<br>
./mpi/collective/osu_allgatherv.exe
<br>
./mpi/collective/osu_allreduce.exe
<br>
./mpi/collective/osu_alltoall.exe
<br>
./mpi/collective/osu_alltoallv.exe
<br>
./mpi/collective/osu_barrier.exe
<br>
./mpi/collective/osu_bcast.exe
<br>
./mpi/collective/osu_gather.exe
<br>
./mpi/collective/osu_gatherv.exe
<br>
./mpi/collective/osu_reduce.exe
<br>
./mpi/collective/osu_reduce_scatter.exe
<br>
./mpi/collective/osu_scatter.exe
<br>
./mpi/collective/osu_scatterv.exe
<br>
./mpi/one-sided/osu_acc_latency.exe
<br>
./mpi/one-sided/osu_cas_latency.exe
<br>
./mpi/one-sided/osu_fop_latency.exe
<br>
./mpi/one-sided/osu_get_acc_latency.exe
<br>
./mpi/one-sided/osu_get_bw.exe
<br>
./mpi/one-sided/osu_get_latency.exe
<br>
./mpi/one-sided/osu_put_bibw.exe
<br>
./mpi/one-sided/osu_put_bw.exe
<br>
./mpi/one-sided/osu_put_latency.exe
<br>
./mpi/pt2pt/osu_bibw.exe
<br>
./mpi/pt2pt/osu_bw.exe
<br>
./mpi/pt2pt/osu_latency.exe
<br>
./mpi/pt2pt/osu_mbw_mr.exe
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16599.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-509-g38d6627"</a>
<li><strong>Previous message:</strong> <a href="16597.php">Adrian Reber: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<li><strong>In reply to:</strong> <a href="16586.php">Ralph Castain: "[OMPI devel] 1.8.4rc4 now out for testing"</a>
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
