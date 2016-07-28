<?
$subject_val = "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 17:32:54 2015" -->
<!-- isoreceived="20151028213254" -->
<!-- sent="Wed, 28 Oct 2015 22:32:47 +0100" -->
<!-- isosent="20151028213247" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single CPU vs four CPU result differences, is it normal?" -->
<!-- id="20151028213247.GB4833_at_neuromancer.fritz.box" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAG8o1y73kLgEm6geybanSRHyAApm1VEi29dWftKpveVJw359fQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] single CPU vs four CPU result differences, is it normal?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-28 17:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Reply:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22:03 Wed 28 Oct     , Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; When I use a single CPU a get a results, when I use 4 CPU I get another
</span><br>
<span class="quotelev1">&gt; one. I do not think that very is a bug.
</span><br>
<p>Sounds like a bug to me, most likely in your code.
<br>
<p><span class="quotelev1">&gt; Do you think that these small differences are normal?
</span><br>
<p>It depends on what small means. Floating point operations in a
<br>
computer are generally not commutative, so parallelization may in deed
<br>
lead to different results.
<br>
<p><span class="quotelev1">&gt; Is there any way to get the same results? is some align problem?
</span><br>
<p>Impossible to say without knowing your code.
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Department of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27933/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Previous message:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>In reply to:</strong> <a href="27932.php">Diego Avesani: "[OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
<li><strong>Reply:</strong> <a href="27934.php">Diego Avesani: "Re: [OMPI users] single CPU vs four CPU result differences, is it normal?"</a>
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
