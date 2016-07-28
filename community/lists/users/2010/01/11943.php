<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 11:48:42 2010" -->
<!-- isoreceived="20100129164842" -->
<!-- sent="Fri, 29 Jan 2010 17:50:29 +0100" -->
<!-- isosent="20100129165029" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="87r5p8yhwq.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFC117A02A.8C725740-ON852576BA.00594D50-852576BA.005A3180_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 11:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11944.php">Paul Wolfgang: "[OMPI users] MPI_Bcast hangs on with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="11942.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11942.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 29 Jan 2010 11:25:09 -0500, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Any support for automatic serialization of C++ objects would need to be in
</span><br>
<span class="quotelev1">&gt; some sophisticated utility that is not part of MPI.  There may be such
</span><br>
<span class="quotelev1">&gt; utilities but I do not think anyone who has been involved in the discussion
</span><br>
<span class="quotelev1">&gt; knows of one you can use.  I certainly do not.
</span><br>
<p>C++ really doesn't offer sufficient type introspection to implement
<br>
something like this.  Boost.MPI offers serialization for a few types
<br>
(e.g. some STL containers), but the general solution that you would like
<br>
just doesn't exist (you'd have to write special code for every type you
<br>
want to be able to operate on).
<br>
<p>Python can do things like this, mpi4py can operate transparently on any
<br>
(pickleable) object, and also offers complete bindings to the low-level
<br>
MPI interface.  CL-MPI (Common Lisp) can also do these things, but it's
<br>
much less mature than mpi4py.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11944.php">Paul Wolfgang: "[OMPI users] MPI_Bcast hangs on with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="11942.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11942.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
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
