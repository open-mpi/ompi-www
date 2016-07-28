<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 15:01:42 2015" -->
<!-- isoreceived="20150203200142" -->
<!-- sent="Tue, 3 Feb 2015 23:01:41 +0300" -->
<!-- isosent="20150203200141" -->
<!-- name="Elio Physics" -->
<!-- email="elio-physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI" -->
<!-- id="BLU179-W68907EAFAFC947669CAF37EA3D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAbhqc5Rikb+GL3w13vEN01F0BMZ_EgbpiFKtP4bMLR1Jfwacg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-03 15:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26280.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26280.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26280.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and Nick,
<br>
Thanks very much for your help. In fact the first thing I did is to join the mailing list of Abinit and I posted in the community; however I only got one reply nothing since yesterday morning. I know it is a short period of time and people are busy doing their work but I don't want to stay long trying to figure out how to configure the code; this is when i decided to e-mail you guys. In fact you shed light on the problem. I am trying to find that path of the ifort compiler but in vain. In fact I was looking at the make.sys of my quantum espresso code and I found:
<br>
# Compilers: fortran-90, fortran-77, C# If a parallel compilation is desired, MPIF90 should be a fortran-90# compiler that produces executables for parallel execution using MPI# (such as for instance mpif90, mpf90, mpxlf90,...);# otherwise, an ordinary fortran-90 compiler (f90, g95, xlf90, ifort,...)# If you have a parallel machine but no suitable candidate for MPIF90,# try to specify the directory containing &quot;mpif.h&quot; in IFLAGS# and to specify the location of MPI libraries in MPI_LIBS
<br>
MPIF90         = mpiifort#F90           = ifortCC             = iccF77            = ifort and also the sbatch.srm file where I execute mpirun :
<br>
if [ &quot;${MPI}&quot; == &quot;INTEL&quot; ]; then    source /opt/intel/Compiler/11.1/069/bin/iccvars.sh intel64    source /opt/intel/Compiler/11.1/069/bin/ifortvars.sh intel64    source /opt/intel/impi/4.0.0.028/intel64/bin/mpivars.sh    export I_MPI_PMI_LIBRARY=/usr/lib64/libpmi.so    export I_MPI_FABRICS=shm:dapl
<br>
I tried to put these paths in the --with-mpi-prefix but there was still a reference to the gcc mpi!
<br>
Regards
<br>
Elio
<br>
&nbsp;
<br>
From: nickpapior_at_[hidden]
<br>
Date: Tue, 3 Feb 2015 19:26:13 +0000
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] configuring a code with MPI/OPENMPI
<br>
<p>I also concur with Jeff about asking software specific questions at the software-site, abinit already has a pretty active forum: <a href="http://forum.abinit.org/So">http://forum.abinit.org/So</a> any questions can also be directed there.
<br>
2015-02-03 19:20 GMT+00:00 Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;:
<br>
<p><p>2015-02-03 19:12 GMT+00:00 Elio Physics &lt;elio-physics_at_[hidden]&gt;:
<br>
<p>thanks for your help. I have tried:
<br>
./configure  --with-mpi-prefix=/usr FC=ifort CC=icc
<br>
But i still get the same error.  Mind you if I compile it serially, that is ./configure   FC=ifort CC=icc
<br>
It works perfectly fine.
<br>
We do have MPI installed.. I am using Quantum Espresso code with mpirun.Sorry I thought you where also compiling your own MPI. 
<br>
I am attaching the config.log file. I appreciate your help.I see you are trying to install abinit, I would highly recommend you to utilize their build.ac module method.Instead of then passing arguments to the command line you create a build.ac file and configure like this:./configure --with-config-file (I would recommend you to build abinit in a sub-folder)
<br>
However, your problem is that your used MPI version is compiled against gcc (the 4.1) so that will never work, even if you specify FC/CCEither:A) Use an MPI version installed using the intel compiler (if not provided by your cluster administrator you need to install it)B) Get a new gcc compiler
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

_______________________________________________
-- 
Kind regards Nick


-- 
Kind regards Nick


_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26276.php">http://www.open-mpi.org/community/lists/users/2015/02/26276.php</a> 		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26280.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26278.php">Mark Santcroos: "Re: [OMPI users] independent startup of orted and orterun"</a>
<li><strong>In reply to:</strong> <a href="26276.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26280.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Reply:</strong> <a href="26280.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
