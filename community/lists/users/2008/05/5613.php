<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 10:27:48 2008" -->
<!-- isoreceived="20080506142748" -->
<!-- sent="Tue, 6 May 2008 10:27:39 -0400" -->
<!-- isosent="20080506142739" -->
<!-- name="Linwei Wang" -->
<!-- email="lxw4393_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="B1ACBAE6-0CC8-45C3-8E1E-6CB7D97E35D8_at_rit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E0D534D3-47E5-4964-83AD-4269E28873E6_at_cisco.com" -->
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
<strong>From:</strong> Linwei Wang (<em>lxw4393_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 10:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff, I finally choose to use the ScaLAPACK installer provided  
<br>
on the website~
<br>
with gcc/gfortran and openmpi...it is installed successfully but I  
<br>
haven't tested the applications..
<br>
<p><p>Thanks for your help.
<br>
<p>Linwei
<br>
<p><p>On May 6, 2008, at 10:09 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I'm not a fortran expert, but if you built your Fortran
</span><br>
<span class="quotelev1">&gt; libraries with g77 and then tried to link against them with gfortran,
</span><br>
<span class="quotelev1">&gt; you might run into problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My advice would be to use a single fortran compiler for building
</span><br>
<span class="quotelev1">&gt; everything: Open MPI, your libraries, your apps.  I prefer gfortran
</span><br>
<span class="quotelev1">&gt; because it's more modern, but I have not done any performance
</span><br>
<span class="quotelev1">&gt; evaluations of gfortran vs. g77 -- I have heard [unverified] anecdotes
</span><br>
<span class="quotelev1">&gt; that gfortran is &quot;slower&quot; than g77 -- google around and see what the
</span><br>
<span class="quotelev1">&gt; recent buzz is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I tend to use the gnu suite from <a href="http://hpc.sourceforge.net/">http://hpc.sourceforge.net/</a> --
</span><br>
<span class="quotelev1">&gt; it contains pre-built gcc/g++/gfortran binaries and libraries for
</span><br>
<span class="quotelev1">&gt; Leopard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 5, 2008, at 2:59 PM, Linwei Wang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Reeder,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   It does not work. I do think they are from the fortran programs
</span><br>
<span class="quotelev2">&gt;&gt; I'm using (they are files included from the BLACS installation
</span><br>
<span class="quotelev2">&gt;&gt; package, not written by my own.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   The thing is last time when I was using g77, it caused no
</span><br>
<span class="quotelev2">&gt;&gt; problem...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   thanks for  your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Linwei.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2008, at 2:33 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _s_wsle, _e_wsle
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5614.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
