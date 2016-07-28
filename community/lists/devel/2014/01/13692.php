<?
$subject_val = "Re: [OMPI devel] shared lib version on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 09:50:33 2014" -->
<!-- isoreceived="20140110145033" -->
<!-- sent="Fri, 10 Jan 2014 14:50:31 +0000" -->
<!-- isosent="20140110145031" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared lib version on trunk" -->
<!-- id="49620987-0BE9-4935-A0FA-1EE22888786B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52D00858.4080804_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared lib version on trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 09:50:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13691.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13690.php">marco atzeri: "[OMPI devel] shared lib version on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13699.php">marco atzeri: "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>Reply:</strong> <a href="13699.php">marco atzeri: "Re: [OMPI devel] shared lib version on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 9:48 AM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; building openmpi-1.9a1r30128-1, I notice
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; # Version information for libmpi.
</span><br>
<span class="quotelev1">&gt; current=0
</span><br>
<span class="quotelev1">&gt; age=0
</span><br>
<span class="quotelev1">&gt; revision=0
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while on 1.7.3 is
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; # Version information for libmpi.
</span><br>
<span class="quotelev1">&gt; current=3
</span><br>
<span class="quotelev1">&gt; age=2
</span><br>
<span class="quotelev1">&gt; revision=0
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this intentional ?
</span><br>
<p>Yes.  We keep it 0/0/0 on the trunk (since the trunk is for developers only, we don't really need to care about ABI issues there), and only update the versions on the release branch more-or-less immediately before individual releases.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13693.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>Previous message:</strong> <a href="13691.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13690.php">marco atzeri: "[OMPI devel] shared lib version on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13699.php">marco atzeri: "Re: [OMPI devel] shared lib version on trunk"</a>
<li><strong>Reply:</strong> <a href="13699.php">marco atzeri: "Re: [OMPI devel] shared lib version on trunk"</a>
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
