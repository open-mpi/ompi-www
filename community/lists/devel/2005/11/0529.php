<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 20 22:04:44 2005" -->
<!-- isoreceived="20051121030444" -->
<!-- sent="Sun, 20 Nov 2005 20:04:34 -0700" -->
<!-- isosent="20051121030434" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  New build methodology" -->
<!-- id="6.2.3.4.2.20051120200101.01f8d8b0_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051115150814.GF31570_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-20 22:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0530.php">Brian Barrett: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0528.php">Jeff Squyres: "orterun --debug"</a>
<li><strong>In reply to:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0530.php">Brian Barrett: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0530.php">Brian Barrett: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0531.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just as an FYI -- this proposed fix didn't work. It apparently takes 
<br>
a great deal more to &quot;undo&quot; the Makefile consolidation. I worked on 
<br>
it for a couple of hours and finally just gave up.
<br>
<p>The last commits, of course, only made this situation worse as even 
<br>
more of the tree now is so heavily integrated that you really can't 
<br>
work on just one subsystem any more - the whole tree has to be 
<br>
corrected if you change an API before you can test your changes.
<br>
<p>Frankly, it isn't clear to me that we really improved things by all 
<br>
these changes. We may have made an autogen faster, but we have 
<br>
definitely made it harder to develop a subsystem. Is that really a 
<br>
good trade? I wonder.
<br>
<p>Ralph
<br>
<p><p><p>At 08:08 AM 11/15/2005, you wrote:
<br>
<span class="quotelev1">&gt;* Ralph H. Castain wrote on Tue, Nov 15, 2005 at 03:45:26PM CET:
</span><br>
<span class="quotelev2">&gt; &gt; At 07:33 AM 11/15/2005, you wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Would it help if only the change not to build a convenience archive in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;orte/dps would be reverted?  You could then
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   cd orte
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   make dps/libdps.la
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;and would only have to issue the link command for liborte.la manually
</span><br>
<span class="quotelev3">&gt; &gt; &gt;(to override rebuilding all other files that depend on dps.h).  This
</span><br>
<span class="quotelev3">&gt; &gt; &gt;change has very little impact on overall autogen/build execution time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your proposed change would help a great deal - thanks! Can you steer
</span><br>
<span class="quotelev2">&gt; &gt; me through the change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sure.  Make sure to have automake installed, apply the patch below,
</span><br>
<span class="quotelev1">&gt;then `make' should cause the Makefiles to be rebuilt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For building/testing, I'd do as above:
</span><br>
<span class="quotelev1">&gt;   cd orte
</span><br>
<span class="quotelev1">&gt;   make dps/libdps.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To now recreate liborte.la without triggering all other stuff:
</span><br>
<span class="quotelev1">&gt;If you happen to use GNU make, you could use this hack (warning!
</span><br>
<span class="quotelev1">&gt;hack! do not ever do this for non-debug builds!)
</span><br>
<span class="quotelev1">&gt;   make -t
</span><br>
<span class="quotelev1">&gt;This just touches everything, so the next run of make will believe
</span><br>
<span class="quotelev1">&gt;everything to be up to date.  (You need a &quot;make clean&quot; to undo this
</span><br>
<span class="quotelev1">&gt;when you really want everything updated.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Then, to recreate liborte, you do
</span><br>
<span class="quotelev1">&gt;   ../libtool --mode=clean rm -f liborte.la
</span><br>
<span class="quotelev1">&gt;   make liborte.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(In most but not all cases, the former can be replaced by &quot;rm -f
</span><br>
<span class="quotelev1">&gt;liborte.la&quot;).  Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Index: orte/dps/Makefile.am
</span><br>
<span class="quotelev1">&gt;===================================================================
</span><br>
<span class="quotelev1">&gt;--- orte/dps/Makefile.am        (revision 8159)
</span><br>
<span class="quotelev1">&gt;+++ orte/dps/Makefile.am        (working copy)
</span><br>
<span class="quotelev1">&gt;@@ -24,7 +24,8 @@
</span><br>
<span class="quotelev1">&gt;          dps/dps_types.h \
</span><br>
<span class="quotelev1">&gt;          dps/dps_internal.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-liborte_la_SOURCES += \
</span><br>
<span class="quotelev1">&gt;+noinst_LTLIBRARIES += dps/libdps.la
</span><br>
<span class="quotelev1">&gt;+dps_libdps_la_SOURCES = \
</span><br>
<span class="quotelev1">&gt;          dps/dps_internal_functions.c \
</span><br>
<span class="quotelev1">&gt;          dps/dps_load_unload.c \
</span><br>
<span class="quotelev1">&gt;          dps/dps_lookup.c \
</span><br>
<span class="quotelev1">&gt;Index: orte/Makefile.am
</span><br>
<span class="quotelev1">&gt;===================================================================
</span><br>
<span class="quotelev1">&gt;--- orte/Makefile.am    (revision 8159)
</span><br>
<span class="quotelev1">&gt;+++ orte/Makefile.am    (working copy)
</span><br>
<span class="quotelev1">&gt;@@ -33,6 +33,7 @@
</span><br>
<span class="quotelev1">&gt;  lib_LTLIBRARIES = liborte.la
</span><br>
<span class="quotelev1">&gt;  liborte_la_SOURCES =
</span><br>
<span class="quotelev1">&gt;  liborte_la_LIBADD = \
</span><br>
<span class="quotelev1">&gt;+       dps/libdps.la \
</span><br>
<span class="quotelev1">&gt;         $(MCA_orte_FRAMEWORK_LIBS) \
</span><br>
<span class="quotelev1">&gt;         $(top_ompi_builddir)/opal/libopal.la
</span><br>
<span class="quotelev1">&gt;  liborte_la_DEPENDENCIES = $(liborte_la_LIBADD)
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0530.php">Brian Barrett: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0528.php">Jeff Squyres: "orterun --debug"</a>
<li><strong>In reply to:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0530.php">Brian Barrett: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0530.php">Brian Barrett: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0531.php">Ralf Wildenhues: "Re:  New build methodology"</a>
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
