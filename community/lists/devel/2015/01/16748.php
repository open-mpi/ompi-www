<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make	can	require	autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 09:43:29 2015" -->
<!-- isoreceived="20150107144329" -->
<!-- sent="Wed, 7 Jan 2015 14:43:27 +0000" -->
<!-- isosent="20150107144327" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make	can	require	autotools" -->
<!-- id="CD099F34-344D-4DB5-B866-E2C38C3D5587_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="D9BA04E5-CCD0-4FFB-A0C2-B83161AD5C59_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-master build error : make	can	require	autotools<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 09:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16746.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16756.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16756.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2015, at 9:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The 1.12 series had a set of problems caused by a changeover in the maintainers, so it should never be used. I&#146;m not sure if any of those issues are behind this problem, but it could be so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I think pretty much all of us are using automake 1.14 by this time. We can discuss how far up to move the requirement, but I think 1.14 would be the right place.
</span><br>
<p>Fair enough.
<br>
<p>I don't think we should change the set used to generate 1.8 series tarballs, though.  I think it's a good policy to keep the same autotools tuple for the entire series, unless there's a good reason to change.
<br>
<p>As Dave noted, our default on our Cisco dev cluster is AM 1.13.3.  Probably just because that was the most recent version when we last did maintenance on our AM toolchain.  It's easy enough for us to update, though.
<br>
<p>Another point would probably be to update <a href="http://www.open-mpi.org/source/building.php">http://www.open-mpi.org/source/building.php</a> to say that the versions listed for master are a minimum version -- devs can use whatever they want (that works :-) ).  The other table lines list what tuple is used to create those tarballs.
<br>
<p>Also note that per <a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a>, we cannot upgrade past LT 2.4.2 right now.  This looks like a bug in LT itself (not OMPI), but I don't have a workaround/solution to go beyond LT 2.4.2 right now (and I think it's not high priority... yet).
<br>
<p>In conclusion: I'll bump the AM version for master on building.php to be 1.13.3 because I know for a fact that it works.  If we want to move it higher than that, I don't have too strong an opinion.  :-)  I think all the other versions for master are fine.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16749.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16747.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16746.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16756.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>Reply:</strong> <a href="16756.php">Ralph Castain: "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
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
