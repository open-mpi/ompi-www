<?
$subject_val = "Re: [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 07:59:57 2009" -->
<!-- isoreceived="20090909115957" -->
<!-- sent="09 Sep 2009 12:59:53 +0100" -->
<!-- isosent="20090909115953" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error message improvement" -->
<!-- id="Prayer.1.3.2.0909091259530.19454_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFDBB903-1775-4577-A991-6B0CE8DA8155_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error message improvement<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 07:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9 2009, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;On Sep 9, 2009, at 14:16 , Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; does C99 complient compiler is something unusual
</span><br>
<span class="quotelev2">&gt;&gt; or is there a policy among OMPI developers/users that prevent me f
</span><br>
<span class="quotelev2">&gt;&gt; rom using __func__  instead of hardcoded strings in the code ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;__func__ is what you should use. We take care of having it defined in  
</span><br>
<span class="quotelev1">&gt;_all_ cases. If the compiler doesn't support it we define it manually  
</span><br>
<span class="quotelev1">&gt;(to __FUNCTION__ or to __FILE__ in the worst case), so it is always  
</span><br>
<span class="quotelev1">&gt;available (even if it doesn't contain what one might expect such in  
</span><br>
<span class="quotelev1">&gt;the case of __FILE__).
</span><br>
<p>That's a good, practical solution.  A slight rider is that you shouldn't
<br>
be clever with it - such as using it in preprocessor statements.  I tried
<br>
some tests at one stage, and there were 'interesting' variations on how
<br>
different compilers interpreted C99.  Let alone the fact that it might
<br>
map to something else, with different rules.  If you need to play such
<br>
games, use hard-coded names.
<br>
<p>Things may have stabilised since then, but I wouldn't bet on it.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6802.php">George Bosilca: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6804.php">Lenny Verkhovsky: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
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
