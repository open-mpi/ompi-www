<?
$subject_val = "[OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 00:01:36 2012" -->
<!-- isoreceived="20120909040136" -->
<!-- sent="Sun, 9 Sep 2012 12:01:26 +0800" -->
<!-- isosent="20120909040126" -->
<!-- name="&#214;&#211;&#179;&#201;" -->
<!-- email="ggdhzdx_at_[hidden]" -->
<!-- subject="[OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]" -->
<!-- id="tencent_444B6042730F203C505182E2_at_qq.com" -->
<!-- charset="gb18030" -->
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
<strong>Subject:</strong> [OMPI users] hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call. [MPI_INIT]<br>
<strong>From:</strong> &#214;&#211;&#179;&#201; (<em>ggdhzdx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-09 00:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20164.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I want to install a 64-bit vision openmpi on a cluster. This cluster already have a 32-bit openmpi-1.4.3 installed on it. I'm not administrator. So I can't uninstall the previous version. an I installed the 64 bit openmpi in my homo directory.
<br>
the configure and make step seem errorless.
<br>
when I set the environment variables and use the new installed openmpi(version 1.6.1, 1.4.3, 1.5.5 tested) to compile and run example files. I get the following error:
<br>

<br>

<br>

<br>

<br>
**********************************************************************************************
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; make
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
mpicc -g    ring_c.c   -o ring_c
<br>
mpicc -g    connectivity_c.c   -o connectivity_c
<br>
make[1]: Entering directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
mpic++ -g    hello_cxx.cc   -o hello_cxx
<br>
mpic++ -g    ring_cxx.cc   -o ring_cxx
<br>
make[1]: Leaving directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
make[1]: Entering directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
mpif77 -g hello_f77.f -o hello_f77
<br>
mpif77 -g ring_f77.f -o ring_f77
<br>
make[1]: Leaving directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
make[1]: Entering directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
mpif90 -g hello_f90.f90 -o hello_f90
<br>
hello_f90.f90(17): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_INIT]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
---------^
<br>
hello_f90.f90(18): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_COMM_RANK]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
---------^
<br>
hello_f90.f90(19): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_COMM_SIZE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
<br>
---------^
<br>
hello_f90.f90(21): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_FINALIZE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
---------^
<br>
compilation aborted for hello_f90.f90 (code 1)
<br>
make[1]: *** [hello_f90] Error 1
<br>
make[1]: Leaving directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
make: *** [all] Error 2
<br>

<br>

<br>

<br>
*****************************************************************************************************
<br>

<br>

<br>

<br>

<br>
and if i try to run the comiled program I will get the following result&#163;&#186;
<br>
****************************************************************************************************
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; mpirun -np 4 hello_f77
<br>
&nbsp;Hello, world, I am            0  of            4
<br>
&nbsp;Hello, world, I am            0  of            4
<br>
&nbsp;Hello, world, I am            0  of            4
<br>
&nbsp;Hello, world, I am            0  of            4
<br>
&nbsp;zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; mpirun -np 4 ring_c
<br>
Process 0 sending 10 to 1, tag 201 (4 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 1 exiting
<br>
Process 2 exiting
<br>
Process 3 exiting
<br>
*************************************************************************************************
<br>

<br>

<br>
following are my environment set in ~/.bashrc
<br>
****************************************************************
<br>
export MPI_ROOT=/dawnfs/users/zhongc/openmpi-1.4.5
<br>
export LD_LIBRARY_PATH=/dawnfs/users/zhongc/openmpi-1.4.5/lib:$LD_LIBRARY_PATH
<br>
export LD_LIBRARY_PATH=/dawnfs/users/zhongc/openmpi-1.4.5:$LD_LIBRARY_PATH
<br>
export OMPI_MPIF77=&quot;ifort&quot;
<br>
export OMPI_MPIFC=&quot;ifort&quot;
<br>
export OMPI_MPICC=&quot;icc&quot;
<br>
export OMPI_MPICXX=&quot;icc&quot;
<br>
export PATH=$MPI_ROOT/bin:$PATH
<br>

<br>
******************************************************************
<br>

<br>

<br>
if I use the openmpi that originally installed in this cluster. every thing is fine:
<br>
***********************************************************************************
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; which mpirun
<br>
/dawnfs/software/mpi/openmpi1.4.3-intel/bin/mpirun
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; make clean
<br>
rm -f hello_c hello_cxx hello_f77 hello_f90 ring_c ring_cxx ring_f77 ring_f90 connectivity_c *~ *.o
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; make
<br>
mpicc -g    hello_c.c   -o hello_c
<br>
mpicc -g    ring_c.c   -o ring_c
<br>
mpicc -g    connectivity_c.c   -o connectivity_c
<br>
make[1]: Entering directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
mpic++ -g    hello_cxx.cc   -o hello_cxx
<br>
mpic++ -g    ring_cxx.cc   -o ring_cxx
<br>
make[1]: Leaving directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
make[1]: Entering directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
mpif77 -g hello_f77.f -o hello_f77
<br>
mpif77 -g ring_f77.f -o ring_f77
<br>
make[1]: Leaving directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
make[1]: Entering directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
mpif90 -g hello_f90.f90 -o hello_f90
<br>
mpif90 -g ring_f90.f90 -o ring_f90
<br>
make[1]: Leaving directory `/dawnfs/users/zhongc/openmpi-1.4.5-install/examples'
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; mpirun -np 4 hello_f77
<br>
&nbsp;Hello, world, I am            1  of            4
<br>
&nbsp;Hello, world, I am            0  of            4
<br>
&nbsp;Hello, world, I am            2  of            4
<br>
&nbsp;Hello, world, I am            3  of            4
<br>
zhongc_at_node100:~/openmpi-1.4.5-install/examples&gt; mpirun -np 4 ring_c
<br>
Process 0 sending 10 to 1, tag 201 (4 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 1 exiting
<br>
Process 2 exiting
<br>
Process 3 exiting
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>

<br>
********************************************************************************
<br>

<br>

<br>
version I have tried 1.4.5, 1.6.1. 1.5.5
<br>
here are the configures I have tried
<br>
**************************************************
<br>
--prefix=/dawnfs/users/zhongc/openmpi-1.4.5 CXX=icpc CC=icc F77=ifort FC=ifort FFLAGS=-i8 FCFLAGS=-i8
<br>
--prefix=/dawnfs/users/zhongc/openmpi-1.4.5 CXX=icpc CC=icc F77=ifort FC=ifort FFLAGS=-i8 FCFLAGS=-i8 --without-tm --without-lsf
<br>
--prefix=/dawnfs/users/zhongc/openmpi-1.4.5 CXX=icpc CC=icc F77=ifort FC=ifort FFLAGS=-i8 FCFLAGS=-i8 --enable-static --disable-shared --with-mpi-f90-size=large
<br>
--prefix=/dawnfs/users/zhongc/openmpi-1.4.5 CXX=g++ CC=gcc F77=gfortran FC=gfortran FFLAGS=&quot;-m64 -fdefault-integer-8&quot; FCFLAGS=&quot;-m64 -fdefault-integer-8&quot; CFLAGS=-m64 CXXFLAGS=-m64
<br>

<br>
*********************************************************
<br>

<br>

<br>
gcc or icc i have used
<br>
**********************************************************************************
<br>
zhongc_at_node100:~/openmpi-1.4.5-install&gt; gcc -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=gcc
<br>
COLLECT_LTO_WRAPPER=/dawnfs/users/zhongc/gcc-4.7.0/libexec/gcc/x86_64-unknown-linux-gnu/4.7.0/lto-wrapper
<br>
Target: x86_64-unknown-linux-gnu
<br>
Configured with: ../configure --prefix=/dawnfs/users/zhongc/gcc-4.7.0
<br>
Thread model: posix
<br>
gcc version 4.7.0 (GCC) 
<br>
zhongc_at_node100:~/openmpi-1.4.5-install&gt; icc -V
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.0.3.174 Build 20110309
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
FOR NON-COMMERCIAL USE ONLY
<br>
******************************************************************************
<br>

<br>

<br>

<br>
the ompi_info --all  output of system openmpi (name old-ompi-info) and my openmpi (name new-ompi-info) and config.log are in the attachment
<br>

<br>

<br>
this have tortured me for several days, can anybody helpme ?<br>
<p>
<p>
<p>
gICAgyo
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20163/configAndInfo.tar.bz2">configAndInfo.tar.bz2</a>
</ul>
<!-- attachment="configAndInfo.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20164.php">Yevgeny Kliteynik: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
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
