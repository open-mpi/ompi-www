<?
$subject_val = "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 15:29:22 2012" -->
<!-- isoreceived="20120830192922" -->
<!-- sent="Thu, 30 Aug 2012 12:28:56 -0700" -->
<!-- isosent="20120830192856" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time" -->
<!-- id="CADEJBEWG_J92RY3R0JPXGxsmNWJcnGGu_ge1-5Ds_aRgtiRKmA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98FB5B1E-4541-4260-A3E7-0932DAFE3F9F_at_cisco.com" -->
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
<strong>From:</strong> Yong Qin (<em>yong.qin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 15:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20077.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 30, 2012 at 5:12 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Aug 29, 2012, at 2:25 PM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
</span><br>
<span class="quotelev2">&gt;&gt; not on 1.4.5 (tcp btl is always fine). The application is VASP and
</span><br>
<span class="quotelev2">&gt;&gt; only one specific dataset is identified during the testing, and the OS
</span><br>
<span class="quotelev2">&gt;&gt; is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
</span><br>
<span class="quotelev2">&gt;&gt; when a certain type of load is put on OMPI 1.6.x, khugepaged thread
</span><br>
<span class="quotelev2">&gt;&gt; always runs with 100% CPU load, and it looks to me like that OMPI is
</span><br>
<span class="quotelev2">&gt;&gt; waiting for some memory to be available thus appears to be hung.
</span><br>
<span class="quotelev2">&gt;&gt; Reducing the per node processes would sometimes ease the problem a bit
</span><br>
<span class="quotelev2">&gt;&gt; but not always. So I did some further testing by playing around with
</span><br>
<span class="quotelev2">&gt;&gt; the kernel transparent hugepage support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Disable transparent hugepage support completely (echo never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
<span class="quotelev2">&gt;&gt; the program to progress as normal (as in 1.4.5). Total run time for an
</span><br>
<span class="quotelev2">&gt;&gt; iteration is 3036.03 s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll admit that we have not tested using transparent hugepages.  I wonder if there's some kind of bad interaction going on here...
</span><br>
<p>The transparent hugepage is &quot;transparent&quot;, which means it is
<br>
automatically applied to all applications unless it is explicitly told
<br>
otherwise. I highly suspect that it is not working properly in this
<br>
case.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly does changing this setting do?
</span><br>
<p>Here (<a href="http://lwn.net/Articles/423592/">http://lwn.net/Articles/423592/</a>)  is a pretty good documentation
<br>
on what these settings would do to the behaviour of the THP. I don't
<br>
think I can explain it better than the article so I will leave it to
<br>
you to digest. :)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Disable VM defrag effort (echo never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/defrag). This allows the
</span><br>
<span class="quotelev2">&gt;&gt; program to run as well, but the performance is horrible. The same
</span><br>
<span class="quotelev2">&gt;&gt; iteration takes 4967.40 s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Disable defrag in khugepaged (echo no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/khugepaged/defrag). This
</span><br>
<span class="quotelev2">&gt;&gt; allows the program to run, and the performance is worse than #1 but
</span><br>
<span class="quotelev2">&gt;&gt; better than #2. The same iteration takes 3348.10 s.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Disable both VM defrag and khugepaged defrag (#2 + #3). Similar
</span><br>
<span class="quotelev2">&gt;&gt; performance as #3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question is, looks to me like this has to do with the memory
</span><br>
<span class="quotelev2">&gt;&gt; management in the openib btl, are we using huge pages in 1.6.x? If
</span><br>
<span class="quotelev2">&gt;&gt; that is true, is there a better way to resolve or workaround it within
</span><br>
<span class="quotelev2">&gt;&gt; OMPI itself without disabling transparent hugepage support? We'd like
</span><br>
<span class="quotelev2">&gt;&gt; to keep the hugepage support if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox -- can you comment on this?
</span><br>
<p>THP is useful on large memory applications, which we have a lot here.
<br>
So having it working would definitely benefit us. But if there is no
<br>
work around from OMPI side, it is apparently more important to have
<br>
the application to run than just lose a few percent of performance, I
<br>
guess we will have to turn it off.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also is this related to the
</span><br>
<span class="quotelev2">&gt;&gt; register memory imbalance issue that Jeff was mentioning recently
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://blogs.cisco.com/performance/registered-memory-imbalances/">http://blogs.cisco.com/performance/registered-memory-imbalances/</a>)
</span><br>
<span class="quotelev2">&gt;&gt; because we definitely have this issue with this dataset from the
</span><br>
<span class="quotelev2">&gt;&gt; symptoms that I can tell, but I wouldn't expect it to hang on
</span><br>
<span class="quotelev2">&gt;&gt; khugepaged, or is this just a corner case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It *could* be... but I really have no idea (haven't thought about huge page support w.r.t. registered memory exhaustion / imbalance).  Mellanox?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>Thanks,
<br>
<p>Yong Qin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20077.php">Ralph Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20067.php">Jeff Squyres: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
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
