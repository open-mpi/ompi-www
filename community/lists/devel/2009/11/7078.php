<?
$subject_val = "Re: [OMPI devel] Memory corruption with mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 11:00:08 2009" -->
<!-- isoreceived="20091103160008" -->
<!-- sent="Tue, 3 Nov 2009 11:00:02 -0500" -->
<!-- isosent="20091103160002" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory corruption with mpool" -->
<!-- id="AD13FBA3-4A28-4B1E-BF1A-26B716956C06_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF04603.7040203_at_uni-hd.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memory corruption with mpool<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 11:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2009, at 10:02 AM, Mondrian Nuessle wrote:
<br>
<p><span class="quotelev1">&gt; hm, I did not set any threading related options in configure, so I  
</span><br>
<span class="quotelev1">&gt; guess threading was not disabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled it again with the following configure options,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-memchecker --enable-mem-debug --disable-ft- 
</span><br>
<span class="quotelev1">&gt; thread --disable-progress-threads --disable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the behavior did change, although it still does not work  
</span><br>
<span class="quotelev1">&gt; completely. I will investigate further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FWIW: if you're building from a tarball, the various &quot;debug&quot; options  
<br>
are not the default (it defaults to an optimized build).  All the  
<br>
thread stuff is disabled by default, however.  So your specifying them  
<br>
should not change anything (it's not harmful to specify disabling  
<br>
them; it should just be exactly the same as not specifying them).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7079.php">Ralph Castain: "Re: [OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7077.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
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
