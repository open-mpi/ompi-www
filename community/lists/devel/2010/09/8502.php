<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 18 10:54:09 2010" -->
<!-- isoreceived="20100918145409" -->
<!-- sent="Sat, 18 Sep 2010 08:54:00 -0600" -->
<!-- isosent="20100918145400" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767" -->
<!-- id="935E320F-D30D-489C-9957-93F719C03D42_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100918144649.GB3433_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-18 10:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2010, at 8:46 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Sat, Sep 18, 2010 at 01:39:44PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2010, at 10:03 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it's still on my list to go back and figure out what changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., it didn't complain about valgrind's version before this -- so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something must have changed.  We don't use --without-valgrind when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuring, so I'm not sure why it somehow became a fatal error).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I figured out what changed -- it was something we did in ompi_mca.m4.
</span><br>
<span class="quotelev2">&gt;&gt; So I sent Brian a patch (the m4 is a little dicey -- I don't want to
</span><br>
<span class="quotelev2">&gt;&gt; make a change without checking with him).    However, he's out on
</span><br>
<span class="quotelev2">&gt;&gt; vacation, so it may be a little bit before I get an answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You /could/ send it to the list as well, you know, maybe the hive has an
</span><br>
<span class="quotelev1">&gt; opinion about it, too.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Good point - nothing secret about it!
<br>
<p>Index: config/ompi_mca.m4
<br>
===================================================================
<br>
--- config/ompi_mca.m4	(revision 23770)
<br>
+++ config/ompi_mca.m4	(working copy)
<br>
@@ -564,10 +564,12 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# try to configure the component.  pay no attention to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# --enable-dist, since we'll always have makefiles.
<br>
-    m4_ifdef([MCA_$1_$2_$3_CONFIG],
<br>
+    AS_IF([test &quot;$should_build&quot; = &quot;1&quot;],
<br>
+          [m4_ifdef([MCA_$1_$2_$3_CONFIG],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[MCA_$1_$2_$3_CONFIG([should_build=$should_build], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[should_build=0])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_fatal([MCA_$1_$2_$3_CONFIG macro not found])])
<br>
+          ])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$should_build&quot; = &quot;1&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[MCA_PROCESS_COMPONENT($1, $2, $3, $4, $5, $6, $7, $compile_mode)],
<br>
@@ -619,7 +621,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$should_build&quot; = &quot;1&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CONFIG_SUBDIR([$1/mca/$2/$component],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$ompi_subdir_args],
<br>
-                                   [should_build=1], [should_build=2])
<br>
+                                   [should_build=1], [should_build=0])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$should_build&quot; = &quot;1&quot; ; then
<br>
<p>The problem is that the opal/memchecker framework disables itself if you don't --enable-memchecker by setting DISABLE_memchecker.  The check for $DISABLE_memchecker is still intact and sets $should_build properly (to 0), but without the AS_IF above, we always run the valgrind configure.m4 CONFIG macro.
<br>
<p>Is there a reason you removed this AS_IF in the ompi-agen branch?  And/or is it ok to put it back now that we're back on the trunk?
<br>
<p>Additionally, I think the should_build=2 in the 2nd hunk is a typo and should be should_build=0.  Can you confirm?
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf (at least it could help weed out bugs Brian would otherwise find ...)
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
<li><strong>Next message:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Previous message:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>In reply to:</strong> <a href="8501.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
<li><strong>Reply:</strong> <a href="8503.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23767"</a>
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
