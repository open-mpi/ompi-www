<?
$subject_val = "Re: [OMPI devel] 1.6.4rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 08:56:19 2013" -->
<!-- isoreceived="20130126135619" -->
<!-- sent="Sat, 26 Jan 2013 14:56:14 +0100 (CET)" -->
<!-- isosent="20130126135614" -->
<!-- name="Jan Engelhardt" -->
<!-- email="jengelh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc2 released" -->
<!-- id="alpine.LNX.2.01.1301261450290.25491_at_nerf07.vanv.qr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CB73A1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.4rc2 released<br>
<strong>From:</strong> Jan Engelhardt (<em>jengelh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-26 08:56:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12015.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<li><strong>In reply to:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12033.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc2 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 2013-01-26 13:25, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt;In the usual location:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Changes since rc1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Automatically provide compiler flags that compile properly on some
</span><br>
<span class="quotelev1">&gt;  types of ARM systems.
</span><br>
<span class="quotelev1">&gt;- Fix slot_list behavior when multiple sockets are specified.  Thanks
</span><br>
<span class="quotelev1">&gt;  to Siegmar Gross for reporting the problem.
</span><br>
<span class="quotelev1">&gt;- Fixed memory leak in one-sided operations.  Thanks to Victor
</span><br>
<span class="quotelev1">&gt;  Vysotskiy for letting us know about this one.
</span><br>
<p>I noticed that the openmpi Open Trace Format library and the OpenType 
<br>
font library conflict in naming one of their libraries, namely 
<br>
libotf.so. This creates a problem for system installation, but foremost 
<br>
distro packaging, since the latter is path-invariant. (Both the openmpi 
<br>
and opentype RPMs will provide the &quot;libotf.so&quot; symbol by default.)
<br>
<p>How is the outlook for doing a rename of libotf.so?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12015.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="12013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Looking for a replacement call for repeated call to	MPI_IPROBE"</a>
<li><strong>In reply to:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12033.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc2 released"</a>
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
