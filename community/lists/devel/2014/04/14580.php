<?
$subject_val = "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 01:51:46 2014" -->
<!-- isoreceived="20140423055146" -->
<!-- sent="Wed, 23 Apr 2014 14:51:45 +0900" -->
<!-- isosent="20140423055145" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks" -->
<!-- id="535754F1.4060807_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMJJpkXm2QZQ=2ofXDGtZ9aSk5Ag7hwus4qB2ch+LUy3QYQpQg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 01:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14579.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>i am sorry i cannot see how flatten datatype can be helpful here :-(
<br>
<p>in this example, the master must broadcast a long vector. this datatype
<br>
is contiguous
<br>
so the flatten'ed datatype *is* the type provided by the MPI application.
<br>
<p>how would pipelining happen in this case (e.g. who has to cut the long
<br>
vector into pieces and how) ?
<br>
<p>should a temporary buffer be used ? and then should it be sent into
<br>
pieces of type MPI_PACKED ?
<br>
(and if yes, would this be safe in an heterogenous communicator ?)
<br>
<p>Thanks in advance for your insights,
<br>
<p>Gilles
<br>
<p>On 2014/04/22 12:04, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Indeed there are many potential solutions, but all require too much
</span><br>
<span class="quotelev1">&gt; intervention on the code to be generic enough. As we discussed
</span><br>
<span class="quotelev1">&gt; privately mid last year, the &quot;flatten datatype&quot; approach seems to me
</span><br>
<span class="quotelev1">&gt; to be the most profitable.It is simple to implement and it is also
</span><br>
<span class="quotelev1">&gt; generic, a simple change will make all pipelined collective work (not
</span><br>
<span class="quotelev1">&gt; only tuned but all the other as well).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14579.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14571.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
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
