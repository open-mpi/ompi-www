<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 18:51:49 2010" -->
<!-- isoreceived="20100330225149" -->
<!-- sent="Tue, 30 Mar 2010 23:51:39 +0100 (WEST)" -->
<!-- isosent="20100330225139" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="alpine.DEB.2.00.1003302349250.4568_at_localhost" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4BB27D9C.3070504_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Best way to reduce 3D array<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 18:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;If using the master/slace IO model, would it be better to cicle through 
<br>
all the process and each one would write it's part of the array into the 
<br>
file. This file would be open in &quot;stream&quot; mode...
<br>
<p>&nbsp;&nbsp;like
<br>
<p>&nbsp;&nbsp;do p=0,nprocs-1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if(my_rank.eq.i)then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openfile (append mode)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write_to_file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;closefile
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Barrier(world,ierr)
<br>
<p>&nbsp;&nbsp;enddo
<br>
<p><p>&nbsp;&nbsp;cheers,
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt; sent with alpine 2.00 &gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12484.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
