<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 11:25:46 2009" -->
<!-- isoreceived="20090422152546" -->
<!-- sent="Wed, 22 Apr 2009 11:25:36 -0400" -->
<!-- isosent="20090422152536" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EF36F0.5080709_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49EF24E9.7000703_at_sun.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 11:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9027.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>In reply to:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9028.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>I second Eugene's comments.
<br>
<p>I already sent you on previous emails to this thread
<br>
all relevant information on where to
<br>
get HPL from Netlib (<a href="http://netlib.org/benchmark/hpl/">http://netlib.org/benchmark/hpl/</a>),
<br>
Goto BLAS from TACC (<a href="http://www.tacc.utexas.edu/resources/software/">http://www.tacc.utexas.edu/resources/software/</a>),
<br>
and the standard BLAS from Netlib (<a href="http://www.netlib.org/blas/">http://www.netlib.org/blas/</a>).
<br>
OK, there go the links once again!
<br>
<p>I also sent you instructions on how to install HPL,
<br>
exactly as I installed it here two days ago.
<br>
Did you read those instructions?
<br>
It is one of the messages on this thread.
<br>
Check the mailing list archive, if you don't have that email anymore.
<br>
<p>Eugene just sent you a gotcha on how to build Netlib BLAS.
<br>
Goto BLAS is also easy to install with its &quot;quickbuild&quot; scripts,
<br>
and it comes with Readme, QuickInstall, and FAQ files, which you should 
<br>
read.
<br>
<p>However, somehow you are repeating the same questions
<br>
that I and others already answered.
<br>
There isn't much more I can say to help you out.
<br>
<p>Good luck!
<br>
<p>Gus Correa
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
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @gus
</span><br>
<span class="quotelev2">&gt;&gt; we are not able to make hpl sucessfully.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; i think it has to do something with blas
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; i cannot find blas tar file on the net, i found rpm but de 
</span><br>
<span class="quotelev2">&gt;&gt; installation steps is with tar file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First of all, this mail list is for Open MPI issues.  On this list are 
</span><br>
<span class="quotelev1">&gt; people who are helpful and know about lots of stuff (including things 
</span><br>
<span class="quotelev1">&gt; having anything at all to do with MPI), but HPL and HPCC have their own 
</span><br>
<span class="quotelev1">&gt; support mechanisms and you should probably pursue those for HPL questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhow, if I google &quot;blas&quot;, I immediately come up with netlib.org, which 
</span><br>
<span class="quotelev1">&gt; is where you can get a BLAS source tar file.  I've had to go through the 
</span><br>
<span class="quotelev1">&gt; HPL experience myself in the last 0-2 days, and it seems to me that the 
</span><br>
<span class="quotelev1">&gt; netlib.org site is not responding.  So, one can google &quot;netlib mirror&quot; 
</span><br>
<span class="quotelev1">&gt; to find mirror sites, poke around a little, and end up getting BLAS from 
</span><br>
<span class="quotelev1">&gt; the Sandia mirror site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version:  try <a href="http://netlib.sandia.gov/blas/blas.tgz">http://netlib.sandia.gov/blas/blas.tgz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found a gotcha.  I changed the &quot;g77&quot; in the BLAS/make.inc file to 
</span><br>
<span class="quotelev1">&gt; become mpif77.  Also, in the HPL hpl/Make.$ARCH file, I used mpif77 for 
</span><br>
<span class="quotelev1">&gt; the linker.  This way, some Fortran I/O routines used by blas (xerbla.f) 
</span><br>
<span class="quotelev1">&gt; will be found at link time.  (I was using HPL from HPCC.  Not sure if 
</span><br>
<span class="quotelev1">&gt; your HPL is the same.)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9027.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9025.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMA mcaparameters?"</a>
<li><strong>In reply to:</strong> <a href="9023.php">Eugene Loh: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9028.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
