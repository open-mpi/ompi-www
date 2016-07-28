<?
$subject_val = "Re: [OMPI devel] memory binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 17:01:20 2010" -->
<!-- isoreceived="20101215220120" -->
<!-- sent="Wed, 15 Dec 2010 17:01:15 -0500" -->
<!-- isosent="20101215220115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory binding" -->
<!-- id="FCBD0BB7-EC9B-4980-A1F4-08986C567E37_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D09384C.9010304_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory binding<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 17:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>In reply to:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2010, at 4:51 PM, David Singleton wrote:
<br>
<p><span class="quotelev2">&gt;&gt; How about:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   --mca maffinity_libnuma_policy bind|preferred
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep, that appears to meet the Open MPI standards of maximal verbosity. :-)
</span><br>
<p>LOL!
<br>
<p>Yes, this &quot;verbose&quot; philosophy in the OMPI code base is pretty much my fault.  I tend to fall on the side of verbosity (vs. terseness) simply because I have a terrible memory; I find it easier to remember what the heck a_long_but_explicit_name means 6 months from now (vs. &quot;srt_trs_nm&quot;).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8779.php">Jeff Squyres: "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<li><strong>Previous message:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>In reply to:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
