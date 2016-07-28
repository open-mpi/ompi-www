<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 13:02:50 2007" -->
<!-- isoreceived="20070926170250" -->
<!-- sent="Wed, 26 Sep 2007 13:02:47 -0400" -->
<!-- isosent="20070926170247" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[OMPI devel] Use of the ompi free list" -->
<!-- id="C32008F7.F1AF%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 13:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Reply:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are looking at making some changes to the ompi free list in ompi/class/
<br>
ompi_free_list.[c,h] , and are trying to decide if to go ahead with an
<br>
interface change that will allow separate control over alignment of the frag
<br>
and payload data structures.  We are aware of several implementations of
<br>
btl's and mtl's that are not part of the Open MPI repository, and want to
<br>
minimize changes to these.  We have an option to make these changes by
<br>
duplicating code, and creating a new set of functions to handle the
<br>
alignment (and other cleanup) issues, not perturbing existing code.  The
<br>
questions are, does anyone have code out there that uses the ompi free
<br>
lists, and if so would would an interface change to the init functions cause
<br>
you trouble ?
<br>
<p>Thanks,
<br>
Rich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2365.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Reply:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
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
