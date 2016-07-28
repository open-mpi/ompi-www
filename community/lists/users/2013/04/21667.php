<?
$subject_val = "Re: [OMPI users] Segmentation fault with HPCC benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 10:44:53 2013" -->
<!-- isoreceived="20130403144453" -->
<!-- sent="Wed, 03 Apr 2013 10:44:49 -0400" -->
<!-- isosent="20130403144449" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with HPCC benchmark" -->
<!-- id="515C4061.2010209_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BC27C0B6-28A7-48C3-BC7B-C4636C54ABF5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with HPCC benchmark<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 10:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>Previous message:</strong> <a href="21666.php">Ralph Castain: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>In reply to:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reza
<br>
<p>Check the system stacksize first ('limit stacksize' or 'ulimit -s').
<br>
If it is small, you can try to increase it
<br>
before you run the program.
<br>
Say (tcsh):
<br>
<p>limit stacksize unlimited
<br>
<p>or (bash):
<br>
<p>ulimit -s unlimited
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 04/03/2013 10:29 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Could you perhaps share the stacktrace from the segfault? It's
</span><br>
<span class="quotelev1">&gt; impossible to advise you on the problem without seeing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2013, at 5:28 AM, Reza Bakhshayeshi &lt;reza.b2008_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:reza.b2008_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;Hi
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#139;&#226;&#128;&#139;I have installed HPCC benchmark suite and openmpi on a private cloud
</span><br>
<span class="quotelev2">&gt;&gt; instances.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I get Segmentation fault error mostly when I want to run
</span><br>
<span class="quotelev2">&gt;&gt; it simultaneously on two or more instances with:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --hostfile ./myhosts hpcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything is on Ubuntu server 12.04 (updated)
</span><br>
<span class="quotelev2">&gt;&gt; and this is my make.intel64 file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; SHELL = /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; CD = cd
</span><br>
<span class="quotelev2">&gt;&gt; CP = cp
</span><br>
<span class="quotelev2">&gt;&gt; LN_S = ln -s
</span><br>
<span class="quotelev2">&gt;&gt; MKDIR = mkdir
</span><br>
<span class="quotelev2">&gt;&gt; RM = /bin/rm -f
</span><br>
<span class="quotelev2">&gt;&gt; TOUCH = touch
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - Platform identifier ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; ARCH = intel64
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - HPL Directory Structure / HPL library ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; TOPdir = ../../..
</span><br>
<span class="quotelev2">&gt;&gt; INCdir = $(TOPdir)/include
</span><br>
<span class="quotelev2">&gt;&gt; BINdir = $(TOPdir)/bin/$(ARCH)
</span><br>
<span class="quotelev2">&gt;&gt; LIBdir = $(TOPdir)/lib/$(ARCH)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; HPLlib = $(LIBdir)/libhpl.a
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - Message Passing library (MPI) --------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # MPinc tells the C compiler where to find the Message Passing library
</span><br>
<span class="quotelev2">&gt;&gt; # header files, MPlib is defined to be the name of the library to be
</span><br>
<span class="quotelev2">&gt;&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; MPdir = /usr/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; MPinc = -I$(MPdir)/include
</span><br>
<span class="quotelev2">&gt;&gt; MPlib = $(MPdir)/lib/libmpi.so
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - Linear Algebra library (BLAS or VSIPL) -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # LAinc tells the C compiler where to find the Linear Algebra library
</span><br>
<span class="quotelev2">&gt;&gt; # header files, LAlib is defined to be the name of the library to be
</span><br>
<span class="quotelev2">&gt;&gt; # used. The variable LAdir is only used for defining LAinc and LAlib.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; LAdir = /usr/local/ATLAS/obj64
</span><br>
<span class="quotelev2">&gt;&gt; LAinc = -I$(LAdir)/include
</span><br>
<span class="quotelev2">&gt;&gt; LAlib = $(LAdir)/lib/libcblas.a $(LAdir)/lib/libatlas.a
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - F77 / C interface --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # You can skip this section if and only if you are not planning to use
</span><br>
<span class="quotelev2">&gt;&gt; # a BLAS library featuring a Fortran 77 interface. Otherwise, it is
</span><br>
<span class="quotelev2">&gt;&gt; # necessary to fill out the F2CDEFS variable with the appropriate
</span><br>
<span class="quotelev2">&gt;&gt; # options. **One and only one** option should be chosen in **each** of
</span><br>
<span class="quotelev2">&gt;&gt; # the 3 following categories:
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 1) name space (How C calls a Fortran 77 routine)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # -DAdd_ : all lower case and a suffixed underscore (Suns,
</span><br>
<span class="quotelev2">&gt;&gt; # Intel, ...), [default]
</span><br>
<span class="quotelev2">&gt;&gt; # -DNoChange : all lower case (IBM RS6000),
</span><br>
<span class="quotelev2">&gt;&gt; # -DUpCase : all upper case (Cray),
</span><br>
<span class="quotelev2">&gt;&gt; # -DAdd__ : the FORTRAN compiler in use is f2c.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 2) C and Fortran 77 integer mapping
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # -DF77_INTEGER=int : Fortran 77 INTEGER is a C int, [default]
</span><br>
<span class="quotelev2">&gt;&gt; # -DF77_INTEGER=long : Fortran 77 INTEGER is a C long,
</span><br>
<span class="quotelev2">&gt;&gt; # -DF77_INTEGER=short : Fortran 77 INTEGER is a C short.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # 3) Fortran 77 string handling
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # -DStringSunStyle : The string address is passed at the string loca-
</span><br>
<span class="quotelev2">&gt;&gt; # tion on the stack, and the string length is then
</span><br>
<span class="quotelev2">&gt;&gt; # passed as an F77_INTEGER after all explicit
</span><br>
<span class="quotelev2">&gt;&gt; # stack arguments, [default]
</span><br>
<span class="quotelev2">&gt;&gt; # -DStringStructPtr : The address of a structure is passed by a
</span><br>
<span class="quotelev2">&gt;&gt; # Fortran 77 string, and the structure is of the
</span><br>
<span class="quotelev2">&gt;&gt; # form: struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev2">&gt;&gt; # -DStringStructVal : A structure is passed by value for each Fortran
</span><br>
<span class="quotelev2">&gt;&gt; # 77 string, and the structure is of the form:
</span><br>
<span class="quotelev2">&gt;&gt; # struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev2">&gt;&gt; # -DStringCrayStyle : Special option for Cray machines, which uses
</span><br>
<span class="quotelev2">&gt;&gt; # Cray fcd (fortran character descriptor) for
</span><br>
<span class="quotelev2">&gt;&gt; # interoperation.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; F2CDEFS =
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - HPL includes / libraries / specifics -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
</span><br>
<span class="quotelev2">&gt;&gt; HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib) -lm
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # - Compile time options -----------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # -DHPL_COPY_L force the copy of the panel L before bcast;
</span><br>
<span class="quotelev2">&gt;&gt; # -DHPL_CALL_CBLAS call the cblas interface;
</span><br>
<span class="quotelev2">&gt;&gt; # -DHPL_CALL_VSIPL call the vsip library;
</span><br>
<span class="quotelev2">&gt;&gt; # -DHPL_DETAILED_TIMING enable detailed timers;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # By default HPL will:
</span><br>
<span class="quotelev2">&gt;&gt; # *) not copy L before broadcast,
</span><br>
<span class="quotelev2">&gt;&gt; # *) call the BLAS Fortran 77 interface,
</span><br>
<span class="quotelev2">&gt;&gt; # *) not display detailed timing information.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; HPL_OPTS = -DHPL_CALL_CBLAS
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - Compilers / linkers - Optimization flags ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; CC = /usr/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; CCNOOPT = $(HPL_DEFS)
</span><br>
<span class="quotelev2">&gt;&gt; CCFLAGS = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
</span><br>
<span class="quotelev2">&gt;&gt; #CCFLAGS = $(HPL_DEFS)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # On some platforms, it is necessary to use the Fortran linker to find
</span><br>
<span class="quotelev2">&gt;&gt; # the Fortran internals used in the BLAS library.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; LINKER = /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt; LINKFLAGS = $(CCFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; ARCHIVER = ar
</span><br>
<span class="quotelev2">&gt;&gt; ARFLAGS = r
</span><br>
<span class="quotelev2">&gt;&gt; RANLIB = echo
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind please help me figure this problem out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Reza
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>Previous message:</strong> <a href="21666.php">Ralph Castain: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>In reply to:</strong> <a href="21665.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
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
