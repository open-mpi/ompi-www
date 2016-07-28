<?
$subject_val = "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 15:32:00 2014" -->
<!-- isoreceived="20140725193200" -->
<!-- sent="Fri, 25 Jul 2014 15:32:36 -0400" -->
<!-- isosent="20140725193236" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trying to use openmpi with MOM getting a compile error" -->
<!-- id="53D2B0D4.1080302_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="88F0C06F-E8DF-400F-91DC-0A6459589338_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 15:32:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24882.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Previous message:</strong> <a href="24880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>In reply to:</strong> <a href="24880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/25/2014 03:02 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Jul 25, 2014, at 1:14 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Change the mkmf.template file and replace the Fortran
</span><br>
<span class="quotelev2">&gt;&gt; compiler name (gfortran) by the Open MPI (OMPI) Fortran compiler wrapper: mpifortran (or mpif90 if it still exists
</span><br>
<span class="quotelev2">&gt;&gt; in OMPI 1.8.1),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort is the preferred Fortran compiler wrapper name in the 1.8.x series.
</span><br>
mpif90 still exists, but we'll likely remove that name in some future 
<br>
release
<br>
(not before 1.9.x, of course).
<br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Jeff
<br>
<p>Oops! Sorry for my misspelling of mpifort.
<br>
(Intel must love this name choice! :) )
<br>
Well, hopefully Dan Shell found the right compiler wrapper.
<br>
<p>I haven't got beyond the ol' mpif90 and OMPI 1.6.5.
<br>
Just waiting for 1.8.2 to be out in the sun to update.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24882.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Previous message:</strong> <a href="24880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<li><strong>In reply to:</strong> <a href="24880.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
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
