<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 16:56:14 2006" -->
<!-- isoreceived="20060503205614" -->
<!-- sent="Wed, 3 May 2006 15:56:06 -0500" -->
<!-- isosent="20060503205606" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pnetcdf &amp;amp; Open MPI" -->
<!-- id="20060503205605.GL25378_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4457C1F8.4040400_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-03 16:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Previous message:</strong> <a href="1207.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Dries Kimpe: "[OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1217.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May 02, 2006 at 10:32:56PM +0200, Dries Kimpe wrote:
<br>
<span class="quotelev1">&gt; It looks as if the problem is not really due to Open MPI, but to the
</span><br>
<span class="quotelev1">&gt; included ROM-IO:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All tests fail with the same error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, test/test_double/test_write shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Testing write ... Error: Unsupported datatype passed to
</span><br>
<span class="quotelev1">&gt; ADIOI_Count_contiguous_blocks
</span><br>
<span class="quotelev1">&gt; [lts.mydomain.be:26763] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../orte/mca/pls/base/pls_base_proxy.c at line 189
</span><br>
<p><p>Hi Dries
<br>
<p>Could you send this report over to the parallel-netcdf developers
<br>
(parallel-netcdf_at_[hidden])?  I think we've seen this problem before
<br>
but I cannot remember the specifics.  Others on that mailing list
<br>
would recognize it right away I'm sure.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Previous message:</strong> <a href="1207.php">Bernard Knaepen: "Re: [OMPI users] fortran mpi io malloc error"</a>
<li><strong>In reply to:</strong> <a href="1197.php">Dries Kimpe: "[OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1217.php">Dries Kimpe: "Re: [OMPI users] pnetcdf &amp; Open MPI"</a>
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
