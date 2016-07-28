<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 00:10:29 2015" -->
<!-- isoreceived="20150521041029" -->
<!-- sent="Thu, 21 May 2015 00:10:25 -0400" -->
<!-- isosent="20150521041025" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="CAMJJpkU=8A_2Yv1Z99HQ+3QsunDUvm1BHj3YCxwism6=eoLMBw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5t-qc6k9h=2E20TLsKeT3CBxXyorjNZJrzx=u5hC=0q4g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-21 00:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17442.php">Gilles Gouaillardet: "[OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are right, during the reading of the configuration file we are bailing
<br>
out if a rule doesn't start with a zero-length. While the selection logic
<br>
(where I was looking) doesn't have such a restriction (it automatically
<br>
selects the first rule), I consider that forcing the communicator-based
<br>
rules to start with a rule for zero-length messages is solving all issues
<br>
and provides an intuitive approach, one where the user has to cover the
<br>
entire message spectrum.
<br>
<p>&nbsp;George.
<br>
<p><p>On Wed, May 20, 2015 at 11:25 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i understand the logic (even if i still find it counter intuitive, but
</span><br>
<span class="quotelev1">&gt; this is an other story)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if a rule for zero-sized messages is not needed, then there is a bug ...
</span><br>
<span class="quotelev1">&gt;                 if (!nms &amp;&amp; MS) {
</span><br>
<span class="quotelev1">&gt;                     OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;All algorithms
</span><br>
<span class="quotelev1">&gt; must specify a rule for message size of zero upwards always first!\n&quot;));
</span><br>
<span class="quotelev1">&gt;                     OPAL_OUTPUT((ompi_coll_tuned_stream,&quot;Message size was
</span><br>
<span class="quotelev1">&gt; %lu for collective ID %d com rule %d msg rule %d at around line %d\n&quot;, MS,
</span><br>
<span class="quotelev1">&gt; CI, ncs, nms, fileline));
</span><br>
<span class="quotelev1">&gt;                     goto on_file_error;
</span><br>
<span class="quotelev1">&gt;                 }
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
<span class="quotelev1">&gt; On Thu, May 21, 2015 at 12:04 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is no need to define a rule for zero-sized messages, it is
</span><br>
<span class="quotelev2">&gt;&gt; implicitly matched by the first rule. To be extremely pedantic the
</span><br>
<span class="quotelev2">&gt;&gt; selection logic for the communicator size and message size are identical
</span><br>
<span class="quotelev2">&gt;&gt; albeit written differently. Both start by selecting rule 0, and then
</span><br>
<span class="quotelev2">&gt;&gt; working their way up in the corresponding sizes (communicator or messages),
</span><br>
<span class="quotelev2">&gt;&gt; moving the matched rule until the condition fails (size &lt;  rule size).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully this clarifies why in your example the 2 proc communicators are
</span><br>
<span class="quotelev2">&gt;&gt; using the rule for 4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using 0 as index for an algorithm selection redirect the decision to the
</span><br>
<span class="quotelev2">&gt;&gt; default, hard-coded, coll_tuned decision function, allowing the dynamic
</span><br>
<span class="quotelev2">&gt;&gt; rules to fall back to the predefined behavior.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 20, 2015 at 8:10 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first i'd like to amend my initial message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i previously wrote the same algo is used to parse rules per communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size and per message size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is true, but i missed the part where it is mandatory to define a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rule for zero size message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consequently, a given message is either in an interval or its size is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more or equal the size of the last rule for a given communicator.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is no such thing for communicator size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example, if the config file is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm size 4 =&gt; rules A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm size 8 =&gt; rules B
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicators of size 2, 4 and 6 will all use rule A.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is very intuitive for comm size 4 and 6, but at first glance, comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size 2 is in a grey area.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an other option would be to force the rule file to have a rule for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicators of size 0 (or 1 or two).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bottom line, the rules must be sorted by comm size and message size by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; design, and that looks fair to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, there is a grey area for small communicators and i think it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be cleared.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 5/21/2015 1:04 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Each rule define an interval with the previous rule, and everything in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an interval will be bound the the rule with the next message size. You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cannot define a rule for a specific amount. Thus, the fact that the rules
</span><br>
<span class="quotelev3">&gt;&gt;&gt; must be ordered by message size was done by design.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Returning a NULL rule as suggested by Howard is even more confusing as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with this approach you don't even know what is used (as it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically fall back to the default decision).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, May 19, 2015 at 11:57 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HI Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  First a disclaimer - I do not know what the intended design was nor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where the design document
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for this feature is located.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  However, I would certainly prefer that if the communicator size
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wasn't specifically specified
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  in the rule file, a fall back do-no-harm algorithm would be selected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Following the KISS principal I would go with 2) returning a NULL rule
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there is no matching size in the rule file for the communicator in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; question.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015-05-19 20:05 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - rules must be sorted by communicator size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - within a given communicator size, rules must be sorted by message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; size
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if not, some rules are silently skipped, which is counter intuitive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; imho.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) the algo picks the rule with the higher communicator size less or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; equal than the current communicator size (same thing for message size).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The exception is if there are no such rule, the first rule is selected.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for example, if the config file has rules for comm size 4, 8 and 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *but*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; imho, this is also counter intuitive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i would have expected no rule is picked and the default behaviour is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; used.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Same thing applies for message sizes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this the intended design ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1) can be solved by inserting some qsort calls after parsing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; config file.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2) can be solved by returning a NULL rule instead of the first rule (
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or by automatically inserting a rule for comm size 0 (and message size 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if no such rule is present in the config file).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17426.php">http://www.open-mpi.org/community/lists/devel/2015/05/17426.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17433.php">http://www.open-mpi.org/community/lists/devel/2015/05/17433.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17438.php">http://www.open-mpi.org/community/lists/devel/2015/05/17438.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17439.php">http://www.open-mpi.org/community/lists/devel/2015/05/17439.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17440.php">http://www.open-mpi.org/community/lists/devel/2015/05/17440.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17442.php">Gilles Gouaillardet: "[OMPI devel] RFC: how should Open MPI handle link-local addresses"</a>
<li><strong>Previous message:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17440.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
