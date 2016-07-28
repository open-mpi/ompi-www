<?
$subject_val = "Re: [OMPI devel] VT support for 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 08:24:28 2011" -->
<!-- isoreceived="20110610122428" -->
<!-- sent="Fri, 10 Jun 2011 11:16:08 +0200" -->
<!-- isosent="20110610091608" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT support for 1.5" -->
<!-- id="201106101116.13038.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="81C69EC4-678A-42CA-A888-094356659092_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT support for 1.5<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-10 05:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9345.php">Ralph Castain: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9343.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9356.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9356.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a Libtool issue (once again) which occurs if a previous build is re-
<br>
configured without subsequent &quot;make clean&quot; and the LIBC developer library 
<br>
&quot;libutil&quot; is added to LIBS.
<br>
<p>The error is simple to reproduce by the following steps:
<br>
<p>1. configure
<br>
2. make -C ompi/contrib/vt/vt/util
<br>
3. configure
<br>
or
<br>
3. touch ompi/contrib/vt/vt/util/installdirs_conf.h # created by configure
<br>
4. make -C ompi/contrib/vt/vt/util
<br>
ar: 
<br>
/home/jurenz/devel/ompi/v1.5/BUILD_gnu/ompi/contrib/vt/vt/util/.libs/libutil.a: 
<br>
No such file or directory
<br>
make: *** [libutil.la] Error 9
<br>
<p>When re-building the VT's libutil Libtool detects the system's libutil as 
<br>
dependency and tries to find a corresponding Libtool library (*.la). And here 
<br>
is the problem: Libtool finds ompi/contrib/vt/vt/util/libutil.la which is still 
<br>
present from the previous build and has nothing to do with the system's 
<br>
libutil. Afterwards, Libtool fails on extracting the archive 
<br>
ompi/contrib/vt/vt/util/.libs/libutil.a which isn't present for any reason.
<br>
<p><p>There are different ways to fix the problem:
<br>
<p>1. Apply the attached patch on ltmain.sh.
<br>
<p>This patch excludes the target library name from searching *.la libraries.
<br>
<p>2. Rename the VT's libutil
<br>
<p>This would prevents name conflicts with dependency libraries.
<br>
<p>3. Clear list of dependency libraries when building VT's libutil.
<br>
<p>This could be done by adding LIBS= to the Makefile.am in 
<br>
ompi/contrib/vt/vt/util/. The VT's libutil has no dependencies to other 
<br>
libraries except libc.
<br>
<p>4. Perform &quot;make clean&quot; or remove ompi/contrib/vt/vt/util/libutil.la after re-
<br>
configure.
<br>
<p>Nonsense - it cannot be required from the user.
<br>
<p><p>My favorite suggestion is 1. It would be just another patch in addition to the 
<br>
set of Libtool patches invoked by autogen.
<br>
<p>What do you think?
<br>
<p><p>Matthias
<br>
<p>On Tuesday 07 June 2011 16:56:39 Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; You might want to try a new checkout, just in case there's something in
</span><br>
<span class="quotelev1">&gt; there that is svn:ignored...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (yes, I'm grasping at straws here, but I'm able to build ok with a clean
</span><br>
<span class="quotelev1">&gt; checkout...?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 7, 2011, at 10:38 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My 'svn status' indicates no differences. I always build using a VPATH,
</span><br>
<span class="quotelev2">&gt; &gt; and in this case I did remove the build directory. However, the issue
</span><br>
<span class="quotelev2">&gt; &gt; persisted.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 7, 2011, at 10:31 , Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've seen VT builds get confused sometimes.  I'm not sure of the exact
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cause, but if I get a new checkout, all the problems seem to go away. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've never had the time to track it down.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you get a clean / new checkout and see if that fixes the problem?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 7, 2011, at 10:27 AM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I can't compile the 1.5 is I do not disable VT. Using the following
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configure line:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../ompi/configure --prefix=/home/bosilca/opt/stable/1.5/debug
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --enable-mpirun-prefix-by-default --with-knem=/usr/local/knem
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-mx=/usr/local/mx-1.2.11 --enable-picky --enable-debug
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I get:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ar:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /home/bosilca/unstable/1.5/debug/ompi/contrib/vt/vt/util/.libs/libutil
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; .a: No such file or directory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9344/ltmain-deplib.diff">ltmain-deplib.diff</a>
</ul>
<!-- attachment="ltmain-deplib.diff" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9344/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9345.php">Ralph Castain: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9343.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9309.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9356.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Reply:</strong> <a href="9356.php">Jeff Squyres: "Re: [OMPI devel] VT support for 1.5"</a>
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
