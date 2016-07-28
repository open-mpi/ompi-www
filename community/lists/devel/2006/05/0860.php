<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 12:43:56 2006" -->
<!-- isoreceived="20060508164356" -->
<!-- sent="Mon, 8 May 2006 18:43:30 +0200" -->
<!-- isosent="20060508164330" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] pnetcdf &amp;amp; Open MPI" -->
<!-- id="AA6C85AA-168A-4F65-8214-15F50C9FE33B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="445CDD9E.9000908_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 12:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0853.php">Dries Kimpe: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 6, 2006, at 7:32 PM, Dries Kimpe wrote:
<br>
<p><span class="quotelev1">&gt; Dries Kimpe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;quote&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that the OpenMPI group takes ROMIO as-is from an  
</span><br>
<span class="quotelev2">&gt;&gt; older release. Then they pass
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMBINER_SUBARRAY as-is to ROMIO, which in that release it  
</span><br>
<span class="quotelev2">&gt;&gt; does not understand. Then ROMIO blows up.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll try recompiling Open MPI with a newer version of ROMIO.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found the problem;
</span><br>
<span class="quotelev1">&gt; mca/io/romio/romio/adio/common/flatten.c  contains conditional code  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; MPI implementations not supporting COMBINER_SUBARRAY, COMBINER_DARRAY
</span><br>
<span class="quotelev1">&gt; and COMBINER_DUP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI supports these, but fails to #define the necessary symbols:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIIMPL_HAVE_MPI_COMBINER_DARRAY
</span><br>
<span class="quotelev1">&gt; MPIIMPL_HAVE_MPI_COMBINER_SUBARRAY
</span><br>
<span class="quotelev1">&gt; MPIIMPL_HAVE_MPI_COMBINER_DUP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because of this, ROMIO excludes support for these datatype  
</span><br>
<span class="quotelev1">&gt; constructors.
</span><br>
<p>Thanks for the bug report -- I was able to duplicate your  
<br>
experience.  I've committed a slightly different patch to our  
<br>
development trunk.  It should be in tomorrow morning's nightly  
<br>
tarball for any of the active release branches (the trunk, v1.0, and  
<br>
v1.1):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/">http://www.open-mpi.org/nightly/</a>
<br>
<p>Thanks again,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0853.php">Dries Kimpe: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
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
