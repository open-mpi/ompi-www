<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 09:48:28 2010" -->
<!-- isoreceived="20100210144828" -->
<!-- sent="Wed, 10 Feb 2010 09:48:22 -0500" -->
<!-- isosent="20100210144822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL" -->
<!-- id="58A20ECD-3D04-4BA2-8298-39E2D03629A7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e41002100540y5e19cb3fhdc202a042414e2a2_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 09:48:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7393.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7393.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 8:40 AM, Lisandro Dalc&#237;n wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Note that from a standards perspective, note that MPI_REDUCE *does* require at least one element -- MPI-2.2 p163:34-35:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   &quot;Each process can provide one element, or a sequence of elements...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you really convinced that such sentence means that zero elements
</span><br>
<span class="quotelev1">&gt; is illegal?
</span><br>
<p>As Bill Gropp would say, &quot;there is no legal and illegal -- there is only what is defined by the spec.&quot;  :-)
<br>
<p>The text defines that MPI_REDUCE is supposed to be called with one or more elements.  It does not define what happens when zero elements are used.  It is therefore undefined what happens.  And therefore not portable.  Some MPI's may allow it; some may not.  MPI programmer beware.
<br>
<p><span class="quotelev1">&gt; I have the feeling that this corner case was not taken
</span><br>
<span class="quotelev1">&gt; into account at the time that wording was written (wich dates back to
</span><br>
<span class="quotelev1">&gt; MPI 1.1 standard).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a rationale for requiring at least one element? Is this worth
</span><br>
<span class="quotelev1">&gt; a change/clarification in the MPI standard?
</span><br>
<p>The Forum has been historically resistant to syntactic sugar.  Arguably, you could have a correct program by adding an if statement:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (count &gt; 0) MPI_Reduce(...)
<br>
<p>More specifically: MPI's core functionality revolves around message passing, not providing no-ops.  I feel quite comfortable stating that if you want a no-op, do it in the application (e.g., via an &quot;if&quot; statement).  Put simply: if you don't want a reduction, don't call MPI_REDUCE.
<br>
<p><span class="quotelev2">&gt; &gt; So I think that George's assertion is correct: your test code is incorrect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, you have to grant me that a zero-length reduction seems
</span><br>
<span class="quotelev1">&gt; something plausible to test. I still think OMPI is following too
</span><br>
<span class="quotelev1">&gt; strictly the wording &quot;Each process can provide one element&quot;. Again,
</span><br>
<span class="quotelev1">&gt; this sentence comes from MPI-1.1 .
</span><br>
<p>Er... much of the wording in MPI-2.2 comes from MPI-1.0.  :-)  This one sentence is no different than thousands of others.
<br>
<p><span class="quotelev1">&gt; Please, do not take me wrong. If there is an actual issue with
</span><br>
<span class="quotelev1">&gt; zero-length reductions, I want to know about it. Otherwise, I would
</span><br>
<span class="quotelev1">&gt; like to ask you to revisit OMPI behavior. I'm still thinking that
</span><br>
<span class="quotelev1">&gt; there is no good reason for zero-length reductions to invalid
</span><br>
<span class="quotelev1">&gt; operations, they should be just non-op calls.
</span><br>
<p>You still have to pass a bunch of other stuff to make MPI_REDUCE not cause an MPI exception (such as a valid datatype, etc.).  Why is count&gt;0 any different?
<br>
<p><span class="quotelev2">&gt; &gt; But that's not what is causing your example to fail.  Here's the issue in OMPI's MPI_Reduce:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        } else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE == sendbuf) ||
</span><br>
<span class="quotelev2">&gt; &gt;                   (ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE == recvbuf) || (sendbuf == recvbuf)))) {
</span><br>
<span class="quotelev2">&gt; &gt;            err = MPI_ERR_ARG;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;sendbuf == recvbuf&quot; check is what causes the MPI exception.  I would say that we're not consistent about disallowing that (e.g., such checks are not in MPI_SCAN and the others you cited).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I understand that. But in the case that zero-length reductions
</span><br>
<span class="quotelev1">&gt; were valid, the check should not fall-back there...
</span><br>
<p>Per my above statements, I don't agree with your implication here.  :-)
<br>
<p>And also remember that OMPI *does* allow zero-length reductions, but only because we were bludgeoned into it.  So there is no &quot;fall-back&quot; to the buffer test -- the buffer test is orthogonal to the count test because we allow count==0.
<br>
<p><span class="quotelev1">&gt; But NULL is a very special case. Using (ptr=NULL,len=0) for
</span><br>
<span class="quotelev1">&gt; zero-length arrays is common out there.
</span><br>
<p>Let's be clear: the problem is not that your buffers are NULL.  It's the fact that sendbuf==recvbuf in the call to MPI_REDUCE, regardless of whether they are NULL or something else.
<br>
<p><span class="quotelev1">&gt; In short, I still think that (sendbuf=NULL,recvbuf=NULL,count=0)
</span><br>
<span class="quotelev1">&gt; should work. Not sure about
</span><br>
<span class="quotelev1">&gt; (sendbuf=(void*)1,recvbuf=(void*)1,count=0) , but I can imagine cases
</span><br>
<span class="quotelev1">&gt; were this would be nice to have (e.g. some dynamic language, or
</span><br>
<span class="quotelev1">&gt; library, or even user code that employs a singleton for zero-length
</span><br>
<span class="quotelev1">&gt; arrays)
</span><br>
<p>We don't test pointers for any particular value other than named constants (e.g., MPI_IN_PLACE) because any pointer value could point to a valid buffer when paired with an appropriate datatype.
<br>
<p>As such, NULL is *not* a special case.  It's a potentially valid buffer, just like any other value.
<br>
<p><span class="quotelev1">&gt; Special casing Open MPI in my testsuite to disable these tests is just
</span><br>
<span class="quotelev1">&gt; a matter of adding two lines,  but before that I would like to have
</span><br>
<span class="quotelev1">&gt; some sort of final pronouncement on all this from your side.
</span><br>
<p>What is the purpose of testing 0-length reductions?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7393.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7393.php">Lisandro Dalc&#195;&#173;n: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7395.php">Eugene Loh: "Re: [OMPI devel] failure with zero-length Reduce()	andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7396.php">Lisandro Dalcin: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
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
