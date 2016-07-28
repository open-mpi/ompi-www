<?
$subject_val = "Re: [OMPI users] Multiple threads for an mpi process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 09:27:22 2014" -->
<!-- isoreceived="20140912132722" -->
<!-- sent="Fri, 12 Sep 2014 08:27:13 -0500" -->
<!-- isosent="20140912132713" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple threads for an mpi process" -->
<!-- id="5412F4B1.2060709_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5412D578.1040703_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple threads for an mpi process<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 09:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25320.php">Siegmar Gross: "Re: [OMPI users] unaligned accesses"</a>
<li><strong>In reply to:</strong> <a href="25319.php">JR Cary: "[OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Reply:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/12/2014 6:14 AM, JR Cary wrote:
<br>
<span class="quotelev1">&gt; This must be a very old topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to run mpi with one process per node, e.g., using
</span><br>
<span class="quotelev1">&gt; -cpus-per-rank=1.  Then I want to use openmp inside of that.
</span><br>
<span class="quotelev1">&gt; But other times I will run with a rank on each physical core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inside my code I would like to detect which situation I am in.
</span><br>
<span class="quotelev1">&gt; Is there an openmpi api call to determine that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
omp_get_num_threads() should work.  Unless you want to choose a 
<br>
different non-parallel algorithm for this case, a single thread omp 
<br>
parallel region works fine.
<br>
You should soon encounter cases where you want intermediate choices, 
<br>
such as 1 rank per CPU package and 1 thread per core, even if you stay 
<br>
away from platforms with more than 12 cores per CPU.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25321/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25320.php">Siegmar Gross: "Re: [OMPI users] unaligned accesses"</a>
<li><strong>In reply to:</strong> <a href="25319.php">JR Cary: "[OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Reply:</strong> <a href="25322.php">JR Cary: "Re: [OMPI users] Multiple threads for an mpi process"</a>
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
