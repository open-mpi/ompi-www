<?
$subject_val = "Re: [OMPI users] mpif90 compiler non-functional";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 13:18:17 2011" -->
<!-- isoreceived="20110622171817" -->
<!-- sent="Wed, 22 Jun 2011 14:18:13 -0300" -->
<!-- isosent="20110622171813" -->
<!-- name="Alexandre Souza" -->
<!-- email="costamfix_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 compiler non-functional" -->
<!-- id="BANLkTikfwjNiEPYPG6nkG61iDV0vgi8ZWA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68EAD89F-7442-4D9F-8E94-BB400784B49C_at_cisco.com" -->
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
<strong>From:</strong> Alexandre Souza (<em>costamfix_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 13:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16745.php">Gus Correa: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Previous message:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>In reply to:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16745.php">Gus Correa: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16745.php">Gus Correa: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16746.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16747.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Dimitri and Jeff for the output,
<br>
I managed build the mpi and run the examples in f77 and f90 doing the guideline.
<br>
However the only problem is I was logged as Root.
<br>
When I compile the examples with mpif90 or mpif77 as common user, it
<br>
keeps pointing to the old installation of mpi that does not use the
<br>
fortran compiler.
<br>
(/home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1)
<br>
How can I make to point to the new installed version in
<br>
/opt/openmpi-1.4.3, when calling mpif90 or mpif77 as a common user ?
<br>
Alex
<br>
<p>On Wed, Jun 22, 2011 at 1:49 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dimitry is correct -- if OMPI's configure can find a working C++ and Fortran compiler, it'll build C++ / Fortran support. &#160;Yours was not, indicating that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) you got a binary distribution from someone who didn't include C++ / Fortran support, or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b) when you built/installed Open MPI, it couldn't find a working C++ / Fortran compiler, so it skipped building support for them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 22, 2011, at 12:05 PM, Dmitry N. Mikushin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's mine produced from default compilation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Package: Open MPI marcusmae_at_T61p Distribution
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Open MPI: 1.4.4rc2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Open MPI SVN revision: r24683
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Open MPI release date: May 05, 2011
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Open RTE: 1.4.4rc2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Open RTE SVN revision: r24683
</span><br>
<span class="quotelev2">&gt;&gt; &#160; Open RTE release date: May 05, 2011
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;OPAL: 1.4.4rc2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; OPAL SVN revision: r24683
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; OPAL release date: May 05, 2011
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;Ident string: 1.4.4rc2
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Prefix: /opt/openmpi_gcc-1.4.4
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160;Configure host: T61p
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; Configured by: marcusmae
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; Configured on: Tue May 24 18:39:21 MSD 2011
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160;Configure host: T61p
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built by: marcusmae
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built on: Tue May 24 18:46:52 MSD 2011
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built host: T61p
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt; &#160; C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160;Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gfortran version is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.6.0 20110530 (Red Hat 4.6.0-9) (GCC)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you run ./configure? Maybe try &quot;./configure
</span><br>
<span class="quotelev2">&gt;&gt; FC=/usr/bin/gfortran&quot; ? It should really really work out of box
</span><br>
<span class="quotelev2">&gt;&gt; though. Configure scripts usually cook some simple test apps and run
</span><br>
<span class="quotelev2">&gt;&gt; them to check if compiler works properly. So, your ./configure output
</span><br>
<span class="quotelev2">&gt;&gt; may help to understand more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - D.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Dimitri,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have openmpi installed before for another application in :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed a new version in /opt/openmpi-1.4.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I reproduce some output from the screen :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amscosta_at_amscosta-desktop:/opt/openmpi-1.4.3/bin$ ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Package: Open MPI amscosta_at_amscosta-desktop Distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Open MPI: 1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; Open MPI SVN revision: r22421
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; Open MPI release date: Jan 14, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Open RTE: 1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; Open RTE SVN revision: r22421
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; Open RTE release date: Jan 14, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;OPAL: 1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; OPAL SVN revision: r22421
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; OPAL release date: Jan 14, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;Ident string: 1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Prefix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;Configure host: amscosta-desktop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; Configured by: amscosta
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; Configured on: Wed May 18 11:10:14 BRT 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;Configure host: amscosta-desktop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built by: amscosta
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built on: Wed May 18 11:16:21 BRT 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built host: amscosta-desktop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160;Fortran77 bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160;Fortran90 bindings: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Fortran90 bindings size: na
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160;Fortran77 compiler: gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160;Fortran90 compiler: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Fortran90 compiler abs: none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; C profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; C++ profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; Fortran77 profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; Fortran90 profiling: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; &#160; MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160; &#160; &#160; MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;......
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jun 22, 2011 at 12:34 PM, Dmitry N. Mikushin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alexandre,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you have a working Fortran compiler in system in time of OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compilation? To my experience Fortran bindings are always compiled by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default. How did you configured it and have you noticed any messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reg. Fortran support in configure output?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear Group,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After compiling the openmpi source, the following message is displayed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when trying to compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the hello program in fortran :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; amscosta_at_amscosta-desktop:~/openmpi-1.4.3/examples$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/openmpi-1.4.3/bin/mpif90 -g hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fortran 90 support. &#160;As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any clue how to solve it is very welcome.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P.S. I am using a ubuntu box with gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16745.php">Gus Correa: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Previous message:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>In reply to:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16745.php">Gus Correa: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16745.php">Gus Correa: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16746.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16747.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
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
