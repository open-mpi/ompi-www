<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 05:10:46 2010" -->
<!-- isoreceived="20101117101046" -->
<!-- sent="Wed, 17 Nov 2010 10:10:41 +0000 (WET)" -->
<!-- isosent="20101117101041" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="alpine.DEB.2.00.1011171010190.3436_at_localhost" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4CE39CCD.9090701_at_bull.net" -->
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
<strong>Date:</strong> 2010-11-17 05:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14801.php">Zak: "[OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>Previous message:</strong> <a href="14799.php">Daniel Gruber: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14798.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14809.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 17 Nov 2010, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; I think the limit for a write (and also for a read) is 2^31-1 (2G-1). In a C 
</span><br>
<span class="quotelev1">&gt; program, after this value, an integer becomes negative. I suppose this is 
</span><br>
<span class="quotelev1">&gt; also true in
</span><br>
<span class="quotelev1">&gt; Fortran. The solution, is to make a loop of writes (reads) of no more than 
</span><br>
<span class="quotelev1">&gt; this value.
</span><br>
<p>Is that MPI-IO specific? I remember that when using FFTW they ask for 
<br>
using INTEGER(8) for the returning handle. This is used has a pointer 
<br>
interface with the library and (8) will be equivalent to a 64 bit pointer 
<br>
(sort of, sorry if I am not being exact).
<br>
<p>Anyway, if I have no problems writing Big files with normal Fortran 
<br>
shouldn't this behaviour be found with MPI-IO? And, more to the point, if 
<br>
not, shouldn't it be documented somewhere?
<br>
<p>Does anyone knows if this carries over to other MPI implementations (or 
<br>
the answer is &quot;download, try it and tell us?&quot;)
<br>
<p>best,
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
<li><strong>Next message:</strong> <a href="14801.php">Zak: "[OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>Previous message:</strong> <a href="14799.php">Daniel Gruber: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14798.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14809.php">Gus Correa: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
