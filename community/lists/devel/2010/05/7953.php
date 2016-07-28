<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 19:59:21 2010" -->
<!-- isoreceived="20100517235921" -->
<!-- sent="Mon, 17 May 2010 17:59:19 -0600" -->
<!-- isosent="20100517235919" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="741A2805-CA11-4345-B1C2-C45B6E805375_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170567A1_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove all other paffinity components<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 19:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HWLOC could be extended to support Red Storm, probably, but we don't have the need or time to do such an implementation.  Given that, I'm not really picky about what the method of not breaking an existing supported platform is, but I think having HAVE_HWLOC defines everywhere is a bad idea...
<br>
<p>Brian
<br>
<p>On May 17, 2010, at 7:51 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Can hwloc be extended to support redstorm?  I.e., does your os export the topology info and/or support process binding?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hwloc *is* an open mpi sub project, after all...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than extending hwloc, I don't know what else to do besides #if OPAL_HAVE_HWLOC - the hwloc api is kinda big. In this way, hwloc is just like any other library that ompi uses. It just happens to be in the tree because a) its usedful to us and b) it isn't widely already-installed. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Mon May 17 17:36:58 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: Remove all other paffinity components
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd prefer we not commit something in opal/hwloc until we have a plan for supporting platforms without hwloc support (ie, Red Storm).  I have no objection to your original RFC, but I had the impression at the time that you had a plan in place for non-hwloc supported platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 17, 2010, at 5:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2010, at 4:39 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, to ensure I understand, you are proposing that we completely eliminate the paffinity framework and commit to hwloc in its place?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think there's 2 issues here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - topology information
</span><br>
<span class="quotelev2">&gt;&gt; - binding
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc supports both.  paffinity mainly supports binding; it also supports some minor socket/core mapping information stuff, but mainly as a means to support binding better.  hwloc's topology information is far more complete than paffinity's.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How about this?  (and this is very half-baked)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - commit hwloc to opal/hwloc; the entire tree can call it
</span><br>
<span class="quotelev2">&gt;&gt; - it's still TBD how to compile this out (e.g., for embedded environments)
</span><br>
<span class="quotelev2">&gt;&gt; - it *may* need something like #if OPAL_HAVE_HWLOC
</span><br>
<span class="quotelev2">&gt;&gt; - split paffinity into two frameworks (because some OS's support one and not the other):
</span><br>
<span class="quotelev2">&gt;&gt; - binding: just for getting and setting processor affinity
</span><br>
<span class="quotelev2">&gt;&gt; - hwmap: just for mapping (board, socket, core, hwthread) &lt;--&gt; OS processor ID
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In this way, if hwloc ever dies, we can still have OS-specific plugins for these two things, and the #if OPAL_HAVE_HWLOC will be 0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc provides a very rich API for traversing the topology information; I don't think the main OPAL/ORTE/OMPI code base necessarily needs all of that functionality for the general case -- i.e., the binding/hwmap information (e.g., just want to bind a process to (board 1, socket 3, core 2, hwthread 1)).  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anything that needs the detailed hwloc information (e.g., tuning the sm btl based on cache sizes reported by hwloc) can use #if OPAL_HAVE_HWLOC to protect itself.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7952.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7954.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
