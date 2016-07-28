<?
$subject_val = "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 11:39:14 2016" -->
<!-- isoreceived="20160707153914" -->
<!-- sent="Thu, 7 Jul 2016 10:39:11 -0500" -->
<!-- isosent="20160707153911" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc" -->
<!-- id="CAANzjEmw1032jzekabyq6XYf1wD21013NExoKMHf1Kggao8GnQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16+NDTGg4mp2hWRKOvWt2Z8G090C8c9dVjf+7T--PnPGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 11:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Previous message:</strong> <a href="19162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>In reply to:</strong> <a href="19156.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Reply:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>What was the configure string you used for this?
<br>
<p>We have a Jenkins CI mechanism for XL, but it is using XLC 13.1.3 on that
<br>
system and we haven't been runing 'make check'. I have another system that
<br>
has XLC 13.1.2 that I can test on as well. I'm not sure if I'll be able to
<br>
fix without Nathan's help, but I can at least try to reproduce.
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p>On Wed, Jul 6, 2016 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The issue reported in
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/devel/2016/06/19107.php">https://www.open-mpi.org/community/lists/devel/2016/06/19107.php</a> is still
</span><br>
<span class="quotelev1">&gt; present on both my little-endian Power8 and big-endian Power7 systems.
</span><br>
<span class="quotelev1">&gt; I know Nathan had been working on this, but I've lost track of the issue
</span><br>
<span class="quotelev1">&gt; and/or pr number(s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19156.php">http://www.open-mpi.org/community/lists/devel/2016/07/19156.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Previous message:</strong> <a href="19162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>In reply to:</strong> <a href="19156.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Reply:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
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
