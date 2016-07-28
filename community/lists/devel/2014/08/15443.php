<?
$subject_val = "Re: [OMPI devel] Trunk broken for PPC64?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 05:00:15 2014" -->
<!-- isoreceived="20140801090015" -->
<!-- sent="Fri, 1 Aug 2014 02:00:13 -0700" -->
<!-- isosent="20140801090013" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk broken for PPC64?" -->
<!-- id="CAAvDA15yieGFDjdqZT4Nw-1f9_JvAeLo=2QevpaJ80pXuvFLwQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53DB4DAE.9070804_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk broken for PPC64?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 05:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15444.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15442.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15442.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15471.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 1, 2014 at 1:19 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just commited r32393 (and made a CMR for v1.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please give it a try ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I am not equipped to build from svn on most of my test platforms.
<br>
However, I applied your one-line change manually to a trunk tarball on
<br>
Solaris/SPARC, Linux/IA64 and Linux/PPC64.
<br>
I had already reported the problem on PPC64 and IA64, but have since also
<br>
seen the same backtrace on SPARC with an 8K pagesize.
<br>
<p>I can confirm that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cm-&gt;lmngr_alignment = sysconf(_SC_PAGESIZE)
<br>
resolves SEGV in coll/ml on all three platforms where I had observed is
<br>
previously.
<br>
<p><p>sysconf is called directly (e.g. no #ifdef protected) in several other
<br>
<span class="quotelev1">&gt; places :
</span><br>
<p><p>But note that both _SC_PAGESIZE and _SC_PAGE_SIZE appear in your grep
<br>
output.
<br>
You should probably allow for both of those spellings.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15444.php">Mike Dubman: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15442.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15442.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15471.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
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
