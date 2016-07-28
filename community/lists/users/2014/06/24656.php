<?
$subject_val = "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 22:55:11 2014" -->
<!-- isoreceived="20140617025511" -->
<!-- sent="Mon, 16 Jun 2014 21:55:04 -0500" -->
<!-- isosent="20140617025504" -->
<!-- name="jcabello_at_[hidden]" -->
<!-- email="jcabello_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer" -->
<!-- id="a1f3d85f0eb91a885fd0975f1685041a.squirrel_at_computacion.cs.cinvestav.mx" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3604701E90B_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer<br>
<strong>From:</strong> <a href="mailto:jcabello_at_[hidden]?Subject=Re:%20[OMPI%20users]%20deprecated%20cuptiActivityEnqueueBuffer"><em>jcabello_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-16 22:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok that works
<br>
<p>Thanks!!
<br>
<span class="quotelev1">&gt; Do you need the vampire support in your build?  If not, you could add this
</span><br>
<span class="quotelev1">&gt; to configure.
</span><br>
<span class="quotelev1">&gt; --disable-vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev2">&gt;&gt;jcabello_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Monday, June 16, 2014 1:40 PM
</span><br>
<span class="quotelev2">&gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: [OMPI users] deprecated cuptiActivityEnqueueBuffer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi all:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I'm having trouble to compile OMPI from trunk svn with the new 6.0 nvidia
</span><br>
<span class="quotelev2">&gt;&gt;SDK because deprecated cuptiActivityEnqueueBuffer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;this is the problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_la-vt_cupti_activity.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_la-vt_libwrap.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC       libvt_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev2">&gt;&gt;vt_cupti_activity.c: In function 'vt_cuptiact_queueNewBuffer':
</span><br>
<span class="quotelev2">&gt;&gt;vt_cupti_activity.c:203:3: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt;'cuptiActivityEnqueueBuffer' [-Werror=implicit-function-declaration]
</span><br>
<span class="quotelev2">&gt;&gt;   VT_CUPTI_CALL(cuptiActivityEnqueueBuffer(cuCtx, 0,
</span><br>
<span class="quotelev2">&gt;&gt;ALIGN_BUFFER(buffer, 8),
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Does any body known any patch?
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt;mpi.org/community/lists/users/2014/06/24652.php
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24653.php">http://www.open-mpi.org/community/lists/users/2014/06/24653.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24657.php">Yuping Sun: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24655.php">Ralph Castain: "Re: [OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>In reply to:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
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
