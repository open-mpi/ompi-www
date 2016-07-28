<?
$subject_val = "Re: [OMPI users] MPI-IO, providing buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 11:18:32 2009" -->
<!-- isoreceived="20091219161832" -->
<!-- sent="Sat, 19 Dec 2009 16:18:20 +0000 (WET)" -->
<!-- isosent="20091219161820" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO, providing buffers" -->
<!-- id="alpine.DEB.2.00.0912191617310.24157_at_localhost" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3A54EE68-80A3-4906-BE48-F4670BFB2729_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO, providing buffers<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-19 11:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11611.php">Richard Walsh: "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Previous message:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>In reply to:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 19 Dec 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; No, sorry -- there are no &quot;buffered&quot; variants of the MPI_FILE_* functions like there are with point-to-point communications.  So when you do MPI_FILE_WRITE (for example), it'll be directly using the buffer that you pass to it (which is almost always what you want, anyway -- &quot;buffered&quot; modes of communication just force an extra copy, and therefore potentially lower performance).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, if you need an extra copy so that you can start a 
</span><br>
<span class="quotelev1">&gt; non-blocking file operation and then free the old buffer, then you can 
</span><br>
<span class="quotelev1">&gt; make a copy yourself and allow the original buffer to be freed.
</span><br>
<p>Thanks. So in an asynchronous write, the old buffer would only be 
<br>
available after the I/O ended. So maybe I really need to think to set some 
<br>
process aside just for I/O...
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11611.php">Richard Walsh: "[OMPI users] Problem compiling 1.4.0 snap with PGI 10.0-1 and openib flags turned on ..."</a>
<li><strong>Previous message:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>In reply to:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
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
