<?
$subject_val = "Re: [OMPI users] libnuma with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 00:34:02 2015" -->
<!-- isoreceived="20150512043402" -->
<!-- sent="Mon, 11 May 2015 21:33:49 -0700" -->
<!-- isosent="20150512043349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma with openmpi" -->
<!-- id="815FF06F-A795-4341-A119-E28CF25F1096_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADB=1m81NqqLHsas2JiK2aNZrwjLjPJ6ACnKDemKz7rTmqKSNg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 00:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>In reply to:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The 1.8 series automatically binds, so I suspect you are getting some cross-interference. You might try adding &#226;&#128;&#148;bind-to none to your cmd line.
<br>
<p>Or you could just let OMPI bind you to core anyway.
<br>
<p><p><span class="quotelev1">&gt; On May 11, 2015, at 9:26 PM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply. 
</span><br>
<span class="quotelev1">&gt; The code works without any errors on MVAPICH2.  Using openMPI am getting segmentation fault. I found in the older versions of openMPI we can enable libnuma support by using the flag '--with-libnuma'.   I am using openMPI 1.8.1.  Is there an option to configure latest version of openMPI with libnuma?  I am trying to bind processes to core using the function numa_sched_setaffinity'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chaitra
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 11, 2015 at 10:00 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you provide a bit more detail?  Is the seg fault in your code or in Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that Open MPI uses hwloc (which likely uses libnuma) internally, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 11, 2015, at 2:17 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden] &lt;mailto:chaitragkumar_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Team,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to test an application with libnuma on openmpi 1.8.1.  The code compiles, but at runtime am getting libnuma warning and it dies with segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libnuma: Warning: cpu argument 8 is out of range
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 1 with PID 62744 on node test-1 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; System information:
</span><br>
<span class="quotelev2">&gt; &gt; RHEL 6.6
</span><br>
<span class="quotelev2">&gt; &gt; GCC 4.4.7
</span><br>
<span class="quotelev2">&gt; &gt; open-mpi 1.8.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This code works perfectly on MVAPICH2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How can I enable libnuma on openmpi?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help is greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Chaitra
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26852.php">http://www.open-mpi.org/community/lists/users/2015/05/26852.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26852.php">http://www.open-mpi.org/community/lists/users/2015/05/26852.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26853.php">http://www.open-mpi.org/community/lists/users/2015/05/26853.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26853.php">http://www.open-mpi.org/community/lists/users/2015/05/26853.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26857.php">http://www.open-mpi.org/community/lists/users/2015/05/26857.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>In reply to:</strong> <a href="26857.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
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
