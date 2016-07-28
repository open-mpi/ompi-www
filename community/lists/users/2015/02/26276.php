<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 14:26:34 2015" -->
<!-- isoreceived="20150203192634" -->
<!-- sent="Tue, 3 Feb 2015 19:26:13 +0000" -->
<!-- isosent="20150203192613" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="CAAbhqc5Rikb+GL3w13vEN01F0BMZ_EgbpiFKtP4bMLR1Jfwacg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc7aCnvBThrLajZ8UTK_92B=uaL+_ozA7XndJFb-9mw4MA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-03 14:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also concur with Jeff about asking software specific questions at the
<br>
software-site, abinit already has a pretty active forum:
<br>
<a href="http://forum.abinit.org/">http://forum.abinit.org/</a>
<br>
So any questions can also be directed there.
<br>
<p>2015-02-03 19:20 GMT+00:00 Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-03 19:12 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your help. I have tried:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure  --with-mpi-prefix=/usr FC=ifort CC=icc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i still get the same error.  Mind you if I compile it serially, that
</span><br>
<span class="quotelev2">&gt;&gt; is ./configure   FC=ifort CC=icc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It works perfectly fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We do have MPI installed.. I am using Quantum Espresso code with mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I thought you where also compiling your own MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am attaching the config.log file. I appreciate your help.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Elio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; From: nickpapior_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 3 Feb 2015 17:21:51 +0000
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] configuring a code with MPI/OPENMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First try and correct your compilation by using the intel c-compiler AND
</span><br>
<span class="quotelev2">&gt;&gt; the fortran compiler. You should not mix compilers.
</span><br>
<span class="quotelev2">&gt;&gt; CC=icc FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt; Else the config.log is going to be necessary to debug it further.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: You could also try and convince your cluster administrator to provide
</span><br>
<span class="quotelev2">&gt;&gt; a more recent compiler
</span><br>
<span class="quotelev2">&gt;&gt; PPS: Do your cluster not have an MPI installation already present?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-02-03 17:13 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; II am trying to configure a code  with mpi (for parallel processing)  to
</span><br>
<span class="quotelev2">&gt;&gt; do some calculations so basically I type:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Fortran compiler does not provide iso_c_binding module.
</span><br>
<span class="quotelev2">&gt;&gt; Use a more recent version or a different compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which means that my GCC 4.1 compiler is too old to build the code
</span><br>
<span class="quotelev2">&gt;&gt; (something i do not have control over..It is a cluster of the Uni where I
</span><br>
<span class="quotelev2">&gt;&gt; work). so I tried another compiler ifort:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure  --enable-mpi=yes  FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;  but now I get another error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;  === Multicore architecture support
</span><br>
<span class="quotelev2">&gt;&gt;   ===
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking whether to enable OpenMP support... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether to build MPI code... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the C compiler supports MPI... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the C++ compiler supports MPI... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the Fortran Compiler supports MPI... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether MPI is usable... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: MPI support is broken - please fix your config
</span><br>
<span class="quotelev2">&gt;&gt; parameters and/or MPI installation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Agaiin, I tried ti give a path for the mpi compiler:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure  --enable-mpi  --with-mpi-prefix=/usr FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHICH APPARENTLY SOLVED THE PREVIOUS ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;  === Multicore architecture startup
</span><br>
<span class="quotelev2">&gt;&gt;   ===
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: Initializing MPI support
</span><br>
<span class="quotelev2">&gt;&gt; configure: looking for MPI in /usr
</span><br>
<span class="quotelev2">&gt;&gt; checking for a MPI C compiler... /usr/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; checking for a MPI C++ compiler... /usr/bin/mpicxx
</span><br>
<span class="quotelev2">&gt;&gt; checking for a MPI Fortran compiler... /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; configure: creating wrapper for MPI Fortran compiler
</span><br>
<span class="quotelev2">&gt;&gt; configure: GPU support disabled from command-line
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But stranegly enough got me back to the furst error although I am using
</span><br>
<span class="quotelev2">&gt;&gt; ifort!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the Fortran compiler provides the iso_c_binding
</span><br>
<span class="quotelev2">&gt;&gt; module... configure: error: Fortran compiler does not provide iso_c_binding
</span><br>
<span class="quotelev2">&gt;&gt; module. Use a more recent version or a different compiler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so what is going on?? please can anyone help me on this..Thank youu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Elio
</span><br>
<span class="quotelev2">&gt;&gt; University of Rondonia
</span><br>
<span class="quotelev2">&gt;&gt; Brazil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26268.php">http://www.open-mpi.org/community/lists/users/2015/02/26268.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26270.php">http://www.open-mpi.org/community/lists/users/2015/02/26270.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26273.php">http://www.open-mpi.org/community/lists/users/2015/02/26273.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26277.php">Brock Palen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26279.php">Elio Physics: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
