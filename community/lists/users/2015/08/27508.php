<?
$subject_val = "Re: [OMPI users] MPI_LB in a recursive type";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 20:56:27 2015" -->
<!-- isoreceived="20150829005627" -->
<!-- sent="Sat, 29 Aug 2015 09:56:26 +0900" -->
<!-- isosent="20150829005626" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_LB in a recursive type" -->
<!-- id="CAAkFZ5skBZdDjgGNE23ZgJBLyPQE1xZMM=pk3vTnZ9B4ythw3g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="alpine.LRH.2.20.1508281113220.10191_at_spark.ices.utexas.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 20:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<li><strong>Previous message:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>In reply to:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roy,
<br>
<p>you can create your type without MPI_UB nor MPI_LB, and then use
<br>
MPI_Type_create_resized to set lower bound and extent
<br>
(note this sets extent and not upper bound)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, August 29, 2015, Roy Stogner &lt;roystgnr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First and foremost the two datatype markers (MPI_LB and MPI_UB) have been
</span><br>
<span class="quotelev2">&gt;&gt; deprecated from MPI 3.0 for exactly the reason you encountered. Once a
</span><br>
<span class="quotelev2">&gt;&gt; datatype is annotated with these markers, they are propagated to all
</span><br>
<span class="quotelev2">&gt;&gt; derived types, leading to an unnatural datatype definition. This behavior
</span><br>
<span class="quotelev2">&gt;&gt; is enforced by the definition of the typemap specified by the equation on
</span><br>
<span class="quotelev2">&gt;&gt; Section 4.1 page 105 line 18. Unfortunately, the only way to circumvent
</span><br>
<span class="quotelev2">&gt;&gt; this issue, is to manually set the UB to all newly created datatypes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see I should have directly checked the specification to see what the
</span><br>
<span class="quotelev1">&gt; expected behavior was, instead of relying on (apparently over-)
</span><br>
<span class="quotelev1">&gt; simplified summaries from web searches and books.  Thanks for the
</span><br>
<span class="quotelev1">&gt; pointer!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd wondered if this was a fixable bug, but it looks like that
</span><br>
<span class="quotelev1">&gt; equation dates back to at *least* 1994 and the MPI-1.0 spec; clearly
</span><br>
<span class="quotelev1">&gt; the only thing to do was deprecate and replace the API rather than
</span><br>
<span class="quotelev1">&gt; breaking old user code to enforce the &quot;right&quot; behavior instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, to fix your datatype composition you just have to add an explicit
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LB (set to 0) when calling the MPI_Type_struct on your second struct
</span><br>
<span class="quotelev2">&gt;&gt; datatype.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd managed to hit on this solution by guesswork, but it's quite a
</span><br>
<span class="quotelev1">&gt; relief to know that its correctness is actually mandated by the MPI
</span><br>
<span class="quotelev1">&gt; standand not just my dumb luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Roy Stogner
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27506.php">http://www.open-mpi.org/community/lists/users/2015/08/27506.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<li><strong>Previous message:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>In reply to:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
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
