<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 02:15:48 2015" -->
<!-- isoreceived="20150520061548" -->
<!-- sent="Wed, 20 May 2015 15:15:49 +0900" -->
<!-- isosent="20150520061549" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="555C2695.3000203_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 02:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17431.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17429.php">Paul Hargrove: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>i made PR 593 <a href="https://github.com/open-mpi/ompi/pull/593">https://github.com/open-mpi/ompi/pull/593</a> in order to fix 
<br>
this.
<br>
<p>George,
<br>
<p>could you please review this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/20/2015 12:57 PM, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; HI Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First a disclaimer - I do not know what the intended design was nor 
</span><br>
<span class="quotelev1">&gt; where the design document
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
<span class="quotelev1">&gt; 2015-05-19 20:05 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev1">&gt;     - rules must be sorted by communicator size
</span><br>
<span class="quotelev1">&gt;     - within a given communicator size, rules must be sorted by
</span><br>
<span class="quotelev1">&gt;     message size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if not, some rules are silently skipped, which is counter
</span><br>
<span class="quotelev1">&gt;     intuitive imho.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2) the algo picks the rule with the higher communicator size less
</span><br>
<span class="quotelev1">&gt;     or equal than the current communicator size (same thing for
</span><br>
<span class="quotelev1">&gt;     message size).
</span><br>
<span class="quotelev1">&gt;     The exception is if there are no such rule, the first rule is
</span><br>
<span class="quotelev1">&gt;     selected.
</span><br>
<span class="quotelev1">&gt;     for example, if the config file has rules for comm size 4, 8 and 16
</span><br>
<span class="quotelev1">&gt;     comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev1">&gt;     comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev1">&gt;     comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev1">&gt;     *but*
</span><br>
<span class="quotelev1">&gt;     comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev1">&gt;     imho, this is also counter intuitive.
</span><br>
<span class="quotelev1">&gt;     i would have expected no rule is picked and the default behaviour
</span><br>
<span class="quotelev1">&gt;     is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Same thing applies for message sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is this the intended design ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) can be solved by inserting some qsort calls after parsing the
</span><br>
<span class="quotelev1">&gt;     config file.
</span><br>
<span class="quotelev1">&gt;     2) can be solved by returning a NULL rule instead of the first
</span><br>
<span class="quotelev1">&gt;     rule ( or by automatically inserting a rule for comm size 0 (and
</span><br>
<span class="quotelev1">&gt;     message size 0) if no such rule is present in the config file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17426.php">http://www.open-mpi.org/community/lists/devel/2015/05/17426.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17431.php">Ralph Castain: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>Previous message:</strong> <a href="17429.php">Paul Hargrove: "Re: [OMPI devel] Proposal: update Open MPI's version number and release process"</a>
<li><strong>In reply to:</strong> <a href="17426.php">Howard Pritchard: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
