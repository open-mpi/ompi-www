<?
$subject_val = "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 01:00:47 2008" -->
<!-- isoreceived="20080220060047" -->
<!-- sent="Wed, 20 Feb 2008 15:00:44 +0900" -->
<!-- isosent="20080220060044" -->
<!-- name="yoshi.plala" -->
<!-- email="ilovefd_at_[hidden]" -->
<!-- subject="[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2" -->
<!-- id="B23A49416E544B0CA01D51E0D2D0539C_at_INDIRECT64" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2<br>
<strong>From:</strong> yoshi.plala (<em>ilovefd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 01:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>Previous message:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>Reply:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear sirs
<br>
<p>I am a beginer with openmpi-1.2.3 (and opensuse10.2).
<br>
But, I have some experience with mpich-1.2 and FreeBSD5.4.
<br>
<p>I am struggling with them to build scalapack, parallel-octave and matlab on.
<br>
<p>I succeeded in installing intel fortran/c 10.0.026 and openMPI-1.2.3, now.
<br>
<p>like belows
<br>
<p>#mkdir build
<br>
#cd build
<br>
#../configure --prefix=/opt/openmpi/1.2.3 --enable-mpi-threads  CC=icc 
<br>
CXX=icpc F77=ifort FC=ifort
<br>
#make all
<br>
#make install
<br>
<p>test_at_linux-4e1d:~&gt; set |grep LD_
<br>
DYLD_LIBRARY_PATH=/opt/intel/cce/10.0.026/lib:/opt/intel/fce/10.0.026/lib
<br>
LD_LIBRARY_PATH=/opt/openmpi/1.2.3/lib:/opt/intel/cce/10.0.026/lib:/opt/intel/fc
<br>
e/10.0.026/lib
<br>
LD_RUN_PATH=/opt/openmpi/1.2.3/lib:/opt/intel/cce/10.0.026/lib:/opt/intel/fce/10
<br>
.0.026/lib:/usr/lib64:/usr/lib64/gcc/x86_64-suse-linux/4.1.2
<br>
test_at_linux-4e1d:~&gt;
<br>
<p><p>hello_c worked without any trouble.
<br>
test_at_linux-4e1d:~/openmpi-1.2.3/examples&gt; mpirun -np 8 hello_c -hostfile 
<br>
/opt/o
<br>
penmpi/1.2.3/etc/openmpi-default-hostfile
<br>
Hello, world, I am 7 of 8
<br>
Hello, world, I am 6 of 8
<br>
Hello, world, I am 4 of 8
<br>
Hello, world, I am 3 of 8
<br>
Hello, world, I am 5 of 8
<br>
Hello, world, I am 0 of 8
<br>
Hello, world, I am 2 of 8
<br>
Hello, world, I am 1 of 8
<br>
test_at_linux-4e1d:~/openmpi-1.2.3/examples&gt;
<br>
<p>But, my bench mark program doesn't work. Are there any mistake in my 
<br>
configuration?.
<br>
<p>test_at_linux-4e1d:~/himenoBMT/mpi&gt; ls
<br>
README.txt  a.out  himenoBMTxpr.f  param.h  paramset.sh
<br>
test_at_linux-4e1d:~/himenoBMT/mpi&gt; mpirun -np 8 ./a.out -hostfile 
<br>
/opt/openmpi/1.
<br>
2.3/etc/openmpi-default-hostfile
<br>
./a.out: error while loading shared libraries: libgfortran.so.1: cannot open 
<br>
sha
<br>
red object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libgfortran.so.1: cannot open 
<br>
sha
<br>
red object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libgfortran.so.1: cannot open 
<br>
sha
<br>
red object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libgfortran.so.1: cannot open 
<br>
sha
<br>
red object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libgfortran.so.1: cannot open 
<br>
sha
<br>
red object file: No such file or directory
<br>
./a.out: error while loading shared libraries: libgfortran.so.1: cannot open 
<br>
sha
<br>
red object file: No such file or directory
<br>
<p>[1]+  Stopped                 mpirun -np 8 ./a.out -hostfile 
<br>
/opt/openmpi/1.2.3/
<br>
etc/openmpi-default-hostfile
<br>
test_at_linux-4e1d:~/himenoBMT/mpi&gt;
<br>
<p>linux-4e1d:/home/test/himenoBMT/mpi # find / -name libgfortran.so.1 -print
<br>
/usr/lib64/libgfortran.so.1
<br>
/usr/lib/libgfortran.so.1
<br>
/usr/local/matlab75/sys/os/glnxa64/libgfortran.so.1
<br>
linux-4e1d:/home/test/himenoBMT/mpi #
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>Previous message:</strong> <a href="5044.php">George Bosilca: "Re: [OMPI users] Can't get OPENMPI to run parallel job with	Myrinet/GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>Reply:</strong> <a href="5046.php">Doug Reeder: "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
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
