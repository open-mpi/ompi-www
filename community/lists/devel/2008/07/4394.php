<?
$subject_val = "Re: [OMPI devel] ibcm private header file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 12:33:27 2008" -->
<!-- isoreceived="20080722163327" -->
<!-- sent="Tue, 22 Jul 2008 09:32:45 -0700" -->
<!-- isosent="20080722163245" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibcm private header file" -->
<!-- id="adabq0p5176.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="89241346-0A93-417B-8594-3C8A17344068_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibcm private header file<br>
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-22 12:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4395.php">Thomas Herault: "[OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>Previous message:</strong> <a href="4393.php">Jeff Squyres: "[OMPI devel] ibcm private header file"</a>
<li><strong>In reply to:</strong> <a href="4393.php">Jeff Squyres: "[OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Reply:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; So I think using byteorder.h is not a good idea (note the warning).
</span><br>
<span class="quotelev1"> &gt; How about just having two #defines, picking the Right one based on
</span><br>
<span class="quotelev1"> &gt; WORDS_BIGENDIAN?
</span><br>
<p>On Linux, the public &lt;byteswap.h&gt; header might have what you need.
<br>
For that matter &lt;infiniband/arch.h&gt; has htonll() defined.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4395.php">Thomas Herault: "[OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>Previous message:</strong> <a href="4393.php">Jeff Squyres: "[OMPI devel] ibcm private header file"</a>
<li><strong>In reply to:</strong> <a href="4393.php">Jeff Squyres: "[OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Reply:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
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
