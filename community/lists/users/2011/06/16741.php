<?
$subject_val = "Re: [OMPI users] mpif90 compiler non-functional";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 12:05:21 2011" -->
<!-- isoreceived="20110622160521" -->
<!-- sent="Wed, 22 Jun 2011 20:05:17 +0400" -->
<!-- isosent="20110622160517" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 compiler non-functional" -->
<!-- id="BANLkTinawDYieTOd0NTd6G6D7Z837-FKWA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTim5GCUkWbBr=yD-sTKTzJVJz8Cq5g_at_mail.gmail.com" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-22 12:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16742.php">Jeff Squyres: "Re: [OMPI users] Need Source Code MPI"</a>
<li><strong>Previous message:</strong> <a href="16740.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>In reply to:</strong> <a href="16740.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's mine produced from default compilation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI marcusmae_at_T61p Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4.4rc2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r24683
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: May 05, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.4.4rc2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r24683
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: May 05, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.4.4rc2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r24683
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: May 05, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.4.4rc2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /opt/openmpi_gcc-1.4.4
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: T61p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: marcusmae
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Tue May 24 18:39:21 MSD 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: T61p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: marcusmae
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue May 24 18:46:52 MSD 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: T61p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
<p>gfortran version is:
<br>
<p>gcc version 4.6.0 20110530 (Red Hat 4.6.0-9) (GCC)
<br>
<p>How do you run ./configure? Maybe try &quot;./configure
<br>
FC=/usr/bin/gfortran&quot; ? It should really really work out of box
<br>
though. Configure scripts usually cook some simple test apps and run
<br>
them to check if compiler works properly. So, your ./configure output
<br>
may help to understand more.
<br>
<p>- D.
<br>
<p>2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Dimitri,
</span><br>
<span class="quotelev1">&gt; Thanks for the reply.
</span><br>
<span class="quotelev1">&gt; I have openmpi installed before for another application in :
</span><br>
<span class="quotelev1">&gt; /home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt; I installed a new version in /opt/openmpi-1.4.3.
</span><br>
<span class="quotelev1">&gt; I reproduce some output from the screen :
</span><br>
<span class="quotelev1">&gt; amscosta_at_amscosta-desktop:/opt/openmpi-1.4.3/bin$ ompi_info
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Package: Open MPI amscosta_at_amscosta-desktop Distribution
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Open MPI: 1.4.1
</span><br>
<span class="quotelev1">&gt; &#160; Open MPI SVN revision: r22421
</span><br>
<span class="quotelev1">&gt; &#160; Open MPI release date: Jan 14, 2010
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Open RTE: 1.4.1
</span><br>
<span class="quotelev1">&gt; &#160; Open RTE SVN revision: r22421
</span><br>
<span class="quotelev1">&gt; &#160; Open RTE release date: Jan 14, 2010
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;OPAL: 1.4.1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; OPAL SVN revision: r22421
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; OPAL release date: Jan 14, 2010
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;Ident string: 1.4.1
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Prefix:
</span><br>
<span class="quotelev1">&gt; /home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt; &#160;Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;Configure host: amscosta-desktop
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Configured by: amscosta
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Configured on: Wed May 18 11:10:14 BRT 2011
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;Configure host: amscosta-desktop
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built by: amscosta
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built on: Wed May 18 11:16:21 BRT 2011
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Built host: amscosta-desktop
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C bindings: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ bindings: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt; &#160;Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C compiler: gcc
</span><br>
<span class="quotelev1">&gt; &#160; &#160; C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ compiler: g++
</span><br>
<span class="quotelev1">&gt; &#160; C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt; &#160;Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160;Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt; &#160;Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; &#160; C profiling: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; C++ profiling: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;C++ exceptions: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160;Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &#160; Sparse Groups: no
</span><br>
<span class="quotelev1">&gt; &#160;Internal debug support: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; libltdl support: yes
</span><br>
<span class="quotelev1">&gt; &#160; Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; &#160;mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt; &#160;......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 22, 2011 at 12:34 PM, Dmitry N. Mikushin
</span><br>
<span class="quotelev1">&gt; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Alexandre,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you have a working Fortran compiler in system in time of OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; compilation? To my experience Fortran bindings are always compiled by
</span><br>
<span class="quotelev2">&gt;&gt; default. How did you configured it and have you noticed any messages
</span><br>
<span class="quotelev2">&gt;&gt; reg. Fortran support in configure output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - D.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Group,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After compiling the openmpi source, the following message is displayed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when trying to compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hello program in fortran :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amscosta_at_amscosta-desktop:~/openmpi-1.4.3/examples$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.4.3/bin/mpif90 -g hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran 90 support. &#160;As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any clue how to solve it is very welcome.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. I am using a ubuntu box with gfortran
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16742.php">Jeff Squyres: "Re: [OMPI users] Need Source Code MPI"</a>
<li><strong>Previous message:</strong> <a href="16740.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>In reply to:</strong> <a href="16740.php">Alexandre Souza: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16743.php">Jeff Squyres: "Re: [OMPI users] mpif90 compiler non-functional"</a>
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
