<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 11:12:00 2008" -->
<!-- isoreceived="20080506151200" -->
<!-- sent="Tue, 6 May 2008 11:11:53 -0400" -->
<!-- isosent="20080506151153" -->
<!-- name="Gregory John Orris" -->
<!-- email="gregory.orris_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="9C306A22-A835-42B0-9D52-989FFA89CC7B_at_nrl.navy.mil" -->
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
<strong>From:</strong> Gregory John Orris (<em>gregory.orris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 11:11:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5615.php">Gabriele FATIGATI: "[OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5629.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5629.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Points to clarify if I may, having gone through this relatively  
<br>
recently:
<br>
g77 and gfortran are NOT one and the same.
<br>
gfortran from sourceforge works well, but it is based on gnu gcc 4.3  
<br>
and not on the gnu gcc 4.0.1 that comes with Leopard.
<br>
Your best bet is to download the ENTIRE gcc package from sourceforge  
<br>
and install it into /usr/local. This includes gcc, g++, and gfortran.
<br>
<p>Then you will need to do a number of things to actually get a reliable  
<br>
set of packages all compiled from the same version of gcc 4.3.
<br>
Why? Because 4.3 seems to be notoriously faster. AND, I had a lot of  
<br>
problems integrating the 4.0.1 libs with the 4.3 libs without errors
<br>
1. download CLAPACK-3.1.1 from netlib And compile
<br>
2. Download ATLAS-1.8 from dourceforge (netlib is a little behind  
<br>
here) and configure it with the --with-netlib-lapack=your just  
<br>
compiled lapack from CLAPACK
<br>
3. Download OpenMPI 1.2.6 and install it also so that openMPI will  
<br>
have the fortran not installed with Leopard.
<br>
4. NOW you can compile BLACS and ScaLAPACK
<br>
<p>In all of this you will need to do a couple of additional things like  
<br>
set the env's
<br>
setenv LDFLAGS &quot;-L/usr/local/lib/x86_64&quot;
<br>
setenv DYLD_LIBRARY_PATH &quot;your openmpi path&quot;
<br>
setenv LD_LIBRARY_PATH &quot;your openmpi path&quot;
<br>
<p>Do all this right and make sure you compile with the -m64 -mtune=core2  
<br>
flags and you will be golden.
<br>
<p>So what will you have---
<br>
A new cblas, atlas, lapack, openmpi, fortran, c, c++, blacs, and  
<br>
scalapack.
<br>
All on the same version of gnu c.
<br>
<p>Alternatively you can buy and use the intel compiler. It is  
<br>
significantly faster than gfortran, but it has a host of other  
<br>
problems associated with it.
<br>
But if you follow the outline above,  you will be left with the best  
<br>
that's available. I have lots more info on this, but time is short.
<br>
<p>FINALLY, and this is important, DO NOT FORGET ABOUT THE small STACK  
<br>
size on Mac's when using gfortran. It's so small that it's useless for  
<br>
large parallel jobs.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5615.php">Gabriele FATIGATI: "[OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5613.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5612.php">Jeff Squyres: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5629.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5629.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
