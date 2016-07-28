<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 10:15:20 2014" -->
<!-- isoreceived="20140507141520" -->
<!-- sent="Wed, 7 May 2014 07:15:18 -0700" -->
<!-- isosent="20140507141518" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601D537A5A_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANhOtjYaFpHcEkDkF39fJKhnSEFO83eJmQZPa0iUK2A5aukvJg_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 10:15:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This seems similar to what I reported on a different thread.
<br>

<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/05/14688.php">http://www.open-mpi.org/community/lists/devel/2014/05/14688.php</a>
<br>

<br>
I need to try and reproduce again.  Elena, what kind of cluster were your running on?
<br>

<br>
Rolf
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Elena Elkina
<br>
Sent: Wednesday, May 07, 2014 10:04 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] regression with derived datatypes
<br>

<br>
Yes, this commit is also in the trunk.
<br>

<br>
Best,
<br>
Elena
<br>

<br>
On Wed, May 7, 2014 at 5:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
Is this also happening on the trunk?
<br>

<br>

<br>
Sent from my phone. No type good.
<br>

<br>
On May 7, 2014, at 9:44 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
<br>
Sorry,
<br>

<br>
Fixes #4501: Datatype unpack code produces incorrect results in some case
<br>

<br>
---svn-pre-commit-ignore-below---
<br>

<br>
r31370 [[BR]]
<br>
Reshape all the packing/unpacking functions to use the same skeleton. Rewrite the
<br>
generic_unpacking to take advantage of the same capabilitites.
<br>

<br>
r31380 [[BR]]
<br>
Remove a non-necessary label.
<br>

<br>
r31387 [[BR]]
<br>
Correctly save the displacement for the case where the convertor is not
<br>
completed. As we need to have the right displacement at the beginning
<br>
of the next call, we should save the position relative to the beginning
<br>
of the buffer and not to the last loop.
<br>

<br>
Best regards,
<br>
Elena
<br>

<br>
On Wed, May 7, 2014 at 5:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
Can you cite the branch and SVN r number?
<br>

<br>
Sent from my phone. No type good.
<br>

<br>
<span class="quotelev1">&gt; On May 7, 2014, at 9:24 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; b531973419a056696e6f88d813769aa4f1f1aee6
</span><br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14701.php">http://www.open-mpi.org/community/lists/devel/2014/05/14701.php</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14702.php">http://www.open-mpi.org/community/lists/devel/2014/05/14702.php</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14703.php">http://www.open-mpi.org/community/lists/devel/2014/05/14703.php</a>
<br>

<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14705/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] regression with derived datatypes"</a>
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
