<?
$subject_val = "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 16:37:44 2012" -->
<!-- isoreceived="20120305213744" -->
<!-- sent="05 Mar 2012 21:37:38 +0000" -->
<!-- isosent="20120305213738" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="Prayer.1.3.4.1203052137380.18433_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="489C428D-5E84-4B97-8664-92BC2F189F71_at_eecs.utk.edu" -->
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
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 16:37:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5 2012, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was afraid about all those little intermediary steps. I asked a 
</span><br>
<span class="quotelev1">&gt; compiler guy and apparently reversing the order (aka starting with the 
</span><br>
<span class="quotelev1">&gt; ptrdiff_t variable) will not solve anything. The only portable way to 
</span><br>
<span class="quotelev1">&gt; solve this is to cast every single member, to prevent __any__ compiler 
</span><br>
<span class="quotelev1">&gt; from hurting us.
</span><br>
<p>That is true, but even that may not help, given that each version of
<br>
the C standard has been incompatible with its predecessors.  And see
<br>
below.
<br>
<p><span class="quotelev2">&gt;&gt; In my copy of C99, section 6.5 Expressions says &quot; the order of 
</span><br>
<span class="quotelev2">&gt;&gt; evaluation of subexpressions and the order in which side effects take 
</span><br>
<span class="quotelev2">&gt;&gt; place are both unspecified. There is a footnote 71 that &quot;specifies the 
</span><br>
<span class="quotelev2">&gt;&gt; precedence of operators in the evaluation of an expressions, which is 
</span><br>
<span class="quotelev2">&gt;&gt; the same as the order of the major subclauses of this subclause, highest 
</span><br>
<span class="quotelev2">&gt;&gt; precedence first.&quot; It is the footnote that implies multiplication (6.5.5 
</span><br>
<span class="quotelev2">&gt;&gt; Multiplicative operators) has higher precedence than addition (6.5.6 
</span><br>
<span class="quotelev2">&gt;&gt; Additive operators) in the expression &quot;(char*) rbuf + rank * rcount * 
</span><br>
<span class="quotelev2">&gt;&gt; rext&quot;. But, the main text states that there is no ordering of the 
</span><br>
<span class="quotelev2">&gt;&gt; subexpression &quot;rank * rcount * rext&quot;. When the compiler chooses to 
</span><br>
<span class="quotelev2">&gt;&gt; evaluate &quot;rank * rcount&quot; first, the overflow described by Yuki can 
</span><br>
<span class="quotelev2">&gt;&gt; result. I think you are correct that the subexpression will get promoted 
</span><br>
<span class="quotelev2">&gt;&gt; to (ptrdiff_t), but that is not quite the same thing.
</span><br>
<p>No, it's not as simple as that :-(
<br>
<p>That was the intent during the standardisation of C90, but those of
<br>
us who tried failed to get any explicit statement into it, and the
<br>
situation during C99 was that &quot;but everybody knows that&quot; the syntax
<br>
rules also define the evaluation order.  We failed to get that stated
<br>
then, either :-(  That interpretation was apparently also the one
<br>
assumed by C++03, too, and now is explicitly (if informally) stated in
<br>
C++11.  So you theoretically can just cast the first operand to the
<br>
maximum precision and it will all work.
<br>
<p>What it means by the &quot;order of evaluation of subexpressions&quot; is that
<br>
the assignments in '(a = b) + (c = d) + (e = f)' can take place in
<br>
any order, which is a different issue. 
<br>
<p>HOWEVER, about half of the C communities have given C99 the thumbs
<br>
down, I doubt that C11 will be taken much notice of, gcc is the
<br>
de facto standard definer, and most compilers have optimisation
<br>
options that say &quot;ignore the standard when it helps to go faster&quot;.
<br>
So the only feasible rule is to do your damnedest to defend yourself
<br>
against the aberrations, ambiguities and inconsistencies of C, and
<br>
hope for the best.  I.e. what George recommends.
<br>
<p>But will even that work reliably in the medium term?  I wouldn't
<br>
bet on it :-(
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10680.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10682.php">George Bosilca: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
