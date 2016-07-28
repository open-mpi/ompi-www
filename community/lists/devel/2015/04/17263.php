<?
$subject_val = "Re: [OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 18 07:01:13 2015" -->
<!-- isoreceived="20150418110113" -->
<!-- sent="Sat, 18 Apr 2015 11:01:11 +0000" -->
<!-- isosent="20150418110111" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="6E8EC03C-6641-445A-BD75-C00B66ABB40C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7E69F123-3447-4B75-BD25-4E18409689CB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.5rc1 is ready for testing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-18 07:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17262.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17182.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17234.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2015, at 3:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Don't use inline functions with Clang compiler
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Without motivation/explanation that sounds like a bad thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some versions of clang (at least &gt;= 3.5 -- perhaps older versions, too?) will warn about -finline-functions, but still allow it. This is very annoying, so check for that warning, too.
</span><br>
<p>I know I'm (super) late to this thread, but just to clarify, this NEWS bullet got changed to:
<br>
<p>- Fix warnings about -finline-functions when compiling with clang.
<br>
<p>The issue is that clang would warn about using the -finline-functions options, but it wouldn't error out, so our initial configure tests would think that the compiler allowed it.  What we did was actually tighten up the configure test to be able to detect that clang doesn't allow this switch.  This doesn't prevent clang from using inline functions; it just stops us from using a command line switch that clang doesn't like (and therefore prevents clang from warning about it for *every* *single* *file* that it compiles when building OMPI).
<br>
<p>Hope that helps explain...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17264.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17262.php">Ralph Castain: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17182.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17234.php">Aur&#195;&#169;lien Bouteiller: "[OMPI devel] 1.8.5rc1 and OOB on Cray XC30"</a>
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
