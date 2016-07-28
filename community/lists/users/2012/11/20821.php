<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 19:40:00 2012" -->
<!-- isoreceived="20121130004000" -->
<!-- sent="Fri, 30 Nov 2012 02:39:49 +0200" -->
<!-- isosent="20121130003949" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues" -->
<!-- id="50B80055.8070902_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B7F9E8.70104_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2012-11-29 19:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20822.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20819.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20822.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20822.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also set these parameters in /etc/modprobe.conf:
<br>
<p>&nbsp;&nbsp;options mlx4_core log_num_mtt=24 log_mtts_per_seg=1
<br>
<p>-- YK
<br>
<p>On 11/30/2012 2:12 AM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; On 11/30/2012 12:47 AM, Joseph Farran wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll assume: /etc/modprobe.d/mlx4_en.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Add these to /etc/modprobe.d/mofed.conf:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; options mlx4_core log_num_mtt=24
</span><br>
<span class="quotelev1">&gt; options mlx4_core log_mtts_per_seg=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then restart the driver.
</span><br>
<span class="quotelev1">&gt; You need to do it on all the machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/29/2012 02:34 PM, Joseph Farran wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where do change those mellanox settings?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/29/2012 02:23 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 29, 2012, at 5:21 PM, Joseph Farran wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20822.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20820.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20819.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20822.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20822.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
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
