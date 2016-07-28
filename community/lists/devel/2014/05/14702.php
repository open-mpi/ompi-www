<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 09:44:14 2014" -->
<!-- isoreceived="20140507134414" -->
<!-- sent="Wed, 7 May 2014 17:44:13 +0400" -->
<!-- isosent="20140507134413" -->
<!-- name="Elena Elkina" -->
<!-- email="elena.elkina_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="CANhOtjZ585pvgwMEU0m3xeVadNhocPdAFXy2jEws2kC1uJEnKg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="06CA9CB6-81F6-436B-B787-166F02201C1B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Elena Elkina (<em>elena.elkina_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 09:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14703.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14703.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14703.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry,
<br>
<p>Fixes #4501: Datatype unpack code produces incorrect results in some case
<br>
<p>---svn-pre-commit-ignore-below---
<br>
<p>r31370 [[BR]]
<br>
Reshape all the packing/unpacking functions to use the same skeleton.
<br>
Rewrite the
<br>
generic_unpacking to take advantage of the same capabilitites.
<br>
<p>r31380 [[BR]]
<br>
Remove a non-necessary label.
<br>
<p>r31387 [[BR]]
<br>
Correctly save the displacement for the case where the convertor is not
<br>
completed. As we need to have the right displacement at the beginning
<br>
of the next call, we should save the position relative to the beginning
<br>
of the buffer and not to the last loop.
<br>
<p>Best regards,
<br>
Elena
<br>
<p><p>On Wed, May 7, 2014 at 5:43 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Can you cite the branch and SVN r number?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 7, 2014, at 9:24 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; b531973419a056696e6f88d813769aa4f1f1aee6
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14701.php">http://www.open-mpi.org/community/lists/devel/2014/05/14701.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14703.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14703.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14703.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
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
