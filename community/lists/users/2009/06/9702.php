<?
$subject_val = "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 17:57:54 2009" -->
<!-- isoreceived="20090624215754" -->
<!-- sent="Wed, 24 Jun 2009 17:57:49 -0400" -->
<!-- isosent="20090624215749" -->
<!-- name="Jim Kress ORG" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband" -->
<!-- id="1245880669.4929.9.camel_at_master.org" -->
<!-- inreplyto="4A429930.60109_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband<br>
<strong>From:</strong> Jim Kress ORG (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 17:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9701.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9701.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9704.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9704.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, the whole situation is really bizarre.
<br>
<p>I just uninstalled openmpi 1.3.2 on my system.  Then I installed OFED
<br>
1.4.1 to see if that resolves this situation.
<br>
<p>Here's what I get:
<br>
<p>[root_at_master ~]# ompi_info --config
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Wed Jun 24 11:10:00 EDT 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: master.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Wed Jun 24 11:13:22 EDT 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: master.org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C char size: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bool size: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C short size: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C int size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C long size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C float size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C double size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C pointer size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C char align: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bool align: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C int align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C float align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C double align: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort logical size: 4
<br>
&nbsp;Fort logical value true: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer1: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer2: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer4: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer16: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real4: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real16: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have complex8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have complex16: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have complex32: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer1 size: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer2 size: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer16 size: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real4 size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real16 size: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx16 size: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx32 size: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer1 align: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer2 align: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 align: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fort integer16 align: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real4 align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 align: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real16 align: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx8 align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx16 align: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx32 align: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build CFLAGS: -DNDEBUG -O2 -g -pipe -Wall
<br>
-Wp,-D_FORTIFY_SOURCE=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fexceptions -fstack-protector
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--param=ssp-buffer-size=4 -m64 -mtune=generic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-finline-functions -fno-strict-aliasing
<br>
-pthread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fvisibility=hidden
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build CXXFLAGS: -DNDEBUG -O2 -g -pipe -Wall
<br>
-Wp,-D_FORTIFY_SOURCE=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fexceptions -fstack-protector
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--param=ssp-buffer-size=4 -m64 -mtune=generic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-finline-functions -pthread
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build FFLAGS: -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fexceptions -fstack-protector
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--param=ssp-buffer-size=4 -m64 -mtune=generic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build FCFLAGS: -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-fexceptions -fstack-protector
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--param=ssp-buffer-size=4 -m64 -mtune=generic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LDFLAGS: -export-dynamic  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Build LIBS: -lnsl -lutil  -lm 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra CFLAGS: -pthread 
<br>
&nbsp;&nbsp;Wrapper extra CXXFLAGS: -pthread 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra FFLAGS: -pthread 
<br>
&nbsp;&nbsp;&nbsp;Wrapper extra FCFLAGS: -pthread 
<br>
&nbsp;&nbsp;&nbsp;Wrapper extra LDFLAGS:     
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil -lm
<br>
-ldl 
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
[root_at_master ~]# 
<br>
<p>so you see, even the OFED 1.4.1 installation fails to put -libverbs etc
<br>
into openmpi.
<br>
<p>Also, I think its
<br>
<p>--enable-static
<br>
<p>that is putting the -libverbs into your openmpi.  I'll try it and see
<br>
what happens.
<br>
<p>What are libnuma and tm?  Do I need to worry about them?
<br>
<p>Finally, I have forgotton what I do with all the RPMs OFED generates.
<br>
Do I install them all on my compute nodes or just a subset?
<br>
<p>Thanks for the help.
<br>
<p>Jim
<br>
<p><p>On Wed, 2009-06-24 at 17:22 -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim Kress wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Noam, Gus and List,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Did you statically link your openmpi when you built it?  If you did (the
</span><br>
<span class="quotelev2">&gt;  &gt; default is NOT to do this) then that could explain the discrepancy.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, I didn't link statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you link statically?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I tried to do it, and it didn't work.
</span><br>
<span class="quotelev1">&gt; I wouldn't get OpenMPI with IB if I tried to
</span><br>
<span class="quotelev1">&gt; link statically (i.e. by passing -static or equivalent to CFLAGS, 
</span><br>
<span class="quotelev1">&gt; FFLAGS, etc).
</span><br>
<span class="quotelev1">&gt; When I removed the &quot;-static&quot; I got OpenMPI with IB.
</span><br>
<span class="quotelev1">&gt; I always dump the configure output (and the make output, etc) to
</span><br>
<span class="quotelev1">&gt; log files to check these things out after it is done.
</span><br>
<span class="quotelev1">&gt; I really suggest you do this, it pays off, saves time, costs nothing.
</span><br>
<span class="quotelev1">&gt; I don't remember exactly what symptoms I found on the log,
</span><br>
<span class="quotelev1">&gt; whether the log definitely said that there was no IB support,
</span><br>
<span class="quotelev1">&gt; or if it didn't have the right flags (-libverbs, etc) like yours.
</span><br>
<span class="quotelev1">&gt; However, when I suppressed the &quot;-static&quot; from the compiler flags
</span><br>
<span class="quotelev1">&gt; then I've got all the IB goodies!  :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is how I run configure (CFLAGS etc only have optimization flags,
</span><br>
<span class="quotelev1">&gt; no &quot;-static&quot;):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --prefix=/my/directory \
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt; --enable-static \
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1 configure.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, &quot;--enable-static&quot; means OpenMPI will build static libraries 
</span><br>
<span class="quotelev1">&gt; (besides the shared ones).
</span><br>
<span class="quotelev1">&gt; OpenMPI is not being linked statically to system libraries,
</span><br>
<span class="quotelev1">&gt; or to IB libraries, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some switches may not be needed,
</span><br>
<span class="quotelev1">&gt; in particularly the explicit use of /usr directory.
</span><br>
<span class="quotelev1">&gt; However, at some point the OpenMPI configure
</span><br>
<span class="quotelev1">&gt; would not work without being
</span><br>
<span class="quotelev1">&gt; told this (at least for libnuma).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I didn't claim your OpenMPI doesn't have IB support.
</span><br>
<span class="quotelev1">&gt; Not a categorical syllogism like
</span><br>
<span class="quotelev1">&gt; &quot;you don't have the -libverbs flag, hence you don't have IB&quot;.
</span><br>
<span class="quotelev1">&gt; It is hard to make definitive statements like this
</span><br>
<span class="quotelev1">&gt; in a complex environment like this (OpenMPI build, parallel programs),
</span><br>
<span class="quotelev1">&gt; and with limited information via email.
</span><br>
<span class="quotelev1">&gt; After all, the list is peer reviewed! :)
</span><br>
<span class="quotelev1">&gt; Hence, I only guessed, as I usually do in these exchanges.
</span><br>
<span class="quotelev1">&gt; However, considering all the trouble you've been through, who knows,
</span><br>
<span class="quotelev1">&gt; maybe it was a guess in the right direction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if there may still be a glitch in the OpenMPI configure
</span><br>
<span class="quotelev1">&gt; script, on how it searches for and uses libraries like IB, NUMA, etc,
</span><br>
<span class="quotelev1">&gt; which may be causing the problem.
</span><br>
<span class="quotelev1">&gt; Jeff:  Is this possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any case, we have different &quot;Wrapper extra LIBS&quot;.
</span><br>
<span class="quotelev1">&gt; I have -lrdmacm -libverbs, you and Noam don't have them.
</span><br>
<span class="quotelev1">&gt; (Noam: I am not saying you don't have IB support!  :))
</span><br>
<span class="quotelev1">&gt; My configure explicitly asks for ib support, Noam's (and maybe yours) 
</span><br>
<span class="quotelev1">&gt; doesn't.
</span><br>
<span class="quotelev1">&gt; Somehow, slight differences in how one invokes
</span><br>
<span class="quotelev1">&gt; the configure script seems to produce different results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Noam Bernstein
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, June 24, 2009 9:38 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] 50% performance reduction due to 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI v 1.3.2forcing all MPI traffic over Ethernet instead 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of using Infiniband
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 23, 2009, at 6:19 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Jim, list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On my OpenMPI 1.3.2 ompi_info -config gives:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Wrapper extra LIBS: -lrdmacm -libverbs -ltorque -lnuma -ldl -Wl,-- 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yours doesn't seem to have the IB libraries: -lrdmacm -libverbs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So, I would guess your OpenMPI 1.3.2 build doesn't have IB support.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The second of these statements doesn't follow from the first.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My &quot;ompi_info -config&quot; returns
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_info -config | grep LIBS
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -lnsl -lutil - 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; lm -ldl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But it does have openib
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_info | grep openib
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                   MCA btl: openib (MCA v2.0, API v2.0, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Component v1.3.2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and osu_bibw returns
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # OSU MPI Bi-Directional Bandwidth Test v3.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 4194304                1717.43
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which it's sure not getting over ethernet.  I think Jeff 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Squyres' test (ompi_info | grep openib) must be more definitive.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 								
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 		Noam
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="9703.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9701.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband"</a>
<li><strong>In reply to:</strong> <a href="9701.php">Gus Correa: "Re: [OMPI users] 50% performance reduction due to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet instead	of	using Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9704.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
<li><strong>Reply:</strong> <a href="9704.php">Gus Correa: "Re: [OMPI users] 50% performance reduction	due	to	OpenMPI	v	1.3.2forcing all MPI	traffic over Ethernet	instead	of	using	Infiniband"</a>
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
