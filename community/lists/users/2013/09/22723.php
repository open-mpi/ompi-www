<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.3 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 15:58:24 2013" -->
<!-- isoreceived="20130925195824" -->
<!-- sent="Wed, 25 Sep 2013 19:58:23 +0000" -->
<!-- isosent="20130925195823" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.3 problem" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8C9835_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="8CCCC747FD74954AB8E26B1F2EFBA6E2078E7AFC_at_MS-EX2VKS.erdc.dren.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.3 problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 15:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22724.php">sri pramoda: "[OMPI users] help"</a>
<li><strong>Previous message:</strong> <a href="22722.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>In reply to:</strong> <a href="22722.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2013, at 2:56 PM, &quot;Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor&quot; &lt;clifton.W.bryan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don&#146;t understand how to respond to the threads..?
</span><br>
<p>If you subscribe to the digest version of the list, it may be difficult to reply to an individual message.
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Yes, the job completes &#150; it just gives the warning message. I checked all the available suggestions in the link &#150; everything was already set.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there any way to just disable the warning message?
</span><br>
<p>No, because Open MPI isn't able to register enough memory.  This means that something still isn't configured right.  This is the relevant FAQ entry in particular:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p>In particular, this is where OMPI is making that calculation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.6/ompi/mca/btl/openib/btl_openib.c#L618">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.6/ompi/mca/btl/openib/btl_openib.c#L618</a>
<br>
<p>Sorry to throw code at you, but it's the most concise way to explain what OMPI is doing.  Basically, depending on what model of Mellanox IB card you have, it reads some files out of /sys.  I'm *guessing* you have new-ish Mellanox cards, and OMPI is therefore reading /sys/module/mlx4_core/parameters -- in particular, the log_mtts_per_seg and log_num_mtt files.  OMPI then effectively calculates:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;max_reg = log_num_mtt * page_size * log_mtts_per_seg;
<br>
<p>And if (max_reg &lt; mem_total * 3 / 4), then OMPI displays the warning.
<br>
<p>What you want to do is ensure that you are setting those kernel parameters properly.  The *only* way to know that they were set properly is to examine those /sys values (i.e., /sys is exposing the values directly from the mlx4 driver; if the values are wrong in /sys, then the driver is not seeing the values that you set).  I seem to recall that there was some oddity in when/how you could set those particular parameters due to how the mlx4 driver was implemented; you'll have to check with Mellanox on the details.
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
<li><strong>Next message:</strong> <a href="22724.php">sri pramoda: "[OMPI users] help"</a>
<li><strong>Previous message:</strong> <a href="22722.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
<li><strong>In reply to:</strong> <a href="22722.php">Bryan, Clifton W ERDC-RDE-MSRC-MS Contractor: "Re: [OMPI users] OpenMPI 1.6.3 problem"</a>
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
