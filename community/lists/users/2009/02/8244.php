<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:09:50 2009" -->
<!-- isoreceived="20090227170950" -->
<!-- sent="Fri, 27 Feb 2009 18:09:38 +0100" -->
<!-- isosent="20090227170938" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="1235754578.7118.4.camel_at_y-boda.ydc.se" -->
<!-- inreplyto="d105ee120902270854h2b7ecfbds30f9b303dd7eee76_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib RETRY EXCEEDED ERROR<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 12:09:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8254.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8254.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-02-27 at 09:54 -0700, Matt Hughes wrote:
<br>
<span class="quotelev1">&gt; 2009/2/26 Brett Pemberton &lt;brett_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; [[1176,1],0][btl_openib_component.c:2905:handle_wc] from tango092.vpac.org
</span><br>
<span class="quotelev2">&gt; &gt; to: tango090 error polling LP CQ with status RETRY EXCEEDED ERROR status
</span><br>
<span class="quotelev2">&gt; &gt; number 12 for wr_id 38996224 opcode 0 qp_idx 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What OS are you using?  I've seen this error and many other Infiniband
</span><br>
<span class="quotelev1">&gt; related errors on RedHat enterprise linux 4 update 4, with ConnectX
</span><br>
<span class="quotelev1">&gt; cards and various versions of OFED, up to version 1.3.  Depending on
</span><br>
<span class="quotelev1">&gt; the MCA parameters, I also see hangs often enough to make native
</span><br>
<span class="quotelev1">&gt; Infiniband unusable on this OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the openib btl works just fine on the same hardware and the
</span><br>
<span class="quotelev1">&gt; same OFED/OpenMPI stack when used with Centos 4.6.  I suspect there
</span><br>
<span class="quotelev1">&gt; may be something about the kernel that is contributing to these
</span><br>
<span class="quotelev1">&gt; problems, but I haven't had a chance to test the kernel from 4.6 on
</span><br>
<span class="quotelev1">&gt; 4.4.
</span><br>
<p>We see these errors fairly frequently on our CentOS 5.2 system with
<br>
Mellanox InfiniHost III cards. The OFED stack is whatever the CentOS5.2
<br>
uses. Has anyone tested that with the 1.4 OFED stack?
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8245.php">Pavel Shamis (Pasha): "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8243.php">Matt Hughes: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8254.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8254.php">Jeff Squyres: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
