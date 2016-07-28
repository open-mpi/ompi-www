<?
$subject_val = "Re: [OMPI devel] 1.5.5rc2r25906 test results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 13 17:39:24 2012" -->
<!-- isoreceived="20120213223924" -->
<!-- sent="Mon, 13 Feb 2012 17:39:19 -0500" -->
<!-- isosent="20120213223919" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5.5rc2r25906 test results" -->
<!-- id="33AB8DCF-66FD-4557-8CB9-F29326E163F3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17R4+sWn9RaeBY3oPFM+2tZMxA0V3tvL885pdLninUEuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5.5rc2r25906 test results<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-13 17:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10407.php">Denis Nagorny: "[OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>Previous message:</strong> <a href="10405.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2012, at 4:52 AM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I just tried tonight's nightly tarball for the 1.5 branch (1.5.5rc2r25906).
</span><br>
<span class="quotelev1">&gt; I found the following issues, which I wad previously reported against 1.5.5rc1, for which I did NOT find a corresponding ticket in &quot;report/15&quot;.  My apologies is I've missed a ticket, or if any of these were deferred to 1.6.x (as was Lion+PGI, for instance).
</span><br>
<p>Many thanks for being persistent.  OMPI 1.4.5 is just about done, and we've pretty much stuck a fork in hwloc 1.3.2, so my sights are now turning back to getting OMPI 1.5.5 out the door (it's still blocking on hwloc 1.3.2, but that's darn close).
<br>
<p><span class="quotelev1">&gt; + GNU Make required for &quot;make clean&quot; due to use of non-standard $(RM)
</span><br>
<span class="quotelev1">&gt; Reported in <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10184.php">http://www.open-mpi.org/community/lists/devel/2011/12/10184.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + ROMIO uses explicit MAKE=make, causing problems if one builds ompi w/ gmake
</span><br>
<span class="quotelev1">&gt; Reported in <a href="http://www.open-mpi.org/community/lists/devel/2012/01/10300.php">http://www.open-mpi.org/community/lists/devel/2012/01/10300.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + The 1.5 branch needs the same fixes to the -fvisibility probe that Jeff and I have been discussing off-list for hwloc-1.3.2.  Basically this comes down to the fact that the 1.4 branch of OMPI has a &quot;stronger&quot; configure probe for -fvisibility than the 1.5 branch or trunk, and thus known NOT to use -fvisibility with broken icc compilers.  This may come down to a simple CMR, if one could track down when the probe was strengthened.
</span><br>
<p>I fixed all of these on the trunk and filed CMR <a href="https://svn.open-mpi.org/trac/ompi/ticket/3013">https://svn.open-mpi.org/trac/ompi/ticket/3013</a> to bring them to the v1.5 branch.
<br>
<p><span class="quotelev1">&gt; + MacOS 10.4 on ppc fails linking libvt-mpi.la (multiply defined symbols)
</span><br>
<span class="quotelev1">&gt; Reported in <a href="http://www.open-mpi.org/community/lists/devel/2011/12/10090.php">http://www.open-mpi.org/community/lists/devel/2011/12/10090.php</a>
</span><br>
<span class="quotelev1">&gt; My MacOS 10.4/x86 machine is down, but I don't believe it had this problem w/ rc1.
</span><br>
<p>I pinged the VT guys about this, and filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3014">https://svn.open-mpi.org/trac/ompi/ticket/3014</a> about it.  I won't be heartbroken if this slips to v1.6 (I actually filed it as a v1.6 bug).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10407.php">Denis Nagorny: "[OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>Previous message:</strong> <a href="10405.php">Jeff Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10400.php">Paul Hargrove: "Re: [OMPI devel] 1.5.5rc2r25906 test results"</a>
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
