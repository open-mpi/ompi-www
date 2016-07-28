<?
$subject_val = "Re: [OMPI devel] v1.10.0rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 16:51:42 2015" -->
<!-- isoreceived="20150823205142" -->
<!-- sent="Sun, 23 Aug 2015 13:51:35 -0700" -->
<!-- isosent="20150823205135" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.10.0rc4" -->
<!-- id="CAAvDA179QqwZdTC0W=KBhmLUzK=JwNKJ_LpgNA9jmdnPRJQRnw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA1578NOziCBaY2kVzV6Vq8nh+b9Rz8vM4g_pjF7ZGp4Vnw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.10.0rc4<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-23 16:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17803.php">Paul Hargrove: "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The tests of RC4 completed (even qemu-emulated ARM and MIPS) with no issues
<br>
other than the two I reported previously.
<br>
One was a relatively simple matter that Ralph has fixed in RC5.
<br>
The other was a new aspect of a known issue, for which Gilles and Ralph
<br>
gave me multiple options to work-around.
<br>
<p>Thanks to Ralph and Gilles, I have successful test results with RC5 on the
<br>
configurations which had failed with RC4.
<br>
I am now rerunning all (currently 86) of my test configurations against RC5
<br>
to be certain.
<br>
<p>-Paul
<br>
<p><p>On Sat, Aug 22, 2015 at 3:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; At this point I can confirm that all of my configurations that experienced
</span><br>
<span class="quotelev1">&gt; failures with rc3 have passed with rc4.
</span><br>
<span class="quotelev1">&gt; I will report again after all tests have completed (likely on Sunday).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 22, 2015 at 1:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Final release candidate for v1.10.0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know immediately if you see a problem - scheduled for
</span><br>
<span class="quotelev2">&gt;&gt; release after the Tues telecon
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17790.php">http://www.open-mpi.org/community/lists/devel/2015/08/17790.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17802/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17803.php">Paul Hargrove: "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17801.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<li><strong>In reply to:</strong> <a href="17791.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
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
