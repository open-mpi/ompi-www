<?
$subject_val = "Re: [OMPI devel] 1.4.5rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:49:04 2012" -->
<!-- isoreceived="20120131204904" -->
<!-- sent="Tue, 31 Jan 2012 12:48:47 -0800" -->
<!-- isosent="20120131204847" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc4 is out" -->
<!-- id="4F2853AF.8080405_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52AB6CAA-1AA1-4742-A3C0-2B349CDEB7DA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc4 is out<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:48:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You killed off many of my &quot;corner case&quot; platforms in the README, which 
<br>
is good enough for me.
<br>
<p>I've verified the gmake dependence (asm generation on BSD) has been fixed.
<br>
<p>I've also confirmed that MacOS 10.3 is gracefully rejected by configure.
<br>
<p>However, in addition to the reported &quot;almost&quot; on opal/util/path.c, I 
<br>
found another of &quot;my 8&quot; still unaddressed:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Must --disable-io-romio on OpenBSD
</span><br>
<p>Nobody has yet told me to shutup about that one, so I mention it here 
<br>
for completeness.
<br>
Having looked only briefly at the failure, I see that it is in ROMIO's 
<br>
equivalent of opal_path_nfs().
<br>
So, there could be logic in opal/util/path.c to fix ROMIO for OpenBSD.
<br>
Of course, that is assuming no errors then pop up later in the build.
<br>
<p>-Paul
<br>
<p><p>On 1/31/2012 11:21 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hot on the heels of rc3, rc4 is out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main differences are the 8 issues that Paul Hargrove mentioned:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make v1.4 configure fail on OS X 10.3 and earlier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix opal/util/path.c for Linux with old compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; README updates for the Sun compilers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; README updates noting systems that are no longer supported
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix assembly generation code on BSD in v1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
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
