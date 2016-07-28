<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 10 20:41:10 2006" -->
<!-- isoreceived="20060111014110" -->
<!-- sent="Tue, 10 Jan 2006 17:41:00 -0800" -->
<!-- isosent="20060111014100" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re:  Intel tests" -->
<!-- id="1136943660.43c4622c52e05_at_mymail.pacificu.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto=" Intel tests" -->
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
<strong>Date:</strong> 2006-01-10 20:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Previous message:</strong> <a href="0663.php">Graham E Fagg: "Re:  Intel tests"</a>
<li><strong>Maybe in reply to:</strong> <a href="0663.php">Graham E Fagg: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Graham,
<br>
<p>It works properly if I select the basic coll component. Anyways, here is
<br>
the output you requested. The full output is about 140MB, so I killed it
<br>
before it  finished...
<br>
<p>Tim
<br>
<p>Quoting Graham E Fagg &lt;fagg_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Tim
</span><br>
<span class="quotelev1">&gt;   nope, can you rerun with  mpirun -np 4 -mca coll_base_verbose 1
</span><br>
<span class="quotelev1">&gt; &lt;test&gt;
</span><br>
<span class="quotelev1">&gt; and email me the output?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; G
</span><br>
<span class="quotelev1">&gt; On Tue, 10 Jan 2006, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been playing around with Open-MPI, using it as a test bed
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt; another project I am working on, and have found that on the intel
</span><br>
<span class="quotelev1">&gt; test
</span><br>
<span class="quotelev2">&gt; &gt; suite, ompi is failing the MPI_Allreduce_user_c,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Reduce_scatter_user_c, and MPI_Reduce_user_c tests (it prints
</span><br>
<span class="quotelev2">&gt; &gt; something like  MPITEST error (2): i=0, int value=4, expected 1,
</span><br>
<span class="quotelev1">&gt; etc).
</span><br>
<span class="quotelev2">&gt; &gt; Are these known error?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW, this is on a x86_64 linux box running 4 processes locally,
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev2">&gt; &gt; the trunk svn version 8667, with no additional mca parameters set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIm
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p>


<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0664/allreduce_user_c.out.bz2">allreduce_user_c.out.bz2</a>
</ul>
<!-- attachment="allreduce_user_c.out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0664/reduce_scatter_user_c.out.bz2">reduce_scatter_user_c.out.bz2</a>
</ul>
<!-- attachment="reduce_scatter_user_c.out.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0664/reduce_user_c.out.bz2">reduce_user_c.out.bz2</a>
</ul>
<!-- attachment="reduce_user_c.out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0665.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Previous message:</strong> <a href="0663.php">Graham E Fagg: "Re:  Intel tests"</a>
<li><strong>Maybe in reply to:</strong> <a href="0663.php">Graham E Fagg: "Re:  Intel tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
<li><strong>Reply:</strong> <a href="0676.php">Graham E Fagg: "Re:  Intel tests"</a>
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
