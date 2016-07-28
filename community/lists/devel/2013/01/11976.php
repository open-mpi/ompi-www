<?
$subject_val = "Re: [OMPI devel] New ARM patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 08:18:34 2013" -->
<!-- isoreceived="20130124131834" -->
<!-- sent="Thu, 24 Jan 2013 13:18:26 +0000" -->
<!-- isosent="20130124131826" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New ARM patch" -->
<!-- id="510134A2.9030606_at_arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3E08F2AC_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New ARM patch<br>
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 08:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11977.php">Alessandro Fanfarillo: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Previous message:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>In reply to:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11984.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11984.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 24/01/13 02:54, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev2">&gt;&gt; [snip] Basic point is - this is an insufficiently validated patch
</span><br>
<span class="quotelev2">&gt;&gt; referred to as &quot;an ugly kludge&quot; by the original author (Jon
</span><br>
<span class="quotelev2">&gt;&gt; Masters_at_Red Hat), who created it to be able to include it in the
</span><br>
<span class="quotelev2">&gt;&gt; Fedora ARMv5 port. I has previously provided suggestions for
</span><br>
<span class="quotelev2">&gt;&gt; improvements, but it has still been submitted to the Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; users list without any of those suggestions being acted on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I admit to being slightly miffed with it being accepted and
</span><br>
<span class="quotelev2">&gt;&gt; applied without ever being mentioned on the Open MPI developers
</span><br>
<span class="quotelev2">&gt;&gt; list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was done by one of the core committers (George); it's in our
</span><br>
<span class="quotelev1">&gt; community's culture to go commit without discussion on the devel
</span><br>
<span class="quotelev1">&gt; list for many kinds of things.
</span><br>
<p>OK. In which case I probably _should_ be on that list.
<br>
*cough* might I however suggest that a statement to that effect is added
<br>
to <a href="http://www.open-mpi.org/community/lists/ompi.php">http://www.open-mpi.org/community/lists/ompi.php</a> ?
<br>
<p><span class="quotelev1">&gt; FWIW: Since we all know each other pretty well, we do a lot of
</span><br>
<span class="quotelev1">&gt; communication via IM and telephone in addition to the public mailing
</span><br>
<span class="quotelev1">&gt; list discussions.  This is not because we're discussing secret
</span><br>
<span class="quotelev1">&gt; things -- it's just that you can get a lot more accomplished in a 10
</span><br>
<span class="quotelev1">&gt; minute phone call than 15 back-n-forth, 10-page, highly detailed
</span><br>
<span class="quotelev1">&gt; emails.
</span><br>
<p>Sure.
<br>
<p><span class="quotelev2">&gt;&gt; A list to which I now find myself subscribed to without having
</span><br>
<span class="quotelev2">&gt;&gt; asked for or being told about - miffed again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about that; this was my fault.  I interpreted your off-post
</span><br>
<span class="quotelev1">&gt; mails to me about not being able to post to the users list as an ask
</span><br>
<span class="quotelev1">&gt; to be subscribed (since we don't allow posts from unsubscribed
</span><br>
<span class="quotelev1">&gt; users).
</span><br>
<p>Understandable - apologies for overreacting.
<br>
<p><span class="quotelev1">&gt; Rather than unsubscribe you, though, I just marked you as &quot;nomail&quot;
</span><br>
<span class="quotelev1">&gt; on the users' list.  So you won't receive any further mail from that
</span><br>
<span class="quotelev1">&gt; list, but you're still subscribed, so you can post.
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev1">&gt; I tested this patch in v1.6 and v1.7 on my Pi, and it seems to work
</span><br>
<span class="quotelev1">&gt; just fine.  &quot;make check&quot; passes all the ASM tests.
</span><br>
<p>Just to be perfectly clear: it wouldn't on ARMv5 though, and the ARMv6
<br>
ASM test executed with NOPs for barriers, although it would correctly
<br>
pass all other tests.
<br>
<p><span class="quotelev1">&gt; To be clear: I consider you to be the primary author and maintainer
</span><br>
<span class="quotelev1">&gt; of this code, and you're certainly more of an ARM expert than any of
</span><br>
<span class="quotelev1">&gt; us.  George may not have realized that someone from ARM was still an
</span><br>
<span class="quotelev1">&gt; active part of the community; I'm not sure.
</span><br>
<p>I'm certainly not very visible :)
<br>
But I do try to pay attention.
<br>
<p><span class="quotelev1">&gt; But I, too, vote that we should back out his changes from the trunk
</span><br>
<span class="quotelev1">&gt; and put your suggested patch (his patch did not make it over to v1.6
</span><br>
<span class="quotelev1">&gt; or v1.7, because I was waiting for your response).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually do try to get consensus for these kinds of things, so
</span><br>
<span class="quotelev1">&gt; let's give George a little time to respond before backing it out.
</span><br>
<p>Sure.
<br>
<p>Regards,
<br>
<p>Leif
<br>
<p>-- IMPORTANT NOTICE: The contents of this email and any attachments are confidential and may also be privileged. If you are not the intended recipient, please notify the sender immediately and do not disclose the contents to any other person, use it for any purpose, or store or copy the information in any medium.  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11977.php">Alessandro Fanfarillo: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Previous message:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>In reply to:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11984.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Reply:</strong> <a href="11984.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
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
