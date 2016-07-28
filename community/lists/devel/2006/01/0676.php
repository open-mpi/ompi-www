<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 18:26:17 2006" -->
<!-- isoreceived="20060113232617" -->
<!-- sent="Fri, 13 Jan 2006 18:26:14 -0500 (EST)" -->
<!-- isosent="20060113232614" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re:  Intel tests" -->
<!-- id="Pine.LNX.4.62.0601131823390.4405_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1136943660.43c4622c52e05_at_mymail.pacificu.edu" -->
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
<strong>Date:</strong> 2006-01-13 18:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0677.php">Graham E Fagg: "Re:  [OMPI svn] svn:open-mpi r8692"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
&nbsp;&nbsp;I can get an error but not quite the same as yours. In my case I get a 
<br>
segfault as someone corrupts the memory attached to a communicator (data 
<br>
segment). Looks like a possible inplace error. Expect a fix shortly.
<br>
<p>G.
<br>
<p>On Tue, 10 Jan 2006, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Graham,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works properly if I select the basic coll component. Anyways, here is
</span><br>
<span class="quotelev1">&gt; the output you requested. The full output is about 140MB, so I killed it
</span><br>
<span class="quotelev1">&gt; before it  finished...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting Graham E Fagg &lt;fagg_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tim
</span><br>
<span class="quotelev2">&gt;&gt;   nope, can you rerun with  mpirun -np 4 -mca coll_base_verbose 1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;test&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and email me the output?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; G
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 10 Jan 2006, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been playing around with Open-MPI, using it as a test bed
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another project I am working on, and have found that on the intel
</span><br>
<span class="quotelev2">&gt;&gt; test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suite, ompi is failing the MPI_Allreduce_user_c,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Reduce_scatter_user_c, and MPI_Reduce_user_c tests (it prints
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something like  MPITEST error (2): i=0, int value=4, expected 1,
</span><br>
<span class="quotelev2">&gt;&gt; etc).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are these known error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, this is on a x86_64 linux box running 4 processes locally,
</span><br>
<span class="quotelev2">&gt;&gt; running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk svn version 8667, with no additional mca parameters set.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  	Graham.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
</span><br>
<span class="quotelev2">&gt;&gt; University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
</span><br>
<span class="quotelev2">&gt;&gt; Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 |
</span><br>
<span class="quotelev2">&gt;&gt; Fax:+1(865)974-8296
</span><br>
<span class="quotelev2">&gt;&gt; Broken complex systems are always derived from working simple
</span><br>
<span class="quotelev2">&gt;&gt; systems
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0677.php">Graham E Fagg: "Re:  [OMPI svn] svn:open-mpi r8692"</a>
<li><strong>Previous message:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0664.php">Tim Prins: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0678.php">Tim Prins: "Re:  Intel tests"</a>
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
