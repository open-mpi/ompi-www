<?
$subject_val = "Re: [OMPI devel] Tarball distribution";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 09:58:33 2011" -->
<!-- isoreceived="20110627135833" -->
<!-- sent="Mon, 27 Jun 2011 09:58:14 -0400" -->
<!-- isosent="20110627135814" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Tarball distribution" -->
<!-- id="0EC27D95-E1FA-426C-9669-6CDB9498C8AA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110627060923.238080_at_gmx.net" -->
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
<strong>Date:</strong> 2011-06-27 09:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9430.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9428.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Reply:</strong> <a href="9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We lock in a specific set of Autotools for a given release series and try very hard not to change them for the life of that series, just to prevent unexpected incompatibilities / issues.
<br>
<p>The v1.4 series is using:
<br>
<p>AC 2.63
<br>
AM 1.10.1
<br>
LT 2.2.6b
<br>
m4 1.4.11
<br>
<p>The v1.5 series is using:
<br>
<p>AC 2.65
<br>
AM 1.11
<br>
LT 2.2.6b
<br>
m4 1.4.13
<br>
<p>The upgrade to AM 1.10.3 (for the v1.4 series) and 1.11.1 (for the v1.5 series) may be tolerable.  I'll check it out.
<br>
<p><p><p>On Jun 27, 2011, at 2:09 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi John,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * John Esmet wrote on Sun, Jun 26, 2011 at 06:41:48AM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; I went to untar the source code and the folders are mode 777. Call me OCD,
</span><br>
<span class="quotelev2">&gt;&gt; but I find this a little strange. What's up?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Newer Automake releases should have that fixed:
</span><br>
<span class="quotelev1">&gt; <a href="http://thread.gmane.org/gmane.comp.sysutils.autotools.announce/131">http://thread.gmane.org/gmane.comp.sysutils.autotools.announce/131</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI should use such a newer Automake for their release process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9430.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9428.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Reply:</strong> <a href="9433.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
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
