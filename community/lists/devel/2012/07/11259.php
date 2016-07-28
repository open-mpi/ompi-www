<?
$subject_val = "[OMPI devel] Fwd: CVE-2012-3386 Automake security fix for 'make distcheck'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 15:11:26 2012" -->
<!-- isoreceived="20120709191126" -->
<!-- sent="Mon, 9 Jul 2012 15:11:21 -0400" -->
<!-- isosent="20120709191121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: CVE-2012-3386 Automake security fix for 'make distcheck'" -->
<!-- id="235E0C04-B324-4352-B7B6-D0A2857B89B3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FFB0619.40608_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: CVE-2012-3386 Automake security fix for 'make distcheck'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 15:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11260.php">Nathan Hjelm: "[OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11258.php">Nathan Hjelm: "[OMPI devel] Opal wrappers question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had just recently bumped up the Autotools triple used to create the trunk and v1.7 tarballs to include Automake 1.12.1.  Due to the notice below, I have bumped it up to 1.12.2.  Nightly tarballs starting tonight will use this new version.
<br>
<p>I have also patched the Automake that is being used to generate the v1.6 tarballs (1.11.3) per the notice below.  Nightly tarballs starting tonight will use this patched version.
<br>
<p>Since we are no longer generating tarballs for versions older than v1.6, I do not intend to patch any further versions of Automake, nor generate any new versions of older OMPI tarballs.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Stefano Lattarini &lt;stefano.lattarini_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: CVE-2012-3386 Automake security fix for 'make distcheck'
</span><br>
<span class="quotelev1">&gt; Date: July 9, 2012 12:26:01 PM EDT
</span><br>
<span class="quotelev1">&gt; To: Automake List &lt;automake_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &lt;info-gnu_at_[hidden]&gt;, &lt;autotools-announce_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU Automake 1.12.2 as well as 1.11.6 fix a locally-exploitable
</span><br>
<span class="quotelev1">&gt; security-related race condition that affects &quot;make distcheck&quot; for
</span><br>
<span class="quotelev1">&gt; all packages that use Automake.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before the fix, the recipe of the 'distcheck' target granted temporary
</span><br>
<span class="quotelev1">&gt; world-write permissions on the extracted distdir.  This introduced
</span><br>
<span class="quotelev1">&gt; a locally exploitable race condition for those who run &quot;make distcheck&quot;
</span><br>
<span class="quotelev1">&gt; with a non-restrictive umask (e.g., 022) in a directory that was
</span><br>
<span class="quotelev1">&gt; accessible by others.  A successful exploit would result in arbitrary
</span><br>
<span class="quotelev1">&gt; code execution with the privileges of the user running &quot;make distcheck&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is important to stress that this vulnerability impacts not only
</span><br>
<span class="quotelev1">&gt; the Automake package itself, but all packages with Automake-generated
</span><br>
<span class="quotelev1">&gt; makefiles.  For an effective fix it is necessary to regenerate the
</span><br>
<span class="quotelev1">&gt; Makefile.in files with a fixed Automake version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For release series older than 1.11.x, no fix has been been applied to
</span><br>
<span class="quotelev1">&gt; the the git repository, and no official new release is planned that
</span><br>
<span class="quotelev1">&gt; fixes the vulnerability.  Users interested in having such a fix in
</span><br>
<span class="quotelev1">&gt; older releases will have to apply it manually (the attached patch is
</span><br>
<span class="quotelev1">&gt; what we used on the 1.11.6 and 1.12.2 release).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue was found and fixed by Stefano Lattarini.  Jim Meyering
</span><br>
<span class="quotelev1">&gt; wrote a proof-of-concept script showing that the vulnerability is
</span><br>
<span class="quotelev1">&gt; easy to exploit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>

<br><p>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11259/0001-distcheck-never-make-part-of-distdir-world-writable.patch">0001-distcheck-never-make-part-of-distdir-world-writable.patch</a>
</ul>
<!-- attachment="0001-distcheck-never-make-part-of-distdir-world-writable.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11260.php">Nathan Hjelm: "[OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11258.php">Nathan Hjelm: "[OMPI devel] Opal wrappers question"</a>
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
