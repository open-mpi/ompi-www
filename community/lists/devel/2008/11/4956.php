<?
$subject_val = "Re: [OMPI devel] gather-bug reminder/re-post";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 08:58:48 2008" -->
<!-- isoreceived="20081125135848" -->
<!-- sent="Tue, 25 Nov 2008 14:58:35 +0100" -->
<!-- isosent="20081125135835" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] gather-bug reminder/re-post" -->
<!-- id="200811251458.41615.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E6CD40F3-BA32-4ED9-8DE8-627F218D558D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] gather-bug reminder/re-post<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-25 08:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4957.php">Brad Benton: "Re: [OMPI devel] IOF round 2"</a>
<li><strong>Previous message:</strong> <a href="4955.php">Jeff Squyres: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>In reply to:</strong> <a href="4955.php">Jeff Squyres: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4960.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Reply:</strong> <a href="4960.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 25 November 2008, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 24, 2008, at 1:34 PM, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I originally posted this to the users list maybe it should have gone
</span><br>
<span class="quotelev2">&gt; &gt; here. I
</span><br>
<span class="quotelev2">&gt; &gt; talked to Jeff Squyres about this bug at SC08 and he thought it
</span><br>
<span class="quotelev2">&gt; &gt; would be nice
</span><br>
<span class="quotelev2">&gt; &gt; to have it fixed before 1.3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The bug probably is in ompi/datatype/
</span><br>
<span class="quotelev2">&gt; &gt; dt_copy.c:ompi_ddt_copy_content_same_ddt
</span><br>
<span class="quotelev2">&gt; &gt; unless I misunderstood Jeff :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Original post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2008/11/7318.php">http://www.open-mpi.org/community/lists/users/2008/11/7318.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delays; almost no real work got done by many of us last
</span><br>
<span class="quotelev1">&gt; week because of SC08.
</span><br>
<p>No worries, I'm in no hurry I just wanted to make sure it didn't get lost in 
<br>
the post-SC noise.
<br>
<p><span class="quotelev1">&gt; But I spoke to George about this issue last 
</span><br>
<span class="quotelev1">&gt; Thursday afternoon, and now I see that George committed r20034 that
</span><br>
<span class="quotelev1">&gt; looks like it's a fix for this issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="https://svn.open-mpi.org/trac/ompi/changeset/20034">https://svn.open-mpi.org/trac/ompi/changeset/20034</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you give the OMPI trunk a whirl and see if this fixes the problem
</span><br>
<span class="quotelev1">&gt; for you?
</span><br>
<p>I didn't have the toolchain for an autogen so I took the 20034 patch and 
<br>
applied it to 1.3b2. With the patch 1.3b2 works and without it it fails (ran 
<br>
the exact same commands and only &quot;patch ; make ; make install&quot; in between).
<br>
<p>So, thanks Jeff and George the bug appears gone as of r20034. Don't forget to 
<br>
push that to relevant branches.
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4956/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4957.php">Brad Benton: "Re: [OMPI devel] IOF round 2"</a>
<li><strong>Previous message:</strong> <a href="4955.php">Jeff Squyres: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>In reply to:</strong> <a href="4955.php">Jeff Squyres: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4960.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Reply:</strong> <a href="4960.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
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
