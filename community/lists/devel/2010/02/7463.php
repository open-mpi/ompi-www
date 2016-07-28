<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 10:15:06 2010" -->
<!-- isoreceived="20100219151506" -->
<!-- sent="Fri, 19 Feb 2010 12:15:02 -0300" -->
<!-- isosent="20100219151502" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="e7ba66e41002190715t5f3dc2crb961d30e1deb3894_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B7051649-2153-447C-88D3-C1C5FB453AD9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-19 10:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7464.php">Ralph Castain: "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>In reply to:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 February 2010 10:53, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 18, 2010, at 1:53 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You could probably create fake empty libopen-rte and libopen-pal stub
</span><br>
<span class="quotelev2">&gt;&gt; libraries with 0:0:0 purely for the sake of allowing such an a.out to
</span><br>
<span class="quotelev2">&gt;&gt; still work (on systems with versioned sonames[1]). &#194;&#160;Since this doesn't
</span><br>
<span class="quotelev2">&gt;&gt; actually use any of the APIs from those libraries, there is no problem
</span><br>
<span class="quotelev2">&gt;&gt; here, and your 1.5 libmpi will pull in the 1:0:0 versions of the other
</span><br>
<span class="quotelev2">&gt;&gt; two libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You get 10 &quot;evil genius&quot; points for a nifty-yet-icky solution. &#194;&#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really want to continue carrying forward empty libraries just to maintain ABI. &#194;&#160;I'm (mostly) ok with breaking ABI at a major series change (i.e., 1.5.0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>And you could add a FAQ entry or document in some place how to do this
<br>
trick, just in case a sysadmin desperately needs the hack because of
<br>
pressure from some user with ABI issues.
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7464.php">Ralph Castain: "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22669"</a>
<li><strong>In reply to:</strong> <a href="7456.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
