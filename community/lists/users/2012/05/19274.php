<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 09:30:27 2012" -->
<!-- isoreceived="20120515133027" -->
<!-- sent="Tue, 15 May 2012 09:30:19 -0400" -->
<!-- isosent="20120515133019" -->
<!-- name="Secretan Yves" -->
<!-- email="Yves.Secretan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="0DA854E5D5F4C8428ABC1701AE2621CD0297AF8B8840_at_INRSEXCH02.AD.INRS.CA" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1205150922280.3341_at_serodio" -->
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
<strong>From:</strong> Secretan Yves (<em>Yves.Secretan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 09:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19275.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19273.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19273.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19275.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19275.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hy,
<br>
<p>If, by any bad luck, you use any of the following FORTRAN function 
<br>
<p>MPI_FILE_GET_POSITION
<br>
MPI_FILE_GET_SIZE 
<br>
MPI_FILE_GET_VIEW
<br>
MPI_TYPE_EXTENT 
<br>
<p>they all are stiil overflowing (<a href="http://www.open-mpi.org/community/lists/devel/2010/12/8797.php">http://www.open-mpi.org/community/lists/devel/2010/12/8797.php</a>) because they cast the correct result to MPI_Fint which  default size if 32 bits.
<br>
<p>Yves Secretan
<br>
Yves.Secretan_at_[hidden]
<br>
<p>Avant d'imprimer, pensez &#224; l'environnement 
<br>
<p>-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Ricardo Reis
<br>
Envoy&#233;&#160;: 15 mai 2012 04:29
<br>
&#192;&#160;: Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] MPI-IO puzzlement
<br>
<p><p>&nbsp;&nbsp;Hi all
<br>
<p>&nbsp;&nbsp;The problem has been found.
<br>
<p>&nbsp;&nbsp;I'm trying to use MPI-IO to write the file with all processes taking part in the calculation writing their bit. Here lies the rub.
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
<p><p>&nbsp;&nbsp;offset is of the type MPI_OFFSET_KIND which seems insuficient to hold the correct size for the offset.
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
<li><strong>Next message:</strong> <a href="19275.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19273.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19273.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19275.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19275.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
