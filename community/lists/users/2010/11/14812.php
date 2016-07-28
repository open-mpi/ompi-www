<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 10:24:50 2010" -->
<!-- isoreceived="20101117152450" -->
<!-- sent="Wed, 17 Nov 2010 15:24:44 +0000 (WET)" -->
<!-- isosent="20101117152444" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="alpine.DEB.2.00.1011171522520.3436_at_localhost" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CE3ED52.9050607_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 10:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14811.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14809.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14816.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14816.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 17 Nov 2010, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; For what is worth, the MPI addresses (a.k.a. pointers)
</span><br>
<span class="quotelev1">&gt; in the Fortran bindings are integers, of standard size 4 bytes, IIRR.
</span><br>
<span class="quotelev1">&gt; Take a look at mpif.h, mpi.h and their cousins to make sure.
</span><br>
<span class="quotelev1">&gt; Unlike the Fortran FFTW &quot;plans&quot;, you don't declare MPI addresses as big
</span><br>
<span class="quotelev1">&gt; as you want, MPI chooses their size when it is built, right?
</span><br>
<span class="quotelev1">&gt; As Pascal pointed out, 4-byte integers would flip sign at around 2GB,
</span><br>
<span class="quotelev1">&gt; and even unsigned integers won't go beyond 4GB.
</span><br>
<span class="quotelev1">&gt; Would this be part of the problem?
</span><br>
<p>yes, I think is the most probable explanation. I've solved it by using 
<br>
several processes to write the file (after all I just didn't want to 
<br>
program a bunch of checkups required for spanning several processes for 
<br>
such a simple thing...)
<br>
<p><span class="quotelev1">&gt; I guess all the OpenMPI pros and developers are busy now
</span><br>
<span class="quotelev1">&gt; in Bourbon Street, New Orleans, I mean, at Supercomputer 2010.
</span><br>
<span class="quotelev1">&gt; Hard to catch their attention right now,
</span><br>
<span class="quotelev1">&gt; but eventually somebody will clarify this.
</span><br>
<p>oh, just a small grain of sand... doesn't seems worth to stop the full 
<br>
machine for it...
<br>
<p>:)
<br>
<p>many thanks all
<br>
<p><p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD candidate @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;Keep them Flying! Ajude a/help Aero F&#233;nix!
<br>
<p>&nbsp;&nbsp;<a href="http://www.aeronauta.com/aero.fenix">http://www.aeronauta.com/aero.fenix</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; sent with alpine 2.00 &gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14813.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14811.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14809.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14816.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14816.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
