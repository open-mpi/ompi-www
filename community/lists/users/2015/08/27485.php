<?
$subject_val = "Re: [OMPI users] cuda aware mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:27:25 2015" -->
<!-- isoreceived="20150824182725" -->
<!-- sent="Mon, 24 Aug 2015 12:27:23 -0600" -->
<!-- isosent="20150824182723" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuda aware mpi" -->
<!-- id="20150824182723.GA35597_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAATkYOUc-fMrjsv05JSkzYX7hdbVcoHyeap_gffwDdM9c9hdNQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cuda aware mpi<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 14:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27486.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27484.php">Subhra Mazumdar: "Re: [OMPI users] cuda aware mpi"</a>
<li><strong>In reply to:</strong> <a href="27484.php">Subhra Mazumdar: "Re: [OMPI users] cuda aware mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW the openib btl is mostly thread safe at this point. There is an
<br>
outstanding bug in the connection manager (udcm) that causes an abort in
<br>
debug builds but it should work in optimized builds. I have a patch in
<br>
<a href="https://github.com/open-mpi/ompi/pull/826">https://github.com/open-mpi/ompi/pull/826</a> . You will need to specify
<br>
-mca btl_base_thread_multiple_override true on the command line to get
<br>
the openib btl enabled for thread multiple.
<br>
<p>-Nathan
<br>
<p>On Fri, Aug 21, 2015 at 02:57:46PM -0700, Subhra Mazumdar wrote:
<br>
<span class="quotelev1">&gt;    My processes are multi-threaded so can't use openib. Any idea if it is
</span><br>
<span class="quotelev1">&gt;    going to be supported with yalla in future?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;    Subhra
</span><br>
<span class="quotelev1">&gt;    On Fri, Aug 21, 2015 at 6:53 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;    wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      No, it is not.  You have to use pml ob1 which will pull in the smcuda
</span><br>
<span class="quotelev1">&gt;      and openib BTLs which have CUDA-aware built into them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Subhra
</span><br>
<span class="quotelev1">&gt;      Mazumdar
</span><br>
<span class="quotelev1">&gt;      Sent: Friday, August 21, 2015 12:18 AM
</span><br>
<span class="quotelev1">&gt;      To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;      Subject: [OMPI users] cuda aware mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Is cuda aware mpi supported with pml yalla?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Subhra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt;      may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt;      disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt;      recipient, please contact the sender by reply email and destroy all
</span><br>
<span class="quotelev1">&gt;      copies of the original message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2015/08/27483.php">http://www.open-mpi.org/community/lists/users/2015/08/27483.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27484.php">http://www.open-mpi.org/community/lists/users/2015/08/27484.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27485/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27486.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27484.php">Subhra Mazumdar: "Re: [OMPI users] cuda aware mpi"</a>
<li><strong>In reply to:</strong> <a href="27484.php">Subhra Mazumdar: "Re: [OMPI users] cuda aware mpi"</a>
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
