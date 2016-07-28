<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 23:04:44 2015" -->
<!-- isoreceived="20150521030444" -->
<!-- sent="Wed, 20 May 2015 23:04:32 -0400" -->
<!-- isosent="20150521030432" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="CAMJJpkVgRkapOzn1TfnLAD3CuArziQLSYZdFR0DBhK+Ua893WA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="555D2264.2020904_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI collectives algorithm selection<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 23:04:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>There is no need to define a rule for zero-sized messages, it is implicitly
<br>
matched by the first rule. To be extremely pedantic the selection logic for
<br>
the communicator size and message size are identical albeit written
<br>
differently. Both start by selecting rule 0, and then working their way up
<br>
in the corresponding sizes (communicator or messages), moving the matched
<br>
rule until the condition fails (size &lt;  rule size).
<br>
<p>Hopefully this clarifies why in your example the 2 proc communicators are
<br>
using the rule for 4.
<br>
<p>Using 0 as index for an algorithm selection redirect the decision to the
<br>
default, hard-coded, coll_tuned decision function, allowing the dynamic
<br>
rules to fall back to the predefined behavior.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, May 20, 2015 at 8:10 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first i'd like to amend my initial message.
</span><br>
<span class="quotelev1">&gt; i previously wrote the same algo is used to parse rules per communicator
</span><br>
<span class="quotelev1">&gt; size and per message size.
</span><br>
<span class="quotelev1">&gt; this is true, but i missed the part where it is mandatory to define a rule
</span><br>
<span class="quotelev1">&gt; for zero size message.
</span><br>
<span class="quotelev1">&gt; consequently, a given message is either in an interval or its size is more
</span><br>
<span class="quotelev1">&gt; or equal the size of the last rule for a given communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is no such thing for communicator size.
</span><br>
<span class="quotelev1">&gt; for example, if the config file is
</span><br>
<span class="quotelev1">&gt; comm size 4 =&gt; rules A
</span><br>
<span class="quotelev1">&gt; comm size 8 =&gt; rules B
</span><br>
<span class="quotelev1">&gt; communicators of size 2, 4 and 6 will all use rule A.
</span><br>
<span class="quotelev1">&gt; this is very intuitive for comm size 4 and 6, but at first glance, comm
</span><br>
<span class="quotelev1">&gt; size 2 is in a grey area.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other option would be to force the rule file to have a rule for
</span><br>
<span class="quotelev1">&gt; communicators of size 0 (or 1 or two).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, the rules must be sorted by comm size and message size by
</span><br>
<span class="quotelev1">&gt; design, and that looks fair to me.
</span><br>
<span class="quotelev1">&gt; however, there is a grey area for small communicators and i think it
</span><br>
<span class="quotelev1">&gt; should be cleared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/21/2015 1:04 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each rule define an interval with the previous rule, and everything in an
</span><br>
<span class="quotelev1">&gt; interval will be bound the the rule with the next message size. You cannot
</span><br>
<span class="quotelev1">&gt; define a rule for a specific amount. Thus, the fact that the rules must be
</span><br>
<span class="quotelev1">&gt; ordered by message size was done by design.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Returning a NULL rule as suggested by Howard is even more confusing as
</span><br>
<span class="quotelev1">&gt; with this approach you don't even know what is used (as it will
</span><br>
<span class="quotelev1">&gt; automatically fall back to the default decision).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 19, 2015 at 11:57 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  First a disclaimer - I do not know what the intended design was nor
</span><br>
<span class="quotelev2">&gt;&gt; where the design document
</span><br>
<span class="quotelev2">&gt;&gt; for this feature is located.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  However, I would certainly prefer that if the communicator size wasn't
</span><br>
<span class="quotelev2">&gt;&gt; specifically specified
</span><br>
<span class="quotelev2">&gt;&gt;  in the rule file, a fall back do-no-harm algorithm would be selected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Following the KISS principal I would go with 2) returning a NULL rule
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev2">&gt;&gt; there is no matching size in the rule file for the communicator in
</span><br>
<span class="quotelev2">&gt;&gt; question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-05-19 20:05 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - rules must be sorted by communicator size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - within a given communicator size, rules must be sorted by message size
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if not, some rules are silently skipped, which is counter intuitive imho.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) the algo picks the rule with the higher communicator size less or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equal than the current communicator size (same thing for message size).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The exception is if there are no such rule, the first rule is selected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example, if the config file has rules for comm size 4, 8 and 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *but*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; imho, this is also counter intuitive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i would have expected no rule is picked and the default behaviour is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Same thing applies for message sizes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this the intended design ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) can be solved by inserting some qsort calls after parsing the config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) can be solved by returning a NULL rule instead of the first rule ( or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by automatically inserting a rule for comm size 0 (and message size 0) if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no such rule is present in the config file).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17426.php">http://www.open-mpi.org/community/lists/devel/2015/05/17426.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17433.php">http://www.open-mpi.org/community/lists/devel/2015/05/17433.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17438.php">http://www.open-mpi.org/community/lists/devel/2015/05/17438.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17439/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
