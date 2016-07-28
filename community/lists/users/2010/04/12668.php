<?
$subject_val = "[OMPI users] OpenMPI, OpenMP, threads and hybrid programming...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 11:55:16 2010" -->
<!-- isoreceived="20100417155516" -->
<!-- sent="Sat, 17 Apr 2010 16:55:10 +0100 (WEST)" -->
<!-- isosent="20100417155510" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI, OpenMP, threads and hybrid programming..." -->
<!-- id="alpine.DEB.2.00.1004171650460.22040_at_localhost" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI, OpenMP, threads and hybrid programming...<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 11:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12669.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12667.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi all
<br>
<p>&nbsp;&nbsp;I'm around this code, I've gone from serial to parallel with MPI, from 
<br>
F77 to F95+2003... and now I'm adding OpenMP to easy the communication 
<br>
side of things.
<br>
<p>&nbsp;&nbsp;One of the constructs I'm looking is:
<br>
<p>&nbsp;&nbsp;$!OMP SECTIONS     &lt; this creates a SECTIONS area.
<br>
<p>&nbsp;&nbsp;$!OMP SECTION      &lt; this is a SECTION. it can only be executed by one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thread
<br>
&nbsp;&nbsp;call MPI_ALLTOALL
<br>
<p>&nbsp;&nbsp;$!OMP SECTION
<br>
<p>&nbsp;&nbsp;call MPI_ALLTOALL
<br>
<p>&nbsp;&nbsp;$!OMP SECTION
<br>
<p>&nbsp;&nbsp;do somelocalstuff
<br>
<p>&nbsp;&nbsp;$!OMP END SECTIONS
<br>
<p><p>&nbsp;&nbsp;I figure I have to use
<br>
<p>&nbsp;&nbsp;MPI_Init_threads(MPI_THREADS_MULTIPLE, provided, ierr)
<br>
<p>&nbsp;&nbsp;Is there something I should be on the watch to make this work? I've 
<br>
already taken care of making the send and receive buffers THREAD_PRIVATE
<br>
<p>&nbsp;&nbsp;cheers and thanks for your input,
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; sent with alpine 2.00 &gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12669.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12667.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
