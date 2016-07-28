<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 12:04:34 2015" -->
<!-- isoreceived="20150520160434" -->
<!-- sent="Wed, 20 May 2015 12:04:31 -0400" -->
<!-- isosent="20150520160431" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="CAMJJpkW+0h79-D8t94MJKZCRpBKWyBb6QJnjwJrMJcDO4Zev8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj7i4Z=Qf2216PmT7y+zy=qcuC1y9upQibv3HftVh7Jzsg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-05-20 12:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17434.php">Burette, Yohann: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Each rule define an interval with the previous rule, and everything in an
<br>
interval will be bound the the rule with the next message size. You cannot
<br>
define a rule for a specific amount. Thus, the fact that the rules must be
<br>
ordered by message size was done by design.
<br>
<p>Returning a NULL rule as suggested by Howard is even more confusing as with
<br>
this approach you don't even know what is used (as it will automatically
<br>
fall back to the default decision).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, May 19, 2015 at 11:57 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; HI Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First a disclaimer - I do not know what the intended design was nor where
</span><br>
<span class="quotelev1">&gt; the design document
</span><br>
<span class="quotelev1">&gt; for this feature is located.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I would certainly prefer that if the communicator size wasn't
</span><br>
<span class="quotelev1">&gt; specifically specified
</span><br>
<span class="quotelev1">&gt; in the rule file, a fall back do-no-harm algorithm would be selected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following the KISS principal I would go with 2) returning a NULL rule when
</span><br>
<span class="quotelev1">&gt; there is no matching size in the rule file for the communicator in
</span><br>
<span class="quotelev1">&gt; question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-05-19 20:05 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev2">&gt;&gt; - rules must be sorted by communicator size
</span><br>
<span class="quotelev2">&gt;&gt; - within a given communicator size, rules must be sorted by message size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if not, some rules are silently skipped, which is counter intuitive imho.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) the algo picks the rule with the higher communicator size less or
</span><br>
<span class="quotelev2">&gt;&gt; equal than the current communicator size (same thing for message size).
</span><br>
<span class="quotelev2">&gt;&gt; The exception is if there are no such rule, the first rule is selected.
</span><br>
<span class="quotelev2">&gt;&gt; for example, if the config file has rules for comm size 4, 8 and 16
</span><br>
<span class="quotelev2">&gt;&gt; comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev2">&gt;&gt; comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev2">&gt;&gt; comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev2">&gt;&gt; *but*
</span><br>
<span class="quotelev2">&gt;&gt; comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev2">&gt;&gt; imho, this is also counter intuitive.
</span><br>
<span class="quotelev2">&gt;&gt; i would have expected no rule is picked and the default behaviour is used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Same thing applies for message sizes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this the intended design ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) can be solved by inserting some qsort calls after parsing the config
</span><br>
<span class="quotelev2">&gt;&gt; file.
</span><br>
<span class="quotelev2">&gt;&gt; 2) can be solved by returning a NULL rule instead of the first rule ( or
</span><br>
<span class="quotelev2">&gt;&gt; by automatically inserting a rule for comm size 0 (and message size 0) if
</span><br>
<span class="quotelev2">&gt;&gt; no such rule is present in the config file).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; any thoughts ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17426.php">http://www.open-mpi.org/community/lists/devel/2015/05/17426.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17434.php">Burette, Yohann: "Re: [OMPI devel] Hang in IMB-RMA?"</a>
<li><strong>Previous message:</strong> <a href="17432.php">Edgar Gabriel: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
