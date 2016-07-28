<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 10:08:24 2005" -->
<!-- isoreceived="20051115150824" -->
<!-- sent="Tue, 15 Nov 2005 16:08:14 +0100" -->
<!-- isosent="20051115150814" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  New build methodology" -->
<!-- id="20051115150814.GF31570_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20051115074426.0200e390_at_pobox1663.lanl.gov" -->
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
<strong>Date:</strong> 2005-11-15 10:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0528.php">Jeff Squyres: "orterun --debug"</a>
<li><strong>Previous message:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ralph H. Castain wrote on Tue, Nov 15, 2005 at 03:45:26PM CET:
<br>
<span class="quotelev1">&gt; At 07:33 AM 11/15/2005, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Would it help if only the change not to build a convenience archive in
</span><br>
<span class="quotelev2">&gt; &gt;orte/dps would be reverted?  You could then
</span><br>
<span class="quotelev2">&gt; &gt;   cd orte
</span><br>
<span class="quotelev2">&gt; &gt;   make dps/libdps.la
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;and would only have to issue the link command for liborte.la manually
</span><br>
<span class="quotelev2">&gt; &gt;(to override rebuilding all other files that depend on dps.h).  This
</span><br>
<span class="quotelev2">&gt; &gt;change has very little impact on overall autogen/build execution time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your proposed change would help a great deal - thanks! Can you steer 
</span><br>
<span class="quotelev1">&gt; me through the change?
</span><br>
<p>Sure.  Make sure to have automake installed, apply the patch below,
<br>
then `make' should cause the Makefiles to be rebuilt.
<br>
<p>For building/testing, I'd do as above:
<br>
&nbsp;&nbsp;cd orte
<br>
&nbsp;&nbsp;make dps/libdps.la
<br>
<p>To now recreate liborte.la without triggering all other stuff:
<br>
If you happen to use GNU make, you could use this hack (warning!
<br>
hack! do not ever do this for non-debug builds!)
<br>
&nbsp;&nbsp;make -t
<br>
This just touches everything, so the next run of make will believe
<br>
everything to be up to date.  (You need a &quot;make clean&quot; to undo this
<br>
when you really want everything updated.)
<br>
<p>Then, to recreate liborte, you do
<br>
&nbsp;&nbsp;../libtool --mode=clean rm -f liborte.la
<br>
&nbsp;&nbsp;make liborte.la
<br>
<p>(In most but not all cases, the former can be replaced by &quot;rm -f
<br>
liborte.la&quot;).  Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: orte/dps/Makefile.am
<br>
===================================================================
<br>
--- orte/dps/Makefile.am	(revision 8159)
<br>
+++ orte/dps/Makefile.am	(working copy)
<br>
@@ -24,7 +24,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dps/dps_types.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dps/dps_internal.h
<br>
&nbsp;
<br>
-liborte_la_SOURCES += \
<br>
+noinst_LTLIBRARIES += dps/libdps.la
<br>
+dps_libdps_la_SOURCES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dps/dps_internal_functions.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dps/dps_load_unload.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dps/dps_lookup.c \
<br>
Index: orte/Makefile.am
<br>
===================================================================
<br>
--- orte/Makefile.am	(revision 8159)
<br>
+++ orte/Makefile.am	(working copy)
<br>
@@ -33,6 +33,7 @@
<br>
&nbsp;lib_LTLIBRARIES = liborte.la
<br>
&nbsp;liborte_la_SOURCES =
<br>
&nbsp;liborte_la_LIBADD = \
<br>
+	dps/libdps.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(MCA_orte_FRAMEWORK_LIBS) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_ompi_builddir)/opal/libopal.la
<br>
&nbsp;liborte_la_DEPENDENCIES = $(liborte_la_LIBADD)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0528.php">Jeff Squyres: "orterun --debug"</a>
<li><strong>Previous message:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
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
