<?
$subject_val = "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 15:42:15 2012" -->
<!-- isoreceived="20120305204215" -->
<!-- sent="Mon, 5 Mar 2012 15:42:08 -0500" -->
<!-- isosent="20120305204208" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="489C428D-5E84-4B97-8664-92BC2F189F71_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AD891780-B8D7-4383-90C0-121DC2B8A841_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 15:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was afraid about all those little intermediary steps. I asked a compiler guy and apparently reversing the order (aka starting with the ptrdiff_t variable) will not solve anything. The only portable way to solve this is to cast every single member, to prevent __any__ compiler from hurting us.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2012, at 13:40 , Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think Yuki's interpretation is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following is one of the suspicious parts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Many similar code in ompi/coll/tuned/*.c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- in ompi/coll/tuned/coll_tuned_allgather.c (V1.4.X's trunk)---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 398    tmprecv = (char*) rbuf + rank * rcount * rext;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this condition is met, &quot;rank * rcount&quot; is overflowed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, we fixed it tentatively like following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (cast int to size_t)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- in ompi/coll/tuned/coll_tuned_allgather.c --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 398    tmprecv = (char*) rbuf + (size_t)rank * rcount * rext;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Based on my understanding of the C standard this operation should be done on the most extended type, in this particular case the one of the rext (ptrdiff_t). Thus I would say the displacement should be correctly computed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my copy of C99, section 6.5 Expressions says &quot; the order of evaluation of subexpressions and the order in which side effects take place are both unspecified.  There is a footnote 71 that &quot;specifies the precedence of operators in the evaluation of an expressions, which is the same as the order of the major subclauses of this subclause, highest precedence first.&quot;  It is the footnote that implies multiplication (6.5.5 Multiplicative operators) has higher precedence than addition (6.5.6 Additive operators) in the expression &quot;(char*) rbuf + rank * rcount * rext&quot;.  But, the main text states that there is no ordering of the subexpression &quot;rank * rcount * rext&quot;.  When the compiler chooses to evaluate &quot;rank * rcount&quot; first, the overflow described by Yuki can result.  I think you are correct that the subexpression will get promoted to (ptrdiff_t), but that is not quite the same thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10679.php">Larry Baker: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
