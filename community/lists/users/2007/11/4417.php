<?
$subject_val = "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 20:49:18 2007" -->
<!-- isoreceived="20071107014918" -->
<!-- sent="Tue, 6 Nov 2007 20:49:12 -0500" -->
<!-- isosent="20071107014912" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler" -->
<!-- id="43EC3031-D932-4DC4-8A02-68AE367C4C7D_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1194342148.1486.98.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 20:49:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4418.php">Teng Lin: "[OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Previous message:</strong> <a href="4416.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="4409.php">&#197;ke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4423.php">흆e Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="4423.php">흆e Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2007, at 4:42 AM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; I had the same problem with pathscale.
</span><br>
<p>There is a known outstanding problem with the pathscale problem.  I am  
<br>
still waiting for a solution from their engineers (we don't know yet  
<br>
whether it's an OMPI issue or a Pathscale issue, but my [biased] money  
<br>
is on a Pathscale issue :-) -- it doesn't happen with any other  
<br>
compiler).
<br>
<p><span class="quotelev1">&gt; Try this, i think it is the solution i found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -ru site/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; amd64_ubuntu606-psc/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; --- site/opal/runtime/opal_init.c       2007-10-20 03:00:35.000000000
</span><br>
<span class="quotelev1">&gt; +0200
</span><br>
<span class="quotelev1">&gt; +++ amd64_ubuntu606-psc/opal/runtime/opal_init.c        2007-10-23
</span><br>
<span class="quotelev1">&gt; 16:12:15.000000000 +0200
</span><br>
<span class="quotelev1">&gt; @@ -169,7 +169,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* register params for opal */
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS !=  opal_register_params()) {
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_SUCCESS !=  (ret = opal_register_params())) {
</span><br>
<span class="quotelev1">&gt;         error = &quot;opal_register_params&quot;;
</span><br>
<span class="quotelev1">&gt;         goto return_error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<p>I don't see why this change would make any difference in terms of a  
<br>
segv...?
<br>
<p>I see that ret is an uninitialized variable in the error case (which  
<br>
I'll fix -- thanks for pointing it out :-) ) -- but I don't see how  
<br>
that would fix a segv.  Am I missing something?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4418.php">Teng Lin: "[OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Previous message:</strong> <a href="4416.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="4409.php">&#197;ke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4423.php">흆e Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="4423.php">흆e Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
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
