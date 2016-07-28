<?
$subject_val = "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 08:41:02 2010" -->
<!-- isoreceived="20100210134102" -->
<!-- sent="Wed, 10 Feb 2010 10:40:57 -0300" -->
<!-- isosent="20100210134057" -->
<!-- name="Lisandro Dalc&#195;&#173;n" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL" -->
<!-- id="e7ba66e41002100540y5e19cb3fhdc202a042414e2a2_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D3555ADF-DC6F-4B6C-A406-47386E3EE066_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalc&#195;&#173;n (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 08:40:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 February 2010 09:31, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Thanks for the reminder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that from a standards perspective, note that MPI_REDUCE *does* require at least one element -- MPI-2.2 p163:34-35:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &quot;Each process can provide one element, or a sequence of elements...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are you really convinced that such sentence means that zero elements
<br>
is illegal? I have the feeling that this corner case was not taken
<br>
into account at the time that wording was written (wich dates back to
<br>
MPI 1.1 standard).
<br>
<p>Is there a rationale for requiring at least one element? Is this worth
<br>
a change/clarification in the MPI standard?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think that George's assertion is correct: your test code is incorrect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, you have to grant me that a zero-length reduction seems
<br>
something plausible to test. I still think OMPI is following too
<br>
strictly the wording &quot;Each process can provide one element&quot;. Again,
<br>
this sentence comes from MPI-1.1 .
<br>
<p>Please, do not take me wrong. If there is an actual issue with
<br>
zero-length reductions, I want to know about it. Otherwise, I would
<br>
like to ask you to revisit OMPI behavior. I'm still thinking that
<br>
there is no good reason for zero-length reductions to invalid
<br>
operations, they should be just non-op calls.
<br>
<p><span class="quotelev1">&gt; But that's not what is causing your example to fail. &#194;&#160;Here's the issue in OMPI's MPI_Reduce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;} else if ((ompi_comm_rank(comm) != root &amp;&amp; MPI_IN_PLACE == sendbuf) ||
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; (ompi_comm_rank(comm) == root &amp;&amp; ((MPI_IN_PLACE == recvbuf) || (sendbuf == recvbuf)))) {
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;err = MPI_ERR_ARG;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;sendbuf == recvbuf&quot; check is what causes the MPI exception. &#194;&#160;I would say that we're not consistent about disallowing that (e.g., such checks are not in MPI_SCAN and the others you cited).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I understand that. But in the case that zero-length reductions
<br>
were valid, the check should not fall-back there...
<br>
<p><span class="quotelev1">&gt; But FWIW, we do have logic in there because a popular benchmark (IMB) gets it wrong and calls MPI_REDUCE with a zero count (or at least, it used to -- I don't know if it has been checked). &#194;&#160;This is a case where we were backed into a corner because users kept complaining that OMPI was broken because it would fail to run IMB (although the opposite was actually true). &#194;&#160;So even though we didn't want to add the exception, we pretty much had to. &#194;&#160;:-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I see. I understand that IMB is not the MPI standard, but again,
<br>
zero-length reductions is a good candidate for test writers, because
<br>
these folks love corner cases :-)
<br>
<p><p><span class="quotelev1">&gt; Hence, we're not failing your example because of a 0 count -- we're failing your example because you didn't use MPI_IN_PLACE. &#194;&#160;The following works (because of the IMB exception), for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;ierr = MPI_Reduce(
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;(void*) 1, (void*) 2,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;0,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;MPI_INT,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;MPI_SUM,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;0,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>But NULL is a very special case. Using (ptr=NULL,len=0) for
<br>
zero-length arrays is common out there.
<br>
<p>In short, I still think that (sendbuf=NULL,recvbuf=NULL,count=0)
<br>
should work. Not sure about
<br>
(sendbuf=(void*)1,recvbuf=(void*)1,count=0) , but I can imagine cases
<br>
were this would be nice to have (e.g. some dynamic language, or
<br>
library, or even user code that employs a singleton for zero-length
<br>
arrays)
<br>
<p>Special casing Open MPI in my testsuite to disable these tests is just
<br>
a matter of adding two lines,  but before that I would like to have
<br>
some sort of final pronouncement on all this from your side.
<br>
<p><p><pre>
-- 
Lisandro Dalc&#195;&#173;n
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
<li><strong>Next message:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() and bothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7394.php">Jeff Squyres: "Re: [OMPI devel] failure with zero-length Reduce() andbothsbuf=rbuf=NULL"</a>
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
