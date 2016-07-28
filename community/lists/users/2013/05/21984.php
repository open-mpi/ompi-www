<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 17:59:10 2013" -->
<!-- isoreceived="20130529215910" -->
<!-- sent="Wed, 29 May 2013 15:59:04 -0600" -->
<!-- isosent="20130529215904" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4" -->
<!-- id="20130529215904.GA23619_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F64A570_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 17:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21985.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21985.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Reply:</strong> <a href="21985.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works with PGI 12.x and it better work with newer versions since offsetof is ISOC89/ANSIC.
<br>
<p>-Nathan
<br>
<p>On Wed, May 29, 2013 at 09:31:58PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Edwin --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you ask PGI support about this?  I swear that the PGI compiler suite has supported offsetof before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 29, 2013, at 5:26 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I?m having trouble building OpenMPI 1.6.4 with PGI 13.4. Suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of double... 8
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of long double... 8
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of float _Complex... 4
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of double _Complex... 8
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of long double _Complex... 8
</span><br>
<span class="quotelev2">&gt; &gt; checking alignment of void *... 8
</span><br>
<span class="quotelev2">&gt; &gt; checking for C bool type... no
</span><br>
<span class="quotelev2">&gt; &gt; checking size of _Bool... 1
</span><br>
<span class="quotelev2">&gt; &gt; checking for inline... inline
</span><br>
<span class="quotelev2">&gt; &gt; checking for C/C++ restrict keyword... __restrict
</span><br>
<span class="quotelev2">&gt; &gt; checking for weak symbol support... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking for functional offsetof macro... no
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt; + '[' 1 = 0 ']'
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21985.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Previous message:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21985.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>Reply:</strong> <a href="21985.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
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
