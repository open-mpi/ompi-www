<?
$subject_val = "Re: [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 14:44:20 2009" -->
<!-- isoreceived="20090909184420" -->
<!-- sent="Wed, 09 Sep 2009 11:45:01 -0700" -->
<!-- isosent="20090909184501" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error message improvement" -->
<!-- id="4AA7F7AD.5080203_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.2.0909091259530.19454_at_hermes-1.csi.cam.ac.uk" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 14:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6803.php">N.M. Maclaren: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI devel] Error message improvement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 9 2009, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2009, at 14:16 , Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does C99 complient compiler is something unusual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or is there a policy among OMPI developers/users that prevent me f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rom using __func__  instead of hardcoded strings in the code ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __func__ is what you should use. We take care of having it defined 
</span><br>
<span class="quotelev2">&gt;&gt; in  _all_ cases. If the compiler doesn't support it we define it 
</span><br>
<span class="quotelev2">&gt;&gt; manually  (to __FUNCTION__ or to __FILE__ in the worst case), so it 
</span><br>
<span class="quotelev2">&gt;&gt; is always  available (even if it doesn't contain what one might 
</span><br>
<span class="quotelev2">&gt;&gt; expect such in  the case of __FILE__).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a good, practical solution.  A slight rider is that you shouldn't
</span><br>
<span class="quotelev1">&gt; be clever with it - such as using it in preprocessor statements.  I tried
</span><br>
<span class="quotelev1">&gt; some tests at one stage, and there were 'interesting' variations on how
</span><br>
<span class="quotelev1">&gt; different compilers interpreted C99.  Let alone the fact that it might
</span><br>
<span class="quotelev1">&gt; map to something else, with different rules.  If you need to play such
</span><br>
<span class="quotelev1">&gt; games, use hard-coded names.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things may have stabilised since then, but I wouldn't bet on it.
</span><br>
<p>Would it make sense for someone who understands this thread to update 
<br>
the devel FAQs?  E.g., one of:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle">https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="6810.php">Ashley Pittman: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6803.php">N.M. Maclaren: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>Reply:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI devel] Error message improvement"</a>
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
