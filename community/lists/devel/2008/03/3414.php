<?
$subject_val = "Re: [OMPI devel] use of AC_CACHE_CHECK in otf";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 10:09:43 2008" -->
<!-- isoreceived="20080310140943" -->
<!-- sent="Mon, 10 Mar 2008 15:09:36 +0100" -->
<!-- isosent="20080310140936" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] use of AC_CACHE_CHECK in otf" -->
<!-- id="1205158176.5807.17.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20080306212341.GE25893_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] use of AC_CACHE_CHECK in otf<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 10:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3413.php">Jeff Squyres: "[OMPI devel] cisco weekend mtt failures"</a>
<li><strong>In reply to:</strong> <a href="3399.php">Ralf Wildenhues: "[OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed. Thank for your hint, Ralf.
<br>
<p>On Do, 2008-03-06 at 22:23 +0100, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; In ompi/contrib/vt/vt/extlib/otf/acinclude.m4, in the macros WITH_DEBUG
</span><br>
<span class="quotelev1">&gt; and WITH_VERBOSE, dubious constructs such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     AC_CACHE_CHECK([debug],
</span><br>
<span class="quotelev1">&gt;         [debug],
</span><br>
<span class="quotelev1">&gt;         [debug=])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; are used.  These have the following problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Cache variables need to match *_cv_* in order to actually be saved
</span><br>
<span class="quotelev1">&gt; (where the bit before _cv_ is preferably a package or author prefix,
</span><br>
<span class="quotelev1">&gt; for namespace cleanliness; see
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/autoconf/manual/html_node/Cache-Variable-Names.html">http://www.gnu.org/software/autoconf/manual/html_node/Cache-Variable-Names.html</a>&gt;.
</span><br>
<span class="quotelev1">&gt; The next Autoconf version will warn about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * There is little need to cache information that the user provided on
</span><br>
<span class="quotelev1">&gt; the configure command line.  If configure is rerun by './config.status
</span><br>
<span class="quotelev1">&gt; --recheck', it remembers the original configure command line.  Only if
</span><br>
<span class="quotelev1">&gt; the user manually reruns configure (and keeps config.cache) does this
</span><br>
<span class="quotelev1">&gt; make a difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I suggest you remove those two instances of AC_CACHE_CHECK usage,
</span><br>
<span class="quotelev1">&gt; or forward this information to the author of oft.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3414/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3413.php">Jeff Squyres: "[OMPI devel] cisco weekend mtt failures"</a>
<li><strong>In reply to:</strong> <a href="3399.php">Ralf Wildenhues: "[OMPI devel] use of AC_CACHE_CHECK in otf"</a>
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
