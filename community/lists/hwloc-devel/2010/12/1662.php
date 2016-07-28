<?
$subject_val = "Re: [hwloc-devel] SWIG bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 17:49:33 2010" -->
<!-- isoreceived="20101202224933" -->
<!-- sent="Thu, 2 Dec 2010 17:49:28 -0500" -->
<!-- isosent="20101202224928" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] SWIG bindings" -->
<!-- id="F134E9C7-D043-4BAF-AC75-1BC5691B6B04_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1291325933.2480.334.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] SWIG bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 17:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1663.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1661.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1661.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1675.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1675.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2010, at 4:38 PM, Bernd Kallies wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1.1 is pretty close to done.  If you wanted to shift your work to be based on 1.1, I think you'd be pretty safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try. Currently my wrapper implements only basic things, so there
</span><br>
<span class="quotelev1">&gt; should be no problem (because it is a wrapper, only). Problems would
</span><br>
<span class="quotelev1">&gt; arise when one wants to extend the number of implemented methods.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev1">&gt; To be
</span><br>
<span class="quotelev1">&gt; honest, I expected some remarks about the completeness of the wrapper.
</span><br>
<p>My personal bias is always reading from the objects; I rarely use many of the accessors (simply because hardware may not be uniform).  That's why I thought your first set of accessors was sufficient.
<br>
<p>My $0.02: those are ok.  Go with that for a first version.  Then get some real-world users and see what they ask for.
<br>
<p><span class="quotelev2">&gt;&gt; Would you -- or your employer, if they own the code that you generate -- be able to sign this document?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The answer is yes.
</span><br>
<p>Great!
<br>
<p>FWIW, Samuel made a good point to me off-list earlier today: keeping language bindings as a separate package is worthwhile because then they can use their own language-native build/install/packaging tools rather than have to deal with the GNU autotools.  That's a relatively good argument to put stuff on CPAN (and/or push them via RPMs to the distros).
<br>
<p>At a bare minimum, I believe that if you host perl bindings on CPAN (and Red Hat Guy hosts python bindings elsewhere), we can definitely link to that site from our web site, README, ...etc.
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
<li><strong>Next message:</strong> <a href="1663.php">Jeff Squyres: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Previous message:</strong> <a href="1661.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>In reply to:</strong> <a href="1661.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1675.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
<li><strong>Reply:</strong> <a href="1675.php">Bernd Kallies: "Re: [hwloc-devel] SWIG bindings"</a>
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
