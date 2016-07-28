<?
$subject_val = "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 10:36:05 2016" -->
<!-- isoreceived="20160321143605" -->
<!-- sent="Mon, 21 Mar 2016 14:36:02 +0000" -->
<!-- isosent="20160321143602" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="9B9B1BE7-9E0E-46B5-8FE5-F62B18B74449_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vqNdcQ36mVLen+VhdDmeP584rqHUHTrq=TyNWGNm-hzA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 10:36:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28772.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Existing and emerging interconnects for commodity	PCs"</a>
<li><strong>Previous message:</strong> <a href="28770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>In reply to:</strong> <a href="28766.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2016, at 9:23 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Durga,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; since the MPI c++ bindings are not required, you might want to
</span><br>
<span class="quotelev1">&gt; mpicc ... -lstd++
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; mpicxx ...
</span><br>
<p>I'm not sure I'd recommend that.  Using the C++ compiler may do other C++-specific bootstrapping things that the C compiler will not.  Meaning: I wouldn't assume that the only difference between linking with the C++ compiler vs. the C compiler is -lstd++.
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
<li><strong>Next message:</strong> <a href="28772.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Existing and emerging interconnects for commodity	PCs"</a>
<li><strong>Previous message:</strong> <a href="28770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>In reply to:</strong> <a href="28766.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
