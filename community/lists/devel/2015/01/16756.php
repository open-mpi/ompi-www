<?
$subject_val = "Re: [OMPI devel] ompi-master build error : make	can	require	autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 11:47:38 2015" -->
<!-- isoreceived="20150107164738" -->
<!-- sent="Wed, 7 Jan 2015 08:47:33 -0800" -->
<!-- isosent="20150107164733" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-master build error : make	can	require	autotools" -->
<!-- id="01686593-A2E3-469E-A3A0-D4E753845643_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CD099F34-344D-4DB5-B866-E2C38C3D5587_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 11:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16757.php">Ralph Castain: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16755.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that makes sense. I checked and my CentOS box is actually using 1.12.4 and seems to be fine. I can update it though and probably should.
<br>
<p>FWIW: good to remember that this problem only *can* occur - it doesn&#146;t always happen, and it seems to require some unusual steps to trigger it. So I don&#146;t think it&#146;s necessary to change anything in 1.8 as we can legitimately say &#147;don&#146;t do that&#148;.
<br>
<p><p><span class="quotelev1">&gt; On Jan 7, 2015, at 6:43 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2015, at 9:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The 1.12 series had a set of problems caused by a changeover in the maintainers, so it should never be used. I&#146;m not sure if any of those issues are behind this problem, but it could be so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, I think pretty much all of us are using automake 1.14 by this time. We can discuss how far up to move the requirement, but I think 1.14 would be the right place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fair enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think we should change the set used to generate 1.8 series tarballs, though.  I think it's a good policy to keep the same autotools tuple for the entire series, unless there's a good reason to change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Dave noted, our default on our Cisco dev cluster is AM 1.13.3.  Probably just because that was the most recent version when we last did maintenance on our AM toolchain.  It's easy enough for us to update, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another point would probably be to update <a href="http://www.open-mpi.org/source/building.php">http://www.open-mpi.org/source/building.php</a> to say that the versions listed for master are a minimum version -- devs can use whatever they want (that works :-) ).  The other table lines list what tuple is used to create those tarballs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also note that per <a href="https://github.com/open-mpi/ompi/issues/311">https://github.com/open-mpi/ompi/issues/311</a>, we cannot upgrade past LT 2.4.2 right now.  This looks like a bug in LT itself (not OMPI), but I don't have a workaround/solution to go beyond LT 2.4.2 right now (and I think it's not high priority... yet).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In conclusion: I'll bump the AM version for master on building.php to be 1.13.3 because I know for a fact that it works.  If we want to move it higher than that, I don't have too strong an opinion.  :-)  I think all the other versions for master are fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16748.php">http://www.open-mpi.org/community/lists/devel/2015/01/16748.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16757.php">Ralph Castain: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16755.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>In reply to:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
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
