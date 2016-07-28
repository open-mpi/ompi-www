<?
$subject_val = "Re: [OMPI users] mpif90 compiler non-functional";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 11:44:46 2011" -->
<!-- isoreceived="20110622154446" -->
<!-- sent="Wed, 22 Jun 2011 12:44:41 -0300" -->
<!-- isosent="20110622154441" -->
<!-- name="Alexandre Souza" -->
<!-- email="costamfix_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 compiler non-functional" -->
<!-- id="BANLkTim5GCUkWbBr=yD-sTKTzJVJz8Cq5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTim9rMZjRriF28nykMvUmkBQc8tU8A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-22 11:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Previous message:</strong> <a href="16739.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>In reply to:</strong> <a href="16739.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dimitri,
<br>
Thanks for the reply.
<br>
I have openmpi installed before for another application in :
<br>
/home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
<br>
I installed a new version in /opt/openmpi-1.4.3.
<br>
I reproduce some output from the screen :
<br>
amscosta_at_amscosta-desktop:/opt/openmpi-1.4.3/bin$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI amscosta_at_amscosta-desktop Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r22421
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Jan 14, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r22421
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Jan 14, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r22421
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Jan 14, 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.4.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix:
<br>
/home/amscosta/OpenFOAM/ThirdParty-1.7.x/platforms/linuxGcc/openmpi-1.4.1
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: amscosta-desktop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: amscosta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Wed May 18 11:10:14 BRT 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: amscosta-desktop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: amscosta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Wed May 18 11:16:21 BRT 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: amscosta-desktop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;Fortran90 bindings size: na
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;......
<br>
<p><p>On Wed, Jun 22, 2011 at 12:34 PM, Dmitry N. Mikushin
<br>
&lt;maemarcus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Alexandre,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you have a working Fortran compiler in system in time of OpenMPI
</span><br>
<span class="quotelev1">&gt; compilation? To my experience Fortran bindings are always compiled by
</span><br>
<span class="quotelev1">&gt; default. How did you configured it and have you noticed any messages
</span><br>
<span class="quotelev1">&gt; reg. Fortran support in configure output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/6/22 Alexandre Souza &lt;costamfix_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Group,
</span><br>
<span class="quotelev2">&gt;&gt; After compiling the openmpi source, the following message is displayed
</span><br>
<span class="quotelev2">&gt;&gt; when trying to compile
</span><br>
<span class="quotelev2">&gt;&gt; the hello program in fortran :
</span><br>
<span class="quotelev2">&gt;&gt; amscosta_at_amscosta-desktop:~/openmpi-1.4.3/examples$
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.4.3/bin/mpif90 -g hello_f90.f90 -o hello_f90
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support. &#160;As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Any clue how to solve it is very welcome.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Alex
</span><br>
<span class="quotelev2">&gt;&gt; P.S. I am using a ubuntu box with gfortran
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
<li><strong>Next message:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Previous message:</strong> <a href="16739.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>In reply to:</strong> <a href="16739.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
<li><strong>Reply:</strong> <a href="16741.php">Dmitry N. Mikushin: "Re: [OMPI users] mpif90 compiler non-functional"</a>
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
