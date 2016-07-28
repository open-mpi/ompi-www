<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 10:10:00 2008" -->
<!-- isoreceived="20080506141000" -->
<!-- sent="Tue, 6 May 2008 10:09:49 -0400" -->
<!-- isosent="20080506140949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="E0D534D3-47E5-4964-83AD-4269E28873E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B0168AAA-66CF-4B55-9F3F-7FF2DE00B61C_at_rit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 10:09:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5611.php">Jeff Squyres: "Re: [OMPI users] Problem Installing OpenMPI with Lahey 64-bit Fortran compiler"</a>
<li><strong>In reply to:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I'm not a fortran expert, but if you built your Fortran  
<br>
libraries with g77 and then tried to link against them with gfortran,  
<br>
you might run into problems.
<br>
<p>My advice would be to use a single fortran compiler for building  
<br>
everything: Open MPI, your libraries, your apps.  I prefer gfortran  
<br>
because it's more modern, but I have not done any performance  
<br>
evaluations of gfortran vs. g77 -- I have heard [unverified] anecdotes  
<br>
that gfortran is &quot;slower&quot; than g77 -- google around and see what the  
<br>
recent buzz is.
<br>
<p>FWIW: I tend to use the gnu suite from <a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a> --  
<br>
it contains pre-built gcc/g++/gfortran binaries and libraries for  
<br>
Leopard.
<br>
<p><p>On May 5, 2008, at 2:59 PM, Linwei Wang wrote:
<br>
<p><span class="quotelev1">&gt; Dear Reeder,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    It does not work. I do think they are from the fortran programs
</span><br>
<span class="quotelev1">&gt; I'm using (they are files included from the BLACS installation
</span><br>
<span class="quotelev1">&gt; package, not written by my own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The thing is last time when I was using g77, it caused no  
</span><br>
<span class="quotelev1">&gt; problem...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    thanks for  your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Linwei.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 2:33 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _s_wsle, _e_wsle
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5611.php">Jeff Squyres: "Re: [OMPI users] Problem Installing OpenMPI with Lahey 64-bit Fortran compiler"</a>
<li><strong>In reply to:</strong> <a href="5608.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
