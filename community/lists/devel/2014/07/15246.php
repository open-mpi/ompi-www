<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 08:55:43 2014" -->
<!-- isoreceived="20140724125543" -->
<!-- sent="Thu, 24 Jul 2014 14:55:30 +0200" -->
<!-- isosent="20140724125530" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="53D10242.9060604_at_tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LNX.2.00.1407241442340.2271_at_pcl321.mppmu.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 08:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15245.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15245.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/24/2014 02:52 PM, Peter Breitenlohner wrote:
<br>
<span class="quotelev1">&gt; On Thu, 24 Jul 2014, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it seems autotools related:
</span><br>
<span class="quotelev2">&gt;&gt; it tries to create link in &quot;hooks&quot; subfolder which does not present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This typically occurs when you try to create a file (symlink) in a
</span><br>
<span class="quotelev1">&gt; nonexistent directory.  In such situations the make rules must ensure that
</span><br>
<span class="quotelev1">&gt; such directories exist, e.g., via
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; some_target: Some_prerequisite
</span><br>
<span class="quotelev1">&gt;      $(MKDIR_P) hooks
</span><br>
<span class="quotelev1">&gt;      $(LN_S) $(srcdir)/hooks/vt_unify_hooks_base.cc
</span><br>
<span class="quotelev1">&gt; hooks/vt_unify_hooks_base.cc
</span><br>
<p>But the dep rules should already ensure this, as it creates the .deps 
<br>
directory at the end of configure. Though if this is not guaranteed to 
<br>
happen (maybe it depends on the used compiler) than we would need to 
<br>
ensure it in the makefile itself.
<br>
<p>Does someone know the details from autoconf about this?
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Peter Breitenlohner &lt;peb_at_[hidden]&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15246/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Previous message:</strong> <a href="15245.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15245.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15248.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15263.php">Peter Breitenlohner: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
