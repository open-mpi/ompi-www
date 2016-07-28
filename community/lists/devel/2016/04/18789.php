<?
$subject_val = "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 10:13:46 2016" -->
<!-- isoreceived="20160420141346" -->
<!-- sent="Wed, 20 Apr 2016 17:13:44 +0300" -->
<!-- isosent="20160420141344" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] seg fault when using yalla, XRC, and yalla" -->
<!-- id="CADGp0BS_n4TyYoKCq_P+u7ABg=Bvi2t0QVVvw7=RtYHYxFVEzg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z87cY=CN2HuBGF+DOQakTbwbdtSO3qu=d1Ma+AGNqWirA_at_mail.gmail.com" -->
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
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 10:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18790.php">Jeff Squyres (jsquyres): "[OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18793.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18793.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David,
<br>
<p>I was able to reproduce the issue you reported.
<br>
<p>When the command line doesn't specify the components to use, ompi will try
<br>
to load/open all the ones available (and close them in the end) and then
<br>
choose the components according to their priority and whether or not they
<br>
were opened successfully.
<br>
This means that even if pml yalla was the one running, other components
<br>
were opened and closed as well.
<br>
<p>The parameter you are using - btl_openib_receive_queues, doesn't have an
<br>
effect on pml yalla. It only affects the openib btl which is used by pml
<br>
ob1.
<br>
<p>Using the verbosity of btl_base_verbose I see that when the segmentation
<br>
fault happens, the code doesn't reach the phase of unloading the openib btl
<br>
so perhaps the problem originates there (since pml yalla was already
<br>
unloaded).
<br>
<p>Can you please try adding this mca parameter to your command line to
<br>
specify the HCA you are using?
<br>
-mca btl_openib_if_include &lt;hca&gt;
<br>
It made the segv go away for me.
<br>
<p>Can you please attach the output of ibv_devinfo and write the MOFED version
<br>
you are using?
<br>
<p>Thank you,
<br>
Alina.
<br>
<p>On Wed, Apr 20, 2016 at 2:53 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are looking into your report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 19, 2016 at 4:41 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been investigating using XRC on a cluster with a mellanox
</span><br>
<span class="quotelev2">&gt;&gt; interconnect. I have found that in a certain situation I get a seg fault. I
</span><br>
<span class="quotelev2">&gt;&gt; am using 1.10.2 compiled with gcc 5.3.0, and the simplest configure line
</span><br>
<span class="quotelev2">&gt;&gt; that I have found that still results in the seg fault is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; ./configure --with-hcoll --with-mxm --prefix=...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do have mxm 3.4.3065 and hcoll 3.3.768 installed in to system space
</span><br>
<span class="quotelev2">&gt;&gt; (/usr/lib64). If I use '--without-hcoll --without-mxm,' the seg fault does
</span><br>
<span class="quotelev2">&gt;&gt; not happen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The seg fault happens even when using examples/hello_c.c, so here is an
</span><br>
<span class="quotelev2">&gt;&gt; example of the seg fault using it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; mpicc hello_c.c -o hello_c.x
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; mpirun -n 1 ./hello_c.x
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev2">&gt;&gt; v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev2">&gt;&gt; X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev:
</span><br>
<span class="quotelev2">&gt;&gt; v1.10.1-145-g799148f, Jan 21, 2016, 135)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 22819 on node mu0001 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The seg fault happens no matter the number of ranks. I have tried the
</span><br>
<span class="quotelev2">&gt;&gt; above command with '-mca pml_base_verbose,' and it shows that I am using
</span><br>
<span class="quotelev2">&gt;&gt; the yalla pml:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev2">&gt;&gt; X,4096,1024:X,12288,512:X,65536,512 -mca pml_base_verbose 100 ./hello_c.x
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt; [mu0001.localdomain:22825] select: component cm not selected / finalized
</span><br>
<span class="quotelev2">&gt;&gt; [mu0001.localdomain:22825] select: component ob1 not selected / finalized
</span><br>
<span class="quotelev2">&gt;&gt; [mu0001.localdomain:22825] select: component yalla selected
</span><br>
<span class="quotelev2">&gt;&gt; ...output snipped...
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 22825 on node mu0001 exited
</span><br>
<span class="quotelev2">&gt;&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interestingly enough, if I tell mpirun what pml to use, the seg fault
</span><br>
<span class="quotelev2">&gt;&gt; goes away. The following command does not get the seg fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev2">&gt;&gt; X,4096,1024:X,12288,512:X,65536,512 -mca pml yalla ./hello_c.x
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Passing either ob1 or cm to '-mca pml' also works. So it seems that the
</span><br>
<span class="quotelev2">&gt;&gt; seg fault comes about when the yalla pml is chosen by default, when
</span><br>
<span class="quotelev2">&gt;&gt; mxm/hcoll is involved, and using XRC. I'm not sure if mxm is to blame,
</span><br>
<span class="quotelev2">&gt;&gt; however, as using '-mca pml cm -mca mtl mxm' with the XRC parameters
</span><br>
<span class="quotelev2">&gt;&gt; doesn't throw the seg fault.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Other information...
</span><br>
<span class="quotelev2">&gt;&gt; OS: RHEL 6.7-based (TOSS)
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics: RedHat provided
</span><br>
<span class="quotelev2">&gt;&gt; Kernel: 2.6.32-573.8.1.2chaos.ch5.4.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; Config.log and 'ompi_info --all' are in the tarball ompi.tar.bz2 which is
</span><br>
<span class="quotelev2">&gt;&gt; attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there something else I should be doing with the yalla pml when using
</span><br>
<span class="quotelev2">&gt;&gt; XRC? Regardless, I hope reporting the seg fault is useful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Shrader
</span><br>
<span class="quotelev2">&gt;&gt; HPC-ENV High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18786.php">http://www.open-mpi.org/community/lists/devel/2016/04/18786.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18788.php">http://www.open-mpi.org/community/lists/devel/2016/04/18788.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18789/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18790.php">Jeff Squyres (jsquyres): "[OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>In reply to:</strong> <a href="18788.php">Joshua Ladd: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18793.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18793.php">David Shrader: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
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
