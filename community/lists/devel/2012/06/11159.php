<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 05:44:32 2012" -->
<!-- isoreceived="20120625094432" -->
<!-- sent="Mon, 25 Jun 2012 05:44:24 -0400" -->
<!-- isosent="20120625094424" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="4FE832F8.6040400_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B8727CE9-5C9A-4BB3-88EC-C8D870DB26BD_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-25 05:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11160.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>In reply to:</strong> <a href="11157.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/23/2012 6:32 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 22, 2012, at 11:26 PM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. The behavior of --with[out]-verbs is as was described in a prior mail:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - if --with-verbs is specified, all 3 verbs-based components must succeed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - if --without-verbs is specified, all 4 verbs-based components will not build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - if --with-verbs=DIR is specified, all 3 verbs-based components must succeed and will use DIR to find verbs headers and libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does it mean that &quot;all 3 verbs-based components must succeed&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; Does that mean you cannot specify --with-verbs=DIR --with-openib --without-ofud?
</span><br>
<span class="quotelev1">&gt; Yes.  --with/without-ofud never worked, anyway (i.e., there was no code that implemented it).  Ditto that there was no --with/without-ud.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does it mean that if you specify --with-verbs=DIR  and some other dependency is not found for openib btl that the configure fails?
</span><br>
<span class="quotelev1">&gt; Yes.  Same was true for --with-openib=DIR.
</span><br>
Hmmm, I guess I could see the thinking of tying ofud and openib btls 
<br>
configuring together.  However it seems inconsistent to me that one btl 
<br>
doesn't allow you to control configuring it in or not directly.  What if 
<br>
I really do not want to build ofud but do want to build openib?
<br>
<p>That being said it seems this happened some time ago so I guess I'll 
<br>
grin and bare it.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the 4th verbs-based component this is not built when one specifies --without-verbs.
</span><br>
<span class="quotelev1">&gt; There isn't one.
</span><br>
<span class="quotelev1">&gt; You're probably thinking of hwloc; hwloc can *use* verbs, but it doesn't *require* verbs.  The other 3 (OOB UD, BTL OFUD, BTL openib) all *require* verbs and cannot be built without it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, well I just asked because in the list above *you* mention 4 verbs 
<br>
components in one of the items and I was just curious what that might me.
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11160.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11158.php">Eugene Loh: "Re: [OMPI devel] bug in r26626"</a>
<li><strong>In reply to:</strong> <a href="11157.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11161.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
