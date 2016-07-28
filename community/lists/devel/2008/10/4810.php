<?
$subject_val = "Re: [OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 10:46:51 2008" -->
<!-- isoreceived="20081027144651" -->
<!-- sent="Mon, 27 Oct 2008 10:46:42 -0400" -->
<!-- isosent="20081027144642" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] snprintf vs. sprintf" -->
<!-- id="1E3D1766-8BD8-4DEF-8060-85B442A2043D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270810270508v6553d984vb0387e087065be7d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] snprintf vs. sprintf<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 10:46:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4811.php">Jeff Squyres: "[OMPI devel] VampirTrace: snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI devel] Moving Fix for ALPS from trunk into v1.3"</a>
<li><strong>In reply to:</strong> <a href="4807.php">Brad Penoff: "[OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4811.php">Jeff Squyres: "[OMPI devel] VampirTrace: snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4811.php">Jeff Squyres: "[OMPI devel] VampirTrace: snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad,
<br>
<p>We have our version of snprintf, just in case the installed standard  
<br>
library doesn't support it. This function called opal_snprintf will be  
<br>
aliased to snprintf (./opal/include/opal_config_bottom.h:410). As you  
<br>
are supposed to always include opal_config.h as first header in your  
<br>
files, using snprintf will always be safe.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 27, 2008, at 8:08 AM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the current ompi-trunk (r19808), my build was breaking.  I have
</span><br>
<span class="quotelev1">&gt; created a small patch to fix this, but I wanted to ask the team about
</span><br>
<span class="quotelev1">&gt; something first.  One of the problems was with snprintf.  I read a
</span><br>
<span class="quotelev1">&gt; little bit more about this and I found this quote about snprintf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;snprintf does not form part of the widely implemented ANSI C
</span><br>
<span class="quotelev1">&gt; standard, as sprintf does. However, it came into the language for the
</span><br>
<span class="quotelev1">&gt; later C99 standard and often existed in C libraries before that.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'm wondering, should the use of snprintf as in
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/tools/opari/tool/opari.cc depend on the value of
</span><br>
<span class="quotelev1">&gt; _GLIBCXX_USE_C99 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For my system, one &quot;fix&quot; seemed to be to just delete this &quot;using
</span><br>
<span class="quotelev1">&gt; std::snprintf;&quot; line. Everything then compiled and worked, but I don't
</span><br>
<span class="quotelev1">&gt; know how general/desired this &quot;solution&quot; is.  Any comments on snprintf
</span><br>
<span class="quotelev1">&gt; and this solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ svn diff
</span><br>
<span class="quotelev1">&gt; Index: ompi/contrib/vt/vt/tools/opari/tool/opari.cc
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(revision 19808)
</span><br>
<span class="quotelev1">&gt; +++ ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -15,7 +15,6 @@
</span><br>
<span class="quotelev1">&gt;   using std::cout;
</span><br>
<span class="quotelev1">&gt;   using std::cerr;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstdio&gt;
</span><br>
<span class="quotelev1">&gt; -  using std::snprintf;
</span><br>
<span class="quotelev1">&gt;   using std::remove;
</span><br>
<span class="quotelev1">&gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev1">&gt;   using std::strcmp;
</span><br>
<span class="quotelev1">&gt; Index: orte/tools/orte-iof/orte-iof.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/tools/orte-iof/orte-iof.c	(revision 19808)
</span><br>
<span class="quotelev1">&gt; +++ orte/tools/orte-iof/orte-iof.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -37,6 +37,9 @@
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif  /*  HAVE_STDLIB_H */
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_SIGNAL_H
</span><br>
<span class="quotelev1">&gt; +#include &lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif  /*  HAVE_SIGNAL_H */
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif  /* HAVE_SYS_STAT_H */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4810/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4811.php">Jeff Squyres: "[OMPI devel] VampirTrace: snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4809.php">Jeff Squyres: "Re: [OMPI devel] Moving Fix for ALPS from trunk into v1.3"</a>
<li><strong>In reply to:</strong> <a href="4807.php">Brad Penoff: "[OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4811.php">Jeff Squyres: "[OMPI devel] VampirTrace: snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4811.php">Jeff Squyres: "[OMPI devel] VampirTrace: snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4820.php">Matthias Jurenz: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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
