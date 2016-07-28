<?
$subject_val = "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 13:01:14 2016" -->
<!-- isoreceived="20160420170114" -->
<!-- sent="Wed, 20 Apr 2016 11:01:08 -0600" -->
<!-- isosent="20160420170108" -->
<!-- name="David Shrader" -->
<!-- email="dshrader_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] seg fault when using yalla, XRC, and yalla" -->
<!-- id="5717B5D4.6010105_at_lanl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADGp0BS_n4TyYoKCq_P+u7ABg=Bvi2t0QVVvw7=RtYHYxFVEzg_at_mail.gmail.com" -->
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
<strong>From:</strong> David Shrader (<em>dshrader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 13:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18794.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Alina,
<br>
<p>Thank you for the information about how the pml components work. I knew 
<br>
that the other components were being opened and ultimately closed in 
<br>
favor of yalla, but I didn't realize that initial open would cause a 
<br>
persistent change in the ompi runtime.
<br>
<p>Here's the information you requested about the ib network:
<br>
<p>- MOFED version:
<br>
We are using the Open Fabrics Software as bundled by RedHat, and my ib 
<br>
network folks say we're running something close to v1.5.4
<br>
- ibv_devinfo:
<br>
[dshrader_at_mu0001 examples]$ ibv_devinfo
<br>
hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.9.1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0025:90ff:ff16:78d8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0025:90ff:ff16:78db
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       SM_2121000001000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 250
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               366
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             InfiniBand
<br>
<p><p>I still get the seg fault when specifying the hca:
<br>
<p>$&gt; mpirun -n 1 -mca btl_openib_receive_queues 
<br>
X,4096,1024:X,12288,512:X,65536,512 -mca btl_openib_if_include mlx4_0 
<br>
./hello_c.x
<br>
Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI 
<br>
dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev: 
<br>
v1.10.1-145-g799148f, Jan 21, 2016, 135)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 10045 on node mu0001 exited 
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>I don't know if this helps, but the first time I tried the command I 
<br>
mistyped the hca name. This got me a warning, but no seg fault:
<br>
<p>$&gt; mpirun -n 1 -mca btl_openib_receive_queues 
<br>
X,4096,1024:X,12288,512:X,65536,512 -mca btl_openib_if_include ml4_0 
<br>
./hello_c.x
<br>
--------------------------------------------------------------------------
<br>
WARNING: One or more nonexistent OpenFabrics devices/ports were
<br>
specified:
<br>
<p>&nbsp;&nbsp;&nbsp;Host:                 mu0001
<br>
&nbsp;&nbsp;&nbsp;MCA parameter:        mca_btl_if_include
<br>
&nbsp;&nbsp;&nbsp;Nonexistent entities: ml4_0
<br>
<p>These entities will be ignored.  You can disable this warning by
<br>
setting the btl_openib_warn_nonexistent_if MCA parameter to 0.
<br>
--------------------------------------------------------------------------
<br>
Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open MPI 
<br>
dshrader_at_[hidden] Distribution, ident: 1.10.2, repo rev: 
<br>
v1.10.1-145-g799148f, Jan 21, 2016, 135)
<br>
<p>So, telling the openib btl to use the actual hca didn't get the seg 
<br>
fault to go away, but giving it a dummy value did.
<br>
<p>Thanks,
<br>
David
<br>
<p>On 04/20/2016 08:13 AM, Alina Sklarevich wrote:
<br>
<span class="quotelev1">&gt; Hi David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to reproduce the issue you reported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the command line doesn't specify the components to use, ompi will 
</span><br>
<span class="quotelev1">&gt; try to load/open all the ones available (and close them in the end) 
</span><br>
<span class="quotelev1">&gt; and then choose the components according to their priority and whether 
</span><br>
<span class="quotelev1">&gt; or not they were opened successfully.
</span><br>
<span class="quotelev1">&gt; This means that even if pml yalla was the one running, other 
</span><br>
<span class="quotelev1">&gt; components were opened and closed as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The parameter you are using - btl_openib_receive_queues, doesn't have 
</span><br>
<span class="quotelev1">&gt; an effect on pml yalla. It only affects the openib btl which is used 
</span><br>
<span class="quotelev1">&gt; by pml ob1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using the verbosity of btl_base_verbose I see that when the 
</span><br>
<span class="quotelev1">&gt; segmentation fault happens, the code doesn't reach the phase of 
</span><br>
<span class="quotelev1">&gt; unloading the openib btl so perhaps the problem originates there 
</span><br>
<span class="quotelev1">&gt; (since pml yalla was already unloaded).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please try adding this mca parameter to your command line to 
</span><br>
<span class="quotelev1">&gt; specify the HCA you are using?
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_if_include &lt;hca&gt;
</span><br>
<span class="quotelev1">&gt; It made the segv go away for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please attach the output of ibv_devinfo and write the MOFED 
</span><br>
<span class="quotelev1">&gt; version you are using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Alina.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 20, 2016 at 2:53 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jladd.mlnx_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi, David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We are looking into your report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, Apr 19, 2016 at 4:41 PM, David Shrader &lt;dshrader_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:dshrader_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have been investigating using XRC on a cluster with a
</span><br>
<span class="quotelev1">&gt;         mellanox interconnect. I have found that in a certain
</span><br>
<span class="quotelev1">&gt;         situation I get a seg fault. I am using 1.10.2 compiled with
</span><br>
<span class="quotelev1">&gt;         gcc 5.3.0, and the simplest configure line that I have found
</span><br>
<span class="quotelev1">&gt;         that still results in the seg fault is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         $&gt; ./configure --with-hcoll --with-mxm --prefix=...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I do have mxm 3.4.3065 and hcoll 3.3.768 installed in to
</span><br>
<span class="quotelev1">&gt;         system space (/usr/lib64). If I use '--without-hcoll
</span><br>
<span class="quotelev1">&gt;         --without-mxm,' the seg fault does not happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The seg fault happens even when using examples/hello_c.c, so
</span><br>
<span class="quotelev1">&gt;         here is an example of the seg fault using it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         $&gt; mpicc hello_c.c -o hello_c.x
</span><br>
<span class="quotelev1">&gt;         $&gt; mpirun -n 1 ./hello_c.x
</span><br>
<span class="quotelev1">&gt;         Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open
</span><br>
<span class="quotelev1">&gt;         MPI dshrader_at_[hidden] &lt;mailto:dshrader_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Distribution, ident: 1.10.2, repo rev: v1.10.1-145-g799148f,
</span><br>
<span class="quotelev1">&gt;         Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt;         $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;         X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev1">&gt;         Hello, world, I am 0 of 1, (Open MPI v1.10.2, package: Open
</span><br>
<span class="quotelev1">&gt;         MPI dshrader_at_[hidden] &lt;mailto:dshrader_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Distribution, ident: 1.10.2, repo rev: v1.10.1-145-g799148f,
</span><br>
<span class="quotelev1">&gt;         Jan 21, 2016, 135)
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         mpirun noticed that process rank 0 with PID 22819 on node
</span><br>
<span class="quotelev1">&gt;         mu0001 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The seg fault happens no matter the number of ranks. I have
</span><br>
<span class="quotelev1">&gt;         tried the above command with '-mca pml_base_verbose,' and it
</span><br>
<span class="quotelev1">&gt;         shows that I am using the yalla pml:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;         X,4096,1024:X,12288,512:X,65536,512 -mca pml_base_verbose 100
</span><br>
<span class="quotelev1">&gt;         ./hello_c.x
</span><br>
<span class="quotelev1">&gt;         ...output snipped...
</span><br>
<span class="quotelev1">&gt;         [mu0001.localdomain:22825] select: component cm not selected /
</span><br>
<span class="quotelev1">&gt;         finalized
</span><br>
<span class="quotelev1">&gt;         [mu0001.localdomain:22825] select: component ob1 not selected
</span><br>
<span class="quotelev1">&gt;         / finalized
</span><br>
<span class="quotelev1">&gt;         [mu0001.localdomain:22825] select: component yalla selected
</span><br>
<span class="quotelev1">&gt;         ...output snipped...
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         mpirun noticed that process rank 0 with PID 22825 on node
</span><br>
<span class="quotelev1">&gt;         mu0001 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Interestingly enough, if I tell mpirun what pml to use, the
</span><br>
<span class="quotelev1">&gt;         seg fault goes away. The following command does not get the
</span><br>
<span class="quotelev1">&gt;         seg fault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         $&gt; mpirun -n 1 -mca btl_openib_receive_queues
</span><br>
<span class="quotelev1">&gt;         X,4096,1024:X,12288,512:X,65536,512 -mca pml yalla ./hello_c.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Passing either ob1 or cm to '-mca pml' also works. So it seems
</span><br>
<span class="quotelev1">&gt;         that the seg fault comes about when the yalla pml is chosen by
</span><br>
<span class="quotelev1">&gt;         default, when mxm/hcoll is involved, and using XRC. I'm not
</span><br>
<span class="quotelev1">&gt;         sure if mxm is to blame, however, as using '-mca pml cm -mca
</span><br>
<span class="quotelev1">&gt;         mtl mxm' with the XRC parameters doesn't throw the seg fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Other information...
</span><br>
<span class="quotelev1">&gt;         OS: RHEL 6.7-based (TOSS)
</span><br>
<span class="quotelev1">&gt;         OpenFabrics: RedHat provided
</span><br>
<span class="quotelev1">&gt;         Kernel: 2.6.32-573.8.1.2chaos.ch5.4.x86_64
</span><br>
<span class="quotelev1">&gt;         Config.log and 'ompi_info --all' are in the tarball
</span><br>
<span class="quotelev1">&gt;         ompi.tar.bz2 which is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Is there something else I should be doing with the yalla pml
</span><br>
<span class="quotelev1">&gt;         when using XRC? Regardless, I hope reporting the seg fault is
</span><br>
<span class="quotelev1">&gt;         useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks,
</span><br>
<span class="quotelev1">&gt;         David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         David Shrader
</span><br>
<span class="quotelev1">&gt;         HPC-ENV High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt;         Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt;         Email: dshrader &lt;at&gt; lanl.gov &lt;<a href="http://lanl.gov">http://lanl.gov</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18786.php">http://www.open-mpi.org/community/lists/devel/2016/04/18786.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18788.php">http://www.open-mpi.org/community/lists/devel/2016/04/18788.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18789.php">http://www.open-mpi.org/community/lists/devel/2016/04/18789.php</a>
</span><br>
<p><pre>
-- 
David Shrader
HPC-ENV High Performance Computer Systems
Los Alamos National Lab
Email: dshrader &lt;at&gt; lanl.gov
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18794.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Common symbol warnings in tarballs (was: make install warns about 'common symbols')"</a>
<li><strong>Previous message:</strong> <a href="18792.php">Howard Pritchard: "Re: [OMPI devel] PSM2 Intel folks question"</a>
<li><strong>In reply to:</strong> <a href="18789.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
<li><strong>Reply:</strong> <a href="18801.php">Alina Sklarevich: "Re: [OMPI devel] seg fault when using yalla, XRC, and yalla"</a>
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
