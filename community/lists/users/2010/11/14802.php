<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 05:46:43 2010" -->
<!-- isoreceived="20101117104643" -->
<!-- sent="Wed, 17 Nov 2010 11:46:32 +0100" -->
<!-- isosent="20101117104632" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="4CE3B288.8080301_at_bull.net" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 05:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14801.php">Zak: "[OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>In reply to:</strong> <a href="14800.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is due to the interface defined for MPI_File_write that specifies 
<br>
an integer for the length. The positive value of an integer are coded
<br>
in hexadecimal from 0000 0000 to 7FFF FFF and negative values are coded 
<br>
from 8000 0000 to FFFF FFFF.
<br>
(7FFF FFFF is exactly 2^31-1).
<br>
<p>Pascal
<br>
<p>Ricardo Reis a &#233;crit :
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
<span class="quotelev1">&gt; Does anyone knows if this carries over to other MPI implementations 
</span><br>
<span class="quotelev1">&gt; (or the answer is &quot;download, try it and tell us?&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14801.php">Zak: "[OMPI users] out of memory in io_romio_ad_nfs_read.c"</a>
<li><strong>In reply to:</strong> <a href="14800.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14804.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
