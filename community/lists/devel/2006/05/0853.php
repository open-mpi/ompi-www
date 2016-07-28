<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May  6 13:32:17 2006" -->
<!-- isoreceived="20060506173217" -->
<!-- sent="Sat, 06 May 2006 19:32:14 +0200" -->
<!-- isosent="20060506173214" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] pnetcdf &amp;amp; Open MPI" -->
<!-- id="445CDD9E.9000908_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="445B718B.8000905_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-06 13:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Ralf Wildenhues: "[OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dries Kimpe wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;quote&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that the OpenMPI group takes ROMIO as-is from an older release. Then they pass
</span><br>
<span class="quotelev1">&gt; MPI_COMBINER_SUBARRAY as-is to ROMIO, which in that release it does not understand. Then ROMIO blows up.
</span><br>
<span class="quotelev1">&gt; &lt;/quote&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try recompiling Open MPI with a newer version of ROMIO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Found the problem;
<br>
mca/io/romio/romio/adio/common/flatten.c  contains conditional code for
<br>
MPI implementations not supporting COMBINER_SUBARRAY, COMBINER_DARRAY
<br>
and COMBINER_DUP.
<br>
<p>OpenMPI supports these, but fails to #define the necessary symbols:
<br>
<p>MPIIMPL_HAVE_MPI_COMBINER_DARRAY
<br>
MPIIMPL_HAVE_MPI_COMBINER_SUBARRAY
<br>
MPIIMPL_HAVE_MPI_COMBINER_DUP
<br>
<p>Because of this, ROMIO excludes support for these datatype constructors.
<br>
<p>Solution:
<br>
remove the #ifdef/#endif in flatten.c or #define the correct symbols.
<br>
<p>I verified that this solves the problem. (pnetcdf tests work now).
<br>
<p>Atteched patch removes the conditional code.
<br>
<p>&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;Dries
<br>
<p><p>
<p>
Index: flatten.c
<br>
===================================================================
<br>
--- flatten.c	(revision 9836)
<br>
+++ flatten.c	(working copy)
<br>
@@ -116,7 +116,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_contents(datatype, nints, nadds, ntypes, ints, adds, types);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (combiner) {
<br>
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DUP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_DUP:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;old_ntypes, &amp;old_combiner); 
<br>
@@ -124,8 +123,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((old_combiner != MPI_COMBINER_NAMED) &amp;&amp; (!old_is_contig))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADIOI_Flatten(types[0], flat, st_offset, curr_index);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-#endif
<br>
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_SUBARRAY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_SUBARRAY:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dims = ints[0];
<br>
@@ -142,8 +139,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;stype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-#endif
<br>
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DARRAY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_DARRAY:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dims = ints[2];
<br>
@@ -163,7 +158,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;dtype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_CONTIGUOUS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top_count = ints[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
@@ -523,7 +517,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_contents(datatype, nints, nadds, ntypes, ints, adds, types);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (combiner) {
<br>
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DUP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_DUP:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;old_ntypes, &amp;old_combiner); 
<br>
@@ -535,8 +528,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*curr_index)++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-#endif
<br>
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_SUBARRAY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_SUBARRAY:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dims = ints[0];
<br>
@@ -557,8 +548,6 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-#endif
<br>
-#ifdef MPIIMPL_HAVE_MPI_COMBINER_DARRAY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_DARRAY:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int dims = ints[2];
<br>
@@ -581,7 +570,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_free(&amp;dtype);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MPI_COMBINER_CONTIGUOUS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top_count = ints[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_get_envelope(types[0], &amp;old_nints, &amp;old_nadds,
<br>
<p><p>
<br><p>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Previous message:</strong> <a href="0852.php">Ralf Wildenhues: "[OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Reply:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
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
