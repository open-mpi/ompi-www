<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:22:57 2008" -->
<!-- isoreceived="20080804132257" -->
<!-- sent="Mon, 4 Aug 2008 15:22:50 +0200" -->
<!-- isosent="20080804132250" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="20080804132249.GA20419_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ea86ce220808040611l251b58c3l54484935a456547d_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 09:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4516.php">Tim Mattox: "Re: [OMPI devel] new Open MPI team member"</a>
<li><strong>In reply to:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Tim Mattox wrote on Mon, Aug 04, 2008 at 03:11:20PM CEST:
<br>
<span class="quotelev1">&gt; As this thread is making clear, not everyone saw and/or heeded the
</span><br>
<span class="quotelev1">&gt; note that we were upgrading the GNU autotools used for building Open MPI's
</span><br>
<span class="quotelev1">&gt; nightly tarballs.  See <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a> the the version
</span><br>
<span class="quotelev1">&gt; matrix.  For your reference, the trunk &amp; 1.3 nightlies are being built
</span><br>
<span class="quotelev1">&gt; with these versions, and I recommend everyone upgrade to these:
</span><br>
<p>This has not much to do with autotools versions, but everything
<br>
with having a build tree separate from the source tree or not.
<br>
<p>The proper fix is to change several references of $(top_srcdir) to
<br>
$(top_builddir), to insert into each rule in
<br>
ompi_trunk/Makefile.man-page-rules a command like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@$(mkdir_p) `dirname $@`
<br>
<p>to have the corresponding directory created in advance.  Alternatively,
<br>
you can make files depend on a directory stamp file whose rule creates
<br>
the corresponding directory (depending on the directory itself is not
<br>
portable).
<br>
<p>Also, I see in ompi/tools/*/Makefile.am several instances of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd SOME_DIR ; make FOO
<br>
<p>in makefile rules.  Please fix them to be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd SOME_DIR &amp;&amp; $(MAKE) $(AM_MAKEFLAGS) FOO
<br>
<p>so that, if SOME_DIR does not exists, no rogue action is performed,
<br>
also that parallel make works as advertised, and that make flags can be
<br>
overridden conveniently.
<br>
<p>Cheers,
<br>
Ralf (who can fix this but then you will have to wait)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI devel] if btl-&gt;add_procs() fails...?"</a>
<li><strong>Previous message:</strong> <a href="4516.php">Tim Mattox: "Re: [OMPI devel] new Open MPI team member"</a>
<li><strong>In reply to:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4521.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
