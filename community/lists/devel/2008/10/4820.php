<?
$subject_val = "Re: [OMPI devel] snprintf vs. sprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 08:14:19 2008" -->
<!-- isoreceived="20081029121419" -->
<!-- sent="Wed, 29 Oct 2008 13:14:12 +0100" -->
<!-- isosent="20081029121412" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] snprintf vs. sprintf" -->
<!-- id="1225282452.30103.39.camel_at_ricolap" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> Re: [OMPI devel] snprintf vs. sprintf<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 08:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem should be fixed in the trunk. VampirTrace also comes now
<br>
with an own
<br>
implementation of 'snprintf'. More precisely, the corresponding sources
<br>
are based on
<br>
'opal/util/printf.&lt;c|h&gt;' and located in
<br>
'ompi/contrib/vt/vt/util/util.c'. 
<br>
Concerning this matter, I want to know, whether there is a
<br>
copyright/license problem.
<br>
Should our 'util.c' also contain your copyright headlines from
<br>
'printf.c', for instance?
<br>
<p>BTW: We are rather sure, that we found a memory leak in the function
<br>
'opal_vsnprintf()'.
<br>
It seems, that there is a 'free' missing at the and of this function.
<br>
Can you confirm?
<br>
<p>Matthias
<br>
<p>On Mo, 2008-10-27 at 10:46 -0400, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brad,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have our version of snprintf, just in case the installed standard  
</span><br>
<span class="quotelev1">&gt; library doesn't support it. This function called opal_snprintf will be  
</span><br>
<span class="quotelev1">&gt; aliased to snprintf (./opal/include/opal_config_bottom.h:410). As you  
</span><br>
<span class="quotelev1">&gt; are supposed to always include opal_config.h as first header in your  
</span><br>
<span class="quotelev1">&gt; files, using snprintf will always be safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2008, at 8:08 AM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Greetings,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the current ompi-trunk (r19808), my build was breaking.  I have
</span><br>
<span class="quotelev2">&gt; &gt; created a small patch to fix this, but I wanted to ask the team about
</span><br>
<span class="quotelev2">&gt; &gt; something first.  One of the problems was with snprintf.  I read a
</span><br>
<span class="quotelev2">&gt; &gt; little bit more about this and I found this quote about snprintf:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;snprintf does not form part of the widely implemented ANSI C
</span><br>
<span class="quotelev2">&gt; &gt; standard, as sprintf does. However, it came into the language for the
</span><br>
<span class="quotelev2">&gt; &gt; later C99 standard and often existed in C libraries before that.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I'm wondering, should the use of snprintf as in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/contrib/vt/vt/tools/opari/tool/opari.cc depend on the value of
</span><br>
<span class="quotelev2">&gt; &gt; _GLIBCXX_USE_C99 ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For my system, one &quot;fix&quot; seemed to be to just delete this &quot;using
</span><br>
<span class="quotelev2">&gt; &gt; std::snprintf;&quot; line. Everything then compiled and worked, but I don't
</span><br>
<span class="quotelev2">&gt; &gt; know how general/desired this &quot;solution&quot; is.  Any comments on snprintf
</span><br>
<span class="quotelev2">&gt; &gt; and this solution?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; brad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ svn diff
</span><br>
<span class="quotelev2">&gt; &gt; Index: ompi/contrib/vt/vt/tools/opari/tool/opari.cc
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(revision 19808)
</span><br>
<span class="quotelev2">&gt; &gt; +++ ompi/contrib/vt/vt/tools/opari/tool/opari.cc	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -15,7 +15,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;   using std::cout;
</span><br>
<span class="quotelev2">&gt; &gt;   using std::cerr;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;cstdio&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -  using std::snprintf;
</span><br>
<span class="quotelev2">&gt; &gt;   using std::remove;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;cstring&gt;
</span><br>
<span class="quotelev2">&gt; &gt;   using std::strcmp;
</span><br>
<span class="quotelev2">&gt; &gt; Index: orte/tools/orte-iof/orte-iof.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- orte/tools/orte-iof/orte-iof.c	(revision 19808)
</span><br>
<span class="quotelev2">&gt; &gt; +++ orte/tools/orte-iof/orte-iof.c	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -37,6 +37,9 @@
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #endif  /*  HAVE_STDLIB_H */
</span><br>
<span class="quotelev2">&gt; &gt; +#ifdef HAVE_SIGNAL_H
</span><br>
<span class="quotelev2">&gt; &gt; +#include &lt;signal.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#endif  /*  HAVE_SIGNAL_H */
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #endif  /* HAVE_SYS_STAT_H */
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4820/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Previous message:</strong> <a href="4819.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>In reply to:</strong> <a href="4810.php">George Bosilca: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
<li><strong>Reply:</strong> <a href="4821.php">Jeff Squyres: "Re: [OMPI devel] snprintf vs. sprintf"</a>
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
