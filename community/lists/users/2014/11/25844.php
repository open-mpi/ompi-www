<?
$subject_val = "Re: [OMPI users] mpi_wtime implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 06:19:13 2014" -->
<!-- isoreceived="20141119111913" -->
<!-- sent="Wed, 19 Nov 2014 11:19:10 +0000" -->
<!-- isosent="20141119111910" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_wtime implementation" -->
<!-- id="87wq6re8up.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1416246457.19540.15.camel_at_testbox.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_wtime implementation<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-19 06:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25843.php">George Bosilca: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Daniels, Marcus G&quot; &lt;mdaniels_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Mon, 2014-11-17 at 17:31 +0000, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I discovered from looking at the mpiP profiler that OMPI always uses
</span><br>
<span class="quotelev2">&gt;&gt; gettimeofday rather than clock_gettime to implement mpi_wtime on
</span><br>
<span class="quotelev2">&gt;&gt; GNU/Linux, and that looks sub-optimal. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can be very expensive in practice, especially for codes that have
</span><br>
<span class="quotelev1">&gt; fine-grained instrumentation. 
</span><br>
<p>OK, but I assumed VT would take that sort of thing into account for
<br>
platforms I don't have.  clock_gettime(CLOCK_MONOTONIC,) is as fast as
<br>
gettimeofday on our mainstream sort of system (RHEL6, sandybridge);
<br>
CLOCK_MONOTONIC_COARSE is about three times faster.  [I can't find that
<br>
sort of information in Linux doc.]
<br>
<p>Perhaps there should be a choice via an MCA parameter, but it looks as
<br>
though it should default to clock_gettime on x86_64 Linux.  I suppose
<br>
one can argue what &quot;high resolution&quot; means in the mpi_wtime doc, but I'd
<br>
rather not.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25843.php">George Bosilca: "Re: [OMPI users] collective algorithms"</a>
<li><strong>In reply to:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Reply:</strong> <a href="25845.php">George Bosilca: "Re: [OMPI users] mpi_wtime implementation"</a>
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
