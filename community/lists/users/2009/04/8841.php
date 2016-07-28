<?
$subject_val = "Re: [OMPI users] recompiling 1.3.1 with intels";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 12:10:27 2009" -->
<!-- isoreceived="20090408161027" -->
<!-- sent="Wed, 08 Apr 2009 12:10:18 -0400" -->
<!-- isosent="20090408161018" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] recompiling 1.3.1 with intels" -->
<!-- id="49DCCC6A.1090509_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A3F0BB3D-DF30-4865-84EA-FE4031775F1B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] recompiling 1.3.1 with intels<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-08 12:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8840.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8837.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Reply:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco, list
<br>
<p>As Jeff suggested, the problem is not likely to be on the
<br>
Intel compilers or on OpenMPI.
<br>
I would guess it is the way information is being passed to the Amber
<br>
configuration script that may be the cause.
<br>
I am not familiar to Amber (we don't do computational Chemistry here),
<br>
so it is hard to tell.
<br>
<p>Maybe if you send some information on how you configure Amber
<br>
A) Amber's configure command line,
<br>
B) output of Amber's configure --help , and
<br>
C) the error messages Amber returned, etc.
<br>
<p>Also, have you tried the Amber mailing list (if it exists)?
<br>
They should know more about Amber than we do.
<br>
<p>Two things that I found weird about your Amber configuration
<br>
command (on an old posting) were:
<br>
1) that you didn't tell it where
<br>
your openmpi was installed (no path), and
<br>
2) that you gave it the Intel compiler name (ifort),
<br>
whereas I would guess the OpenMPI wrapper
<br>
(mpif90 or mpif90, maybe with a full path)
<br>
would be perhaps a better choice.
<br>
Ifort doesn't know anything about your OpenMPI
<br>
libraries and include files, whereas the OpenMPI
<br>
mpif90/mpif77 know everything.
<br>
<p>PS - As for Intel compilers, I would stick to release 10.
<br>
I tried to install release 11 two weeks ago.
<br>
They changed something in the installation script that
<br>
broke the installation procedure,
<br>
would not allow me to choose the install directory,
<br>
modified their directory structure names, etc.
<br>
The net result was that I couldn't install, lest test it.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 8, 2009, at 5:08 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I was unable to compile the parallel code Amber10 with openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1 (fully tested) and intel compilers and mkl version 10 on debian
</span><br>
<span class="quotelev2">&gt;&gt; amd64 lenny, I'll try with the intels version 11. If it does not work
</span><br>
<span class="quotelev2">&gt;&gt; in my hands, I'll move to gnu compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question: to recompile openmpi 1.3.1. on intels 11 should I first do
</span><br>
<span class="quotelev2">&gt;&gt; anything on openmpi which was compiled with intels 10?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I test Intel v10 compilers frequently; they work fine with Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as we know, Intel v11 compilers work fine with Open MPI as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8842.php">Alessandro Surace: "Re: [OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8840.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>In reply to:</strong> <a href="8837.php">Jeff Squyres: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
<li><strong>Reply:</strong> <a href="8843.php">Francesco Pietra: "Re: [OMPI users] recompiling 1.3.1 with intels"</a>
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
