<?
$subject_val = "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 14:00:26 2014" -->
<!-- isoreceived="20140616180026" -->
<!-- sent="Mon, 16 Jun 2014 11:00:24 -0700" -->
<!-- isosent="20140616180024" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3604701E90B_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5ba349d7c73abd25b367660af7e4da1d.squirrel_at_computacion.cs.cinvestav.mx" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-16 14:00:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24652.php">jcabello_at_[hidden]: "[OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>In reply to:</strong> <a href="24652.php">jcabello_at_[hidden]: "[OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Reply:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you need the vampire support in your build?  If not, you could add this to configure.
<br>
--disable-vt
<br>
&nbsp;&nbsp;
<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt;jcabello_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Sent: Monday, June 16, 2014 1:40 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] deprecated cuptiActivityEnqueueBuffer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm having trouble to compile OMPI from trunk svn with the new 6.0 nvidia
</span><br>
<span class="quotelev1">&gt;SDK because deprecated cuptiActivityEnqueueBuffer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;this is the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  CC       libvt_la-vt_cupti_activity.lo
</span><br>
<span class="quotelev1">&gt;  CC       libvt_la-vt_iowrap_helper.lo
</span><br>
<span class="quotelev1">&gt;  CC       libvt_la-vt_libwrap.lo
</span><br>
<span class="quotelev1">&gt;  CC       libvt_la-vt_mallocwrap.lo
</span><br>
<span class="quotelev1">&gt;vt_cupti_activity.c: In function 'vt_cuptiact_queueNewBuffer':
</span><br>
<span class="quotelev1">&gt;vt_cupti_activity.c:203:3: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt;'cuptiActivityEnqueueBuffer' [-Werror=implicit-function-declaration]
</span><br>
<span class="quotelev1">&gt;   VT_CUPTI_CALL(cuptiActivityEnqueueBuffer(cuCtx, 0,
</span><br>
<span class="quotelev1">&gt;ALIGN_BUFFER(buffer, 8),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does any body known any patch?
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2014/06/24652.php
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24654.php">Yuping Sun: "[OMPI users] how to get mpirun to scale from 16 to 64 cores"</a>
<li><strong>Previous message:</strong> <a href="24652.php">jcabello_at_[hidden]: "[OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>In reply to:</strong> <a href="24652.php">jcabello_at_[hidden]: "[OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Reply:</strong> <a href="24656.php">jcabello_at_[hidden]: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
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
