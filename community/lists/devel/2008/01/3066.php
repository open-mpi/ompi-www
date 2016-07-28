<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 01:51:26 2008" -->
<!-- isoreceived="20080129065126" -->
<!-- sent="Tue, 29 Jan 2008 01:51:19 -0500" -->
<!-- isosent="20080129065119" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="58F3FA1F-B92E-43DA-82A7-3CD7CBB5CBA5_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1201541820.5906.11.camel_at_ricolap" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 01:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3067.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3065.php">Josh Hursey: "[OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>In reply to:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3067.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3067.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3069.php">Andreas Knüpfer: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look like VT do not correctly compute dependencies. A static build  
<br>
will fails if libz.a is not installed on the system.
<br>
<p>/usr/bin/ld: cannot find -lz
<br>
collect2: ld returned 1 exit status
<br>
make[5]: *** [vtfilter] Error 1
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 28, 2008, at 12:37 PM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this problem should be fixed now...
</span><br>
<span class="quotelev1">&gt; It seems that the symbol '__pos' is not available on every platform.  
</span><br>
<span class="quotelev1">&gt; This isn't a problem, because
</span><br>
<span class="quotelev1">&gt; it's only used for a debug control message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mo, 2008-01-28 at 09:41 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doh - this is Solaris on x86?  I think Terry said Solaris/sparc was
</span><br>
<span class="quotelev2">&gt;&gt; tested...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; VT guys -- can you check out what's going on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2008, at 9:36 AM, Adrian Knoth wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Jan 28, 2008 at 07:26:56AM -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; We seem to have a problem on the trunk this morning. I am building
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; on a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There are more errors:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `fsetpos':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error:  
</span><br>
<span class="quotelev2">&gt;&gt; request
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `fsetpos64':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error:  
</span><br>
<span class="quotelev2">&gt;&gt; request
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `fsetpos':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error:  
</span><br>
<span class="quotelev2">&gt;&gt; request
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `fsetpos64':
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error:  
</span><br>
<span class="quotelev2">&gt;&gt; request
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Just my $0.02
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matthias Jurenz,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-31945, fax +49-351-463-37773
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3066/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3067.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3065.php">Josh Hursey: "[OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>In reply to:</strong> <a href="3063.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3067.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3067.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3069.php">Andreas Knüpfer: "Re: [OMPI devel] Trunk borked"</a>
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
