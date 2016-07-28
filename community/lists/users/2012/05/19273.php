<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 04:28:46 2012" -->
<!-- isoreceived="20120515082846" -->
<!-- sent="Tue, 15 May 2012 09:28:39 +0100 (WEST)" -->
<!-- isosent="20120515082839" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="alpine.DEB.2.00.1205150922280.3341_at_serodio" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="alpine.DEB.2.00.1205101845310.12062_at_serodio" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 04:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>In reply to:</strong> <a href="19252.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi all
<br>
<p>&nbsp;&nbsp;The problem has been found.
<br>
<p>&nbsp;&nbsp;I'm trying to use MPI-IO to write the file with all processes taking part 
<br>
in the calculation writing their bit. Here lies the rub.
<br>
<p>&nbsp;&nbsp;Each process has to write a piece of DIM = 35709696 elements.
<br>
<p>&nbsp;&nbsp;Using 64 processes the ofsett is my_rank * dim
<br>
<p>&nbsp;&nbsp;and so... the ofset size, for last processes becomes.
<br>
<p>&nbsp;&nbsp;DBG:   60 will WriteMPI_IO. dim     35709696 offset   2142581760
<br>
&nbsp;&nbsp;DBG:   61 will WriteMPI_IO. dim     35709696 offset  -2116675840
<br>
&nbsp;&nbsp;DBG:   62 will WriteMPI_IO. dim     35709696 offset  -2080966144
<br>
&nbsp;&nbsp;DBG:   63 will WriteMPI_IO. dim     35709696 offset  -2045256448
<br>
<p><p>&nbsp;&nbsp;offset is of the type MPI_OFFSET_KIND which seems insuficient to hold the 
<br>
correct size for the offset.
<br>
<p><p>&nbsp;&nbsp;So... am I condemned to write my own MPI data type so I can write the 
<br>
files? ideas... ?
<br>
<p>&nbsp;&nbsp;best regards,
<br>
<p><p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
<br>
<p>&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<p>&nbsp;&nbsp;Institutional Address:
<br>
<p>&nbsp;&nbsp;Ricardo J.N. dos Reis
<br>
&nbsp;&nbsp;IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
<br>
&nbsp;&nbsp;Av. Rovisco Pais
<br>
&nbsp;&nbsp;1049-001 Lisboa
<br>
&nbsp;&nbsp;Portugal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- email sent with alpine 2.00 -
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19272.php">Ralph Castain: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>In reply to:</strong> <a href="19252.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
