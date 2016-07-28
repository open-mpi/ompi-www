<?
$subject_val = "Re: [OMPI users] MPI_COMPLEX16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 25 04:47:29 2012" -->
<!-- isoreceived="20120525084729" -->
<!-- sent="Fri, 25 May 2012 08:47:09 +0000 (UTC)" -->
<!-- isosent="20120525084709" -->
<!-- name="Patrick Le Dot" -->
<!-- email="Patrick.Le-Dot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMPLEX16" -->
<!-- id="loom.20120525T104123-97_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A244475A-0CB2-4F1D-AFB3-990347C05072_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMPLEX16<br>
<strong>From:</strong> Patrick Le Dot (<em>Patrick.Le-Dot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-25 04:47:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19384.php">TERRY DONTJE: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres &lt;at&gt; cisco.com&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for taking so long to respond to this.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick -- I just created <a href="https://svn.open-mpi.org/trac/ompi/ticket/3109">https://svn.open-mpi.org/trac/ompi/ticket/3109</a> to
</span><br>
track this issue.  Could
<br>
<span class="quotelev1">&gt; you attach your patch to that ticket?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Attached to ticket 3109 :
<br>
<p>Patch for openmpi-1.6.0
<br>
Fix missing MPI_COMPLEX8 and MPI_COMPLEX16 types.
<br>
Add also MPI_COMPLEX32 even this last one still turned off by configure.
<br>
<p>Note for David : if you want to backport the fix on openmpi-1.5.*
<br>
ompi/op/op.c should be updated too.
<br>
<p>Patrick
<br>
<p><pre>
-- 
$ hg diff
diff -r 922a81be964b ompi/datatype/ompi_datatype_module.c
--- a/ompi/datatype/ompi_datatype_module.c  Thu May 10 14:03:17 2012 +0000
+++ b/ompi/datatype/ompi_datatype_module.c  Fri May 25 08:45:26 2012 +0200
@@ -467,6 +467,21 @@
     DECLARE_MPI2_COMPOSED_STRUCT_DDT( &amp;ompi_mpi_cplex.dt,
OMPI_DATATYPE_COMPLEX, &quot;MPI_COMPLEX&quot;,
                                       float, float, OMPI_DATATYPE_MPI_FLOAT,
OMPI_DATATYPE_MPI_FLOAT,
                                       OMPI_DATATYPE_FLAG_DATA_FORTRAN |
OMPI_DATATYPE_FLAG_DATA_FLOAT );
+#if OMPI_HAVE_FORTRAN_COMPLEX8
+    DECLARE_MPI2_COMPOSED_STRUCT_DDT( &amp;ompi_mpi_complex8.dt,
OMPI_DATATYPE_COMPLEX8, &quot;MPI_COMPLEX8&quot;,
+                                      float, float, OMPI_DATATYPE_MPI_FLOAT,
OMPI_DATATYPE_MPI_FLOAT,
+                                      OMPI_DATATYPE_FLAG_DATA_FORTRAN |
OMPI_DATATYPE_FLAG_DATA_FLOAT );
+#endif  /* OMPI_HAVE_FORTRAN_COMPLEX8 */
+#if OMPI_HAVE_FORTRAN_COMPLEX16
+    DECLARE_MPI2_COMPOSED_STRUCT_DDT( &amp;ompi_mpi_complex16.dt,
OMPI_DATATYPE_COMPLEX16, &quot;MPI_COMPLEX16&quot;,
+                                      double, double, OMPI_DATATYPE_MPI_DOUBLE,
OMPI_DATATYPE_MPI_DOUBLE,
+                                      OMPI_DATATYPE_FLAG_DATA_FORTRAN |
OMPI_DATATYPE_FLAG_DATA_FLOAT );
+#endif  /* OMPI_HAVE_FORTRAN_COMPLEX16 */
+#if OMPI_HAVE_FORTRAN_COMPLEX32
+    DECLARE_MPI2_COMPOSED_STRUCT_DDT( &amp;ompi_mpi_complex32.dt,
OMPI_DATATYPE_COMPLEX32, &quot;MPI_COMPLEX32&quot;,
+                                      long double, long double,
OMPI_DATATYPE_MPI_LONG_DOUBLE, OMPI_DATATYPE_MPI_LONG_DOUBLE,
+                                      OMPI_DATATYPE_FLAG_DATA_FORTRAN |
OMPI_DATATYPE_FLAG_DATA_FLOAT );
+#endif  /* OMPI_HAVE_FORTRAN_COMPLEX32 */
     DECLARE_MPI2_COMPOSED_STRUCT_DDT( &amp;ompi_mpi_dblcplex.dt,
OMPI_DATATYPE_DOUBLE_COMPLEX, &quot;MPI_DOUBLE_COMPLEX&quot;,
                                       double, double, OMPI_DATATYPE_MPI_DOUBLE,
OMPI_DATATYPE_MPI_DOUBLE,
                                       OMPI_DATATYPE_FLAG_DATA_FORTRAN |
OMPI_DATATYPE_FLAG_DATA_FLOAT );
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19384.php">TERRY DONTJE: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19382.php">George Bosilca: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
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
