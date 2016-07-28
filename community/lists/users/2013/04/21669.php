<?
$subject_val = "Re: [OMPI users] Segmentation fault with HPCC benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 13:17:43 2013" -->
<!-- isoreceived="20130403171743" -->
<!-- sent="Wed, 3 Apr 2013 21:47:18 +0430" -->
<!-- isosent="20130403171718" -->
<!-- name="Reza Bakhshayeshi" -->
<!-- email="reza.b2008_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with HPCC benchmark" -->
<!-- id="CAMGoRG2DKxiJKOJ=YjY6KsD1Sra9dSEwT3R9nTStc5_1T7xEYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="515C4061.2010209_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Reza Bakhshayeshi (<em>reza.b2008_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 13:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>In reply to:</strong> <a href="21667.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answers.
<br>
<p>@Ralph Castain:
<br>
Do you mean what error I receive?
<br>
It's the output when I'm running the program:
<br>
<p>&nbsp;&nbsp;*** Process received signal ***
<br>
&nbsp;&nbsp;Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;Signal code: Address not mapped (1)
<br>
&nbsp;&nbsp;Failing at address: 0x1b7f000
<br>
&nbsp;&nbsp;[ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6a84b524a0]
<br>
&nbsp;&nbsp;[ 1] hpcc(HPCC_Power2NodesMPIRandomAccessCheck+0xa04) [0x423834]
<br>
&nbsp;&nbsp;[ 2] hpcc(HPCC_MPIRandomAccess+0x87a) [0x41e43a]
<br>
&nbsp;&nbsp;[ 3] hpcc(main+0xfbf) [0x40a1bf]
<br>
&nbsp;&nbsp;[ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
<br>
[0x7f6a84b3d76d]
<br>
&nbsp;&nbsp;[ 5] hpcc() [0x40aafd]
<br>
&nbsp;&nbsp;*** End of error message ***
<br>
[
<br>
][[53938,1],0][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 4164 on node 192.168.100.6
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>@Gus Correa:
<br>
I did it both on server and on instances but it didn't solve the problem.
<br>
<p><p>On 3 April 2013 19:14, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Reza
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you perhaps share the stacktrace from the segfault? It's
</span><br>
<span class="quotelev2">&gt;&gt; impossible to advise you on the problem without seeing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2013, at 5:28 AM, Reza Bakhshayeshi &lt;reza.b2008_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:reza.b2008_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &#226;&#128;&#139;Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#226;&#128;&#139;&#226;&#128;&#139;I have installed HPCC benchmark suite and openmpi on a private cloud
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instances.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately I get Segmentation fault error mostly when I want to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it simultaneously on two or more instances with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --hostfile ./myhosts hpcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything is on Ubuntu server 12.04 (updated)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and this is my make.intel64 file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell ------------------------------**------------------------------**--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHELL = /bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CD = cd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CP = cp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LN_S = ln -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MKDIR = mkdir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RM = /bin/rm -f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TOUCH = touch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - Platform identifier ------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ARCH = intel64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - HPL Directory Structure / HPL library ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TOPdir = ../../..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INCdir = $(TOPdir)/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BINdir = $(TOPdir)/bin/$(ARCH)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIBdir = $(TOPdir)/lib/$(ARCH)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPLlib = $(LIBdir)/libhpl.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - Message Passing library (MPI) ------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # MPinc tells the C compiler where to find the Message Passing library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # header files, MPlib is defined to be the name of the library to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPdir = /usr/lib/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPinc = -I$(MPdir)/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPlib = $(MPdir)/lib/libmpi.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - Linear Algebra library (BLAS or VSIPL) -----------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # LAinc tells the C compiler where to find the Linear Algebra library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # header files, LAlib is defined to be the name of the library to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # used. The variable LAdir is only used for defining LAinc and LAlib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAdir = /usr/local/ATLAS/obj64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAinc = -I$(LAdir)/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAlib = $(LAdir)/lib/libcblas.a $(LAdir)/lib/libatlas.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - F77 / C interface ------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # You can skip this section if and only if you are not planning to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # a BLAS library featuring a Fortran 77 interface. Otherwise, it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # necessary to fill out the F2CDEFS variable with the appropriate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # options. **One and only one** option should be chosen in **each** of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # the 3 following categories:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 1) name space (How C calls a Fortran 77 routine)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DAdd_ : all lower case and a suffixed underscore (Suns,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Intel, ...), [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DNoChange : all lower case (IBM RS6000),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DUpCase : all upper case (Cray),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DAdd__ : the FORTRAN compiler in use is f2c.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 2) C and Fortran 77 integer mapping
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DF77_INTEGER=int : Fortran 77 INTEGER is a C int, [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DF77_INTEGER=long : Fortran 77 INTEGER is a C long,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DF77_INTEGER=short : Fortran 77 INTEGER is a C short.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 3) Fortran 77 string handling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DStringSunStyle : The string address is passed at the string loca-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # tion on the stack, and the string length is then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # passed as an F77_INTEGER after all explicit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # stack arguments, [default]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DStringStructPtr : The address of a structure is passed by a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Fortran 77 string, and the structure is of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # form: struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DStringStructVal : A structure is passed by value for each Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 77 string, and the structure is of the form:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DStringCrayStyle : Special option for Cray machines, which uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Cray fcd (fortran character descriptor) for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # interoperation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F2CDEFS =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - HPL includes / libraries / specifics ------------------------------*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc) $(MPinc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib) -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - Compile time options ------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DHPL_COPY_L force the copy of the panel L before bcast;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DHPL_CALL_CBLAS call the cblas interface;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DHPL_CALL_VSIPL call the vsip library;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # -DHPL_DETAILED_TIMING enable detailed timers;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # By default HPL will:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # *) not copy L before broadcast,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # *) call the BLAS Fortran 77 interface,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # *) not display detailed timing information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPL_OPTS = -DHPL_CALL_CBLAS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # - Compilers / linkers - Optimization flags ---------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC = /usr/bin/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CCNOOPT = $(HPL_DEFS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CCFLAGS = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #CCFLAGS = $(HPL_DEFS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # On some platforms, it is necessary to use the Fortran linker to find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # the Fortran internals used in the BLAS library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LINKER = /usr/bin/mpif90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LINKFLAGS = $(CCFLAGS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ARCHIVER = ar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ARFLAGS = r
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RANLIB = echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ------------------------------**------------------------------**
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would you mind please help me figure this problem out?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reza
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Previous message:</strong> <a href="21668.php">Brock Palen: "Re: [OMPI users] FCA collectives disabled by default"</a>
<li><strong>In reply to:</strong> <a href="21667.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
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
