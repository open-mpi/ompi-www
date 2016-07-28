<?
$subject_val = "[OMPI devel] My 1.8.5rc3 testing report";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 15:40:48 2015" -->
<!-- isoreceived="20150424194048" -->
<!-- sent="Fri, 24 Apr 2015 12:40:44 -0700" -->
<!-- isosent="20150424194044" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] My 1.8.5rc3 testing report" -->
<!-- id="CAAvDA141GJbW2jeiiag9Wc9jhmPVCpOrXQyu5EUwEH5QFmiKGw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] My 1.8.5rc3 testing report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 15:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17363.php">Ralph Castain: "Re: [OMPI devel] My 1.8.5rc3 testing report"</a>
<li><strong>Previous message:</strong> <a href="17361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17363.php">Ralph Castain: "Re: [OMPI devel] My 1.8.5rc3 testing report"</a>
<li><strong>Reply:</strong> <a href="17363.php">Ralph Castain: "Re: [OMPI devel] My 1.8.5rc3 testing report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All done!  All good!
<br>
<p>Summary:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3  Unavailable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  Known bad[*] configuration
<br>
&nbsp;&nbsp;&nbsp;&nbsp;70  PASS
<br>
<p>-Paul
<br>
<p>[*] Compiler bug confirmed by Nysal
<br>
<p>On Thu, Apr 23, 2015 at 7:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry my ARMv6, ARMv8 and PowerPC64LE systems were dedicated to other
</span><br>
<span class="quotelev1">&gt; purposes today.
</span><br>
<span class="quotelev1">&gt; So, I was only able to test 1.8.5rc3 against 71 distinct configurations.
</span><br>
<span class="quotelev1">&gt;  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was 1 known-failure (xlc-11.1 LP64) that scared me by changing
</span><br>
<span class="quotelev1">&gt; failure modes between rc1 and rc2.
</span><br>
<span class="quotelev1">&gt; Several slow tests (Linux on MIPS and ARM, with multiple ABIs/ISAs, all
</span><br>
<span class="quotelev1">&gt; emulated w/ QEMU) are still running and will likely be ready by Fri noon
</span><br>
<span class="quotelev1">&gt; PDT.
</span><br>
<span class="quotelev1">&gt; Besides those I have only clean PASS results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the unlikely event the ARM or MIPS testers fail, I will of course
</span><br>
<span class="quotelev1">&gt; report it.
</span><br>
<span class="quotelev1">&gt; However, I doubt anything has regressed since they passed rc2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current summary:
</span><br>
<span class="quotelev1">&gt;      3  Unavailable
</span><br>
<span class="quotelev1">&gt;      1  Known bad[*] configuration
</span><br>
<span class="quotelev1">&gt;      6  Still pending (QEMU)
</span><br>
<span class="quotelev1">&gt;     64  PASS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [*] Albert Einstein is said to have defined Insanity as &quot;doing the same
</span><br>
<span class="quotelev1">&gt; thing over and over again and expecting different results&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17363.php">Ralph Castain: "Re: [OMPI devel] My 1.8.5rc3 testing report"</a>
<li><strong>Previous message:</strong> <a href="17361.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17363.php">Ralph Castain: "Re: [OMPI devel] My 1.8.5rc3 testing report"</a>
<li><strong>Reply:</strong> <a href="17363.php">Ralph Castain: "Re: [OMPI devel] My 1.8.5rc3 testing report"</a>
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
