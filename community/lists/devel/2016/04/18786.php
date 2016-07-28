<?
$subject_val = "[OMPI devel] seg fault when using yalla, XRC, and yalla";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 16:41:47 2016" -->
<!-- isoreceived="20160419204147" -->
<!-- sent="Tue, 19 Apr 2016 14:41:44 -0600" -->
<!-- isosent="20160419204144" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="[OMPI devel] seg fault when using yalla, XRC, and yalla" -->
<!-- id="57169808.1090801_at_lanl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] seg fault when using yalla, XRC, and yalla<br>
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 16:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18785.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have been investigating using XRC on a cluster with a mellanox 
<br>
interconnect. I have found that in a certain situation I get a seg 
<br>
fault. I am using 1.10.2 compiled with gcc 5.3.0, and the simplest 
<br>
configure line that I have found that still results in the seg fault is 
<br>
as follows:
<br>
<p>$&gt; ./configure --with-hcoll --with-mxm --prefix=...
<br>
<p>I do have mxm 3.4.3065 and hcoll 3.3.768 installed in to system space 
<br>
(/usr/lib64). If I use '--without-hcoll --without-mxm,' the seg fault 
<br>
does not happen.
<br>
<p>The seg fault happens even when using examples/hello_c.c, so here is an 
<br>
example of the seg fault using it:
<br>
<p>$&gt; mpicc hello_c.c -o hello_c.x
<br>
$&gt; mpirun -n 1 ./hello_c.x
<br>
Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI 
<br>
dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev: 
<br>
v1.10.1-145-g799148f, Jan 21, 2016, 135)
<br>
$&gt; mpirun -n 1 -mca btl_openib_receive_queues 
<br>
X,4096,1024:X,12288,512:X,65536,512
<br>
Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI 
<br>
dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev: 
<br>
v1.10.1-145-g799148f, Jan 21, 2016, 135)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 22819 on node mu0001 exited 
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>The seg fault happens no matter the number of ranks. I have tried the 
<br>
above command with '-mca pml_base_verbose,' and it shows that I am using 
<br>
the yalla pml:
<br>
<p>$&gt; mpirun -n 1 -mca btl_openib_receive_queues 
<br>
X,4096,1024:X,12288,512:X,65536,512 -mca pml_base_verbose 100 ./hello_c.x
<br>
...output snipped...
<br>
[mu0001.localdomain:22825] select: component cm not selected / finalized
<br>
[mu0001.localdomain:22825] select: component ob1 not selected / finalized
<br>
[mu0001.localdomain:22825] select: component yalla selected
<br>
...output snipped...
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 22825 on node mu0001 exited 
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Interestingly enough, if I tell mpirun what pml to use, the seg fault 
<br>
goes away. The following command does not get the seg fault:
<br>
<p>$&gt; mpirun -n 1 -mca btl_openib_receive_queues 
<br>
X,4096,1024:X,12288,512:X,65536,512 -mca pml yalla ./hello_c.x
<br>
<p>Passing either ob1 or cm to '-mca pml' also works. So it seems that the 
<br>
seg fault comes about when the yalla pml is chosen by default, when 
<br>
mxm/hcoll is involved, and using XRC. I'm not sure if mxm is to blame, 
<br>
however, as using '-mca pml cm -mca mtl mxm' with the XRC parameters 
<br>
doesn't throw the seg fault.
<br>
<p>Other information...
<br>
OS: RHEL 6.7-based (TOSS)
<br>
OpenFabrics: RedHat provided
<br>
Kernel: 2.6.32-573.8.1.2chaos.ch5.4.x86_64
<br>
Config.log and 'ompi_info --all' are in the tarball ompi.tar.bz2 which 
<br>
is attached.
<br>
<p>Is there something else I should be doing with the yalla pml when using 
<br>
XRC? Regardless, I hope reporting the seg fault is useful.
<br>
<p>Thanks,
<br>
David
<br>
<p><pre>
-- 
David Shrader
HPC-ENV High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov

</pre>
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18786/ompi.tar.bz2">ompi.tar.bz2</a>
</ul>
<!-- attachment="ompi.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>Previous message:</strong> <a href="18785.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
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
