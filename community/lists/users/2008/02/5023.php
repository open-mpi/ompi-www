<?
$subject_val = "[OMPI users] openMPI on 64 bit SUSE 10.2 OS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 15:53:12 2008" -->
<!-- isoreceived="20080212205312" -->
<!-- sent="Tue, 12 Feb 2008 15:53:00 -0500" -->
<!-- isosent="20080212205300" -->
<!-- name="Hsieh, Pei-Ying (MED US)" -->
<!-- email="pei-ying.hsieh_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI on 64 bit SUSE 10.2 OS" -->
<!-- id="7AEC29D79CDD2646955922C34AFF197329DEFB_at_USMLVV1EXCTV06.ww005.siemens.net" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openMPI on 64 bit SUSE 10.2 OS<br>
<strong>From:</strong> Hsieh, Pei-Ying (MED US) (<em>pei-ying.hsieh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 15:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5024.php">Edgar Gabriel: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5024.php">Edgar Gabriel: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5024.php">Edgar Gabriel: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Maybe reply:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI experts:
<br>
<p>Please forgive me if this is a silly question.
<br>
<p>I tried to compile a finite element solver (www.csc.fi/elmer) with
<br>
OpenMPI and hypre-2.0.0.  I compiled openmpi-1.2.5 and hypre-2.0.0 from
<br>
source.
<br>
<p>On a 32 bit OpenSUSE 10.3 OS.  Everything was compiled without any
<br>
problem.  I got about 40% speed up on a test case using a dual-core AMD.
<br>
<p>However, when I tried to compiled elmer on a 64 bit OpenSUSE 10.2 OS, I
<br>
got an error (no error when compiling OpenMPI and Hypre).  I ran a test
<br>
hello_mpi.c on the 64 bit OS without any problem.  It is not clear to me
<br>
whether this is an OpenMPI issue or elmer issue.  I attached the error
<br>
message.  It will be appreciated if someone can shed some light on this.
<br>
<p>Thanks!
<br>
<p>Pei
<br>
*********************************
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export CC=mpicc
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export CXX=mpic++
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export FC=mpif90
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export F77=mpif90
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
CFLAGS=-I/usr/local/hypre2.0/include
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
FCFLAGS=-I/usr/local/hypre2.0/include
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
F77FLAGS=-I/usr/local/hypre2.0/include
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
FFLAGS=-I/usr/local/hypre2.0/include
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
LDFLAGS=&quot;-L/usr/local/hypre2.0/lib -lHYPRE&quot;
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
ELMER_HOME=/home/peiying/elmer
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
MPI_HOME=/usr/local/openmpi
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; export
<br>
LD_LIBRARY_PATH=/usr/local/openmpi/lib:/usr/local/hypre2.0/lib:$LD_LIBRA
<br>
RY_PATH
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt; ./configure
<br>
--prefix=$ELMER_HOME --with-mpi-dir=$MPI_HOME
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
checking host system type... x86_64-unknown-linux-gnu
<br>
checking target system type... x86_64-unknown-linux-gnu
<br>
checking for a BSD-compatible install... /usr/bin/install -c
<br>
checking whether build environment is sane... yes
<br>
checking for gawk... gawk
<br>
checking whether make sets $(MAKE)... yes
<br>
checking whether to enable maintainer-specific portions of Makefiles...
<br>
no
<br>
checking for style of include used by make... GNU
<br>
checking for gcc... mpicc
<br>
checking for C compiler default output file name... a.out
<br>
checking whether the C compiler works... yes
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of executables...
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether mpicc accepts -g... yes
<br>
checking for mpicc option to accept ISO C89... none needed
<br>
checking dependency style of mpicc... gcc3
<br>
checking for ftello... yes
<br>
checking for fseeko... yes
<br>
checking for answer to meaning of life... 42
<br>
checking for default compilation flags... optimized
<br>
checking whether we are using the GNU C compiler... (cached) yes
<br>
checking whether mpicc accepts -g... (cached) yes
<br>
checking for mpicc option to accept ISO C89... (cached) none needed
<br>
checking dependency style of mpicc... (cached) gcc3
<br>
checking whether we are using the GNU C++ compiler... yes
<br>
checking whether mpic++ accepts -g... yes
<br>
checking dependency style of mpic++... gcc3
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether mpif90 accepts -g... yes
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether mpif90 accepts -g... yes
<br>
checking for ranlib... ranlib
<br>
checking for ar... ar
<br>
checking for ar flags... cru
<br>
checking whether we are using the Microsoft C compiler... no
<br>
checking for /lib/cpp... yes
<br>
checking for C++ linker flags...  -L/usr/local/lib
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib64
<br>
-L/lib/../lib64 -L/usr/lib/../lib64
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/l
<br>
ib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lmpi_cxx -lmpi
<br>
-lopen-rte -lopen-pal -ldl -lnsl -lutil -ldl -lstdc++ -lm -lgcc_s
<br>
-lpthread -lgcc_s
<br>
checking how to run the C preprocessor... /lib/cpp
<br>
checking for grep that handles long lines and -e... /usr/bin/grep
<br>
checking for egrep... /usr/bin/grep -E
<br>
checking for ANSI C header files... yes
<br>
checking for sys/types.h... yes
<br>
checking for sys/stat.h... yes
<br>
checking for stdlib.h... yes
<br>
checking for string.h... yes
<br>
checking for memory.h... yes
<br>
checking for strings.h... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for unistd.h... yes
<br>
checking for 64 bit compilation flags... let's see what happens
<br>
checking for 64 bit CFLAGS... -m64 -fPIC
<br>
checking for 64 bit FCFLAGS... -m64 -fPIC
<br>
checking for 64 bit CXXFLAGS... -m64 -fPIC
<br>
checking for 64 bit FFLAGS... -m64 -fPIC
<br>
checking for void*... yes
<br>
checking size of void*... 8
<br>
checking to see if we got 64 bits... oh yes
<br>
checking how to get verbose linking output from mpif90... -v
<br>
checking for Fortran 77 libraries of mpif90...
<br>
-L/usr/local/hypre2.0/lib -L/usr/local/lib
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib64
<br>
-L/lib/../lib64 -L/usr/lib/../lib64
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/l
<br>
ib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lHYPRE -lmpi_f90
<br>
-lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -lgfortranbegin
<br>
-lgfortran -lm -lpthread
<br>
checking for dummy main to link with Fortran 77 libraries... none
<br>
checking for Fortran 77 name-mangling scheme... lower case, underscore,
<br>
no extra underscore
<br>
checking how to get verbose linking output from mpif90... -v
<br>
checking for Fortran libraries of mpif90...  -L/usr/local/hypre2.0/lib
<br>
-L/usr/local/lib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../lib64
<br>
-L/lib/../lib64 -L/usr/lib/../lib64
<br>
-L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../../../x86_64-suse-linux/l
<br>
ib -L/usr/lib64/gcc/x86_64-suse-linux/4.1.2/../../.. -lHYPRE -lmpi_f90
<br>
-lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -lnsl -lutil -lgfortranbegin
<br>
-lgfortran -lm -lpthread
<br>
checking for dummy main to link with Fortran libraries... none
<br>
checking for Fortran name-mangling scheme... lower case, underscore, no
<br>
extra underscore
<br>
checking for Fortran char* mangling scheme... char_ptr
<br>
checking for fortran intrinsic etime... found
<br>
checking for fortran intrinsic flush... found
<br>
checking for shl_load in -ldld... no
<br>
checking for shl_load... no
<br>
checking for shl_findsym... no
<br>
checking for dlopen in -ldl... yes
<br>
checking for dlopen... yes
<br>
checking for dlsym... yes
<br>
checking for dlerror... yes
<br>
checking for dlclose... yes
<br>
checking for mpi-directory... /usr/local/openmpi
<br>
checking for mpi-lib-directory... /usr/local/openmpi/lib
<br>
checking for mpi-inc-directory... /usr/local/openmpi/include
<br>
checking for MPI library... found mpi
<br>
checking for compilation of an MPI program... seems ok
<br>
checking for /usr/local/openmpi/include/mpif.h... yes
<br>
checking for mpf90... no
<br>
checking for mpxlf90... no
<br>
checking for sgemm_... no
<br>
checking for ATL_xerbla in -latlas... no
<br>
checking for sgemm_ in -lblas... yes
<br>
checking for dgemm_ in -ldgemm... no
<br>
checking for sgemm_ in -lcxml... no
<br>
checking for sgemm_ in -ldxml... no
<br>
checking for sgemm_ in -lscs... no
<br>
checking for sgemm_ in -lcomplib.sgimath... no
<br>
checking for sgemm_ in -lblas... (cached) yes
<br>
checking for sgemm_ in -lessl... no
<br>
checking for sgemm_ in -lessl... (cached) no
<br>
checking for sgemm_ in -lblas... (cached) yes
<br>
checking for cheev_... no
<br>
checking for cheev_ in -llapack... yes
<br>
checking for huti_d_gmres_ in -lhuti... yes
<br>
checking for eio_init_ in -leiof... yes
<br>
checking for dseupd_ in -larpack... yes
<br>
checking for pdneupd_ in -lparpack... no
<br>
configure: WARNING: No parallel arpack found.
<br>
checking for HYPRE_IJMatrixCreate in -lHYPRE... no
<br>
configure: WARNING: HYPRE not found, some functionaly will be disabled.
<br>
checking for umf4def_ in -lumfpack... yes
<br>
checking for mtc_init in -lmatc... yes
<br>
checking for main in -lm... yes
<br>
configure: error: The MPI version needs parpack. Disabling MPI.
<br>
peiying_at_saturn:~/elmer/elmer-5.4.0/fem-5.4.0&gt;   
<br>
<p><p>-------------------------------------
<br>
Pei-Ying Hsieh, Ph.D.
<br>
Staff Product Engineer 
<br>
Siemens Healthcare Diagnostics Inc.
<br>
511 Benedict Ave., MS 32
<br>
Tarrytown, NY 10591
<br>
USA
<br>
Phone: (914)524-3146
<br>
fax:   (914)524-2580
<br>
email: Pei-Ying.Hsieh_at_[hidden]
<br>
www.siemens.com/diagnostics
<br>
<p>----------------------------------------------------------------------------
<br>
This message and any included attachments are from Siemens Medical Solutions 
<br>
and are intended only for the addressee(s). 
<br>
The information contained herein may include trade secrets or privileged or 
<br>
otherwise confidential information. Unauthorized review, forwarding, printing, 
<br>
copying, distributing, or using such information is strictly prohibited and may 
<br>
be unlawful. If you received this message in error, or have reason to believe 
<br>
you are not authorized to receive it, please promptly delete this message and 
<br>
notify the sender by e-mail with a copy to Central.SecurityOffice_at_[hidden] 
<br>
<p>Thank you
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5024.php">Edgar Gabriel: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Previous message:</strong> <a href="5022.php">Jeff Squyres: "Re: [OMPI users] trouble building"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5024.php">Edgar Gabriel: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Reply:</strong> <a href="5024.php">Edgar Gabriel: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
<li><strong>Maybe reply:</strong> <a href="5027.php">Mark Kosmowski: "Re: [OMPI users] openMPI on 64 bit SUSE 10.2 OS"</a>
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
