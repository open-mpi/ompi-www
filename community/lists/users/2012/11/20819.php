<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 19:12:33 2012" -->
<!-- isoreceived="20121130001233" -->
<!-- sent="Fri, 30 Nov 2012 02:12:24 +0200" -->
<!-- isosent="20121130001224" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues" -->
<!-- id="50B7F9E8.70104_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B7E5F3.4050105_at_uci.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 19:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20816.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/30/2012 12:47 AM, Joseph Farran wrote:
<br>
<span class="quotelev1">&gt; I'll assume: /etc/modprobe.d/mlx4_en.conf
</span><br>
<p>Add these to /etc/modprobe.d/mofed.conf:
<br>
<p>options mlx4_core log_num_mtt=24
<br>
options mlx4_core log_mtts_per_seg=1
<br>
<p>And then restart the driver.
<br>
You need to do it on all the machines.
<br>
<p>-- YK
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/29/2012 02:34 PM, Joseph Farran wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Where do change those mellanox settings?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/29/2012 02:23 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 29, 2012, at 5:21 PM, Joseph Farran wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20818.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="20816.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
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
