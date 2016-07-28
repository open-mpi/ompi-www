<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 29 03:38:07 2005" -->
<!-- isoreceived="20051029083807" -->
<!-- sent="Sat, 29 Oct 2005 10:38:11 +0200" -->
<!-- isosent="20051029083811" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="20051029083811.GA6195_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051029060107.GR3275_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-29 03:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0507.php">Ralf Wildenhues: "libtoolize --ltdl non-failure (was: ppc64 linux bustage?)"</a>
<li><strong>Previous message:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0507.php">Ralf Wildenhues: "libtoolize --ltdl non-failure (was: ppc64 linux bustage?)"</a>
<li><strong>Reply:</strong> <a href="0507.php">Ralf Wildenhues: "libtoolize --ltdl non-failure (was: ppc64 linux bustage?)"</a>
<li><strong>Reply:</strong> <a href="0508.php">Jeff Squyres: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0509.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Troy,
<br>
<p>* Troy Benjegerdes wrote on Sat, Oct 29, 2005 at 08:01:08AM CEST:
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you have a debian system you can remove the libltdl3 and libltdl3-dev
</span><br>
<span class="quotelev3">&gt; &gt; &gt; packages?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I could try that tonight (my timezone), but..
</span><br>
<p>(I can't try that, actually, without upgrading my sarge installation,
<br>
which I'm not ready for quite *yet*, given that I need it unbroken :)
<br>
<p><span class="quotelev3">&gt; &gt; &gt; It seems like there's some strange depenency on this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't either think this is the cause of the error.  What is the
</span><br>
<span class="quotelev2">&gt; &gt; libtoolize version autogen.sh picks up?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; see 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://scl.ameslab.gov/~troy/ompi_debug/genlog-nolibltdl3">http://scl.ameslab.gov/~troy/ompi_debug/genlog-nolibltdl3</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://scl.ameslab.gov/~troy/ompi_debug/genlog-with-libltdl3">http://scl.ameslab.gov/~troy/ompi_debug/genlog-with-libltdl3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Or maybe just this diff)
</span><br>
<p>Thank you very much.  Most information was present before this message,
<br>
but only with this one I finally got the hint.  It's a bug when
<br>
&nbsp;&nbsp;libtoolize --ltdl
<br>
succeeds although it did not find the libltdl source files.  Surely
<br>
doesn't happen with source-built Libtool, only when packaged separately.
<br>
<p>Suggestion for improved check in OpenMPI below (patch against
<br>
branches/v1.0).  I'll post a bugfix for Libtool, and Cc: this list and
<br>
the Debian maintainer about this then.
<br>
<p>Thanks very much for reporting this, and patience with me.
<br>
<p>Do I gather correctly that your remaining open issues with OpenMPI (once
<br>
libltdl3 and libltdl3-dev are installed) are not autotools-related?
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Note for the patch: Libtool 2.0 will enable to directly put libltdl in
<br>
opal/libltdl; the change below copes with that.
<br>
<p>Index: autogen.sh
<br>
===================================================================
<br>
--- autogen.sh	(Revision 7929)
<br>
+++ autogen.sh	(Arbeitskopie)
<br>
@@ -385,7 +385,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -f include/mpi.h.in; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -rf libltdl opal/libltdl opal/ltdl.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_libtoolize --automake --copy --ltdl
<br>
-	mv libltdl opal
<br>
+	if test -d libltdl; then
<br>
+	    mv libltdl opal
<br>
+	fi
<br>
+	if test ! -r opal/libltdl/ltdl.h; then
<br>
+	    cat &lt;&lt;EOF
<br>
+$ompi_libtoolize --ltdl apparently failed to install libltdl.
<br>
+Please check that you have the libltdl development files installed.
<br>
+EOF
<br>
+	    exit 1
<br>
+	fi
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Adjusting libltdl for OMPI :-(&quot;
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0507.php">Ralf Wildenhues: "libtoolize --ltdl non-failure (was: ppc64 linux bustage?)"</a>
<li><strong>Previous message:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0505.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0507.php">Ralf Wildenhues: "libtoolize --ltdl non-failure (was: ppc64 linux bustage?)"</a>
<li><strong>Reply:</strong> <a href="0507.php">Ralf Wildenhues: "libtoolize --ltdl non-failure (was: ppc64 linux bustage?)"</a>
<li><strong>Reply:</strong> <a href="0508.php">Jeff Squyres: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0509.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
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
