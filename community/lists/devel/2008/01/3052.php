<?
$subject_val = "Re: [OMPI devel] configure patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 10:44:59 2008" -->
<!-- isoreceived="20080125154459" -->
<!-- sent="Fri, 25 Jan 2008 10:44:44 -0500" -->
<!-- isosent="20080125154444" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure patch" -->
<!-- id="4E4CD3D8-8ECC-4A42-8532-BDAAF748ED2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080125033038.GA30955_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2008-01-25 10:44:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3053.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>Previous message:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>In reply to:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Um -- duh.  You're right; I didn't pay attention to the fact that he  
<br>
was patching the tarball, not the raw source.
<br>
<p>Thanks!
<br>
<p><p>On Jan 24, 2008, at 10:30 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Fri, Jan 25, 2008 at 01:00:23AM CET:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2008, at 3:38 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This patch will not work with Solaris sh.  Please consider using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead, it should avoid the issues with both shells.  (Untested.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralf -- the original patch changed both ompi_get_version.m4 and
</span><br>
<span class="quotelev2">&gt;&gt; ompi_get_version.sh; your patch only changes the m4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there equivalent magic for the sh file as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure.  Just run autogen.sh, it will regenerate the sh file.
</span><br>
<span class="quotelev1">&gt; Sorry for not mentioning that right away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: config/ompi_get_version.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- config/ompi_get_version.m4	(Revision 17165)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ config/ompi_get_version.m4	(Arbeitskopie)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -41,7 +41,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   dnl quote eval to suppress macro expansion with non-GNU m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if test -f &quot;$1&quot;; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        [eval] &quot;`sed -n \&quot;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        ompi_vers=`sed -n &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	t clear
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	: clear
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	s/^major/$2_MAJOR_VERSION/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -53,7 +53,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	t print
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	: print
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -	p\&quot; &lt; \&quot;\$1\&quot;`&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	p&quot; &lt; &quot;$1&quot;`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	[eval] &quot;$ompi_vers&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       # Only print release version if it isn't 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if test $$2_RELEASE_VERSION -ne 0 ; then
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
<li><strong>Next message:</strong> <a href="3053.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>Previous message:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
<li><strong>In reply to:</strong> <a href="3051.php">Ralf Wildenhues: "Re: [OMPI devel] configure patch"</a>
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
