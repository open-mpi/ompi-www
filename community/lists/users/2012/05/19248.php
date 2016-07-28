<?
$subject_val = "[OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 13:23:01 2012" -->
<!-- isoreceived="20120510172301" -->
<!-- sent="Thu, 10 May 2012 18:22:54 +0100 (WEST)" -->
<!-- isosent="20120510172254" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-IO puzzlement" -->
<!-- id="alpine.DEB.2.00.1205101728330.12062_at_serodio" -->
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
<strong>Subject:</strong> [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 13:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19249.php">Edgar Gabriel: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19249.php">Edgar Gabriel: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19249.php">Edgar Gabriel: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hi all
<br>
<p>&nbsp;&nbsp;I'm trying to run my code in a cluster here with infiniband. It is in 
<br>
Fortran 95/2003 and uses MPI-IO for output. I'm using openmpi 1.5.5. It 
<br>
runs has been running fine but for a particular configuration, using all 
<br>
of the cluster cores (128, divided in 4 boxes with 4 Octo-core Opterons 
<br>
each), it hangs while calling MPI-IO.
<br>
<p>&nbsp;&nbsp;So what I am asking is help in debugging this. This is the relevant part 
<br>
of the code
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_File_set_view(fh, disp, etype, filetype, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRIM(datarep),  MPI_INFO_NULL, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF(DEBGON)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF(master)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WRITE(logfl,'(/,&quot;DBG: WriteMPI_IO going to write file.&quot;)')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FLUSH(logfl)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDIF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_Barrier(world, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDIF
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_file_write_at_all(fh, offset, arr, dim, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;etype, status, ierr)
<br>
<p><p><p>&nbsp;&nbsp;And it hangs just after the flush, so apparently in the MPI_write_at_all 
<br>
call.
<br>
<p>&nbsp;&nbsp;Any ideas of what to do or where to look are welcomed.
<br>
<p>&nbsp;&nbsp;best,
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
<li><strong>Next message:</strong> <a href="19249.php">Edgar Gabriel: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19247.php">Derek Gerstmann: "Re: [OMPI users] ompi mca mxm version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19249.php">Edgar Gabriel: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19249.php">Edgar Gabriel: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
