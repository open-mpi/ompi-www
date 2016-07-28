<?
$subject_val = "Re: [OMPI users] mxm 3.0 and knem warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:26:02 2014" -->
<!-- isoreceived="20140827142602" -->
<!-- sent="Wed, 27 Aug 2014 10:25:54 -0400" -->
<!-- isosent="20140827142554" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mxm 3.0 and knem warnings" -->
<!-- id="B7C9282F-0BD9-447F-AF72-BFD940B092ED_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BQsKPcbop8i_m=e33GkwKTeJ=b7mLNPLu_gvigS5R-pWA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mxm 3.0 and knem warnings<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25171.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25169.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25169.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25171.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25171.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there any major issues letting all users use it by setting /dev/knem to 666 ?  It appears knem by default wants to only allow users of the rdma group (if defined) to access knem.  
<br>
<p>We are a generic provider and want everyone to be able to use it, just feels strange to restrict it, so I am trying to understand why that is the default.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Aug 27, 2014, at 10:15 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; KNEM can improve the performance significantly for intra-node communication and that's why MXM is using it.
</span><br>
<span class="quotelev1">&gt; If you don't want to use it, you can suppress this warning by adding the following to your command line after mpirun:
</span><br>
<span class="quotelev1">&gt; -x MXM_LOG_LEVEL=error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alina. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 27, 2014 at 4:28 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; We updated our ofed and started to rebuild our MPI builds with mxm 3.0  .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now we get warnings bout knem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1409145437.578861] [flux-login1:31719:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or directory. Won't use knem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have heard about it a little.  Should we investigate adding it to our systems?
</span><br>
<span class="quotelev1">&gt; Is there a way to suppress this warning?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25166.php">http://www.open-mpi.org/community/lists/users/2014/08/25166.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25169.php">http://www.open-mpi.org/community/lists/users/2014/08/25169.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25170/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25171.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25169.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>In reply to:</strong> <a href="25169.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25171.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25171.php">Alina Sklarevich: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25172.php">Brice Goglin: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
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
