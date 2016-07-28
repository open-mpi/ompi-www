<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 06:14:23 2014" -->
<!-- isoreceived="20141031101423" -->
<!-- sent="Fri, 31 Oct 2014 11:14:18 +0100" -->
<!-- isosent="20141031101418" -->
<!-- name="Roland Fehrenbacher" -->
<!-- email="rf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="21587.24826.498870.916754_at_gargle.gargle.HOWL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141030214429.GI7441_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem in Open MPI 1.8.3<br>
<strong>From:</strong> Roland Fehrenbacher (<em>rf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-31 06:14:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25656.php">Brock Palen: "[OMPI users] IB Retry Limit Errors when fabric changes"</a>
<li><strong>Previous message:</strong> <a href="25654.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Nathan&quot; == Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; writes:
</span><br>
<p>Hi Nathan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt; I want to close the loop on this issue. 1.8.5 will address
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt; it in several ways:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;  - knem support in btl/sm has been fixed. A sanity check was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;    disabling knem during component registration. I wrote the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;    sanity check before the 1.7 release and didn't intend
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;    this side-effect.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;  - vader now supports xpmem, cma, and knem. The best
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;    available single-copy mechanism will be used. If multiple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;    single-copy mechanisms are available you can select which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt;    one you want to use are runtime.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt; More about the vader btl can be found here:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt; <a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy/">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy/</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Nathan&gt; -Nathan Hjelm HPC-5, LANL
<br>
<p>thanks for the great info. Question about xpmem: Are there any plans by
<br>
someone to maintain the code?
<br>
<p>Roland
<br>
<p>-------
<br>
<a href="http://www.q-leap.com">http://www.q-leap.com</a> / <a href="http://qlustar.com">http://qlustar.com</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- HPC / Storage / Cloud Linux Cluster OS ---
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25656.php">Brock Palen: "[OMPI users] IB Retry Limit Errors when fabric changes"</a>
<li><strong>Previous message:</strong> <a href="25654.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
