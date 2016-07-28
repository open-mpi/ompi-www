<?
$subject_val = "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 15:02:04 2008" -->
<!-- isoreceived="20080409190204" -->
<!-- sent="Wed, 09 Apr 2008 21:01:49 +0200" -->
<!-- isosent="20080409190149" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale" -->
<!-- id="1207767709.4345.43.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 15:01:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Previous message:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Reply:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Reply:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I have an annoying problem that i hope someone here has some info on.
<br>
<p>I'm trying to build a code with OpenMPI+Intel MKL+Pathscale.
<br>
When using the sequential (non-threaded) MKL everything is ok, but when
<br>
using the threaded MKL i get a segfault.
<br>
<p>This doesn't happen when using MVAPICH so i suspect the memory handling
<br>
inside OpenMPI.
<br>
<p>Version used are:
<br>
OpenMPI 1.2.6
<br>
Pathscale 3.2beta
<br>
MKL 10.0.2.018
<br>
<p>Has anyone seen anything like this?
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Previous message:</strong> <a href="5348.php">Michael: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Reply:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Reply:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
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
