<?
$subject_val = "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 07:01:35 2009" -->
<!-- isoreceived="20091124120135" -->
<!-- sent="Tue, 24 Nov 2009 07:01:30 -0500" -->
<!-- isosent="20091124120130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?" -->
<!-- id="1ACD3F45-D4B1-42ED-9EA9-736183228382_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091124022844.GA17726_at_ozlabs.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 07:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Brice Goglin: "[hwloc-devel] PCI discovery for MacOSX"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0439.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0439.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2009, at 9:28 PM, Tony Breeds wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Note that hwloc's .so version number is controlled by the top-level
</span><br>
<span class="quotelev2">&gt; &gt; VERSION file.  There's a few comments in that file explaining the
</span><br>
<span class="quotelev2">&gt; &gt; deal.  It's meant to be changed manually as part of the release
</span><br>
<span class="quotelev2">&gt; &gt; process.  It will always be 0.0.0 on the SVN trunk; it will only be
</span><br>
<span class="quotelev2">&gt; &gt; non-zero on the release branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; really? Couldn't this lead to a sutuation where $app is compiled  
</span><br>
<span class="quotelev1">&gt; agaist 0.9.2
</span><br>
<span class="quotelev1">&gt; (with the .so version 0.0.0), time passes, the admin then builds the  
</span><br>
<span class="quotelev1">&gt; svn
</span><br>
<span class="quotelev1">&gt; sources and (potentially) $app stops working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.  But the SVN trunk will never be released as an official  
<br>
version.  We'll only ever release from an official SVN release branch,  
<br>
and we'll set the .so version correctly right before that release.
<br>
<p><span class="quotelev1">&gt; 0.9.2 is out there, so at some level 0.0.0 is the first public ABI,  
</span><br>
<span class="quotelev1">&gt; shouldn't
</span><br>
<span class="quotelev1">&gt; the svn version either follow the some rules as release branches or  
</span><br>
<span class="quotelev1">&gt; be given a
</span><br>
<span class="quotelev1">&gt; version (say 99.0.0) that will not match any released version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I guess it's just a matter of time, right?  Right now, the official  
<br>
released version is 0.0.0, but someday it'll be a.b.c.  Given that  
<br>
argument, if the trunk is x.y.z, then there exists the possibility  
<br>
that someday the released a.b.c could equal (or be numerically  
<br>
compatible with) x.y.z.  However, if we keep the trunk at 0.0.0, then  
<br>
it could only ever be numerically compatible with the 0.9.1 release  
<br>
(i.e., going backwards instead of going forwards).  I suppose we could  
<br>
have started 0.9.1 with .so version 1.0.0 to avoid this problem, but  
<br>
hindsight is 20/20.
<br>
<p>But I think the problem is pretty minor because we'll never release  
<br>
from the SVN trunk.
<br>
<p><span class="quotelev2">&gt; &gt; Hypothetically, the specfile should be pretty simple since we
</span><br>
<span class="quotelev2">&gt; &gt; conform to most of the GNU standards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah the only place we (possibly) run into problems is with packages  
</span><br>
<span class="quotelev1">&gt; names.
</span><br>
<span class="quotelev1">&gt; but that can be worked around :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>True.  We googled around to try to find a fairly unique name before we  
<br>
re-branded from libtopology (because there *was* a name collision with  
<br>
that project).  Hopefully it'll stay unique and/or we'll gain enough  
<br>
of a following that it'll be unambiguously &quot;claimed&quot; for this  
<br>
project.  :-)
<br>
<p><span class="quotelev1">&gt; anyway FWIW the SPEC file is at:
</span><br>
<span class="quotelev1">&gt;         <a href="http://bakeyournoodle.com/~tony/fedora/hwloc/hwloc.spec">http://bakeyournoodle.com/~tony/fedora/hwloc/hwloc.spec</a>
</span><br>
<span class="quotelev1">&gt; it still needs some work, as as you say it's pretty basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Awesome -- thanks!
<br>
<p>Do you want to commit that?  If we keep the analog to the OMPI  
<br>
project, we'd put it under contrib/dist/linux/hwloc.spec.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0424.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0422.php">Brice Goglin: "[hwloc-devel] PCI discovery for MacOSX"</a>
<li><strong>In reply to:</strong> <a href="0421.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0439.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0439.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
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
