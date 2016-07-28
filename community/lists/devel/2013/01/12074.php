<?
$subject_val = "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:40:25 2013" -->
<!-- isoreceived="20130130144025" -->
<!-- sent="Wed, 30 Jan 2013 15:40:33 +0100" -->
<!-- isosent="20130130144033" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove (broken) heterogeneous support" -->
<!-- id="20130130144033.GA12955_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CBD0EC_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove (broken) heterogeneous support<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 09:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14:36 Wed 30 Jan     , Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Jan 30, 2013, at 7:36 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; HiI have no problem with the option --enable-heterogeneous, when I build
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI, but Open MPI will not work in a heterogeneous environment
</span><br>
<span class="quotelev2">&gt; &gt; with little and big endian machines,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right -- that's the issue: --enable-heterogeneous is broken (and has been for a long time).  No one has stepped up to fix it, so we might as well disable the option so that users don't think that we support it.
</span><br>
<p>But isn't heterogeneity the main reason for having MPI datatypes in
<br>
the first place? Otherwise I could always use MPI_CHAR and sizeof(Foo).
<br>
<p><span class="quotelev2">&gt; &gt; while LAM MPI can handle such
</span><br>
<span class="quotelev2">&gt; &gt; environments. You wanted to solve this problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/3430">https://svn.open-mpi.org/trac/ompi/ticket/3430</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood.  But the reality is that this is a very uncommon feature, and we apparently don't have the resources to fix it.  :-\
</span><br>
<p>Could you give a rough estimate on how much effort this would be?
<br>
<p>Best
<br>
-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12074/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="12073.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="12075.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
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
