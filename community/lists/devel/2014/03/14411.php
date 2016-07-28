<?
$subject_val = "Re: [OMPI devel] Missing MPI 3 definitions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 15:25:29 2014" -->
<!-- isoreceived="20140327192529" -->
<!-- sent="Thu, 27 Mar 2014 19:25:28 +0000" -->
<!-- isosent="20140327192528" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing MPI 3 definitions" -->
<!-- id="2330CC45-E396-4152-A67A-A6660F5E63A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwCUGNC0yBu0qEsQoiVYJfF1Tzg+-+2NfwKJ7r1rRbVFuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing MPI 3 definitions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 15:25:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Previous message:</strong> <a href="14410.php">Lisandro Dalcin: "[OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>In reply to:</strong> <a href="14410.php">Lisandro Dalcin: "[OMPI devel] Missing MPI 3 definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Reply:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoinks.  Those look like oversights.
<br>
<p>I see set_info and get_info on the trunk, for example -- I think we just forgot to bring them to v1.7/v1.8.
<br>
<p><p>On Mar 27, 2014, at 3:18 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In 1.7.5, you guys bumped MPI_VERSION to 3 but forgot to add
</span><br>
<span class="quotelev1">&gt; definitions for the following constants:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_ERR_RMA_SHARED
</span><br>
<span class="quotelev1">&gt; MPI_WEIGHTS_EMPTY
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, the following two functions are missing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_set_info()
</span><br>
<span class="quotelev1">&gt; MPI_Comm_get_info()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: The two missing functions are trivial to provide, the first could
</span><br>
<span class="quotelev1">&gt; simply ignore the info handle, and the second could just return a
</span><br>
<span class="quotelev1">&gt; brand new empty info handle (well, unless you implemented
</span><br>
<span class="quotelev1">&gt; MPI_Comm_dup_with_info() to actually use the info hints).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14410.php">http://www.open-mpi.org/community/lists/devel/2014/03/14410.php</a>
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
<li><strong>Next message:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Previous message:</strong> <a href="14410.php">Lisandro Dalcin: "[OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>In reply to:</strong> <a href="14410.php">Lisandro Dalcin: "[OMPI devel] Missing MPI 3 definitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Reply:</strong> <a href="14412.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing MPI 3 definitions"</a>
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
