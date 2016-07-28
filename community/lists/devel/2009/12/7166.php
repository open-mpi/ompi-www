<?
$subject_val = "Re: [OMPI devel] MPI_Graph_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 16:26:21 2009" -->
<!-- isoreceived="20091201212621" -->
<!-- sent="Wed, 02 Dec 2009 08:26:14 +1100" -->
<!-- isosent="20091201212614" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Graph_create" -->
<!-- id="4B1589F6.5000800_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28409_1255561528_4AD65938_28409_53752_1_4AD65910.10308_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Graph_create<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 16:26:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Previous message:</strong> <a href="7165.php">Jeff Squyres: "[OMPI devel] Doodle to discuss 2 MPI_Request changes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7168.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Reply:</strong> <a href="7168.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like MPI_Cart_create argument checking was fixed in 1.3.4
<br>
but not MPI_Graph_create.
<br>
<p>vayu1:~/openmpi-1.3.4 &gt; diff -w -u ompi/mpi/c/cart_create.c ompi/mpi/c/graph_create.c
<br>
<p>...
<br>
<p>-int MPI_Cart_create(MPI_Comm old_comm, int ndims, int *dims,
<br>
-                    int *periods, int reorder, MPI_Comm *comm_cart) {
<br>
+int MPI_Graph_create(MPI_Comm old_comm, int nnodes, int *index,
<br>
+                     int *edges, int reorder, MPI_Comm *comm_graph)
<br>
+{
<br>
<p>...
<br>
<p>+        if ((0 &gt; reorder) || (1 &lt; reorder)) {
<br>
<p><p>David
<br>
<p>David Singleton wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kiril Dichev has already pointed a problem with MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6627.php">http://www.open-mpi.org/community/lists/devel/2009/08/6627.php</a>
</span><br>
<span class="quotelev1">&gt; MPI_Graph_create has the same problem.  I checked all other
</span><br>
<span class="quotelev1">&gt; functions with logical in arguments and no others do anything
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Previous message:</strong> <a href="7165.php">Jeff Squyres: "[OMPI devel] Doodle to discuss 2 MPI_Request changes"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7168.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Reply:</strong> <a href="7168.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
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
