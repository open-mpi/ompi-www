<?
$subject_val = "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 14:47:39 2008" -->
<!-- isoreceived="20080409184739" -->
<!-- sent="Wed, 9 Apr 2008 14:47:31 -0400" -->
<!-- isosent="20080409184731" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu" -->
<!-- id="B3FE3D47-FF21-4879-95DB-F6E343C8E18E_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5CDB6DEFA3B8074999B6F988BD512C4A642AE0_at_CHM-EMAIL1.ad.mc.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu<br>
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 14:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5349.php">Åke Sandgren: "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5347.php">Bailey, Eric: "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Bailey, Eric: "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 9, 2008, at 1:57 PM, Bailey, Eric wrote:
<br>
<span class="quotelev1">&gt; I am trying to use a cross compiler to build Open MPI for an embedded
</span><br>
<span class="quotelev1">&gt; ppc7448 running Linux 2.6 but during configure I get the following
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt; configure:25579: error: No atomic primitives available for
</span><br>
<span class="quotelev1">&gt; ppc74xx-linux-gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have an idea as to how to get past this error?
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; The configure is complaining about the missing atomic directives for
</span><br>
<span class="quotelev1">&gt; your processor. We have the MIPS atomic calls but not the MIPS64. We
</span><br>
<span class="quotelev1">&gt; just have to add them in the opal/asm/base.
</span><br>
<p>based on my reading PPC 7448 is basically the same processor in my  
<br>
Apple PowerMac G4 &lt;<a href="http://en.wikipedia.org/wiki/PowerPC_G4">http://en.wikipedia.org/wiki/PowerPC_G4</a>&gt;.   
<br>
Therefore, OpenMPI should have no trouble as I build OpenMPI on my G4  
<br>
many times.
<br>
<p>I have no idea where the MIPS references come from.  PPC has always  
<br>
meant PowerPC in everything I have seen.  All MIPS chips I'm aware of   
<br>
are labeled Rxxxx.
<br>
<p>It might be best to get a PowerMac G4 and build OpenMPI on it, but  
<br>
you'd probably have better luck if you install Linux on the G4 instead  
<br>
of building OpenMPI on OS X as your final platform is Linux.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5349.php">Åke Sandgren: "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5347.php">Bailey, Eric: "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Bailey, Eric: "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
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
