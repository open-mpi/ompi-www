<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 10 19:17:28 2006" -->
<!-- isoreceived="20060111001728" -->
<!-- sent="Tue, 10 Jan 2006 19:17:19 -0500 (EST)" -->
<!-- isosent="20060111001719" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re:  Intel tests" -->
<!-- id="Pine.LNX.4.62.0601101915520.4405_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1136917722.43c3fcda6e3a4_at_mymail.pacificu.edu" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-10 19:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0662.php">Tim Prins: "Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0662.php">Tim Prins: "Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Maybe reply:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
&nbsp;&nbsp;nope, can you rerun with  mpirun -np 4 -mca coll_base_verbose 1 &lt;test&gt;
<br>
and email me the output?
<br>
Thanks
<br>
G
<br>
On Tue, 10 Jan 2006, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been playing around with Open-MPI, using it as a test bed for
</span><br>
<span class="quotelev1">&gt; another project I am working on, and have found that on the intel test
</span><br>
<span class="quotelev1">&gt; suite, ompi is failing the MPI_Allreduce_user_c,
</span><br>
<span class="quotelev1">&gt; MPI_Reduce_scatter_user_c, and MPI_Reduce_user_c tests (it prints
</span><br>
<span class="quotelev1">&gt; something like  MPITEST error (2): i=0, int value=4, expected 1, etc).
</span><br>
<span class="quotelev1">&gt; Are these known error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, this is on a x86_64 linux box running 4 processes locally, running
</span><br>
<span class="quotelev1">&gt; the trunk svn version 8667, with no additional mca parameters set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIm
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0662.php">Tim Prins: "Intel tests"</a>
<li><strong>In reply to:</strong> <a href="0662.php">Tim Prins: "Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Maybe reply:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
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
