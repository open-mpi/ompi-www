<?
$subject_val = "Re: [OMPI devel] Tarball distribution";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 17:07:34 2011" -->
<!-- isoreceived="20110627210734" -->
<!-- sent="Mon, 27 Jun 2011 23:07:25 +0200" -->
<!-- isosent="20110627210725" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Tarball distribution" -->
<!-- id="20110627210725.284920_at_gmx.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0EC27D95-E1FA-426C-9669-6CDB9498C8AA_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 17:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9434.php">Takahiro Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9432.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9429.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9492.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9492.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>yes, you should definitely do that.
<br>
<p>Thanks,
<br>
Ralf
<br>
<p>* Jeff Squyres wrote on Mon, Jun 27, 2011 at 03:58:14PM CEST:
<br>
<span class="quotelev1">&gt; We lock in a specific set of Autotools for a given release series and try very hard not to change them for the life of that series, just to prevent unexpected incompatibilities / issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The v1.4 series is using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC 2.63
</span><br>
<span class="quotelev1">&gt; AM 1.10.1
</span><br>
<span class="quotelev1">&gt; LT 2.2.6b
</span><br>
<span class="quotelev1">&gt; m4 1.4.11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The v1.5 series is using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC 2.65
</span><br>
<span class="quotelev1">&gt; AM 1.11
</span><br>
<span class="quotelev1">&gt; LT 2.2.6b
</span><br>
<span class="quotelev1">&gt; m4 1.4.13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The upgrade to AM 1.10.3 (for the v1.4 series) and 1.11.1 (for the v1.5 series) may be tolerable.  I'll check it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 27, 2011, at 2:09 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi John,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; * John Esmet wrote on Sun, Jun 26, 2011 at 06:41:48AM CEST:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I went to untar the source code and the folders are mode 777. Call me OCD,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but I find this a little strange. What's up?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Newer Automake releases should have that fixed:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://thread.gmane.org/gmane.comp.sysutils.autotools.announce/131">http://thread.gmane.org/gmane.comp.sysutils.autotools.announce/131</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI should use such a newer Automake for their release process.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Ralf
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9434.php">Takahiro Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9432.php">Rayson Ho: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9429.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9492.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9492.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
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
