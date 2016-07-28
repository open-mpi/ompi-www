<?
$subject_val = "[OMPI devel] Fwd: Subversion 1.5.4 Released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 20:45:12 2008" -->
<!-- isoreceived="20081025004512" -->
<!-- sent="Fri, 24 Oct 2008 20:45:05 -0400" -->
<!-- isosent="20081025004505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: Subversion 1.5.4 Released" -->
<!-- id="D7CBD3E9-E535-4142-BEAF-E2B2CF29D860_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4901C860.2000008_at_mail.utexas.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: Subversion 1.5.4 Released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-24 20:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4807.php">Brad Penoff: "[OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI -- if you're still using SVN for branches, you might want to  
<br>
upgrade to 1.5.4 if you already upgraded to 1.5.3, because there's  
<br>
apparently a regression in &quot;svn merge&quot;.  See below.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Hyrum K. Wright&quot; &lt;hyrum_wright_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: October 24, 2008 9:06:40 AM EDT
</span><br>
<span class="quotelev1">&gt; To: &quot;dev_at_[hidden]&quot; &lt;dev_at_[hidden]&gt;,  
</span><br>
<span class="quotelev1">&gt; subversion-users &lt;users_at_[hidden]&gt;, announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Subversion 1.5.4 Released
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm happy to announce Subversion 1.5.4, fast on the heels of  
</span><br>
<span class="quotelev1">&gt; Subversion 1.5.3.
</span><br>
<span class="quotelev1">&gt; 1.5.3 was discovered to contain a regression in 'svn merge'; see  
</span><br>
<span class="quotelev1">&gt; CHANGES for
</span><br>
<span class="quotelev1">&gt; more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subversion 1.5.4 is available from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-1.5.4.tar.bz2">http://subversion.tigris.org/downloads/subversion-1.5.4.tar.bz2</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-1.5.4.tar.gz">http://subversion.tigris.org/downloads/subversion-1.5.4.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-1.5.4.zip">http://subversion.tigris.org/downloads/subversion-1.5.4.zip</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion">http://subversion.tigris.org/downloads/subversion</a>- 
</span><br>
<span class="quotelev1">&gt; deps-1.5.4.tar.bz2
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-deps-1.5.4.tar.gz">http://subversion.tigris.org/downloads/subversion-deps-1.5.4.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-deps-1.5.4.zip">http://subversion.tigris.org/downloads/subversion-deps-1.5.4.zip</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MD5 checksums are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    037d1ed7a313631d50defdc3cf727415  subversion-1.5.4.tar.bz2
</span><br>
<span class="quotelev1">&gt;    8ec0a6e756c35dc3ce20abb580040924  subversion-1.5.4.tar.gz
</span><br>
<span class="quotelev1">&gt;    7147a14610c943e59ca9c3a2800138db  subversion-1.5.4.zip
</span><br>
<span class="quotelev1">&gt;    78473cf003ad707b7b27a954cebd35cf  subversion-deps-1.5.4.tar.bz2
</span><br>
<span class="quotelev1">&gt;    2bae8b9577541841bfb9d1f4cca43fef  subversion-deps-1.5.4.tar.gz
</span><br>
<span class="quotelev1">&gt;    ea11be3b7df422bb42fa1b8781c0fae2  subversion-deps-1.5.4.zip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The SHA1 checksums are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    0bebb7029fcf3c0638206c22a1ba9526121e4365  subversion-1.5.4.tar.bz2
</span><br>
<span class="quotelev1">&gt;    5653a9f91972a2f0609401b357e6b275857c4f1f  subversion-1.5.4.tar.gz
</span><br>
<span class="quotelev1">&gt;    027dae63637c312118db439db1a7adf258d95eca  subversion-1.5.4.zip
</span><br>
<span class="quotelev1">&gt;    e7f5fd0f22cb42c89af6f4cec6e51f8528ed3cb8  subversion- 
</span><br>
<span class="quotelev1">&gt; deps-1.5.4.tar.bz2
</span><br>
<span class="quotelev1">&gt;    25b03b67f4898385fd1991c5a12cbaa74411e695  subversion- 
</span><br>
<span class="quotelev1">&gt; deps-1.5.4.tar.gz
</span><br>
<span class="quotelev1">&gt;    5dbc0544ada6dd05c9e0fa250f043682d26e2e11  subversion-deps-1.5.4.zip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGP Signatures are available at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-1.5.4.tar.bz2.asc">http://subversion.tigris.org/downloads/subversion-1.5.4.tar.bz2.asc</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-1.5.4.tar.gz.asc">http://subversion.tigris.org/downloads/subversion-1.5.4.tar.gz.asc</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-1.5.4.zip.asc">http://subversion.tigris.org/downloads/subversion-1.5.4.zip.asc</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-deps-1.5.4.tar.bz2.asc">http://subversion.tigris.org/downloads/subversion-deps-1.5.4.tar.bz2.asc</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion-deps-1.5.4.tar.gz.asc">http://subversion.tigris.org/downloads/subversion-deps-1.5.4.tar.gz.asc</a>
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/downloads/subversion">http://subversion.tigris.org/downloads/subversion</a>- 
</span><br>
<span class="quotelev1">&gt; deps-1.5.4.zip.asc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For this release, the following people have provided PGP signatures:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Senthil Kumaran S [1024D/6CCD4038] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    8035 16A5 1D6E 50E2 1ECD  DE56 F68D 46FB 6CCD 4038
</span><br>
<span class="quotelev1">&gt;   Paul T. Burba [1024D/53FCDC55] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    E630 CF54 792C F913 B13C  32C5 D916 8930 53FC DC55
</span><br>
<span class="quotelev1">&gt;   Julian Foad [1024D/353E25BC] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    6604 5A4B 43BC F994 7777  5728 351F 33E4 353E 25BC
</span><br>
<span class="quotelev1">&gt;   Bert Huijben [1024D/9821F7B2] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    2017 F51A 2572 0E78 8827  5329 FCFD 6305 9821 F7B2
</span><br>
<span class="quotelev1">&gt;   Hyrum K. Wright [1024D/4E24517C] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    3324 80DA 0F8C A37D AEE6  D084 0B03 AE6E 4E24 517C
</span><br>
<span class="quotelev1">&gt;   Mark Phippard [1024D/035A96A9] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    D315 89DB E1C1 E9BA D218  39FD 265D F8A0 035A 96A9
</span><br>
<span class="quotelev1">&gt;   Kamesh Jayachandran [1024D/ED184C2C] with fingerprint:
</span><br>
<span class="quotelev1">&gt;    3E5B 5C1D 1CA6 A611 2787  9B4B DD61 EFC8 ED18 4C2C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Release notes for the 1.5.x release series may be found at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://subversion.tigris.org/svn_1.5_releasenotes.html">http://subversion.tigris.org/svn_1.5_releasenotes.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can find the list of changes between 1.5.4 and earlier versions  
</span><br>
<span class="quotelev1">&gt; at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://svn.collab.net/repos/svn/tags/1.5.4/CHANGES">http://svn.collab.net/repos/svn/tags/1.5.4/CHANGES</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions, comments, and bug reports to users_at_subversion.tigris.org.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - The Subversion Team
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4807.php">Brad Penoff: "[OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
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
