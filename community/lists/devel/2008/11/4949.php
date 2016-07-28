<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 24 14:01:42 2008" -->
<!-- isoreceived="20081124190142" -->
<!-- sent="Mon, 24 Nov 2008 20:01:29 +0100" -->
<!-- isosent="20081124190129" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081124190128.GB2554_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3620283B-94A3-4DBC-A86E-16C717B74996_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-24 14:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4950.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4948.php">Peter Kjellstrom: "[OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>In reply to:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4953.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4953.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>* Ralph Castain wrote on Mon, Nov 24, 2008 at 02:39:13PM CET:
<br>
<span class="quotelev1">&gt; On Nov 23, 2008, at 1:19 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I suppose your patch works, I think in similar situations,  
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI has resorted to patching input files to configure (like
</span><br>
<span class="quotelev2">&gt;&gt; aclocal.m4 or ltmain.sh).  Search autogen.sh for instances of
</span><br>
<span class="quotelev2">&gt;&gt; 'patch'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting observation - I wonder if that would explain why I recently 
</span><br>
<span class="quotelev1">&gt; started seeing an &quot;aclocal.m4.rej&quot; file every time I re-gen the trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe one of those patches has an error in it?
</span><br>
<p>More likely, one or more of the patches are not needed with the Libtool
<br>
version you're using, because they have already been integrated into
<br>
that version.
<br>
<p>Ergo, the advantage of patching input files here is that there is a
<br>
clean upgrade path.  Except for *.rej files (which autogen.sh could
<br>
clean up after itself, I guess).
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4950.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="4948.php">Peter Kjellstrom: "[OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>In reply to:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4953.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4953.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
