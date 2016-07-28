<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 06:39:01 2012" -->
<!-- isoreceived="20120621103901" -->
<!-- sent="Thu, 21 Jun 2012 06:38:55 -0400" -->
<!-- isosent="20120621103855" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="87C520A6-9449-41EF-8205-B2FACB41D9D7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FE2F358.80502_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 06:38:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11136.php">Jeff Squyres: "[OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>Previous message:</strong> <a href="11134.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11134.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2012, at 6:11 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; As far as I understand it is not reason to rename it. The OFED-lovin components should look at $with_openib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Pasha that the reason you give for renaming openib btl seem orthogonal to renaming the btl.  
</span><br>
<p>Note that I'm not talking about renaming the BTL (*).
<br>
<p>I'm only talking about renaming --with-openib to --with-&lt;something_else&gt; (see below).
<br>
<p><span class="quotelev1">&gt; I don't like the ofed name because isn't &quot;ofed&quot; the name of the standards body and not the protocol being used?  I'd be in favor of renaming the btl ibverbs after the library the btl accesses.  However isn't this btl (and the underlying library) used with networks other than IB?
</span><br>
<p>Yes, it is used with at least 2 flavors of Ethernet networks, too -- that's why I shied away from anything with &quot;ib&quot; in the name.  But &quot;verbs&quot; is another possibility.  Here's some options:
<br>
<p>1. --with-ofed
<br>
&nbsp;&nbsp;+++ Everyone recognizes the name
<br>
&nbsp;&nbsp;--- OFED refers to a specific software package; the name is not accurate
<br>
<p>2. --with-of
<br>
&nbsp;&nbsp;--- &quot;of&quot; could mean anything; seems too generic
<br>
<p>3. --with-openfabrics
<br>
&nbsp;&nbsp;+++ Explicit, obvious as to what it is for
<br>
&nbsp;&nbsp;--- A little long, but who cares?
<br>
<p>4. --with-verbs
<br>
&nbsp;&nbsp;+++ A little shorter than &quot;openfabrics&quot;
<br>
&nbsp;&nbsp;--- A little generic of a name; not as specific as &quot;openfabrics&quot;
<br>
<p>I'm personally gravitating towards --with-openfabrics. 
<br>
<p>(*) Although renaming the openib BTL would certainly be nice, that can be a different effort.  It would definitely need some additional &quot;synonym&quot; work in the MCA for backwards compatibility during 1.7/1.8, though.  To be clear: this email thread is NOT about renaming the openib BTL.
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
<li><strong>Next message:</strong> <a href="11136.php">Jeff Squyres: "[OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>Previous message:</strong> <a href="11134.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11134.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11139.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
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
