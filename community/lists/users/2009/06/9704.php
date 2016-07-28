<?
$subject_val = "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 19:19:26 2009" -->
<!-- isoreceived="20090624231926" -->
<!-- sent="Wed, 24 Jun 2009 19:19:14 -0400" -->
<!-- isosent="20090624231914" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband" -->
<!-- id="4A42B472.6010306_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1245880669.4929.9.camel_at_master.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 19:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9705.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jim, list
<br>
<p>1) libnuma (non-uniform memory access, IIRR) is important if
<br>
you have AMD Opteron (our case here),
<br>
for processor and memory affinity, etc.
<br>
I suppose you don't need it with Intel Xeon (pre-Nehalem, at least),
<br>
but I am not positive about this (we don't have a Xeon cluster here).
<br>
<p>2) tm is the Torque resource manager.
<br>
If you don't use Torque/PBS you don't have it, you don't need it.
<br>
Noam for instance uses sge, and configured with --use-sge.
<br>
If you just launch mpiexec directly you don't need
<br>
to build OpenMPI with any resource manager library or support.
<br>
(But resource managers are great!)
<br>
<p>3) It may be that --enable-static puts the wrapper flags you don't have.
<br>
I don't know.  The OpenMPI developers may clarify this.
<br>
<p>4) AFAIK, you need OFED on all nodes, at least on those
<br>
that have IB hardware, that are connected to your IB switch,
<br>
where you want to run MPI programs using IB.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Jim Kress ORG wrote:
<br>
<span class="quotelev1">&gt; Well, the whole situation is really bizarre.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just uninstalled openmpi 1.3.2 on my system.  Then I installed OFED
</span><br>
<span class="quotelev1">&gt; 1.4.1 to see if that resolves this situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_master ~]# ompi_info --config
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Jun 24 11:10:00 EDT 2009
</span><br>
<span class="quotelev1">&gt;           Configure host: master.org
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed Jun 24 11:13:22 EDT 2009
</span><br>
<span class="quotelev1">&gt;               Built host: master.org
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 1
</span><br>
<span class="quotelev1">&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer16: no
</span><br>
<span class="quotelev1">&gt;          Fort have real4: yes
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;         Fort have real16: no
</span><br>
<span class="quotelev1">&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev1">&gt;      Fort have complex32: no
</span><br>
<span class="quotelev1">&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev1">&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev1">&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort cplx32 align: -1
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;            Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -DNDEBUG -O2 -g -pipe -Wall
</span><br>
<span class="quotelev1">&gt; -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;                           -fexceptions -fstack-protector
</span><br>
<span class="quotelev1">&gt;                           --param=ssp-buffer-size=4 -m64 -mtune=generic
</span><br>
<span class="quotelev1">&gt;                           -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -pthread
</span><br>
<span class="quotelev1">&gt;                           -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -DNDEBUG -O2 -g -pipe -Wall
</span><br>
<span class="quotelev1">&gt; -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;                           -fexceptions -fstack-protector
</span><br>
<span class="quotelev1">&gt;                           --param=ssp-buffer-size=4 -m64 -mtune=generic
</span><br>
<span class="quotelev1">&gt;                           -finline-functions -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS: -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;                           -fexceptions -fstack-protector
</span><br>
<span class="quotelev1">&gt;                           --param=ssp-buffer-size=4 -m64 -mtune=generic
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt;                           -fexceptions -fstack-protector
</span><br>
<span class="quotelev1">&gt;                           --param=ssp-buffer-size=4 -m64 -mtune=generic
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS: -pthread 
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:     
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; -ldl 
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;    Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;          MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;        MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;    FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt; [root_at_master ~]# 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so you see, even the OFED 1.4.1 installation fails to put -libverbs etc
</span><br>
<span class="quotelev1">&gt; into openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I think its
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that is putting the -libverbs into your openmpi.  I'll try it and see
</span><br>
<span class="quotelev1">&gt; what happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are libnuma and tm?  Do I need to worry about them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, I have forgotton what I do with all the RPMs OFED generates.
</span><br>
<span class="quotelev1">&gt; Do I install them all on my compute nodes or just a subset?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2009-06-24 at 17:22 -0400, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jim Kress wrote:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Noam, Gus and List,
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Did you statically link your openmpi when you built it?  If you did (the
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; default is NOT to do this) then that could explain the discrepancy.
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; Jim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, I didn't link statically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you link statically?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I tried to do it, and it didn't work.
</span><br>
<span class="quotelev2">&gt;&gt; I wouldn't get OpenMPI with IB if I tried to
</span><br>
<span class="quotelev2">&gt;&gt; link statically (i.e. by passing -static or equivalent to CFLAGS, 
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS, etc).
</span><br>
<span class="quotelev2">&gt;&gt; When I removed the &quot;-static&quot; I got OpenMPI with IB.
</span><br>
<span class="quotelev2">&gt;&gt; I always dump the configure output (and the make output, etc) to
</span><br>
<span class="quotelev2">&gt;&gt; log files to check these things out after it is done.
</span><br>
<span class="quotelev2">&gt;&gt; I really suggest you do this, it pays off, saves time, costs nothing.
</span><br>
<span class="quotelev2">&gt;&gt; I don't remember exactly what symptoms I found on the log,
</span><br>
<span class="quotelev2">&gt;&gt; whether the log definitely said that there was no IB support,
</span><br>
<span class="quotelev2">&gt;&gt; or if it didn't have the right flags (-libverbs, etc) like yours.
</span><br>
<span class="quotelev2">&gt;&gt; However, when I suppressed the &quot;-static&quot; from the compiler flags
</span><br>
<span class="quotelev2">&gt;&gt; then I've got all the IB goodies!  :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is how I run configure (CFLAGS etc only have optimization flags,
</span><br>
<span class="quotelev2">&gt;&gt; no &quot;-static&quot;):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/my/directory \
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt; 2&gt;&amp;1 configure.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, &quot;--enable-static&quot; means OpenMPI will build static libraries 
</span><br>
<span class="quotelev2">&gt;&gt; (besides the shared ones).
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI is not being linked statically to system libraries,
</span><br>
<span class="quotelev2">&gt;&gt; or to IB libraries, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some switches may not be needed,
</span><br>
<span class="quotelev2">&gt;&gt; in particularly the explicit use of /usr directory.
</span><br>
<span class="quotelev2">&gt;&gt; However, at some point the OpenMPI configure
</span><br>
<span class="quotelev2">&gt;&gt; would not work without being
</span><br>
<span class="quotelev2">&gt;&gt; told this (at least for libnuma).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I didn't claim your OpenMPI doesn't have IB support.
</span><br>
<span class="quotelev2">&gt;&gt; Not a categorical syllogism like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;you don't have the -libverbs flag, hence you don't have IB&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; It is hard to make definitive statements like this
</span><br>
<span class="quotelev2">&gt;&gt; in a complex environment like this (OpenMPI build, parallel programs),
</span><br>
<span class="quotelev2">&gt;&gt; and with limited information via email.
</span><br>
<span class="quotelev2">&gt;&gt; After all, the list is peer reviewed! :)
</span><br>
<span class="quotelev2">&gt;&gt; Hence, I only guessed, as I usually do in these exchanges.
</span><br>
<span class="quotelev2">&gt;&gt; However, considering all the trouble you've been through, who knows,
</span><br>
<span class="quotelev2">&gt;&gt; maybe it was a guess in the right direction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if there may still be a glitch in the OpenMPI configure
</span><br>
<span class="quotelev2">&gt;&gt; script, on how it searches for and uses libraries like IB, NUMA, etc,
</span><br>
<span class="quotelev2">&gt;&gt; which may be causing the problem.
</span><br>
<span class="quotelev2">&gt;&gt; Jeff:  Is this possible?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In any case, we have different &quot;Wrapper extra LIBS&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; I have -lrdmacm -libverbs, you and Noam don't have them.
</span><br>
<span class="quotelev2">&gt;&gt; (Noam: I am not saying you don't have IB support!  :))
</span><br>
<span class="quotelev2">&gt;&gt; My configure explicitly asks for ib support, Noam's (and maybe yours) 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't.
</span><br>
<span class="quotelev2">&gt;&gt; Somehow, slight differences in how one invokes
</span><br>
<span class="quotelev2">&gt;&gt; the configure script seems to produce different results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, June 24, 2009 9:38 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] 50% performance reduction due to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of using Infiniband
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 23, 2009, at 6:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jim, list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On my OpenMPI 1.3.2 ompi_info -config gives:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -lnuma -ldl -Wl,-- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yours doesn't seem to have the IB libraries: -lrdmacm -libverbs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, I would guess your OpenMPI 1.3.2 build doesn't have IB support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The second of these statements doesn't follow from the first.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My &quot;ompi_info -config&quot; returns
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info -config | grep LIBS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lnsl -lutil - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lm -ldl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But it does have openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   MCA btl: openib (MCA v2.0, API v2.0, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.3.2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and osu_bibw returns
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # OSU MPI Bi-Directional Bandwidth Test v3.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4194304                1717.43
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which it's sure not getting over ethernet.  I think Jeff 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Squyres' test (ompi_info | grep openib) must be more definitive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 								
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		Noam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9705.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9702.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
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
