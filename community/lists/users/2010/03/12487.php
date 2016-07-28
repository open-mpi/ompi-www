<?
$subject_val = "Re: [OMPI users] Best way to reduce 3D array";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 03:27:19 2010" -->
<!-- isoreceived="20100331072719" -->
<!-- sent="Wed, 31 Mar 2010 08:27:13 +0100 (WEST)" -->
<!-- isosent="20100331072713" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best way to reduce 3D array" -->
<!-- id="alpine.DEB.2.00.1003310823200.4568_at_localhost" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BB2975D.6010500_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-03-31 03:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12488.php">Huynh Thuc Cuoc: "[OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 30 Mar 2010, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Salve Ricardo Reis!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Como vai a Radio Zero?
</span><br>
<p>:) busy, busy, busy. we are preparing to celebrate Yuri's Night, April the 
<br>
12th!
<br>
<p><span class="quotelev1">&gt; Doesn't this serialize the I/O operation across the processors,
</span><br>
<span class="quotelev1">&gt; whereas MPI_Gather followed by rank_0 I/O may perhaps move
</span><br>
<span class="quotelev1">&gt; the data faster to rank_0, and eventually to disk
</span><br>
<span class="quotelev1">&gt; (particularly when the number of processes is large)?
</span><br>
<p>oh, yes. I remember now why I thought of this. If the problem is large 
<br>
enough you will run out of memory in the master machine (for me MPI-IO is 
<br>
the way to go unless you're tied up with NFS). Off course one could always 
<br>
send it by chunks, let the master write, then send other chunk...
<br>
<p>abraco!
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
<li><strong>Next message:</strong> <a href="12488.php">Huynh Thuc Cuoc: "[OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>In reply to:</strong> <a href="12486.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12534.php">Rob Latham: "Re: [OMPI users] Best way to reduce 3D array"</a>
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
