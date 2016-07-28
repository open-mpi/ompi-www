<?
$subject_val = "Re: [OMPI users] linking with openmpi version 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 24 17:48:52 2014" -->
<!-- isoreceived="20140224224852" -->
<!-- sent="Mon, 24 Feb 2014 22:48:51 +0000" -->
<!-- isosent="20140224224851" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] linking with openmpi version 1.6.1" -->
<!-- id="82622B04-E625-4641-9178-4840D3951031_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="530BCBF2.3000404_at_aol.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-24 17:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23638.php">vithanousek: "[OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2014, at 5:47 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Or you can use the new Fortran'08 C interop stuff (BIND(C)), in which you can specify the C symbol name in the Fortran code.  Be aware that while this is supported in some Fortran compilers, it is not yet necessarily supported in the version of gfortran that you may be using.
</span><br>
<span class="quotelev1">&gt; iso_c_binding was introduced in Fortran 03, and supported in gfortran at least since version 4.4, which is about as old a version as you have any business trying (no older ones have adequate documentation remaining on line).
</span><br>
<p>Thanks for the correction.
<br>
<p>This is why I shouldn't write any Fortran code.  :-)
<br>
<p>The ISO_C_BINDING stuff is what you should use; then you don't have to do any funky symbol mangling in C to match whatever Fortran is doing.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23638.php">vithanousek: "[OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="23636.php">Tim Prince: "Re: [OMPI users] linking with openmpi version 1.6.1"</a>
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
