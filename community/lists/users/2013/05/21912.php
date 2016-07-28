<?
$subject_val = "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 09:53:36 2013" -->
<!-- isoreceived="20130516135336" -->
<!-- sent="Thu, 16 May 2013 22:53:29 +0900" -->
<!-- isosent="20130516135329" -->
<!-- name="Hayato KUNIIE" -->
<!-- email="kuni255_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype" -->
<!-- id="5194E4D9.4070008_at_oita.email.ne.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6249FF_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype<br>
<strong>From:</strong> Hayato KUNIIE (<em>kuni255_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 09:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21913.php">Reza Bakhshayeshi: "[OMPI users] distributed file system"</a>
<li><strong>Previous message:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<li><strong>In reply to:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following is result of mpirun ompi_info on three_nodes.
<br>
<p>three nodes version is same.
<br>
<p>Package: Open MPI root_at_bwhead.clnet Distribution  Open MPI root_at_bwslv01 
<br>
Distribution  Open MPI root_at_bwslv02 Distribution
<br>
Open MPI: 1.6.4  1.6.4  1.6.4
<br>
Open MPI SVN revision: r28081  r28081  r28081
<br>
Open MPI release date: Feb 19, 2013  Feb 19, 2013  Feb 19, 2013
<br>
Open RTE: 1.6.4  1.6.4  1.6.4
<br>
Open RTE SVN revision: r28081  r28081  r28081
<br>
Open RTE release date: Feb 19, 2013  Feb 19, 2013  Feb 19, 2013
<br>
OPAL: 1.6.4  1.6.4  1.6.4
<br>
OPAL SVN revision: r28081  r28081  r28081
<br>
OPAL release date: Feb 19, 2013  Feb 19, 2013  Feb 19, 2013
<br>
MPI API: 2.1  2.1  2.1
<br>
Ident string: 1.6.4  1.6.4  1.6.4
<br>
Prefix: /usr/local  /usr/local  /usr/local
<br>
Configured architecture: x86_64-unknown-linux-gnu 
<br>
x86_64-unknown-linux-gnu  x86_64-unknown-linux-gnu
<br>
Configure host: bwhead.clnet  bwslv01  bwslv02
<br>
Configured by: root  root  root
<br>
Configured on: Wed May  8 20:38:14 JST 2013 45 JST 2013 29 JST 2013
<br>
Configure host: bwhead.clnet  bwslv01  bwslv02
<br>
Built by: root  root  root
<br>
Built on: Wed May  8 20:48:44 JST 2013 43 JST 2013 38 JST 2013
<br>
Built host: bwhead.clnet  bwslv01  bwslv02
<br>
C bindings: yes  yes  yes
<br>
C++ bindings: yes  yes  yes
<br>
Fortran77 bindings: yes (all)  yes (all)  yes (all)
<br>
Fortran90 bindings: yes  yes  yes
<br>
Fortran90 bindings size: small  small  small
<br>
C compiler: gcc  gcc  gcc
<br>
C compiler absolute: /usr/bin/gcc  /usr/bin/gcc  /usr/bin/gcc
<br>
C compiler family name: GNU  GNU  GNU
<br>
C compiler version: 4.4.7  4.4.7  4.4.7
<br>
C++ compiler: g++  g++  g++
<br>
C++ compiler absolute: /usr/bin/g++  /usr/bin/g++  /usr/bin/g++
<br>
Fortran77 compiler: gfortran  gfortran  gfortran
<br>
Fortran77 compiler abs: /usr/bin/gfortran  /usr/bin/gfortran 
<br>
/usr/bin/gfortran
<br>
Fortran90 compiler: gfortran  gfortran  gfortran
<br>
Fortran90 compiler abs: /usr/bin/gfortran  /usr/bin/gfortran 
<br>
/usr/bin/gfortran
<br>
C profiling: yes  yes  yes
<br>
C++ profiling: yes  yes  yes
<br>
Fortran77 profiling: yes  yes  yes
<br>
Fortran90 profiling: yes  yes  yes
<br>
C++ exceptions: no  no  no
<br>
Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no) no)  no)
<br>
Sparse Groups: no  no  no
<br>
Internal debug support: no  no  no
<br>
MPI interface warnings: no  no  no
<br>
MPI parameter check: runtime  runtime  runtime
<br>
Memory profiling support: no  no  no
<br>
Memory debugging support: no  no  no
<br>
libltdl support: yes  yes  yes
<br>
Heterogeneous support: no  no  no
<br>
mpirun default --prefix: no  no  no
<br>
MPI I/O support: yes  yes  yes
<br>
MPI_WTIME support: gettimeofday  gettimeofday  gettimeofday
<br>
Symbol vis. support: yes  yes  yes
<br>
Host topology support: yes  yes  yes
<br>
MPI extensions: affinity example  affinity example  affinity example
<br>
FT Checkpoint support: no (checkpoint thread: no)  no)  no)
<br>
VampirTrace support: yes  yes  yes
<br>
MPI_MAX_PROCESSOR_NAME: 256  256  256
<br>
MPI_MAX_ERROR_STRING: 256  256  256
<br>
MPI_MAX_OBJECT_NAME: 64  64  64
<br>
MPI_MAX_INFO_KEY: 36  36  36
<br>
MPI_MAX_INFO_VAL: 256  256  256
<br>
MPI_MAX_PORT_NAME: 1024  1024  1024
<br>
MPI_MAX_DATAREP_STRING: 128  128  128
<br>
Package: Open MPI root_at_bwslv01 Distribution  execinfo (MCA v2.0, API 
<br>
v2.0, Component v1.6.4)  execinfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open MPI: 1.6.4  linux (MCA v2.0, API v2.0, Component v1.6.4) linux (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Open MPI SVN revision: r28081  hwloc (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open MPI release date: Feb 19, 2013  auto_detect (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open RTE: 1.6.4  file (MCA v2.0, API v2.0, Component v1.6.4)  file (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Open RTE SVN revision: r28081  mmap (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  mmap (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open RTE release date: Feb 19, 2013  posix (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  posix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
OPAL: 1.6.4  sysv (MCA v2.0, API v2.0, Component v1.6.4)  sysv (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
OPAL SVN revision: r28081  first_use (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
OPAL release date: Feb 19, 2013  hwloc (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI API: 2.1  linux (MCA v2.0, API v2.0, Component v1.6.4)  linux (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Ident string: 1.6.4  env (MCA v2.0, API v2.0, Component v1.6.4) env (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Prefix: /usr/local  config (MCA v2.0, API v2.0, Component v1.6.4) config 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
Configured architecture: x86_64-unknown-linux-gnu  linux (MCA v2.0, API 
<br>
v2.0, Component v1.6.4)  linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Configure host: bwslv01  hwloc132 (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Configured by: root  orte (MCA v2.0, API v2.0, Component v1.6.4) orte 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
Configured on: Wed May  8 20:56:45 JST 2013  orte (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Configure host: bwslv01  basic (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Built by: root  bucket (MCA v2.0, API v2.0, Component v1.6.4) bucket 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
Built on: Wed May  8 21:05:43 JST 2013  basic (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Built host: bwslv01  hierarch (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
hierarch (MCA v2.0, API v2.0, Component v1.6.4)
<br>
C bindings: yes  inter (MCA v2.0, API v2.0, Component v1.6.4) inter (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
C++ bindings: yes  self (MCA v2.0, API v2.0, Component v1.6.4) self (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Fortran77 bindings: yes (all)  sm (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran90 bindings: yes  sync (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
sync (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran90 bindings size: small  tuned (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  tuned (MCA v2.0, API v2.0, Component v1.6.4)
<br>
C compiler: gcc  romio (MCA v2.0, API v2.0, Component v1.6.4) romio (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
C compiler absolute: /usr/bin/gcc  fake (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  fake (MCA v2.0, API v2.0, Component v1.6.4)
<br>
C compiler family name: GNU  rdma (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
C compiler version: 4.4.7  sm (MCA v2.0, API v2.0, Component v1.6.4)  sm 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
C++ compiler: g++  bfo (MCA v2.0, API v2.0, Component v1.6.4)  bfo (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
C++ compiler absolute: /usr/bin/g++  csum (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  csum (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran77 compiler: gfortran  ob1 (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  ob1 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran77 compiler abs: /usr/bin/gfortran  v (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  v (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran90 compiler: gfortran  r2 (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
r2 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran90 compiler abs: /usr/bin/gfortran  vma (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  vma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
C profiling: yes  self (MCA v2.0, API v2.0, Component v1.6.4) self (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
C++ profiling: yes  sm (MCA v2.0, API v2.0, Component v1.6.4)  sm (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Fortran77 profiling: yes  tcp (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Fortran90 profiling: yes  unity (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
unity (MCA v2.0, API v2.0, Component v1.6.4)
<br>
C++ exceptions: no  pt2pt (MCA v2.0, API v2.0, Component v1.6.4) pt2pt 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no) rdma (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)  rdma (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)
<br>
Sparse Groups: no  hnp (MCA v2.0, API v2.0, Component v1.6.4)  hnp (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Internal debug support: no  orted (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  orted (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI interface warnings: no  tool (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI parameter check: runtime  tcp (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Memory profiling support: no  default (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Memory debugging support: no  cm (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
libltdl support: yes  loadleveler (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Heterogeneous support: no  slurm (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
mpirun default --prefix: no  load_balance (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  load_balance (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI I/O support: yes  rank_file (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
rank_file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_WTIME support: gettimeofday  resilient (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  resilient (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Symbol vis. support: yes  round_robin (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  round_robin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Host topology support: yes  seq (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
seq (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI extensions: affinity example  topo (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  topo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
FT Checkpoint support: no (checkpoint thread: no)  oob (MCA v2.0, API 
<br>
v2.0, Component v1.6.4)  oob (MCA v2.0, API v2.0, Component v1.6.4)
<br>
VampirTrace support: yes  binomial (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  binomial (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_PROCESSOR_NAME: 256  cm (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_ERROR_STRING: 256  direct (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  direct (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_OBJECT_NAME: 64  linear (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
linear (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_INFO_KEY: 36  radix (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
radix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_INFO_VAL: 256  slave (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_PORT_NAME: 1024  rsh (MCA v2.0, API v2.0, Component v1.6.4)  rsh 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI_MAX_DATAREP_STRING: 128  slurm (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Package: Open MPI root_at_bwslv02 Distribution  rsh (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open MPI: 1.6.4  default (MCA v2.0, API v2.0, Component v1.6.4) default 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open MPI SVN revision: r28081  env (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open MPI release date: Feb 19, 2013  hnp (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open RTE: 1.6.4  singleton (MCA v2.0, API v2.0, Component v1.6.4) 
<br>
singleton (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open RTE SVN revision: r28081  slave (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
Open RTE release date: Feb 19, 2013  slurm (MCA v2.0, API v2.0, 
<br>
Component v1.6.4)  slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
OPAL: 1.6.4  slurmd (MCA v2.0, API v2.0, Component v1.6.4)  slurmd (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
OPAL SVN revision: r28081  tool (MCA v2.0, API v2.0, Component v1.6.4)  
<br>
tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
OPAL release date: Feb 19, 2013  bad (MCA v2.0, API v2.0, Component 
<br>
v1.6.4)  bad (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MPI API: 2.1  basic (MCA v2.0, API v2.0, Component v1.6.4)  basic (MCA 
<br>
v2.0, API v2.0, Component v1.6.4)
<br>
Ident string: 1.6.4  hier (MCA v2.0, API v2.0, Component v1.6.4) hier 
<br>
(MCA v2.0, API v2.0, Component v1.6.4)
<br>
Prefix: /usr/local  command (MCA v2.0, API v1.0, Component v1.6.4)  
<br>
command (MCA v2.0, API v1.0, Component v1.6.4)
<br>
Configured architecture: x86_64-unknown-linux-gnu  syslog (MCA v2.0, API 
<br>
v1.0, Component v1.6.4)  syslog (MCA v2.0, API v1.0, Component v1.6.4)
<br>
Configure host: bwslv02
<br>
Configured by: root
<br>
Configured on: Wed May  8 20:56:29 JST 2013
<br>
Configure host: bwslv02
<br>
Built by: root
<br>
Built on: Wed May  8 21:05:38 JST 2013
<br>
Built host: bwslv02
<br>
C bindings: yes
<br>
C++ bindings: yes
<br>
Fortran77 bindings: yes (all)
<br>
Fortran90 bindings: yes
<br>
Fortran90 bindings size: small
<br>
C compiler: gcc
<br>
C compiler absolute: /usr/bin/gcc
<br>
C compiler family name: GNU
<br>
C compiler version: 4.4.7
<br>
C++ compiler: g++
<br>
C++ compiler absolute: /usr/bin/g++
<br>
Fortran77 compiler: gfortran
<br>
Fortran77 compiler abs: /usr/bin/gfortran
<br>
Fortran90 compiler: gfortran
<br>
Fortran90 compiler abs: /usr/bin/gfortran
<br>
C profiling: yes
<br>
C++ profiling: yes
<br>
Fortran77 profiling: yes
<br>
Fortran90 profiling: yes
<br>
C++ exceptions: no
<br>
Thread support: posix (MPI_THREAD_MULTIPLE: no, progress: no)
<br>
Sparse Groups: no
<br>
Internal debug support: no
<br>
MPI interface warnings: no
<br>
MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
libltdl support: yes
<br>
Heterogeneous support: no
<br>
mpirun default --prefix: no
<br>
MPI I/O support: yes
<br>
MPI_WTIME support: gettimeofday
<br>
Symbol vis. support: yes
<br>
Host topology support: yes
<br>
MPI extensions: affinity example
<br>
FT Checkpoint support: no (checkpoint thread: no)
<br>
VampirTrace support: yes
<br>
MPI_MAX_PROCESSOR_NAME: 256
<br>
MPI_MAX_ERROR_STRING: 256
<br>
MPI_MAX_OBJECT_NAME: 64
<br>
MPI_MAX_INFO_KEY: 36
<br>
MPI_MAX_INFO_VAL: 256
<br>
MPI_MAX_PORT_NAME: 1024
<br>
MPI_MAX_DATAREP_STRING: 128
<br>
MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
<br>
MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
<br>
MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
<br>
MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
<br>
MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA memory: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA carto: file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: mmap (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: posix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA shmem: sysv (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA timer: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA installdirs: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA installdirs: config (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA sysinfo: linux (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA hwloc: hwloc132 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA dpm: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA allocator: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: inter (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: sync (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA coll: tuned (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA io: romio (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: fake (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA mpool: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: bfo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: csum (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA pml: v (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA bml: r2 (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rcache: vma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: self (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: sm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA btl: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA topo: unity (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA osc: rdma (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: orted (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA iof: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA oob: tcp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA odls: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: loadleveler (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ras: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: load_balance (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rmaps: topo (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA rml: oob (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: binomial (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: cm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: direct (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: linear (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: radix (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA routed: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA plm: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA plm: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA filem: rsh (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA errmgr: default (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: env (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: hnp (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: singleton (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slave (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slurm (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: slurmd (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA ess: tool (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA grpcomm: hier (MCA v2.0, API v2.0, Component v1.6.4)
<br>
MCA notifier: command (MCA v2.0, API v1.0, Component v1.6.4)
<br>
MCA notifier: syslog (MCA v2.0, API v1.0, Component v1.6.4)
<br>
<p><p><p><p>(2013/05/16 9:12), Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I am unable to replicate your error -- 1.6.4 has MPI_REDUCE defined on MPI_SUM properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you absolutely sure you're using OMPI 1.6.4 on all nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun ... ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (insert whatever hostfile and -np value you're using for your fortran test) and see what is reported as the OMPI version from other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2013, at 7:46 AM, Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I using Ver, 1.6.4 in all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (2013/05/15 7:10), Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you sure that you have exactly the same version of Open MPI on all your nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 14, 2013, at 11:39 AM, Hayato KUNIIE &lt;kuni255_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello I'm kuni255
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_REDUCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then, Error occured.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This cluster system consist of one head node and 2 slave nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And sharing home directory in head node by NFS. so Open MPI is installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I test this program on only head node, program is run correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and output result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But When I test this program on only slave node, same error occured.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please tell me, good idea : )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operation MPI_SUM is not defined on the MPI_INTEGER datatype
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bwslv01:30793] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun has exited due to process rank 1 with PID 30793 on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node bwslv01 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bwhead.clnet:02147] 1 more process has sent help message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bwhead.clnet:02147] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran90 source code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameter(nmax=12)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integer n(nmax)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call mpi_comm_size(MPI_COMM_WORLD, isize, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call mpi_comm_rank(MPI_COMM_WORLD, irank, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ista=irank*(nmax/isize) + 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iend=ista+(nmax/isize-1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isum=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do i=1,nmax
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; n(i) = i
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isum = isum + n(i)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; end do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call mpi_reduce(isum, itmp, 1, MPI_INTEGER, MPI_SUM,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; 0, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if (irank == 0) then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isum=itmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WRITE(*,*) isum
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; end
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21913.php">Reza Bakhshayeshi: "[OMPI users] distributed file system"</a>
<li><strong>Previous message:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<li><strong>In reply to:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
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
