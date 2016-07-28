<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 11:20:53 2008" -->
<!-- isoreceived="20080804152053" -->
<!-- sent="Mon, 4 Aug 2008 11:20:47 -0400" -->
<!-- isosent="20080804152047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="413A31D3-802E-447A-8A0E-DA1AA7120CEC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E9BD43BE-A94F-494A-8D78-91A9F06853A4_at_cisco.com" -->
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
<strong>Date:</strong> 2008-08-04 11:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4523.php">Anton Soppelsa: "[OMPI devel] Problem with SVN access."</a>
<li><strong>Previous message:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4548.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4548.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, as of r19141, it should be fixed.  Let me know if you still have  
<br>
problems.
<br>
<p><p>On Aug 4, 2008, at 11:01 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralf!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've committed the first part of your fix; I'm testing the 2nd part  
</span><br>
<span class="quotelev1">&gt; right now... (also need a &quot;-&quot; in the mkdir in case the directory  
</span><br>
<span class="quotelev1">&gt; already exists.  I should be able to commit shortly; just want to  
</span><br>
<span class="quotelev1">&gt; make sure it works first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I did test the man page stuff with a clean SVN checkout first,  
</span><br>
<span class="quotelev1">&gt; but I didn't check it with a clean checkout *and* a VPATH build.   
</span><br>
<span class="quotelev1">&gt; Sorry, folks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 9:22 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Tim Mattox wrote on Mon, Aug 04, 2008 at 03:11:20PM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As this thread is making clear, not everyone saw and/or heeded the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; note that we were upgrading the GNU autotools used for building  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly tarballs.  See <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a>  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the the version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix.  For your reference, the trunk &amp; 1.3 nightlies are being  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with these versions, and I recommend everyone upgrade to these:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This has not much to do with autotools versions, but everything
</span><br>
<span class="quotelev2">&gt;&gt; with having a build tree separate from the source tree or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The proper fix is to change several references of $(top_srcdir) to
</span><br>
<span class="quotelev2">&gt;&gt; $(top_builddir), to insert into each rule in
</span><br>
<span class="quotelev2">&gt;&gt; ompi_trunk/Makefile.man-page-rules a command like
</span><br>
<span class="quotelev2">&gt;&gt;       @$(mkdir_p) `dirname $@`
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to have the corresponding directory created in advance.   
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively,
</span><br>
<span class="quotelev2">&gt;&gt; you can make files depend on a directory stamp file whose rule  
</span><br>
<span class="quotelev2">&gt;&gt; creates
</span><br>
<span class="quotelev2">&gt;&gt; the corresponding directory (depending on the directory itself is not
</span><br>
<span class="quotelev2">&gt;&gt; portable).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I see in ompi/tools/*/Makefile.am several instances of
</span><br>
<span class="quotelev2">&gt;&gt;       cd SOME_DIR ; make FOO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in makefile rules.  Please fix them to be
</span><br>
<span class="quotelev2">&gt;&gt;       cd SOME_DIR &amp;&amp; $(MAKE) $(AM_MAKEFLAGS) FOO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so that, if SOME_DIR does not exists, no rogue action is performed,
</span><br>
<span class="quotelev2">&gt;&gt; also that parallel make works as advertised, and that make flags  
</span><br>
<span class="quotelev2">&gt;&gt; can be
</span><br>
<span class="quotelev2">&gt;&gt; overridden conveniently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf (who can fix this but then you will have to wait)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4523.php">Anton Soppelsa: "[OMPI devel] Problem with SVN access."</a>
<li><strong>Previous message:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4548.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4548.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
