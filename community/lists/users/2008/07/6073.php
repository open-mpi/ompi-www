<?
$subject_val = "Re: [OMPI users] getting fortran90 to compile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 13 22:09:55 2008" -->
<!-- isoreceived="20080714020955" -->
<!-- sent="Mon, 14 Jul 2008 12:09:40 +1000" -->
<!-- isosent="20080714020940" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] getting fortran90 to compile" -->
<!-- id="1216001380.5511.288.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="9fdb08030807130858y26fae84dk375c95667dacd8d7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] getting fortran90 to compile<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-13 22:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2008-07-13 at 10:58 -0500, zach wrote:
<br>
<span class="quotelev1">&gt; I installed openmpi like
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=&lt;install dir&gt; FC=/usr/bin/gfortran-4.2
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<p>If gfortran is in your path (which is usually the best way to have it
<br>
set up) then
<br>
./configure --prefix=&lt;install dir&gt;
<br>
should work.  (It does for me.)
<br>
<p>Is there a particular reason you are trying to point to a particular
<br>
version of gfortran?  Is that gfortran different to the rest of your
<br>
system gcc?  If so, that's generally a bad idea.
<br>
<p>Ciao
<br>
Terry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6074.php">Jeff Squyres: "Re: [OMPI users] getting fortran90 to compile"</a>
<li><strong>Previous message:</strong> <a href="6072.php">Gabriele Fatigati: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6066.php">zach: "[OMPI users] getting fortran90 to compile"</a>
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
