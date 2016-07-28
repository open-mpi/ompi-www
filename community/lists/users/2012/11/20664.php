<?
$subject_val = "Re: [OMPI users] mpi_leave_pinned is dangerous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 08:51:44 2012" -->
<!-- isoreceived="20121108135144" -->
<!-- sent="Thu, 8 Nov 2012 05:51:38 -0800" -->
<!-- isosent="20121108135138" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_leave_pinned is dangerous" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8E882D63_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0A69CCCA-4BE1-4655-B95C-D9E901369DF1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_leave_pinned is dangerous<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 08:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure.  I will look into this.   And thank you for the feedback Jens!
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, November 08, 2012 8:49 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] mpi_leave_pinned is dangerous
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 7, 2012, at 7:21 PM, Jens Glaser wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the help of MVAPICH2 developer S. Potluri the problem was isolated
</span><br>
<span class="quotelev1">&gt;and fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry about not replying; we're all (literally) very swamped trying to prepare
</span><br>
<span class="quotelev1">&gt;for the Supercomputing trade show/conference next week.  I know I'm
</span><br>
<span class="quotelev1">&gt;waaaay behind on OMPI user mails; sorry folks.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It was, as expected, due to the library not intercepting the
</span><br>
<span class="quotelev2">&gt;&gt; cudaHostAlloc() and cudaFreeHost() calls to register pinned memory, as
</span><br>
<span class="quotelev1">&gt;would be required for the registration cache to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf/NVIDIA -- what's the chance of getting that to be intercepted properly?
</span><br>
<span class="quotelev1">&gt;Do you guys have good hooks for this?  (HINT HINT :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20663.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Reply:</strong> <a href="20665.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
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
