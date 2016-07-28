<?
$subject_val = "Re: [OMPI devel] MPI_Graph_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 16:54:47 2009" -->
<!-- isoreceived="20091201215447" -->
<!-- sent="Tue, 1 Dec 2009 16:54:42 -0500" -->
<!-- isosent="20091201215442" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Graph_create" -->
<!-- id="C9DD0ED9-1AB0-48A8-81EA-10EFBFE88661_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B1589F6.5000800_at_anu.edu.au" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 16:54:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>In reply to:</strong> <a href="7166.php">David Singleton: "Re: [OMPI devel] MPI_Graph_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7172.php">Chris Samuel: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Reply:</strong> <a href="7172.php">Chris Samuel: "Re: [OMPI devel] MPI_Graph_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely correct.  I've filed CMRs for v1.4 and v1.5.
<br>
<p>Thanks for the heads up!
<br>
<p><p>On Dec 1, 2009, at 4:26 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_Cart_create argument checking was fixed in 1.3.4
</span><br>
<span class="quotelev1">&gt; but not MPI_Graph_create.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vayu1:~/openmpi-1.3.4 &gt; diff -w -u ompi/mpi/c/cart_create.c ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; c/graph_create.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -int MPI_Cart_create(MPI_Comm old_comm, int ndims, int *dims,
</span><br>
<span class="quotelev1">&gt; -                    int *periods, int reorder, MPI_Comm *comm_cart) {
</span><br>
<span class="quotelev1">&gt; +int MPI_Graph_create(MPI_Comm old_comm, int nnodes, int *index,
</span><br>
<span class="quotelev1">&gt; +                     int *edges, int reorder, MPI_Comm *comm_graph)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +        if ((0 &gt; reorder) || (1 &lt; reorder)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Singleton wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kiril Dichev has already pointed a problem with MPI_Cart_create
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6627.php">http://www.open-mpi.org/community/lists/devel/2009/08/6627.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Graph_create has the same problem.  I checked all other
</span><br>
<span class="quotelev2">&gt; &gt; functions with logical in arguments and no others do anything
</span><br>
<span class="quotelev2">&gt; &gt; similar.
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>In reply to:</strong> <a href="7166.php">David Singleton: "Re: [OMPI devel] MPI_Graph_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7172.php">Chris Samuel: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Reply:</strong> <a href="7172.php">Chris Samuel: "Re: [OMPI devel] MPI_Graph_create"</a>
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
