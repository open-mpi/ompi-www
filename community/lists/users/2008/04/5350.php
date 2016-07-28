<?
$subject_val = "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 15:12:28 2008" -->
<!-- isoreceived="20080409191228" -->
<!-- sent="Wed, 9 Apr 2008 14:12:17 -0500 (CDT)" -->
<!-- isosent="20080409191217" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu" -->
<!-- id="Pine.LNX.4.64.0804091351260.23241_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 15:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5349.php">&#197;ke Sandgren: "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Bailey, Eric: "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5352.php">Bailey, Eric: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Reply:</strong> <a href="5352.php">Bailey, Eric: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 9 Apr 2008, Bailey, Eric wrote:
<br>
<p><span class="quotelev1">&gt; /home/MPI/openmpi-1.2.6/configure
</span><br>
<span class="quotelev1">&gt; --prefix=/home/MPI/openmpi-1.2.6/openmpi-1.2.6-install-7448
</span><br>
<span class="quotelev1">&gt; --host=ppc74xx-linux --build=i686-pc-linux-gnu
</span><br>
<p>--host should be formated in the output of config.guess, which would be 
<br>
something along the lines of processor family-vendor-os.  Note that 
<br>
processor family gets lumped together in pretty large chunks.  I'm 
<br>
guessing that if you could run config.guess on your machine (it requires a 
<br>
working compiler in some instances), you'd find it would return something 
<br>
like: powerpc-unknown-linux-gnu.  If you pass that as --host, I'm pretty 
<br>
sure you'll get what you need.  If your cross-compilers are named 
<br>
ppc74xx-linux-gcc, you'll have to then set CC, CXX, FC, and F77 
<br>
explicitly.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>Previous message:</strong> <a href="5349.php">&#197;ke Sandgren: "[OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Bailey, Eric: "[OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5352.php">Bailey, Eric: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<li><strong>Reply:</strong> <a href="5352.php">Bailey, Eric: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
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
