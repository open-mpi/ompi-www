<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:40:13 2012" -->
<!-- isoreceived="20120905154013" -->
<!-- sent="Wed, 5 Sep 2012 11:40:07 -0400" -->
<!-- isosent="20120905154007" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="29412156-9F18-4734-B5D6-403C51F18D0B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120905152501.GD14606_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3259.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3257.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3263.php">Brice Goglin: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3263.php">Brice Goglin: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree -- all of the things you mention are do-able.
<br>
<p>But it's a whole lot more bookkeeping and care/feeding to ensure that nothing goes wrong vs. just calling a hwloc core function and assuming it's there.  Such things will require maintenance over time.
<br>
<p>In the end -- it's a tradeoff:
<br>
<p>- do we want the maintenance associated with a struct full of core function pointers?
<br>
<p>or
<br>
<p>- do we want to use the solution I mentioned in <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3253.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/09/3253.php</a>?
<br>
<p>Both have strengths / weaknesses.
<br>
<p><p><p>On Sep 5, 2012, at 11:25 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Wed 05 Sep 2012 17:13:56 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The source code shouldn't need to be modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define hwloc_foo_bar(arg1, arg2) hwloc_funcs-&gt;foo_bar(arg1, arg2)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You need to make sure that #define is only effected in certain places in the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, all the places that will constitute a plugin, no?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And you need to ensure that hwloc_funcs-&gt;[foo] isn't attempted to be used before it has been filled in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I said in my earlier mail, hwloc_funcs would be provided by the
</span><br>
<span class="quotelev1">&gt; loader of the plugin, so it can make sure it's filled in (I forgot to
</span><br>
<span class="quotelev1">&gt; mention that what I call hwloc_funcs above is an internal variable of
</span><br>
<span class="quotelev1">&gt; the plugin, not a symbol provided by libhwloc.so).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And unless there is a very fixed set of functions that can be called by plugins,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I believe we'll have to have that anyway. That was part of the
</span><br>
<span class="quotelev1">&gt; whole discussion about plugins a long time ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; you'll probably need to grow hwloc_funcs over time, which may lead to ABI issues...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure.  We can for instance make the plugin check for the size of
</span><br>
<span class="quotelev1">&gt; hwloc_funcs provided by the plugin loader vs the size that it was
</span><br>
<span class="quotelev1">&gt; compiled against, and thus refuse to get loaded by an older hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3259.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3257.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3255.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3263.php">Brice Goglin: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3263.php">Brice Goglin: "Re: [hwloc-devel] -lhwloc in components."</a>
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
