<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 12:43:12 2012" -->
<!-- isoreceived="20120905164312" -->
<!-- sent="Wed, 05 Sep 2012 18:43:07 +0200" -->
<!-- isosent="20120905164307" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="5047811B.6000706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29412156-9F18-4734-B5D6-403C51F18D0B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lhwloc in components.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 12:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4809)"</a>
<li><strong>Previous message:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3270.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3270.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/09/2012 17:40, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I agree -- all of the things you mention are do-able.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it's a whole lot more bookkeeping and care/feeding to ensure that nothing goes wrong vs. just calling a hwloc core function and assuming it's there.  Such things will require maintenance over time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the end -- it's a tradeoff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - do we want the maintenance associated with a struct full of core function pointers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - do we want to use the solution I mentioned in <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3253.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3253.php</a>?
</span><br>
<p>It may even be easier in hwloc since plugins are disabled by default. We
<br>
may just need to forbid --enable-static and --enabled-plugins
<br>
simultaneously.
<br>
<p>Did anybody ever complained about shared+static not being allowed
<br>
simultaneously in OMPI?
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both have strengths / weaknesses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2012, at 11:25 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres, le Wed 05 Sep 2012 17:13:56 +0200, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The source code shouldn't need to be modified:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define hwloc_foo_bar(arg1, arg2) hwloc_funcs-&gt;foo_bar(arg1, arg2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need to make sure that #define is only effected in certain places in the code.
</span><br>
<span class="quotelev2">&gt;&gt; Well, all the places that will constitute a plugin, no?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And you need to ensure that hwloc_funcs-&gt;[foo] isn't attempted to be used before it has been filled in.
</span><br>
<span class="quotelev2">&gt;&gt; As I said in my earlier mail, hwloc_funcs would be provided by the
</span><br>
<span class="quotelev2">&gt;&gt; loader of the plugin, so it can make sure it's filled in (I forgot to
</span><br>
<span class="quotelev2">&gt;&gt; mention that what I call hwloc_funcs above is an internal variable of
</span><br>
<span class="quotelev2">&gt;&gt; the plugin, not a symbol provided by libhwloc.so).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And unless there is a very fixed set of functions that can be called by plugins,
</span><br>
<span class="quotelev2">&gt;&gt; Well, I believe we'll have to have that anyway. That was part of the
</span><br>
<span class="quotelev2">&gt;&gt; whole discussion about plugins a long time ago.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you'll probably need to grow hwloc_funcs over time, which may lead to ABI issues...?
</span><br>
<span class="quotelev2">&gt;&gt; Sure.  We can for instance make the plugin check for the size of
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_funcs provided by the plugin loader vs the size that it was
</span><br>
<span class="quotelev2">&gt;&gt; compiled against, and thus refuse to get loaded by an older hwloc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4809)"</a>
<li><strong>Previous message:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3258.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3270.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3270.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
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
