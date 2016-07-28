<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 20:12:21 2007" -->
<!-- isoreceived="20071218011221" -->
<!-- sent="Mon, 17 Dec 2007 20:08:02 -0500" -->
<!-- isosent="20071218010802" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="C38C87A2.120F8%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071217133250.GE28587_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-17 20:08:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2876.php">Lisandro Dalcin: "[OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<li><strong>In reply to:</strong> <a href="2867.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
&nbsp;&nbsp;Needless to say (for the nth time :-) ) that changing this bit of code
<br>
makes me
<br>
&nbsp;nervous.  However, it occurred to me that there is a much better way to
<br>
test
<br>
&nbsp;this code than setting up an environment that generates some out of order
<br>
&nbsp;events with out us being able to specify the order.
<br>
&nbsp;&nbsp;Since this routine is executed serially, it should be sufficient to set up
<br>
a test
<br>
&nbsp;code that would simulate any out-of-order scenario we want.  If one
<br>
specifies
<br>
&nbsp;number of &#179;messages&#178; to be &#179;sent&#178;, and &#179;randomly&#178; changes the order they
<br>
&nbsp;arrive (e.g. scramble some input vector), one can check and see if the
<br>
messages
<br>
&nbsp;are &#179;received&#178; in the correct order.  One could even &#179;drop&#178; messages and
<br>
see
<br>
&nbsp;if matching stops.  Using a test code like this, and a code coverage tool,
<br>
one
<br>
&nbsp;should be able to get much better testing that we have to date.
<br>
&nbsp;&nbsp;What would you think about doing something like this ?   Seems like a few
<br>
hours
<br>
&nbsp;of this sort of simulation would be much better than even years of testing
<br>
and
<br>
&nbsp;relying on random fluctuations in the run to thoroughly test out-of-order
<br>
scenarios.
<br>
<p>What do you think ?
<br>
Rich
<br>
<p><p>On 12/17/07 8:32 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Dec 13, 2007 at 08:04:21PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yes, should be a bit more clear.  Need an independent way to verify that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; data is matched
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  in the correct order &#173; sending this information as payload is one way to
</span><br>
<span class="quotelev2">&gt;&gt; do
</span><br>
<span class="quotelev3">&gt;&gt; &gt; this.  So,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  sending unique data in every message, and making sure that it arrives in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the user buffers
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  in the expected order is a way to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did that. Encoded sequence number in a payload and sent many eager
</span><br>
<span class="quotelev1">&gt; packets from one rank to another. Many packets were reoredered, but
</span><br>
<span class="quotelev1">&gt; application received everything in a correct order.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;                         Gleb.
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2876.php">Lisandro Dalcin: "[OMPI devel] valgrind warnings (uninited mem passed to syscall)"</a>
<li><strong>In reply to:</strong> <a href="2867.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2878.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
