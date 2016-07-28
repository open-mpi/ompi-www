<?
$subject_val = "Re: [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 15:05:38 2009" -->
<!-- isoreceived="20090909190538" -->
<!-- sent="Wed, 9 Sep 2009 13:05:29 -0600" -->
<!-- isosent="20090909190529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error message improvement" -->
<!-- id="BF4FB2D7-A249-4D22-A6DA-9B987382666B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AA7F7AD.5080203_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 15:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bottom line is: just hardcode the function name.
<br>
<p>It isn't that hard, and it avoids confusion of sometimes getting  
<br>
function names, and sometimes getting file names...which is why you'll  
<br>
find everything (at least, that I have seen) hardcoded.
<br>
<p><p>On Sep 9, 2009, at 12:45 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9 2009, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 9, 2009, at 14:16 , Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does C99 complient compiler is something unusual
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or is there a policy among OMPI developers/users that prevent me f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rom using __func__  instead of hardcoded strings in the code ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; __func__ is what you should use. We take care of having it defined  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in  _all_ cases. If the compiler doesn't support it we define it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manually  (to __FUNCTION__ or to __FILE__ in the worst case), so  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is always  available (even if it doesn't contain what one might  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect such in  the case of __FILE__).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a good, practical solution.  A slight rider is that you  
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't
</span><br>
<span class="quotelev2">&gt;&gt; be clever with it - such as using it in preprocessor statements.  I  
</span><br>
<span class="quotelev2">&gt;&gt; tried
</span><br>
<span class="quotelev2">&gt;&gt; some tests at one stage, and there were 'interesting' variations on  
</span><br>
<span class="quotelev2">&gt;&gt; how
</span><br>
<span class="quotelev2">&gt;&gt; different compilers interpreted C99.  Let alone the fact that it  
</span><br>
<span class="quotelev2">&gt;&gt; might
</span><br>
<span class="quotelev2">&gt;&gt; map to something else, with different rules.  If you need to play  
</span><br>
<span class="quotelev2">&gt;&gt; such
</span><br>
<span class="quotelev2">&gt;&gt; games, use hard-coded names.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Things may have stabilised since then, but I wouldn't bet on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it make sense for someone who understands this thread to  
</span><br>
<span class="quotelev1">&gt; update the devel FAQs?  E.g., one of:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle">https://svn.open-mpi.org/trac/ompi/wiki/CodingStyle</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">https://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
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
