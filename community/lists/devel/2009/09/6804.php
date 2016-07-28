<?
$subject_val = "Re: [OMPI devel] Error message improvement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 08:04:22 2009" -->
<!-- isoreceived="20090909120422" -->
<!-- sent="Wed, 9 Sep 2009 15:04:17 +0300" -->
<!-- isosent="20090909120417" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error message improvement" -->
<!-- id="453d39990909090504x362b7668v6e539c76e48cd0da_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 08:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6805.php">pascal.deveze_at_[hidden]: "[OMPI devel] fix 2014: Problems in romio"</a>
<li><strong>Previous message:</strong> <a href="6803.php">N.M. Maclaren: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6803.php">N.M. Maclaren: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
fixed in r21956
<br>
__FUNCTION__ was replaced with __func__
<br>
thanks.
<br>
Lenny.
<br>
<p>On Wed, Sep 9, 2009 at 2:59 PM, N.M. Maclaren &lt;nmm1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 9 2009, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2009, at 14:16 , Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  does C99 complient compiler is something unusual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or is there a policy among OMPI developers/users that prevent me f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rom using __func__  instead of hardcoded strings in the code ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __func__ is what you should use. We take care of having it defined in
</span><br>
<span class="quotelev2">&gt;&gt;  _all_ cases. If the compiler doesn't support it we define it manually  (to
</span><br>
<span class="quotelev2">&gt;&gt; __FUNCTION__ or to __FILE__ in the worst case), so it is always  available
</span><br>
<span class="quotelev2">&gt;&gt; (even if it doesn't contain what one might expect such in  the case of
</span><br>
<span class="quotelev2">&gt;&gt; __FILE__).
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6805.php">pascal.deveze_at_[hidden]: "[OMPI devel] fix 2014: Problems in romio"</a>
<li><strong>Previous message:</strong> <a href="6803.php">N.M. Maclaren: "Re: [OMPI devel] Error message improvement"</a>
<li><strong>In reply to:</strong> <a href="6803.php">N.M. Maclaren: "Re: [OMPI devel] Error message improvement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6811.php">Eugene Loh: "Re: [OMPI devel] Error message improvement"</a>
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
