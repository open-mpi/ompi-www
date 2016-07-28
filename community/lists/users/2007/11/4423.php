<?
$subject_val = "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 02:10:01 2007" -->
<!-- isoreceived="20071107071001" -->
<!-- sent="Wed, 07 Nov 2007 08:09:52 +0100" -->
<!-- isosent="20071107070952" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler" -->
<!-- id="1194419392.1486.112.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43EC3031-D932-4DC4-8A02-68AE367C4C7D_at_cisco.com" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 02:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4422.php">Gleb Natapov: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>In reply to:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4425.php">Michael Schulz: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-11-06 at 20:49 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 6, 2007, at 4:42 AM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I had the same problem with pathscale.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a known outstanding problem with the pathscale problem.  I am  
</span><br>
<span class="quotelev1">&gt; still waiting for a solution from their engineers (we don't know yet  
</span><br>
<span class="quotelev1">&gt; whether it's an OMPI issue or a Pathscale issue, but my [biased] money  
</span><br>
<span class="quotelev1">&gt; is on a Pathscale issue :-) -- it doesn't happen with any other  
</span><br>
<span class="quotelev1">&gt; compiler).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Try this, i think it is the solution i found.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; diff -ru site/opal/runtime/opal_init.c
</span><br>
<span class="quotelev2">&gt; &gt; amd64_ubuntu606-psc/opal/runtime/opal_init.c
</span><br>
<span class="quotelev2">&gt; &gt; --- site/opal/runtime/opal_init.c       2007-10-20 03:00:35.000000000
</span><br>
<span class="quotelev2">&gt; &gt; +0200
</span><br>
<span class="quotelev2">&gt; &gt; +++ amd64_ubuntu606-psc/opal/runtime/opal_init.c        2007-10-23
</span><br>
<span class="quotelev2">&gt; &gt; 16:12:15.000000000 +0200
</span><br>
<span class="quotelev2">&gt; &gt; @@ -169,7 +169,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     /* register params for opal */
</span><br>
<span class="quotelev2">&gt; &gt; -    if (OPAL_SUCCESS !=  opal_register_params()) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (OPAL_SUCCESS !=  (ret = opal_register_params())) {
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;opal_register_params&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto return_error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't see why this change would make any difference in terms of a  
</span><br>
<span class="quotelev1">&gt; segv...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see that ret is an uninitialized variable in the error case (which  
</span><br>
<span class="quotelev1">&gt; I'll fix -- thanks for pointing it out :-) ) -- but I don't see how  
</span><br>
<span class="quotelev1">&gt; that would fix a segv.  Am I missing something?
</span><br>
<p>The problem is that i don't really remember what fixed my problem (or if
<br>
it got interrupted before i managed to fix it in the first place).
<br>
I have been busy building other software for a couple of weeks.
<br>
The above was simply the only patch i hade made that i didn't know
<br>
exactly what it was doing.
<br>
<p>But judging from trying to run that version of ompi_info i still have
<br>
problems.
<br>
<p>I've been working with this for a while and can hopefully continue
<br>
pursuing it next week or so.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4422.php">Gleb Natapov: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>In reply to:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4425.php">Michael Schulz: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
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
