<?
$subject_val = "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 08:12:21 2012" -->
<!-- isoreceived="20120830121221" -->
<!-- sent="Thu, 30 Aug 2012 08:12:16 -0400" -->
<!-- isosent="20120830121216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time" -->
<!-- id="98FB5B1E-4541-4260-A3E7-0932DAFE3F9F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADEJBEUH2Vtyx+W-ZoQe7HXLhb9Y-kcrYYsxg_fYNnngeFM0_Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 08:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20068.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20057.php">Yong Qin: "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2012, at 2:25 PM, Yong Qin wrote:
<br>
<p><span class="quotelev1">&gt; This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
</span><br>
<span class="quotelev1">&gt; not on 1.4.5 (tcp btl is always fine). The application is VASP and
</span><br>
<span class="quotelev1">&gt; only one specific dataset is identified during the testing, and the OS
</span><br>
<span class="quotelev1">&gt; is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
</span><br>
<span class="quotelev1">&gt; when a certain type of load is put on OMPI 1.6.x, khugepaged thread
</span><br>
<span class="quotelev1">&gt; always runs with 100% CPU load, and it looks to me like that OMPI is
</span><br>
<span class="quotelev1">&gt; waiting for some memory to be available thus appears to be hung.
</span><br>
<span class="quotelev1">&gt; Reducing the per node processes would sometimes ease the problem a bit
</span><br>
<span class="quotelev1">&gt; but not always. So I did some further testing by playing around with
</span><br>
<span class="quotelev1">&gt; the kernel transparent hugepage support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Disable transparent hugepage support completely (echo never
</span><br>
<span class="quotelev2">&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
<span class="quotelev1">&gt; the program to progress as normal (as in 1.4.5). Total run time for an
</span><br>
<span class="quotelev1">&gt; iteration is 3036.03 s.
</span><br>
<p>I'll admit that we have not tested using transparent hugepages.  I wonder if there's some kind of bad interaction going on here...
<br>
<p>What exactly does changing this setting do?
<br>
<p><span class="quotelev1">&gt; 2. Disable VM defrag effort (echo never
</span><br>
<span class="quotelev2">&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/defrag). This allows the
</span><br>
<span class="quotelev1">&gt; program to run as well, but the performance is horrible. The same
</span><br>
<span class="quotelev1">&gt; iteration takes 4967.40 s.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Disable defrag in khugepaged (echo no
</span><br>
<span class="quotelev2">&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/khugepaged/defrag). This
</span><br>
<span class="quotelev1">&gt; allows the program to run, and the performance is worse than #1 but
</span><br>
<span class="quotelev1">&gt; better than #2. The same iteration takes 3348.10 s.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Disable both VM defrag and khugepaged defrag (#2 + #3). Similar
</span><br>
<span class="quotelev1">&gt; performance as #3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my question is, looks to me like this has to do with the memory
</span><br>
<span class="quotelev1">&gt; management in the openib btl, are we using huge pages in 1.6.x? If
</span><br>
<span class="quotelev1">&gt; that is true, is there a better way to resolve or workaround it within
</span><br>
<span class="quotelev1">&gt; OMPI itself without disabling transparent hugepage support? We'd like
</span><br>
<span class="quotelev1">&gt; to keep the hugepage support if possible.
</span><br>
<p>Mellanox -- can you comment on this?
<br>
<p><span class="quotelev1">&gt; Also is this related to the
</span><br>
<span class="quotelev1">&gt; register memory imbalance issue that Jeff was mentioning recently
</span><br>
<span class="quotelev1">&gt; (<a href="http://blogs.cisco.com/performance/registered-memory-imbalances/">http://blogs.cisco.com/performance/registered-memory-imbalances/</a>)
</span><br>
<span class="quotelev1">&gt; because we definitely have this issue with this dataset from the
</span><br>
<span class="quotelev1">&gt; symptoms that I can tell, but I wouldn't expect it to hang on
</span><br>
<span class="quotelev1">&gt; khugepaged, or is this just a corner case?
</span><br>
<p>It *could* be... but I really have no idea (haven't thought about huge page support w.r.t. registered memory exhaustion / imbalance).  Mellanox?
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
<li><strong>Next message:</strong> <a href="20068.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20057.php">Yong Qin: "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
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
