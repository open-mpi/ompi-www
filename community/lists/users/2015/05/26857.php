<?
$subject_val = "Re: [OMPI users] libnuma with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 00:26:42 2015" -->
<!-- isoreceived="20150512042642" -->
<!-- sent="Tue, 12 May 2015 09:56:40 +0530" -->
<!-- isosent="20150512042640" -->
<!-- name="Chaitra Kumar" -->
<!-- email="chaitragkumar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma with openmpi" -->
<!-- id="CADB=1m81NqqLHsas2JiK2aNZrwjLjPJ6ACnKDemKz7rTmqKSNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D7BA61D1-C130-4216-97D9-170F27BF2D1D_at_cisco.com" -->
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
<strong>From:</strong> Chaitra Kumar (<em>chaitragkumar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 00:26:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26858.php">Ralph Castain: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26856.php">Steve Kargl: "Re: [OMPI users] failure of 1.8.5 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26858.php">Ralph Castain: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26858.php">Ralph Castain: "Re: [OMPI users] libnuma with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for your reply.
<br>
The code works without any errors on MVAPICH2.  Using openMPI am getting
<br>
segmentation fault. I found in the older versions of openMPI we can enable
<br>
libnuma support by using the flag '--with-libnuma'.   I am using openMPI
<br>
1.8.1.  Is there an option to configure latest version of openMPI with
<br>
libnuma?  I am trying to bind processes to core using the function
<br>
numa_sched_setaffinity'.
<br>
<p>Regards,
<br>
Chaitra
<br>
<p>On Mon, May 11, 2015 at 10:00 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you provide a bit more detail?  Is the seg fault in your code or in
</span><br>
<span class="quotelev1">&gt; Open MPI?
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
<span class="quotelev2">&gt; &gt; On May 11, 2015, at 2:17 AM, Chaitra Kumar &lt;chaitragkumar_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Team,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to test an application with libnuma on openmpi 1.8.1.  The
</span><br>
<span class="quotelev1">&gt; code compiles, but at runtime am getting libnuma warning and it dies with
</span><br>
<span class="quotelev1">&gt; segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libnuma: Warning: cpu argument 8 is out of range
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 1 with PID 62744 on node test-1 exited
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26852.php">http://www.open-mpi.org/community/lists/users/2015/05/26852.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26853.php">http://www.open-mpi.org/community/lists/users/2015/05/26853.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26857/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26858.php">Ralph Castain: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Previous message:</strong> <a href="26856.php">Steve Kargl: "Re: [OMPI users] failure of 1.8.5 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="26853.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libnuma with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26858.php">Ralph Castain: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>Reply:</strong> <a href="26858.php">Ralph Castain: "Re: [OMPI users] libnuma with openmpi"</a>
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
