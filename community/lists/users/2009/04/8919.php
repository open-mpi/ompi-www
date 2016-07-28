<?
$subject_val = "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 15:11:22 2009" -->
<!-- isoreceived="20090414191122" -->
<!-- sent="Tue, 14 Apr 2009 13:11:12 -0600" -->
<!-- isosent="20090414191112" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022" -->
<!-- id="B59E6424-4F6B-4380-ACFB-17EB07FA642B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b87c422a0904141153k6116c348q9a394a6c7d325efc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 15:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8918.php">Jean-Michel Beuken: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8917.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The -x option only applies to your application processes - it is never  
<br>
applied to the OMPI processes such as the OMPI daemons (orteds). If  
<br>
you built OMPI with the Intel library, then trying to pass the path to  
<br>
libimf via -x will fail - your application processes will get that  
<br>
library path, but not the orted.
<br>
<p>A clearer error message has been added to 1.3.2.
<br>
<p>What you need to do here is add the path to your intel libraries to  
<br>
LD_LIBRARY_PATH in the .cshrc (or whatever shell you are using) on  
<br>
your compute nodes. Alternatively, if the libraries are in the same  
<br>
place on the node where mpirun is executed, you can simply set  
<br>
LD_LIBRARY_PATH in your .cshrc there and it will be propagated.
<br>
<p>Ralph
<br>
<p>On Apr 14, 2009, at 12:53 PM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; mpirun -x LD_LIBRARY_PATH -host tya64 connectivity_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; complained about libimf.so (not found), just the same as without &quot;-x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH&quot; (tried to give the full path to the PATH with same
</span><br>
<span class="quotelev1">&gt; error)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev1">&gt; /opt/intel/fce/10.1.022/lib/libimf.so
</span><br>
<span class="quotelev1">&gt; /opt/intel/fce/10.1.022/lib/libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All above on a tyan S2895 with opteron (debian amd64 lenny). On the
</span><br>
<span class="quotelev1">&gt; same motherboard and OS, a cross compilation gcc g++ ifort was
</span><br>
<span class="quotelev1">&gt; successful as to the connectivity (and hello) tests.
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a Supermicro 4-socket opteron (same OS) even the cross compilation
</span><br>
<span class="quotelev1">&gt; failed. In contrast, a gcc g** gfortran compilation was succesfull as
</span><br>
<span class="quotelev1">&gt; to the connectivity (and hello) tests, however gfortran is not capable
</span><br>
<span class="quotelev1">&gt; to compile the faster code of the suite I am interested in (Amber10).
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; I came across what follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;dynamic linkage is also a headache in that the mechanisms
</span><br>
<span class="quotelev1">&gt; used to find shared libraries during dynamic loading are not all  
</span><br>
<span class="quotelev1">&gt; that robust
</span><br>
<span class="quotelev1">&gt; on Linux systems running MPICH or other MPI packages
</span><br>
<span class="quotelev1">&gt; ....................  for the compilers that use compiler shared
</span><br>
<span class="quotelev1">&gt; libraries (ifort, pathscale), we use LD_LIBRARY_PATH during
</span><br>
<span class="quotelev1">&gt; configuration to set an -rpath
</span><br>
<span class="quotelev1">&gt; linkage option, which is reliably available in the executable.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that mean adding as a flag
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -rpath=LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when compiling both openmpi and amber? I can't find examples as to the
</span><br>
<span class="quotelev1">&gt; correct syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; francesco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 10, 2009 at 6:27 PM, Mostyn Lewis &lt;Mostyn.Lewis_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you want to find libimf.so, which is a shared INTEL library,
</span><br>
<span class="quotelev2">&gt;&gt; pass the library path with a -x on mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun .... -x LD_LIBRARY_PATH ....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 10 Apr 2009, Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gus:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you feel that the observations below are not relevant to openmpi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please disregard the message. You have already kindly devoted so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time to my problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;limits.h&quot; issue is solved with 10.1.022 intel compilers: as I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; felt, the problem was with the pre-10.1.021 version of the intel C++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and ifort compilers, a subtle bug observed also by gentoo people  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (web
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel). There remains an orted issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The openmpi 1.3.1 installation was able to compile connectivity_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and hello_c.c, though, running mpirun (output below between ===):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/mpirun -host -n 4 connectivity_c 2&gt;&amp;1 | tee
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connectivity.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/bin/orted: error while loading shared libraries:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libimf.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 8472) died unexpectedly with status 127 while  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this point, Amber10 serial compiled nicely (all intel, like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi), but parallel compilation, as expected, returned the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem above:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export TESTsander=/usr/local/amber10/exe/sander.MPI; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test.sander.BASIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/usr/local/amber10/test'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted: error while loading shared libraries: libimf.so: cannot open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 8371) died unexpectedly with status 127 while  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ./Run.cytosine:  Program error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [test.sander.BASIC] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/usr/local/amber10/test'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [test.sander.BASIC.MPI] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Relevant info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The daemon was not ssh (thus my hypothesis that a firewall on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; router was killing ssh is not the case). During these procedures,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there were only deb64 and deb32 on the local network. On  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; monoprocessor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deb32 (i386) there is nothing of openmpi or amber. Only ssh. Thus,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .bashrc on deb32 can't correspond to that of deb 64 as far as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries are concerned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1..022/lib:/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opt/intel/fce/10.1.022/lib:/usr/local/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel-iforte101022: /opt/intel/fce/10.1.022/lib/libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intel-icce101022: /opt/intel/cce/10.1.022/lib/libimf.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e., libimf.so is on the unix path, still not found by mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Before compiling I trie to carefully check all env variables and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paths. In particular, as to mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -show /opt/intel/fce/10.1.022//bin/ifort -I/usr/local/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -pthread -I/usr/local/lib -L/usr/local/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; francesco
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Apr 9, 2009 at 9:29 PM, Gus Correa &lt;gus_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Francesco
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As failure to find &quot;limits.h&quot; in my attempted compilations of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Amber of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; th fast few days (amd64 lenny, openmpi 1.3.1, intel compilers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.1.015) is probably (or I hope so) a bug of the version used of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; intel compilers (I made with debian the same observations reported
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for gentoo,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/</a>) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I made a deb package of 10.1.022, icc and ifort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure CC icc, CXX icp,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Intel C++ compiler is called icpc, not icp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this a typo on your message, or on the actual configure options?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; F77 and FC ifort --with-libnuma=/usr (not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib so that the numa.h issue is not raised), &quot;make clean&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you really did &quot;make clean&quot; you may have removed useful things.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What did you do, &quot;make&quot; or &quot;make clean&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;mak install&quot; gave no error signals. However, the compilation  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tests in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the examples did not pass and I really don't understand why.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which compilation tests you are talking about?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From Amber or from the OpenMPI example programs (connectivity_c and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hello_c), or both?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error, with both connectivity_c and hello_c (I was operating  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the parallel computer deb64 directly and have access to everything
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there) was failure to find a shared library, libimf.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To get the right Intel environment,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you need to put these commands inside your login files
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (.bashrc or .cshrc), to setup the Intel environment variables  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; source /path/to/your/intel/cce/bin/iccvars.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; source /path/to/your/intel/cce/bin/ifortvars.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and perhaps a similar one for mkl.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (I don't use MKL, I don't know much about it).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If your home directory is NFS mounted to all the computers you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use to run parallel programs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then the same .bashrc/.csrhc will work on all computers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, if you have a separate home directory on each computer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then you need to do this on each of them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I.e., you have to include the &quot;source&quot; commands above
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the .bashrc/.cshrc files on your home directory in EACH  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also I presume you use bash/sh not tcsh/csh, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Otherwise you need to source iccvars.csh instead of iccvars.sh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   /opt/intel/fce/10.1.022/lib/libimf.so  (the same for cce)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which path seems to be correctly sourced by iccvars.sh and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ifortvars.sh (incidentally, both files are -rw-r--r-- root root;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; correct that non executable?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The permissions here are not a problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You are supposed to *source* the files, not to execute them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you execute them instead of sourcing the files,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your Intel environment will *NOT* be setup.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BTW, the easy way to check your environment is to type &quot;env&quot; on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell command prompt.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; returned, inter alia,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/mkl/10.1.2.024/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (why twice the mkl?)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hard to tell in which computer you were when you did this,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and hence what it should affect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You man have sourced twice the mkl shell that sets up the MKL  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variables, which would write its library path more than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; once.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When the environment variables get this much confused,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with duplicate paths and so on, you may want to logout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and login again, to start fresh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you need MKL for Amber?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you don't use it, keep things simple, and don't bother about it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I surely miss to understand something fundamental. Hope other  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eyes see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; better
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody helped you run the hello_c program successfully.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try to repeat carefully the same steps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You should get the same result,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the OpenMPI test programs should run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A kind person elsewhere suggested me on passing &quot;The use of -rpath
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; during linking is highly recommended as opposed to setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH at run time, not the least because it hardcodes  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; paths to the &quot;right&quot; library files in the executables themselves&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Should this be relevant to the present issue, where to learn about
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -rpath linking?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are talking about Amber,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you would have to tweak the Makefiles to tweak the linker -rpath.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And we don't know much about Amber's Makefiles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so this may be a very tricky approach.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are talking about the OpenMPI test programs,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think it is just a matter of setting the Intel environment  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variables
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; right, sourcing the ifortvars.sh iccvars.sh properly,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to get the right runtime LD_LIBRARY_PATH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8920.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8918.php">Jean-Michel Beuken: "Re: [OMPI users] XLF and 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8917.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
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
