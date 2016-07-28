<?
$subject_val = "Re: [OMPI users] libnuma with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 12:30:43 2015" -->
<!-- isoreceived="20150511163043" -->
<!-- sent="Mon, 11 May 2015 16:30:41 +0000" -->
<!-- isosent="20150511163041" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma with openmpi" -->
<!-- id="D7BA61D1-C130-4216-97D9-170F27BF2D1D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADB=1m91hrgqoXNnm+vqzpv1r=VXC8YLf3DTL08cUgRtMoxQmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma with openmpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-11 12:30:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26854.php">Steve Kargl: "[OMPI users] failure of 1.8.5 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="26852.php">Chaitra Kumar: "[OMPI users] libnuma with openmpi"</a>
<li><strong>In reply to:</strong> <a href="26852.php">Chaitra Kumar: "[OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you provide a bit more detail?  Is the seg fault in your code or in Open MPI?
<br>
<p>Note that Open MPI uses hwloc (which likely uses libnuma) internally, too.
<br>
<p><p><p><span class="quotelev1">&gt; On May 11, 2015, at 2:17 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to test an application with libnuma on openmpi 1.8.1.  The code compiles, but at runtime am getting libnuma warning and it dies with segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libnuma: Warning: cpu argument 8 is out of range
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 62744 on node test-1 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System information:
</span><br>
<span class="quotelev1">&gt; RHEL 6.6
</span><br>
<span class="quotelev1">&gt; GCC 4.4.7
</span><br>
<span class="quotelev1">&gt; open-mpi 1.8.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This code works perfectly on MVAPICH2. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I enable libnuma on openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chaitra
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26852.php">http://www.open-mpi.org/community/lists/users/2015/05/26852.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26854.php">Steve Kargl: "[OMPI users] failure of 1.8.5 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="26852.php">Chaitra Kumar: "[OMPI users] libnuma with openmpi"</a>
<li><strong>In reply to:</strong> <a href="26852.php">Chaitra Kumar: "[OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
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
