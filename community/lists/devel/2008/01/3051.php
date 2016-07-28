<?
$subject_val = "Re: [OMPI devel] configure patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 22:30:46 2008" -->
<!-- isoreceived="20080125033046" -->
<!-- sent="Fri, 25 Jan 2008 04:30:38 +0100" -->
<!-- isosent="20080125033038" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure patch" -->
<!-- id="20080125033038.GA30955_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C4B495D4-DFF2-4C29-87B5-E3CF0702DEA6_at_cisco.com" -->
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
<strong>Date:</strong> 2008-01-24 22:30:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>In reply to:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Reply:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Fri, Jan 25, 2008 at 01:00:23AM CET:
<br>
<span class="quotelev1">&gt; On Jan 19, 2008, at 3:38 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;This patch will not work with Solaris sh.  Please consider using this
</span><br>
<span class="quotelev2">&gt; &gt;instead, it should avoid the issues with both shells.  (Untested.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralf -- the original patch changed both ompi_get_version.m4 and  
</span><br>
<span class="quotelev1">&gt; ompi_get_version.sh; your patch only changes the m4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there equivalent magic for the sh file as well?
</span><br>
<p>Sure.  Just run autogen.sh, it will regenerate the sh file.
<br>
Sorry for not mentioning that right away.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p><span class="quotelev2">&gt; &gt;Index: config/ompi_get_version.m4
</span><br>
<span class="quotelev2">&gt; &gt;===================================================================
</span><br>
<span class="quotelev2">&gt; &gt;--- config/ompi_get_version.m4	(Revision 17165)
</span><br>
<span class="quotelev2">&gt; &gt;+++ config/ompi_get_version.m4	(Arbeitskopie)
</span><br>
<span class="quotelev2">&gt; &gt;@@ -41,7 +41,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    dnl quote eval to suppress macro expansion with non-GNU m4
</span><br>
<span class="quotelev2">&gt; &gt;    if test -f &quot;$1&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt;-        [eval] &quot;`sed -n \&quot;\
</span><br>
<span class="quotelev2">&gt; &gt;+        ompi_vers=`sed -n &quot;
</span><br>
<span class="quotelev2">&gt; &gt;	t clear
</span><br>
<span class="quotelev2">&gt; &gt;	: clear
</span><br>
<span class="quotelev2">&gt; &gt;	s/^major/$2_MAJOR_VERSION/
</span><br>
<span class="quotelev2">&gt; &gt;@@ -53,7 +53,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;	t print
</span><br>
<span class="quotelev2">&gt; &gt;	b
</span><br>
<span class="quotelev2">&gt; &gt;	: print
</span><br>
<span class="quotelev2">&gt; &gt;-	p\&quot; &lt; \&quot;\$1\&quot;`&quot;
</span><br>
<span class="quotelev2">&gt; &gt;+	p&quot; &lt; &quot;$1&quot;`
</span><br>
<span class="quotelev2">&gt; &gt;+	[eval] &quot;$ompi_vers&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        # Only print release version if it isn't 0
</span><br>
<span class="quotelev2">&gt; &gt;        if test $$2_RELEASE_VERSION -ne 0 ; then
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Previous message:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>In reply to:</strong> <a href="3049.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<li><strong>Reply:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
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
