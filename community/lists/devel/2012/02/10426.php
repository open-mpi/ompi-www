<?
$subject_val = "Re: [OMPI devel] VT build failure with Clang++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 11:38:50 2012" -->
<!-- isoreceived="20120215163850" -->
<!-- sent="Wed, 15 Feb 2012 18:38:25 +0200" -->
<!-- isosent="20120215163825" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT build failure with Clang++" -->
<!-- id="CA+Y5xYfn-K0-7+HMVFEJrc908T0P8TmZwVv-obTLi_nCJ7pBZA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15nVNqV3_0tKtF4Ct970-C84j3gQr0q58VFz6vriYCFTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT build failure with Clang++<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 11:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10427.php">Dmitri Gribenko: "[OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10425.php">Jeff Squyres: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>In reply to:</strong> <a href="10419.php">Paul Hargrove: "[OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Reply:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 15, 2012 at 10:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I strongly suspect that this is a Clang++ bug.
</span><br>
<p>I don't know if it is a Clang bug, but here's my understanding of the problem.
<br>
<p>TokenFactoryScopeC&lt;T&gt;::create() boils down to this:
<br>
<p>template &lt;class T&gt;
<br>
uint32_t
<br>
TokenFactoryScopeC&lt;T&gt;::create( const void * localDef, uint32_t globalToken )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;const T &amp; local_def = *static_cast&lt;const T*&gt;(localDef);
<br>
&nbsp;&nbsp;&nbsp;typename std::set&lt;T&gt;::const_iterator it = m_globDefs-&gt;find(
<br>
local_def ); // need operator&lt; for T
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>When clang tries to instantiate
<br>
TokenFactoryScopeC&lt;DefRec_BaseS&gt;::getPackSize(), it tries to
<br>
instantiate create() too.  It fails to do so because there is no
<br>
operator&lt; defined for DefRec_BaseS.
<br>
<p>Anyway, this looks like a bug in VT code, here's why.  DefRec_* have
<br>
DefRec_*::SortS defined, but it is not used in
<br>
TokenFactoryScopeC&lt;T&gt;::m_globDefs.  Probably it should be, something
<br>
like this:
<br>
<p>std::set&lt;T, typename T::SortS&gt; * m_globDefs;
<br>
<p>I'm not sure if this is a bug in Clang because I don't know if Clang
<br>
should have tried to instantiate create().
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10427.php">Dmitri Gribenko: "[OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10425.php">Jeff Squyres: "Re: [OMPI devel] Question about opal/mca/memory/linux licensing"</a>
<li><strong>In reply to:</strong> <a href="10419.php">Paul Hargrove: "[OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Reply:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
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
