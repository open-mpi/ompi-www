<?
$subject_val = "Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 10:50:49 2015" -->
<!-- isoreceived="20150504145049" -->
<!-- sent="Mon, 4 May 2015 14:50:38 +0000" -->
<!-- isosent="20150504145038" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?" -->
<!-- id="C78B8F7B-348A-4895-A114-466AEC771BC6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0c1122dca2af4bad844c2f87df4acc38_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] is anyone seeing this on their	intel/inifinipath	cluster?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-04 10:50:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17381.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT &quot;trivial&quot; Fortran errors"</a>
<li><strong>Previous message:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
<li><strong>In reply to:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard --
<br>
<p>Have you reported this upstream?
<br>
<p><p><span class="quotelev1">&gt; On May 4, 2015, at 7:57 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am seeing it also on my cluster too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ivy4:27085] mca_base_component_repository_open: unable to open mca_btl_usnic: /ivylogin/home/rvandevaart/ompi-repos/ompi-master-uvm/64-dbg/lib/libmca_common_libfabric.so.0: undefined  symbol: psmx_eq_open (ignore
</span><br>
<span class="quotelev1">&gt; [ivy4:27085] mca_base_component_repository_open: unable to open mca_mtl_ofi: /ivylogin/home/rvandevaart/ompi-repos/ompi-master-uvm/64-dbg/lib/libmca_common_libfabric.so.0: undefined symbol: psmx_eq_open (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 01, 2015 6:08 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] is anyone seeing this on their intel/inifinipath cluster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm doing some work with master on a intel/infinipath system and there some odd undefined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; symbols errors showing up:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /users/hpp/ompi_install/lib/libmca_common_libfabric.so.0: undefined symbol: psmx_eq_open
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; anyone else seeing this on their intel/infinipath system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's bizarre is that psmx_eq_open shouldn't be visible outside of the libfabric.so itself.  So
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; having libfabric internal symbols required in a ompi mca lib seems to be incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17379.php">http://www.open-mpi.org/community/lists/devel/2015/05/17379.php</a>
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
<li><strong>Next message:</strong> <a href="17381.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT &quot;trivial&quot; Fortran errors"</a>
<li><strong>Previous message:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
<li><strong>In reply to:</strong> <a href="17379.php">Rolf vandeVaart: "Re: [OMPI devel] is anyone seeing this on their intel/inifinipath	cluster?"</a>
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
