<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 29 08:27:45 2007" -->
<!-- isoreceived="20070129132745" -->
<!-- sent="Mon, 29 Jan 2007 08:27:15 -0500" -->
<!-- isosent="20070129132715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] expected behavior of end statement before MPI_Finalise()" -->
<!-- id="03B1816D-0AB6-4743-8EFE-9DFAF726F574_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1c16cdf90701290136l2589a909r435a8f838637c84b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-29 08:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2554.php">Avishay Traeger: "[OMPI users] ompi_info segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="2552.php">Chevchenkovic Chevchenkovic: "[OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<li><strong>In reply to:</strong> <a href="2552.php">Chevchenkovic Chevchenkovic: "[OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2007, at 4:36 AM, Chevchenkovic Chevchenkovic wrote:
<br>
<p><span class="quotelev1">&gt;   Can we have a FORTRAN stop statement before MPI_Finalise?
</span><br>
<p>It is not advisable.
<br>
<p><span class="quotelev1">&gt; What is the expected behaviour?
</span><br>
<p>Correct MPI applications will call MPI_FINALIZE before stop.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2554.php">Avishay Traeger: "[OMPI users] ompi_info segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="2552.php">Chevchenkovic Chevchenkovic: "[OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<li><strong>In reply to:</strong> <a href="2552.php">Chevchenkovic Chevchenkovic: "[OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
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
