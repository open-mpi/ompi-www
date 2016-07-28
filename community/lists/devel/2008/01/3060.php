<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 09:41:54 2008" -->
<!-- isoreceived="20080128144154" -->
<!-- sent="Mon, 28 Jan 2008 09:41:11 -0500" -->
<!-- isosent="20080128144111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="7DA881E6-21E5-45EA-AE68-3A359814727C_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080128143623.GD11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk borked<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 09:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3061.php">Jeff Squyres: "[OMPI devel] vt Makefile.in's"</a>
<li><strong>Previous message:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh - this is Solaris on x86?  I think Terry said Solaris/sparc was  
<br>
tested...
<br>
<p>VT guys -- can you check out what's going on?
<br>
<p><p><p>On Jan 28, 2008, at 9:36 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jan 28, 2008 at 07:26:56AM -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We seem to have a problem on the trunk this morning. I am building  
</span><br>
<span class="quotelev2">&gt;&gt; on a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are more errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev1">&gt; `fsetpos':
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error: request
</span><br>
<span class="quotelev1">&gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev1">&gt; `fsetpos64':
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error: request
</span><br>
<span class="quotelev1">&gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev1">&gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev1">&gt; `fsetpos':
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error: request
</span><br>
<span class="quotelev1">&gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev1">&gt; `fsetpos64':
</span><br>
<span class="quotelev1">&gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error: request
</span><br>
<span class="quotelev1">&gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev1">&gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<li><strong>Next message:</strong> <a href="3061.php">Jeff Squyres: "[OMPI devel] vt Makefile.in's"</a>
<li><strong>Previous message:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3058.php">Adrian Knoth: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
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
