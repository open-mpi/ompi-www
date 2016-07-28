<?
$subject_val = "[OMPI devel] VampirTrace: snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 10:49:16 2008" -->
<!-- isoreceived="20081027144916" -->
<!-- sent="Mon, 27 Oct 2008 10:48:59 -0400" -->
<!-- isosent="20081027144859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] VampirTrace: snprintf vs. sprintf" -->
<!-- id="CF34A8B5-0392-4319-88DD-D732DA8F91F9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E3D1766-8BD8-4DEF-8060-85B442A2043D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] VampirTrace: snprintf vs. sprintf<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 10:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4812.php">Tim Mattox: "[OMPI devel] Open MPI v1.3b1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I think that this is a change that the VT guys just recently  
<br>
put in, and I'm not sure why.  I noticed this morning that it breaks  
<br>
for me under the PGI compilers.
<br>
<p>VT guys -- can you comment?
<br>
<p><p>On Oct 27, 2008, at 10:46 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brad,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have our version of snprintf, just in case the installed standard  
</span><br>
<span class="quotelev1">&gt; library doesn't support it. This function called opal_snprintf will  
</span><br>
<span class="quotelev1">&gt; be aliased to snprintf (./opal/include/opal_config_bottom.h:410). As  
</span><br>
<span class="quotelev1">&gt; you are supposed to always include opal_config.h as first header in  
</span><br>
<span class="quotelev1">&gt; your files, using snprintf will always be safe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2008, at 8:08 AM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the current ompi-trunk (r19808), my build was breaking.  I have
</span><br>
<span class="quotelev2">&gt;&gt; created a small patch to fix this, but I wanted to ask the team about
</span><br>
<span class="quotelev2">&gt;&gt; something first.  One of the problems was with snprintf.  I read a
</span><br>
<span class="quotelev2">&gt;&gt; little bit more about this and I found this quote about snprintf:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;snprintf does not form part of the widely implemented ANSI C
</span><br>
<span class="quotelev2">&gt;&gt; standard, as sprintf does. However, it came into the language for the
</span><br>
<span class="quotelev2">&gt;&gt; later C99 standard and often existed in C libraries before that.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm wondering, should the use of snprintf as in
</span><br>
<span class="quotelev2">&gt;&gt; ompi/contrib/vt/vt/tools/opari/tool/opari.cc depend on the value of
</span><br>
<span class="quotelev2">&gt;&gt; _GLIBCXX_USE_C99 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For my system, one &quot;fix&quot; seemed to be to just delete this &quot;using
</span><br>
<span class="quotelev2">&gt;&gt; std::snprintf;&quot; line. Everything then compiled and worked, but I  
</span><br>
<span class="quotelev2">&gt;&gt; don't
</span><br>
<span class="quotelev2">&gt;&gt; know how general/desired this &quot;solution&quot; is.  Any comments on  
</span><br>
<span class="quotelev2">&gt;&gt; snprintf
</span><br>
<span class="quotelev2">&gt;&gt; and this solution?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; brad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ svn diff
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/contrib/vt/vt/tools/opari/tool/opari.cc
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(revision 19808)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -15,7 +15,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;  using std::cout;
</span><br>
<span class="quotelev2">&gt;&gt;  using std::cerr;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;cstdio&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -  using std::snprintf;
</span><br>
<span class="quotelev2">&gt;&gt;  using std::remove;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  using std::strcmp;
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/tools/orte-iof/orte-iof.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/tools/orte-iof/orte-iof.c	(revision 19808)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/tools/orte-iof/orte-iof.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -37,6 +37,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif  /*  HAVE_STDLIB_H */
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_SIGNAL_H
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;signal.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif  /*  HAVE_SIGNAL_H */
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #endif  /* HAVE_SYS_STAT_H */
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4812.php">Tim Mattox: "[OMPI devel] Open MPI v1.3b1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>In reply to:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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
