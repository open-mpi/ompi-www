<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 07:09:39 2013" -->
<!-- isoreceived="20130508110939" -->
<!-- sent="Wed, 8 May 2013 11:09:32 +0000" -->
<!-- isosent="20130508110932" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="19DB18C6-41C4-4AD7-A533-D89C2F596082_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5189F662.5030201_at_inria.fr" -->
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
<strong>Date:</strong> 2013-05-08 07:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.  Ok. 
<br>
2.  My thoughts were preventing hwloc from going thru some of the pain that OMPI went thru w embedding. Libibverbs has the same problem. If you have middleware that uses plugins that, in turn, uses plugins, it's a bit complicated to support fully static builds  properly (OMPI and hwloc do, but libibverbs doesn't easily, but still, it may require a rebuild of hwloc with enable-static). Also, the problem with opening DSOs in private namespaces still exists; there's no good solution for that (when both the middleware and hwloc use plugins).  
<br>
<p><span class="quotelev1">&gt;From hwlocs perspective, the middleware author can fix the static build option, but I figured: why even go here?
</span><br>
<p>3. Open MPI also get flack for embedding lib ltdl and libevent. Although libltdl now has the built in options for using an external libltdl (which is what the distros use), why go down this road if we don't need to embed libltdl?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On May 8, 2013, at 2:53 AM, &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually, are we going too far here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) The original problem was that embedding couldn't build (it couldn't
</span><br>
<span class="quotelev1">&gt; even autoreconf) because of the embedded ltdl. Not because of plugins
</span><br>
<span class="quotelev1">&gt; being enabled. That's fixed with my patch and with yours.
</span><br>
<span class="quotelev1">&gt; tests/embedded/ runs fine now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Now, we're disallowing plugins entirely in the embedded case too.
</span><br>
<span class="quotelev1">&gt; That's kind of orthogonal to (1). I don't think we currently have a
</span><br>
<span class="quotelev1">&gt; single line of code to support this. If people want plugins and
</span><br>
<span class="quotelev1">&gt; embedded, thay will need to setup ltdl in their own configure. I don't
</span><br>
<span class="quotelev1">&gt; see any reason to prevent this. We may have users wanting this one day,
</span><br>
<span class="quotelev1">&gt; so I think we should remove the current error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) And we're disallowing included ltdl too. I am actually not against
</span><br>
<span class="quotelev1">&gt; this one. We don't use advanced ltdl features, and I don't plan to
</span><br>
<span class="quotelev1">&gt; change the plugin management code. So the installed ltdl should be fine.
</span><br>
<span class="quotelev1">&gt; But now that (1) is fixed, there's no direct reason to do (3) immediately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Previous message:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3725.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3728.php">Brice Goglin: "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
