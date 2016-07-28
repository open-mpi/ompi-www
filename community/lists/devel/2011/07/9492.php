<?
$subject_val = "Re: [OMPI devel] Tarball distribution";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 10 09:09:28 2011" -->
<!-- isoreceived="20110710130928" -->
<!-- sent="Sun, 10 Jul 2011 09:09:23 -0400" -->
<!-- isosent="20110710130923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Tarball distribution" -->
<!-- id="88741237-5ED9-4C0B-840E-B64946A318C2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110627210725.284920_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Tarball distribution<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-10 09:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9493.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9491.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have finally updated the following:
<br>
<p>1. v1.4 series: AC 2.63, AM 1.10.3, LT 2.2.6b, m4 1.4.11
<br>
2. v1.5 series: AC 2.65, AM 1.11.1, LT 2.2.6b, m4 1.4.13
<br>
3. trunk:       AC 2.58, AM 1.11.1, LT 2.4,    m4 1.4.16
<br>
<p>All nightly snapshot tarballs built starting today will used these versions.  Open MPI v1.4.4 and v1.5.4 will use these versions.
<br>
<p>See <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a> for the full version number chart.
<br>
<p><p><p>On Jun 27, 2011, at 5:07 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, you should definitely do that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Mon, Jun 27, 2011 at 03:58:14PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; We lock in a specific set of Autotools for a given release series and try very hard not to change them for the life of that series, just to prevent unexpected incompatibilities / issues.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The v1.4 series is using:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; AC 2.63
</span><br>
<span class="quotelev2">&gt;&gt; AM 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; LT 2.2.6b
</span><br>
<span class="quotelev2">&gt;&gt; m4 1.4.11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The v1.5 series is using:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; AC 2.65
</span><br>
<span class="quotelev2">&gt;&gt; AM 1.11
</span><br>
<span class="quotelev2">&gt;&gt; LT 2.2.6b
</span><br>
<span class="quotelev2">&gt;&gt; m4 1.4.13
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The upgrade to AM 1.10.3 (for the v1.4 series) and 1.11.1 (for the v1.5 series) may be tolerable.  I'll check it out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 27, 2011, at 2:09 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi John,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * John Esmet wrote on Sun, Jun 26, 2011 at 06:41:48AM CEST:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I went to untar the source code and the folders are mode 777. Call me OCD,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I find this a little strange. What's up?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Newer Automake releases should have that fixed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://thread.gmane.org/gmane.comp.sysutils.autotools.announce/131">http://thread.gmane.org/gmane.comp.sysutils.autotools.announce/131</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI should use such a newer Automake for their release process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9493.php">George Bosilca: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>Previous message:</strong> <a href="9491.php">Ralph Castain: "Re: [OMPI devel] opal_init/finalize counter --&gt; boolean"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
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
