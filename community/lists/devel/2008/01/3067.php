<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 02:53:14 2008" -->
<!-- isoreceived="20080129075314" -->
<!-- sent="Tue, 29 Jan 2008 02:53:05 -0500" -->
<!-- isosent="20080129075305" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="6CDD41C3-9A9E-4714-9D22-D61CA01173F1_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="58F3FA1F-B92E-43DA-82A7-3CD7CBB5CBA5_at_eecs.utk.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 02:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
DSO build also fail.
<br>
<p>../../../../../../trunk/ompi/contrib/vt/vt/vtlib/vt_comp_gnu.c:312:5:  
<br>
warning: &quot;VT_BFD&quot; is not defined
<br>
../../../../../../trunk/ompi/contrib/vt/vt/vtlib/vt_comp_gnu.c:312:5:  
<br>
warning: &quot;VT_BFD&quot; is not defined
<br>
/usr/bin/ld: cannot find -lz
<br>
collect2: ld returned 1 exit status
<br>
make[6]: *** [vtfilter] Error 1
<br>
<p>Le 29 janv. 08 &#224; 01:51, George Bosilca a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Look like VT do not correctly compute dependencies. A static build  
</span><br>
<span class="quotelev1">&gt; will fails if libz.a is not installed on the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lz
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vtfilter] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2008, at 12:37 PM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this problem should be fixed now...
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the symbol '__pos' is not available on every  
</span><br>
<span class="quotelev2">&gt;&gt; platform. This isn't a problem, because
</span><br>
<span class="quotelev2">&gt;&gt; it's only used for a debug control message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mo, 2008-01-28 at 09:41 -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doh - this is Solaris on x86?  I think Terry said Solaris/sparc was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VT guys -- can you check out what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 28, 2008, at 9:36 AM, Adrian Knoth wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Mon, Jan 28, 2008 at 07:26:56AM -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; We seem to have a problem on the trunk this morning. I am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; building
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; There are more errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `fsetpos':
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `fsetpos64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `fsetpos':
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `fsetpos64':
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Just my $0.02
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matthias Jurenz,
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt;&gt; Willersbau A106, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; phone +49-351-463-31945, fax +49-351-463-37773
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3068.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
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
