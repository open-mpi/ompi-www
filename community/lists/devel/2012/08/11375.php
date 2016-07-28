<?
$subject_val = "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 07:22:26 2012" -->
<!-- isoreceived="20120806112226" -->
<!-- sent="Mon, 6 Aug 2012 07:22:26 -0400" -->
<!-- isosent="20120806112226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Configure Error - Anyone Else Seeing This?" -->
<!-- id="3D824291-7A7B-4258-A86B-26E37277106F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="501E6F92.4010108_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Configure Error - Anyone Else Seeing This?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 07:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Previous message:</strong> <a href="11374.php">Yevgeny Kliteynik: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>In reply to:</strong> <a href="11374.php">Yevgeny Kliteynik: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Reply:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see where this line is (ompi/config/ompi_check_openfabrics.m4), but I don't see any syntax errors in that area.
<br>
<p>Is this a fresh SVN checkout?
<br>
<p><p>On Aug 5, 2012, at 9:05 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; On 8/5/2012 3:16 PM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 8/5/2012 12:07 PM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to configure on a pretty vanilla cluster with Mellanox HCAs, and I'm getting the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure: line 132090: syntax error near unexpected token `('
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure: line 132090: ` cluster, leave this option enabled (default:'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else seen this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nope.
</span><br>
<span class="quotelev2">&gt;&gt; Trying it now on a fresh copy...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still no problem.
</span><br>
<span class="quotelev1">&gt; Tried both with --disable-openib-dynamic-sl and w/o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI trunk: r26950 (current head).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Previous message:</strong> <a href="11374.php">Yevgeny Kliteynik: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>In reply to:</strong> <a href="11374.php">Yevgeny Kliteynik: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Reply:</strong> <a href="11376.php">Gutierrez, Samuel K: "Re: [OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
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
