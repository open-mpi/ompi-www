<?
$subject_val = "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 13:56:57 2009" -->
<!-- isoreceived="20090410175657" -->
<!-- sent="Fri, 10 Apr 2009 19:56:51 +0200" -->
<!-- isosent="20090410175651" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022" -->
<!-- id="b87c422a0904101056t738e5d8fv6ccebd05264cb699_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49DF790E.7000804_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 13:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>In reply to:</strong> <a href="8864.php">Gus Correa: "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8863.php">Mostyn Lewis: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel	10.1.022"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus:
<br>
Please see below while I go to study what Jeff suggested,
<br>
<p>On Fri, Apr 10, 2009 at 6:51 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Francesco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's concentrate on the Intel shared libraries problem for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The FAQ Jeff sent you summarizes what I told you before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to setup your Intel environment (on deb64) to work with mpirun.
</span><br>
<span class="quotelev1">&gt; You need to insert these commands on your .bashrc (most likely you use bash)
</span><br>
<span class="quotelev1">&gt; or .cshrc (if you use csh/tcsh) file.
</span><br>
<span class="quotelev1">&gt; These files sit on your home directory.
</span><br>
<span class="quotelev1">&gt; They are hidden files, to see them do &quot;ls -a&quot;.
</span><br>
<span class="quotelev1">&gt; Edit this file and insert these commands there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /path/to/your/intel/cce/bin/iccvars.sh
</span><br>
<span class="quotelev1">&gt; source /path/to/your/intel/cce/bin/ifortvars.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you do this?
</span><br>
<p>my .bashrc contained
<br>
<p>#For intel Fortran and C++ compilers
<br>
<p>. /opt/intel/fce/10.1.022/bin/ifortvars.sh
<br>
. /opt/intel/cce/10.1.022/bin/iccvars.sh
<br>
<p>echo $LD_LIBRARY_PATH
<br>
/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib:/usr/local/lib
<br>
<p>Because I understand that I am messing something, I saved a copy of
<br>
the original .bashrc and replaced the dot with &quot;source&quot;. Of course,
<br>
everything came out as above,
<br>
<p>I sincerely apologize to bother the list.
<br>
<p>francesco
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This Intel environment **cannot** be setup on the
</span><br>
<span class="quotelev1">&gt; shell command prompt **only**,
</span><br>
<span class="quotelev1">&gt; otherwise it will **only work for your interactive session**,
</span><br>
<span class="quotelev1">&gt; but **not** for mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edit your .bashrc file, and try to run connectivity_c again.
</span><br>
<span class="quotelev1">&gt; We can talk about Amber after you get the Intel shared libraries problem
</span><br>
<span class="quotelev1">&gt; behind you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (OK, I was about to say you forgot deb64 after -host,
</span><br>
<span class="quotelev1">&gt; but you sent the fix below.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, the first line of the ouput below (copied manually) should be rad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/mpirun -host deb64 -n 4 connectivity_c 2&gt;&amp;1 | tee
</span><br>
<span class="quotelev2">&gt;&gt; connectivity.ou
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Francesco Pietra &lt;chiendarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, Apr 10, 2009 at 6:16 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] shared libraries issue compiling 1.3.1/intel
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.022
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you feel that the observations below are not relevant to openmpi,
</span><br>
<span class="quotelev2">&gt;&gt; please disregard the message. You have already kindly devoted so much
</span><br>
<span class="quotelev2">&gt;&gt; time to my problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;limits.h&quot; issue is solved with 10.1.022 intel compilers: as I
</span><br>
<span class="quotelev2">&gt;&gt; felt, the problem was with the pre-10.1.021 version of the intel C++
</span><br>
<span class="quotelev2">&gt;&gt; and ifort compilers, a subtle bug observed also by gentoo people (web
</span><br>
<span class="quotelev2">&gt;&gt; intel). There remains an orted issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The openmpi 1.3.1 installation was able to compile connectivity_c.c
</span><br>
<span class="quotelev2">&gt;&gt; and hello_c.c, though, running mpirun (output below between ===):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/mpirun -host deb64 (see above) -n 4 connectivity_c 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; | tee connectivity.out
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/bin/orted: error while loading shared libraries: libimf.so:
</span><br>
<span class="quotelev2">&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 8472) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt; =============
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point, Amber10 serial compiled nicely (all intel, like
</span><br>
<span class="quotelev2">&gt;&gt; openmpi), but parallel compilation, as expected, returned the same
</span><br>
<span class="quotelev2">&gt;&gt; problem above:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================
</span><br>
<span class="quotelev2">&gt;&gt; export TESTsander=/usr/local/amber10/exe/sander.MPI; make
</span><br>
<span class="quotelev2">&gt;&gt; test.sander.BASIC
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/usr/local/amber10/test'
</span><br>
<span class="quotelev2">&gt;&gt; cd cytosine &amp;&amp; ./Run.cytosine
</span><br>
<span class="quotelev2">&gt;&gt; orted: error while loading shared libraries: libimf.so: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 8371) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;./Run.cytosine: &#194;&#160;Program error
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [test.sander.BASIC] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/usr/local/amber10/test'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [test.sander.BASIC.MPI] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; =====================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Relevant info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The daemon was not ssh (thus my hypothesis that a firewall on the
</span><br>
<span class="quotelev2">&gt;&gt; router was killing ssh is not the case). During these procedures,
</span><br>
<span class="quotelev2">&gt;&gt; there were only deb64 and deb32 on the local network. On monoprocessor
</span><br>
<span class="quotelev2">&gt;&gt; deb32 (i386) there is nothing of openmpi or amber. Only ssh. Thus, my
</span><br>
<span class="quotelev2">&gt;&gt; .bashrc on deb32 can't correspond to that of deb 64 as far as
</span><br>
<span class="quotelev2">&gt;&gt; libraries are concerned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1..022/lib:/opt/intel/fce/10.1.022/lib:/usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev2">&gt;&gt; intel-iforte101022: /opt/intel/fce/10.1.022/lib/libimf.so
</span><br>
<span class="quotelev2">&gt;&gt; intel-icce101022: /opt/intel/cce/10.1.022/lib/libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i.e., libimf.so is on the unix path, still not found by mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Before compiling I trie to carefully check all env variables and
</span><br>
<span class="quotelev2">&gt;&gt; paths. In particular, as to mpi:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -show /opt/intel/fce/10.1.022//bin/ifort -I/usr/local/include
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -I/usr/local/lib -L/usr/local/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; francesco
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 9, 2009 at 9:29 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Francesco
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Francesco Pietra wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As failure to find &quot;limits.h&quot; in my attempted compilations of Amber of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; th fast few days (amd64 lenny, openmpi 1.3.1, intel compilers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10.1.015) is probably (or I hope so) a bug of the version used of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intel compilers (I made with debian the same observations reported
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for gentoo,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/">http://software.intel.com/en-us/forums/intel-c-compiler/topic/59886/</a>).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I made a deb package of 10.1.022, icc and ifort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure CC icc, CXX icp,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Intel C++ compiler is called icpc, not icp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a typo on your message, or on the actual configure options?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F77 and FC ifort --with-libnuma=/usr (not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib so that the numa.h issue is not raised), &quot;make clean&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you really did &quot;make clean&quot; you may have removed useful things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What did you do, &quot;make&quot; or &quot;make clean&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;mak install&quot; gave no error signals. However, the compilation tests in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the examples did not pass and I really don't understand why.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which compilation tests you are talking about?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From Amber or from the OpenMPI example programs (connectivity_c and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_c), or both?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The error, with both connectivity_c and hello_c (I was operating on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the parallel computer deb64 directly and have access to everything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there) was failure to find a shared library, libimf.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To get the right Intel environment,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you need to put these commands inside your login files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (.bashrc or .cshrc), to setup the Intel environment variables correctly:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source /path/to/your/intel/cce/bin/iccvars.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source /path/to/your/intel/cce/bin/ifortvars.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and perhaps a similar one for mkl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I don't use MKL, I don't know much about it).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If your home directory is NFS mounted to all the computers you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use to run parallel programs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then the same .bashrc/.csrhc will work on all computers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if you have a separate home directory on each computer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then you need to do this on each of them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., you have to include the &quot;source&quot; commands above
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the .bashrc/.cshrc files on your home directory in EACH computer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also I presume you use bash/sh not tcsh/csh, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Otherwise you need to source iccvars.csh instead of iccvars.sh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # dpkg --search libimf.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160;/opt/intel/fce/10.1.022/lib/libimf.so &#194;&#160;(the same for cce)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which path seems to be correctly sourced by iccvars.sh and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ifortvars.sh (incidentally, both files are -rw-r--r-- root root;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct that non executable?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The permissions here are not a problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are supposed to *source* the files, not to execute them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you execute them instead of sourcing the files,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your Intel environment will *NOT* be setup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW, the easy way to check your environment is to type &quot;env&quot; on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell command prompt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returned, inter alia,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/mkl/10.1.2.024/lib/em64t:/opt/intel/cce/10.1.022/lib:/opt/intel/fce/10.1.022/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (why twice the mkl?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hard to tell in which computer you were when you did this,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and hence what it should affect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You man have sourced twice the mkl shell that sets up the MKL environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables, which would write its library path more than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; once.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the environment variables get this much confused,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with duplicate paths and so on, you may want to logout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and login again, to start fresh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you need MKL for Amber?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you don't use it, keep things simple, and don't bother about it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I surely miss to understand something fundamental. Hope other eyes see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; better
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody helped you run the hello_c program successfully.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try to repeat carefully the same steps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should get the same result,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OpenMPI test programs should run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A kind person elsewhere suggested me on passing &quot;The use of -rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; during linking is highly recommended as opposed to setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH at run time, not the least because it hardcodes the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paths to the &quot;right&quot; library files in the executables themselves&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should this be relevant to the present issue, where to learn about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -rpath linking?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are talking about Amber,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you would have to tweak the Makefiles to tweak the linker -rpath.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And we don't know much about Amber's Makefiles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so this may be a very tricky approach.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are talking about the OpenMPI test programs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think it is just a matter of setting the Intel environment variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right, sourcing the ifortvars.sh iccvars.sh properly,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to get the right runtime LD_LIBRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; francesco pietra
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8868.php">Jeff Squyres: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>Previous message:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>In reply to:</strong> <a href="8864.php">Gus Correa: "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8863.php">Mostyn Lewis: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel	10.1.022"</a>
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
