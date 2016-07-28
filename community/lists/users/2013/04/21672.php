<?
$subject_val = "Re: [OMPI users] Segmentation fault with HPCC benchmark";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 15:24:09 2013" -->
<!-- isoreceived="20130403192409" -->
<!-- sent="Wed, 03 Apr 2013 15:24:04 -0400" -->
<!-- isosent="20130403192404" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with HPCC benchmark" -->
<!-- id="515C81D4.8080200_at_ldeo.columbia.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AC540D4B-3400-4AE9-8836-5DB63965C5AE_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-04-03 15:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21673.php">Ed Blosch: "[OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Previous message:</strong> <a href="21671.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21703.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21703.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reza
<br>
<p>It is hard to guess with little information.
<br>
Other things you could check:
<br>
<p>1) Are you allowed to increase the stack size (say,
<br>
by the sys admin in limits.conf)?
<br>
If using a job queue system,
<br>
does it limit the stack size somehow?
<br>
<p>2) If you can compile and
<br>
run the Open MPI examples (hello_c.c, ring_c.c, connectivity_c.c),
<br>
then it is unlikely that the problem is with Open MPI.
<br>
This is kind of a first line of defense to diagnose this type
<br>
of problem and the health of your Open MPI installation.
<br>
<p>Your error message says &quot;Connection reset by peer&quot;, so
<br>
I wonder if there is any firewall or other network roadblock
<br>
or configuration issue.  Worth testing Open MPI
<br>
with simpler MPI programs,
<br>
and even (for network setup) with shell commands like &quot;hostname&quot;.
<br>
<p>3) Make sure there is no mixup of MPI implementations (e.g. MPICH
<br>
and Open MPI) or versions, both for mpicc and mpiexec.
<br>
Make sure the LD_LIBRARY_PATH is pointing to the right OpenMPI
<br>
lib location (and to the right BLAS/LAPACK location, for that matter).
<br>
<p>4) No mixup of architectures either (32 vs 64 bit).
<br>
I wonder why your Open MPI library is installed in
<br>
/usr/lib/openmpi not /usr/lib64,
<br>
but your HPL ARCH = intel64 and everything else seems to be x86_64.
<br>
If you apt-get an Open MPI package, check if it is
<br>
i386 or x86_64.
<br>
(It may be simpler to download and install
<br>
the Open MPI tarball in /usr/local or in your home directory.)
<br>
<p>5) Check if you are using a threaded or OpenMP enabled
<br>
BLAS/Lapack library or a number of threads greater than 1.
<br>
<p>6) Is the problem size (N) in your HPL.dat parameter file
<br>
consistent with the physical memory available?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 04/03/2013 02:32 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I agree with Gus - check your stack size. This isn't occurring in OMPI
</span><br>
<span class="quotelev1">&gt; itself, so I suspect it is in the system setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 3, 2013, at 10:17 AM, Reza Bakhshayeshi &lt;reza.b2008_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:reza.b2008_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your answers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; Do you mean what error I receive?
</span><br>
<span class="quotelev2">&gt;&gt; It's the output when I'm running the program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at address: 0x1b7f000
</span><br>
<span class="quotelev2">&gt;&gt; [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6a84b524a0]
</span><br>
<span class="quotelev2">&gt;&gt; [ 1] hpcc(HPCC_Power2NodesMPIRandomAccessCheck+0xa04) [0x423834]
</span><br>
<span class="quotelev2">&gt;&gt; [ 2] hpcc(HPCC_MPIRandomAccess+0x87a) [0x41e43a]
</span><br>
<span class="quotelev2">&gt;&gt; [ 3] hpcc(main+0xfbf) [0x40a1bf]
</span><br>
<span class="quotelev2">&gt;&gt; [ 4] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev2">&gt;&gt; [0x7f6a84b3d76d]
</span><br>
<span class="quotelev2">&gt;&gt; [ 5] hpcc() [0x40aafd]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [
</span><br>
<span class="quotelev2">&gt;&gt; ][[53938,1],0][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 4164 on node 192.168.100.6
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Gus Correa:
</span><br>
<span class="quotelev2">&gt;&gt; I did it both on server and on instances but it didn't solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3 April 2013 19:14, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Reza
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Check the system stacksize first ('limit stacksize' or 'ulimit -s').
</span><br>
<span class="quotelev2">&gt;&gt;     If it is small, you can try to increase it
</span><br>
<span class="quotelev2">&gt;&gt;     before you run the program.
</span><br>
<span class="quotelev2">&gt;&gt;     Say (tcsh):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     limit stacksize unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     or (bash):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ulimit -s unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;     Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 04/03/2013 10:29 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Could you perhaps share the stacktrace from the segfault? It's
</span><br>
<span class="quotelev2">&gt;&gt;         impossible to advise you on the problem without seeing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Apr 3, 2013, at 5:28 AM, Reza Bakhshayeshi
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;reza.b2008_at_[hidden] &lt;mailto:reza.b2008_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:reza.b2008_at_[hidden] &lt;mailto:reza.b2008_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &#226;&#128;&#139;Hi
</span><br>
<span class="quotelev2">&gt;&gt;             &#226;&#128;&#139;&#226;&#128;&#139;I have installed HPCC benchmark suite and openmpi on a
</span><br>
<span class="quotelev2">&gt;&gt;             private cloud
</span><br>
<span class="quotelev2">&gt;&gt;             instances.
</span><br>
<span class="quotelev2">&gt;&gt;             Unfortunately I get Segmentation fault error mostly when I
</span><br>
<span class="quotelev2">&gt;&gt;             want to run
</span><br>
<span class="quotelev2">&gt;&gt;             it simultaneously on two or more instances with:
</span><br>
<span class="quotelev2">&gt;&gt;             mpirun -np 2 --hostfile ./myhosts hpcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Everything is on Ubuntu server 12.04 (updated)
</span><br>
<span class="quotelev2">&gt;&gt;             and this is my make.intel64 file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             shell
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__--
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             SHELL = /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             CD = cd
</span><br>
<span class="quotelev2">&gt;&gt;             CP = cp
</span><br>
<span class="quotelev2">&gt;&gt;             LN_S = ln -s
</span><br>
<span class="quotelev2">&gt;&gt;             MKDIR = mkdir
</span><br>
<span class="quotelev2">&gt;&gt;             RM = /bin/rm -f
</span><br>
<span class="quotelev2">&gt;&gt;             TOUCH = touch
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - Platform identifier
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ARCH = intel64
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - HPL Directory Structure / HPL library
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             TOPdir = ../../..
</span><br>
<span class="quotelev2">&gt;&gt;             INCdir = $(TOPdir)/include
</span><br>
<span class="quotelev2">&gt;&gt;             BINdir = $(TOPdir)/bin/$(ARCH)
</span><br>
<span class="quotelev2">&gt;&gt;             LIBdir = $(TOPdir)/lib/$(ARCH)
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             HPLlib = $(LIBdir)/libhpl.a
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - Message Passing library (MPI)
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__--------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # MPinc tells the C compiler where to find the Message
</span><br>
<span class="quotelev2">&gt;&gt;             Passing library
</span><br>
<span class="quotelev2">&gt;&gt;             # header files, MPlib is defined to be the name of the
</span><br>
<span class="quotelev2">&gt;&gt;             library to be
</span><br>
<span class="quotelev2">&gt;&gt;             # used. The variable MPdir is only used for defining MPinc
</span><br>
<span class="quotelev2">&gt;&gt;             and MPlib.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             MPdir = /usr/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;             MPinc = -I$(MPdir)/include
</span><br>
<span class="quotelev2">&gt;&gt;             MPlib = $(MPdir)/lib/libmpi.so
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - Linear Algebra library (BLAS or VSIPL)
</span><br>
<span class="quotelev2">&gt;&gt;             -----------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # LAinc tells the C compiler where to find the Linear
</span><br>
<span class="quotelev2">&gt;&gt;             Algebra library
</span><br>
<span class="quotelev2">&gt;&gt;             # header files, LAlib is defined to be the name of the
</span><br>
<span class="quotelev2">&gt;&gt;             library to be
</span><br>
<span class="quotelev2">&gt;&gt;             # used. The variable LAdir is only used for defining LAinc
</span><br>
<span class="quotelev2">&gt;&gt;             and LAlib.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             LAdir = /usr/local/ATLAS/obj64
</span><br>
<span class="quotelev2">&gt;&gt;             LAinc = -I$(LAdir)/include
</span><br>
<span class="quotelev2">&gt;&gt;             LAlib = $(LAdir)/lib/libcblas.a $(LAdir)/lib/libatlas.a
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - F77 / C interface
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__--------------------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # You can skip this section if and only if you are not
</span><br>
<span class="quotelev2">&gt;&gt;             planning to use
</span><br>
<span class="quotelev2">&gt;&gt;             # a BLAS library featuring a Fortran 77 interface.
</span><br>
<span class="quotelev2">&gt;&gt;             Otherwise, it is
</span><br>
<span class="quotelev2">&gt;&gt;             # necessary to fill out the F2CDEFS variable with the
</span><br>
<span class="quotelev2">&gt;&gt;             appropriate
</span><br>
<span class="quotelev2">&gt;&gt;             # options. **One and only one** option should be chosen in
</span><br>
<span class="quotelev2">&gt;&gt;             **each** of
</span><br>
<span class="quotelev2">&gt;&gt;             # the 3 following categories:
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # 1) name space (How C calls a Fortran 77 routine)
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # -DAdd_ : all lower case and a suffixed underscore (Suns,
</span><br>
<span class="quotelev2">&gt;&gt;             # Intel, ...), [default]
</span><br>
<span class="quotelev2">&gt;&gt;             # -DNoChange : all lower case (IBM RS6000),
</span><br>
<span class="quotelev2">&gt;&gt;             # -DUpCase : all upper case (Cray),
</span><br>
<span class="quotelev2">&gt;&gt;             # -DAdd__ : the FORTRAN compiler in use is f2c.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # 2) C and Fortran 77 integer mapping
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # -DF77_INTEGER=int : Fortran 77 INTEGER is a C int, [default]
</span><br>
<span class="quotelev2">&gt;&gt;             # -DF77_INTEGER=long : Fortran 77 INTEGER is a C long,
</span><br>
<span class="quotelev2">&gt;&gt;             # -DF77_INTEGER=short : Fortran 77 INTEGER is a C short.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # 3) Fortran 77 string handling
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # -DStringSunStyle : The string address is passed at the
</span><br>
<span class="quotelev2">&gt;&gt;             string loca-
</span><br>
<span class="quotelev2">&gt;&gt;             # tion on the stack, and the string length is then
</span><br>
<span class="quotelev2">&gt;&gt;             # passed as an F77_INTEGER after all explicit
</span><br>
<span class="quotelev2">&gt;&gt;             # stack arguments, [default]
</span><br>
<span class="quotelev2">&gt;&gt;             # -DStringStructPtr : The address of a structure is passed
</span><br>
<span class="quotelev2">&gt;&gt;             by a
</span><br>
<span class="quotelev2">&gt;&gt;             # Fortran 77 string, and the structure is of the
</span><br>
<span class="quotelev2">&gt;&gt;             # form: struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev2">&gt;&gt;             # -DStringStructVal : A structure is passed by value for
</span><br>
<span class="quotelev2">&gt;&gt;             each Fortran
</span><br>
<span class="quotelev2">&gt;&gt;             # 77 string, and the structure is of the form:
</span><br>
<span class="quotelev2">&gt;&gt;             # struct {char *cp; F77_INTEGER len;},
</span><br>
<span class="quotelev2">&gt;&gt;             # -DStringCrayStyle : Special option for Cray machines,
</span><br>
<span class="quotelev2">&gt;&gt;             which uses
</span><br>
<span class="quotelev2">&gt;&gt;             # Cray fcd (fortran character descriptor) for
</span><br>
<span class="quotelev2">&gt;&gt;             # interoperation.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             F2CDEFS =
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - HPL includes / libraries / specifics
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__-
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             HPL_INCLUDES = -I$(INCdir) -I$(INCdir)/$(ARCH) $(LAinc)
</span><br>
<span class="quotelev2">&gt;&gt;             $(MPinc)
</span><br>
<span class="quotelev2">&gt;&gt;             HPL_LIBS = $(HPLlib) $(LAlib) $(MPlib) -lm
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # - Compile time options
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__-----------------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # -DHPL_COPY_L force the copy of the panel L before bcast;
</span><br>
<span class="quotelev2">&gt;&gt;             # -DHPL_CALL_CBLAS call the cblas interface;
</span><br>
<span class="quotelev2">&gt;&gt;             # -DHPL_CALL_VSIPL call the vsip library;
</span><br>
<span class="quotelev2">&gt;&gt;             # -DHPL_DETAILED_TIMING enable detailed timers;
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # By default HPL will:
</span><br>
<span class="quotelev2">&gt;&gt;             # *) not copy L before broadcast,
</span><br>
<span class="quotelev2">&gt;&gt;             # *) call the BLAS Fortran 77 interface,
</span><br>
<span class="quotelev2">&gt;&gt;             # *) not display detailed timing information.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             HPL_OPTS = -DHPL_CALL_CBLAS
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             HPL_DEFS = $(F2CDEFS) $(HPL_OPTS) $(HPL_INCLUDES)
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             # - Compilers / linkers - Optimization flags
</span><br>
<span class="quotelev2">&gt;&gt;             ---------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             CC = /usr/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt;             CCNOOPT = $(HPL_DEFS)
</span><br>
<span class="quotelev2">&gt;&gt;             CCFLAGS = $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops
</span><br>
<span class="quotelev2">&gt;&gt;             #CCFLAGS = $(HPL_DEFS)
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             # On some platforms, it is necessary to use the Fortran
</span><br>
<span class="quotelev2">&gt;&gt;             linker to find
</span><br>
<span class="quotelev2">&gt;&gt;             # the Fortran internals used in the BLAS library.
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             LINKER = /usr/bin/mpif90
</span><br>
<span class="quotelev2">&gt;&gt;             LINKFLAGS = $(CCFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ARCHIVER = ar
</span><br>
<span class="quotelev2">&gt;&gt;             ARFLAGS = r
</span><br>
<span class="quotelev2">&gt;&gt;             RANLIB = echo
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             #
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------__------------------------------__----------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Would you mind please help me figure this problem out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Regards,
</span><br>
<span class="quotelev2">&gt;&gt;             Reza
</span><br>
<span class="quotelev2">&gt;&gt;             _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/users">http://www.open-mpi.org/__mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="21673.php">Ed Blosch: "[OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Previous message:</strong> <a href="21671.php">Ralph Castain: "Re: [OMPI users] memory per core/process"</a>
<li><strong>In reply to:</strong> <a href="21670.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21703.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<li><strong>Reply:</strong> <a href="21703.php">Reza Bakhshayeshi: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
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
