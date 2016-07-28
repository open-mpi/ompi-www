<?
$subject_val = "Re: [OMPI users] disappearance of the memory registration error in 1.8.x?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 08:35:10 2015" -->
<!-- isoreceived="20150311123510" -->
<!-- sent="Wed, 11 Mar 2015 08:35:08 -0400" -->
<!-- isosent="20150311123508" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] disappearance of the memory registration error in 1.8.x?" -->
<!-- id="CAG4F6z8-+6qutOCYaJSPOQLpAdNY+G6UxteQHMZf-xo0=HPNqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE17F2707FD0_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] disappearance of the memory registration error in 1.8.x?<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 08:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10"</a>
<li><strong>Previous message:</strong> <a href="26451.php">Saad Raza: "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10"</a>
<li><strong>In reply to:</strong> <a href="26448.php">Fischer, Greg A.: "[OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Greg
<br>
<p>We changed the default behavior to essentially assume folks were running
<br>
with current MOFED/OFED drivers which allow one to register twice the
<br>
amount of physical memory. If you are running OFED less than 2.0 or using
<br>
older drivers, then you should set the following mca parameter:
<br>
<p>-mca btl_openib_allow_max_memory_registration 0
<br>
<p>This will tell the OpenIB BTL to actually calculate the max allowable based
<br>
on driver specific values.
<br>
<p>Hope this helps,
<br>
<p>Josh
<br>
<p><p><p>On Tue, Mar 10, 2015 at 10:44 AM, Fischer, Greg A. &lt;
<br>
fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m trying to run the &#226;&#128;&#156;connectivity_c&#226;&#128;&#157; test on a variety of systems using
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.8.4. The test returns segmentation faults when running across
</span><br>
<span class="quotelev1">&gt; nodes on one particular type of system, and only when using the openib BTL.
</span><br>
<span class="quotelev1">&gt; (The test runs without error if I stipulate &#226;&#128;&#156;--mca btl tcp,self&#226;&#128;&#157;.) Here&#226;&#128;&#153;s
</span><br>
<span class="quotelev1">&gt; the output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1033 fischega_at_bl1415[~/tmp/openmpi/1.8.4_test_examples_SLES11_SP2/error]&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 connectivity_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 0] /lib64/libpthread.so.0(+0xf5d0)[0x2ab1e72915d0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 1]
</span><br>
<span class="quotelev1">&gt; /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_malloc+0x29e)[0x2ab1e7c550be]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 2]
</span><br>
<span class="quotelev1">&gt; /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/libopen-pal.so.6(opal_memory_ptmalloc2_int_memalign+0x69)[0x2ab1e7c58829]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 3]
</span><br>
<span class="quotelev1">&gt; /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/libopen-pal.so.6(opal_memory_ptmalloc2_memalign+0x6f)[0x2ab1e7c583ff]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 4]
</span><br>
<span class="quotelev1">&gt; /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/openmpi/mca_btl_openib.so(+0x2867b)[0x2ab1eac8a67b]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 5]
</span><br>
<span class="quotelev1">&gt; /data/pgrlf/openmpi-1.8.4/SLES10_SP2_lib/lib/openmpi/mca_btl_openib.so(+0x1f712)[0x2ab1eac81712]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 6] /lib64/libpthread.so.0(+0x75f0)[0x2ab1e72895f0]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] [ 7] /lib64/libc.so.6(clone+0x6d)[0x2ab1e757484d]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [bl1415:29526] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the same test using a previous build of OpenMPI 1.6.5 on this
</span><br>
<span class="quotelev1">&gt; system, it returns a memory registration warning, but otherwise executes
</span><br>
<span class="quotelev1">&gt; normally:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.8.4 does not seem to be reporting a memory registration warning
</span><br>
<span class="quotelev1">&gt; in situations where previous versions would report such a warning. Is this
</span><br>
<span class="quotelev1">&gt; because OpenMPI 1.8.4 is no longer vulnerable to this type of condition?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; This e-mail may contain proprietary information of the sending
</span><br>
<span class="quotelev1">&gt; organization. Any unauthorized or improper disclosure, copying,
</span><br>
<span class="quotelev1">&gt; distribution, or use of the contents of this e-mail and attached
</span><br>
<span class="quotelev1">&gt; document(s) is prohibited. The information contained in this e-mail and
</span><br>
<span class="quotelev1">&gt; attached document(s) is intended only for the personal and private use of
</span><br>
<span class="quotelev1">&gt; the recipient(s) named above. If you have received this communication in
</span><br>
<span class="quotelev1">&gt; error, please notify the sender immediately by email and delete the
</span><br>
<span class="quotelev1">&gt; original e-mail and attached document(s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26448.php">http://www.open-mpi.org/community/lists/users/2015/03/26448.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26453.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun crashes randomly on prolonged run of	calculation on Amber 10"</a>
<li><strong>Previous message:</strong> <a href="26451.php">Saad Raza: "[OMPI users] mpirun crashes randomly on prolonged run of calculation on Amber 10"</a>
<li><strong>In reply to:</strong> <a href="26448.php">Fischer, Greg A.: "[OMPI users] disappearance of the memory registration error in 1.8.x?"</a>
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
