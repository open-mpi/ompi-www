<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 09:45:29 2014" -->
<!-- isoreceived="20140507134529" -->
<!-- sent="Wed, 7 May 2014 13:45:28 +0000" -->
<!-- isosent="20140507134528" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="965F9D16-AA72-43A2-AA0B-64145B1099B5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANhOtjZ585pvgwMEU0m3xeVadNhocPdAFXy2jEws2kC1uJEnKg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 09:45:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14702.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14702.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this also happening on the trunk?
<br>
<p>Sent from my phone. No type good.
<br>
<p>On May 7, 2014, at 9:44 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
<br>
<p>Sorry,
<br>
<p>Fixes #4501: Datatype unpack code produces incorrect results in some case
<br>
<p>---svn-pre-commit-ignore-below---
<br>
<p>r31370 [[BR]]
<br>
Reshape all the packing/unpacking functions to use the same skeleton. Rewrite the
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
<p><p>On Wed, May 7, 2014 at 5:43 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
Can you cite the branch and SVN r number?
<br>
<p>Sent from my phone. No type good.
<br>
<p><span class="quotelev1">&gt; On May 7, 2014, at 9:24 AM, &quot;Elena Elkina&quot; &lt;elena.elkina_at_[hidden]&lt;mailto:elena.elkina_at_[hidden]&gt;&gt; wrote:
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
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14701.php">http://www.open-mpi.org/community/lists/devel/2014/05/14701.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14702.php">http://www.open-mpi.org/community/lists/devel/2014/05/14702.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14702.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14702.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14704.php">Elena Elkina: "Re: [OMPI devel] regression with derived datatypes"</a>
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
