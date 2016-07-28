<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 20 22:48:10 2005" -->
<!-- isoreceived="20051121034810" -->
<!-- sent="Sun, 20 Nov 2005 22:48:02 -0500" -->
<!-- isosent="20051121034802" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  New build methodology" -->
<!-- id="48D71387-D9CE-4A97-A549-E03205BC7221_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.3.4.2.20051120200101.01f8d8b0_at_pobox1663.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-20 22:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0531.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0532.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, we discussed this issue at fairly great length at the various  
<br>
meetings, and every time the answer was &quot;make the build system  
<br>
faster&quot;.  I believe we even had a discussion about this very thing  
<br>
(not being able to build in subdirectories).
<br>
<p>This weekend's change should have almost no real affect on the  
<br>
ability to add/modify/debug anything.  Before, if you ran &quot;make&quot; in a  
<br>
framework, it recursed into the base/ directory, ran make there, then  
<br>
ran make in the framework directory (which never did anything).  It  
<br>
didn't build any of the components in that framework (it hasn't for a  
<br>
month or so).  Now, if you run &quot;make&quot; in a framework directory, it  
<br>
just builds the stuff in base without recusing.  Of course, you can't  
<br>
run make in the base/ directory, but since running make in the  
<br>
framework directory is essentially equivalent, it doesn't exactly  
<br>
matter.
<br>
<p>Brian
<br>
<p>On Nov 20, 2005, at 10:04 PM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just as an FYI -- this proposed fix didn't work. It apparently takes
</span><br>
<span class="quotelev1">&gt; a great deal more to &quot;undo&quot; the Makefile consolidation. I worked on
</span><br>
<span class="quotelev1">&gt; it for a couple of hours and finally just gave up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last commits, of course, only made this situation worse as even
</span><br>
<span class="quotelev1">&gt; more of the tree now is so heavily integrated that you really can't
</span><br>
<span class="quotelev1">&gt; work on just one subsystem any more - the whole tree has to be
</span><br>
<span class="quotelev1">&gt; corrected if you change an API before you can test your changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Frankly, it isn't clear to me that we really improved things by all
</span><br>
<span class="quotelev1">&gt; these changes. We may have made an autogen faster, but we have
</span><br>
<span class="quotelev1">&gt; definitely made it harder to develop a subsystem. Is that really a
</span><br>
<span class="quotelev1">&gt; good trade? I wonder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 08:08 AM 11/15/2005, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; * Ralph H. Castain wrote on Tue, Nov 15, 2005 at 03:45:26PM CET:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At 07:33 AM 11/15/2005, you wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would it help if only the change not to build a convenience  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; archive in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/dps would be reverted?  You could then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   cd orte
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   make dps/libdps.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and would only have to issue the link command for liborte.la  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manually
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (to override rebuilding all other files that depend on dps.h).   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change has very little impact on overall autogen/build execution  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your proposed change would help a great deal - thanks! Can you steer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me through the change?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sure.  Make sure to have automake installed, apply the patch below,
</span><br>
<span class="quotelev2">&gt;&gt; then `make' should cause the Makefiles to be rebuilt.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For building/testing, I'd do as above:
</span><br>
<span class="quotelev2">&gt;&gt;   cd orte
</span><br>
<span class="quotelev2">&gt;&gt;   make dps/libdps.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To now recreate liborte.la without triggering all other stuff:
</span><br>
<span class="quotelev2">&gt;&gt; If you happen to use GNU make, you could use this hack (warning!
</span><br>
<span class="quotelev2">&gt;&gt; hack! do not ever do this for non-debug builds!)
</span><br>
<span class="quotelev2">&gt;&gt;   make -t
</span><br>
<span class="quotelev2">&gt;&gt; This just touches everything, so the next run of make will believe
</span><br>
<span class="quotelev2">&gt;&gt; everything to be up to date.  (You need a &quot;make clean&quot; to undo this
</span><br>
<span class="quotelev2">&gt;&gt; when you really want everything updated.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, to recreate liborte, you do
</span><br>
<span class="quotelev2">&gt;&gt;   ../libtool --mode=clean rm -f liborte.la
</span><br>
<span class="quotelev2">&gt;&gt;   make liborte.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (In most but not all cases, the former can be replaced by &quot;rm -f
</span><br>
<span class="quotelev2">&gt;&gt; liborte.la&quot;).  Hope that helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/dps/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/dps/Makefile.am        (revision 8159)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/dps/Makefile.am        (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -24,7 +24,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;          dps/dps_types.h \
</span><br>
<span class="quotelev2">&gt;&gt;          dps/dps_internal.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -liborte_la_SOURCES += \
</span><br>
<span class="quotelev2">&gt;&gt; +noinst_LTLIBRARIES += dps/libdps.la
</span><br>
<span class="quotelev2">&gt;&gt; +dps_libdps_la_SOURCES = \
</span><br>
<span class="quotelev2">&gt;&gt;          dps/dps_internal_functions.c \
</span><br>
<span class="quotelev2">&gt;&gt;          dps/dps_load_unload.c \
</span><br>
<span class="quotelev2">&gt;&gt;          dps/dps_lookup.c \
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/Makefile.am    (revision 8159)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/Makefile.am    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -33,6 +33,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  lib_LTLIBRARIES = liborte.la
</span><br>
<span class="quotelev2">&gt;&gt;  liborte_la_SOURCES =
</span><br>
<span class="quotelev2">&gt;&gt;  liborte_la_LIBADD = \
</span><br>
<span class="quotelev2">&gt;&gt; +       dps/libdps.la \
</span><br>
<span class="quotelev2">&gt;&gt;         $(MCA_orte_FRAMEWORK_LIBS) \
</span><br>
<span class="quotelev2">&gt;&gt;         $(top_ompi_builddir)/opal/libopal.la
</span><br>
<span class="quotelev2">&gt;&gt;  liborte_la_DEPENDENCIES = $(liborte_la_LIBADD)
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0531.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0532.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0532.php">Ralph H. Castain: "Re:  New build methodology"</a>
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
