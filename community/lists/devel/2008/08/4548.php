<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 07:43:56 2008" -->
<!-- isoreceived="20080805114356" -->
<!-- sent="Tue, 5 Aug 2008 14:43:47 +0300" -->
<!-- isosent="20080805114347" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="453d39990808050443q2444413cof8633acca8548604_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="413A31D3-802E-447A-8A0E-DA1AA7120CEC_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 07:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4549.php">Anton Soppelsa: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Previous message:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>In reply to:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
seems to be working,
<br>
<p>thanks Jeff.
<br>
<p>On 8/4/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, as of r19141, it should be fixed.  Let me know if you still have
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 11:01 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks Ralf!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've committed the first part of your fix; I'm testing the 2nd part right
</span><br>
<span class="quotelev2">&gt;&gt; now... (also need a &quot;-&quot; in the mkdir in case the directory already exists.
</span><br>
<span class="quotelev2">&gt;&gt;  I should be able to commit shortly; just want to make sure it works first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I did test the man page stuff with a clean SVN checkout first, but I
</span><br>
<span class="quotelev2">&gt;&gt; didn't check it with a clean checkout *and* a VPATH build.  Sorry, folks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2008, at 9:22 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  * Tim Mattox wrote on Mon, Aug 04, 2008 at 03:11:20PM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As this thread is making clear, not everyone saw and/or heeded the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; note that we were upgrading the GNU autotools used for building Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nightly tarballs.  See <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a> the the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matrix.  For your reference, the trunk &amp; 1.3 nightlies are being built
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with these versions, and I recommend everyone upgrade to these:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This has not much to do with autotools versions, but everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with having a build tree separate from the source tree or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The proper fix is to change several references of $(top_srcdir) to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $(top_builddir), to insert into each rule in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_trunk/Makefile.man-page-rules a command like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      @$(mkdir_p) `dirname $@`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have the corresponding directory created in advance.  Alternatively,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can make files depend on a directory stamp file whose rule creates
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the corresponding directory (depending on the directory itself is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; portable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, I see in ompi/tools/*/Makefile.am several instances of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      cd SOME_DIR ; make FOO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in makefile rules.  Please fix them to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      cd SOME_DIR &amp;&amp; $(MAKE) $(AM_MAKEFLAGS) FOO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that, if SOME_DIR does not exists, no rogue action is performed,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also that parallel make works as advertised, and that make flags can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overridden conveniently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralf (who can fix this but then you will have to wait)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4549.php">Anton Soppelsa: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>Previous message:</strong> <a href="4547.php">Jeff Squyres: "Re: [OMPI devel] Problem with SVN access."</a>
<li><strong>In reply to:</strong> <a href="4522.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
