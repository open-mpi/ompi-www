<?
$subject_val = "[OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:18:56 2012" -->
<!-- isoreceived="20120131201856" -->
<!-- sent="Tue, 31 Jan 2012 12:18:38 -0800" -->
<!-- isosent="20120131201838" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed" -->
<!-- id="4F284C9E.4060003_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>Previous message:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>Reply:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like you /almost/ got it this time.
<br>
<p>For opal/util/path.c you only fixed 1 out of 3 instances of defined(linux).
<br>
So, now it fails to compile ('buf' is undefined) rather than failing one 
<br>
test at &quot;make check&quot;.
<br>
<p>And, by the way the fix you did apply:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;defined(linux) || defined(__linux) || defined(__linux__)&quot;
<br>
is probably overkill.
<br>
As I had noted toward the bottom of 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10268.php">http://www.open-mpi.org/community/lists/devel/2012/01/10268.php</a> , there 
<br>
are many instances of &quot;defined(__linux__)&quot; that seem to work fine.  So, 
<br>
that alone should be fine.
<br>
<p>-Paul
<br>
<p>On 1/31/2012 11:21 AM, Jeff Squyres wrote:
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
<li><strong>Next message:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>Previous message:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Jeff Squyres: "[OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
<li><strong>Reply:</strong> <a href="10291.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4: opal_path_nfs() ALMOST fixed"</a>
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
