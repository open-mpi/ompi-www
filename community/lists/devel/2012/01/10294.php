<?
$subject_val = "Re: [OMPI devel] 1.4.5rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 16:03:47 2012" -->
<!-- isoreceived="20120131210347" -->
<!-- sent="Tue, 31 Jan 2012 13:03:30 -0800" -->
<!-- isosent="20120131210330" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc4 is out" -->
<!-- id="4F285722.9040402_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D35957C-BF1A-4F3E-B853-72E2568AE0FE_at_cisco.com" -->
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
<strong>Date:</strong> 2012-01-31 16:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10295.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<li><strong>Previous message:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/31/2012 12:51 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 3:48 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Must --disable-io-romio on OpenBSD
</span><br>
<span class="quotelev2">&gt;&gt; Nobody has yet told me to shutup about that one, so I mention it here for completeness.
</span><br>
<span class="quotelev2">&gt;&gt; Having looked only briefly at the failure, I see that it is in ROMIO's equivalent of opal_path_nfs().
</span><br>
<span class="quotelev2">&gt;&gt; So, there could be logic in opal/util/path.c to fix ROMIO for OpenBSD.
</span><br>
<span class="quotelev2">&gt;&gt; Of course, that is assuming no errors then pop up later in the build.
</span><br>
<span class="quotelev1">&gt; Oops -- Brad was supposed to put that in README, too.
</span><br>
<p>Nope, I looked:
<br>
$ grep -i -e romio -e bsd openmpi-1.4.5rc4/README
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Updated ROMIO to the version from MPICH2 1.0.7
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're not excited about making changes to such an old version of ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.5.x is about to transition to v1.6, meaning that it will replace the 1.4 series.  So we want to have a &quot;near perfect&quot; 1.4.5 release, but that doesn't necessarily mean making a heroic effort to update/fix some old software packages when a newer, stable version (that hopefully fixes the problem!) is around the corner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, &quot;shutup&quot; order confirmed regarding OpenBSD/ROMIO for v1.4.
<br>
However, I am 95% certain 1.5.5rc1 had the same problem (I will recheck 
<br>
shortly).
<br>
<p>-Paul
<br>
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
<li><strong>Next message:</strong> <a href="10295.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc4 may still require GNU Make"</a>
<li><strong>Previous message:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10293.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10296.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
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
