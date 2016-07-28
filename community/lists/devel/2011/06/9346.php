<?
$subject_val = "Re: [OMPI devel] VT support for 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 08:26:48 2011" -->
<!-- isoreceived="20110610122648" -->
<!-- sent="Fri, 10 Jun 2011 12:04:02 +0200" -->
<!-- isosent="20110610100402" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT support for 1.5" -->
<!-- id="201106101204.03514.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201106101200.50351.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2011-06-10 06:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9347.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Previous message:</strong> <a href="9345.php">Ralph Castain: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Maybe in reply to:</strong> <a href="9304.php">George Bosilca: "[OMPI devel] VT support for 1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+ attachment
<br>
<p>On Friday 10 June 2011 12:00:49 you wrote:
<br>
<span class="quotelev1">&gt; It's a Libtool issue (once again) which occurs if a previous build is re-
</span><br>
<span class="quotelev1">&gt; configured without subsequent &quot;make clean&quot; and the LIBC developer library
</span><br>
<span class="quotelev1">&gt; &quot;libutil&quot; is added to LIBS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error is simple to reproduce by the following steps:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. configure
</span><br>
<span class="quotelev1">&gt; 2. make -C ompi/contrib/vt/vt/util
</span><br>
<span class="quotelev1">&gt; 3. configure
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 3. touch ompi/contrib/vt/vt/util/installdirs_conf.h # created by configure
</span><br>
<span class="quotelev1">&gt; 4. make -C ompi/contrib/vt/vt/util
</span><br>
<span class="quotelev1">&gt; ar:
</span><br>
<span class="quotelev1">&gt; /home/jurenz/devel/ompi/v1.5/BUILD_gnu/ompi/contrib/vt/vt/util/.libs/libuti
</span><br>
<span class="quotelev1">&gt; l.a: No such file or directory
</span><br>
<span class="quotelev1">&gt; make: *** [libutil.la] Error 9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When re-building the VT's libutil Libtool detects the system's libutil as
</span><br>
<span class="quotelev1">&gt; dependency and tries to find a corresponding Libtool library (*.la). And
</span><br>
<span class="quotelev1">&gt; here is the problem: Libtool finds ompi/contrib/vt/vt/util/libutil.la
</span><br>
<span class="quotelev1">&gt; which is still present from the previous build and has nothing to do with
</span><br>
<span class="quotelev1">&gt; the system's libutil. Afterwards, Libtool fails on extracting the archive
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/util/.libs/libutil.a which isn't present for any reason.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are different ways to fix the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Apply the attached patch on ltmain.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch excludes the target library name from searching *.la libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Rename the VT's libutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would prevents name conflicts with dependency libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Clear list of dependency libraries when building VT's libutil.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could be done by adding LIBS= to the Makefile.am in
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/util/. The VT's libutil has no dependencies to other
</span><br>
<span class="quotelev1">&gt; libraries except libc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Perform &quot;make clean&quot; or remove ompi/contrib/vt/vt/util/libutil.la after
</span><br>
<span class="quotelev1">&gt; re- configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nonsense - it cannot be required from the user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My favorite suggestion is 1. It would be just another patch in addition to
</span><br>
<span class="quotelev1">&gt; the set of Libtool patches invoked by autogen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 07 June 2011 16:56:39 Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You might want to try a new checkout, just in case there's something in
</span><br>
<span class="quotelev2">&gt; &gt; there that is svn:ignored...?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (yes, I'm grasping at straws here, but I'm able to build ok with a clean
</span><br>
<span class="quotelev2">&gt; &gt; checkout...?)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 7, 2011, at 10:38 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My 'svn status' indicates no differences. I always build using a VPATH,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and in this case I did remove the build directory. However, the issue
</span><br>
<span class="quotelev3">&gt; &gt; &gt; persisted.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 7, 2011, at 10:31 , Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I've seen VT builds get confused sometimes.  I'm not sure of the exact
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; cause, but if I get a new checkout, all the problems seem to go away.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I've never had the time to track it down.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Can you get a clean / new checkout and see if that fixes the problem?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Jun 7, 2011, at 10:27 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I can't compile the 1.5 is I do not disable VT. Using the following
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; configure line:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; ../ompi/configure --prefix=/home/bosilca/opt/stable/1.5/debug
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; --enable-mpirun-prefix-by-default --with-knem=/usr/local/knem
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; --with-mx=/usr/local/mx-1.2.11 --enable-picky --enable-debug
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I get:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; ar:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; /home/bosilca/unstable/1.5/debug/ompi/contrib/vt/vt/util/.libs/libuti
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; l .a: No such file or directory
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; george.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9346/ltmain-deplib.diff">ltmain-deplib.diff</a>
</ul>
<!-- attachment="ltmain-deplib.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9347.php">Matthias Jurenz: "Re: [OMPI devel] VT support for 1.5"</a>
<li><strong>Previous message:</strong> <a href="9345.php">Ralph Castain: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Maybe in reply to:</strong> <a href="9304.php">George Bosilca: "[OMPI devel] VT support for 1.5"</a>
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
