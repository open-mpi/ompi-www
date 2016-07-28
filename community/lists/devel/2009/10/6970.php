<?
$subject_val = "Re: [OMPI devel] MPI_Graph_create";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 19:40:22 2009" -->
<!-- isoreceived="20091015234022" -->
<!-- sent="Fri, 16 Oct 2009 10:40:09 +1100 (EST)" -->
<!-- isosent="20091015234009" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Graph_create" -->
<!-- id="689536916.4607121255650009601.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1147601088.4607071255649842831.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-15 19:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6971.php">Larry Baker: "[OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>Previous message:</strong> <a href="6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<li><strong>Maybe in reply to:</strong> <a href="6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7166.php">David Singleton: "Re: [OMPI devel] MPI_Graph_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;David Singleton&quot; &lt;David.Singleton_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Kiril Dichev has already pointed a problem with MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6627.php">http://www.open-mpi.org/community/lists/devel/2009/08/6627.php</a>
</span><br>
<span class="quotelev1">&gt; MPI_Graph_create has the same problem.  I checked all other
</span><br>
<span class="quotelev1">&gt; functions with logical in arguments and no others do anything
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<p>I suspect the issue (looking at trunk) is at line 113
<br>
of ompi/mpi/c/graph_create.c :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;re_order = (1 == reorder) ? true:false;
<br>
<p>Which means that re_order is only true if 1 is passed
<br>
through via the reorder parameter.
<br>
<p>I suspect changing it to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;re_order = (0 == reorder) ? false:true;
<br>
<p>would fix it as then re_order is only false if 0 is
<br>
passed through (assuming you define 0 as false and
<br>
!0 as true).  Tested via a little harness program
<br>
and it seems to do the right thing.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6971.php">Larry Baker: "[OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>Previous message:</strong> <a href="6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<li><strong>Maybe in reply to:</strong> <a href="6969.php">David Singleton: "[OMPI devel] MPI_Graph_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7166.php">David Singleton: "Re: [OMPI devel] MPI_Graph_create"</a>
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
