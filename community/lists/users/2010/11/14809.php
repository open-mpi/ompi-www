<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 09:57:39 2010" -->
<!-- isoreceived="20101117145739" -->
<!-- sent="Wed, 17 Nov 2010 09:57:22 -0500" -->
<!-- isosent="20101117145722" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="4CE3ED52.9050607_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1011171010190.3436_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 09:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14810.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14800.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo Reis wrote:
<br>
<span class="quotelev1">&gt; On Wed, 17 Nov 2010, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the limit for a write (and also for a read) is 2^31-1 (2G-1). 
</span><br>
<span class="quotelev2">&gt;&gt; In a C program, after this value, an integer becomes negative. I 
</span><br>
<span class="quotelev2">&gt;&gt; suppose this is also true in
</span><br>
<span class="quotelev2">&gt;&gt; Fortran. The solution, is to make a loop of writes (reads) of no more 
</span><br>
<span class="quotelev2">&gt;&gt; than this value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that MPI-IO specific? I remember that when using FFTW they ask for 
</span><br>
<span class="quotelev1">&gt; using INTEGER(8) for the returning handle. This is used has a pointer 
</span><br>
<span class="quotelev1">&gt; interface with the library and (8) will be equivalent to a 64 bit 
</span><br>
<span class="quotelev1">&gt; pointer (sort of, sorry if I am not being exact).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, if I have no problems writing Big files with normal Fortran 
</span><br>
<span class="quotelev1">&gt; shouldn't this behaviour be found with MPI-IO? And, more to the point, 
</span><br>
<span class="quotelev1">&gt; if not, shouldn't it be documented somewhere?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone knows if this carries over to other MPI implementations (or 
</span><br>
<span class="quotelev1">&gt; the answer is &quot;download, try it and tell us?&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>For what is worth, the MPI addresses (a.k.a. pointers)
<br>
in the Fortran bindings are integers, of standard size 4 bytes, IIRR.
<br>
Take a look at mpif.h, mpi.h and their cousins to make sure.
<br>
Unlike the Fortran FFTW &quot;plans&quot;, you don't declare MPI addresses as big
<br>
as you want, MPI chooses their size when it is built, right?
<br>
As Pascal pointed out, 4-byte integers would flip sign at around 2GB,
<br>
and even unsigned integers won't go beyond 4GB.
<br>
Would this be part of the problem?
<br>
<p>I guess all the OpenMPI pros and developers are busy now
<br>
in Bourbon Street, New Orleans, I mean, at Supercomputer 2010.
<br>
Hard to catch their attention right now,
<br>
but eventually somebody will clarify this.
<br>
<p>Gus
<br>
<p><span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PhD candidate @ Lasef
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Keep them Flying! Ajude a/help Aero F&#233;nix!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                            &lt; sent with alpine 2.00 &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14810.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14808.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14800.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14812.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
