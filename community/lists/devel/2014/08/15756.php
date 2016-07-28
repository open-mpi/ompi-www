<?
$subject_val = "Re: [OMPI devel] Fwd: recomended software stack for development?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 10:54:37 2014" -->
<!-- isoreceived="20140829145437" -->
<!-- sent="Fri, 29 Aug 2014 07:53:46 -0700" -->
<!-- isosent="20140829145346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: recomended software stack for development?" -->
<!-- id="FF0760FF-1A7A-49F4-A8A0-5358C8A19FB5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="632D2995-EA78-4AA2-BA94-BC77F05AE186_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: recomended software stack for development?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 10:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15757.php">Shamis, Pavel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>In reply to:</strong> <a href="15754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15758.php">Jed Brown: "[OMPI devel] Contributor License Agreement"</a>
<li><strong>Reply:</strong> <a href="15758.php">Jed Brown: "[OMPI devel] Contributor License Agreement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, welcome!
<br>
<p>Just to make things smoother: are you planning to contribute your work back to the community? If so, we'll need a signed contributor agreement - see here:
<br>
<p><a href="http://www.open-mpi.org/community/contribute/corporate.php">http://www.open-mpi.org/community/contribute/corporate.php</a>
<br>
<p><p>On Aug 29, 2014, at 7:40 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 29, 2014, at 5:36 AM, Manuel Rodr&#237;guez Pascual &lt;supermanue_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are a small development team that will soon start working in open-mpi. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Welcome!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Being total newbies on the area (both on open-mpi and in this kind of large projects), we are seeking for advise in which tools to use on the development. Any suggestion on IDE, compiler, regression testing software and everything else is more than welcome. Of course this is highly personal, but it would be great to know what you folks are using to help us decide and start working.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you'll find us all over the map on IDE.  I personally use emacs+terminal.  I know others who use vim+terminal.  Many of us use ctags and the like, but it's not quite as helpful as usual because of OMPI's heavy use of pointers.  I don't think many developers use a full-blown IDE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For compiler, I'm guessing most of us develop with gcc most of the time, although a few may have non-gcc as the default.  We test across a wide variety of compilers, so portability is important.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For regression testing, we use the MPI Testing Tool (<a href="https://svn.open-mpi.org/trac/mtt/">https://svn.open-mpi.org/trac/mtt/</a> and <a href="http://mtt.open-mpi.org/">http://mtt.open-mpi.org/</a>).  Many of us have it configured to do builds of the nightly tarballs; some of us push our results to the public database at mtt.open-mpi.org.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help. We are really looking to cooperate with the project, so we'll hopefully see you around here for a while!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious: what do you anticipate working on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might be a good idea to see our &quot;intro to the OMPI code base&quot; videos: <a href="http://www.open-mpi.org/video/?category=internals">http://www.open-mpi.org/video/?category=internals</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15754.php">http://www.open-mpi.org/community/lists/devel/2014/08/15754.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15757.php">Shamis, Pavel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>In reply to:</strong> <a href="15754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fwd: recomended software stack for development?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15758.php">Jed Brown: "[OMPI devel] Contributor License Agreement"</a>
<li><strong>Reply:</strong> <a href="15758.php">Jed Brown: "[OMPI devel] Contributor License Agreement"</a>
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
