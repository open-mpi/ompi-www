<?
$subject_val = "Re: [OMPI devel] MPI_Reduce() is losing precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 05:45:08 2012" -->
<!-- isoreceived="20121015094508" -->
<!-- sent="15 Oct 2012 10:45:03 +0100" -->
<!-- isosent="20121015094503" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Reduce() is losing precision" -->
<!-- id="Prayer.1.3.5.1210151045030.11012_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903BD3E0C_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Reduce() is losing precision<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 05:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11599.php">George Bosilca: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>In reply to:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15 2012, Iliev, Hristo wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Numeric differences are to be expected with parallel applications. The 
</span><br>
<span class="quotelev1">&gt; basic reason for that is that on many architectures floating-point 
</span><br>
<span class="quotelev1">&gt; operations are performed using higher internal precision than that of the 
</span><br>
<span class="quotelev1">&gt; arguments and only the final result is rounded back to the lower output 
</span><br>
<span class="quotelev1">&gt; precision. When performing the same operation in parallel, intermediate 
</span><br>
<span class="quotelev1">&gt; results are communicated using the lower precision and thus the final 
</span><br>
<span class="quotelev1">&gt; result could differ. ...
</span><br>
<p>Not quite.  That's ONE reason.
<br>
<p><span class="quotelev1">&gt; You could try to &quot;cure&quot; this (non-problem) by telling your compiler to not
</span><br>
<span class="quotelev1">&gt; use higher precision for intermediate results.
</span><br>
<p>But it wouldn't help if the problem is the other reason, which is that
<br>
floating-point arithmetic is not associative.  That means that the actual
<br>
order of the operations makes a difference to the final result, and that
<br>
is (correctly) unspecified for MPI_Reduce.
<br>
<p>I have had long arguments with people who believe in deterministic
<br>
floating-point (i.e. that consistency implies correctness), but the
<br>
actual fact is that it is an unavoidable problem with parallel use of
<br>
floating-point or indeed any serious numeric optimisation.
<br>
<p>So the summary is that anyone doing floating-point work has to learn
<br>
to live with it.  Any traditional book on numerical programming (i.e.
<br>
before 1980) will take that for granted.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11599.php">George Bosilca: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>In reply to:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
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
