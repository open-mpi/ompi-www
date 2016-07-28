<?
$subject_val = "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 13:40:15 2012" -->
<!-- isoreceived="20120305184015" -->
<!-- sent="Mon, 5 Mar 2012 10:40:10 -0800" -->
<!-- isosent="20120305184010" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="AD891780-B8D7-4383-90C0-121DC2B8A841_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D41C99C6-291C-4D04-8252-6D38DAC50E71_at_eecs.utk.edu" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 13:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I think Yuki's interpretation is correct.
<br>
<p><span class="quotelev2">&gt;&gt; The following is one of the suspicious parts.
</span><br>
<span class="quotelev2">&gt;&gt; (Many similar code in ompi/coll/tuned/*.c)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- in ompi/coll/tuned/coll_tuned_allgather.c (V1.4.X's trunk)---
</span><br>
<span class="quotelev2">&gt;&gt; 398    tmprecv = (char*) rbuf + rank * rcount * rext;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if this condition is met, &quot;rank * rcount&quot; is overflowed.
</span><br>
<span class="quotelev2">&gt;&gt; So, we fixed it tentatively like following:
</span><br>
<span class="quotelev2">&gt;&gt; (cast int to size_t)
</span><br>
<span class="quotelev2">&gt;&gt; --- in ompi/coll/tuned/coll_tuned_allgather.c --------------
</span><br>
<span class="quotelev2">&gt;&gt; 398    tmprecv = (char*) rbuf + (size_t)rank * rcount * rext;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Based on my understanding of the C standard this operation should be  
</span><br>
<span class="quotelev1">&gt; done on the most extended type, in this particular case the one of  
</span><br>
<span class="quotelev1">&gt; the rext (ptrdiff_t). Thus I would say the displacement should be  
</span><br>
<span class="quotelev1">&gt; correctly computed.
</span><br>
<p>In my copy of C99, section 6.5 Expressions says &quot; the order of  
<br>
evaluation of subexpressions and the order in which side effects take  
<br>
place are both unspecified.  There is a footnote 71 that &quot;specifies  
<br>
the precedence of operators in the evaluation of an expressions, which  
<br>
is the same as the order of the major subclauses of this subclause,  
<br>
highest precedence first.&quot;  It is the footnote that implies  
<br>
multiplication (6.5.5 Multiplicative operators) has higher precedence  
<br>
than addition (6.5.6 Additive operators) in the expression &quot;(char*)  
<br>
rbuf + rank * rcount * rext&quot;.  But, the main text states that there is  
<br>
no ordering of the subexpression &quot;rank * rcount * rext&quot;.  When the  
<br>
compiler chooses to evaluate &quot;rank * rcount&quot; first, the overflow  
<br>
described by Yuki can result.  I think you are correct that the  
<br>
subexpression will get promoted to (ptrdiff_t), but that is not quite  
<br>
the same thing.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10678.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
