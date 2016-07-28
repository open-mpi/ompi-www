<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 07:52:22 2005" -->
<!-- isoreceived="20051114125222" -->
<!-- sent="Mon, 14 Nov 2005 22:51:47 +1000" -->
<!-- isosent="20051114125147" -->
<!-- name="Clement Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="43788863.7030108_at_csse.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="dd2bcdaa17c4c770da375603475acc87_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-14 07:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0351.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I tried the rc6 and trunk nightly 8150.  I got the same problem.  I 
<br>
copied the message from terminal as below.
<br>
<p>[clement_at_localhost testmpi]$ ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1a1r8113
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r8113
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1a1r8113
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r8113
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1a1r8113
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r8113
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/clement/openmpi/
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: clement
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Nov 14 10:12:12 EST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: localhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: clement
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Mon Nov 14 10:28:21 EST 2005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: localhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
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
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: uniq (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1)
<br>
[clement_at_localhost testmpi]$
<br>
&lt;<a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.1a1r8150.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.1a1r8150.tar.gz</a>&gt;
<br>
<p>It works if there is only 1 process.
<br>
<p>[clement_at_localhost testmpi]$ mpirun -np 1 cpi
<br>
Process 0 on localhost
<br>
pi is approximately 3.1416009869231254, Error is 0.0000083333333323
<br>
wall clock time = 0.000469
<br>
[clement_at_localhost testmpi]$
<br>
<p><p>When I tried two processes, I got the following problem.
<br>
<p>[clement_at_localhost testmpi]$ mpirun -np 2 cpi
<br>
mpirun noticed that job rank 1 with PID 3299 on node &quot;localhost&quot; exited 
<br>
on signal 11.
<br>
1 process killed (possibly by Open MPI)
<br>
<p><p>I tried backcore.
<br>
<p>[clement_at_localhost testmpi]$ ls
<br>
core.3299  cpi  cpi.c
<br>
<p>[clement_at_localhost testmpi]$ file core.3299
<br>
core.3299: ELF 32-bit LSB core file Intel 80386, version 1 (SYSV), 
<br>
SVR4-style, SVR4-style, from 'cpi'
<br>
<p>[clement_at_localhost testmpi]$ gdb cpi core.3299
<br>
GNU gdb Red Hat Linux (6.3.0.0-1.21rh)
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain 
<br>
conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;i386-redhat-linux-gnu&quot;...Using host 
<br>
libthread_db library &quot;/lib/libthread_db.so.1&quot;.
<br>
<p>Reading symbols from shared object read from target memory...done.
<br>
Loaded system supplied DSO at 0xf3f000
<br>
Core was generated by `cpi'.
<br>
Program terminated with signal 11, Segmentation fault.
<br>
<p>warning: svr4_current_sos: Can't read pathname for load map: 
<br>
Input/output error
<br>
<p>Reading symbols from /home/clement/openmpi/lib/libmpi.so.0...done.
<br>
Loaded symbols for /home/clement/openmpi/lib/libmpi.so.0
<br>
Reading symbols from /home/clement/openmpi/lib/liborte.so.0...done.
<br>
Loaded symbols for /home/clement/openmpi/lib/liborte.so.0
<br>
Reading symbols from /home/clement/openmpi/lib/libopal.so.0...done.
<br>
Loaded symbols for /home/clement/openmpi/lib/libopal.so.0
<br>
Reading symbols from /lib/libutil.so.1...done.
<br>
Loaded symbols for /lib/libutil.so.1
<br>
Reading symbols from /lib/libnsl.so.1...done.
<br>
Loaded symbols for /lib/libnsl.so.1
<br>
Reading symbols from /lib/libdl.so.2...done.
<br>
Loaded symbols for /lib/libdl.so.2
<br>
Reading symbols from /lib/libm.so.6...done.
<br>
Loaded symbols for /lib/libm.so.6
<br>
Reading symbols from /lib/libpthread.so.0...done.
<br>
Loaded symbols for /lib/libpthread.so.0
<br>
Reading symbols from /lib/libc.so.6...done.
<br>
Loaded symbols for /lib/libc.so.6
<br>
Reading symbols from /lib/ld-linux.so.2...done.
<br>
Loaded symbols for /lib/ld-linux.so.2
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_paffinity_linux.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_paffinity_linux.so
<br>
Reading symbols from /lib/libnss_files.so.2...done.
<br>
Loaded symbols for /lib/libnss_files.so.2
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ns_proxy.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ns_proxy.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ns_replica.so...done.Loaded 
<br>
symbols for /home/clement/openmpi//lib/openmpi/mca_ns_replica.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rml_oob.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rml_oob.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_oob_tcp.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_oob_tcp.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_gpr_null.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_gpr_null.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_gpr_proxy.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_gpr_proxy.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_gpr_replica.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_gpr_replica.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rmgr_proxy.so...done.Loaded 
<br>
symbols for /home/clement/openmpi//lib/openmpi/mca_rmgr_proxy.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rmgr_urm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rmgr_urm.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rds_hostfile.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rds_hostfile.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rds_resfile.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rds_resfile.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ras_dash_host.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ras_dash_host.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ras_hostfile.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ras_hostfile.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ras_localhost.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ras_localhost.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ras_slurm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ras_slurm.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rmaps_round_robin.so...done.
<br>
Loaded symbols for 
<br>
/home/clement/openmpi//lib/openmpi/mca_rmaps_round_robin.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_pls_fork.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_fork.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_pls_proxy.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_proxy.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_pls_rsh.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_rsh.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_pls_slurm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pls_slurm.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_iof_proxy.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_iof_proxy.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_allocator_basic.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_allocator_basic.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_allocator_bucket.so...done.
<br>
Loaded symbols for 
<br>
/home/clement/openmpi//lib/openmpi/mca_allocator_bucket.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_rcache_rb.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_rcache_rb.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_mpool_sm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_mpool_sm.so
<br>
Reading symbols from /home/clement/openmpi/lib/libmca_common_sm.so.0...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/libmca_common_sm.so.0
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_pml_ob1.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_pml_ob1.so
<br>
Reading symbols from /home/clement/openmpi/lib/openmpi/mca_bml_r2.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_bml_r2.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_btl_self.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_btl_self.so
<br>
Reading symbols from /home/clement/openmpi/lib/openmpi/mca_btl_sm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_btl_sm.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_btl_tcp.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_btl_tcp.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ptl_self.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ptl_self.so
<br>
Reading symbols from /home/clement/openmpi/lib/openmpi/mca_ptl_sm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ptl_sm.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_ptl_tcp.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_ptl_tcp.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_coll_basic.so...done.Loaded 
<br>
symbols for /home/clement/openmpi//lib/openmpi/mca_coll_basic.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_coll_hierarch.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_coll_hierarch.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_coll_self.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_coll_self.so
<br>
Reading symbols from 
<br>
/home/clement/openmpi/lib/openmpi/mca_coll_sm.so...done.
<br>
Loaded symbols for /home/clement/openmpi//lib/openmpi/mca_coll_sm.so
<br>
#0  0x00324a60 in mca_btl_sm_add_procs_same_base_addr (btl=0x328200, 
<br>
nprocs=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;procs=0x95443a8, peers=0x95443d8, reachability=0xbf993994) at 
<br>
btl_sm.c:412
<br>
412             mca_btl_sm_component.sm_ctl_header-&gt;segment_header.
<br>
(gdb) where
<br>
#0  0x00324a60 in mca_btl_sm_add_procs_same_base_addr (btl=0x328200, 
<br>
nprocs=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;procs=0x95443a8, peers=0x95443d8, reachability=0xbf993994) at 
<br>
btl_sm.c:412
<br>
#1  0x00365fad in mca_bml_r2_add_procs (nprocs=2, procs=0x95443a8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bml_endpoints=0x9544388, reachable=0xbf993994) at bml_r2.c:220
<br>
#2  0x007ba346 in mca_pml_ob1_add_procs (procs=0x9544378, nprocs=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1.c:131
<br>
#3  0x00d3df0b in ompi_mpi_init (argc=1, argv=0xbf993c74, requested=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0xbf993a44) at runtime/ompi_mpi_init.c:396
<br>
#4  0x00d59ab8 in PMPI_Init (argc=0xbf993bf0, argv=0xbf993bf4) at pinit.c:71
<br>
#5  0x08048904 in main (argc=1, argv=0xbf993c74) at cpi.c:20
<br>
(gdb)
<br>
<p><p>I attached the mpi program.  I do hope you can help me.  Many thanks.
<br>
<p><p>Clement
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;One minor thing that I notice in your ompi_info output -- your build  
</span><br>
<span class="quotelev1">&gt;and run machines are different (kfc vs. clement).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are these both FC4 machines, or are they different OS's/distros?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 10, 2005, at 10:01 AM, Clement Chu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ mpirun -d -np 2 test
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] procdir: (null)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] jobdir: (null)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] unidir:  
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     tmpdir /tmp
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     universe default-universe-29199
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     user clement
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     host kfc
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     jobid 0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     procid 0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] procdir:
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0/0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] unidir:
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/universe- 
</span><br>
<span class="quotelev2">&gt;&gt;setup.txt
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 1
</span><br>
<span class="quotelev2">&gt;&gt;--name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--universe clement_at_kfc:default-universe-29199 --nsreplica
</span><br>
<span class="quotelev2">&gt;&gt;&quot;0.0.0;tcp://192.168.11.101:32784&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt;&gt;&quot;0.0.0;tcp://192.168.11.101:32784&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
</span><br>
<span class="quotelev2">&gt;&gt;(1 2)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev2">&gt;&gt;mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev2">&gt;&gt;signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev2">&gt;&gt;expected.
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] The daemon received a signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;opmi_info output message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.0rc5r8053
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI SVN revision: r8053
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.0rc5r8053
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r8053
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.0rc5r8053
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r8053
</span><br>
<span class="quotelev2">&gt;&gt;                  Prefix: /home/clement/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configured by: clement
</span><br>
<span class="quotelev2">&gt;&gt;           Configured on: Fri Nov 11 00:37:23 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: kfc
</span><br>
<span class="quotelev2">&gt;&gt;                Built by: clement
</span><br>
<span class="quotelev2">&gt;&gt;                Built on: Fri Nov 11 00:59:26 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;              Built host: kfc
</span><br>
<span class="quotelev2">&gt;&gt;              C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;            C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;             C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt;Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt;Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;         libltdl support: 1
</span><br>
<span class="quotelev2">&gt;&gt;              MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$
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
<p>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;math.h&gt;
<br>
<p>double f( double );
<br>
double f( double a )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (4.0 / (1.0 + a*a));
<br>
}
<br>
<p>int main( int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int done = 0, n, myid, numprocs, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double PI25DT = 3.141592653589793238462643;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double mypi, pi, h, sum, x;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double startwtime = 0.0, endwtime;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int  namelen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name,&amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr,&quot;Process %d on %s\n&quot;, myid, processor_name);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;n = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (!done)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Enter the number of intervals: (0 quits) &quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf(&quot;%d&quot;,&amp;n);
<br>
*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (n==0) n=100; else n=0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;startwtime = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (n == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h   = 1.0 / (double) n;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = 0.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = myid + 1; i &lt;= n; i += numprocs)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = h * ((double)i - 0.5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += f(x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mypi = h * sum;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;pi is approximately %.16f, Error is %.16f\n&quot;, pi, fabs(pi - PI25DT));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endwtime = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;wall clock time = %f\n&quot;, endwtime-startwtime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0333.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0331.php">Jeff Squyres: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0351.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0351.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
