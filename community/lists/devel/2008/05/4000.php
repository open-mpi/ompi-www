<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 22 16:07:07 2008" -->
<!-- isoreceived="20080522200707" -->
<!-- sent="Thu, 22 May 2008 20:07:01 +0000" -->
<!-- isosent="20080522200701" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="20080522200701.GA32142_at_master.debian.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F3F7856B-99A3-4DCA-B727-FE47804A060D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-22 16:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 22, 2008 at 03:45:36PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 22, 2008, at 3:42 PM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When you install binary OMPI (which pulls in libibverbs and all the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rest), do you set the OpenFabrics kernel drivers to start upon boot?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Or does the user have to do that manually?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think so. To the best of my knowledge, we don't do anything  
</span><br>
<span class="quotelev2">&gt; &gt; explicitly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you check?
</span><br>
<p>How?
<br>
<p>Among our approximatly 20,000 binary packages, I only see
<br>
<p>&nbsp;&nbsp;&nbsp;edd_at_ron:~$ apt-cache search fabrics
<br>
&nbsp;&nbsp;&nbsp;libmthca-dev - Development files for the libmthca driver
<br>
&nbsp;&nbsp;&nbsp;libmthca1 - A userspace driver for Mellanox InfiniBand HCAs
<br>
&nbsp;&nbsp;&nbsp;libmthca1-dbg - Debugging symbols for the libmthca driver
<br>
&nbsp;&nbsp;&nbsp;edd_at_ron:~$
<br>
<p>I am not aware of anything kernel-specific happening.  That said, I could simply be unaware.  
<br>
<p>Is there a test I could run for you?    
<br>
<p>Also, if this test depends on the Debian kernel packages, then we're
<br>
back to square one as some folks (like myself) run binary kernels,
<br>
other may just hand-compile and this test may not work as we may miss
<br>
the 'Debian trigger' in those cases.
<br>
<p><span class="quotelev1">&gt; If you (or something else in Debian) start the OpenFabrics drivers  
</span><br>
<span class="quotelev1">&gt; automatically (regardless of whether there are any verbs-capable  
</span><br>
<span class="quotelev1">&gt; devices), then that kinda defeats the point of Pasha's proposed check...
</span><br>
<p>Yes, but here I can only offer a meek 'dunno, really'.  Sorry!
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3999.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="4001.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
