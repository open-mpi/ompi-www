<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 11:11:35 2012" -->
<!-- isoreceived="20120130161135" -->
<!-- sent="Mon, 30 Jan 2012 16:11:28 +0000" -->
<!-- isosent="20120130161128" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE8192A7A17_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CACd6u-pO_2XnFpnNs+SMHYsDp+bh5k5Pdib1gzabT+0X1wodYQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 11:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18317.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing"</a>
<li><strong>Previous message:</strong> <a href="18315.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18315.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18327.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18327.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Gotz,
<br>
<p>I have not seen this mpirun error with the OpenMPI version I have built
<br>
with Intel 12.1 and the mpicc fix:
<br>
<p>openmpi-1.5.5rc1.tar.bz2
<br>
<p>and from the looks of things, I wonder if your problem is related.  The
<br>
solution in the original case was to conditionally dial-down optimization
<br>
when using the 12.1 compiler to prevent the compiler itself from crashing
<br>
during a compile.  What you present is a failure during execution.  Such
<br>
failures might be due to over zealous optimization, but there seems to be
<br>
little reason on the face of it to believe that there is a connection between
<br>
the former and the latter.
<br>
<p>Does this failure occur with all attempts to use 'mpirun' whatever the source?
<br>
My 'mpicc' problem did.  If this is true and If you believe it is an optimization
<br>
level issue you could try turning it off in the failing routine and see if that
<br>
produces a remedy.  I would also try things with the very latest release.
<br>
<p>Those are my thoughts ... good luck.
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
W: 718-982-3319
<br>
M: 612-382-4620
<br>
<p>Miracles are delivered to order by great intelligence, or when it is
<br>
absent, through the passage of time and a series of mere chance
<br>
events. -- Max Headroom
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of G&#246;tz Waschk [goetz.waschk_at_[hidden]]
<br>
Sent: Monday, January 30, 2012 10:48 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...
<br>
<p>Hi Richard,
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
<span class="quotelev1">&gt; #  if __INTEL_COMPILER_BUILD_DATE == 20110811
</span><br>
<span class="quotelev1">&gt; #    pragma GCC optimization_level 1
</span><br>
<span class="quotelev1">&gt; #  endif
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>________________________________
<br>
<p>Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
<br>
Tobacco-Free Campus as of July 1, 2012.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18317.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher (Jeff Squyres) - now testing"</a>
<li><strong>Previous message:</strong> <a href="18315.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18315.php">G&#246;tz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18327.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18327.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
