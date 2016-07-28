<?
$subject_val = "[OMPI users] Building OpenMPI 1.8.7 on XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 19:35:13 2015" -->
<!-- isoreceived="20150724233513" -->
<!-- sent="Fri, 24 Jul 2015 19:35:12 -0400" -->
<!-- isosent="20150724233512" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI 1.8.7 on XC30" -->
<!-- id="CADKQjjeh8n+nH1PATnSwzoyx7SFq3U441cJb1q-UMq9vuaDuWg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI 1.8.7 on XC30<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-24 19:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27325.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to build OpenMPI 1.8.7 on a Cray XC30 (Edison at NERSC). I've tried
<br>
various configuration options, but I am always encountering either OpenMPI
<br>
build errors, application build errors, or run-time errors.
<br>
<p>I'm currently looking at &lt;
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>&gt;, which
<br>
seems to describe my case. I'm now configuring OpenMPI without any options,
<br>
except setting compilers to clang/gfortran and pointing it to a self-built
<br>
hwloc. For completeness, here are my configure options as recorded by
<br>
config.status:
<br>
<p>'/project/projectdirs/m152/schnette/edison/software/src/openmpi-1.8.7/src/openmpi-1.8.7/configure'
<br>
&nbsp;'--prefix=/project/projectdirs/m152/schnette/edison/software/openmpi-1.8.7'
<br>
'--with-hwloc=/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0'
<br>
'--disable-vt'
<br>
'CC=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang'
<br>
'CXX=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang++'
<br>
'FC=/project/projectdirs/m152/schnette/edison/software/gcc-5.2.0/bin/wrap-gfortran'
<br>
'CFLAGS=-I/opt/ofed/include
<br>
-I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
<br>
'CXXFLAGS=-I/opt/ofed/include
<br>
-I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
<br>
'LDFLAGS=-L/opt/ofed/lib64
<br>
-L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib
<br>
-Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
<br>
'LIBS=-lhwloc -lpthread -lpthread'
<br>
'--with-wrapper-ldflags=-L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib
<br>
-Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
<br>
'--with-wrapper-libs=-lhwloc -lpthread'
<br>
<p>This builds and installs fine, and works when running on a single node.
<br>
However, multi-node runs are stalling: The queue starts the job, but mpirun
<br>
produces no output. The &quot;-v&quot; option to mpirun doesn't help.
<br>
<p>When I use aprun instead of mpirun to start my application, then all
<br>
processes think they are rank 0.
<br>
<p>Do you have any pointers for how to debug this?
<br>
<p>-erik
<br>
<p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27324/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27325.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27323.php">Ralph Castain: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
