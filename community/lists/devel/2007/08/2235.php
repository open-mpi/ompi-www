<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 17:12:20 2007" -->
<!-- isoreceived="20070827211220" -->
<!-- sent="Mon, 27 Aug 2007 23:12:14 +0200" -->
<!-- isosent="20070827211214" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk issue?" -->
<!-- id="20070827211213.GB5924_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3EF3B880-C186-4519-8163-0CC753ACA55F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-27 17:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2236.php">Jeff Squyres: "[OMPI devel] &amp;find() broken?"</a>
<li><strong>Previous message:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2230.php">Jeff Squyres: "Re: [OMPI devel] Trunk issue?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>* Jeff Squyres wrote on Mon, Aug 27, 2007 at 04:07:22PM CEST:
<br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 9:23 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mca/timer/darwin
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev2">&gt; &gt; Making all in .
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** No rule to make target `../opal/libltdl/libltdlc.la',  
</span><br>
<span class="quotelev2">&gt; &gt; needed by
</span><br>
<span class="quotelev2">&gt; &gt; `libopen-pal.la'.  Stop.
</span><br>
<p><span class="quotelev1">&gt; Yes, if you're using --disable-dlopen, then libltdlc should not be  
</span><br>
<span class="quotelev1">&gt; linked in (because it [rightfully] won't exist).
</span><br>
<p>FWIW, I can reproduce the error, I don't yet know who's at fault
<br>
(but if it turns out to be Libtool, I'd appreciate a report), but
<br>
I noted this unrelated nit in the configury.  I guess you could
<br>
try setting LIBLTDL to '' in the case where you don't want to
<br>
build it.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 15970)
<br>
+++ configure.ac	(working copy)
<br>
@@ -1052,7 +1052,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_EGREP_HEADER([lt_dladvise_init], [opal/libltdl/ltdl.h],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OPAL_HAVE_LTDL_ADVISE=1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OPAL_HAVE_LTDL_ADVISE=0])
<br>
-        CPPFLAGS=&quot;$CPPFLAGS&quot;
<br>
+        CPPFLAGS=&quot;$CPPFLAGS_save&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Arrgh.  This is gross.  But I can't think of any other way to do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# it.  :-(
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2236.php">Jeff Squyres: "[OMPI devel] &amp;find() broken?"</a>
<li><strong>Previous message:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2230.php">Jeff Squyres: "Re: [OMPI devel] Trunk issue?"</a>
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
