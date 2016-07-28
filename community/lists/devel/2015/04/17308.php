<?
$subject_val = "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 12:47:17 2015" -->
<!-- isoreceived="20150422164717" -->
<!-- sent="Wed, 22 Apr 2015 09:45:38 -0700" -->
<!-- isosent="20150422164538" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low" -->
<!-- id="CAAvDA17yquPr7+KCZYLpw_6opguw-7_HJsS75iQG3pWYt_+y4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15Vyx_zPZBuoiNSPj1+G3VjQsoX8AA2qsO3w46JtDat7w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 12:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
And here is the backtrace I probably should have provided in the previous
<br>
email.
<br>
-Paul
<br>
<p>#0  0x00002b4107ce9265 in raise () from /lib64/libc.so.6
<br>
#1  0x00002b4107ceaeb8 in abort () from /lib64/libc.so.6
<br>
#2  0x00002b4107ce26e6 in __assert_fail () from /lib64/libc.so.6
<br>
#3  0x000000000044e8b3 in udcm_module_finalize (btl=0x1cf2ae0,
<br>
cpc=0x1ce6f80)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:743
<br>
#4  0x000000000044d7e0 in udcm_component_query (btl=0x1cf2ae0,
<br>
cpc=0x1cec948)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:485
<br>
#5  0x00000000004464c5 in
<br>
ompi_btl_openib_connect_base_select_for_local_port (btl=0x1cf2ae0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/openib/connect/btl_openib_connect_base.c:273
<br>
#6  0x0000000000442c5c in btl_openib_component_init
<br>
(num_btl_modules=0x7fff6e9b5a10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/openib/btl_openib_component.c:2837
<br>
#7  0x0000000000433328 in mca_btl_base_select
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/base/btl_base_select.c:111
<br>
#8  0x000000000043266c in mca_bml_r2_component_init
<br>
(priority=0x7fff6e9b5ac4, enable_progress_threads=false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/bml/r2/bml_r2_component.c:88
<br>
#9  0x000000000050e460 in mca_bml_base_init (enable_progress_threads=false,
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/bml/base/bml_base_init.c:69
<br>
#10 0x00000000004d9e09 in mca_pml_ob1_component_init
<br>
(priority=0x7fff6e9b5bcc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/pml/ob1/pml_ob1_component.c:271
<br>
#11 0x00000000004d90b0 in mca_pml_base_select
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/pml/base/pml_base_select.c:128
<br>
#12 0x0000000000423e2d in ompi_mpi_init (argc=1, argv=0x7fff6e9b5ea8,
<br>
requested=0, provided=0x7fff6e9b5d5c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/runtime/ompi_mpi_init.c:614
<br>
#13 0x000000000042dceb in PMPI_Init (argc=0x7fff6e9b5d9c,
<br>
argv=0x7fff6e9b5d90) at pinit.c:84
<br>
#14 0x0000000000407285 in main (argc=1, argv=0x7fff6e9b5ea8) at ring_c.c:19
<br>
<p><p>On Wed, Apr 22, 2015 at 9:41 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless there is some reason the settings must be global, you should be
</span><br>
<span class="quotelev1">&gt; able to set the limits w/o root privs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bourne shells:
</span><br>
<span class="quotelev1">&gt;     $ ulimit -l 64
</span><br>
<span class="quotelev1">&gt; C shells:
</span><br>
<span class="quotelev1">&gt;     % limit -h memorylocked 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would have thought these lines might need to go in a .profile or .cshrc
</span><br>
<span class="quotelev1">&gt; to affect the application processes, but perhaps mpirun propogates the
</span><br>
<span class="quotelev1">&gt; rlimits.
</span><br>
<span class="quotelev1">&gt; So, on NERSC's Carver I can reproduce the problem (in my build of
</span><br>
<span class="quotelev1">&gt; 1.8.5rc2) quite easily (below).
</span><br>
<span class="quotelev1">&gt; I have configured with --enable-debug, which probably explains why I see
</span><br>
<span class="quotelev1">&gt; an assertion failure rather than the reported SEGV.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {hargrove_at_c1436 BLD}$ ulimit -l 64
</span><br>
<span class="quotelev1">&gt; {hargrove_at_c1436 BLD}$ mpirun -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; ring_c:
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:743:
</span><br>
<span class="quotelev1">&gt; udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
</span><br>
<span class="quotelev1">&gt; ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [c1436:05774] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [c1436:05774] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [c1436:05774] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 0] /lib64/libpthread.so.0[0x2b4107aabb10]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2b4107ce9265]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 2] /lib64/libc.so.6(abort+0x110)[0x2b4107cead10]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 3] /lib64/libc.so.6(__assert_fail+0xf6)[0x2b4107ce26e6]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 4] examples/ring_c[0x44e8b3]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 5] examples/ring_c[0x44d7e0]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 6] examples/ring_c[0x4464c5]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 7] examples/ring_c[0x442c5c]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 8] examples/ring_c[0x433328]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [ 9] examples/ring_c[0x43266c]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [10] examples/ring_c[0x50e460]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [11] examples/ring_c[0x4d9e09]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [12] examples/ring_c[0x4d90b0]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [13] examples/ring_c[0x423e2d]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [14] examples/ring_c[0x42dceb]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [15] examples/ring_c[0x407285]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [16] /lib64/libc.so.6(__libc_start_main+0xf4)[0x2b4107cd6994]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] [17] examples/ring_c[0x407129]
</span><br>
<span class="quotelev1">&gt; [c1436:05774] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 5774 on node c1436 exited on
</span><br>
<span class="quotelev1">&gt; signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 22, 2015 at 9:16 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Raphael,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much for the patches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would one of the developers on the list have a system where they
</span><br>
<span class="quotelev2">&gt;&gt; can make these kernel limit changes and which have HCAs installed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't have access to any system where I have such permissions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-04-22 8:55 GMT-06:00 Rapha&#235;l Fouassier &lt;raphael.fouassier_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are experiencing a bug in OpenMPI in 1.8.4 which happens also on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master: if locked memory limits are too low, a segfault happens
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in openib/udcm because some memory is not correctly deallocated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To reproduce it, modify /etc/security/limits.conf with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * soft memlock 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * hard memlock 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and launch with mpirun (not in a slurm allocation).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I propose 2 patches for 1.8.4 and master (because of the btl move to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal) which:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - free all allocated ressources
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - print the limits error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17305.php">http://www.open-mpi.org/community/lists/devel/2015/04/17305.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17306.php">http://www.open-mpi.org/community/lists/devel/2015/04/17306.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17308/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17307.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17309.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
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
