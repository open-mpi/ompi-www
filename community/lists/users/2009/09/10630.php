<?
$subject_val = "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 08:46:25 2009" -->
<!-- isoreceived="20090912124625" -->
<!-- sent="Sat, 12 Sep 2009 08:46:20 -0400" -->
<!-- isosent="20090912124620" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux" -->
<!-- id="8D0F2D4B-9849-40B4-8E20-CB1BCF5337AF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c615a6650909051027j37ed2a79uae71f17dea287617_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intelcompilersuite 11.1 on Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-12 08:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10631.php">Luis Vitorio Cargnini: "[OMPI users] error durgin execution"</a>
<li><strong>Previous message:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2009, at 1:27 PM, Greg Fischer wrote:
<br>
<p><span class="quotelev1">&gt; Yep, that was it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The icpc11.1, ifort11.1, and icc11.1 scripts are included in the tar  
</span><br>
<span class="quotelev1">&gt; file attached to my original email.  They set the PATH,  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, and INTEL_LICENSE_FILE correctly.  When I set the  
</span><br>
<span class="quotelev1">&gt; environment variables manually and use the regular icpc, ifort, and  
</span><br>
<span class="quotelev1">&gt; icc commands, it works fine.  Good catch!
</span><br>
<p>If you care, there's probably ways to catch the quoting in those  
<br>
scripts such that multi-token values can be passed down through  
<br>
properly.  It might be easier to do it in a non-shell script, though  
<br>
(eg., perl or python).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10631.php">Luis Vitorio Cargnini: "[OMPI users] error durgin execution"</a>
<li><strong>Previous message:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10579.php">Greg Fischer: "Re: [OMPI users] error compiling OpenMPI 1.3.3 with Intel compilersuite 11.1 on Linux"</a>
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
