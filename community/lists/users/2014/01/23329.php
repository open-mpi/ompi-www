<?
$subject_val = "Re: [OMPI users] Regression: Fortran derived types with newer MPI module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 22:35:54 2014" -->
<!-- isoreceived="20140108033554" -->
<!-- sent="Wed, 8 Jan 2014 03:35:52 +0000" -->
<!-- isosent="20140108033552" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regression: Fortran derived types with newer MPI module" -->
<!-- id="01B96267-F00D-42FB-AFD7-A19F46B7D68C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D67B125C-F83F-4ADE-9AB8-6BDF51243286_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regression: Fortran derived types with newer MPI module<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 22:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 7, 2014, at 10:09 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; - the old tiny/small/medium-based interface for compilers that do not support &quot;ignore TKR&quot; pragmas (i.e., gfortran)
</span><br>
<p>And of course, as soon as I say this publicly, I see a post from Tobias reminding me that gcc/gfortran 4.9 will include their own ignore TKR functionality (and he reminds me to include the patch to support it in OMPI... which I'll do for trunk/1.7.5).  :-)
<br>
<p>This means that you'll get a good &quot;mpi&quot; module with gfortran 4.9 (i.e., all MPI subroutines and functions are prototyped, and (void*)-like functionality is supported).
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
<li><strong>Next message:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>Previous message:</strong> <a href="23328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<li><strong>In reply to:</strong> <a href="23328.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23330.php">Jed Brown: "Re: [OMPI users] Regression: Fortran derived types with newer MPI module"</a>
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
