<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 11:41:38 2010" -->
<!-- isoreceived="20100315154138" -->
<!-- sent="Mon, 15 Mar 2010 08:41:26 -0700" -->
<!-- isosent="20100315154126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="B2379333-123A-4747-8D77-045A26353028_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="632a27d11003150818n5d8023d4kdd1f90744f0b1840_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] how to add a component in the ompi?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 11:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7592.php">Leonardo Fialho: "[OMPI devel] Silly question"</a>
<li><strong>Previous message:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7595.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 15, 2010, at 8:18 AM, hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt;  i did what you told me before to add a new component,now i could see my added component through ./configure --help.but when i run make ,i met some problems i couldn't understand.
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; libtool: Version mismatch error.  This is libtool 2.2.4, but the
</span><br>
<span class="quotelev1">&gt; libtool: definition of this LT_INIT comes from libtool 2.2.6b.
</span><br>
<span class="quotelev1">&gt; libtool: You should recreate aclocal.m4 with macros from libtool 2.2.4
</span><br>
<span class="quotelev1">&gt; libtool: and run autoconf again.
</span><br>
<span class="quotelev1">&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev1">&gt; i just dont know how to recreate aclocal.m4.Could you give a explanation or some other materials about it on line?
</span><br>
<p>This *usually* means that autogen.sh didn't run completely properly.  Did you install all the GNU Autotools in the way described in the top-level HACKING file?  (e.g., install them all to the same $prefix)
<br>
<p>If you can't find the error, send all the data listed on the <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> (please compress!).
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
<li><strong>Next message:</strong> <a href="7592.php">Leonardo Fialho: "[OMPI devel] Silly question"</a>
<li><strong>Previous message:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7594.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7595.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
