<?
$subject_val = "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 06:58:08 2010" -->
<!-- isoreceived="20101117115808" -->
<!-- sent="Wed, 17 Nov 2010 11:58:02 +0000 (WET)" -->
<!-- isosent="20101117115802" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)" -->
<!-- id="alpine.DEB.2.00.1011171157180.3436_at_localhost" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CE3B288.8080301_at_bull.net" -->
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
<strong>Date:</strong> 2010-11-17 06:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14805.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 17 Nov 2010, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; This is due to the interface defined for MPI_File_write that specifies an 
</span><br>
<span class="quotelev1">&gt; integer for the length. The positive value of an integer are coded
</span><br>
<span class="quotelev1">&gt; in hexadecimal from 0000 0000 to 7FFF FFF and negative values are coded from 
</span><br>
<span class="quotelev1">&gt; 8000 0000 to FFFF FFFF.
</span><br>
<span class="quotelev1">&gt; (7FFF FFFF is exactly 2^31-1).
</span><br>
<p>Thanks for the explanation. Then this should be updated in the spec no...?
<br>
<p>cheers!
<br>
<p>&nbsp;&nbsp;Ricardo Reis
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

<br><p>
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
<li><strong>Next message:</strong> <a href="14805.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14802.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Reply:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
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
