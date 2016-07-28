<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 12:58:58 2009" -->
<!-- isoreceived="20090518165858" -->
<!-- sent="Mon, 18 May 2009 12:58:54 -0400" -->
<!-- isosent="20090518165854" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="E0607010-4AD2-4C3C-8223-AE5FCCC3AC6D_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A1191E9.1090908_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 12:58:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9369.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2009, at 12:50 PM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Roman,
</span><br>
<span class="quotelev1">&gt; Can you please share with us Mvapich numbers that you get . Also  
</span><br>
<span class="quotelev1">&gt; what is mvapich version that you use.
</span><br>
<span class="quotelev1">&gt; Default mvapich and openmpi IB tuning is very similar, so it is  
</span><br>
<span class="quotelev1">&gt; strange to see so big difference. Do you know what kind of  
</span><br>
<span class="quotelev1">&gt; collectives operation is used in this specific application.
</span><br>
<p>This code does a bunch of parallel things in various different places
<br>
(mostly dense matrix math, and some FFT stuff that may or may not
<br>
be parallelized).  In the standard output there's a summary of the time
<br>
taken by various MPI routines.  Perhaps Roman can send them?  The
<br>
code also uses ScaLAPACK, but I'm not sure how CP2K labels the
<br>
timing for those routines in the output.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9369.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Previous message:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9367.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
