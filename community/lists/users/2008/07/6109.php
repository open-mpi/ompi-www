<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 08:27:38 2008" -->
<!-- isoreceived="20080723122738" -->
<!-- sent="Wed, 23 Jul 2008 08:27:32 -0400" -->
<!-- isosent="20080723122732" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="50AF9A91-0C3B-4EC4-B07E-3EA13A1E918A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0807230524y30df1317yc1dc6d257928707_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O with MPI-1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 08:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 8:24 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev2">&gt; &gt;You could always effect your own parallel IO (e.g., use MPI sends  
</span><br>
<span class="quotelev1">&gt; and receives to coordinate parallel reads and writes), but &gt;why?   
</span><br>
<span class="quotelev1">&gt; It's already done in the MPI-IO implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a moment: you're saying that i can do fwrite without any lock?  
</span><br>
<span class="quotelev1">&gt; OpenMPI does this?
</span><br>
<p>No.  I'm saying that you can either effect your own locks with MPI  
<br>
sends and receives (i.e., more-or-less equivalents of flock, because,  
<br>
IIRC, flock on NFS is not reliable -- but I'm not an expert in this  
<br>
area, so you might want to double check that), or you could just use  
<br>
MPI-IO.
<br>
<p><span class="quotelev1">&gt; And, what is ROMIO? Where can i find any informations?
</span><br>
<p>Sorry, ROMIO is the implementation of the MPI-2 IO chapter that Open  
<br>
MPI uses.  ROMIO is embedded in Open MPI and is built by default.  So  
<br>
you can use all the MPI-2 IO stuff if you're using Open MPI.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
