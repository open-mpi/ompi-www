<?
$subject_val = "Re: [OMPI devel] Open MPI autogen.pl in tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 12:10:06 2015" -->
<!-- isoreceived="20151030161006" -->
<!-- sent="Fri, 30 Oct 2015 16:09:33 +0000" -->
<!-- isosent="20151030160933" -->
<!-- name="Barrett, Brian" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI autogen.pl in tarball" -->
<!-- id="2B17DFB6-787E-4C84-8EC8-B3ED2406E65C_at_amazon.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="03C964CC-370D-4010-BFFA-6FE7626FE37B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI autogen.pl in tarball<br>
<strong>From:</strong> Barrett, Brian (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 12:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18323.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm late replying (sigh), but I think I was the one who originally pushed for including autogen.pl in the tarball.  My believe is that (modulo the &quot;right&quot; autotools being installed), you should be able to rebuild the tarball from the tarball.  This is useful for outside organizations who want to suck in a &quot;release&quot;, and add some modifications like a new BTL.  Yeah, you can pull from git, but every project has their own branch and tag methodologies, which can make for a maintenance headache.  Much easier to just suck in the tarball.
<br>

<br>
However, I do like Gilles' suggestion to make autogen.pl be a little smarter.  If I recall correctly (and it's been a couple years now), I think that's what GASNet does with their bootstrap script.  Seems like everyone gets what they want :).
<br>

<br>
Brian
<br>

<br>
On 10/27/15, 5:23 PM, &quot;devel on behalf of Jeff Squyres (jsquyres)&quot; &lt;devel-bounces_at_[hidden] on behalf of jsquyres_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt;On Oct 27, 2015, at 4:46 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; my 0.02 US$ ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - autogen.pl was recently used with v1.10 on a PowerPC Little Endian arch
</span><br>
<span class="quotelev2">&gt;&gt; (that was mandatory since the libtool we use to generate v1.10 series do not yet support PPC LE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;True.  But we fixed that; it'll be in 1.10.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - if we remove (from the tarball) autogen.pl, should we also remove configure.ac ?
</span><br>
<span class="quotelev2">&gt;&gt;  and what about m4 files and Makefile.am ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nope; if we remove those, the dependencies will be off and Bad Things will happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - an alternative to removing autogen.pl (from the tarball) is to have autogen.pl
</span><br>
<span class="quotelev2">&gt;&gt;  test repo_rev and/or tarball_version from VERSION so we can detect if autogen.pl is ran
</span><br>
<span class="quotelev2">&gt;&gt;  from a tarball. in that case, we could fail with a message such as
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;you might not want to do that, but if you really do, re-run autogen.pl with the --force parameter&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That's a good idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18296.php">http://www.open-mpi.org/community/lists/devel/2015/10/18296.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>

<br>

<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18323.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Reply:</strong> <a href="18325.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
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
