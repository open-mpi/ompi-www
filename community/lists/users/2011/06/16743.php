<?
$subject_val = "Re: [OMPI users] mpif90 compiler non-functional";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 12:49:57 2011" -->
<!-- isoreceived="20110622164957" -->
<!-- sent="Wed, 22 Jun 2011 12:49:50 -0400" -->
<!-- isosent="20110622164950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 compiler non-functional" -->
<!-- id="68EAD89F-7442-4D9F-8E94-BB400784B49C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinawDYieTOd0NTd6G6D7Z837-FKWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif90 compiler non-functional<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 12:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16744.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Previous message:</strong> <a href="16742.php">Jeff Squyres: "Re: [OMPI users] Need Source Code MPI"</a>
<li><strong>In reply to:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16744.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16744.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dimitry is correct -- if OMPI's configure can find a working C++ and Fortran compiler, it'll build C++ / Fortran support.  Yours was not, indicating that:
<br>
<p>a) you got a binary distribution from someone who didn't include C++ / Fortran support, or
<br>
<p>b) when you built/installed Open MPI, it couldn't find a working C++ / Fortran compiler, so it skipped building support for them.
<br>
<p><p><p>On Jun 22, 2011, at 12:05 PM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Here's mine produced from default compilation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI marcusmae_at_T61p Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.4.4rc2
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r24683
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: May 05, 2011
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.4.4rc2
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r24683
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: May 05, 2011
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.4.4rc2
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r24683
</span><br>
<span class="quotelev1">&gt;       OPAL release date: May 05, 2011
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.4.4rc2
</span><br>
<span class="quotelev1">&gt;                  Prefix: /opt/openmpi_gcc-1.4.4
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: T61p
</span><br>
<span class="quotelev1">&gt;           Configured by: marcusmae
</span><br>
<span class="quotelev1">&gt;           Configured on: Tue May 24 18:39:21 MSD 2011
</span><br>
<span class="quotelev1">&gt;          Configure host: T61p
</span><br>
<span class="quotelev1">&gt;                Built by: marcusmae
</span><br>
<span class="quotelev1">&gt;                Built on: Tue May 24 18:46:52 MSD 2011
</span><br>
<span class="quotelev1">&gt;              Built host: T61p
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gfortran version is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc version 4.6.0 20110530 (Red Hat 4.6.0-9) (GCC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do you run ./configure? Maybe try &quot;./configure
</span><br>
<span class="quotelev1">&gt; FC=/usr/bin/gfortran&quot; ? It should really really work out of box
</span><br>
<span class="quotelev1">&gt; though. Configure scripts usually cook some simple test apps and run
</span><br>
<span class="quotelev1">&gt; them to check if compiler works properly. So, your ./configure output
</span><br>
<span class="quotelev1">&gt; may help to understand more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Dimitri,
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply.
</span><br>
<span class="quotelev2">&gt;&gt; I have openmpi installed before for another application in :
</span><br>
<span class="quotelev2">&gt;&gt; /home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
</span><br>
<span class="quotelev2">&gt;&gt; I installed a new version in /opt/openmpi-1.4.3.
</span><br>
<span class="quotelev2">&gt;&gt; I reproduce some output from the screen :
</span><br>
<span class="quotelev2">&gt;&gt; amscosta_at_amscosta-desktop:/opt/openmpi-1.4.3/bin$ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                 Package: Open MPI amscosta_at_amscosta-desktop Distribution
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI SVN revision: r22421
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI release date: Jan 14, 2010
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r22421
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE release date: Jan 14, 2010
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r22421
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL release date: Jan 14, 2010
</span><br>
<span class="quotelev2">&gt;&gt;            Ident string: 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;                  Prefix:
</span><br>
<span class="quotelev2">&gt;&gt; /home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: amscosta-desktop
</span><br>
<span class="quotelev2">&gt;&gt;           Configured by: amscosta
</span><br>
<span class="quotelev2">&gt;&gt;           Configured on: Wed May 18 11:10:14 BRT 2011
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: amscosta-desktop
</span><br>
<span class="quotelev2">&gt;&gt;                Built by: amscosta
</span><br>
<span class="quotelev2">&gt;&gt;                Built on: Wed May 18 11:16:21 BRT 2011
</span><br>
<span class="quotelev2">&gt;&gt;              Built host: amscosta-desktop
</span><br>
<span class="quotelev2">&gt;&gt;              C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev2">&gt;&gt;              C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;            C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 compiler: none
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 compiler abs: none
</span><br>
<span class="quotelev2">&gt;&gt;             C profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;           C++ profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;          C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;           Sparse Groups: no
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;         libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev2">&gt;&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev2">&gt;&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev2">&gt;&gt;  ......
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 22, 2011 at 12:34 PM, Dmitry N. Mikushin
</span><br>
<span class="quotelev2">&gt;&gt; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alexandre,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you have a working Fortran compiler in system in time of OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation? To my experience Fortran bindings are always compiled by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default. How did you configured it and have you noticed any messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reg. Fortran support in configure output?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Group,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After compiling the openmpi source, the following message is displayed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when trying to compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the hello program in fortran :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; amscosta_at_amscosta-desktop:~/openmpi-1.4.3/examples$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.4.3/bin/mpif90 -g hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any clue how to solve it is very welcome.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S. I am using a ubuntu box with gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16744.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Previous message:</strong> <a href="16742.php">Jeff Squyres: "Re: [OMPI users] Need Source Code MPI"</a>
<li><strong>In reply to:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16744.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16744.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
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
