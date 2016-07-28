<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 15:08:21 2015" -->
<!-- isoreceived="20150203200821" -->
<!-- sent="Tue, 3 Feb 2015 20:08:01 +0000" -->
<!-- isosent="20150203200801" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="CAAbhqc5jgVaURqzy_FShb-4poa5-A9TjJXHMzyUbmNjcAzPyoA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BLU179-W68907EAFAFC947669CAF37EA3D0_at_phx.gbl" -->
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
<strong>Date:</strong> 2015-02-03 15:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you still need to tell the configure script about all your MPI env
<br>
variables (I guess you haven't or have not set them all).
<br>
MPICC=mpiicc MPIFC=mpifort
<br>
or the equivalent. Probably some more are needed.
<br>
Please ask on the abinit forum about how to set the MPI executables
<br>
correctly. But the README for abinit is pretty explanatory! :)
<br>
<p>2015-02-03 20:01 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Jeff and Nick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for your help. In fact the first thing I did is to join
</span><br>
<span class="quotelev1">&gt; the mailing list of Abinit and I posted in the community; however I only
</span><br>
<span class="quotelev1">&gt; got one reply nothing since yesterday morning. I know it is a short period
</span><br>
<span class="quotelev1">&gt; of time and people are busy doing their work but I don't want to stay long
</span><br>
<span class="quotelev1">&gt; trying to figure out how to configure the code; this is when i decided to
</span><br>
<span class="quotelev1">&gt; e-mail you guys. In fact you shed light on the problem. I am trying to find
</span><br>
<span class="quotelev1">&gt; that path of the ifort compiler but in vain. In fact I was looking at the
</span><br>
<span class="quotelev1">&gt; make.sys of my quantum espresso code and I found:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Compilers: fortran-90, fortran-77, C
</span><br>
<span class="quotelev1">&gt; # If a parallel compilation is desired, MPIF90 should be a fortran-90
</span><br>
<span class="quotelev1">&gt; # compiler that produces executables for parallel execution using MPI
</span><br>
<span class="quotelev1">&gt; # (such as for instance mpif90, mpf90, mpxlf90,...);
</span><br>
<span class="quotelev1">&gt; # otherwise, an ordinary fortran-90 compiler (f90, g95, xlf90, ifort,...)
</span><br>
<span class="quotelev1">&gt; # If you have a parallel machine but no suitable candidate for MPIF90,
</span><br>
<span class="quotelev1">&gt; # try to specify the directory containing &quot;mpif.h&quot; in IFLAGS
</span><br>
<span class="quotelev1">&gt; # and to specify the location of MPI libraries in MPI_LIBS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPIF90         = mpiifort
</span><br>
<span class="quotelev1">&gt; #F90           = ifort
</span><br>
<span class="quotelev1">&gt; CC             = icc
</span><br>
<span class="quotelev1">&gt; F77            = ifort
</span><br>
<span class="quotelev1">&gt;  and also the sbatch.srm file where I execute mpirun :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;${MPI}&quot; == &quot;INTEL&quot; ]; then
</span><br>
<span class="quotelev1">&gt;     source /opt/intel/Compiler/11.1/069/bin/iccvars.sh intel64
</span><br>
<span class="quotelev1">&gt;     source /opt/intel/Compiler/11.1/069/bin/ifortvars.sh intel64
</span><br>
<span class="quotelev1">&gt;     source /opt/intel/impi/4.0.0.028/intel64/bin/mpivars.sh
</span><br>
<span class="quotelev1">&gt;     export I_MPI_PMI_LIBRARY=/usr/lib64/libpmi.so
</span><br>
<span class="quotelev1">&gt;     export I_MPI_FABRICS=shm:dapl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to put these paths in the --with-mpi-prefix but there was still a
</span><br>
<span class="quotelev1">&gt; reference to the gcc mpi!
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; From: nickpapior_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 3 Feb 2015 19:26:13 +0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] configuring a code with MPI/OPENMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also concur with Jeff about asking software specific questions at the
</span><br>
<span class="quotelev1">&gt; software-site, abinit already has a pretty active forum:
</span><br>
<span class="quotelev1">&gt; <a href="http://forum.abinit.org/">http://forum.abinit.org/</a>
</span><br>
<span class="quotelev1">&gt; So any questions can also be directed there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-03 19:20 GMT+00:00 Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-03 19:12 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
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
<span class="quotelev1">&gt; Sorry I thought you where also compiling your own MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching the config.log file. I appreciate your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see you are trying to install abinit, I would highly recommend you to
</span><br>
<span class="quotelev1">&gt; utilize their build.ac module method.
</span><br>
<span class="quotelev1">&gt; Instead of then passing arguments to the command line you create a
</span><br>
<span class="quotelev1">&gt; build.ac file and configure like this:
</span><br>
<span class="quotelev1">&gt; ./configure --with-config-file
</span><br>
<span class="quotelev1">&gt; (I would recommend you to build abinit in a sub-folder)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, your problem is that your used MPI version is compiled against
</span><br>
<span class="quotelev1">&gt; gcc (the 4.1) so that will never work, even if you specify FC/CC
</span><br>
<span class="quotelev1">&gt; Either:
</span><br>
<span class="quotelev1">&gt; A) Use an MPI version installed using the intel compiler (if not provided
</span><br>
<span class="quotelev1">&gt; by your cluster administrator you need to install it)
</span><br>
<span class="quotelev1">&gt; B) Get a new gcc compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26276.php">http://www.open-mpi.org/community/lists/users/2015/02/26276.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26279.php">http://www.open-mpi.org/community/lists/users/2015/02/26279.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26281.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
