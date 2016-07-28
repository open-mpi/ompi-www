<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 14:12:22 2015" -->
<!-- isoreceived="20150203191222" -->
<!-- sent="Tue, 3 Feb 2015 22:12:21 +0300" -->
<!-- isosent="20150203191221" -->
<!-- name="Elio Physics" -->
<!-- email="elio-physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="BLU179-W159187151E59FB2C948BA3EA3D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAbhqc7Q2e9L7gYict5qVyB7bTkCPtas9073_ujd+jKP=UtF_g_at_mail.gmail.com" -->
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
<strong>From:</strong> Elio Physics (<em>elio-physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 14:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
thanks for your help. I have tried:
<br>
./configure  --with-mpi-prefix=/usr FC=ifort CC=icc
<br>
But i still get the same error.  Mind you if I compile it serially, that is ./configure   FC=ifort CC=icc
<br>
It works perfectly fine.
<br>
We do have MPI installed.. I am using Quantum Espresso code with mpirun.
<br>
I am attaching the config.log file. I appreciate your help.
<br>
Regards
<br>
Elio
<br>
<p>From: nickpapior_at_[hidden]
<br>
Date: Tue, 3 Feb 2015 17:21:51 +0000
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] configuring a code with MPI/OPENMPI
<br>
<p>First try and correct your compilation by using the intel c-compiler AND the fortran compiler. You should not mix compilers. CC=icc FC=ifortElse the config.log is going to be necessary to debug it further.
<br>
PS: You could also try and convince your cluster administrator to provide a more recent compilerPPS: Do your cluster not have an MPI installation already present?
<br>
<p>2015-02-03 17:13 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
<br>
<p>II am trying to configure a code  with mpi (for parallel processing)  to do some calculations so basically I type:
<br>
./configure 
<br>
and I get:
<br>
configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
<br>
<p>which means that my GCC 4.1 compiler is too old to build the code (something i do not have control over..It is a cluster of the Uni where I work). so I tried another compiler ifort:
<br>
./configure  --enable-mpi=yes  FC=ifort but now I get another error:
<br>
&nbsp;============================================================================== === Multicore architecture support                                         === ==============================================================================
<br>
checking whether to enable OpenMP support... nochecking whether to build MPI code... yeschecking whether the C compiler supports MPI... nochecking whether the C++ compiler supports MPI... nochecking whether the Fortran Compiler supports MPI... nochecking whether MPI is usable... noconfigure: error: MPI support is broken - please fix your config parameters and/or MPI installation
<br>
Agaiin, I tried ti give a path for the mpi compiler:
<br>
&nbsp;./configure  --enable-mpi  --with-mpi-prefix=/usr FC=ifort
<br>
WHICH APPARENTLY SOLVED THE PREVIOUS ERROR: ============================================================================== === Multicore architecture startup                                         === ==============================================================================
<br>
configure: Initializing MPI supportconfigure: looking for MPI in /usrchecking for a MPI C compiler... /usr/bin/mpiccchecking for a MPI C++ compiler... /usr/bin/mpicxxchecking for a MPI Fortran compiler... /usr/bin/mpif90configure: creating wrapper for MPI Fortran compilerconfigure: GPU support disabled from command-line But stranegly enough got me back to the furst error although I am using ifort!!
<br>
checking whether the Fortran compiler provides the iso_c_binding module... configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
<br>
so what is going on?? please can anyone help me on this..Thank youu
<br>
ElioUniversity of RondoniaBrazil
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
_______________________________________________
<br>
<p><p><p><p><p><p><pre>
-- 
Kind regards Nick


_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26270.php">http://www.open-mpi.org/community/lists/users/2015/02/26270.php</a> 		 	   		  
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26273/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26275.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
