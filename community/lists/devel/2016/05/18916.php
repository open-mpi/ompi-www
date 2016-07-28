<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 17:27:29 2016" -->
<!-- isoreceived="20160505212729" -->
<!-- sent="Thu, 5 May 2016 16:27:28 -0500" -->
<!-- isosent="20160505212728" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)" -->
<!-- id="CAANzjEm639aQN3JojEDZWenxd7vC5hQDmY5WVpMhvQiK7gK6Nw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="572AFC32.8040605_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 17:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18915.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. I can confirm that too. I have a power7 with xlc -qversion:
<br>
IBM XL C/C++ for Linux, V12.1 (5765-J03, 5725-C73)
<br>
Version: 12.01.0000.0000
<br>
<p>And it built v2.0.0rc2 fine.
<br>
<p><p>Unfortunately, I don't have access to a power7 system with v13.1. We might
<br>
have to just make this in the release notes.
<br>
<p>So I tested the following (I did not do any runs, just builds):
<br>
&nbsp;power7 with xlc v12.1 = Builds
<br>
&nbsp;power8 with xlc v13.1.3 = Builds (with some warnings)
<br>
<p>I don't have a system with the following combinations:
<br>
&nbsp;power7 with xlc v13.1
<br>
&nbsp;power8 with xlc v12.1
<br>
<p><p>Since this also happens with hwloc 1.11.3 standalone maybe hwloc folks can
<br>
take point on further investigation?
<br>
<p><p><p>On Thu, May 5, 2016 at 2:54 AM, Christopher Samuel &lt;samuel_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 03/05/16 18:11, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; xlc-13.1.0 on Linux dies compiling the embedded hwloc in this rc
</span><br>
<span class="quotelev2">&gt; &gt; (details below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case it's useful xlc 12.1.0.9-140729 (yay for BGQ living in the past)
</span><br>
<span class="quotelev1">&gt; doesn't ICE on RHEL6 on Power7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18910.php">http://www.open-mpi.org/community/lists/devel/2016/05/18910.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18915.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI devel] Process placement"</a>
<li><strong>In reply to:</strong> <a href="18910.php">Christopher Samuel: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Reply:</strong> <a href="18917.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
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
