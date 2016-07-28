<?
$subject_val = "Re: [OMPI users] Segmentation fault with HPCC benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 14:32:53 2013" -->
<!-- isoreceived="20130403183253" -->
<!-- sent="Wed, 3 Apr 2013 11:32:45 -0700" -->
<!-- isosent="20130403183245" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with HPCC benchmark" -->
<!-- id="AC540D4B-3400-4AE9-8836-5DB63965C5AE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMGoRG2DKxiJKOJ=YjY6KsD1Sra9dSEwT3R9nTStc5_1T7xEYw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 14:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21671.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>In reply to:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree with Gus - check your stack size. This isn't occurring in OMPI itself, so I suspect it is in the system setup.
<br>
<p><p>On Apr 3, 2013, at 10:17 AM, Reza Bakhshayeshi &lt;reza.b2008_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your answers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Ralph Castain: 
</span><br>
<span class="quotelev1">&gt; Do you mean what error I receive?
</span><br>
<span class="quotelev1">&gt; It's the output when I'm running the program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;   Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;   Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;   Failing at address: 0x1b7f000
</span><br>
<span class="quotelev1">&gt;   [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6a84b524a0]
</span><br>
<span class="quotelev1">&gt;   [ 1] hpcc(HPCC_Power2NodesMPIRandomAccessCheck+0xa04) [0x423834]
</span><br>
<span class="quotelev1">&gt;   [ 2] hpcc(HPCC_MPIRandomAccess+0x87a) [0x41e43a]
</span><br>
<span class="quotelev1">&gt;   [ 3] hpcc(main+0xfbf) [0x40a1bf]
</span><br>
<span class="quotelev1">&gt;   [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7f6a84b3d76d]
</span><br>
<span class="quotelev1">&gt;   [ 5] hpcc() [0x40aafd]
</span><br>
<span class="quotelev1">&gt;   *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [ ][[53938,1],0][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 4164 on node 192.168.100.6 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Gus Correa:
</span><br>
<span class="quotelev1">&gt; I did it both on server and on instances but it didn't solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3 April 2013 19:14, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Reza
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check the system stacksize first ('limit stacksize' or 'ulimit -s').
</span><br>
<span class="quotelev1">&gt; If it is small, you can try to increase it
</span><br>
<span class="quotelev1">&gt; before you run the program.
</span><br>
<span class="quotelev1">&gt; Say (tcsh):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; limit stacksize unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or (bash):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/03/2013 10:29 AM, Ralph Castain wrote:
</span><br>
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
<span class="quotelev1">&gt; &#226;&#128;&#139;Hi
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;&#226;&#128;&#139;I have installed HPCC benchmark suite and openmpi on a private cloud
</span><br>
<span class="quotelev1">&gt; instances.
</span><br>
<span class="quotelev1">&gt; Unfortunately I get Segmentation fault error mostly when I want to run
</span><br>
<span class="quotelev1">&gt; it simultaneously on two or more instances with:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ./myhosts hpcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is on Ubuntu server 12.04 (updated)
</span><br>
<span class="quotelev1">&gt; and this is my make.intel64 file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; SHELL = /bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; CD = cd
</span><br>
<span class="quotelev1">&gt; CP = cp
</span><br>
<span class="quotelev1">&gt; LN_S = ln -s
</span><br>
<span class="quotelev1">&gt; MKDIR = mkdir
</span><br>
<span class="quotelev1">&gt; RM = /bin/rm -f
</span><br>
<span class="quotelev1">&gt; TOUCH = touch
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Platform identifier ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ARCH = intel64
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - HPL Directory Structure / HPL library ------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; TOPdir = ../../..
</span><br>
<span class="quotelev1">&gt; INCdir = $(TOPdir)/include
</span><br>
<span class="quotelev1">&gt; BINdir = $(TOPdir)/bin/$(ARCH)
</span><br>
<span class="quotelev1">&gt; LIBdir = $(TOPdir)/lib/$(ARCH)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; HPLlib = $(LIBdir)/libhpl.a
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Message Passing library (MPI) --------------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # MPinc tells the C compiler where to find the Message Passing library
</span><br>
<span class="quotelev1">&gt; # header files, MPlib is defined to be the name of the library to be
</span><br>
<span class="quotelev1">&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; MPdir = /usr/lib/openmpi
</span><br>
<span class="quotelev1">&gt; MPinc = -I$(MPdir)/include
</span><br>
<span class="quotelev1">&gt; MPlib = $(MPdir)/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Linear Algebra library (BLAS or VSIPL) -----------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # LAinc tells the C compiler where to find the Linear Algebra library
</span><br>
<span class="quotelev1">&gt; # header files, LAlib is defined to be the name of the library to be
</span><br>
<span class="quotelev1">&gt; # used. The variable LAdir is only used for defining LAinc and LAlib.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; LAdir = /usr/local/ATLAS/obj64
</span><br>
<span class="quotelev1">&gt; LAinc = -I$(LAdir)/include
</span><br>
<span class="quotelev1">&gt; LAlib = $(LAdir)/lib/libcblas.a $(LAdir)/lib/libatlas.a
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - F77 / C interface --------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # You can skip this section if and only if you are not planning to use
</span><br>
<span class="quotelev1">&gt; # a BLAS library featuring a Fortran 77 interface. Otherwise, it is
</span><br>
<span class="quotelev1">&gt; # necessary to fill out the F2CDEFS variable with the appropriate
</span><br>
<span class="quotelev1">&gt; # options. **One and only one** option should be chosen in **each** of
</span><br>
<span class="quotelev1">&gt; # the 3 following categories:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # 1) name space (How C calls a Fortran 77 routine)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # -DAdd_ : all lower case and a suffixed underscore (Suns,
</span><br>
<span class="quotelev1">&gt; # Intel, ...), [default]
</span><br>
<span class="quotelev1">&gt; # -DNoChange : all lower case (IBM RS6000),
</span><br>
<span class="quotelev1">&gt; # -DUpCase : all upper case (Cray),
</span><br>
<span class="quotelev1">&gt; # -DAdd__ : the FORTRAN compiler in use is f2c.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # 2) C and Fortran 77 integer mapping
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # -DF77_INTEGER=int : Fortran 77 INTEGER is a C int, [default]
</span><br>
<span class="quotelev1">&gt; # -DF77_INTEGER=long : Fortran 77 INTEGER is a C long,
</span><br>
<span class="quotelev1">&gt; # -DF77_INTEGER=short : Fortran 77 INTEGER is a C short.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # 3) Fortran 77 string handling
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # -DStringSunStyle : The string address is passed at the string loca-
</span><br>
<span class="quotelev1">&gt; # tion on the stack, and the string length is then
</span><br>
<span class="quotelev1">&gt; # passed as an F77_INTEGER after all explicit
</span><br>
<span class="quotelev1">&gt; # stack arguments, [default]
</span><br>
<span class="quotelev1">&gt; # -DStringStructPtr : The address of a structure is passed by a
</span><br>
<span class="quotelev1">&gt; # Fortran 77 string, and the structure is of the
</span><br>
<span class="quotelev1">&gt; # form: struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev1">&gt; # -DStringStructVal : A structure is passed by value for each Fortran
</span><br>
<span class="quotelev1">&gt; # 77 string, and the structure is of the form:
</span><br>
<span class="quotelev1">&gt; # struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev1">&gt; # -DStringCrayStyle : Special option for Cray machines, which uses
</span><br>
<span class="quotelev1">&gt; # Cray fcd (fortran character descriptor) for
</span><br>
<span class="quotelev1">&gt; # interoperation.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; F2CDEFS =
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - HPL includes / libraries / specifics -------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
</span><br>
<span class="quotelev1">&gt; HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib) -lm
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # - Compile time options -----------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # -DHPL_COPY_L force the copy of the panel L before bcast;
</span><br>
<span class="quotelev1">&gt; # -DHPL_CALL_CBLAS call the cblas interface;
</span><br>
<span class="quotelev1">&gt; # -DHPL_CALL_VSIPL call the vsip library;
</span><br>
<span class="quotelev1">&gt; # -DHPL_DETAILED_TIMING enable detailed timers;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # By default HPL will:
</span><br>
<span class="quotelev1">&gt; # *) not copy L before broadcast,
</span><br>
<span class="quotelev1">&gt; # *) call the BLAS Fortran 77 interface,
</span><br>
<span class="quotelev1">&gt; # *) not display detailed timing information.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; HPL_OPTS = -DHPL_CALL_CBLAS
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Compilers / linkers - Optimization flags ---------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; CC = /usr/bin/mpicc
</span><br>
<span class="quotelev1">&gt; CCNOOPT = $(HPL_DEFS)
</span><br>
<span class="quotelev1">&gt; CCFLAGS = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
</span><br>
<span class="quotelev1">&gt; #CCFLAGS = $(HPL_DEFS)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # On some platforms, it is necessary to use the Fortran linker to find
</span><br>
<span class="quotelev1">&gt; # the Fortran internals used in the BLAS library.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; LINKER = /usr/bin/mpif90
</span><br>
<span class="quotelev1">&gt; LINKFLAGS = $(CCFLAGS)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ARCHIVER = ar
</span><br>
<span class="quotelev1">&gt; ARFLAGS = r
</span><br>
<span class="quotelev1">&gt; RANLIB = echo
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you mind please help me figure this problem out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Reza
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21670/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21671.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Previous message:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>In reply to:</strong> <a href="21669.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
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
