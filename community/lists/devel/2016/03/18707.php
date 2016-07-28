<?
$subject_val = "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 19:34:26 2016" -->
<!-- isoreceived="20160316233426" -->
<!-- sent="Wed, 16 Mar 2016 23:34:24 +0000" -->
<!-- isosent="20160316233424" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?" -->
<!-- id="80D60682-4553-4317-BA2E-C22915DF4523_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjzvTgtcYNzpzvrYW0JJCkbfBFp_PKEKjUr4qmw1FTMog_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 19:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2016, at 5:38 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I now have a follow up question:
</span><br>
<span class="quotelev1">&gt; I was trying to figure this out myself by taking the backtrace from the BTLs that do work, and found that, since most of the internal functions are not exported, the backtraces contain just the addresses which are not all that helpful (this is even after building with --enable-debug.) This is going back to a question that I myself asked recently, and I am now finding out the answer the hard way!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way that all the internal functions, not explicitly declared 'static' can be made visible?
</span><br>
<p>It's actually not that the functions are static, it's that the functions are invoked via function pointer from a dlopen.  Hence, they functions aren't usually available in a corefile, and therefore they have no names.
<br>
<p>You can compile OMPI differently:
<br>
<p>&nbsp;&nbsp;./configure --disable-dlopen ...
<br>
<p>Which will slurp all the plugins up into their respective libraries.  I.e., your lf BTL will be slurped up into libopen-pal.so (assuming master/v2.x).  Then your backtraces and core files will have function names from your lf BTL.
<br>
<p>The downside of this is that when you make a change to your lf BTL, you have to -- at a minimum do:
<br>
<p><pre>
----
cd opal
make -j 32 install
----
Vs. build your lf BTL as a plugin:
----
cd opal/mca/btl/lf
make -j 32 install
-----
Which is a *lot* faster.  :-)
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18708.php">Gilles Gouaillardet: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>Previous message:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<li><strong>In reply to:</strong> <a href="18705.php">dpchoudh .: "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18706.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to 'hook' a new BTL to OMPI call chain?"</a>
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
