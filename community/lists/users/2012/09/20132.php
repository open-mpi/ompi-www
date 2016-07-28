<?
$subject_val = "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 12:08:02 2012" -->
<!-- isoreceived="20120905160802" -->
<!-- sent="Wed, 5 Sep 2012 09:07:35 -0700" -->
<!-- isosent="20120905160735" -->
<!-- name="Yong Qin" -->
<!-- email="yong.qin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time" -->
<!-- id="CADEJBEWq0Rzfi_uKx8U4Uz4tjz=vJzn1=RDtPhPYuL04cv9T7A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50473CEE.1090306_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2012-09-05 12:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20133.php">seshendra seshu: "[OMPI users] Regarding the Pthreads"</a>
<li><strong>Previous message:</strong> <a href="20131.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20127.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, so far this has only been observed in VASP and a specific dataset.
<br>
<p>Thanks,
<br>
<p>On Wed, Sep 5, 2012 at 4:52 AM, Yevgeny Kliteynik
<br>
&lt;kliteyn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 9/4/2012 7:21 PM, Yong Qin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Sep 4, 2012 at 5:42 AM, Yevgeny Kliteynik
</span><br>
<span class="quotelev2">&gt;&gt; &lt;kliteyn_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/30/2012 10:28 PM, Yong Qin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Aug 30, 2012 at 5:12 AM, Jeff Squyres&lt;jsquyres_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 29, 2012, at 2:25 PM, Yong Qin wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This issue has been observed on OMPI 1.6 and 1.6.1 with openib btl but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not on 1.4.5 (tcp btl is always fine). The application is VASP and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; only one specific dataset is identified during the testing, and the OS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; is SL 6.2 with kernel 2.6.32-220.23.1.el6.x86_64. The issue is that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when a certain type of load is put on OMPI 1.6.x, khugepaged thread
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; always runs with 100% CPU load, and it looks to me like that OMPI is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; waiting for some memory to be available thus appears to be hung.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reducing the per node processes would sometimes ease the problem a bit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but not always. So I did some further testing by playing around with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the kernel transparent hugepage support.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. Disable transparent hugepage support completely (echo never
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /sys/kernel/mm/redhat_transparent_hugepage/enabled). This would allow
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the program to progress as normal (as in 1.4.5). Total run time for an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; iteration is 3036.03 s.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll admit that we have not tested using transparent hugepages.  I wonder if there's some kind of bad interaction going on here...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The transparent hugepage is &quot;transparent&quot;, which means it is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically applied to all applications unless it is explicitly told
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; otherwise. I highly suspect that it is not working properly in this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Like Jeff said - I don't think we've ever tested OMPI with transparent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; huge pages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks. But have you tested OMPI under RHEL 6 or its variants (CentOS
</span><br>
<span class="quotelev2">&gt;&gt; 6, SL 6)? THP is on by default in RHEL 6 so no matter you want it or
</span><br>
<span class="quotelev2">&gt;&gt; not it's there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting. Indeed, THP is on be default in RHEL 6.x.
</span><br>
<span class="quotelev1">&gt; I run OMPI 1.6.x constantly on RHEL 6.2, and I've never seen this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm checking it with OFED folks, but I doubt that there are some dedicated
</span><br>
<span class="quotelev1">&gt; tests for THP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So do you see it only with a specific application and only on a specific
</span><br>
<span class="quotelev1">&gt; data set? Wonder if I can somehow reproduce it in-house...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20133.php">seshendra seshu: "[OMPI users] Regarding the Pthreads"</a>
<li><strong>Previous message:</strong> <a href="20131.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="20127.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
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
