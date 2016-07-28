<?
$subject_val = "Re: [OMPI devel] vt configuration issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 11:27:55 2008" -->
<!-- isoreceived="20080303162755" -->
<!-- sent="Mon, 03 Mar 2008 17:27:49 +0100" -->
<!-- isosent="20080303162749" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt configuration issues" -->
<!-- id="1204561669.6062.51.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="200802291310.56427.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt configuration issues<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 11:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3327.php">Ralph Castain: "[OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3325.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt configuration issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>the 'make dist[clean]' problem should be fixed now. To avoid that Make
<br>
enters a 'ompi/contrib'-directory 
<br>
of a disabled contributed software the Makefile variable
<br>
OMPI_CONTRIB_DIST_SUBDIRS must not be set.
<br>
I've tested this fix as follows:
<br>
<p>1. configure --enable-contrib-no-build=vt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make distclean
<br>
-&gt; works
<br>
2. configure --enable-contrib-no-build=vt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make dist # the tarball doesn't contain VT sources
<br>
(omp/contrib/vt/vt)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tar xfz &lt;tarball&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure ; make ; make install
<br>
-&gt; works
<br>
3. test 1 in VPATH mode
<br>
4. test 2 in VPATH mode
<br>
<p><p>Matthias
<br>
<p><p>On Fr, 2008-02-29 at 13:10 +0100, Andreas Kn&#195;&#188;pfer wrote:
<br>
<p><span class="quotelev1">&gt; On Thursday 28 February 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I can't remember if I posted about this before or not -- should we
</span><br>
<span class="quotelev2">&gt; &gt; disable trunk/VT building by default while the configuration issues
</span><br>
<span class="quotelev2">&gt; &gt; are being worked out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which config issues are you refering to? Is it about the 'make distclean' that 
</span><br>
<span class="quotelev1">&gt; fails if you explicitly disabled VT before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see no easy fix for this, because you will get an incomplete set of 
</span><br>
<span class="quotelev1">&gt; Makefiles if you ask for an incomplete configure. Yet, by default everything 
</span><br>
<span class="quotelev1">&gt; should be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, I'd like to keep it enabled by default ... well, of course I 
</span><br>
<span class="quotelev1">&gt; would ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any other isses open with VT config?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andreas
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3328/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3327.php">Ralph Castain: "[OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/02/3325.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt configuration issues"</a>
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
