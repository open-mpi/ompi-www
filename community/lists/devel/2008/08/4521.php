<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 11:01:18 2008" -->
<!-- isoreceived="20080804150118" -->
<!-- sent="Mon, 4 Aug 2008 11:01:05 -0400" -->
<!-- isosent="20080804150105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="E9BD43BE-A94F-494A-8D78-91A9F06853A4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080804132249.GA20419_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TRUNK error ( MAN page ) since r19120<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 11:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralf!
<br>
<p>I've committed the first part of your fix; I'm testing the 2nd part  
<br>
right now... (also need a &quot;-&quot; in the mkdir in case the directory  
<br>
already exists.  I should be able to commit shortly; just want to make  
<br>
sure it works first.
<br>
<p>FWIW, I did test the man page stuff with a clean SVN checkout first,  
<br>
but I didn't check it with a clean checkout *and* a VPATH build.   
<br>
Sorry, folks.
<br>
<p><p>On Aug 4, 2008, at 9:22 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Tim Mattox wrote on Mon, Aug 04, 2008 at 03:11:20PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; As this thread is making clear, not everyone saw and/or heeded the
</span><br>
<span class="quotelev2">&gt;&gt; note that we were upgrading the GNU autotools used for building  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI's
</span><br>
<span class="quotelev2">&gt;&gt; nightly tarballs.  See <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a> the  
</span><br>
<span class="quotelev2">&gt;&gt; the version
</span><br>
<span class="quotelev2">&gt;&gt; matrix.  For your reference, the trunk &amp; 1.3 nightlies are being  
</span><br>
<span class="quotelev2">&gt;&gt; built
</span><br>
<span class="quotelev2">&gt;&gt; with these versions, and I recommend everyone upgrade to these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has not much to do with autotools versions, but everything
</span><br>
<span class="quotelev1">&gt; with having a build tree separate from the source tree or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The proper fix is to change several references of $(top_srcdir) to
</span><br>
<span class="quotelev1">&gt; $(top_builddir), to insert into each rule in
</span><br>
<span class="quotelev1">&gt; ompi_trunk/Makefile.man-page-rules a command like
</span><br>
<span class="quotelev1">&gt;        @$(mkdir_p) `dirname $@`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to have the corresponding directory created in advance.   
</span><br>
<span class="quotelev1">&gt; Alternatively,
</span><br>
<span class="quotelev1">&gt; you can make files depend on a directory stamp file whose rule creates
</span><br>
<span class="quotelev1">&gt; the corresponding directory (depending on the directory itself is not
</span><br>
<span class="quotelev1">&gt; portable).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I see in ompi/tools/*/Makefile.am several instances of
</span><br>
<span class="quotelev1">&gt;        cd SOME_DIR ; make FOO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in makefile rules.  Please fix them to be
</span><br>
<span class="quotelev1">&gt;        cd SOME_DIR &amp;&amp; $(MAKE) $(AM_MAKEFLAGS) FOO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so that, if SOME_DIR does not exists, no rogue action is performed,
</span><br>
<span class="quotelev1">&gt; also that parallel make works as advertised, and that make flags can  
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev1">&gt; overridden conveniently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf (who can fix this but then you will have to wait)
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
<li><strong>Next message:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4520.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>In reply to:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
