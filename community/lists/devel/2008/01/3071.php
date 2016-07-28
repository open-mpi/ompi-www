<?
$subject_val = "Re: [OMPI devel] Configure error/warning in nightly tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 08:17:35 2008" -->
<!-- isoreceived="20080129131735" -->
<!-- sent="Tue, 29 Jan 2008 08:16:59 -0500" -->
<!-- isosent="20080129131659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Configure error/warning in nightly tarball" -->
<!-- id="D4295501-3AEB-4529-904B-F957358CD4FC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D34659BD-93AD-4F46-B2F4-BA3B97D557FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Configure error/warning in nightly tarball<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 08:16:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3072.php">Josh Hursey: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Previous message:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3065.php">Josh Hursey: "[OMPI devel] Configure error/warning in nightly tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3072.php">Josh Hursey: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Reply:</strong> <a href="3072.php">Josh Hursey: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch.  It seems to be an issue with component priority.
<br>
<p>I'll dig into it...
<br>
<p><p>On Jan 28, 2008, at 6:49 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I noticed that when running configure on the nightly snapshot tarball
</span><br>
<span class="quotelev1">&gt; the following errors (warnings really, since it didn't stop
</span><br>
<span class="quotelev1">&gt; configure) were produced. These seem to be remnants from the
</span><br>
<span class="quotelev1">&gt; autogen.sh script pointing to files that do not (and should not)
</span><br>
<span class="quotelev1">&gt; exist in the distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt; shell$ ./configure --prefix=/foo/bar/
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; grep: ./orte/mca/gpr/proxy/configure.params: No such file or directory
</span><br>
<span class="quotelev1">&gt; grep: ./orte/mca/gpr/replica/configure.params: No such file or  
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; grep: ./orte/mca/gpr/null/configure.params: No such file or directory
</span><br>
<span class="quotelev1">&gt; ---------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on how to fix this? I was using the r17175 nightly  
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3072.php">Josh Hursey: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Previous message:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3065.php">Josh Hursey: "[OMPI devel] Configure error/warning in nightly tarball"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3072.php">Josh Hursey: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Reply:</strong> <a href="3072.php">Josh Hursey: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
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
