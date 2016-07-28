<?
$subject_val = "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 07:53:07 2016" -->
<!-- isoreceived="20160420115307" -->
<!-- sent="Wed, 20 Apr 2016 07:53:06 -0400" -->
<!-- isosent="20160420115306" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] seg fault when using yalla, XRC, and yalla" -->
<!-- id="CAG4F6z87cY=CN2HuBGF+DOQakTbwbdtSO3qu=d1Ma+AGNqWirA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57169808.1090801_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] seg fault when using yalla, XRC, and yalla<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 07:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18786.php">David Shrader: "[OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, David
<br>
<p>We are looking into your report.
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>On Tue, Apr 19, 2016 at 4:41 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been investigating using XRC on a cluster with a mellanox
</span><br>
<span class="quotelev1">&gt; interconnect. I have found that in a certain situation I get a seg fault. I
</span><br>
<span class="quotelev1">&gt; am using 1.10.2 compiled with gcc 5.3.0, and the simplest configure line
</span><br>
<span class="quotelev1">&gt; that I have found that still results in the seg fault is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; ./configure --with-hcoll --with-mxm --prefix=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do have mxm 3.4.3065 and hcoll 3.3.768 installed in to system space
</span><br>
<span class="quotelev1">&gt; (/usr/lib64). If I use '--without-hcoll --without-mxm,' the seg fault does
</span><br>
<span class="quotelev1">&gt; not happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The seg fault happens even when using examples/hello_c.c, so here is an
</span><br>
<span class="quotelev1">&gt; example of the seg fault using it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; mpicc hello_c.c -o hello_c.x
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -n 1 ./hello_c.x
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev1">&gt; dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev1">&gt; v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt; X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev1">&gt; dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev1">&gt; v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 22819 on node mu0001 exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The seg fault happens no matter the number of ranks. I have tried the
</span><br>
<span class="quotelev1">&gt; above command with '-mca pml_base_verbose,' and it shows that I am using
</span><br>
<span class="quotelev1">&gt; the yalla pml:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt; X,4096,1024:X,12288,512:X,65536,512 -mca pml_base_verbose 100 ./hello_c.x
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt; [mu0001.localdomain:22825] select: component cm not selected / finalized
</span><br>
<span class="quotelev1">&gt; [mu0001.localdomain:22825] select: component ob1 not selected / finalized
</span><br>
<span class="quotelev1">&gt; [mu0001.localdomain:22825] select: component yalla selected
</span><br>
<span class="quotelev1">&gt; ...output snipped...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 22825 on node mu0001 exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly enough, if I tell mpirun what pml to use, the seg fault goes
</span><br>
<span class="quotelev1">&gt; away. The following command does not get the seg fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt; X,4096,1024:X,12288,512:X,65536,512 -mca pml yalla ./hello_c.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Passing either ob1 or cm to '-mca pml' also works. So it seems that the
</span><br>
<span class="quotelev1">&gt; seg fault comes about when the yalla pml is chosen by default, when
</span><br>
<span class="quotelev1">&gt; mxm/hcoll is involved, and using XRC. I'm not sure if mxm is to blame,
</span><br>
<span class="quotelev1">&gt; however, as using '-mca pml cm -mca mtl mxm' with the XRC parameters
</span><br>
<span class="quotelev1">&gt; doesn't throw the seg fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other information...
</span><br>
<span class="quotelev1">&gt; OS: RHEL 6.7-based (TOSS)
</span><br>
<span class="quotelev1">&gt; OpenFabrics: RedHat provided
</span><br>
<span class="quotelev1">&gt; Kernel: 2.6.32-573.8.1.2chaos.ch5.4.x86_64
</span><br>
<span class="quotelev1">&gt; Config.log and 'ompi_info --all' are in the tarball ompi.tar.bz2 which is
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something else I should be doing with the yalla pml when using
</span><br>
<span class="quotelev1">&gt; XRC? Regardless, I hope reporting the seg fault is useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-ENV High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18786.php">http://www.open-mpi.org/community/lists/devel/2016/04/18786.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18788/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Previous message:</strong> <a href="18787.php">Cabral, Matias A: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18786.php">David Shrader: "[OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
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
