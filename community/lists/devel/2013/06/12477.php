<?
$subject_val = "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 09:04:05 2013" -->
<!-- isoreceived="20130621130405" -->
<!-- sent="Fri, 21 Jun 2013 13:03:57 +0000" -->
<!-- isosent="20130621130357" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F696909_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51C43BA5.6000306_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 09:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>In reply to:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Reply:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 21, 2013, at 7:40 AM, Piotr Lesnicki &lt;piotr.lesnicki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1) you are right, an eof in the middle of a &lt;comment&gt; section must be
</span><br>
<span class="quotelev1">&gt;   handled explicitly, otherwise it ends by an unrelated error later,
</span><br>
<span class="quotelev1">&gt;   just as it currently does. By the way, here it ends with
</span><br>
<span class="quotelev1">&gt;   [no-options-error] which has no corresponding message in
</span><br>
<span class="quotelev1">&gt;   'help-opal-wrapper.txt'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I joined the patch to correct this &lt;comment&gt; problem.
</span><br>
<p>Sweet.  Sounds like this was a long-standing problem.
<br>
<p><span class="quotelev1">&gt; 2) indeed, other lex files have similar patterns to 'keyval_lex.l', so
</span><br>
<span class="quotelev1">&gt;   we should correct them also. I will take a look at them.
</span><br>
<p>Thanks!
<br>
<p>Can you submit a combined patch when ready?
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
<li><strong>Next message:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>In reply to:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Reply:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
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
