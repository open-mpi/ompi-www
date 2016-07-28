<?
$subject_val = "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 20:11:40 2011" -->
<!-- isoreceived="20111129011140" -->
<!-- sent="Mon, 28 Nov 2011 20:11:34 -0500" -->
<!-- isosent="20111129011134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE" -->
<!-- id="A0AF0895-FBA2-4435-B14F-A2BD48124C9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5CD18BC3-E5FB-4732-84A8-C51E89422E95_at_strw.leidenuniv.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 20:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17815.php">Arjen van Elteren: "[OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17862.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="17862.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, this is a known issue.  :-\
<br>
<p>I have not found a reliable way to deduce that MPI_IN_PLACE has been passed as the parameter to MPI_REDUCE (and friends) on OS X.  There's something very strange going on with regards to the Fortran compiler and common block variables (which is where we have MPI_IN_PLACE and other sentinel-value MPI constants defined).
<br>
<p>We have a very old ticket open on this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1982">https://svn.open-mpi.org/trac/ompi/ticket/1982</a>
<br>
<p>Any suggestions would be welcome.  :-\
<br>
<p><p>On Nov 23, 2011, at 1:20 PM, Arjen van Elteren wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running a complex program with a number of MPI_REDUCE calls, every call uses MPI_IN_PLACE as the first parameter (the send buffer).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently testing this program on Mac 10.6 with macports installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately all MPI_REDUCE calls with MPI_IN_PLACE, seem to fail. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've pinpointed the problem to the MPI_IN_PLACE parameter location, it seems to matter if it is the first or the second parameter to the MPI_REDUCE call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is specific for fortran, in C the sequence does not matter!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A simple program to test this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PROGRAM MAIN
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt;   include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;   integer :: x(10)
</span><br>
<span class="quotelev1">&gt;   integer :: provided,ioerror
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(ioerror)
</span><br>
<span class="quotelev1">&gt;   x = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, x
</span><br>
<span class="quotelev1">&gt;   call MPI_REDUCE(x, MPI_IN_PLACE,10, MPI_INTEGER, MPI_SUM, 0,MPI_COMM_WORLD,  ioerror)
</span><br>
<span class="quotelev1">&gt;   print *, x
</span><br>
<span class="quotelev1">&gt;   call MPI_REDUCE(MPI_IN_PLACE, x,10, MPI_INTEGER, MPI_SUM, 0,MPI_COMM_WORLD,  ioerror)
</span><br>
<span class="quotelev1">&gt;   print *, x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_FINALIZE(ioerror)
</span><br>
<span class="quotelev1">&gt; END PROGRAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run this on one process (mpiexec ./a.out)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running with openmpi version 1.5.4 (macports)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The openmpi is compiled with gfortran 4.4.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a bug in openmpi or is my understanding of MPI_REDUCE wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Arjen
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="17815.php">Arjen van Elteren: "[OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17862.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="17862.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
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
