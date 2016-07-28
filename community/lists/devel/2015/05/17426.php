<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 23:57:46 2015" -->
<!-- isoreceived="20150520035746" -->
<!-- sent="Tue, 19 May 2015 21:57:35 -0600" -->
<!-- isosent="20150520035735" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="CAF1Cqj7i4Z=Qf2216PmT7y+zy=qcuC1y9upQibv3HftVh7Jzsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="555BEBFF.8040104_at_rist.or.jp" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 23:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17427.php">Howard Pritchard: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17430.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17430.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Gilles,
<br>
<p>First a disclaimer - I do not know what the intended design was nor where
<br>
the design document
<br>
for this feature is located.
<br>
<p>However, I would certainly prefer that if the communicator size wasn't
<br>
specifically specified
<br>
in the rule file, a fall back do-no-harm algorithm would be selected.
<br>
<p>Following the KISS principal I would go with 2) returning a NULL rule when
<br>
there is no matching size in the rule file for the communicator in question.
<br>
<p>Howard
<br>
<p><p>2015-05-19 20:05 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev1">&gt; - rules must be sorted by communicator size
</span><br>
<span class="quotelev1">&gt; - within a given communicator size, rules must be sorted by message size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if not, some rules are silently skipped, which is counter intuitive imho.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) the algo picks the rule with the higher communicator size less or equal
</span><br>
<span class="quotelev1">&gt; than the current communicator size (same thing for message size).
</span><br>
<span class="quotelev1">&gt; The exception is if there are no such rule, the first rule is selected.
</span><br>
<span class="quotelev1">&gt; for example, if the config file has rules for comm size 4, 8 and 16
</span><br>
<span class="quotelev1">&gt; comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev1">&gt; comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev1">&gt; comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev1">&gt; *but*
</span><br>
<span class="quotelev1">&gt; comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev1">&gt; imho, this is also counter intuitive.
</span><br>
<span class="quotelev1">&gt; i would have expected no rule is picked and the default behaviour is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same thing applies for message sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the intended design ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) can be solved by inserting some qsort calls after parsing the config
</span><br>
<span class="quotelev1">&gt; file.
</span><br>
<span class="quotelev1">&gt; 2) can be solved by returning a NULL rule instead of the first rule ( or
</span><br>
<span class="quotelev1">&gt; by automatically inserting a rule for comm size 0 (and message size 0) if
</span><br>
<span class="quotelev1">&gt; no such rule is present in the config file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17427.php">Howard Pritchard: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="17425.php">Gilles Gouaillardet: "[OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17430.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17430.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
