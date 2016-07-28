<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 14 19:37:06 2006" -->
<!-- isoreceived="20060115003706" -->
<!-- sent="Sat, 14 Jan 2006 16:35:14 -0800" -->
<!-- isosent="20060115003514" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re:  Intel tests" -->
<!-- id="1137285314.43c998c2b9e66_at_mymail.pacificu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.62.0601131823390.4405_at_reliant.cs.utk.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-14 19:35:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0677.php">Graham E Fagg: "Re:  [OMPI svn] svn:open-mpi r8692"</a>
<li><strong>In reply to:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Graham,
<br>
<p>with the trunk r8695 I no longer get these errors.
<br>
<p>Tim
<br>
<p>Quoting Graham E Fagg &lt;fagg_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Tim
</span><br>
<span class="quotelev1">&gt;   I can get an error but not quite the same as yours. In my case I
</span><br>
<span class="quotelev1">&gt; get a
</span><br>
<span class="quotelev1">&gt; segfault as someone corrupts the memory attached to a communicator
</span><br>
<span class="quotelev1">&gt; (data
</span><br>
<span class="quotelev1">&gt; segment). Looks like a possible inplace error. Expect a fix shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; G.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 10 Jan 2006, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Graham,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It works properly if I select the basic coll component. Anyways,
</span><br>
<span class="quotelev1">&gt; here is
</span><br>
<span class="quotelev2">&gt; &gt; the output you requested. The full output is about 140MB, so I
</span><br>
<span class="quotelev1">&gt; killed it
</span><br>
<span class="quotelev2">&gt; &gt; before it  finished...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoting Graham E Fagg &lt;fagg_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Tim
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   nope, can you rerun with  mpirun -np 4 -mca coll_base_verbose 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;test&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and email me the output?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; G
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, 10 Jan 2006, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have been playing around with Open-MPI, using it as a test bed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; another project I am working on, and have found that on the
</span><br>
<span class="quotelev1">&gt; intel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; test
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; suite, ompi is failing the MPI_Allreduce_user_c,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Reduce_scatter_user_c, and MPI_Reduce_user_c tests (it
</span><br>
<span class="quotelev1">&gt; prints
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; something like  MPITEST error (2): i=0, int value=4, expected 1,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; etc).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Are these known error?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; BTW, this is on a x86_64 linux box running 4 processes locally,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the trunk svn version 8667, with no additional mca parameters
</span><br>
<span class="quotelev1">&gt; set.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; TIm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  	Graham.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dr Graham E. Fagg       | Distributed, Parallel and
</span><br>
<span class="quotelev1">&gt; Meta-Computing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; University of Tennessee | Knoxville, Tennessee, USA. TN
</span><br>
<span class="quotelev1">&gt; 37996-3450
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 |
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fax:+1(865)974-8296
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Broken complex systems are always derived from working simple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  	Graham.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
</span><br>
<span class="quotelev1">&gt; Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
</span><br>
<span class="quotelev1">&gt; Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
</span><br>
<span class="quotelev1">&gt; University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
</span><br>
<span class="quotelev1">&gt; Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 |
</span><br>
<span class="quotelev1">&gt; Fax:+1(865)974-8296
</span><br>
<span class="quotelev1">&gt; Broken complex systems are always derived from working simple
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<li><strong>Previous message:</strong> <a href="0677.php">Graham E Fagg: "Re:  [OMPI svn] svn:open-mpi r8692"</a>
<li><strong>In reply to:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0679.php">David Daniel: "Re:  Intel tests"</a>
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
