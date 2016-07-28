<?
$subject_val = "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 15:02:55 2014" -->
<!-- isoreceived="20140725190255" -->
<!-- sent="Fri, 25 Jul 2014 19:02:54 +0000" -->
<!-- isosent="20140725190254" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to use openmpi with MOM getting a compile error" -->
<!-- id="88F0C06F-E8DF-400F-91DC-0A6459589338_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53D2907E.2010404_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trying to use openmpi with MOM getting a compile error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 15:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Previous message:</strong> <a href="24879.php">Oscar Vega-Gisbert: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<li><strong>In reply to:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 25, 2014, at 1:14 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Change the mkmf.template file and replace the Fortran
</span><br>
<span class="quotelev1">&gt; compiler name (gfortran) by the Open MPI (OMPI) Fortran compiler wrapper: mpifortran (or mpif90 if it still exists
</span><br>
<span class="quotelev1">&gt; in OMPI 1.8.1),
</span><br>
<p>mpifort is the preferred Fortran compiler wrapper name in the 1.8.x series.  mpif90 still exists, but we'll likely remove that name in some future release (not before 1.9.x, of course).
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
<li><strong>Next message:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Previous message:</strong> <a href="24879.php">Oscar Vega-Gisbert: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<li><strong>In reply to:</strong> <a href="24877.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>Reply:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
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
