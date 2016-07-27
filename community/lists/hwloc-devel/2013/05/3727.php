<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 07:10:13 2013" -->
<!-- isoreceived="20130508111013" -->
<!-- sent="Wed, 8 May 2013 11:10:08 +0000" -->
<!-- isosent="20130508111008" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="71A53C0F-EE9C-41AA-AC77-2BB2A43446FE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5189F023.1050805_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 07:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3723.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think libltdl has a .pc. :(
<br>
<p>Sent from my phone. No type good.
<br>
<p>On May 8, 2013, at 2:26 AM, &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
<br>
<p>Le 08/05/2013 02:47, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<p>How's this patch?
<br>
<p>The only question I have is: how do we figure out what libraries to put in the .pc file in the --disable-shared --enable-static case?
<br>
<p>There should be a ltdl.pc for this. But I don't see any. Is there a standard way to extract this line from ltdl.la ?
<br>
dependency_libs=' -ldl'
<br>
<p>How about we do not support plugins when --enable-static is given?
<br>
<p>Brice
<br>
<p><p><p><p><p><p><p>On May 7, 2013, at 8:24 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;&lt;mailto:samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><p><p>Jeff Squyres (jsquyres), le Wed 08 May 2013 02:21:02 +0200, a &#233;crit :
<br>
<p><p>On May 7, 2013, at 6:25 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;&lt;mailto:Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><p><p>I don't have anything against this. What was the reason for not using
<br>
the default/system libltdl in OMPI? libtool was buggy when you started
<br>
using it?
<br>
<p><p><p>I neglected to answer this.
<br>
<p>Yes, plus libltdl grew new functionality that we needed (global/local symbol visibility).
<br>
<p>We might be getting to the point soon where we can rely on the installed libltdl to be new enough everywhere, but we haven't had that conversation.
<br>
<p><p>We could already check that the installed version is new enough for our
<br>
needs.
<br>
<p>Samuel
<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<p><p><p><p><p><p><p>_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<p>_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]&lt;mailto:hwloc-devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3727/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3726.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3723.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
