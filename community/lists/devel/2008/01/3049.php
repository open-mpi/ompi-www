<?
$subject_val = "Re: [OMPI devel] configure patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 19:00:42 2008" -->
<!-- isoreceived="20080125000042" -->
<!-- sent="Thu, 24 Jan 2008 19:00:23 -0500" -->
<!-- isosent="20080125000023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure patch" -->
<!-- id="C4B495D4-DFF2-4C29-87B5-E3CF0702DEA6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080119083839.GB14226_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 19:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>Previous message:</strong> <a href="3048.php">Rolf Vandevaart: "[OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>In reply to:</strong> <a href="3009.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>Reply:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2008, at 3:38 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; This patch will not work with Solaris sh.  Please consider using this
</span><br>
<span class="quotelev1">&gt; instead, it should avoid the issues with both shells.  (Untested.)
</span><br>
<p>Ralf -- the original patch changed both ompi_get_version.m4 and  
<br>
ompi_get_version.sh; your patch only changes the m4.
<br>
<p>Is there equivalent magic for the sh file as well?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_get_version.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_get_version.m4	(Revision 17165)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_get_version.m4	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -41,7 +41,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     dnl quote eval to suppress macro expansion with non-GNU m4
</span><br>
<span class="quotelev1">&gt;     if test -f &quot;$1&quot;; then
</span><br>
<span class="quotelev1">&gt; -        [eval] &quot;`sed -n \&quot;\
</span><br>
<span class="quotelev1">&gt; +        ompi_vers=`sed -n &quot;
</span><br>
<span class="quotelev1">&gt; 	t clear
</span><br>
<span class="quotelev1">&gt; 	: clear
</span><br>
<span class="quotelev1">&gt; 	s/^major/$2_MAJOR_VERSION/
</span><br>
<span class="quotelev1">&gt; @@ -53,7 +53,8 @@
</span><br>
<span class="quotelev1">&gt; 	t print
</span><br>
<span class="quotelev1">&gt; 	b
</span><br>
<span class="quotelev1">&gt; 	: print
</span><br>
<span class="quotelev1">&gt; -	p\&quot; &lt; \&quot;\$1\&quot;`&quot;
</span><br>
<span class="quotelev1">&gt; +	p&quot; &lt; &quot;$1&quot;`
</span><br>
<span class="quotelev1">&gt; +	[eval] &quot;$ompi_vers&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         # Only print release version if it isn't 0
</span><br>
<span class="quotelev1">&gt;         if test $$2_RELEASE_VERSION -ne 0 ; then
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
<li><strong>Next message:</strong> <a href="3050.php">Edgar Gabriel: "Re: [OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>Previous message:</strong> <a href="3048.php">Rolf Vandevaart: "[OMPI devel] Hierarchical Collectives Query"</a>
<li><strong>In reply to:</strong> <a href="3009.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>Reply:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
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
