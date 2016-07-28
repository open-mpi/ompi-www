<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 10:08:52 2009" -->
<!-- isoreceived="20090422140852" -->
<!-- sent="Wed, 22 Apr 2009 07:08:41 -0700" -->
<!-- isosent="20090422140841" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EF24E9.7000703_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904220249i37ca3659m8e1d57ad1fb5681a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 10:08:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
<li><strong>Previous message:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9021.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9026.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9026.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ankush Kaul wrote:
<br>
<p><span class="quotelev1">&gt; @gus
</span><br>
<span class="quotelev1">&gt; we are not able to make hpl sucessfully.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; i think it has to do something with blas
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; i cannot find blas tar file on the net, i found rpm but de 
</span><br>
<span class="quotelev1">&gt; installation steps is with tar file.
</span><br>
<p>First of all, this mail list is for Open MPI issues.  On this list are 
<br>
people who are helpful and know about lots of stuff (including things 
<br>
having anything at all to do with MPI), but HPL and HPCC have their own 
<br>
support mechanisms and you should probably pursue those for HPL questions.
<br>
<p>Anyhow, if I google &quot;blas&quot;, I immediately come up with netlib.org, which 
<br>
is where you can get a BLAS source tar file.  I've had to go through the 
<br>
HPL experience myself in the last 0-2 days, and it seems to me that the 
<br>
netlib.org site is not responding.  So, one can google &quot;netlib mirror&quot; 
<br>
to find mirror sites, poke around a little, and end up getting BLAS from 
<br>
the Sandia mirror site.
<br>
<p>Short version:  try <a href="http://netlib.sandia.gov/blas/blas.tgz">http://netlib.sandia.gov/blas/blas.tgz</a>
<br>
<p>I found a gotcha.  I changed the &quot;g77&quot; in the BLAS/make.inc file to 
<br>
become mpif77.  Also, in the HPL hpl/Make.$ARCH file, I used mpif77 for 
<br>
the linker.  This way, some Fortran I/O routines used by blas (xerbla.f) 
<br>
will be found at link time.  (I was using HPL from HPCC.  Not sure if 
<br>
your HPL is the same.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
<li><strong>Previous message:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9021.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9026.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9026.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
