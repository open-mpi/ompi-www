<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 15:20:31 2007" -->
<!-- isoreceived="20071108202031" -->
<!-- sent="Thu, 8 Nov 2007 21:20:19 +0100" -->
<!-- isosent="20071108202019" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691" -->
<!-- id="20071108202019.GV6390_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5007EC59-0784-42E1-899C-63C50D2E08C1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 15:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2596.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2585.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 08, 2007 at 08:02:09AM -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev3">&gt; &gt;&gt; All ROMIO patches *must* be coordinated with the ROMIO maintainers.
</span><br>
<span class="quotelev2">&gt; &gt; Upstream? That's the upstream patch.
</span><br>
<span class="quotelev1">&gt; That was extracted from ROMIO itself?  Which release?
</span><br>
<p><span class="quotelev1">&gt;From Jiri:
</span><br>
<p><p>The patch was extracted from a ROMIO sources that come with MPICH2 1.0.6.
<br>
<p>As noted on the ROMIO web page (<a href="http://www-unix.mcs.anl.gov/romio/">http://www-unix.mcs.anl.gov/romio/</a>):
<br>
<p>&quot;Note: The version of ROMIO described on this page is an old one. We
<br>
haven't released newer versions of ROMIO as independent packages for a
<br>
while; they were included as part of MPICH2 and MPICH-1. You can get the
<br>
latest version of ROMIO when you download MPICH2 or MPICH-1.&quot;
<br>
<p><p>--- end of Jiri ---
<br>
<p><span class="quotelev2">&gt; &gt; Jiri Polach has extracted the fix for this problem. Updating OMPI to a
</span><br>
<span class="quotelev2">&gt; &gt; newer ROMIO version should do the trick, so we might want to revert
</span><br>
<span class="quotelev2">&gt; &gt; r16693 and r16691.
</span><br>
<span class="quotelev1">&gt; It would be great to upgrade to a newer version of ROMIO.  Do you have  
</span><br>
<span class="quotelev1">&gt; the cycles to do it?
</span><br>
<p>Let's see ;) If life is going to be boring, I'll have a look at it ;)
<br>
<p><span class="quotelev1">&gt; If this is slated for v1.3, then I think it would be much better to  
</span><br>
<span class="quotelev1">&gt; back out that patch and then do a real upgrade.
</span><br>
<p>ACK.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2598.php">Torje Henriksen: "Re: [OMPI devel] Moving fragments in btl sm"</a>
<li><strong>Previous message:</strong> <a href="2596.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2585.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
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
