<?
$subject_val = "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 18:21:04 2012" -->
<!-- isoreceived="20120912222104" -->
<!-- sent="Wed, 12 Sep 2012 18:20:57 -0400" -->
<!-- isosent="20120912222057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1" -->
<!-- id="1BCDA255-54B5-49B1-A3C0-F780EC605213_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5050BA5C.8080702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 18:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>Previous message:</strong> <a href="20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20202.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -- you're the owner of this part of the code.  What do you want to do here?
<br>
<p>On Sep 12, 2012, at 12:37 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 12/09/2012 17:57, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Here's the r numbers with notable MX changes recently:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/26698">https://svn.open-mpi.org/trac/ompi/changeset/26698</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reverting this one fixes the problem.
</span><br>
<span class="quotelev1">&gt; And adding --mca mtl ^mx to the command works too (Doug, can you try that?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that the MTL component calls ompi_common_mx_initialize()
</span><br>
<span class="quotelev1">&gt; only once in component_init() but it calls finalize() twice: once in
</span><br>
<span class="quotelev1">&gt; component_close() and once in ompi_mtl_mx_finalize(). The attached patch
</span><br>
<span class="quotelev1">&gt; seems to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;fix_mtl_finalize.patch&gt;
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
<li><strong>Next message:</strong> <a href="20208.php">Jeff Squyres: "Re: [OMPI users] test for sctp on FreeBSD too narrow"</a>
<li><strong>Previous message:</strong> <a href="20206.php">Jed Brown: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20202.php">Brice Goglin: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
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
