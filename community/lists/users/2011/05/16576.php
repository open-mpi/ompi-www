<?
$subject_val = "Re: [OMPI users] Openib with &gt; 32 cores per node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 11:38:01 2011" -->
<!-- isoreceived="20110519153801" -->
<!-- sent="Thu, 19 May 2011 16:37:56 +0100" -->
<!-- isosent="20110519153756" -->
<!-- name="Robert Horton" -->
<!-- email="r.horton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openib with &amp;gt; 32 cores per node" -->
<!-- id="1305819476.9663.148.camel_at_moelwyn" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="96704372-0769-4D63-BAA6-56FF331446BE_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openib with &gt; 32 cores per node<br>
<strong>From:</strong> Robert Horton (<em>r.horton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 11:37:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>In reply to:</strong> <a href="16573.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks for that. If I run the job over 2 x 48 cores it now works and the
<br>
performance seems reasonable (I need to do some more tuning) but when I
<br>
go up to 4 x 48 cores I'm getting the same problem:
<br>
<p>[compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
[compute-1-7.local:18106] *** An error occurred in MPI_Isend
<br>
[compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
<br>
[compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
<br>
[compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>Any thoughts?
<br>
<p>Thanks,
<br>
Rob
<br>
<pre>
-- 
Robert Horton
System Administrator (Research Support) - School of Mathematical Sciences
Queen Mary, University of London
r.horton_at_[hidden]  -  +44 (0) 20 7882 7345
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Previous message:</strong> <a href="16575.php">Paul van der Walt: "Re: [OMPI users] Error: Entry Point Not Found"</a>
<li><strong>In reply to:</strong> <a href="16573.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16577.php">Samuel K. Gutierrez: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
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
