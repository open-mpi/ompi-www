<?
$subject_val = "Re: [OMPI devel] Open MPI v2.0.0rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 06:30:11 2016" -->
<!-- isoreceived="20160526103011" -->
<!-- sent="Thu, 26 May 2016 10:30:08 +0000" -->
<!-- isosent="20160526103008" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v2.0.0rc2" -->
<!-- id="EF1384B7-CF31-417B-A257-6A0769A184F2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANi1EtNizA0uNXC+gWauDTrf5-+Oe9ok=XiYx66=47+=KWJU9g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v2.0.0rc2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 06:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19037.php">Ralph Castain: "[OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18866.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2016, at 12:23 AM, Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Improved support for MPI_THREAD_MULTIPLE (when configured with  --enable-mpi-thread-multiple).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious to know why this is not enabled by default.  Are there any known issues ? 
</span><br>
<p>Using THREAD_MULTIPLE enables the use of additional thread locks and other synchronization primitives; it has a performance cost.
<br>
<p>Additionally, Open MPI's journey towards full THREAD_MULTIPLE support has been long.  We're moving in that direction cautiously.
<br>
<p><span class="quotelev1">&gt; I was able to run HPCC benchmark with np=56, without any issues.  Hence, wondering.
</span><br>
<p>Great!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19037.php">Ralph Castain: "[OMPI devel] 1.10.3rc status"</a>
<li><strong>Previous message:</strong> <a href="19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="19035.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18866.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v2.0.0rc2"</a>
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
