<?
$subject_val = "Re: [OMPI users] linking with openmpi version 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 17:47:16 2014" -->
<!-- isoreceived="20140224224716" -->
<!-- sent="Mon, 24 Feb 2014 17:47:14 -0500" -->
<!-- isosent="20140224224714" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] linking with openmpi version 1.6.1" -->
<!-- id="530BCBF2.3000404_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C1B52893-F61B-4562-AE5D-CCCFE14FAAF3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] linking with openmpi version 1.6.1<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-24 17:47:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>In reply to:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Reply:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/24/2014 4:45 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; This is not an issue with Open MPI; it's an issue with how the Fortran compiler works on your Linux system.  It's choosing to put suffix it Fortran symbols with &quot;_&quot; (and possibly in some cases
</span><br>
<p>[with long past compilers],
<br>
<p><span class="quotelev1">&gt;   &quot;__&quot;)
</span><br>
<span class="quotelev1">&gt; , whereas the C compiler is not.  FWIW, this is a fairly common Fortran Linux compiler convention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or you can use the new Fortran'08 C interop stuff (BIND(C)), in which you can specify the C symbol name in the Fortran code.  Be aware that while this is supported in some Fortran compilers, it is not yet necessarily supported in the version of gfortran that you may be using.
</span><br>
iso_c_binding was introduced in Fortran 03, and supported in gfortran at 
<br>
least since version 4.4, which is about as old a version as you have any 
<br>
business trying (no older ones have adequate documentation remaining on 
<br>
line).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, FWIW, OMPI 1.6.1 is ancient.  Can you upgrade to the latest 1.6.x version of Open MPI: 1.6.5?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="23635.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_BUFFER with MPI_SENDRECEV"</a>
<li><strong>In reply to:</strong> <a href="23634.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>Reply:</strong> <a href="23637.php">Jeff Squyres (jsquyres): "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
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
