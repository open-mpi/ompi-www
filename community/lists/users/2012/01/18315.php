<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 10:48:06 2012" -->
<!-- isoreceived="20120130154806" -->
<!-- sent="Mon, 30 Jan 2012 16:48:01 +0100" -->
<!-- isosent="20120130154801" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="CACd6u-pO_2XnFpnNs+SMHYsDp+bh5k5Pdib1gzabT+0X1wodYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="762096C11C5A044A9D92961C2E1A7CE8192A4C86_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 10:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>In reply to:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Richard,
<br>
<p><p>On Wed, Jan 4, 2012 at 4:06 PM, Richard Walsh
<br>
&lt;Richard.Walsh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Moreover, this problem has been addressed with the following go-around
</span><br>
<span class="quotelev1">&gt; in the 1.5.5 OpenMPI release with the following fix in opal/mca/memory/linux/malloc.c:
</span><br>
<p><span class="quotelev1">&gt; #ifdef __INTEL_COMPILER_BUILD_DATE
</span><br>
<span class="quotelev1">&gt; # &#160;if __INTEL_COMPILER_BUILD_DATE == 20110811
</span><br>
<span class="quotelev1">&gt; # &#160; &#160;pragma GCC optimization_level 1
</span><br>
<span class="quotelev1">&gt; # &#160;endif
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<p>I have added this patch to openmpi 1.5.3. Previously, every mpicc
<br>
would crash, now mpicc is fine. However, mpirun still crashes like
<br>
this:
<br>
% mpirun -np 8 cpi-openmpi
<br>
[pax8e:13662] *** Process received signal ***
<br>
[pax8e:13662] Signal: Segmentation fault (11)
<br>
[pax8e:13662] Signal code: Address not mapped (1)
<br>
[pax8e:13662] Failing at address: 0x10
<br>
[pax8e:13662] [ 0] /lib64/libpthread.so.0(+0xf4a0) [0x7f348be7b4a0]
<br>
[pax8e:13662] [ 1]
<br>
/usr/lib64/openmpi-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3)
<br>
[0x7f348c817193]
<br>
[pax8e:13662] [ 2] /usr/lib64/openmpi-intel/lib/libmpi.so.1(+0xefdd9)
<br>
[0x7f348c815dd9]
<br>
[pax8e:13662] [ 3]
<br>
/usr/lib64/openmpi-intel/lib/libmpi.so.1(opal_class_initialize+0xaa)
<br>
[0x7f348c8278aa]
<br>
[pax8e:13662] [ 4]
<br>
/usr/lib64/openmpi-intel/lib/openmpi/mca_btl_openib.so(+0x1d0af)
<br>
[0x7f34874350af]
<br>
[pax8e:13662] [ 5] /lib64/libpthread.so.0(+0x77f1) [0x7f348be737f1]
<br>
[pax8e:13662] [ 6] /lib64/libc.so.6(clone+0x6d) [0x7f348bbb070d]
<br>
[pax8e:13662] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 6 with PID 13662 on node pax8e.ifh.de
<br>
exited on signal 11 (Segmentation fault).
<br>
<p>I am using RHEL6.1 and the affected Intel 12.1 compiler.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18314.php">Evgeniy Shapiro: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>In reply to:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18316.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
