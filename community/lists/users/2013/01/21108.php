<?
$subject_val = "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 11:00:04 2013" -->
<!-- isoreceived="20130111160004" -->
<!-- sent="Fri, 11 Jan 2013 15:59:58 +0000" -->
<!-- isosent="20130111155958" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B32A6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301071509.r07F9J2E017037_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI] #3351: JAVA scatter error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 10:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some comments on derived datatypes in mpiJava"</a>
<li><strong>Previous message:</strong> <a href="21107.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2013, at 10:09 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I manually applied your patch to openmpi-1.9a1r27668, because
</span><br>
<span class="quotelev1">&gt; &quot;patch -i resized.patch&quot; couldn't find ompi/mpi/java/c/mpijava.exp
</span><br>
<span class="quotelev1">&gt; (it seems that this file isn't available in any tar ball).
</span><br>
<p>Huh.  It's in our SVN, but I see you're right -- it's not in tarballs.  I wonder what this file is for, then?  Hmm.
<br>
<p><span class="quotelev1">&gt; &quot;sizeof&quot; as far as I know)? I will rewrite my programs with 2D arrays
</span><br>
<span class="quotelev1">&gt; so that they only use 1D arrays if Open MPI cannot provide a solution
</span><br>
<span class="quotelev1">&gt; for Datatype.Vector which supports Java 2D arrays. Thank you very
</span><br>
<span class="quotelev1">&gt; much for your help.
</span><br>
<p><p>This is probably your best bet for now.
<br>
<p>The more I think and talk about this with Ralph, the more convinced I am that the JAva interface needs to be written to be a much more 1:1-like interface with the C bindings...  (very much like the C++ bindings)
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
<li><strong>Next message:</strong> <a href="21109.php">Jeff Squyres (jsquyres): "Re: [OMPI users] some comments on derived datatypes in mpiJava"</a>
<li><strong>Previous message:</strong> <a href="21107.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21083.php">Siegmar Gross: "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
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
