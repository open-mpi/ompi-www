<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 15:18:04 2014" -->
<!-- isoreceived="20140128201804" -->
<!-- sent="Tue, 28 Jan 2014 13:18:03 -0700" -->
<!-- isosent="20140128201803" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2 is out" -->
<!-- id="52E8107B.2050504_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9DA6F44-93DE-4313-BDC1-409714DCD9EC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2 is out<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 15:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13932.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/27/2014 08:54 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; In the usual location:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lots of changes since 1.7.4rc1, but we didn't keep a good NEWS file between the two, so I can't list them all here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Why does mpio.h get installed?  For the Fedora package I end up with:
<br>
<p>/usr/lib64/openmpi/include/mpio.h
<br>
<p>but it is listed here in openmpi-1.7.4rc2/ompi/mca/io/romio/romio/Makefile.am:
<br>
<p># nodist_ b/c these are created by config.status and should not be distributed
<br>
nodist_include_HEADERS += include/mpio.h
<br>
noinst_HEADERS += include/io_romio_conv.h
<br>
<p>Confusion between nodist/noinst?  We define --includedir to be
<br>
/usr/include/openmpi-x86_64 so if it should be installed it should be
<br>
installed there.
<br>
<p>Thanks,
<br>
<p>&nbsp;Orion
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>In reply to:</strong> <a href="13932.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13939.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
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
