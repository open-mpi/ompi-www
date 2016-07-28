<?
$subject_val = "[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 29 14:26:08 2012" -->
<!-- isoreceived="20120829182608" -->
<!-- sent="Wed, 29 Aug 2012 11:25:44 -0700" -->
<!-- isosent="20120829182544" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time" -->
<!-- id="CADEJBEUH2Vtyx+W-ZoQe7HXLhb9Y-kcrYYsxg_fYNnngeFM0_Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time<br>
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-29 14:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20056.php">Paul Edmon: "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
<br>
not on 1.4.5 (tcp btl is always fine). The application is VASP and
<br>
only one specific dataset is identified during the testing, and the OS
<br>
is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
<br>
when a certain type of load is put on OMPI 1.6.x, khugepaged thread
<br>
always runs with 100% CPU load, and it looks to me like that OMPI is
<br>
waiting for some memory to be available thus appears to be hung.
<br>
Reducing the per node processes would sometimes ease the problem a bit
<br>
but not always. So I did some further testing by playing around with
<br>
the kernel transparent hugepage support.
<br>
<p>1. Disable transparent hugepage support completely (echo never
<br>
<span class="quotelev1">&gt;/sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
the program to progress as normal (as in 1.4.5). Total run time for an
<br>
iteration is 3036.03 s.
<br>
<p>2. Disable VM defrag effort (echo never
<br>
<span class="quotelev1">&gt;/sys/kernel/mm/redhat_transparent_hugepage/defrag). This allows the
</span><br>
program to run as well, but the performance is horrible. The same
<br>
iteration takes 4967.40 s.
<br>
<p>3. Disable defrag in khugepaged (echo no
<br>
<span class="quotelev1">&gt;/sys/kernel/mm/redhat_transparent_hugepage/khugepaged/defrag). This
</span><br>
allows the program to run, and the performance is worse than #1 but
<br>
better than #2. The same iteration takes 3348.10 s.
<br>
<p>4. Disable both VM defrag and khugepaged defrag (#2 + #3). Similar
<br>
performance as #3.
<br>
<p>So my question is, looks to me like this has to do with the memory
<br>
management in the openib btl, are we using huge pages in 1.6.x? If
<br>
that is true, is there a better way to resolve or workaround it within
<br>
OMPI itself without disabling transparent hugepage support? We'd like
<br>
to keep the hugepage support if possible. Also is this related to the
<br>
register memory imbalance issue that Jeff was mentioning recently
<br>
(<a href="http://blogs.cisco.com/performance/registered-memory-imbalances/">http://blogs.cisco.com/performance/registered-memory-imbalances/</a>)
<br>
because we definitely have this issue with this dataset from the
<br>
symptoms that I can tell, but I wouldn't expect it to hang on
<br>
khugepaged, or is this just a corner case?
<br>
<p>Thanks and any advice is appreciated.
<br>
<p>Yong Qin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20058.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>Previous message:</strong> <a href="20056.php">Paul Edmon: "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
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
