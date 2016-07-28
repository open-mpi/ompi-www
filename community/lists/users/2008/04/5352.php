<?
$subject_val = "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  9 15:56:24 2008" -->
<!-- isoreceived="20080409195624" -->
<!-- sent="Wed, 9 Apr 2008 15:56:29 -0400" -->
<!-- isosent="20080409195629" -->
<!-- name="Bailey, Eric" -->
<!-- email="ebailey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu" -->
<!-- id="5CDB6DEFA3B8074999B6F988BD512C4A642B00_at_CHM-EMAIL1.ad.mc.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0804091351260.23241_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Bailey, Eric (<em>ebailey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-09 15:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5353.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks so much..  
<br>
<p>I only had to use --disable-mpi-f77 and --disable-mpi-f90 in addition to
<br>
the --host=powerpc-unknown-linux-gnu to have configure work
<br>
successfully. Ie.
<br>
<p>/home/MPI/openmpi-1.2.6/configure
<br>
--prefix=/home/MPI/openmpi-1.2.6-install-7
<br>
448 --host=powerpc-unknown-linux-gnu --disable-mpi-f77 --disable-mpi-f90
<br>
&nbsp;
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Brian W. Barrett
<br>
Sent: Wednesday, April 09, 2008 3:12 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] configure:25579: error: No atomic primitives
<br>
available for ppc74xx-linux-gnu
<br>
<p>On Wed, 9 Apr 2008, Bailey, Eric wrote:
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
guessing that if you could run config.guess on your machine (it requires
<br>
a working compiler in some instances), you'd find it would return
<br>
something
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5353.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5351.php">Brock Palen: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="5350.php">Brian W. Barrett: "Re: [OMPI users] configure:25579: error: No atomic primitives available for ppc74xx-linux-gnu"</a>
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
