<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 18 10:05:10 2007" -->
<!-- isoreceived="20071218150510" -->
<!-- sent="Tue, 18 Dec 2007 17:05:03 +0200" -->
<!-- isosent="20071218150503" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071218150503.GG28587_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C38C87A2.120F8%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-18 10:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2879.php">Jeff Squyres: "[OMPI devel] vt-intergration OS X problem"</a>
<li><strong>Previous message:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 17, 2007 at 08:08:02PM -0500, Richard Graham wrote:
<br>
<span class="quotelev1">&gt;   Needless to say (for the nth time :-) ) that changing this bit of code
</span><br>
<span class="quotelev1">&gt; makes me
</span><br>
<span class="quotelev1">&gt;  nervous.
</span><br>
I've noticed it already :)
<br>
<p><span class="quotelev1">&gt;            However, it occurred to me that there is a much better way to
</span><br>
<span class="quotelev1">&gt; test
</span><br>
<span class="quotelev1">&gt;  this code than setting up an environment that generates some out of order
</span><br>
<span class="quotelev1">&gt;  events with out us being able to specify the order.
</span><br>
<span class="quotelev1">&gt;   Since this routine is executed serially, it should be sufficient to set up
</span><br>
<span class="quotelev1">&gt; a test
</span><br>
<span class="quotelev1">&gt;  code that would simulate any out-of-order scenario we want.  If one
</span><br>
<span class="quotelev1">&gt; specifies
</span><br>
<span class="quotelev1">&gt;  number of &#179;messages&#178; to be &#179;sent&#178;, and &#179;randomly&#178; changes the order they
</span><br>
<span class="quotelev1">&gt;  arrive (e.g. scramble some input vector), one can check and see if the
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt;  are &#179;received&#178; in the correct order.  One could even &#179;drop&#178; messages and
</span><br>
<span class="quotelev1">&gt; see
</span><br>
<span class="quotelev1">&gt;  if matching stops.  Using a test code like this, and a code coverage tool,
</span><br>
<span class="quotelev1">&gt; one
</span><br>
<span class="quotelev1">&gt;  should be able to get much better testing that we have to date.
</span><br>
While I sometimes do unit testing for code that I write, in this case it is
<br>
easy to generate all reasonable corner case without isolating the code in a
<br>
separate unit. I run this code through different specially constructed MPI
<br>
application and checked code coverage with gcov. Here is the result:
<br>
<p>File '/home/glebn/OpenMPI/ompi.stg/ompi/mca/pml/ob1/pml_ob1_recvfrag.c'
<br>
Lines executed:97.58% of 124
<br>
<p>Only two lines of the code was never executes, both for error cases that
<br>
should cause abort anyway.
<br>
The pml_ob1_recvfrag.c.gcov with coverage results is attached for
<br>
however is curious enough to look at them. BTW I doubt that previous
<br>
code passed this level of testing. At least with gcov it is not possible
<br>
to generate meaningful results when most of the code is inside macros.
<br>
<p><p><span class="quotelev1">&gt;   What would you think about doing something like this ?   Seems like a few
</span><br>
<span class="quotelev1">&gt; hours
</span><br>
<span class="quotelev1">&gt;  of this sort of simulation would be much better than even years of testing
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;  relying on random fluctuations in the run to thoroughly test out-of-order
</span><br>
<span class="quotelev1">&gt; scenarios.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think ?
</span><br>
I think that coverage testing I did is enough for this code.
<br>
<p><span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/17/07 8:32 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 13, 2007 at 08:04:21PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Yes, should be a bit more clear.  Need an independent way to verify that
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; data is matched
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  in the correct order &#173; sending this information as payload is one way to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; this.  So,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  sending unique data in every message, and making sure that it arrives in
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the user buffers
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  in the expected order is a way to do this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Did that. Encoded sequence number in a payload and sent many eager
</span><br>
<span class="quotelev2">&gt; &gt; packets from one rank to another. Many packets were reoredered, but
</span><br>
<span class="quotelev2">&gt; &gt; application received everything in a correct order.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;                         Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
			Gleb.

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2878/pml_ob1_recvfrag.c.gcov">pml_ob1_recvfrag.c.gcov</a>
</ul>
<!-- attachment="pml_ob1_recvfrag.c.gcov" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2879.php">Jeff Squyres: "[OMPI devel] vt-intergration OS X problem"</a>
<li><strong>Previous message:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2877.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
