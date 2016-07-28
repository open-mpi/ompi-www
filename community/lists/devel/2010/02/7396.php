<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 11:41:35 2010" -->
<!-- isoreceived="20100210164135" -->
<!-- sent="Wed, 10 Feb 2010 13:41:29 -0300" -->
<!-- isosent="20100210164129" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL" -->
<!-- id="e7ba66e41002100841l275fd66h5c7f6a515e193614_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="58A20ECD-3D04-4BA2-8298-39E2D03629A7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 11:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 February 2010 11:48, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 10, 2010, at 8:40 AM, Lisandro Dalc&#195;&#173;n wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Note that from a standards perspective, note that MPI_REDUCE *does* require at least one element -- MPI-2.2 p163:34-35:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160; &quot;Each process can provide one element, or a sequence of elements...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you really convinced that such sentence means that zero elements
</span><br>
<span class="quotelev2">&gt;&gt; is illegal?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Bill Gropp would say, &quot;there is no legal and illegal -- there is only what is defined by the spec.&quot; &#194;&#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The text defines that MPI_REDUCE is supposed to be called with one or more elements. &#194;&#160;It does not define what happens when zero elements are used. &#194;&#160;It is therefore undefined what happens. &#194;&#160;And therefore not portable. &#194;&#160;Some MPI's may allow it; some may not. &#194;&#160;MPI programmer beware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the feeling that this corner case was not taken
</span><br>
<span class="quotelev2">&gt;&gt; into account at the time that wording was written (wich dates back to
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1.1 standard).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a rationale for requiring at least one element? Is this worth
</span><br>
<span class="quotelev2">&gt;&gt; a change/clarification in the MPI standard?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Forum has been historically resistant to syntactic sugar. &#194;&#160;Arguably, you could have a correct program by adding an if statement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;if (count &gt; 0) MPI_Reduce(...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically: MPI's core functionality revolves around message passing, not providing no-ops. &#194;&#160;I feel quite comfortable stating that if you want a no-op, do it in the application (e.g., via an &quot;if&quot; statement). &#194;&#160;Put simply: if you don't want a reduction, don't call MPI_REDUCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So I think that George's assertion is correct: your test code is incorrect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, you have to grant me that a zero-length reduction seems
</span><br>
<span class="quotelev2">&gt;&gt; something plausible to test. I still think OMPI is following too
</span><br>
<span class="quotelev2">&gt;&gt; strictly the wording &quot;Each process can provide one element&quot;. Again,
</span><br>
<span class="quotelev2">&gt;&gt; this sentence comes from MPI-1.1 .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er... much of the wording in MPI-2.2 comes from MPI-1.0. &#194;&#160;:-) &#194;&#160;This one sentence is no different than thousands of others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please, do not take me wrong. If there is an actual issue with
</span><br>
<span class="quotelev2">&gt;&gt; zero-length reductions, I want to know about it. Otherwise, I would
</span><br>
<span class="quotelev2">&gt;&gt; like to ask you to revisit OMPI behavior. I'm still thinking that
</span><br>
<span class="quotelev2">&gt;&gt; there is no good reason for zero-length reductions to invalid
</span><br>
<span class="quotelev2">&gt;&gt; operations, they should be just non-op calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You still have to pass a bunch of other stuff to make MPI_REDUCE not cause an MPI exception (such as a valid datatype, etc.). &#194;&#160;Why is count&gt;0 any different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But that's not what is causing your example to fail. &#194;&#160;Here's the issue in OMPI's MPI_Reduce:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;} else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE == sendbuf) ||
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; (ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE == recvbuf) || (sendbuf == recvbuf)))) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;err = MPI_ERR_ARG;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The &quot;sendbuf == recvbuf&quot; check is what causes the MPI exception. &#194;&#160;I would say that we're not consistent about disallowing that (e.g., such checks are not in MPI_SCAN and the others you cited).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I understand that. But in the case that zero-length reductions
</span><br>
<span class="quotelev2">&gt;&gt; were valid, the check should not fall-back there...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per my above statements, I don't agree with your implication here. &#194;&#160;:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And also remember that OMPI *does* allow zero-length reductions, but only because we were bludgeoned into it. &#194;&#160;So there is no &quot;fall-back&quot; to the buffer test -- the buffer test is orthogonal to the count test because we allow count==0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But NULL is a very special case. Using (ptr=NULL,len=0) for
</span><br>
<span class="quotelev2">&gt;&gt; zero-length arrays is common out there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's be clear: the problem is not that your buffers are NULL. &#194;&#160;It's the fact that sendbuf==recvbuf in the call to MPI_REDUCE, regardless of whether they are NULL or something else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK. I mostly agree/accept all your previous comments.
<br>
<p><span class="quotelev2">&gt;&gt; In short, I still think that (sendbuf=NULL,recvbuf=NULL,count=0)
</span><br>
<span class="quotelev2">&gt;&gt; should work. Not sure about
</span><br>
<span class="quotelev2">&gt;&gt; (sendbuf=(void*)1,recvbuf=(void*)1,count=0) , but I can imagine cases
</span><br>
<span class="quotelev2">&gt;&gt; were this would be nice to have (e.g. some dynamic language, or
</span><br>
<span class="quotelev2">&gt;&gt; library, or even user code that employs a singleton for zero-length
</span><br>
<span class="quotelev2">&gt;&gt; arrays)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't test pointers for any particular value other than named constants (e.g., MPI_IN_PLACE) because any pointer value could point to a valid buffer when paired with an appropriate datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As such, NULL is *not* a special case. &#194;&#160;It's a potentially valid buffer, just like any other value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are you assuming here that MPI_BOTTOM do is exactly the same as NULL,
<br>
at least in Open MPI?
<br>
<p>How can (ptr=NULL,count&gt;0,MPI_INT) or other predefined datatypes be a
<br>
valid buffer ? However, with
<br>
(ptr=MPI_BOTTOM,count&gt;0,usr-def-datatype), that's other story...
<br>
<p><span class="quotelev2">&gt;&gt; Special casing Open MPI in my testsuite to disable these tests is just
</span><br>
<span class="quotelev2">&gt;&gt; a matter of adding two lines, &#194;&#160;but before that I would like to have
</span><br>
<span class="quotelev2">&gt;&gt; some sort of final pronouncement on all this from your side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the purpose of testing 0-length reductions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm testing zero-length reductions because MPI implementations can
<br>
potentially support them. My Python wrappers should support as much
<br>
features of the underlying MPI implementation as possible. Then I
<br>
should support zero-length reductions if possible.
<br>
<p>In Python land (specially when third party extension modules written
<br>
in C are involved) and likely other places, a zero-length array is
<br>
something not very well defined... Instances could be singletons (then
<br>
pointers could alias, because this should not be an issue as the array
<br>
length is zero), pointers could be non-NULL and always different (i.e.
<br>
what malloc(0) returns in some platforms), or pointer could be NULL
<br>
(because that's what malloc(0) returns, of because the implemention
<br>
code special-case things by enforcing ptr=NULL,len=0 for zero-length
<br>
array instances).
<br>
<p>As there are different ways to represent a zero-length array using a
<br>
(ptr,len) pair, I tried to make sure by exhaustive testing that all
<br>
the possibilities were working... Such testing or corner cases is not
<br>
easy in general :-). Some thing fails depending on the MPI
<br>
implementation, some other things work but likely by accident. You
<br>
see, I'm suffering the usual nightmares of platform/implementation
<br>
defined behavior :-( ...
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
<li><strong>Next message:</strong> <a href="7397.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
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
