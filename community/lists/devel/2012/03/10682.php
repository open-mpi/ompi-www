<?
$subject_val = "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 17:25:59 2012" -->
<!-- isoreceived="20120305222559" -->
<!-- sent="Mon, 5 Mar 2012 17:25:54 -0500" -->
<!-- isosent="20120305222554" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer" -->
<!-- id="49CAE074-F90F-4A04-BE5F-9262FF885DD1_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.4.1203052137380.18433_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Date:</strong> 2012-03-05 17:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I gave it a try (r26103). It was messy, and I hope I got it right. Let's soak it for few days with our nightly testing to see how it behave.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 5, 2012, at 16:37 , N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 5 2012, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was afraid about all those little intermediary steps. I asked a compiler guy and apparently reversing the order (aka starting with the ptrdiff_t variable) will not solve anything. The only portable way to solve this is to cast every single member, to prevent __any__ compiler from hurting us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is true, but even that may not help, given that each version of
</span><br>
<span class="quotelev1">&gt; the C standard has been incompatible with its predecessors.  And see
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my copy of C99, section 6.5 Expressions says &quot; the order of evaluation of subexpressions and the order in which side effects take place are both unspecified. There is a footnote 71 that &quot;specifies the precedence of operators in the evaluation of an expressions, which is the same as the order of the major subclauses of this subclause, highest precedence first.&quot; It is the footnote that implies multiplication (6.5.5 Multiplicative operators) has higher precedence than addition (6.5.6 Additive operators) in the expression &quot;(char*) rbuf + rank * rcount * rext&quot;. But, the main text states that there is no ordering of the subexpression &quot;rank * rcount * rext&quot;. When the compiler chooses to evaluate &quot;rank * rcount&quot; first, the overflow described by Yuki can result. I think you are correct that the subexpression will get promoted to (ptrdiff_t), but that is not quite the same thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it's not as simple as that :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was the intent during the standardisation of C90, but those of
</span><br>
<span class="quotelev1">&gt; us who tried failed to get any explicit statement into it, and the
</span><br>
<span class="quotelev1">&gt; situation during C99 was that &quot;but everybody knows that&quot; the syntax
</span><br>
<span class="quotelev1">&gt; rules also define the evaluation order.  We failed to get that stated
</span><br>
<span class="quotelev1">&gt; then, either :-(  That interpretation was apparently also the one
</span><br>
<span class="quotelev1">&gt; assumed by C++03, too, and now is explicitly (if informally) stated in
</span><br>
<span class="quotelev1">&gt; C++11.  So you theoretically can just cast the first operand to the
</span><br>
<span class="quotelev1">&gt; maximum precision and it will all work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What it means by the &quot;order of evaluation of subexpressions&quot; is that
</span><br>
<span class="quotelev1">&gt; the assignments in '(a = b) + (c = d) + (e = f)' can take place in
</span><br>
<span class="quotelev1">&gt; any order, which is a different issue. 
</span><br>
<span class="quotelev1">&gt; HOWEVER, about half of the C communities have given C99 the thumbs
</span><br>
<span class="quotelev1">&gt; down, I doubt that C11 will be taken much notice of, gcc is the
</span><br>
<span class="quotelev1">&gt; de facto standard definer, and most compilers have optimisation
</span><br>
<span class="quotelev1">&gt; options that say &quot;ignore the standard when it helps to go faster&quot;.
</span><br>
<span class="quotelev1">&gt; So the only feasible rule is to do your damnedest to defend yourself
</span><br>
<span class="quotelev1">&gt; against the aberrations, ambiguities and inconsistencies of C, and
</span><br>
<span class="quotelev1">&gt; hope for the best.  I.e. what George recommends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But will even that work reliably in the medium term?  I wouldn't
</span><br>
<span class="quotelev1">&gt; bet on it :-(
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Previous message:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>In reply to:</strong> <a href="10681.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<li><strong>Reply:</strong> <a href="10720.php">Tomoya Adachi: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
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
