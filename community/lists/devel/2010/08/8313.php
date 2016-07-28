<?
$subject_val = "[OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 10:03:59 2010" -->
<!-- isoreceived="20100824140359" -->
<!-- sent="Tue, 24 Aug 2010 15:03:36 +0200" -->
<!-- isosent="20100824130336" -->
<!-- name="Oliver Deppert" -->
<!-- email="Oliver.Deppert_at_[hidden]" -->
<!-- subject="[OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts" -->
<!-- id="4C73C328.4070304_at_stud.tu-darmstadt.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] openMPI 1.4.2: mpi_write fails on NFSv3 crossmounts<br>
<strong>From:</strong> Oliver Deppert (<em>Oliver.Deppert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 09:03:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
General informations:
<br>
------------------------------------
<br>
3 node Opteron cluster, 24CPUs, Melanox Infiniband 10Gb interconnect
<br>
Debian Lenny 5.0
<br>
self build kernel from kernel.org: 2.6.32.12, all NFS functions 
<br>
available from kernel side
<br>
self build NFS-utils 1.2.2 from debian source of sid: nfs-kernel-server, 
<br>
nfs-common
<br>
<p>nfs-server with working lockd
<br>
fnctl() and locking is available on all nfs-clients, tested with 
<br>
perl-script (attached)
<br>
<p>openMPI 1.4.2 (build with GNU 4.3.2)
<br>
configure options:
<br>
./configure --prefix=/opt/openMPI_gnu_4.3.2 --sysconfdir=/etc 
<br>
--localstatedir=/var --with-libnuma=/usr --with-libnuma-libdir=/usr/lib 
<br>
--enable-mpirun-prefix-by-default --enable-sparse-groups --enable-static 
<br>
--enable-cxx-exceptions --with-wrapper-cflags='-O3 -march=opteron' 
<br>
--with-wrapper-cxxflags='-O3 -march=opteron' --with-wrapper-fflags='-O3 
<br>
-march=opteron' --with-wrapper-fcflags='-O3 -march=opteron' 
<br>
--with-openib --with-gnu-ld CFLAGS='-O3 -march=opteron' CXXFLAGS='-O3 
<br>
-march=opteron' FFLAGS='-O3 -march=opteron' FCFLAGS='-O3 -march=opteron'
<br>
<p>=======================================================================================
<br>
<p>Dear openMPI developers,
<br>
<p>I've found a bug in the current stable release of openMPI 1.4.2 which is 
<br>
related to the MPI_WRITE function in combination with the execution on a 
<br>
NFS-v3-crossmount. I've attached a small Fortran code-snip (testmpi.f), 
<br>
which uses mpi_write to create a file &quot;test.dat&quot; which contains 
<br>
{1,2,3,4,5,6} in binary, MPI_REALS written from every mpi-node executed 
<br>
on, in the right displacement to every node.
<br>
<p>When I execute this code on a glusterFS share, everthing works like a 
<br>
charme....no problems at all....
<br>
<p>The Problem is, when I try to compile and execute this program for two 
<br>
nodes on an NFS-crossmount with openMPI, I get the following MPI error:
<br>
[ppclus02:23440] *** An error occurred in MPI_Bcast
<br>
[ppclus02:23440] *** on communicator MPI COMMUNICATOR 3 DUP FROM 0
<br>
[ppclus02:23440] *** MPI_ERR_TRUNCATE: message truncated
<br>
[ppclus02:23440] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpiexec has exited due to process rank 1 with PID 23440 on
<br>
node 192.168.11.2 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpiexec (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>My first educated guess was, that my NFS-crossmounts aren't capable to 
<br>
make use of fnct() to lock the file needed by MPI_WRITE. So, i gave a 
<br>
try on the following perl script (lock.pl). The result was: fnctl() and 
<br>
NFS-file-locking works...
<br>
<p>In comparison, I also tried the recent unstable version of MPICH2 v1.3a2 
<br>
on the same NFS-crossmount. With MPICH2 it works also without any 
<br>
problems on NFS-v3.
<br>
<p>Thanks for your help, I remain in
<br>
<p>best regards,
<br>
Oliver Deppert
<br>
<p><p>lock.pl (to test NFS fnctl()-file locking)
<br>
-----------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<p>#!/usr/bin/perl
<br>
&nbsp;&nbsp;use Fcntl;
<br>
&nbsp;&nbsp;open FH, &quot;&gt;locktest.lock&quot; or die &quot;Cannot open $fn: $!&quot;;
<br>
&nbsp;&nbsp;print &quot;Testing fcntl...\n&quot;;
<br>
&nbsp;&nbsp;@list = (F_WRLCK,0,0,0,0); # exclusive write lock, entire file
<br>
&nbsp;&nbsp;$struct = pack(&quot;SSLLL&quot;,@list);
<br>
&nbsp;&nbsp;fcntl(FH,&amp;F_SETLKW,$struct) or die(&quot;cannot lock because: $!\n&quot;);
<br>
<p>------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<p>testmpi.f (fortran 90 code-snip to test mpi_write on NFS-v3)
<br>
-----------------------------------------------------------------------------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program WRITE_FILE
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer info,pec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer npe,mpe,mtag
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: realsize,file,displace,displaceloc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(kind=MPI_OFFSET_KIND) :: disp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: status(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind=4) :: locidx(6)
<br>
<p><p>c INITIALIZATION
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,npe,info)      call 
<br>
MPI_COMM_RANK(MPI_COMM_WORLD,mpe,info)
<br>
<p><p>c routine
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtag=123
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displace=6
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!send data offset
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do pec=0,mpe-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_SEND(displace,1,MPI_INTEGER,
<br>
&amp;           pec,mtag,MPI_COMM_WORLD,info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do pec=mpe+1,npe-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_SEND(displace,1,MPI_INTEGER,
<br>
&amp;           pec,mtag,MPI_COMM_WORLD,info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displaceloc=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!get data offset
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do pec=0,mpe-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_RECV(displace,1,MPI_INTEGER,pec,mtag,
<br>
&amp;                    MPI_COMM_WORLD,status,info)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displaceloc=displaceloc+displace
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_TYPE_EXTENT(MPI_REAL,realsize,info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disp=displaceloc*realsize
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!open file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FILE_OPEN(MPI_COMM_WORLD,'test.dat',
<br>
&amp;   MPI_MODE_WRONLY+MPI_MODE_CREATE,MPI_INFO_NULL,file,info)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!set file view (displacement in bytes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FILE_SET_VIEW(file,disp,MPI_REAL,
<br>
&amp;   MPI_REAL,'native',MPI_INFO_NULL,info)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!write out data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locidx(1)=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locidx(2)=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locidx(3)=3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locidx(4)=4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locidx(5)=5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locidx(6)=6
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FILE_WRITE(file,locidx,6,MPI_REAL,
<br>
&amp;        status,info)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!wait until all processes are done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!sync-barrier-sync recommended by mpi-consortium to guarantee
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!file consistency
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!<a href="http://www.mpi-forum.org/docs/mpi-20-html/node215.htm">http://www.mpi-forum.org/docs/mpi-20-html/node215.htm</a> (2010)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_SYNC(file,info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BARRIER(MPI_COMM_WORLD,info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_FILE_SYNC(file,info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!close file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_CLOSE(file,info)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(info)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>------------------------------------------------------------------------------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8314.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8312.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
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
