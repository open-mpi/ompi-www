<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 17:09:39 2009" -->
<!-- isoreceived="20090921210939" -->
<!-- sent="Mon, 21 Sep 2009 17:09:35 -0400" -->
<!-- isosent="20090921210935" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="4AB7EB8F.20704_at_scinet.utoronto.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AB78CFA.9090903_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 17:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10710.php">Eugene Loh: "Re: [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10745.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Continuing the conversation with myself:
<br>
<p>Google pointed me to Trac ticket #1944, which spoke of deadlocks in 
<br>
looped collective operations; there is no collective operation anywhere 
<br>
in this sample code, but trying one of the suggested workarounds/clues: 
<br>
&nbsp;&nbsp;that is, setting btl_sm_num_fifos to at least (np-1) seems to make 
<br>
things work quite reliably, for both OpenMPI 1.3.2 and 1.3.3; that is, 
<br>
while this
<br>
<p>mpirun -np 6 -mca btl sm,self ./diffusion-mpi
<br>
<p>invariably hangs (at random-seeming numbers of iterations) with OpenMPI 
<br>
1.3.2 and sometimes hangs (maybe 10% of the time, again seemingly 
<br>
randomly) with 1.3.3,
<br>
<p>mpirun -np 6 -mca btl tcp,self ./diffusion-mpi
<br>
<p>or
<br>
<p>mpirun -np 6 -mca btl_sm_num_fifos 5 -mca btl sm,self ./diffusion-mpi
<br>
<p>always succeeds, with (as one might guess) the second being much faster...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jonathan
<br>
<p><pre>
-- 
Jonathan Dursi     &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10712.php">Pallab Datta: "[OMPI users] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>Previous message:</strong> <a href="10710.php">Eugene Loh: "Re: [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10732.php">Jeff Squyres: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10745.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
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
