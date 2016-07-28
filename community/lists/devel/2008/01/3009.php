<?
$subject_val = "Re: [OMPI devel] configure patch";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 03:38:47 2008" -->
<!-- isoreceived="20080119083847" -->
<!-- sent="Sat, 19 Jan 2008 09:38:39 +0100" -->
<!-- isosent="20080119083839" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure patch" -->
<!-- id="20080119083839.GB14226_at_ins.uni-bonn.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2F206B17-27F1-4B3B-8DD4-325322164920_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure patch<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-19 03:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>In reply to:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Reply:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Sat, Jan 19, 2008 at 02:03:02AM CET:
<br>
<span class="quotelev1">&gt; On Jan 8, 2008, at 6:53 PM, Elan Ruusam&#228;e wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; please consider applying this patch
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://cvs.pld-linux.org/cgi-bin/cvsweb.cgi/SOURCES/openmpi-ksh.patch">http://cvs.pld-linux.org/cgi-bin/cvsweb.cgi/SOURCES/openmpi-ksh.patch</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fixes build process when /bin/sh is not bash (for example pdksh)
</span><br>
<p><span class="quotelev1">&gt; This patch seems to work for me on Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun -- can you test this with the Solaris sh?
</span><br>
<p>This patch will not work with Solaris sh.  Please consider using this
<br>
instead, it should avoid the issues with both shells.  (Untested.)
<br>
<p>Cheers,
<br>
Ralf
<br>
<p><p>Index: config/ompi_get_version.m4
<br>
===================================================================
<br>
--- config/ompi_get_version.m4	(Revision 17165)
<br>
+++ config/ompi_get_version.m4	(Arbeitskopie)
<br>
@@ -41,7 +41,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dnl quote eval to suppress macro expansion with non-GNU m4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -f &quot;$1&quot;; then
<br>
-        [eval] &quot;`sed -n \&quot;\
<br>
+        ompi_vers=`sed -n &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t clear
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: clear
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s/^major/$2_MAJOR_VERSION/
<br>
@@ -53,7 +53,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t print
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: print
<br>
-	p\&quot; &lt; \&quot;\$1\&quot;`&quot;
<br>
+	p&quot; &lt; &quot;$1&quot;`
<br>
+	[eval] &quot;$ompi_vers&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Only print release version if it isn't 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test $$2_RELEASE_VERSION -ne 0 ; then
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3010.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="3008.php">George Bosilca: "Re: [OMPI devel] Bug report: single processor MPI_Allgatherv"</a>
<li><strong>In reply to:</strong> <a href="3006.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Reply:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
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
