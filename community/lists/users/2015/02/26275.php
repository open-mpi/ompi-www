<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 14:20:58 2015" -->
<!-- isoreceived="20150203192058" -->
<!-- sent="Tue, 3 Feb 2015 19:20:37 +0000" -->
<!-- isosent="20150203192037" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="CAAbhqc7aCnvBThrLajZ8UTK_92B=uaL+_ozA7XndJFb-9mw4MA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BLU179-W159187151E59FB2C948BA3EA3D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuring a code with MPI/OPENMPI<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 14:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2015-02-03 19:12 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your help. I have tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure  --with-mpi-prefix=/usr FC=ifort CC=icc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i still get the same error.  Mind you if I compile it serially, that
</span><br>
<span class="quotelev1">&gt; is ./configure   FC=ifort CC=icc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works perfectly fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do have MPI installed.. I am using Quantum Espresso code with mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Sorry I thought you where also compiling your own MPI.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching the config.log file. I appreciate your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I see you are trying to install abinit, I would highly recommend you to
<br>
utilize their build.ac module method.
<br>
Instead of then passing arguments to the command line you create a build.ac
<br>
file and configure like this:
<br>
./configure --with-config-file
<br>
(I would recommend you to build abinit in a sub-folder)
<br>
<p>However, your problem is that your used MPI version is compiled against gcc
<br>
(the 4.1) so that will never work, even if you specify FC/CC
<br>
Either:
<br>
A) Use an MPI version installed using the intel compiler (if not provided
<br>
by your cluster administrator you need to install it)
<br>
B) Get a new gcc compiler
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: nickpapior_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 3 Feb 2015 17:21:51 +0000
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] configuring a code with MPI/OPENMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First try and correct your compilation by using the intel c-compiler AND
</span><br>
<span class="quotelev1">&gt; the fortran compiler. You should not mix compilers.
</span><br>
<span class="quotelev1">&gt; CC=icc FC=ifort
</span><br>
<span class="quotelev1">&gt; Else the config.log is going to be necessary to debug it further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: You could also try and convince your cluster administrator to provide
</span><br>
<span class="quotelev1">&gt; a more recent compiler
</span><br>
<span class="quotelev1">&gt; PPS: Do your cluster not have an MPI installation already present?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-03 17:13 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; II am trying to configure a code  with mpi (for parallel processing)  to
</span><br>
<span class="quotelev1">&gt; do some calculations so basically I type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: Fortran compiler does not provide iso_c_binding module.
</span><br>
<span class="quotelev1">&gt; Use a more recent version or a different compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which means that my GCC 4.1 compiler is too old to build the code
</span><br>
<span class="quotelev1">&gt; (something i do not have control over..It is a cluster of the Uni where I
</span><br>
<span class="quotelev1">&gt; work). so I tried another compiler ifort:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure  --enable-mpi=yes  FC=ifort
</span><br>
<span class="quotelev1">&gt;  but now I get another error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  === Multicore architecture support
</span><br>
<span class="quotelev1">&gt;   ===
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking whether to enable OpenMP support... no
</span><br>
<span class="quotelev1">&gt; checking whether to build MPI code... yes
</span><br>
<span class="quotelev1">&gt; checking whether the C compiler supports MPI... no
</span><br>
<span class="quotelev1">&gt; checking whether the C++ compiler supports MPI... no
</span><br>
<span class="quotelev1">&gt; checking whether the Fortran Compiler supports MPI... no
</span><br>
<span class="quotelev1">&gt; checking whether MPI is usable... no
</span><br>
<span class="quotelev1">&gt; configure: error: MPI support is broken - please fix your config
</span><br>
<span class="quotelev1">&gt; parameters and/or MPI installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agaiin, I tried ti give a path for the mpi compiler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure  --enable-mpi  --with-mpi-prefix=/usr FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHICH APPARENTLY SOLVED THE PREVIOUS ERROR:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  === Multicore architecture startup
</span><br>
<span class="quotelev1">&gt;   ===
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: Initializing MPI support
</span><br>
<span class="quotelev1">&gt; configure: looking for MPI in /usr
</span><br>
<span class="quotelev1">&gt; checking for a MPI C compiler... /usr/bin/mpicc
</span><br>
<span class="quotelev1">&gt; checking for a MPI C++ compiler... /usr/bin/mpicxx
</span><br>
<span class="quotelev1">&gt; checking for a MPI Fortran compiler... /usr/bin/mpif90
</span><br>
<span class="quotelev1">&gt; configure: creating wrapper for MPI Fortran compiler
</span><br>
<span class="quotelev1">&gt; configure: GPU support disabled from command-line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But stranegly enough got me back to the furst error although I am using
</span><br>
<span class="quotelev1">&gt; ifort!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking whether the Fortran compiler provides the iso_c_binding module...
</span><br>
<span class="quotelev1">&gt; configure: error: Fortran compiler does not provide iso_c_binding module.
</span><br>
<span class="quotelev1">&gt; Use a more recent version or a different compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so what is going on?? please can anyone help me on this..Thank youu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elio
</span><br>
<span class="quotelev1">&gt; University of Rondonia
</span><br>
<span class="quotelev1">&gt; Brazil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26268.php">http://www.open-mpi.org/community/lists/users/2015/02/26268.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26270.php">http://www.open-mpi.org/community/lists/users/2015/02/26270.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26273.php">http://www.open-mpi.org/community/lists/users/2015/02/26273.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26275/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26273.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
