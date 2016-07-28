<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 10:09:53 2014" -->
<!-- isoreceived="20140428140953" -->
<!-- sent="Mon, 28 Apr 2014 14:09:44 +0000" -->
<!-- isosent="20140428140944" -->
<!-- name="Atchley, Scott" -->
<!-- email="atchleyes_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="676C31AE-C22E-4D06-B24D-150AC0B9F8FB_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="20687FEB-D68F-4C94-8FD3-BC4B0F939403_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Atchley, Scott (<em>atchleyes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 10:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14628.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14626.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14594.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14631.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14631.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>The Power8 can run in little-endian mode without penalty:
<br>
<p><a href="http://www.hpcwire.com/2014/04/23/power8-openpower-might-mean-hpc/">http://www.hpcwire.com/2014/04/23/power8-openpower-might-mean-hpc/</a>
<br>
<p>Not saying hetero support is unneeded, but this case may not be it.
<br>
<p>Scott
<br>
<p>On Apr 24, 2014, at 12:54 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There seems to be an opportunity to still have heterogeneous environment in the future.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.enterprisetech.com/2014/04/23/ibm-google-show-power8-systems-openpower-efforts/">http://www.enterprisetech.com/2014/04/23/ibm-google-show-power8-systems-openpower-efforts/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don&#146;t think it is fair to shift the burden on the original developer instead of the committer who broke a feature. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2014, at 09:49 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Remove data-heterogeneous support from Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: No one uses it (it's not the default), it's broken (probably has been for a while)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Datatype engine, some configury, and a few other places
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: Tuesday teleconf, 6 May 2014 (i.e., 2 weeks from now)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It recently came to my attention that we seem to have some bit rot in the heterogeneous data representation support such that if you configure with --enable-heterogeneous, even if you run on homogeneous machines, you can get segv's with tcp,sm,self.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The heterogeneous support has never been enabled by default.  AFAIK, only Cisco tests it regularly in its MTT.  I'm be greatly surprised if many (any?) users use it at all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I have to ask myself: why do we keep this functionality around?  It seems like we should delete this code, simplify things a little, and move on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14584.php">http://www.open-mpi.org/community/lists/devel/2014/04/14584.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14594.php">http://www.open-mpi.org/community/lists/devel/2014/04/14594.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14628.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14626.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14594.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14631.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14631.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
