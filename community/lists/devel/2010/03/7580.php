<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 21:28:11 2010" -->
<!-- isoreceived="20100311022811" -->
<!-- sent="Wed, 10 Mar 2010 18:28:07 -0800" -->
<!-- isosent="20100311022807" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="AB426781-CD12-408C-8364-FA059BBDFC94_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="632a27d11003100853o24c290f0tf6010ea0fab96a2_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-03-10 21:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7581.php">Takayuki Seki: "[OMPI devel] ome questions about checkpoint/restart (3)"</a>
<li><strong>Previous message:</strong> <a href="7579.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7572.php">hu yaohui: "[OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Once you add a directory under ompi/mca/btl/ and add the relevant files, then the next time you run &quot;autogen.sh&quot;, it should just &quot;find&quot; the component and add it to the configure and build process.  You should not need to edit ompi/mca/btl/Makefile.am yourself.
<br>
<p>Have a look at these wiki pages; they explain point-by-point how to add a component into OMPI's source tree:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
<br>
<p><p>On Mar 10, 2010, at 8:53 AM, hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff &amp; All
</span><br>
<span class="quotelev1">&gt; i want to add a new component in the ompi,
</span><br>
<span class="quotelev1">&gt; 1: i make a dir ~/mca/btl/ht
</span><br>
<span class="quotelev1">&gt; 2:Then,i have made sure some basic functions i need to implement.
</span><br>
<span class="quotelev1">&gt; such as:
</span><br>
<span class="quotelev1">&gt; mca_btl_ht_add_procs,
</span><br>
<span class="quotelev1">&gt; mca_btl_ht_del_procs,
</span><br>
<span class="quotelev1">&gt; mca_btl_ht_alloc
</span><br>
<span class="quotelev1">&gt; mca_btl_ht_free
</span><br>
<span class="quotelev1">&gt; mca_btl_ht_finalize.
</span><br>
<span class="quotelev1">&gt; 3:after these functions,i must compile these funcitons,i copied the makefire under ~/mca/btl/tcp/,
</span><br>
<span class="quotelev1">&gt; i have seen these:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;  MCA_btl_ALL_COMPONENTS =  self sm elan gm mx ofud openib portals tcp udapl
</span><br>
<span class="quotelev1">&gt;  MCA_btl_ALL_SUBDIRS =  mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm mca/btl/mx mca/btl/o
</span><br>
<span class="quotelev1">&gt; fud mca/btl/openib mca/btl/portals mca/btl/tcp mca/btl/udapl
</span><br>
<span class="quotelev1">&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev1">&gt; add my component into these two lines is just not enough.
</span><br>
<span class="quotelev1">&gt; Can you help me out on making a right Makefile for my component under folder ~/mca/blt/ht?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; Yaohui Hu
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7581.php">Takayuki Seki: "[OMPI devel] ome questions about checkpoint/restart (3)"</a>
<li><strong>Previous message:</strong> <a href="7579.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7572.php">hu yaohui: "[OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7590.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
