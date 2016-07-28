<?
$subject_val = "Re: [OMPI devel] trunk and fortran errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 15:21:18 2014" -->
<!-- isoreceived="20140710192118" -->
<!-- sent="Thu, 10 Jul 2014 19:21:17 +0000" -->
<!-- isosent="20140710192117" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk and fortran errors" -->
<!-- id="CA060039-B25C-4E85-A001-3EC14A207A0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1796A70-33A7-4656-A287-E19945DB4955_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk and fortran errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 15:21:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="15101.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<li><strong>In reply to:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15105.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15105.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike / Gilles --
<br>
<p>As of r32204, this should be fixed.  Please let me know if it now works for you.
<br>
<p>Thanks.
<br>
<p><p><p>On Jul 10, 2014, at 8:27 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm back in the office today and will be checking into this. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2014, at 5:41 AM, &quot;Gilles Gouaillardet&quot; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On CentOS 5.x, gfortran is unable to compile this simple program :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; subroutine foo ()
</span><br>
<span class="quotelev2">&gt;&gt; use, intrinsic :: iso_c_binding, only : c_ptr
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine foo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; an other workaround is to install gfortran 4.4
</span><br>
<span class="quotelev2">&gt;&gt; (yum install gcc44-gfortran)
</span><br>
<span class="quotelev2">&gt;&gt; and configure with
</span><br>
<span class="quotelev2">&gt;&gt; FC=gfortran44
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/07/09 19:46, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is almost certainly due to r32162 (Fortran commit from last night).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the moment/as a workaround, use --disable-mpi-fortran in your builds if you are building with an older gfortran.
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15089.php">http://www.open-mpi.org/community/lists/devel/2014/07/15089.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15092.php">http://www.open-mpi.org/community/lists/devel/2014/07/15092.php</a>
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
<li><strong>Next message:</strong> <a href="15103.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi.spec"</a>
<li><strong>Previous message:</strong> <a href="15101.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (2 of 5)"</a>
<li><strong>In reply to:</strong> <a href="15092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15105.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15105.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
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
