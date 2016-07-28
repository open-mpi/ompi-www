<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 06:24:35 2005" -->
<!-- isoreceived="20050809112435" -->
<!-- sent="Tue, 9 Aug 2005 16:54:07 +0530" -->
<!-- isosent="20050809112407" -->
<!-- name="Sridhar Chirravuri" -->
<!-- email="sridhar_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4A388685F814D54CAE412B2DAB7CE91C5AD4A0_at_initexch.topspincom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto=" Fwd: Regarding MVAPI Component in Open MPI" -->
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
<strong>From:</strong> Sridhar Chirravuri (<em>sridhar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-09 06:24:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have fixed the timing issue between the server and client, and now I
<br>
could build Open MPI successfully. 
<br>
<p>Here is the output of ompi_info....
<br>
<p>[root_at_micrompi-2 ompi]# ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0a1r6760M
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r6760M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0a1r6760M
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r6760M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0a1r6760M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r6760M
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /openmpi
<br>
&nbsp;Configured architecture: x86_64-redhat-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Aug  8 23:58:08 IST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: micrompi-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Tue Aug  9 00:09:10 IST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: micrompi-2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: g77
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/g77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;Internal debug support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: yes
<br>
Memory debugging support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: mvapi (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: mvapi (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: host (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
<br>
v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0)
<br>
<p><p>This time, I could see that btl mvapi component is built. 
<br>
<p>But I am still seeing the same problem while running Pallas Benchmark
<br>
i.e., I still see that the data is passing over TCP/GigE and NOT over
<br>
Infiniband.
<br>
<p>I have disabled building OpenIB and to do so I have touched
<br>
.ompi_ignore. This should not be a problem for MVAPI. I have run
<br>
autogen.sh, configure and make all. The output of autogen.sh, configure
<br>
and make all commands are  &lt;&lt;ompi_out.tar.gz&gt;&gt; gzip'ed in
<br>
ompi_out.tar.gz file which is attached in this mail. This gzip file also
<br>
contains the output of Pallas Benchmark results. At the end of Pallas
<br>
Benchmark output, you can find the error
<br>
<p>Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
<br>
Request for 0 bytes (coll_basic_reduce.c, 193)
<br>
<p>..and Pallas just hung.
<br>
<p>I have no clue about the above errors which are coming from Open MPI
<br>
source code.
<br>
<p>The configure options that I have used is 
<br>
<p>./configure --prefix=/openmpi --with-btl-mvapi=/usr/local/topspin/
<br>
<p>and exported 
<br>
<p>export CFLAGS=&quot;-I/usr/local/topspin/include -I
<br>
/usr/local/topspin/include/vapi&quot;
<br>
export LDFLAGS=&quot;-lmosal -lvapi -L/usr/local/topspin/lib64&quot;
<br>
export btl_mvapi_LIBS=&quot;-lvapi -lmosal -L/usr/local/topspin/lib64&quot;
<br>
export btl_mvapi_LDFLAGS=$btl_mvapi_LIBS
<br>
export btl_mvapi_CFLAGS=$CFLAGS
<br>
export LD_LIBRARY_PATH=/usr/local/topspin/lib64
<br>
export PATH=/openmpi/bin:$PATH
<br>
<p>We are using Mellanox infiniband stack. We call it as MVAPICH 092 code
<br>
which is MPI stack over VAPI i.e, inifiniband.
<br>
<p>Vapi.h is located in /usr/local/topspin/include/vapi and this path is
<br>
mentioned in CFLAGS.
<br>
<p>Libmosal and libvapi are located in /usr/local/topspin/lib64 directory. 
<br>
<p>Info about machine:
<br>
<p>model name      :                   Intel(R) Xeon(TM) CPU 3.20GHz
<br>
<p>Linux micrompi-2 2.6.9-5.ELsmp #1 SMP Wed Jan 5 19:29:47 EST 2005 x86_64
<br>
x86_64 x86_64 GNU/Linux
<br>
<p>[root_at_micrompi-2 vapi]# cat /etc/redhat-release
<br>
Red Hat Enterprise Linux AS release 4 (Nahant)
<br>
<p><p>Is there any thing that I am missing while building btl mvapi? Also, is
<br>
anyone built for mvapi and tested this OMPI stack. Please let me know.
<br>
<p>Thanks
<br>
-Sridhar
<br>
<p><p><p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Monday, August 08, 2005 8:21 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p>It looks like you are having timestamp issues, e.g.:
<br>
<p><span class="quotelev1">&gt; make: Warning: File `Makefile.am' has modification time 3.6e+04 s in 
</span><br>
<span class="quotelev1">&gt; the future
</span><br>
<p>We typically see this in environments where NFS clients are not time 
<br>
synchronized properly with the NFS server (e.g., using ntp either to 
<br>
the NFS server directly, or to a common parent ntp server, or something 
<br>
similar).
<br>
<p>Automake-derived build systems are *extremely* sensitive to filesystem 
<br>
timestamps because they are driven off Makefile dependencies.  So if 
<br>
you are working on a networked filesystem and do not have your time 
<br>
tightly synchronized between the client and server, these kinds of 
<br>
errors will occur.
<br>
<p>Two fixes for this are:
<br>
<p>1. Fix the time issues between network filesystem client and server
<br>
2. Build on a non-networked filesystem
<br>
<p><p>On Aug 8, 2005, at 6:19 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to build the latest code but as I mentioned in one of my 
</span><br>
<span class="quotelev1">&gt; previous mails, build is getting into a loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-1 ompi]# make all | tee mymake.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: Warning: File `Makefile.am' has modification time 3.6e+04 s in 
</span><br>
<span class="quotelev1">&gt; the future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
</span><br>
<p><span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /bin/sh ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: make[1]: Entering directory `/ompi/config'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning: File `Makefile.am' has modification time 3.6e+04 s in the 
</span><br>
<span class="quotelev1">&gt; future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd .. &amp;&amp; make  am--refresh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Warning: File `Makefile.am' has modification time 3.6e+04 s 
</span><br>
<span class="quotelev1">&gt; in the future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
</span><br>
<p><span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /bin/sh ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: warning:  Clock skew detected.  Your build may be incomplete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Warning: File `Makefile.am' has modification time 3.6e+04 s 
</span><br>
<span class="quotelev1">&gt; in the future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
</span><br>
<p><span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run autoconf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ./config.status --recheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /bin/sh ./config.status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: warning:  Clock skew detected.  Your build may be incomplete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd .. &amp;&amp; make  am--refresh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: make[2]: Entering directory `/ompi'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning: File `Makefile.am' has modification time 3.6e+04 s in the 
</span><br>
<span class="quotelev1">&gt; future
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd . &amp;&amp; /bin/sh /ompi/config/missing --run aclocal-1.9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/libgcrypt.m4:23: warning: underquoted definition of
</span><br>
<p><span class="quotelev1">&gt; AM_PATH_LIBGCRYPT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   run info '(automake)Extending aclocal'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   or see 
</span><br>
<span class="quotelev1">&gt; <a href="http://sources.redhat.com/automake/automake.html#Extending-aclocal">http://sources.redhat.com/automake/automake.html#Extending-aclocal</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/share/aclocal/ao.m4:9: warning: underquoted definition of 
</span><br>
<span class="quotelev1">&gt; XIPH_PATH_AO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  cd . &amp;&amp; /bin/sh /ompi/config/missing --run automake-1.9 --foreign
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: *** [Makefile.in] Interrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[1]: *** [../configure] Interrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Interrupt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.status -recheck is being issued from Makefile. I have moved
</span><br>
<p><span class="quotelev1">&gt; config.status to config.status.old and did touch config.status but 
</span><br>
<span class="quotelev1">&gt; still &quot;make all&quot; is going in loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is anyone tried building the latest code drop of OpenMPI? Or Is anyone
</span><br>
<p><span class="quotelev1">&gt; has seen this type of behavior?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Sridhar
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="../../att-0098/ompi_out.tar.gz">ompi_out.tar.gz</a>
</ul>
<!-- attachment="ompi_out.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0097.php">Galen Shipman: "Re:  [PATCH] wrong variable type in OpenIB."</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
