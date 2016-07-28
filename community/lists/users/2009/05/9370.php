<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 13:22:38 2009" -->
<!-- isoreceived="20090518172238" -->
<!-- sent="Mon, 18 May 2009 13:22:29 -0400" -->
<!-- isosent="20090518172229" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A119955.80701_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E0607010-4AD2-4C3C-8223-AE5FCCC3AC6D_at_nrl.navy.mil" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 13:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9371.php">Noam Bernstein: "[OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9369.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pavel
<br>
<p>This is not my league, but here are some
<br>
CPMD helpful links (code, benchmarks):
<br>
<p><a href="http://www.cpmd.org/">http://www.cpmd.org/</a>
<br>
<a href="http://www.cpmd.org/cpmd_thecode.html">http://www.cpmd.org/cpmd_thecode.html</a>
<br>
<a href="http://www.theochem.ruhr-uni-bochum.de/~axel.kohlmeyer/cpmd-bench.html">http://www.theochem.ruhr-uni-bochum.de/~axel.kohlmeyer/cpmd-bench.html</a>
<br>
<p>IHIH
<br>
Gus Correa
<br>
<p>Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 18, 2009, at 12:50 PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Roman,
</span><br>
<span class="quotelev2">&gt;&gt; Can you please share with us Mvapich numbers that you get . Also what 
</span><br>
<span class="quotelev2">&gt;&gt; is mvapich version that you use.
</span><br>
<span class="quotelev2">&gt;&gt; Default mvapich and openmpi IB tuning is very similar, so it is 
</span><br>
<span class="quotelev2">&gt;&gt; strange to see so big difference. Do you know what kind of collectives 
</span><br>
<span class="quotelev2">&gt;&gt; operation is used in this specific application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code does a bunch of parallel things in various different places
</span><br>
<span class="quotelev1">&gt; (mostly dense matrix math, and some FFT stuff that may or may not
</span><br>
<span class="quotelev1">&gt; be parallelized).  In the standard output there's a summary of the time
</span><br>
<span class="quotelev1">&gt; taken by various MPI routines.  Perhaps Roman can send them?  The
</span><br>
<span class="quotelev1">&gt; code also uses ScaLAPACK, but I'm not sure how CP2K labels the
</span><br>
<span class="quotelev1">&gt; timing for those routines in the output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                     Noam
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9371.php">Noam Bernstein: "[OMPI users] CP2K mpi hang"</a>
<li><strong>Previous message:</strong> <a href="9369.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9378.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
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
