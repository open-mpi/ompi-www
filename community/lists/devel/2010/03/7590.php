<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 15 11:18:49 2010" -->
<!-- isoreceived="20100315151849" -->
<!-- sent="Mon, 15 Mar 2010 23:18:44 +0800" -->
<!-- isosent="20100315151844" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="632a27d11003150818n5d8023d4kdd1f90744f0b1840_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB426781-CD12-408C-8364-FA059BBDFC94_at_cisco.com" -->
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
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-15 11:18:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7589.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; ALL
<br>
&nbsp;i did what you told me before to add a new component,now i could see my
<br>
added component through ./configure --help.but when i run make ,i met some
<br>
problems i couldn't understand.
<br>
&lt;snip&gt;
<br>
libtool: Version mismatch error.  This is libtool 2.2.4, but the
<br>
libtool: definition of this LT_INIT comes from libtool 2.2.6b.
<br>
libtool: You should recreate aclocal.m4 with macros from libtool 2.2.4
<br>
libtool: and run autoconf again.
<br>
&lt;/snip&gt;
<br>
i just dont know how to recreate aclocal.m4.Could you give a explanation or
<br>
some other materials about it on line?
<br>
<p>Thanks &amp; Regards
<br>
Yaohui Hu
<br>
On Thu, Mar 11, 2010 at 10:28 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Once you add a directory under ompi/mca/btl/ and add the relevant files,
</span><br>
<span class="quotelev1">&gt; then the next time you run &quot;autogen.sh&quot;, it should just &quot;find&quot; the component
</span><br>
<span class="quotelev1">&gt; and add it to the configure and build process.  You should not need to edit
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/Makefile.am yourself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have a look at these wiki pages; they explain point-by-point how to add a
</span><br>
<span class="quotelev1">&gt; component into OMPI's source tree:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateFramework</a>
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2010, at 8:53 AM, hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff &amp; All
</span><br>
<span class="quotelev2">&gt; &gt; i want to add a new component in the ompi,
</span><br>
<span class="quotelev2">&gt; &gt; 1: i make a dir ~/mca/btl/ht
</span><br>
<span class="quotelev2">&gt; &gt; 2:Then,i have made sure some basic functions i need to implement.
</span><br>
<span class="quotelev2">&gt; &gt; such as:
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_ht_add_procs,
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_ht_del_procs,
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_ht_alloc
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_ht_free
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_ht_finalize.
</span><br>
<span class="quotelev2">&gt; &gt; 3:after these functions,i must compile these funcitons,i copied the
</span><br>
<span class="quotelev1">&gt; makefire under ~/mca/btl/tcp/,
</span><br>
<span class="quotelev2">&gt; &gt; i have seen these:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MCA_btl_ALL_COMPONENTS =  self sm elan gm mx ofud openib portals tcp
</span><br>
<span class="quotelev1">&gt; udapl
</span><br>
<span class="quotelev2">&gt; &gt;  MCA_btl_ALL_SUBDIRS =  mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm
</span><br>
<span class="quotelev1">&gt; mca/btl/mx mca/btl/o
</span><br>
<span class="quotelev2">&gt; &gt; fud mca/btl/openib mca/btl/portals mca/btl/tcp mca/btl/udapl
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; add my component into these two lines is just not enough.
</span><br>
<span class="quotelev2">&gt; &gt; Can you help me out on making a right Makefile for my component under
</span><br>
<span class="quotelev1">&gt; folder ~/mca/blt/ht?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Yaohui Hu
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7589.php">Josh Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7591.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
