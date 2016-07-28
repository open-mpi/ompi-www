<?
$subject_val = "Re: [OMPI devel] External loopback";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 08:43:27 2014" -->
<!-- isoreceived="20140918124327" -->
<!-- sent="Thu, 18 Sep 2014 12:43:26 +0000" -->
<!-- isosent="20140918124326" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] External loopback" -->
<!-- id="6D5F299C-4717-4B74-9789-E80AD51348A3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3BB7CA45-D2FB-4EA8-88EB-21962B22EDDF_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] External loopback<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 08:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15869.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>In reply to:</strong> <a href="15829.php">H&#229;kon Bugge: "[OMPI devel] External loopback"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox / LANL --
<br>
<p>Can you guys look into this?
<br>
<p>Thanks.
<br>
<p><p><p>On Sep 15, 2014, at 12:38 PM, H&#229;kon Bugge &lt;Hakon.Bugge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From time-to-time, and have a need for running Open MPI apps using the openib btl on a single node, where port 1 on the HCA is connected to port 2 on the same HCA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using a vintage 1.5.4, my command line would read:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec --mca btl self,openib --mca btl_openib_cpc_include oob \
</span><br>
<span class="quotelev1">&gt;   -np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:1 ./a.out  : \
</span><br>
<span class="quotelev1">&gt;   -np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, I had a need for a newer Open MPI, and compiled and installed version 1.8.2. Now the problems began ;-) Apparently, the old (and in my opinion nice)&quot;oob&quot; connection management method has disappeared. However, by modifying the command line to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec --mca btl self,openib --mca btl_openib_cpc_include udcm \
</span><br>
<span class="quotelev1">&gt;   -np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:1 ./a.out : \
</span><br>
<span class="quotelev1">&gt;   -np 1 /usr/bin/env OMPI_MCA_btl_openib_if_include=mlx4_0:2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get tons of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; connect/btl_openib_connect_udcm.c:1390:udcm_find_endpoint] could not find endpoint with port: 1, lid: 4608, msg_type: 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interestingly, the lid here is the lid for Port 2 (when port numbers start at 1). I do suspect that the printout above counts ports from zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, must I get back to an older Open MPI supporting &quot;oob&quot;, or do I have a flaw in my command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, H&#229;kon
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15829.php">http://www.open-mpi.org/community/lists/devel/2014/09/15829.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15869.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="15867.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: remove the --with-threads configure option"</a>
<li><strong>In reply to:</strong> <a href="15829.php">H&#229;kon Bugge: "[OMPI devel] External loopback"</a>
<!-- nextthread="start" -->
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
