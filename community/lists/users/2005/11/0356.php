<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 17 10:25:50 2005" -->
<!-- isoreceived="20051117152550" -->
<!-- sent="Fri, 18 Nov 2005 02:25:14 +1100" -->
<!-- isosent="20051117152514" -->
<!-- name="Clement Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="437CA0DA.7030504_at_csse.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10b509c0e186814cbe1bcbc71b076d6a_at_open-mpi.org" -->
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
<strong>From:</strong> Clement Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-17 10:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0310.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff.  The problem is solved on the latest version (8172).
<br>
<p>Clement
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Clement --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry for the delay in replying.  We're running around crazy here at 
</span><br>
<span class="quotelev1">&gt;SC, which pretty much keeps us away from e-mail except early in the 
</span><br>
<span class="quotelev1">&gt;morning and late at night.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We fixed a bunch of things in the sm btl as of r8136 (someone reported 
</span><br>
<span class="quotelev1">&gt;similar issues as you, and we took the exchange off-list to fix).  The 
</span><br>
<span class="quotelev1">&gt;problems could definitely affect correctness and cause segv's similar 
</span><br>
<span class="quotelev1">&gt;to what you were seeing (see 
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/users/2005/11/0326.php">http://www.open-mpi.org/community/lists/users/2005/11/0326.php</a> for a 
</span><br>
<span class="quotelev1">&gt;little more info).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I notice that you're running 8113 here -- could you try the latest 
</span><br>
<span class="quotelev1">&gt;nightly snapshot or rc and see if the same problems occur?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for your patience!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 14, 2005, at 4:51 AM, Clement Chu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I tried the rc6 and trunk nightly 8150.  I got the same problem.  I 
</span><br>
<span class="quotelev2">&gt;&gt;copied the message from terminal as below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI: 1.1a1r8113
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI SVN revision: r8113
</span><br>
<span class="quotelev2">&gt;&gt;               Open RTE: 1.1a1r8113
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE SVN revision: r8113
</span><br>
<span class="quotelev2">&gt;&gt;                   OPAL: 1.1a1r8113
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL SVN revision: r8113
</span><br>
<span class="quotelev2">&gt;&gt;                 Prefix: /home/clement/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt;Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;          Configured by: clement
</span><br>
<span class="quotelev2">&gt;&gt;          Configured on: Mon Nov 14 10:12:12 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;         Configure host: localhost
</span><br>
<span class="quotelev2">&gt;&gt;               Built by: clement
</span><br>
<span class="quotelev2">&gt;&gt;               Built on: Mon Nov 14 10:28:21 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;             Built host: localhost
</span><br>
<span class="quotelev2">&gt;&gt;             C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;    C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;           C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;  C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;            C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;         C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt; Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt;Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt;Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;        libltdl support: 1
</span><br>
<span class="quotelev2">&gt;&gt;             MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev2">&gt;&gt;v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: teg (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: uniq (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ptl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ptl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rmaps: round_robin (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev2">&gt;&gt;v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;&lt;<a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.1a1r8150.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.1a1r8150.tar.gz</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;It works if there is only 1 process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$ mpirun -np 1 cpi
</span><br>
<span class="quotelev2">&gt;&gt;Process 0 on localhost
</span><br>
<span class="quotelev2">&gt;&gt;pi is approximately 3.1416009869231254, Error is 0.0000083333333323
</span><br>
<span class="quotelev2">&gt;&gt;wall clock time = 0.000469
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;When I tried two processes, I got the following problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$ mpirun -np 2 cpi
</span><br>
<span class="quotelev2">&gt;&gt;mpirun noticed that job rank 1 with PID 3299 on node &quot;localhost&quot; 
</span><br>
<span class="quotelev2">&gt;&gt;exited on signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I tried backcore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$ ls
</span><br>
<span class="quotelev2">&gt;&gt;core.3299  cpi  cpi.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$ file core.3299
</span><br>
<span class="quotelev2">&gt;&gt;core.3299: ELF 32-bit LSB core file Intel 80386, version 1 (SYSV), 
</span><br>
<span class="quotelev2">&gt;&gt;SVR4-style, SVR4-style, from 'cpi'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_localhost testmpi]$ gdb cpi core.3299
</span><br>
<span class="quotelev2">&gt;&gt;GNU gdb Red Hat Linux (6.3.0.0-1.21rh)
</span><br>
<span class="quotelev2">&gt;&gt;Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt;GDB is free software, covered by the GNU General Public License, and 
</span><br>
<span class="quotelev2">&gt;&gt;you are
</span><br>
<span class="quotelev2">&gt;&gt;welcome to change it and/or distribute copies of it under certain 
</span><br>
<span class="quotelev2">&gt;&gt;conditions.
</span><br>
<span class="quotelev2">&gt;&gt;Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev2">&gt;&gt;There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for 
</span><br>
<span class="quotelev2">&gt;&gt;details.
</span><br>
<span class="quotelev2">&gt;&gt;This GDB was configured as &quot;i386-redhat-linux-gnu&quot;...Using host 
</span><br>
<span class="quotelev2">&gt;&gt;libthread_db library &quot;/lib/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from shared object read from target memory...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded system supplied DSO at 0xf3f000
</span><br>
<span class="quotelev2">&gt;&gt;Core was generated by `cpi'.
</span><br>
<span class="quotelev2">&gt;&gt;Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;warning: svr4_current_sos: Can't read pathname for load map: 
</span><br>
<span class="quotelev2">&gt;&gt;Input/output error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /home/clement/openmpi/lib/libmpi.so.0...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /home/clement/openmpi/lib/liborte.so.0...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi/lib/liborte.so.0
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /home/clement/openmpi/lib/libopal.so.0...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libutil.so.1...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libutil.so.1
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libnsl.so.1...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libnsl.so.1
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libdl.so.2...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libdl.so.2
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libm.so.6...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libm.so.6
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libpthread.so.0...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libc.so.6...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/ld-linux.so.2...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/ld-linux.so.2
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_paffinity_linux.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_paffinity_linux.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from /lib/libnss_files.so.2...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /lib/libnss_files.so.2
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ns_proxy.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ns_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ns_replica.so...done.Loaded 
</span><br>
<span class="quotelev2">&gt;&gt;symbols for /home/clement/openmpi//lib/openmpi/mca_ns_replica.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rml_oob.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rml_oob.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_oob_tcp.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_oob_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_gpr_null.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_gpr_null.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_gpr_proxy.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_gpr_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_gpr_replica.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_gpr_replica.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rmgr_proxy.so...done.Loaded 
</span><br>
<span class="quotelev2">&gt;&gt;symbols for /home/clement/openmpi//lib/openmpi/mca_rmgr_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rmgr_urm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rds_hostfile.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_rds_hostfile.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rds_resfile.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_rds_resfile.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ras_dash_host.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_ras_dash_host.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ras_hostfile.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_ras_hostfile.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ras_localhost.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_ras_localhost.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ras_slurm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ras_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rmaps_round_robin.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_rmaps_round_robin.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_pls_fork.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_fork.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_pls_proxy.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_pls_rsh.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_pls_slurm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_slurm.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_iof_proxy.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_iof_proxy.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_allocator_basic.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_allocator_basic.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_allocator_bucket.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_allocator_bucket.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_rcache_rb.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rcache_rb.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_mpool_sm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_mpool_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/libmca_common_sm.so.0...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/libmca_common_sm.so.0
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_pml_ob1.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_bml_r2.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_btl_self.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_btl_self.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_btl_sm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_btl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_btl_tcp.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ptl_self.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ptl_self.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ptl_sm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ptl_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_ptl_tcp.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ptl_tcp.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_coll_basic.so...done.Loaded 
</span><br>
<span class="quotelev2">&gt;&gt;symbols for /home/clement/openmpi//lib/openmpi/mca_coll_basic.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_coll_hierarch.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi//lib/openmpi/mca_coll_hierarch.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_coll_self.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_coll_self.so
</span><br>
<span class="quotelev2">&gt;&gt;Reading symbols from 
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib/openmpi/mca_coll_sm.so...done.
</span><br>
<span class="quotelev2">&gt;&gt;Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_coll_sm.so
</span><br>
<span class="quotelev2">&gt;&gt;#0  0x00324a60 in mca_btl_sm_add_procs_same_base_addr (btl=0x328200, 
</span><br>
<span class="quotelev2">&gt;&gt;nprocs=2,
</span><br>
<span class="quotelev2">&gt;&gt;   procs=0x95443a8, peers=0x95443d8, reachability=0xbf993994) at 
</span><br>
<span class="quotelev2">&gt;&gt;btl_sm.c:412
</span><br>
<span class="quotelev2">&gt;&gt;412             mca_btl_sm_component.sm_ctl_header-&gt;segment_header.
</span><br>
<span class="quotelev2">&gt;&gt;(gdb) where
</span><br>
<span class="quotelev2">&gt;&gt;#0  0x00324a60 in mca_btl_sm_add_procs_same_base_addr (btl=0x328200, 
</span><br>
<span class="quotelev2">&gt;&gt;nprocs=2,
</span><br>
<span class="quotelev2">&gt;&gt;   procs=0x95443a8, peers=0x95443d8, reachability=0xbf993994) at 
</span><br>
<span class="quotelev2">&gt;&gt;btl_sm.c:412
</span><br>
<span class="quotelev2">&gt;&gt;#1  0x00365fad in mca_bml_r2_add_procs (nprocs=2, procs=0x95443a8,
</span><br>
<span class="quotelev2">&gt;&gt;   bml_endpoints=0x9544388, reachable=0xbf993994) at bml_r2.c:220
</span><br>
<span class="quotelev2">&gt;&gt;#2  0x007ba346 in mca_pml_ob1_add_procs (procs=0x9544378, nprocs=2)
</span><br>
<span class="quotelev2">&gt;&gt;   at pml_ob1.c:131
</span><br>
<span class="quotelev2">&gt;&gt;#3  0x00d3df0b in ompi_mpi_init (argc=1, argv=0xbf993c74, requested=0,
</span><br>
<span class="quotelev2">&gt;&gt;   provided=0xbf993a44) at runtime/ompi_mpi_init.c:396
</span><br>
<span class="quotelev2">&gt;&gt;#4  0x00d59ab8 in PMPI_Init (argc=0xbf993bf0, argv=0xbf993bf4) at 
</span><br>
<span class="quotelev2">&gt;&gt;pinit.c:71
</span><br>
<span class="quotelev2">&gt;&gt;#5  0x08048904 in main (argc=1, argv=0xbf993c74) at cpi.c:20
</span><br>
<span class="quotelev2">&gt;&gt;(gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I attached the mpi program.  I do hope you can help me.  Many thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Clement
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;One minor thing that I notice in your ompi_info output -- your build  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;and run machines are different (kfc vs. clement).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Are these both FC4 machines, or are they different OS's/distros?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Nov 10, 2005, at 10:01 AM, Clement Chu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$ mpirun -d -np 2 test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] procdir: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] jobdir: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] unidir:  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199]     tmpdir /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199]     universe default-universe-29199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199]     user clement
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199]     host kfc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199]     jobid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199]     procid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] procdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] jobdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] unidir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] [0,0,0] contact_file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/universe- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;setup.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] [0,0,0] wrote setup file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh: final template argv:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--universe clement_at_kfc:default-universe-29199 --nsreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&quot;0.0.0;tcp://192.168.11.101:32784&quot; --gprreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&quot;0.0.0;tcp://192.168.11.101:32784&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] pls:rsh: oversubscribed -- setting mpi_yield_when_idle 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(1 2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;signal 11.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] ERROR: There may be more information available from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] The daemon received a signal 11.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;1 additional process aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] sess_dir_finalize: found proc session dir empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] sess_dir_finalize: found univ session dir empty - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[kfc:29199] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;opmi_info output message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$ ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Open MPI: 1.0rc5r8053
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open MPI SVN revision: r8053
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Open RTE: 1.0rc5r8053
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open RTE SVN revision: r8053
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                   OPAL: 1.0rc5r8053
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      OPAL SVN revision: r8053
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Prefix: /home/clement/openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Configured by: clement
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Configured on: Fri Nov 11 00:37:23 EST 2005
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Configure host: kfc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Built by: clement
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Built on: Fri Nov 11 00:59:26 EST 2005
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Built host: kfc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             C bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           C++ bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Fortran90 bindings: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             C compiler: gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           C++ compiler: g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Fortran77 compiler: gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Fortran90 compiler: gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            C profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          C++ profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Fortran90 profiling: yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         C++ exceptions: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Internal debug support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Memory profiling support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Memory debugging support: no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        libltdl support: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ras: hostfile (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA rds: hostfile (MCA v1.0, API v1.0, Component 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;              MCA rmaps: round_robin (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;Clement Kam Man Chu
</span><br>
<span class="quotelev2">&gt;&gt;Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt;School of Computer Science &amp; Software Engineering
</span><br>
<span class="quotelev2">&gt;&gt;Monash University, Caulfield Campus
</span><br>
<span class="quotelev2">&gt;&gt;Ph: 61 3 9903 1964
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;double f( double );
</span><br>
<span class="quotelev2">&gt;&gt;double f( double a )
</span><br>
<span class="quotelev2">&gt;&gt;{
</span><br>
<span class="quotelev2">&gt;&gt;    return (4.0 / (1.0 + a*a));
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;int main( int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt;{
</span><br>
<span class="quotelev2">&gt;&gt;    int done = 0, n, myid, numprocs, i;
</span><br>
<span class="quotelev2">&gt;&gt;    double PI25DT = 3.141592653589793238462643;
</span><br>
<span class="quotelev2">&gt;&gt;    double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev2">&gt;&gt;    double startwtime = 0.0, endwtime;
</span><br>
<span class="quotelev2">&gt;&gt;    int  namelen;
</span><br>
<span class="quotelev2">&gt;&gt;    char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Get_processor_name(processor_name,&amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    fprintf(stderr,&quot;Process %d on %s\n&quot;, myid, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    n = 0;
</span><br>
<span class="quotelev2">&gt;&gt;    while (!done)
</span><br>
<span class="quotelev2">&gt;&gt;    {
</span><br>
<span class="quotelev2">&gt;&gt;        if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt;        {
</span><br>
<span class="quotelev2">&gt;&gt;/*
</span><br>
<span class="quotelev2">&gt;&gt;            printf(&quot;Enter the number of intervals: (0 quits) &quot;);
</span><br>
<span class="quotelev2">&gt;&gt;            scanf(&quot;%d&quot;,&amp;n);
</span><br>
<span class="quotelev2">&gt;&gt;*/
</span><br>
<span class="quotelev2">&gt;&gt;	    if (n==0) n=100; else n=0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;	    startwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;        if (n == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;            done = 1;
</span><br>
<span class="quotelev2">&gt;&gt;	}
</span><br>
<span class="quotelev2">&gt;&gt;        else
</span><br>
<span class="quotelev2">&gt;&gt;        {
</span><br>
<span class="quotelev2">&gt;&gt;            h   = 1.0 / (double) n;
</span><br>
<span class="quotelev2">&gt;&gt;            sum = 0.0;
</span><br>
<span class="quotelev2">&gt;&gt;            for (i = myid + 1; i &lt;= n; i += numprocs)
</span><br>
<span class="quotelev2">&gt;&gt;            {
</span><br>
<span class="quotelev2">&gt;&gt;                x = h * ((double)i - 0.5);
</span><br>
<span class="quotelev2">&gt;&gt;                sum += f(x);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;            mypi = h * sum;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, 
</span><br>
<span class="quotelev2">&gt;&gt;MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            if (myid == 0)
</span><br>
<span class="quotelev2">&gt;&gt;	    {
</span><br>
<span class="quotelev2">&gt;&gt;                printf(&quot;pi is approximately %.16f, Error is %.16f\n&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt;pi, fabs(pi - PI25DT));
</span><br>
<span class="quotelev2">&gt;&gt;		endwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;		printf(&quot;wall clock time = %f\n&quot;, endwtime-startwtime);
</span><br>
<span class="quotelev2">&gt;&gt;	    }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Clement Kam Man Chu
Research Assistant
School of Computer Science &amp; Software Engineering
Monash University, Caulfield Campus
Ph: 61 3 9903 1964
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="0351.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0310.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
