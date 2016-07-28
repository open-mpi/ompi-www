<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  7 19:43:14 2013" -->
<!-- isoreceived="20130707234314" -->
<!-- sent="Sun, 7 Jul 2013 16:43:06 -0700" -->
<!-- isosent="20130707234306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="B5853849-1063-4B60-9869-BA9FA683492D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4B1D453D_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using external libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-07 19:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12538.php">mohammad assadsolimani: "[OMPI devel] max. message size"</a>
<li><strong>Previous message:</strong> <a href="12536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been playing with this some more and have it working, though I need Jeff to help resolve one lingering issue.
<br>
<p>However, I ran across a couple of things that you folks are going to need to think about for Fedora:
<br>
<p>1. the current libevent rpm doesn't include the header files, so users will need to install both libevent and libevent-headers. In addition, the current libevent rpm is built -without- thread support, which we require. Thus, it is missing the required libevent_pthreads library. We will detect the lack of this library and abort configure, so at least we won't build something that can't run. However, it does mean that your users won't be able to use the OMPI rpm unless you get some changes in the libevent rpm.
<br>
<p>2. current libevent rpm version level for CentOS, at least, is very old - like version 1.4. We are currently using version 2.0.21, so you can see the gap. In fact, version 1.4 doesn't even contain some of the functions we require. I've added a test for this and will abort the configure in such cases. However, it again means your users may not be able to use the OMPI rpm - it'll just be a question of what libevent version is available on their platform.
<br>
<p>As we've been saying, we didn't just choose to include libevent without reason. It's a critical part of the OMPI system, and we have requirements both in terms of its revision level and how it is configured.
<br>
<p>I hope to have the external libevent support committed to the trunk, and then moved to the 1.7 branch in the upcoming weeks. It'll be up to you folks to figure out how you're going to make this all work :-/
<br>
<p>Of course, users can always just build from source obtained from our web site...
<br>
Ralph
<br>
<p><p>On May 2, 2013, at 5:52 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 1, 2013, at 10:32 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Great!  I'll try to take a look at next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hold off on this -- Ralph and I looked at this a bit closer, and the work is not quite complete yet (read: it doesn't work).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed another message about using a threaded libevent after all on the devel list.  What is the status of that?  Do we still need to produce a non-threaded libevent in Fedora?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  We can look at porting this external libevent support to the v1.7 series (where we *don't* have threading enabled), but I honestly do not know how difficult that will be -- it's actually a fairly complex implementation on the trunk.  As such, I can't promise that it will actually make it to the v1.7 series (it has already taken 10+ developer hours, with more to go -- and I don't know how much more on top of that will be required for a v1.7 port).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I realize how allergic distros are to having duplicate libraries.  But please very, very strongly consider that Open MPI has wholly embedded libevent FOR YEARS, and a) no one complained, b) no one cared, and c) no harm was done.  The libevent copy is *wholly contained inside libopen-pal.so*, so it's not like anyone else can link against our libevent, anyway.  In short: it's not externally visible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we made the fact that we are wholly embedding libevent more obvious in the v1.7 series, but it does not change history.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that we definitely plan to make the external-libevent functionality available in the v1.9 series, it may be a LOT simpler to just allow Open MPI v1.7 to embed libevent.  And then v1.9 will eventually fix the situation the way they want.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12538.php">mohammad assadsolimani: "[OMPI devel] max. message size"</a>
<li><strong>Previous message:</strong> <a href="12536.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Dead code removal"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12343.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12540.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
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
