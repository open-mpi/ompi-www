<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 08:40:59 2012" -->
<!-- isoreceived="20120621124059" -->
<!-- sent="Thu, 21 Jun 2012 08:40:52 -0400" -->
<!-- isosent="20120621124052" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="4FE31654.50400_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87C520A6-9449-41EF-8205-B2FACB41D9D7_at_cisco.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 08:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11138.php">Jeff Squyres: "Re: [OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>In reply to:</strong> <a href="11135.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/21/2012 6:38 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 21, 2012, at 6:11 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As far as I understand it is not reason to rename it. The OFED-lovin components should look at $with_openib.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree with Pasha that the reason you give for renaming openib btl seem orthogonal to renaming the btl.
</span><br>
<span class="quotelev1">&gt; Note that I'm not talking about renaming the BTL (*).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm only talking about renaming --with-openib to --with-&lt;something_else&gt;  (see below).
</span><br>
So you specify --with-ofed and you get mca_btl_openib generated?  
<br>
ICK!!!  I think that will just make things more confusing.  I am against 
<br>
this unless you change the btl name.
<br>
<span class="quotelev2">&gt;&gt; I don't like the ofed name because isn't &quot;ofed&quot; the name of the standards body and not the protocol being used?  I'd be in favor of renaming the btl ibverbs after the library the btl accesses.  However isn't this btl (and the underlying library) used with networks other than IB?
</span><br>
<span class="quotelev1">&gt; Yes, it is used with at least 2 flavors of Ethernet networks, too -- that's why I shied away from anything with &quot;ib&quot; in the name.  But &quot;verbs&quot; is another possibility.  Here's some options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. --with-ofed
</span><br>
<span class="quotelev1">&gt;    +++ Everyone recognizes the name
</span><br>
<span class="quotelev1">&gt;    --- OFED refers to a specific software package; the name is not accurate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. --with-of
</span><br>
<span class="quotelev1">&gt;    --- &quot;of&quot; could mean anything; seems too generic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. --with-openfabrics
</span><br>
<span class="quotelev1">&gt;    +++ Explicit, obvious as to what it is for
</span><br>
<span class="quotelev1">&gt;    --- A little long, but who cares?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. --with-verbs
</span><br>
<span class="quotelev1">&gt;    +++ A little shorter than &quot;openfabrics&quot;
</span><br>
<span class="quotelev1">&gt;    --- A little generic of a name; not as specific as &quot;openfabrics&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm personally gravitating towards --with-openfabrics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (*) Although renaming the openib BTL would certainly be nice, that can be a different effort.  It would definitely need some additional &quot;synonym&quot; work in the MCA for backwards compatibility during 1.7/1.8, though.  To be clear: this email thread is NOT about renaming the openib BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11138.php">Jeff Squyres: "Re: [OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>In reply to:</strong> <a href="11135.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11140.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
