<?
$subject_val = "Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 01:53:14 2008" -->
<!-- isoreceived="20080220065314" -->
<!-- sent="Tue, 19 Feb 2008 22:48:09 -0800" -->
<!-- isosent="20080220064809" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2" -->
<!-- id="D6CAD01D-B6E1-4975-9240-963957CADDF2_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B23A49416E544B0CA01D51E0D2D0539C_at_INDIRECT64" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 01:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<li><strong>Previous message:</strong> <a href="5045.php">yoshi.plala: "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>In reply to:</strong> <a href="5045.php">yoshi.plala: "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoshi,
<br>
<p>Is the appropriate verison of libgfortran.so.1 (32 bit or 64 bit in  
<br>
your LD_LIBRARY_PATH. what is the out put from
<br>
ldd ./a.out
<br>
<p>The version of libgfortran.so.1 it lists needs to be in your  
<br>
LD_LIBRARY_PATH
<br>
<p>what does file ./a.out say if it is an AMD x86-64 then you should  
<br>
put /usr/lib64 in your LD_LIBRARY_PATH otherwise put /usr/lib in your  
<br>
LD_LIBRARY_PATH.
<br>
<p>Doug Reeder
<br>
<p>On Feb 19, 2008, at 10:00 PM, yoshi.plala wrote:
<br>
<p><span class="quotelev1">&gt; Dear sirs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a beginer with openmpi-1.2.3 (and opensuse10.2).
</span><br>
<span class="quotelev1">&gt; But, I have some experience with mpich-1.2 and FreeBSD5.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am struggling with them to build scalapack, parallel-octave and  
</span><br>
<span class="quotelev1">&gt; matlab on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I succeeded in installing intel fortran/c 10.0.026 and  
</span><br>
<span class="quotelev1">&gt; openMPI-1.2.3, now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; like belows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #mkdir build
</span><br>
<span class="quotelev1">&gt; #cd build
</span><br>
<span class="quotelev1">&gt; #../configure --prefix=/opt/openmpi/1.2.3 --enable-mpi-threads  CC=icc
</span><br>
<span class="quotelev1">&gt; CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; #make all
</span><br>
<span class="quotelev1">&gt; #make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~&gt; set |grep LD_
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH=/opt/intel/cce/10.0.026/lib:/opt/intel/fce/ 
</span><br>
<span class="quotelev1">&gt; 10.0.026/lib
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/openmpi/1.2.3/lib:/opt/intel/cce/10.0.026/lib:/ 
</span><br>
<span class="quotelev1">&gt; opt/intel/fc
</span><br>
<span class="quotelev1">&gt; e/10.0.026/lib
</span><br>
<span class="quotelev1">&gt; LD_RUN_PATH=/opt/openmpi/1.2.3/lib:/opt/intel/cce/10.0.026/lib:/opt/ 
</span><br>
<span class="quotelev1">&gt; intel/fce/10
</span><br>
<span class="quotelev1">&gt; .0.026/lib:/usr/lib64:/usr/lib64/gcc/x86_64-suse-linux/4.1.2
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello_c worked without any trouble.
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~/openmpi-1.2.3/examples&gt; mpirun -np 8 hello_c - 
</span><br>
<span class="quotelev1">&gt; hostfile
</span><br>
<span class="quotelev1">&gt; /opt/o
</span><br>
<span class="quotelev1">&gt; penmpi/1.2.3/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 8
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~/openmpi-1.2.3/examples&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, my bench mark program doesn't work. Are there any mistake in my
</span><br>
<span class="quotelev1">&gt; configuration?.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~/himenoBMT/mpi&gt; ls
</span><br>
<span class="quotelev1">&gt; README.txt  a.out  himenoBMTxpr.f  param.h  paramset.sh
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~/himenoBMT/mpi&gt; mpirun -np 8 ./a.out -hostfile
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.
</span><br>
<span class="quotelev1">&gt; 2.3/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libgfortran.so.1:  
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; sha
</span><br>
<span class="quotelev1">&gt; red object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libgfortran.so.1:  
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; sha
</span><br>
<span class="quotelev1">&gt; red object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libgfortran.so.1:  
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; sha
</span><br>
<span class="quotelev1">&gt; red object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libgfortran.so.1:  
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; sha
</span><br>
<span class="quotelev1">&gt; red object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libgfortran.so.1:  
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; sha
</span><br>
<span class="quotelev1">&gt; red object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ./a.out: error while loading shared libraries: libgfortran.so.1:  
</span><br>
<span class="quotelev1">&gt; cannot open
</span><br>
<span class="quotelev1">&gt; sha
</span><br>
<span class="quotelev1">&gt; red object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]+  Stopped                 mpirun -np 8 ./a.out -hostfile
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.3/
</span><br>
<span class="quotelev1">&gt; etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; test_at_linux-4e1d:~/himenoBMT/mpi&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linux-4e1d:/home/test/himenoBMT/mpi # find / -name libgfortran.so.1  
</span><br>
<span class="quotelev1">&gt; -print
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libgfortran.so.1
</span><br>
<span class="quotelev1">&gt; /usr/lib/libgfortran.so.1
</span><br>
<span class="quotelev1">&gt; /usr/local/matlab75/sys/os/glnxa64/libgfortran.so.1
</span><br>
<span class="quotelev1">&gt; linux-4e1d:/home/test/himenoBMT/mpi #
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5047.php">Neeraj Chourasia: "[OMPI users] Openmpi with SGE"</a>
<li><strong>Previous message:</strong> <a href="5045.php">yoshi.plala: "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
<li><strong>In reply to:</strong> <a href="5045.php">yoshi.plala: "[OMPI users] shared libraly problem with openmpi-1.2.3 and opensuse10.2"</a>
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
