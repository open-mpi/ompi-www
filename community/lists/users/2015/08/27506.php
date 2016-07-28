<?
$subject_val = "Re: [OMPI users] MPI_LB in a recursive type";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 12:40:43 2015" -->
<!-- isoreceived="20150828164043" -->
<!-- sent="Fri, 28 Aug 2015 11:40:42 -0500 (CDT)" -->
<!-- isosent="20150828164042" -->
<!-- name="Roy Stogner" -->
<!-- email="roystgnr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_LB in a recursive type" -->
<!-- id="alpine.LRH.2.20.1508281113220.10191_at_spark.ices.utexas.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] MPI_LB in a recursive type" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_LB in a recursive type<br>
<strong>From:</strong> Roy Stogner (<em>roystgnr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 12:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Maybe in reply to:</strong> <a href="27495.php">Roy Stogner: "[OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Reply:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First and foremost the two datatype markers (MPI_LB and MPI_UB) have been
</span><br>
<span class="quotelev1">&gt; deprecated from MPI 3.0 for exactly the reason you encountered. Once a
</span><br>
<span class="quotelev1">&gt; datatype is annotated with these markers, they are propagated to all
</span><br>
<span class="quotelev1">&gt; derived types, leading to an unnatural datatype definition. This behavior
</span><br>
<span class="quotelev1">&gt; is enforced by the definition of the typemap specified by the equation on
</span><br>
<span class="quotelev1">&gt; Section 4.1 page 105 line 18. Unfortunately, the only way to circumvent
</span><br>
<span class="quotelev1">&gt; this issue, is to manually set the UB to all newly created datatypes.
</span><br>
<p>I see I should have directly checked the specification to see what the
<br>
expected behavior was, instead of relying on (apparently over-)
<br>
simplified summaries from web searches and books.  Thanks for the
<br>
pointer!
<br>
<p>I'd wondered if this was a fixable bug, but it looks like that
<br>
equation dates back to at *least* 1994 and the MPI-1.0 spec; clearly
<br>
the only thing to do was deprecate and replace the API rather than
<br>
breaking old user code to enforce the &quot;right&quot; behavior instead.
<br>
<p><span class="quotelev1">&gt; Thus, to fix your datatype composition you just have to add an explicit
</span><br>
<span class="quotelev1">&gt; MPI_LB (set to 0) when calling the MPI_Type_struct on your second struct
</span><br>
<span class="quotelev1">&gt; datatype.
</span><br>
<p>I'd managed to hit on this solution by guesswork, but it's quite a
<br>
relief to know that its correctness is actually mandated by the MPI
<br>
standand not just my dumb luck.
<br>
<p>Thanks again,
<br>
<pre>
---
Roy Stogner
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Maybe in reply to:</strong> <a href="27495.php">Roy Stogner: "[OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Reply:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
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
