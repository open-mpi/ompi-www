<?
$subject_val = "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 12:41:58 2015" -->
<!-- isoreceived="20150422164158" -->
<!-- sent="Wed, 22 Apr 2015 09:41:52 -0700" -->
<!-- isosent="20150422164152" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low" -->
<!-- id="CAAvDA15Vyx_zPZBuoiNSPj1+G3VjQsoX8AA2qsO3w46JtDat7w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF1Cqj6M=O_MqiykzkYvcUqGvPRF=v1wtQQZZdztFpXf_x0N9Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-04-22 12:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17308.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17308.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17308.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>Unless there is some reason the settings must be global, you should be able
<br>
to set the limits w/o root privs:
<br>
<p>Bourne shells:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ ulimit -l 64
<br>
C shells:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;% limit -h memorylocked 64
<br>
<p>I would have thought these lines might need to go in a .profile or .cshrc
<br>
to affect the application processes, but perhaps mpirun propogates the
<br>
rlimits.
<br>
So, on NERSC's Carver I can reproduce the problem (in my build of 1.8.5rc2)
<br>
quite easily (below).
<br>
I have configured with --enable-debug, which probably explains why I see an
<br>
assertion failure rather than the reported SEGV.
<br>
<p>-Paul
<br>
<p>{hargrove_at_c1436 BLD}$ ulimit -l 64
<br>
{hargrove_at_c1436 BLD}$ mpirun -np 2 examples/ring_c
<br>
ring_c:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.5rc2-linux-x86_64-static/openmpi-1.8.5rc2/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:743:
<br>
udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) ==
<br>
((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
<br>
[c1436:05774] *** Process received signal ***
<br>
[c1436:05774] Signal: Aborted (6)
<br>
[c1436:05774] Signal code:  (-6)
<br>
[c1436:05774] [ 0] /lib64/libpthread.so.0[0x2b4107aabb10]
<br>
[c1436:05774] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2b4107ce9265]
<br>
[c1436:05774] [ 2] /lib64/libc.so.6(abort+0x110)[0x2b4107cead10]
<br>
[c1436:05774] [ 3] /lib64/libc.so.6(__assert_fail+0xf6)[0x2b4107ce26e6]
<br>
[c1436:05774] [ 4] examples/ring_c[0x44e8b3]
<br>
[c1436:05774] [ 5] examples/ring_c[0x44d7e0]
<br>
[c1436:05774] [ 6] examples/ring_c[0x4464c5]
<br>
[c1436:05774] [ 7] examples/ring_c[0x442c5c]
<br>
[c1436:05774] [ 8] examples/ring_c[0x433328]
<br>
[c1436:05774] [ 9] examples/ring_c[0x43266c]
<br>
[c1436:05774] [10] examples/ring_c[0x50e460]
<br>
[c1436:05774] [11] examples/ring_c[0x4d9e09]
<br>
[c1436:05774] [12] examples/ring_c[0x4d90b0]
<br>
[c1436:05774] [13] examples/ring_c[0x423e2d]
<br>
[c1436:05774] [14] examples/ring_c[0x42dceb]
<br>
[c1436:05774] [15] examples/ring_c[0x407285]
<br>
[c1436:05774] [16] /lib64/libc.so.6(__libc_start_main+0xf4)[0x2b4107cd6994]
<br>
[c1436:05774] [17] examples/ring_c[0x407129]
<br>
[c1436:05774] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 5774 on node c1436 exited on
<br>
signal 6 (Aborted).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>On Wed, Apr 22, 2015 at 9:16 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Raphael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for the patches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would one of the developers on the list have a system where they
</span><br>
<span class="quotelev1">&gt; can make these kernel limit changes and which have HCAs installed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have access to any system where I have such permissions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-04-22 8:55 GMT-06:00 Rapha&#235;l Fouassier &lt;raphael.fouassier_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are experiencing a bug in OpenMPI in 1.8.4 which happens also on
</span><br>
<span class="quotelev2">&gt;&gt; master: if locked memory limits are too low, a segfault happens
</span><br>
<span class="quotelev2">&gt;&gt; in openib/udcm because some memory is not correctly deallocated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To reproduce it, modify /etc/security/limits.conf with:
</span><br>
<span class="quotelev2">&gt;&gt; * soft memlock 64
</span><br>
<span class="quotelev2">&gt;&gt; * hard memlock 64
</span><br>
<span class="quotelev2">&gt;&gt; and launch with mpirun (not in a slurm allocation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I propose 2 patches for 1.8.4 and master (because of the btl move to
</span><br>
<span class="quotelev2">&gt;&gt; opal) which:
</span><br>
<span class="quotelev2">&gt;&gt; - free all allocated ressources
</span><br>
<span class="quotelev2">&gt;&gt; - print the limits error
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17305.php">http://www.open-mpi.org/community/lists/devel/2015/04/17305.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17306.php">http://www.open-mpi.org/community/lists/devel/2015/04/17306.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17308.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17308.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17308.php">Paul Hargrove: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
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
