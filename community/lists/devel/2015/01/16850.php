<?
$subject_val = "Re: [OMPI devel] Great meeting!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 04:14:45 2015" -->
<!-- isoreceived="20150130091445" -->
<!-- sent="Fri, 30 Jan 2015 18:15:04 +0900" -->
<!-- isosent="20150130091504" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Great meeting!" -->
<!-- id="54CB4B98.3010705_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22766EB3-4425-4A98-A11E-698375E51D51_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Great meeting!<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-30 04:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16846.php">Jeff Squyres (jsquyres): "[OMPI devel] Great meeting!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<li><strong>Reply:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>let me update the --with-threads configure option.
<br>
<p>it has been removed from the master :
<br>
<p>commit 7a55d49ca78bcc157749c04027515f12b026ec33
<br>
Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
<br>
Date:   Tue Oct 21 19:13:19 2014 +0900
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;configury: per RFC, remove the --with-threads option
<br>
<p><p>i did not think it was appropriate to remove this option from the v1.8
<br>
series (e.g. do not &quot;break&quot; configure command line), so i did not make a PR.
<br>
but if there is a consensus --with-threads can be safely removed from
<br>
the v1.8 series, i ll be happy to do the backport and make a PR.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/01/30 6:20, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Thank you all who traveled and/or showed up on a webex this week for the OMPI developer's meeting.  We discussed a zillion things and made much forward progress.  The wiki with a summary of discussed/decided things is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The major agenda item for next Tuesday's call will be to go through these items and answer any questions for people who weren't here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16849.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16846.php">Jeff Squyres (jsquyres): "[OMPI devel] Great meeting!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
<li><strong>Reply:</strong> <a href="16852.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Great meeting!"</a>
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
