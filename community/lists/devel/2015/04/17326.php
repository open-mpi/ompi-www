<?
$subject_val = "Re: [OMPI devel] powerpc64le support [1-line patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:43:33 2015" -->
<!-- isoreceived="20150422214333" -->
<!-- sent="Wed, 22 Apr 2015 21:43:31 +0000" -->
<!-- isosent="20150422214331" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] powerpc64le support [1-line patch]" -->
<!-- id="C711AECD-A2D5-44FD-A2C5-85EB1EAEAA22_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17iCS6MuQmZggkKXvaZKqaWiYNSC3khcE_onAeq=wk21g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] powerpc64le support [1-line patch]<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17323.php">Paul Hargrove: "[OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17333.php">Paul Hargrove: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17333.php">Paul Hargrove: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2015, at 5:19 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had an opportunity to try the 1.8.5rc2 tarball on a little-endian POWER8 (aka ppc64el or powerpc64le).
</span><br>
<span class="quotelev1">&gt; The existing powerpc64 inline asm should work.
</span><br>
<p>Sweet -- I put your patch in here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/550">https://github.com/open-mpi/ompi/pull/550</a>
<br>
<p>Just to run it by the assembly / IBM/POWER gatekeepers first.  :-)
<br>
<p><span class="quotelev1">&gt; In addition to the one-line patch below, I needed to run autogen.pl with a new enough config/config.{guess,sub}.
</span><br>
<span class="quotelev1">&gt; Along the way I noticed
</span><br>
<span class="quotelev1">&gt;         opal/mca/common/libfabric/libfabric/config/config.guess
</span><br>
<span class="quotelev1">&gt;         opal/mca/common/libfabric/libfabric/config/config.sub
</span><br>
<span class="quotelev1">&gt;         opal/mca/hwloc/hwloc191/hwloc/config/config.guess
</span><br>
<span class="quotelev1">&gt;         opal/mca/hwloc/hwloc191/hwloc/config/config.sub
</span><br>
<span class="quotelev1">&gt; which appear to be too old to recognize powerpc64le and are *not* updated when autogen.pl is run.
</span><br>
<p>It's ok -- we don't run those scripts during OMPI's top-level configure (that's why they're not re-generated during autogen.pl).
<br>
<p><span class="quotelev1">&gt; I manually updated them, but somebody may want to either commit newer versions to git or teach autogen.pl to update them.
</span><br>
<span class="quotelev1">&gt; FWIW, it appears that tarballs *are* generated with up-to-date versions.  Go figure.
</span><br>
<p>I believe the script we use to make official tarballs removes/replaces *all* config.sub|guess, just to be completely thorough.  But it's overkill / just being defensive; it isn't technically necessary.
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
<li><strong>Next message:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17325.php">Tom Wurgler: "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17323.php">Paul Hargrove: "[OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17333.php">Paul Hargrove: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Reply:</strong> <a href="17333.php">Paul Hargrove: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
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
