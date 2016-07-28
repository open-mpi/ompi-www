<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:37:08 2008" -->
<!-- isoreceived="20080128173708" -->
<!-- sent="Mon, 28 Jan 2008 18:37:00 +0100" -->
<!-- isosent="20080128173700" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="1201541820.5906.11.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="7DA881E6-21E5-45EA-AE68-3A359814727C_at_cisco.com" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 12:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3062.php">Andreas Kn&#252;pfer: "[OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>this problem should be fixed now...
<br>
It seems that the symbol '__pos' is not available on every platform.
<br>
This isn't a problem, because
<br>
it's only used for a debug control message. 
<br>
<p>Regards,
<br>
Matthias
<br>
<p><p>On Mo, 2008-01-28 at 09:41 -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Doh - this is Solaris on x86?  I think Terry said Solaris/sparc was  
</span><br>
<span class="quotelev1">&gt; tested...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; VT guys -- can you check out what's going on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2008, at 9:36 AM, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Jan 28, 2008 at 07:26:56AM -0700, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We seem to have a problem on the trunk this morning. I am building  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are more errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev2">&gt; &gt; `fsetpos':
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error: request
</span><br>
<span class="quotelev2">&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev2">&gt; &gt; `fsetpos64':
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error: request
</span><br>
<span class="quotelev2">&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev2">&gt; &gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev2">&gt; &gt; `fsetpos':
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error: request
</span><br>
<span class="quotelev2">&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
</span><br>
<span class="quotelev2">&gt; &gt; `fsetpos64':
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error: request
</span><br>
<span class="quotelev2">&gt; &gt; for member `__pos' in something not a structure or union
</span><br>
<span class="quotelev2">&gt; &gt; gmake[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; gmake[5]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just my $0.02
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev2">&gt; &gt; Friedrich-Schiller-Universit&#195;&#164;t Jena, Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3063/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3064.php">Jeff Squyres: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3062.php">Andreas Kn&#252;pfer: "[OMPI devel] VT in trunk + how to disable"</a>
<li><strong>In reply to:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3066.php">George Bosilca: "Re: [OMPI devel] Trunk borked"</a>
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
